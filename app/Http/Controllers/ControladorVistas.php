<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function showIndex(){
        return view ('Index');
      }

      public function showProductos(){
        return view ('Productos');
      }

}
