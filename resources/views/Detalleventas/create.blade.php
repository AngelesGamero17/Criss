<br>
<br>
<center>
<h2>Crear Detalle Ventas </h2>
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
<div class="container" > 
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Detalleventas.store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Fecha</label>
          <input name="fecha" class="form-control" required=""></input>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">costofinal</label>
          <input name="costofinal" class="form-control" required=""></input>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">nombre</label>
          <input name="nombre" class="form-control" required=""></input>

        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">cantidad</label>
          <input name="cantidad" class="form-control" required=""></input>

        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">costoProducto</label>
          <input name="costoProducto" class="form-control" required=""></input>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">id_productos</label>
          <input name="id_productos" class="form-control" required=""></input>
        </div>

      <div class="form-group">
          <label for="exampleInputEmail1">id_clientes</label>
          <input name="id_clientes" class="form-control" required=""></input>
      </div>
            
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>