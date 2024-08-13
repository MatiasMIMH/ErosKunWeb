<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Eroskun Shop</title>
</head>
<body>

    <?php include("header.php")?>

    <div id="cart">
        <a href="carrito.php">
            <img src="img/shopping-cart.png" alt="Carrito de compras">
        </a>
    </div>
    <div class="container">
        <div class="product" id="Keychains">
            <a href="">
                <img src="" alt="Keychains">
            </a>
            <h3>Keychains</h3>
            <p>Llavero de diseño único de tus personajes favoritos.</p>
            <p class="price">5.00€</p>
            <p class="price">5.00€</p>
            <button class="buy-button" onclick="addToCart('Keychains', 20.00)">
                <img src="img/botoncarrito.png" alt="Comprar">Comprar
            </button>
        </div>
        <div class="product" id="mousepad">
            <a href="">
                <img src="" alt="Mousepad">
            </a>
            <h3>Mousepad</h3>
            <p>Mousepad con un diseño espectacular que te encantará.</p>
            <p class="price">40.00€</p>
            <button class="buy-button" onclick="addToCart('Mousepad', 40.00)">
                <img src="img/botoncarrito.png" alt="Comprar">Comprar
            </button>
        </div>
        <div class="product" id="tarot">
            <a href="tarot2.html"> 
                <img src="img/Tarot.png" alt="Tarot">
            </a>
            <h3>Tarot</h3>
            <p>Producto esotérico que te dirá cuál es tu futuro.</p>
            <p class="price">35.00€</p>
            <button class="buy-button" onclick="addToCart('Tarot', 35.00)">
                <img src="img/botoncarrito.png" alt="Comprar">Comprar
            </button>
        </div>
        <div class="product" id="prints">
            <a href="">
                <img src="" alt="prints">
            </a>
            <h3>prints</h3>
            <p>prints de tus personajes favoritos en distintos tamaños.</p>
            <p class="price">10.00€</p>
            <button class="buy-button" onclick="addToCart('prints', 10.00)">
                <img src="img/botoncarrito.png" alt="Comprar">Comprar
            </button>
        </div>   
        <div class="product" id="Standees">
            <a href="">
                <img src="" alt="Standees">
            </a>
            <h3>Standees</h3>
            <p>Standees de tus personajes favoritos para disfrutar.</p>
            <p class="price">40.00€</p>
            <button class="buy-button" onclick="addToCart('Standees', 20.00)">
                <img src="img/botoncarrito.png" alt="Comprar">Comprar
            </button>
        </div>
        <div class="product" id="Dakimakura">
            <a href="">
                <img src="" alt="Dakimakura">
            </a>
            <h3>Dakimakura</h3>
            <p>Dakimakura para soñar despierto.</p>
            <p class="price">60.00€</p>
            <button class="buy-button" onclick="addToCart('Dakimakura', 20.00)">
                <img src="img/botoncarrito.png" alt="Comprar">Comprar
            </button>
        </div>
        <div class="clearfix"></div>
        </div>
    </div>

    <?php include("footer.php")?>

</body>
</html>