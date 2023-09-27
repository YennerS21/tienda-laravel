@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                    <h3>Editar producto {{ $producto->nombre }} </h3>
                </div>
                <div class="m-2">
                    <form action="{{ route('productos.update', $producto->id) }}" method="post"
                        class="form">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                name="nombre" 
                                placeholder="{{ old('nombre') ?? $producto->nombre}}"
                                value="{{ old('nombre') ?? $producto->nombre}}">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                                name="descripcion" 
                                placeholder="{{ old('descripcion') ?? $producto->descripcion }}"
                                value="{{ old('descripcion') ?? $producto->descripcion }}">
                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control @error('cantidad') is-invalid @enderror" 
                                name="cantidad" 
                                placeholder="{{ old('cantidad') ?? $producto->cantidad }}" 
                                value="{{ old('cantidad') ?? $producto->cantidad }}">
                                @error('cantidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="text" class="form-control @error('precio') is-invalid @enderror" 
                                name="precio" 
                                placeholder="{{ old('precio') ?? $producto->precio }}"
                                value="{{ old('precio') ?? $producto->precio }}">
                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Editar y guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection