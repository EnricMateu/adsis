@extends('layouts.app')
@section('content')
    <div id="content-list" style="margin-left: 50px">
        <h1>Relación de alumn@s y cursos </h1>
        <table> 
            <tr>
                <th>Identificador</th>
                <th>Curso del catálogo</th>
                <th>Alumn@</th>
                <th>Fecha de alta</th> 
            </tr>
            @foreach ($course as $course)
                <tr>
                    {{ csrf_field() }}
                    <td>{{$course->id}}</td>
                    <td>{{$course->courseCatalog->name}}</td>
                    <td>{{$course->user->name}}</td>
                    <td>{{$course->created_at}}</td>
                    {{-- <td>{{$user->name}}</td>        --}}
                    <td>
                        {{-- <form method="GET" action="/course/{{$course->id}}/edit">
                            <input class="botonLista" type="submit" value="Editar">
                        </form>  --}}
                    </td>
                </tr>
            @endforeach
        </table>
    <div>
    </div style="margin-left: 50px">
       
    </div>

@endsection