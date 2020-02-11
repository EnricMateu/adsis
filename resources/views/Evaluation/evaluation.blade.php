@extends('layouts.app')
@section('content')
    <div id="content-list" style="margin-left: 50px">
        <h1>Lista de Evaluaciones</h1>
        <table> 
            <tr>
                <th>Alumno</th>
                <th>Idioma</th>
                <th>Actitud</th>
                <th>Aprendizajes</th>
                <th>Dinámica trabajo</th>
                <th>Meteo</th>
                <th>Id Curso</th>
                <th>Ámbito</th>
                <th>Estado</th>
                <th>Fecha actualización</th>
            </tr>
            @foreach ($evaluations as $evaluation)
                <tr>
                    {{ csrf_field() }}
                    <td>{{$evaluation->user_id}}</td>
                    <td>{{$evaluation->language}}</td>
                    <td>{{$evaluation->attitude}}</td>
                    <td>{{$evaluation->learning}}</td>
                    <td>{{$evaluation->workflow}}</td>
                    <td>{{$evaluation->meteo}}</td>
                    <td>{{$evaluation->course_catalog_id}}</td>
                    <td>{{$evaluation->scope}}</td>
                    <td>{{$evaluation->filled}}</td>
                    <td>{{$evaluation->updated_at}}</td>                   
                </tr>
            @endforeach
        </table>
        <div>
            <br>
            <a href="/home">Home</a>
        </div>
    </div>

@endsection