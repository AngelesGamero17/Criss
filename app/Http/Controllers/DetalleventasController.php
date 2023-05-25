<?php

namespace App\Http\Controllers;

use App\Models\Detalleventa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreDetalleventaRequest;

class DetalleventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleventas = Detalleventa::all();
        return view('Detalleventas.index',compact('detalleventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleventa = Detalleventa::all();
        return view('Detalleventas.create',compact('detalleventa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetalleventaRequest $request)
    {
        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();

         Detalleventa::create($validated);
         return redirect()->route('Detalleventas.index');
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
        $detalleventa = Detalleventa::where('id',$id)->first();
        Log::info(($detalleventa));
        return view('Detalleventas.edit',compact('detalleventa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDetalleventaRequest $request, $detalleventas)
    {

        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();
        $detalleventa=Detalleventa::find($detalleventas);
        $detalleventa->fecha=$request->fecha;
        $detalleventa->costofinal=$request->costofinal;
        $detalleventa->nombre=$request->nombre;
        $detalleventa->cantidad=$request->cantidad;
        $detalleventa->costoProducto=$request->costoProducto;
        $detalleventa->id_productos=$request->id_productos;
        $detalleventa->id_clientes=$request->id_clientes;
        $detalleventa->save($validated);
         return redirect()->route('Detalleventas.index');
    }       


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($detalleventa)
    {
        $detalleventa=Detalleventa::find($detalleventa);
        $detalleventa->delete();
        return redirect()->route('Detalleventas.index');
    }
}
