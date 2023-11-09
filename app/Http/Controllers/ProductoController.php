<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('productos.index',compact('productos')); 
    }
    public function store() {
        return redirect()->route('productos.index');
    }
    public function edit(Producto $producto) {
        return view('productos.edit', compact('producto'));
    }
    public function update(UpdateProductRequest $request, Producto $producto){
        //validar el $request
        $data = $request->validated();
        //buscar el producto a editar
        $producto = Producto::find($producto->id);
        //validar si existe el producto
        if ($producto) {
            $producto->update($data);
            return redirect()
                ->route('productos.index')
                ->with('success', 'Actualizado');
        }else{
            return redirect()
            ->route('productos.index')
            ->withErrors('error','No se puede actualizar');
        }
    }
}
