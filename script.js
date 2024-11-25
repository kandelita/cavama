const openCartButton = document.querySelector('.open-cart');
const closeCartButton = document.querySelector('.close-cart');
const cartOverlay = document.getElementById('cart-overlay');
const addToCartButtons = document.querySelectorAll('.add-to-cart');
const cartItemsList = document.getElementById('cart-items-list');
const cartTotal = document.getElementById('cart-total');
const buyButton = document.getElementById('buy-button');

let cart = [];

function toggleCart() {
    cartOverlay.classList.toggle('active');
}

function addToCart(product, price, quantity, image) {
    const existingProduct = cart.find(item => item.product === product);
    if (existingProduct) {
        existingProduct.quantity += quantity;
    } else {
        cart.push({ product, price, quantity, image });
    }
    renderCartItems();
    alert(`"${product}" ha sido añadido al carrito.`);
}

function renderCartItems() {
    cartItemsList.innerHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
        const li = document.createElement('li');
        li.innerHTML = `
            <img src="${item.image}" alt="${item.product}" style="width: 50px; height: 50px; margin-right: 10px;">
            ${item.product} - $${item.price.toFixed(3)} x 
            <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-index="${index}">
            <button class="remove-item" data-index="${index}">Eliminar</button>
        `;
        cartItemsList.appendChild(li);
        total += parseFloat(item.price) * item.quantity;
    });

    cartTotal.textContent = `Total: $${total.toLocaleString('es-ES', { minimumFractionDigits: 3, maximumFractionDigits: 5 })}`;
}

function removeItem(index) {
    cart.splice(index, 1);
    renderCartItems();
}

function updateQuantity(index, newQuantity) {
    cart[index].quantity = newQuantity;
    renderCartItems();
}

buyButton.addEventListener('click', () => {
    if (cart.length === 0) {
        alert('El carrito está vacío. Agrega productos antes de comprar.');
    } else {
        const cartData = cart.map((item, index) => {
            return `product${index}=${encodeURIComponent(item.product)}&price${index}=${item.price}&quantity${index}=${item.quantity}&image${index}=${encodeURIComponent(item.image)}`;
        }).join('&');

        window.location.href = `carrito.html?${cartData}`;
    }
});

openCartButton.addEventListener('click', toggleCart);
closeCartButton.addEventListener('click', toggleCart);

addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const product = button.getAttribute('data-product');
        const price = parseFloat(button.getAttribute('data-price'));
        const quantity = 1; // Se añade un producto por defecto
        const image = button.getAttribute('data-image');
        addToCart(product, price, quantity, image);
    });
});

cartItemsList.addEventListener('click', (event) => {
    if (event.target.classList.contains('remove-item')) {
        const index = event.target.getAttribute('data-index');
        removeItem(index);
    }
});

cartItemsList.addEventListener('change', (event) => {
    if (event.target.classList.contains('quantity-input')) {
        const index = event.target.getAttribute('data-index');
        const newQuantity = parseInt(event.target.value, 10);
        if (newQuantity > 0) {
            updateQuantity(index, newQuantity);
        }
    }
});