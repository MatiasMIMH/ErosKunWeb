<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Eroskun Shop</title>
</head>
<body>

    <?php include("header.php")?>

    <h2 class="section-title">Más Productos</h2>
    <div class="container">
        <div class="product">
            <img src="producto1.png" alt="Producto 1">
            <h3>Producto 1</h3>
            <p>Descripción del producto 1.</p>
            <p class="price">10.00€</p>
            <button class="buy-button">Comprar</button>
        </div>
        <div class="product">
            <img src="producto2.png" alt="Producto 2">
            <h3>Producto 2</h3>
            <p>Descripción del producto 2.</p>
            <p class="price">20.00€</p>
            <button class="buy-button">Comprar</button>
        </div>
        <!-- Agrega más productos aquí -->
    </div>

    <?php include("footer.php")?>

</body>
</html>