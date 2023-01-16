@extends('layouts.app')
@section('content')
    @if (!$vakken)
        <p>Hij is weg man, succes met zoeken...</p>
    @else
        <div class="card mx-auto" style="width: 90%;">
            <div class="card-body">
                <h5 class="card-title">vak: {{ $vakken->vak }}</h5>
                <div class="card-text">
                    <p>{{ $vakken->created_at }}</p>
                    <small class="text-muted">Laatst geupdate:
                        {{ $vakken->updated_at }}</small>

                </div>
            </div>
            <div class="card-footer row mx-auto">
                <p><b>vak: </b> {{ $vakken->vak }}</p>
                <hr>
                {!! Form::open([
                    'action' => ['App\Http\Controllers\vakken\vakkenController@destroy', $vakken->id],
                    'method' => 'POST',
                    'class' => 'pull-right',
                ]) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('DELETE', ['class' => 'btn btn-outline-dark mr-5']) }}
                {!! Form::close() !!}
                <a href="/vakken/{{ $vakken->id }}/edit" class="btn  btn-outline-info mr-5">Edit</a>
                <a href="/vakken" class="btn  ">Terug</a>


            </div>
        </div>
    @endif
@endsection
