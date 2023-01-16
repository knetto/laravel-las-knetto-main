@extends('layouts.app');
@section('content')
{!! Form::open(['action' => [
    'App\Http\Controllers\vakken\vakkenController@update',$vakken->id],
    'method' => 'POST']) !!}

<div class="card mx-auto" style="width: 70%;">
    <div class="card-body">
        <h5 class="card-title">Bewerk vak</h5>
        <div class="card-text">
            <p>{{$vakken->roepnaam}}</p>
                <div class="form-group">
                    {{Form:: text('vak',$vakken->vak,
                    ['class' => 'form-control','placeholder' => 'vak'])}}
                </div>
            </div>
        </div>        
    </div>
    <div class="card-footer">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update',['class' => 'btn btn-block'])}}
        <br>
        <a href="/vakken/{{$vakken->id}}" class="btn">Annuleren</a>       


    </div>
</div>
{!!Form::close()!!}
@endsection                
