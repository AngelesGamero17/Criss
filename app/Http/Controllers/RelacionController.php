<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Descuento;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\Detalleventa;

use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        $descuentos = Descuento::all();
        $productos = Producto::all();
        $clientes = Cliente::all();
        $detalleventas = Detalleventa::all();
        return view('/auth.login', compact('categorias','descuentos','productos','clientes','detalleventas'));

    }

}