<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CatalogController extends Controller
{
    public function getIndex(){

		$peliculas['catalogoPeliculas'] = $this ->catalogoPeliculas();

        return view('catalog.index',$peliculas);
    }

    public function getCreate(){

        return view('catalog.create');
    }

    public function getEdit($id){
 
		return view('catalog.edit',$this -> buscarPelicula($id)) ;
			
    }

    public function getShow($id){
		
		return view('catalog.show',$this -> buscarPelicula($id)) ;
			
        
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
