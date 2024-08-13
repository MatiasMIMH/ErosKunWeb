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

    <div class="container">
        <div class="white-box">
            <div class="product">
                <a href="producto1.html">
                    <img src="producto1.png" alt="Producto 1">
                    <h3>Producto 1</h3>
                    <p>Descripción del producto 1.</p>
                    <p class="price">10.00€</p>
                </a>
                <button class="buy-button" onclick="addToCart('Producto 1', 10.00)">
                    <img src="botoncarrito.png" alt="Comprar">Comprar
                </button>
            </div>

            <div class="product">
                <a href="producto2.html">
                    <img src="producto2.png" alt="Producto 2">
                    <h3>Producto 2</h3>
                    <p>Descripción del producto 2.</p>
                    <p class="price">20.00€</p>
                </a>
                <button class="buy-button" onclick="addToCart('Producto 2', 20.00)">
                    <img src="botoncarrito.png" alt="Comprar">Comprar
                </button>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div id="cart">
       <a href="carrito.php">
    <img src="shopping-cart.png" alt="Carrito">
</a>
</div>

<?php include("footer.php")?>

<script>
    function addToCart(productName, price) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push({ name: productName, price: price });
        localStorage.setItem('cart', JSON.stringify(cart));
        alert('Producto añadido al carrito');
    }
</script>
</body>
</html>
