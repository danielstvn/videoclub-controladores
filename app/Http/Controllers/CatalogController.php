<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;


class CatalogController extends Controller
{
    public function getIndex(){

		$peliculas['catalogoPeliculas'] = $this ->catalogoPeliculas();

        return view('catalog.index',array('movies'=>$this->getMovies()));
    }

    public function getCreate(){

        return view('catalog.create');
    }

    public function getEdit($id){
 
		return view('catalog.edit',array('movie'=>$this->getMovieId($id))) ;
			
    }

    public function getShow($id){
		
		return view('catalog.show',array('movie'=>$this->getMovieId($id))) ;
			
        
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

	private function getMovies(){
        $movies = Movie::all();

        return $movies;
    }

	private function getMovieId($id){

		$movie = Movie::findOrFail($id);

		//$movie = DB::table('movies') -> where ('id',$id);

        return $movie;
	}

   
}
