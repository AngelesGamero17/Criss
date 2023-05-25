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
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Productos.update',$productos)}}">
   @csrf

   @method('put')
   <div class="container">
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" id="title" name="nombre" class="form-control" required="" value="{{ $productos->nombre}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Descripcion</label>
      <input type="text" id="title" name="descripcion" class="form-control" required="" value="{{ $productos->descripcion}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Estado</label>
      <input type="text" id="title" name="estado" class="form-control" required="" value="{{ $productos->estado}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Precio</label>
      <input type="text" id="title" name="precio" class="form-control" required="" value="{{ $productos->precio}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Stock</label>
      <input type="text" id="title" name="stock" class="form-control" required="" value="{{ $productos->stock}}">
    </div>
    
    <div class="form-group">
      <label for="exampleInputFile">Imagen</label>
      <input type="text" id="exampleInputFile" name="imagen" class="form-control" required="" value="{{ $productos->imagen}}" >
    </div>

    <div class="form-group">
            <label for="exampleInputEmail1">id_categorias</label>
            <input type="text" id="title" name="id_categorias" class="form-control" required="" value="{{ $productos->id_categorias}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">id_descuentos</label>
            <input type="text" id="title" name="id_descuentos" class="form-control" required="" value="{{ $productos->id_descuentos}}">
        </div>


    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
  </div>
</div>