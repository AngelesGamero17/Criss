<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .product-image {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
        }
        .product-name {
            font-weight: bold;
        }
        .product-price {
            color: #ff6600;
        }
        .product-stock {
            color: #009933;
        }
        .add-to-cart-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
    </li>

    
        <a href="/Login" class="btn btn-primary">Login</a>

</ul>

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <input type="text" id="search-input" class="form-control" placeholder="Buscar producto mediante el nombre">
        </div>
    </div>
    <div class="row" id="product-list">
        @php
            $totalProductos = count($productos);
            $productosPorFila = ceil($totalProductos / 3);
            $productosIndex = 0;
        @endphp
        @for ($i = 0; $i < 3; $i++)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        @for ($j = 0; $j < $productosPorFila; $j++)
                            @if ($productosIndex < $totalProductos)
                                @php
                                    $producto = $productos[$productosIndex];
                                    $productosIndex++;
                                @endphp

                                <div class="mb-3 product-item">
                                    <h5 class="product-name">Nombre: {{$producto->nombre}}</h5>
                                    <p class="product-description">Descripción: {{$producto->descripcion}}</p>
                                    <p class="product-price">Precio: S/ {{ number_format($producto->precio, 2) }}</p>
                                    <p class="product-price">Stock: {{$producto->stock}}</p>
                                    <input type="number" id="cantidad-{{$producto->id}}" class="product-cantidad" value="0" max="{{$producto->stock}}" oninput="limitarCantidad(this)">
                                    <br>
                                    <br>
                                    <img src="{{ $producto->imagen }}" alt="Imagen del producto" class="product-image">
                                    <br>
                                    <br>
                                    <button class="add-to-cart-btn" onclick="agregarAlCarrito('{{ json_encode($producto) }}', {{$producto->id}})">Agregar al carrito</button>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

<script>
    function agregarAlCarrito(productoJson, productId) {
        // Obtener los datos del producto
        var producto = JSON.parse(productoJson);

        // Obtener la cantidad del campo de entrada correspondiente
        var cantidadInput = document.getElementById('cantidad-' + productId);
        var cantidad = parseInt(cantidadInput.value);

        // Validar que la cantidad sea un número mayor a cero
        if (isNaN(cantidad) || cantidad <= 0) {
            alert('Ingresa una cantidad válida mayor a cero.');
            return;
        }

        // Asignar la cantidad al producto
        producto.cantidad = cantidad;

        // Obtener el carrito de localStorage
        var carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        // Agregar el producto al carrito
        carrito.push(producto);

        // Guardar el carrito actualizado en localStorage
        localStorage.setItem('carrito', JSON.stringify(carrito));

        // Redirigir a la vista "ircarrito"
        window.location.href = "{{ route('irCarrito') }}";
    }

    document.addEventListener("DOMContentLoaded", function() {
        var searchInput = document.getElementById('search-input');
        var productList = document.getElementById('product-list');

        searchInput.addEventListener('input', function() {
            var searchTerm = searchInput.value.toLowerCase();
            var productItems = productList.getElementsByClassName('product-item');

            for (var i = 0; i < productItems.length; i++) {
                var productItem = productItems[i];
                var productName = productItem.getElementsByClassName('product-name')[0].innerText.toLowerCase();

                if (productName.includes(searchTerm)) {
                    productItem.style.display = 'block';
                } else {
                    productItem.style.display = 'none';
                }
            }
        });
    });
</script>

    <script>
        function limitarCantidad(input) {
        if (input.value > input.max) {
            input.value = input.max;
        }
        }
    </script>
</body>
</html>
