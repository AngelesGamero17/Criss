<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreProductoRequest;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('Productos.index',compact('productos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        return view('Productos.create',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();

         Producto::create($validated);
         return redirect()->route('Productos.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::where('id',$id)->first();
        Log::info(($productos));
        return view('Productos.edit',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductoRequest $request, $productos)
    {

        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();
        $productos=Producto::find($productos);
        $productos->nombre=$request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->estado=$request->estado;
        $productos->precio=$request->precio;
        $productos->stock=$request->stock;
        $productos->imagen=$request->imagen;
        $productos->id_categorias=$request->id_categorias;
        $productos->id_descuentos=$request->id_descuentos;
        $productos->save($validated);
         return redirect()->route('Productos.index');
    }       


    /**
     * 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productos)
    {
        $productos=Producto::find($productos);
        $productos->delete();
        return redirect()->route('Productos.index');
    }
}
