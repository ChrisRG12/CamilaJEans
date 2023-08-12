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
        $Pedidos = DB::table('tb_pedidos')
        ->select('tb_pedidos.id', 'tb_pedidos.created_at', 'tb_pedidos.nombre', 'tb_pedidos.codigo', 'tb_pedidos.piezas', 'users.name')
        ->join('users', 'tb_pedidos.id_Tienda', '=', 'users.id')
        ->where('tb_pedidos.id_Tienda', '=', Auth::user()->id)
        ->get();
        $ConsultaPedidos = DB::table('tb_pedidos')->select('*')->where('id','=',Auth::user()->id)->get();
        return view ('vistaped', compact('ConsultaPedidos', 'Pedidos'));
    }

    public function indexx()
    {
        $Pedidos = DB::table('tb_pedidos')
        ->select('tb_pedidos.id', 'tb_pedidos.created_at', 'tb_pedidos.nombre', 'tb_pedidos.codigo', 'tb_pedidos.piezas', 'users.name')
        ->join('users', 'tb_pedidos.id_Tienda', '=', 'users.id')->get();
        return view ('todosped', compact('Pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ConsultaUsuario= DB::table('users')->select('*')->where('Tipo','=','Tienda')->get();
        return view ('Pedidos', compact('ConsultaUsuario'));
    }

    public function store(Request $request)
    {
        DB::table('tb_pedidos')->insert([
            "nombre"=> $request->input('txtproducto'),
            "id_Tienda"=> $request->input('txttienda'),
            "codigo"=> $request->input('txtcodigo'), 
            "piezas"=> $request->input('txtpiezas'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
           ]);
    
           return redirect('verpedidos')->with('confirmacion' , ' ABC ');
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
        $Pedidos = DB::table('tb_pedidos')
        ->select('tb_pedidos.id', 'tb_pedidos.created_at', 'tb_pedidos.nombre', 'tb_pedidos.codigo', 'tb_pedidos.piezas', 'users.name')
        ->join('users', 'tb_pedidos.id_Tienda', '=', 'users.id')->get();
        $ConsultaUsuario= DB::table('users')->select('*')->where('Tipo','=','Tienda')->get();
        $consultaId = DB::table('tb_pedidos')->where('id',$id)->first();
        return view('EditPedido', compact('consultaId', 'ConsultaUsuario', 'Pedidos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('tb_pedidos')->where('id', $id)->update([
            "nombre"=> $request->input('txtnombre'),
            "codigo"=> $request->input('txtcodigo'), 
            "piezas"=> $request->input('txtpiezas'),
            "updated_at"=> Carbon::now(),
           ]);

           return redirect('verpedidos')->with('Actualizar', 'ABC');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_pedidos')->where('id', $id)->delete();
        return redirect('verpedidosall')->with('Eliminado', 'ABC');
    }
}
