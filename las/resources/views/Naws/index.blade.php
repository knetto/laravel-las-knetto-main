@extends('layouts.app')
@section('content')
<link type="text/css" href="./layouts/style.css"/>
<h3>Alle Studenten</h3>
@if(!$naws)
    <p>Iedereen is weg</p>
@else
    @foreach($naws as $student)
        <div class="card mx-auto" style="width: 30%;">
            <div class="card-body">
                <h5 class="card-title">{{$student->roepnaam}} {{$student->achternaam}}</h5>
                <div class="card-text">
                    <br>
                    <p>Student toegevoegd:{{$student->created_at}}</p>
                    <small class="text-muted">Laatst bijgewerkt:{{$student->updated_at}}</small>
                </div>
            </div>
            
            <div class="card-footer">
                <a href="/naws/{{$student->id}}" id="moreStudent"
                    class="btn btn-block">Info</a>
            </div>
        </div>            



    @endforeach
@endif

@endsection
