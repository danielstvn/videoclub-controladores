<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         self:: seedCatalogo();

         

         //$this ->comand ->info('Tabla catalogo inicializada con datos');

        
    }

    private function seedCatalogo(){

        $catalogoPeliculas  = json_decode(file_get_contents(public_path().'/catalogo/peliculas.json'),true);

        DB::table('movies')->delete();

            foreach($catalogoPeliculas as $catPelis){
    
                $movie = new Movie();
                $movie->id = $catPelis['id'];
                $movie ->titulo = $catPelis['title'];
                $movie->director = $catPelis['director'];
                $movie ->anio = $catPelis['year'];
                $movie ->rented = $catPelis['rented'];
                $movie ->poster = $catPelis['poster'];
                $movie ->synopsis = $catPelis['synopsis'];

            $movie->save();
    
            }
    }
    
        


    
}
