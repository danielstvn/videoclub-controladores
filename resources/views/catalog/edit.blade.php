@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
    <div style="width:100%">
       <h1>Editar pelicula</h1>

        
       <form method="POST" action="{{url('/catalog/edit')}}">
        {{-- agrega un campo oculto con el token del usuario CSRF --}}
                    
        @csrf

            <input id="id" name="id" type="hidden" value="{{$movie['id']}}">

            <table class="table table-striped">
                <tr>
                    <th>titulo</th>
                    <td>
                
                        <input type="text" name="title" class="form-control" value="{{$movie['title']}}">
                    </td>
                </tr>
                <tr>
                    <th>Año</th>
                    <td>
                        <input type="text" name="anio" class="form-control" value="{{$movie['year']}}" >
                    </td>
                </tr>
                <tr>
                    <th>Director</th>
                    <td>
                        <input type="text"  name="director" class="form-control"  value="{{$movie['director']}}">
                    </td>
                </tr>
    
                <tr>
                    <th>Poster</th>
                    <td>
                        <input type="text" name="poster" class="form-control"  value="{{$movie['poster']}}">
                    </td>
                </tr>
    
                <tr>
                    <th>Resumen</th>
                    <td>
                        <textarea class="form-control" name="synopsis" id="exampleFormControlTextarea1" rows="10"  >
                            {{$movie['synopsis']}}
                        </textarea>
                    </td>
                </tr>
            </table>
        </div>

        <div style="margin-top:30px; text-align: center">
       

            <button class="btn btn-warning" type="submit">Guardar Cambios</button>
    
            <a href="/catalog" type="button" class="btn btn-secondary" >
               Volver al Listado
            </a>
         
         
        </div>

       </form>

    
 </div>
 
@stop