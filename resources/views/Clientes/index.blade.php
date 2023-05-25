<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <br>
</head>
<body>
<div>
<nav class="navbar" style="background-color: #e3f2fd;">
<ul class="nav nav-tabs card-header-tabs">
<li class="nav-item">
        <a class="nav-link " aria-current="true" href="{{'/home'}}">Inicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " aria-current="true" href="{{route('Categorias.index')}}">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Descuentos.index')}}">Descuentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Productos.index')}}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{route('Clientes.index')}}">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('Detalleventas.index')}}">Detalle Ventas</a>
      </li>

      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      <form class="d-flex">
            <input name=buscarpor class="form-control me-2" type="search" placeholder="Buscar " aria-label="Search" >
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
    </ul>
    
</div>
    <center>
      <br>
                  <div class="container"  style="background-color:#FCDBDA;">
                    <table class="table table-danger table-hover">
                        <thead class="bg-danger text-white">
                          <br>
                        <h1>Pestaña de Clientes</h1>
                        <br>
                            <thead>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Celular</th>
                                <th>Direccion</th>
                                <th>Dni</th>
                                <th>Correo</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{$cliente->nombre}}</td>
                                        <td>{{$cliente->apellido}}</td>
                                        <td>{{$cliente->celular}}</td>
                                        <td>{{$cliente->direccion}}</td>
                                        <td>{{$cliente->dni}}</td>
                                        <td>{{$cliente->correo}}</td>
                                        <td>

                                        <nav class="navbar navbar-light bg-light">
                                        <a class="navbar-brand" href="{{route('Clientes.edit',$cliente->id)}}"> <center><b>Editar</b>
                                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEdMP0fAEw4yx9poGDV4RIwCt8CAHuA1pjHA&usqp=CAU" alt="" width="30" height="30">
                                        </a>
                                      </center>
                                    </nav>
                                        </td>


                                        <td>
                                        <form action="{{route('Clientes.destroy',$cliente)}}" method="POST">
                                        @csrf                           
                                        @method('delete')                            
                                        <button class="navbar-brand" type="submit"> <center><b>Eliminar</b>                        
                                        <img src="data:image/png;base64,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" alt="" width="30" height="30">                          
                                        </button>                      
                                        </form>
                                        </td>

                                        
                                    </tr>

                                    @endforeach
                                </tbody>
                                 </table>

                                 </table>

                                 <div class="row mt-3">
                                    <div class="col-md-4 offset-md-4">
                                        <div class="d-grid mx-auto">
                                            <button class="navbar-brand"> <center> 
                                            <a class="navbar-brand" href="{{route('Clientes.create')}}"> <b>Crear</b>  
                                            </a>
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE5gLfU71IBsZeZ659dy91LqLprzrKuiadDA&usqp=CAU" alt="" width="30" height="30">
                                        <!--</a>-->
                                        </button>
                                    </div>
                                    </center>
                                </div>
                            </div>

                            </body>
    
</html>
    