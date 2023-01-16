@extends('layouts.app')
@section('content')
    @if (!$vliegtuigjes)
        <p>Hij is weg man, succes met zoeken...</p>
    @else
        <div class="card mx-auto" style="width: 70%;">
            <div class="card-body">
                <h5 class="card-title">Naam: {{ $vliegtuigjes->roepnaam }}</h5>
                <div class="card-text">
                    <p>{{ $vliegtuigjes->created_at }}</p>
                    <small class="text-muted">Laatst geupdate:
                        {{ $vliegtuigjes->updated_at }}</small>

                </div>
            </div>
            <div class="card-footer row mx-auto">
                <p><b>naam: </b> {{ $vliegtuigjes->naam }}</p>
                <p><b>stoelen: </b> {{ $vliegtuigjes->stoelen }}</p>
                <p><b>maatschappij: </b> {{ $vliegtuigjes->maatschappij }}</p>
                <p><b>type: </b> {{ $vliegtuigjes->type }}</p>
                <p><b>piloot: </b>{{ $vliegtuigjes->piloot }}</p>

                <a href="/vliegtuig/{{ $vliegtuigjes->id }}/edit" class="btn btn-success mt-1">Edit</a>
                <a href="/vliegtuig" class="btn btn-primary mt-1">Terug</a>

                {!! Form::open([
                    'action' => ['App\Http\Controllers\vliegtuigje\vliegtuigjeController@destroy', $vliegtuigjes->id],
                    'method' => 'POST',
                    'class' => 'pull-right',
                ]) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('DELETE', ['class' => 'btn btn-danger mt-1']) }}
                {!! Form::close() !!}

                


            </div>
        </div>
    @endif
@endsection
