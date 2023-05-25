<br>
<br>
<center>
<h2>Crear Productos </h2>
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
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Productos.store')}}">
       @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <textarea name="nombre" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Descripcion</label>
          <textarea name="descripcion" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Estado</label>
          <textarea name="estado" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Precio</label>
          <textarea name="precio" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Stock</label>
          <textarea name="stock" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Imagen</label>
          <textarea name="imagen" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">id_Categoria</label>
            <input type="text" name="id_categorias" class="form-control" required="">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">id_Descuento</label>
            <input type="text" name="id_descuentos" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>