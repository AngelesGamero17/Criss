<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detalleventa;

class DetalleVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalleventas = new Detalleventa();

        $detalleventas->fecha='2005-12-15';
        $detalleventas->costofinal='80';
        $detalleventas->nombre='angeles';
        $detalleventas->cantidad='6';
        $detalleventas->costoProducto='80';
        $detalleventas->id_clientes=1;
        $detalleventas->id_productos=1;
        $detalleventas->save();
    }
}
