<?php

namespace App\Http\Controllers;

use App\Models\tb_provedores;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function index1(Request $request)
    {
        $ConsultaProductos= DB::table('tb_productos')->get();
        return view ('Merca', compact('ConsultaProductos'));

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


    public function show(Request $request)
    {
        $filtro = $request->get('busca');
        
        if ($filtro) {
            $Disponibilidad = DB::table('tb_productos')->where('nombre', $filtro)->get();
        } else {
            $Disponibilidad = DB::table('tb_productos')->where('stock', '>=', 1)->get();
        }

        return view('Disponible', compact('Disponibilidad'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $consultaId = DB::table('tb_productos')->where('idProducto',$id)->first();
        $provedor = tb_provedores::all();
        return view('EditMercancia', compact('consultaId', 'provedor'));

    }

    public function update(Request $request, string $id)
    {
        DB::table('tb_productos')->where('idProducto', $id)->update([
            "nombre"=> $request->input('txtnombre'),
            "precio"=> $request->input('txtprecio'), 
            "codigo"=> $request->input('txtcodigo'),
            "stock"=> $request->input('txtstock'),
            "updated_at"=> Carbon::now(),
           ]);

           return redirect('VerProductos')->with('Actualizar', 'ABC');
    }


    public function destroy(string $id)
    {
        DB::table('tb_productos')->where('idProducto', $id)->delete();

        return redirect('VerProductos')->with('Eliminado', 'ABC');
    }

    //Para cambiar el stock
    public function Cambiar(string $id)
    {
        $producto = DB::table('tb_productos')->where('idProducto',$id)->first();
        return view('SacarMerca', compact('producto'));

    }

public function stock(Request $request, string $id)
{
        // Obtener el stock anterior del producto desde la base de datos
        $producto = DB::table('tb_productos')->where('idProducto', $id)->first();
        $stockAnterior = $producto->stock;

        // Actualizar el stock en la base de datos con el nuevo valor
        DB::table('tb_productos')->where('idProducto', $id)->update([
            "stock" => $request->input('txtstock'),
        ]);

        // Calcular la diferencia y restarla al resultado almacenado en la base de datos
        $diferencia = $request->input('txtstock') - $stockAnterior;
        $resultadoActual = $producto->resultado ?? 0;

        // Restar la diferencia al resultado almacenado
        $resultadoActual -= $diferencia;

        // Actualizar el resultado en la base de datos
        DB::table('tb_productos')->where('idProducto', $id)->update([
            "stock" => $resultadoActual,
        ]);

        return redirect('Disponibilidad')->with('Actualizar', 'ABC');
    }

    public function pdf (){
        $buscarxs = $request->get('buscarxs'); 

     $ConsultaProducto = DB::table('tb_productos')
    ->where('codigo', 'LIKE', '%' . $buscarxs . '%')
    ->orWhere('nombre', 'LIKE', '%' . $buscarxs . '%')
    ->get();
    }
}
