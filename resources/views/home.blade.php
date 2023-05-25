@extends('layouts.app')

@section('content')

<head>
   
    <title>Productos</title>
</head>

<body>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      
    <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="{{'/home'}}">Inicio</a>
      </li>


      <li class="nav-item">
        <a class="nav-link " aria-current="true" href="{{route('Categorias.index')}}">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Descuentos.index')}}">Descuento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Productos.index')}}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Clientes.index')}}">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Detalleventas.index')}}">Detalle Ventas</a>
      </li>
    </ul>
  </div>
</div>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://blog.tiendasishop.com/wp-content/uploads/2022/07/productos-tecnologicos-2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.muycanal.com/wp-content/uploads/2014/01/Tecnologia.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://estaticos-cdn.elperiodico.com/clip/73913461-21ec-413e-9a72-887e42da4cb6_alta-libre-aspect-ratio_default_0.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</body>
@endsection
