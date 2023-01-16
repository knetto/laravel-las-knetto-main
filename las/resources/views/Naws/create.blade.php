@extends('layouts.app')
@section('content')
{!! Form::open(['action' =>
    'App\Http\Controllers\Naw\NawController@store','method' => 'POST',
    'files'=> 'true'])!!}

    <div class="card mx-auto" style="width: 90%;">
        <div class="card-body">
            <h5 class="card-title">Nieuwe Student</h5>
            <div class="card-text">
                <div class="form-group">
                    {{Form:: text('roepnaam','',['class' => 'form-control',
                    'placeholder' => 'Roepnaam'])}}
                </div><br>
                <div class="form-group">
                    {{Form:: text('voorvoegsel','',['class' => 'form-control',
                    'placeholder' => 'Voorvoegsel'])}}
                </div><br>
                <div class="form-group">
                    {{Form:: text('achternaam','',['class' => 'form-control',
                    'placeholder' => 'Achternaam'])}}
                </div><br>
                <div class="form-group">
                    {{Form:: text('voorletters','',['class' => 'form-control',
                    'placeholder' => 'Voorletters'])}}
                </div><br>
                <div class="form-group">
                    {{Form:: text('officielenaam','',['class' => 'form-control',
                    'placeholder' => 'Officielenaam'])}}
                </div><br>
                <div class="form-group">
                    {{Form:: text('postcode','',['class' => 'form-control',
                    'placeholder' => 'Postcode'])}}
                </div><br>
                <div class="form-group">
                    {{Form:: text('straat','',['class' => 'form-control',
                    'placeholder' => 'Straat']) }}
                </div><br>
                <div class="form-group">
                    {{Form:: number('huisnummer','',['class' => 'form-control',
                    'placeholder' => 'Huisnummer'])}}
                </div><br>
                <div class="form-group">
                    {{Form:: text('toevoeging','',['class' => 'form-control',
                    'placeholder' => 'Toevoeging'])}}
                </div><br>
                <div class="form-group">
                    {{Form:: text('woonplaats','',['class' => 'form-control',
                    'placeholder' => 'Woonplaats'])}}
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


