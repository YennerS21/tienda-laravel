@extends('layouts.app')

@section('content')
  <div class="container">
    <nav class="row">
      <ul class="d-flex list-unstyled">
        @foreach ($categorias as $categoria)
          <a class="text-decoration-none" href="">
            <li class="m-1 p-1">{{ $categoria->nombre }}</li>
          </a>
        @endforeach
      </ul>
    </nav>
    <h4>Estos son los prodctos mas visitados</h4>
    <div class="d-flex">
      <div class="m-3 card mb-3" style="max-width: 340px">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="..." />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Tamales</h5>
              <p class="card-text">
                Delicioso tamales. Preparados con arroz, pollo, carne, huevo
              </p>
              <p class="card-text">Precio: $5.000</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="m-3 card mb-3" style="max-width: 340px">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="..." />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Sueter</h5>
              <p class="card-text">Material: algodon. Talla S|M|XL</p>
              <p class="card-text">Precio: $65.000</p>
              <p class="card-text">
                <small class="text-muted">Last updated 2 mins ago</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="m-3 card mb-3" style="max-width: 340px">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="..." />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Mouse</h5>
              <p class="card-text">
                Para que te sientas comodo en tus largas horas frente al pc
              </p>
              <p class="card-text">Precio: $30.000</p>
              <p class="card-text">
                <small class="text-muted">Last updated 56 mins ago</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h2>Sobre nosotros</h2>
      <p>
        Somo una tienda cuyo objetivo es competir al mas alto nivel del
        mercado, nos esforzamos en la seguridad de nuestros usuarios, la
        calidad de nuestros productos, la buena presentacion de nuestras
        instalaciones y la satisfaccion de nuestros clientes.
      </p>
      <p>
        Si quieres trabajar con nosotros o saber mas sobre nuestro proyecto
        comunicate enviando un correo a tienda_virtual_amiga@soporte.com
      </p>
    </div>
  </div>
@endsection
