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
                <a href="videogame.html">
                    <img src="videogame.png" alt="videogame">
                    <h3>VideoGame</h3>
                    <p>Tus juegos favoritos.</p>
                </a>
            </div>

            <div class="product">
                <a href="anime.html">
                    <img src="anime.png" alt="anime">
                    <h3>Animes</h3>
                    <p>Tus animes favoritos en tu bolsillo.</p>
                </a>
            </div>

            <div class="product">
                <a href="films.html">
                    <img src="films.png" alt="films">
                    <h3>Films</h3>
                    <p>Tus peliculas favoritas.</p>
                </a>              
            </div>
			
			<div class="product">
                <a href="eroskeychains.html">
                    <img src="eroskeychains.png" alt="eroskeychains">
                    <h3>Eros Keychains</h3>
                    <p>Tu artista favorito cerca de ti.</p>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <div id="cart">
        <a href="carrito.html">
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