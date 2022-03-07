<?php

namespace App\Http\Controllers;

use DeepCopy\f001\A;
use Illuminate\Http\Request;

class CatalogProcessController extends Controller
{
    public function addMovie(Request $request){

        $arrayPeliculas = json_decode(file_get_contents(public_path().'/catalogo/peliculas.json'),true);

        $titulo = request('title');
        $anio = request('anio');
        $director = request('director');
        $poster = $request->get('poster');
        $synopsis = $request->get('synopsis');
        $id_newMovie = sizeof($arrayPeliculas) ;

        $newMovie = array(
            array(
                'id' => $id_newMovie,
                'title' => $titulo,
                'year' => $anio, 
                'director' => $director, 
                'poster' => $poster, 
                'rented' => false, 
                'synopsis' => $synopsis
                )
            );

        $json = json_encode(array_merge($arrayPeliculas,$newMovie));

        file_put_contents(public_path().'/catalogo/peliculas.json',$json);

        $mensaje = "Se creo una nueva Pelicula Coreectamente! :)";


        return view('catalog.create');
    }

    public function editMovie(Request $request){

        $arrayPeliculas = json_decode(file_get_contents(public_path().'/catalogo/peliculas.json'),true);

        $titulo = request('title');
        $anio = request('anio');
        $director = request('director');
        $poster = $request->get('poster');
        $synopsis = $request->get('synopsis');
        $id_movie = $request->get('id');

        foreach($arrayPeliculas as $key => $catPelis){

			if($id_movie == $catPelis['id']){

				$arrayPeliculas[$key]['title'] = $titulo;
                $arrayPeliculas[$key]['year'] = $anio;
                $arrayPeliculas[$key]['director'] = $director;
                $arrayPeliculas[$key]['poster'] = $poster;
                $arrayPeliculas[$key]['synopsis'] = $synopsis;

			}

		}
        

        $json = json_encode($arrayPeliculas);

        file_put_contents(public_path().'/catalogo/peliculas.json',$json);

        $mensaje = "Pelicula Modificada Coreectamente! :)";

        echo "<script> alert('".$mensaje."'); </script>";
     return view('catalog.edit',$this -> buscarPelicula($id_movie)) ;;
    }

    private function buscarPelicula($id){

		$catalogoPeliculas = $this ->catalogoPeliculas();
		foreach($catalogoPeliculas as $key => $catPelis){

			if($id == $catPelis['id']){

				$pelicula['movie'] = $catPelis;

				return $pelicula;
			}

		}
	}

	private function catalogoPeliculas(){

		//include_once (public_path().'/catalogo/peliculas.php');


		$arrayPeliculas = json_decode(file_get_contents(public_path().'/catalogo/peliculas.json'),true);
		

		return $arrayPeliculas;
	}
}
