function checkActivePage() {
    var currentPage = window.location.href;
    if (currentPage.includes("keychains.html")) {
        changeImage("keychains-icon");
    } else if (currentPage.includes("tarot.html")) {
        changeImage("tarot-icon");
    } else if (currentPage.includes("prints.html")) {
        changeImage("Prints-icon");
    } else if (currentPage.includes("dakimakura.html")) {
        changeImage("Dakimakura-icon");
    } else if (currentPage.includes("mousepads.html")) {
        changeImage("Mousepads-icon");
    } else if (currentPage.includes("standees.html")) {
        changeImage("Standees-icon");
    }
}
function changeImage(buttonId) {
    var button = document.getElementById(buttonId);
    var normalImage = button.getAttribute('data-normal-image');
    var activeImage = button.getAttribute('data-active-image');
    var currentImage = button.getAttribute('src');
    if (currentImage === normalImage) {
        button.setAttribute('src', activeImage);
    } else {
        button.setAttribute('src', normalImage);
    }
}

function addToCart(productName, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ name: productName, price: price });
    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Producto añadido al carrito');
}
document.addEventListener("DOMContentLoaded", checkActivePage);