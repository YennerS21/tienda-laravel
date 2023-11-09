@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header d-grid d-md-flex justify-content-md-between">
                {{ __('Categorias') }}
                <a class="btn-primary text-decoration-none p-2"
                  href="{{ route('categorias.create') }}">
                  New
                </a>
              </div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categorias as $item)
                        <tr>
                          <th>{{ $item->id }}</th>
                          <td>{{ $item->nombre }}</td>
                          <td><a href="{{ route('categorias.edit', $item->id) }}">Editar</a></td>
                          <td>
                            <form action="{{ route('categorias.destroy', $item->id) }}" method="post" >
                              @csrf
                              @method('DELETE')
                              <button type="submit">Eliminar</button>
                          </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
