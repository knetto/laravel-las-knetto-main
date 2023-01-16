@extends('layouts.app')
@section('content')
    <h3>Alle vliegtuigjes</h3>
    @if (!$vliegtuigjes)
        <p>Iedereen is weggevlogen</p>
    @else
        @foreach ($vliegtuigjes as $vliegtuig)
            <div class="card mx-auto mt-2" style="width: 70%;">
                <div class="card-body ">
                    <h5 class="card-title">{{ $vliegtuig->maatschappij }} <br> {{ $vliegtuig->naam }} {{ $vliegtuig->type }}
                    </h5>
                    <div class="card-text">
                        <br>
                        <p>Vliegtuig toegevoegd:{{ $vliegtuig->created_at }}</p>
                        <small class="text-muted">Laatst bijgewerkt:{{ $vliegtuig->updated_at }}</small>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="/vliegtuig/{{ $vliegtuig->id }}" id="meerVliegtuig" class="btn btn-primary">Lees verder</a>
                </div>
            </div>
        @endforeach
    @endif

@endsection
