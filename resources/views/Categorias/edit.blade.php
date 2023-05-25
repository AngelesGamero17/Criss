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
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Categorias.update',$categorias)}}">
   @csrf

   @method('put')
   <div class="container">
    <div class="form-group">
      <label for="exampleInputEmail1">Categoria</label>
      <input type="text" id="title" name="nombCategoria" class="form-control" required="" value="{{ $categorias->nombCategoria}}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
  </div>
</div>