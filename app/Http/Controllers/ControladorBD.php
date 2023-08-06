<?php

namespace App\Http\Controllers;

use App\Models\tb_provedores;

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
        $provedor = tb_provedores::all();
        return view ('Mercancia', compact('provedor'));
    }


    public function store(Request $request)
    {
        DB::table('tb_productos')->insert([
            "nombre"=> $request->input('txtnombre'),
            "precio"=> $request->input('txtprecio'), 
            "codigo"=> $request->input('txtcodigo'),
            "provedor_id"=> $request->input('txtprovedor'),
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
        $consultaId = DB::table('tb_productos')->where('idProducto',$id)->first();
        return view('EditMercancia', compact('consultaId'));

    }

    public function update(Request $request, string $id)
    {
        DB::table('tb_productos')->where('idProducto', $id)->update([
            "nombre"=> $request->input('txtnombre'),
            "precio"=> $request->input('txtprecio'), 
            "codigo"=> $request->input('txtcodigo'),
            "provedor_id"=> $request->input('txtprovedor'),
            "stock"=> $request->input('txtstock'),
            "updated_at"=> Carbon::now(),
           ]);

           return redirect('VerProductos')->with('Actualizar', 'ABC');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_productos')->where('idProducto', $id)->delete();

        return redirect('VerProductos')->with('Eliminado', 'ABC');
    }
}
