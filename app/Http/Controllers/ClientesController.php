<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreClienteRequest;
use Illuminate\Auth\Events\Validated;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('Clientes.index',compact('clientes'));
    }

    public function buscar(Request $request)
{
    $query = $request->input('query');

    $clientes = Cliente::where('nombre', 'like', "%$query%")
                    ->orWhere('apellido', 'like', "%$query%")
                    ->orWhere('celular', 'like', "%$query%")
                    ->orWhere('direccion', 'like', "%$query%")
                    ->orWhere('dni', 'like', "%$query%")
                    ->orWhere('correo', 'like', "%$query%")
                    ->get();

    return response()->json($clientes);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('Clientes.create',compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();

         Cliente::create($validated);
         return redirect()->route('Clientes.index');  
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
        $clientes = Cliente::where('id',$id)->first();
        Log::info(($clientes));
        return view('Clientes.edit',compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClienteRequest $request, $clientes)
    {

        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();
        $clientes=Cliente::find($clientes);
        $clientes->nombre=$request->nombre;
        $clientes->apellido=$request->apellido;
        $clientes->celular=$request->celular;
        $clientes->direccion=$request->direccion;
        $clientes->dni=$request->dni;
        $clientes->correo=$request->correo;
        $clientes->save($validated);
         return redirect()->route('Clientes.index');
    }       

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($clientes)
    {
        $clientes=Cliente::find($clientes);
        $clientes->delete();
        return redirect()->route('Clientes.index');
    }
}
