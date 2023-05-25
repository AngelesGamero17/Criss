<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreDescuentoRequest;

class DescuentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descuentos = Descuento::all();
        return view('Descuentos.index',compact('descuentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $descuentos = Descuento::all();
        return view('Descuentos.create',compact('descuentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDescuentoRequest $request)
    {
        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();

         Descuento::create($validated);
         return redirect()->route('Descuentos.index');
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $descuentos = Descuento::where('id',$id)->first();
        Log::info(($descuentos));
        return view('Descuentos.edit',compact('descuentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDescuentoRequest $request, $descuentos)
    {

        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();
        $descuentos=Descuento::find($descuentos);
        $descuentos->porcentaje=$request->porcentaje;
        $descuentos->save($validated);
         return redirect()->route('Descuentos.index');
    }   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($descuento)
    {
        $descuento=Descuento::find($descuento);
        $descuento->delete();
        return redirect()->route('Descuentos.index');
    }
}
