<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class PublicController extends Controller
{
    public function welcome()
    {
        $productos = Producto::take(3)->get();
        $categorias = Categoria::all();
        return view('welcome', compact('categorias','productos'));
    }
}
