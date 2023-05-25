<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $categorias = new Categoria();

        $categorias->nombCategoria='Metal';
        $categorias->save();

        $categorias2 = new Categoria();
        $categorias2->nombCategoria='Plastico';
        $categorias2->save();


    }
}
