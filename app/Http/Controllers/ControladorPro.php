<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Hacemos las siguiente importaciones
use DB;
use Carbon\Carbon;

class ControladorPro extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ConsultaProveedor= DB::table('tb_provedores')->get();
        return view ('Proveedores', compact('ConsultaProveedor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('AddPro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('tb_provedores')->insert([
            "nombre"=> $request->input('txtnombre'),
            "correo"=> $request->input('txtcorreo'), 
            "telefono"=> $request->input('txttelefono'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
           ]);
    
           return redirect('VerProveedores')->with('confirmacion' , ' ABC ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $consultaId = DB::table('tb_provedores')->where('idProvedor',$id)->first();
        return view('EditProvedor', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('tb_provedores')->where('idProvedor', $id)->update([
            "nombre"=> $request->input('txtnombre'),
            "correo"=> $request->input('txtcorreo'), 
            "telefono"=> $request->input('txttelefono'),
            "updated_at"=> Carbon::now(),
           ]);

           return redirect('VerProveedores')->with('Actualizar', 'ABC');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_provedores')->where('idProvedor', $id)->delete();

        return redirect('VerProveedores')->with('Eliminado', 'ABC');
    }
}
