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
        <div class="product">
            <div class="product-images">
                <img src="tarot.png" alt="Tarot 1">
                <img src="tarot1-2.png" alt="Tarot 1 - Imagen 2">
                <img src="tarot1-3.png" alt="Tarot 1 - Imagen 3">
            </div>
            <h3>Tarot</h3>
            <p>El mejor tarot que te ayudará a ver tu futuro.</p>
            <p class="price">35.00€</p>
            <a href="#" class="buy-button" onclick="addToCart('Tarot', 35.00)">
                <img src="botoncarrito.png" alt="Comprar">
            </a>
            <div class="prev" onclick="changeImage(-1)">&#10094;</div>
            <div class="next" onclick="changeImage(1)">&#10095;</div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div id="cart">
        <a href="carrito.php">
            <img src="shopping-cart.png" alt="Carrito">
        </a>
    </div>

    <?php include("footer.php")?>

    <script>
        let currentImageIndex = 0;
        const images = document.querySelectorAll('.product-images img');

        function changeImage(n) {
            currentImageIndex += n;
            if (currentImageIndex >= images.length) {
                currentImageIndex = 0;
            }
            if (currentImageIndex < 0) {
                currentImageIndex = images.length - 1;
            }
            showImage(currentImageIndex);
        }

        function showImage(n) {
            images.forEach((image) => image.style.display = 'none');
            images[n].style.display = 'block';
        }

        showImage(currentImageIndex);

        function addToCart(productName, price) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push({ name: productName, price: price });
            localStorage.setItem('cart', JSON.stringify(cart));
        }
    </script>
</body>
</html>







