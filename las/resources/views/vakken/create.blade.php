@extends('layouts.app')
@section('content')
{!! Form::open(['action' =>
    'App\Http\Controllers\vakken\vakkenController@store','method' => 'POST',
    'files'=> 'true'])!!}

    <div class="card mx-auto" style="width: 90%;">
        <div class="card-body">
            <h5 class="card-title">Nieuwe vakken</h5>
            <div class="card-text">
                <div class="form-group">
                    {{Form:: text('vak','',['class' => 'form-control',
                    'placeholder' => 'Vak'])}}
                </div><br>
            </div>
        <div class="card-footer">
            {{Form::submit('Submit',['class' =>
            'btn btn-block'])}}
            <a href="/naws" class="btn btn-block">
            Annuleren</a>
        </div>
    </div>
    {!! Form::close()!!}
@endsection    


