<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

//Hacemos las siguiente importaciones
use DB;
use Carbon\Carbon;

class ControladorBD extends Controller
{

    public function index()
    {
        $ConsultaProductos= DB::table('tb_productos')->get();
        return view ('Productos', compact('ConsultaProductos'));


    }

    public function create()
    {
        return view ('Mercancia');
    }


    public function store(Request $request)
    {
        DB::table('tb_productos')->insert([
            "nombre"=> $request->input('txtnombre'),
            "precio"=> $request->input('txtprecio'), 
            "codigo"=> $request->input('txtcodigo'),
            "stock"=> $request->input('txtstock'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
           ]);
    
           return redirect('VerProductos')->with('confirmacion' , ' ABC ');
     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}