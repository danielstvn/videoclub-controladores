@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="{{ url('/assets/estilos/css/estilos.css')}}">

<div class="titulo">
    <h1>Club de Peliculas </h1>
</div>


<div class="container-slider">
            <div class="slider" id="slider">
                
                <div class="slider-section">
                    <img src="{{ url('/assets/images/img1.jpg')}}" alt="imagen pelicula">
                    
                </div>

                <div class="slider-section">
                    <img src="{{ url('/assets/images/img2.jpg')}}" alt="imagen pelicula">
                    
                </div>

                <div class="slider-section">
                    <img src="{{ url('/assets/images/img3.jpeg')}}" alt="imagen perro">
                    
                </div>

            </div>

            <div class="slider-btn" id="btn-right" onclick="Next()">&#62;</div>
            <div class="slider-btn" id="btn-left" onclick="Preview()">&#60;</div>
           
        </div>

        <script src="{{url('/assets/estilos/js/script.js')}}"></script>

        
    
@stop