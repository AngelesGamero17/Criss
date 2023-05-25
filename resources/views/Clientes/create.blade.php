<br>
<br>
<center>
<h2>Crear Cliente </h2>
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
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Clientes.store')}}">
       @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <textarea name="nombre" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Apellido</label>
          <textarea name="apellido" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Celular</label>
          <textarea name="celular" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Direccion</label>
          <textarea name="direccion" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Dni</label>
          <textarea name="dni" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Correo</label>
          <textarea name="correo" class="form-control" required=""></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>