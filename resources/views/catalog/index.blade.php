@extends('layouts.master')

@section('content')
<div class="row">
    @foreach( $movies as  $pelicula )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
    <a href="{{ url('/catalog/show/' . $pelicula['id'] ) }}">
    <img src="{{$pelicula['poster']}}" style="height:200px"/>
    <h3 style="min-height:45px;margin:5px 0 10px 0">
    {{$pelicula['titulo']}}
    </h3>
    </a>
    </div>
    @endforeach
    </div>
@stop