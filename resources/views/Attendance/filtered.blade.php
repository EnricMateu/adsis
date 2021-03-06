@extends('layouts.app')
@section('content')
    <div id="content-list" style="margin-left: 50px">
        <h2>Asistencias por Alumn@</h2>

        <h3>Indicadores</h3>
        <div id='result'></div>
        <br>
        <table> 
            <tr>
                <th>Grupo</th>
                <th>Nombre</th>
                <th>Asist_Id</th>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Comentario</th>
            </tr>
            @foreach ($attendance as $attendance)
                <tr>
                    {{ csrf_field() }}
                    <td>{{$attendance->group}}</td>
                    <td>{{$attendance->name}}</td>
                    <td>{{$attendance->id}}</td>
                    <td>{{$attendance->created_at}}</td>
                    <td>{{$attendance->attendance_type}}</td>
                    <td>{{$attendance->comment}}</td>
                    <td>
                        <form method="GET" action="/attendance/{{$attendance->id}}/edit">
                            <input class="botonLista" type="submit" value="Editar">
                        </form> 
                    </td>              
                </tr>
            @endforeach
        </table>
        <br>
        
    </div>
@endsection

@section('scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script> --}}
<script>
// ejecución grafico tipos asistencia por alumno
  let label=["A", "RJ", "RNJ", "FJ", "FNJ"];
  let colour=['#1acf17', '#dae012', '#e0880b', '#dae012','#e33b24'];
  let gauge = new Gauge;
  gauge.render5Percentages('#result',350, @json($indicators), label, colour);
  
</script>
@endsection