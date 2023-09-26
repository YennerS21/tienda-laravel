@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categorias') }}</div>

                <div class="card-body">
                    <h3>Editar categoria </h3>
                </div>
                <div class="m-2">
                    <form action="{{ route('categorias.update', $categoria->id) }}" method="post"
                        class="form">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nombreCategoria" class="form-label">Nuevo nombre de la categoria</label>
                            <input type="text" class="form-control" name="nombreCategoria" placeholder="{{ old('nombreCategoria') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Editar y guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection