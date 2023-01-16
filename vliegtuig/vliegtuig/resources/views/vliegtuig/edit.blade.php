@extends('layouts.app');
@section('content')
{!! Form::open(['action' => [
    'App\Http\Controllers\vliegtuigje\vliegtuigjeController@update',$vliegtuigjes->id],
    'method' => 'POST']) !!}

<div class="card mx-auto" style="width: 70%;">
    <div class="card-body">
        <h5 class="card-title">Bewerk vliegtuigjes</h5>
        <div class="card-text">
            <p>{{$vliegtuigjes->naam}}</p>
                <div class="form-group ">
                    {{Form:: text('naam',$vliegtuigjes->naam,
                    ['class' => 'form-control','placeholder' => 'Naam'])}}
                </div>
                <div class="form-group mt-2">
                    {{Form:: text('stoelen',$vliegtuigjes->stoelen,['class' => 'form-control',
                    'placeholder' => 'Stoelen'])}}
                </div>
                <div class="form-group mt-2">
                    {{Form:: text('maatschappij',$vliegtuigjes->maatschappij,['class' => 'form-control',
                    'placeholder' => 'Maatschappij'])}}
                </div>
                <div class="form-group mt-2">
                    {{Form:: text('type',$vliegtuigjes->type,['class' => 'form-control',
                    'placeholder' => 'Type'])}}
                </div>
                <div class="form-group mt-2">
                    {{Form:: text('piloot',$vliegtuigjes->piloot,['class' => 'form-control',
                    'placeholder' => 'Piloot'])}}
                </div>
            </div>
        </div>        
    </div>
    <div class="card-footer">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update',['class' => 'btn btn-success mt-1'])}}
        <br>
        <a href="/vliegtuig/{{$vliegtuigjes->id}}" class="btn btn-danger mt-1">Annuleren</a>       


    </div>
</div>
{!!Form::close()!!}
@endsection                
