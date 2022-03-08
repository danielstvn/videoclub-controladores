@extends('layouts.master')

@section('content')
    
<div class="row">

    <div style="width:40%; ">
        <img src="{{$movie['poster']}}" 
        style="
        height:400px;
        widht:300"/>
    
    </div>
    
    <div style="width:57%; position:relative; margin-left: 20px">

        <h2 style="min-height:45px;margin:5px 0 10px 0">
            {{$movie['titulo']}}
        
        </h2>
        <br>
        <h4>
            Año: {{$movie['anio']}}
            <br>
            Director: {{$movie['director']}}
        </h4>

        <p style= "text-align:justify">
            <b>Resumen:</b> {{$movie['synopsis']}}
        </p>
        <p >
            <b>Estado:</b> 
        </p>
    </div>

    <div style="margin-top:30px; text-align: right">
       
        <a href="/catalog" type="button" class="btn btn-danger">Devolver pelicula</a>

        <a href="/catalog/edit/{{$movie['id']}}" type="button" class="btn btn-warning">Editar pelicula</a>

        <a href="/catalog" type="button" class="btn btn-secondary" >
           Volver al Listado
        </a>
     
     
    </div>

</div>

@stop