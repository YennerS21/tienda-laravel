<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit(Categoria $categoria) 
    {
        return view('categorias.edit', compact('categoria'));
    }
    public function update(Request $request,Categoria $categoria)
    {
        $nombre = $request->nombreCategoria;
        //validar que exista
        if (Categoria::find($categoria->id)->exists()) {
            $affected = DB::table('categorias')
                ->where('id', $categoria->id)
                ->update(['nombre' => $nombre]);
        };
        return redirect()->route('categorias.index');
    }
    public function destroy(Categoria $categoria)
    {
        if(Categoria::find($categoria->id)->exists())
        {
            $categoria->delete();
        }
        return redirect()->route('categorias.index');
    }
}
