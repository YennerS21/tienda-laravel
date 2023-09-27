@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                  @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                  @endif
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($productos as $item)
                        <tr>
                          <th>{{ $item->id }}</th>
                          <td>{{ $item->nombre }}</td>
                          <td>{{ $item->descripcion }}</td>
                          <td>{{ $item->cantidad }}</td>
                          <td>{{ $item->precio }}</td>
                          <td><a href="{{ route('productos.edit', $item->id) }}">Editar</a></td>
                          <td>
                            <form action="{{ route('productos.destroy', $item->id) }}" method="post" >
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
