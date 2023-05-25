<br>
<center>
<h2>Editar</h2>
</center>
@if ($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Detalleventas.update',$detalleventa)}}">
   @csrf

   @method('put')
   <div class="container">
    <div class="form-group">
      <label for="exampleInputEmail1">fecha</label>
      <input type="text" id="title" name="fecha" class="form-control" required="" value="{{ $detalleventa->fecha}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Costo Final</label>
      <input type="text" id="title" name="costofinal" class="form-control" required="" value="{{ $detalleventa->costofinal}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" id="title" name="nombre" class="form-control" required="" value="{{ $detalleventa->nombre}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Cantidad</label>
      <input type="text" id="title" name="cantidad" class="form-control" required="" value="{{ $detalleventa->cantidad}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Costo Producto</label>
      <input type="text" id="title" name="costoProducto" class="form-control" required="" value="{{ $detalleventa->costoProducto}}">
    </div>

    <div class="form-group">
            <label for="exampleInputEmail1">id_productos</label>
            <input type="text" id="title" name="id_productos" class="form-control" required="" value="{{ $detalleventa->id_productos}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">id_clientes</label>
            <input type="text" id="title" name="id_clientes" class="form-control" required="" value="{{ $detalleventa->id_clientes}}">
        </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
  </div>
</div>