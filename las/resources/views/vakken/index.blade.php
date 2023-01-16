@extends('layouts.app')
@section('content')
<h3>Alle vakken</h3>
@if(!$vakken)
    <p>YEEE VRIJ...</p>
@else
    @foreach($vakken as $vakken)
        <div class="card mx-auto" style="width: 30%;">
            <div class="card-body">
                <h5 class="card-title">{{$vakken->vak}}</h5>
                <div class="card-text">
                    <br>
                    <p>vak toegevoegd:{{$vakken->created_at}}</p>
                    <small class="text-muted">Laatst bijgewerkt:{{$vakken->updated_at}}</small>
                </div>
            </div>
            
            <div class="card-footer">
                <a href="/vakken/{{$vakken->id}}" id="moreVakken"
                    class="btn btn-block">Info</a>
            </div>
        </div>            



    @endforeach
@endif

@endsection
