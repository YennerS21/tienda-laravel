@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                    <h3>Crea un producto </h3>
                </div>
                <div class="m-2">
                    <form action="{{ route('productos.create') }}" method="post"
                        class="form">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                name="nombre" 
                                placeholder="{{ old('nombre')}}"
                                value="{{ old('nombre')}}">
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
                                placeholder="{{ old('descripcion')}}"
                                value="{{ old('descripcion')}}">
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
                                placeholder="{{ old('cantidad')}}" 
                                value="{{ old('cantidad')}}">
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
                                placeholder="{{ old('precio')}}"
                                value="{{ old('precio')}}">
                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection