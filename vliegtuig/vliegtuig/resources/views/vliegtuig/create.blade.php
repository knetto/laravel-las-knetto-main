@extends('layouts.app')
@section('content')
    {!! Form::open([
        'action' => 'App\Http\Controllers\vliegtuigje\vliegtuigjeController@store',
        'method' => 'POST',
        'files' => 'true',
    ]) !!}

    <div class="card mx-auto" style="width: 90%;">
        <div class="card-body">
            <h5 class="card-title">Nieuw vliegtuigje</h5>
            <div class="card-text">
                <div class="form-group">
                    {{ Form::text('naam', '', ['class' => 'form-control', 'placeholder' => 'Naam']) }}
                </div><br>
                <div class="form-group">
                    {{ Form::number('stoelen', '', ['class' => 'form-control', 'placeholder' => 'Stoelen aantal']) }}
                </div><br>
                <div class="form-group">
                    {{ Form::text('maatschappij', '', ['class' => 'form-control', 'placeholder' => 'Maatschappij']) }}
                </div><br>
                <div class="form-group">
                    {{ Form::text('type', '', ['class' => 'form-control', 'placeholder' => 'Type']) }}
                </div><br>
                <div class="form-group">
                    {{ Form::text('piloot', '', ['class' => 'form-control', 'placeholder' => 'Naam piloot']) }}
                </div><br>
            </div>
            <div class="card-footer">
                {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
                <a href="/vliegtuig" class="btn btn-warning">
                    Annuleren</a>
            </div>
        </div>
        {!! Form::close() !!}
    @endsection
