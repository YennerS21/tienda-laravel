<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', ['categorias'=>$categorias]);
    }
    public function create()
    {
        return view('categorias.create');
    }
    public function store(Request $categoria){
        //validar y guardar
        if (!empty($categoria)) {
            $nuevaCategoria = new Categoria();
            $nuevaCategoria->nombre = $categoria->nombreCategoria;
            $nuevaCategoria->save();
            return redirect()->route('categorias.index');
        }
    }
}
