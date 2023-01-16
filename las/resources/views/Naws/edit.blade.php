@extends('layouts.app');
@section('content')
{!! Form::open(['action' => [
    'App\Http\Controllers\Naw\NawController@update',$naws->id],
    'method' => 'POST']) !!}

<div class="card mx-auto" style="width: 70%;">
    <div class="card-body">
        <h5 class="card-title">Bewerk student</h5>
        <div class="card-text">
            <p>{{$naws->roepnaam}}</p>
                <div class="form-group">
                    {{Form:: text('roepnaam',$naws->roepnaam,
                    ['class' => 'form-control','placeholder' => 'Roepnaam'])}}
                </div>
                <div class="form-group">
                    {{Form:: text('voorvoegsel',$naws->voorvoegsel,['class' => 'form-control',
                    'placeholder' => 'Voorvoegsel'])}}
                </div>
                <div class="form-group">
                    {{Form:: text('achternaam',$naws->achternaam,['class' => 'form-control',
                    'placeholder' => 'Achternaam'])}}
                </div>
                <div class="form-group">
                    {{Form:: text('voorletters',$naws->voorletters,['class' => 'form-control',
                    'placeholder' => 'Voorletters'])}}
                </div>
                <div class="form-group">
                    {{Form:: text('officielenaam',$naws->officielenaam,['class' => 'form-control',
                    'placeholder' => 'Officielenaam'])}}
                </div>
                <div class="form-group">
                    {{Form:: text('postcode',$naws->postcode,['class' => 'form-control',
                    'placeholder' => 'Postcode'])}}
                </div>
                <div class="form-group">
                    {{Form:: text('straat',$naws->straat,['class' => 'form-control',
                    'placeholder' => 'Straat']) }}
                </div>
                <div class="form-group">
                    {{Form:: number('huisnummer',$naws->huisnummer,['class' => 'form-control',
                    'placeholder' => 'Huisnummer'])}}
                </div>
                <div class="form-group">
                    {{Form:: text('toevoeging',$naws->toevoeging,['class' => 'form-control',
                    'placeholder' => 'Toevoeging'])}}
                </div>
                <div class="form-group">
                    {{Form:: text('woonplaats',$naws->woonplaats,['class' => 'form-control',
                    'placeholder' => 'Woonplaats'])}}
                </div>
            </div>
        </div>        
    </div>
    <div class="card-footer">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update',['class' => 'btn btn-block'])}}
        <br>
        <a href="/naws/{{$naws->id}}" class="btn">Annuleren</a>       


    </div>
</div>
{!!Form::close()!!}
@endsection                
