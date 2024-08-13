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
            <h2 class="section-title">Carrito de Compras</h2>
            <div id="cart-items"></div>
            <div id="total-cost"></div>
            <button class="checkout-button" onclick="checkout()">Pagar</button>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <?php include("footer.php")?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartItemsContainer = document.getElementById('cart-items');
            const totalCostContainer = document.getElementById('total-cost');
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            function updateCart() {
                cartItemsContainer.innerHTML = '';
                totalCostContainer.innerHTML = '';

                let totalCost = 0;

                                if (cart.length === 0) {
                    cartItemsContainer.innerHTML = '<p>El carrito está vacío.</p>';
                } else {
                    cart.forEach(item => {
                        const itemElement = document.createElement('div');
                        itemElement.className = 'cart-item';
                        itemElement.innerHTML = `
                            <img src="${item.image}" alt="${item.name}">
                            <div>
                                <h3>${item.name}</h3>
                                <p class="price">${item.price}€</p>
                                <button class="remove-button" onclick="removeItem('${item.name}', ${item.price})">Eliminar</button>
                            </div>
                            <div class="clearfix"></div>
                        `;
                        cartItemsContainer.appendChild(itemElement);
                        totalCost += item.price;
                    });
                }

                totalCostContainer.innerHTML = `<p>Total: ${totalCost.toFixed(2)}€</p>`;
            }

            updateCart();

            window.removeItem = function(name, price) {
                cart = cart.filter(item => item.name !== name);
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCart();
            };

            window.checkout = function() {
                if (cart.length === 0) {
                    alert('El carrito está vacío. Agrega productos antes de pagar.');
                } else {
                    // Aquí puedes implementar la lógica para realizar el pago, como redireccionar a una página de pago o mostrar un mensaje de confirmación.
                    alert('¡Gracias por tu compra!');
                    cart = []; // Vaciamos el carrito después de pagar
                    localStorage.setItem('cart', JSON.stringify(cart));
                    updateCart(); // Actualizamos la vista del carrito
                }
            };
        });
    </script>
</body>
</html>



