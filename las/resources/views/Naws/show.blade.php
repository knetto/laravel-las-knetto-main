@extends('layouts.app')
@section('content')
    @if (!$naws)
        <p>Hij is weg man, succes met zoeken...</p>
    @else
        <div class="card mx-auto" style="width: 90%;">
            <div class="card-body">
                <h5 class="card-title">Naam: {{ $naws->roepnaam }}</h5>
                <div class="card-text">
                    <p>{{ $naws->created_at }}</p>
                    <small class="text-muted">Laatst geupdate:
                        {{ $naws->updated_at }}</small>

                </div>
            </div>
            <div class="card-footer row mx-auto">
                <p><b>roepnaam: </b> {{ $naws->roepnaam }}</p>
                <p><b>voorvoegsel: </b> {{ $naws->voorvoegsel }}</p>
                <p><b>achternaam: </b> {{ $naws->achternaam }}</p>
                <p><b>voorletters: </b> {{ $naws->voorletters }}</p>
                <p><b>officielenaam: </b>{{ $naws->officielenaam }}</p>
                <p><b>postcode: </b>{{ $naws->postcode }}</p>
                <p><b>straat: </b>{{ $naws->straat }}</p>
                <p><b>huisnummer: </b>{{ $naws->huisnummer }}</p>
                <p><b>toevoeging: </b>{{ $naws->toevoeging }}</p>
                <p><b>woonplaats: </b>{{ $naws->woonplaats }}</p>
                <hr>




                <?php
                ($conn = new mysqli('localhost', 'root', '', 'las')) or die('Cannot connect to db');
                
                $student_id = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                
                $result = $conn->query("select resultaat,vak_id from resultaats WHERE student_id = $student_id");
                
                echo '<html>';
                echo '<body>';
                echo '<div>cijfers<div>';
                
                while ($row = $result->fetch_assoc()) {
                    $resultaat = $row['resultaat'];
                    $vak_id = $row['vak_id'];
                    echo $resultaat;
                    echo ' ';
                    echo $vak_id;
                    echo '</br>';
                }
                echo '</body>';
                echo '</html>';
                ?>


                {!! Form::open([
                    'action' => ['App\Http\Controllers\Naw\NawController@destroy', $naws->id],
                    'method' => 'POST',
                    'class' => 'pull-right',
                ]) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('DELETE', ['class' => 'btn mr-5']) }}
                {!! Form::close() !!}
                <a href="/naws/{{ $naws->id }}/edit" class="btn mr-5">Edit</a>
                <a href="/naws" class="btn ">Terug</a>


            </div>
        </div>
    @endif
@endsection
