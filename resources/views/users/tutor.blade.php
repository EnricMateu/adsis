@extends('layouts.app')

@section('content')
<div class="container">

    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="./img/faces/kendall.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h3 class="title">Tutor {{-- {{ Auth::user()->name }} --}}</h3>

                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                        <a href="/course/create">Asignar Alum@s a Cursos</a>
                        <br>
                        <a href="/course">Relación Alumn@s y Cursos</a>
                        <br>
                        <a href="/courseCatalog">Catalogo de cursos</a>
                        <br>
                        <a href="/evaluation">Lista de Evaluaciones</a>
                        <br>
                        <a href="/evaluation/create">Crear Revisión</a>
                        <br>
                        <a href="/attendance">Lista de Asistencias</a>
                        <br>
                        <a href="/attendance/create">Crear Hoja Asistencia</a>
                        <br>
                        <a href="filter">Filtrar Asistencias</a>
                        <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
