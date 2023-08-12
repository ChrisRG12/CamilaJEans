<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class ControladorPedidos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ConsultaPedidos = DB::table('tb_pedidos')->select('*')->where('id','=',Auth::user()->id)->get();
        return view ('vistaped', compact('ConsultaPedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ConsultaProductos= DB::table('tb_productos')->get();
        return view ('Pedidos', compact('ConsultaProductos'));
    }

    public function store(Request $request)
    {
        DB::table('tb_pedidos')->insert([
            "nombre"=> $request->input('txtproducto'),
            "codigo"=> $request->input('txtcodigo'), 
            "piezas"=> $request->input('txtpiezas'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
           ]);
    
           return redirect('pedidos')->with('confirmacion' , ' ABC ');
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
