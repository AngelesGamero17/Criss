<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <!-- Estilos CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Carrito de compras</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad </th>
                    <th>Costo Total </th>
                    <th>Acciones</th> <!-- Columna para el botón de eliminar -->
                </tr>
            </thead>
            <tbody id="carrito-body">
                <!-- Aquí se generará la tabla dinámicamente -->
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4" style="text-align: right;">Total:</th>
                    <th id="total-cost"></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <a  href="{{route('Carrito.index')}}" class="btn btn-primary">Volver a la página principal</a>
    </div>

    <!-- Scripts JS -->
    <script>
        // Función para eliminar un producto del carrito
        function eliminarProducto(index) {
            // Obtener el carrito de localStorage
            var carrito = JSON.parse(localStorage.getItem('carrito')) || [];

            // Eliminar el producto del carrito
            carrito.splice(index, 1);

            // Actualizar el carrito en localStorage
            localStorage.setItem('carrito', JSON.stringify(carrito));

            // Recargar la página para reflejar los cambios en la tabla
            location.reload();
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Obtener los datos del carrito almacenados en localStorage
            var carrito = JSON.parse(localStorage.getItem('carrito')) || [];

            // Obtener el tbody de la tabla
            var carritoBody = document.getElementById('carrito-body');

            // Variable para llevar el seguimiento del total
            var total = 0;

            // Generar las filas de la tabla con los datos del carrito
            carrito.forEach(function(producto, index) {
                var row = document.createElement('tr');
                row.innerHTML = `
                    <td>${producto.nombre}</td>
                    <td>${producto.descripcion}</td>
                    <td>${producto.precio}</td>
                    <td>${producto.cantidad}</td>
                    <td>S/ ${(producto.cantidad * producto.precio).toFixed(2)}</td>
                    <td><button onclick="eliminarProducto(${index})" class="btn btn-danger">Eliminar</button></td>
                `;
                carritoBody.appendChild(row);

                // Sumar el costo total del producto al total general
                total += producto.cantidad * producto.precio;
            });

            // Mostrar el total en la tabla
            var totalCostElement = document.getElementById('total-cost');
            totalCostElement.textContent = `S/ ${total.toFixed(2)}`;
        });
    </script>
</body>
</html>
