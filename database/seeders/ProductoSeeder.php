<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = new Producto();

        $productos->nombre='tv';
        $productos->descripcion='azul ';
        $productos->estado='1';
        $productos->precio='6';
        $productos->stock='4';
        $productos->imagen='lol.png';
        $productos->id_categorias=1;
        $productos->id_descuentos=1;
        $productos->save();
    }
}
