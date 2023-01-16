@extends('layouts.app')
@section('content')
{!! Form::open(['action' =>
    'App\Http\Controllers\resultaat\resultaatController@store','method' => 'POST',
    'files'=> 'true'])!!}

    <div class="card mx-auto" style="width: 90%;">
        <div class="card-body">
            <h5 class="card-title">Nieuwe resultaten</h5>
            <div class="card-text">

                <?php
                $conn = new mysqli('localhost', 'root', '', 'las') 
                or die ('Cannot connect to db');

                    $result = $conn->query("select roepnaam,id from naws");

                    echo "<html>";
                    echo "<body>";
                    echo "<select name='roepnaam'>";

                    while ($row = $result->fetch_assoc()) {

                                unset($naam);
                                unset($id);
                                $roepnaam = $row['roepnaam']; 
                                $id = $row['id']; 
                                echo '<option value="'.$id.'">'.$roepnaam.'</option>';

                }

                    echo "</select>";
                    echo "</body>";
                    echo "</html>";
                ?>  
                
                <?php
                $conn = new mysqli('localhost', 'root', '', 'las') 
                or die ('Cannot connect to db');

                    $result = $conn->query("select vak,id from vakkens");

                    echo "<html>";
                    echo "<body>";
                    echo "<select name='vak'>";

                    while ($row = $result->fetch_assoc()) {

                                unset($vak);
                                unset($id);
                                $vak = $row['vak']; 
                                $id = $row['id']; 
                                echo '<option value="'.$vak.'">'.$vak.'</option>';

                }

                    echo "</select>";
                    echo "</body>";
                    echo "</html>";
                ?>  



                <div class="form-group">
                    {{Form:: number('resultaat','',['class' => 'form-control',
                    'placeholder' => 'resultaat'])}}
                </div><br>

            </div>
        <div class="card-footer">
            {{Form::submit('Submit',['class' =>
            'btn btn-block'])}}
            <a href="/resultaat/create" class="btn btn-block">
            Annuleren</a>
        </div>
    </div>
    {!! Form::close()!!}
@endsection    


