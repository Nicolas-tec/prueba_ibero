<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventario;
use  Illuminate\View\View;

class inventariocontroller extends Controller
{
    public function index(Request $request): View
    {
     $datos = DB::select('SELECT * FROM inventario');
     $inventario = inventaro::paginate();
     return view('inventario.index', compact('inventario'))
     ->with("datos", $datos);
    }
    public function create(Request $request)
    {
        $sql = DB::insert('insert into inventario (`Nombre_producto`, `Precio`, `Descripcion`, `Tipo`, `stock`, `Fecha_creacion`) values (?, ?)', [1, 'Dayle']);
    }
    public function edit(Request $request)
    {
        return view('inventario');
    }
    public function delete(Request $request){
        
        return view('inventario');
    }
}
