<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $clientes = new Cliente();

        $clientes->nombre='Angeles';
        $clientes->apellido='Gamero';
        $clientes->celular='944654911';
        $clientes->correo='ang@gmail.com';
        $clientes->direccion='Cooperativa Santa Isabel';
        $clientes->dni='74485304';
        $clientes->apellido='correo';
        $clientes->save();
    }
}
