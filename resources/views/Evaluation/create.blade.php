@extends('layouts.app')
@section('content')

<h3 class="titulo">Autoevaluación</h3>
<p class="titulo"> A valorar de 1 a 5 las siguientes competencias</p>
@if ($errors->any())
<p>Valorar todos los campos</p>
@endif

<div>
    <form id="create" class='formular' action='/evaluation' method='POST'>
        @csrf

            <div class="col-md-12">

                    <div class="slider-item d-md-flex d-sm-none w-100">
                        <div class="col-sm-12 col-md-8 flex-column justify-content-center flex-column">
                            <h3> Aprendizajes Conseguidos</h3>
                            <input class="rango" type="range" value="0" min="0" max="10" step="1">
                        </div>
                        <div class="col-sm-12 col-md-4 d-flex">
                            <div class="number">5</div>
                            <div class="face">😄</div>
                        </div>
                    </div>


                <div class="slider-item d-flex w-100">
                    <div class="col-8 flex-column justify-content-center flex-column">
                        <h3> Aprendizajes Conseguidos</h3>
                        <input class="rango" type="range" value="0" min="0" max="10" step="1">
                    </div>
                    <div class="col-4 d-flex">
                        <div class="number">5</div>
                        <div class="face">😄</div>
                    </div>
                </div>


                <div class="slider-item d-flex w-100">
                    <div class="col-8 flex-column justify-content-center flex-column">
                        <h3> Aprendizajes Conseguidos</h3>
                        <input class="rango" type="range" value="0" min="0" max="10" step="1">
                    </div>
                    <div class="col-4 d-flex">
                        <div class="number">5</div>
                        <div class="face">😄</div>
                    </div>
                </div>


                <div class="slider-item d-flex w-100">
                    <div class="col-8 flex-column justify-content-center flex-column">
                        <h3> Aprendizajes Conseguidos</h3>
                        <input class="rango" type="range" value="0" min="0" max="10" step="1">
                    </div>
                    <div class="col-4 d-flex">
                        <div class="number">5</div>
                        <div class="face">😄</div>
                    </div>
                </div>

            </div>








        <label>Meteo personal:</label>
        <input class="campos" type="value" name="meteo" value="{{$evaluation->meteo}}">

        <br>
        <label>Idioma:</label>
        <input class="campos" type="number" name="language" value="{{$evaluation->language}}">
        <br>
        <label>Actitud:</label>
        <input class="campos" type="number" name="attitude" value="{{$evaluation->attitude}}">
        <br>
        <label>Participación:</label>
        <input class="campos" type="number" name="participation" value="{{$evaluation->participation}}">
        <br>
        <label>Aprendizaje:</label>
        <input class="campos" type="number" name="learning" value="{{$evaluation->learning}}">
        <br>
        <label>Colaboración:</label>
        <input class="campos" type="number" name="collaboration" value="{{$evaluation->collaboration}}">
        <br>
        <input class="campos" type="hidden" name="user_id" value="{{$evaluation->user_id}}">
        <input type="submit" class="boton" value="Enviar">
        <br>
    </form>
</div>
    <script type="application/javascript">



        const range = document.getElementsByClassName('rango');
        const emoji9 = '<img src="http://okgooru.es/pruebas-tecnicas/source/loader.svg">';
        const emoji10 = '<img src="http://okgooru.es/pruebas-tecnicas/source/hand.svg">';
        const mojis = ['😄','🙂','😐','😑','☹️','😩','😠','😡','🤢',emoji9,emoji10];

        for (i = 0; i < range.length; i++){
        let faceDiv = range[i].parentElement.parentElement.querySelector('.face');
        let numberDiv = range[i].parentElement.parentElement.querySelector('.number');

        range[i].addEventListener('input', (e) => {

            let rangeValue = e.target.value;
            faceDiv.innerHTML = mojis[rangeValue];
            numberDiv.innerHTML = rangeValue;

        })};

    </script>
@endsection



