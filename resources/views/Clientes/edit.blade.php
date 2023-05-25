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
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Clientes.update',$clientes)}}">
   @csrf

   @method('put')
   <div class="container">
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" id="title" name="nombre" class="form-control" required="" value="{{ $clientes->nombre}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Apellido</label>
      <input type="text" id="title" name="apellido" class="form-control" required="" value="{{ $clientes->apellido}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Celular</label>
      <input type="text" id="title" name="celular" class="form-control" required="" value="{{ $clientes->celular}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Direccion</label>
      <input type="text" id="title" name="direccion" class="form-control" required="" value="{{ $clientes->direccion}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Dni</label>
      <input type="text" id="title" name="dni" class="form-control" required="" value="{{ $clientes->dni}}">
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Correo</label>
      <input type="text" id="title" name="correo" class="form-control" required="" value="{{ $clientes->correo}}">
    </div>


    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
  </div>
</div>