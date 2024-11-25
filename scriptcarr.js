function getQueryParams() {
    const params = {};
    const queryString = window.location.search.substring(1);
    const pairs = queryString.split('&');
    pairs.forEach(pair => {
        const [key, value] = pair.split('=');
        params[decodeURIComponent(key)] = decodeURIComponent(value);
    });
    return params;
}

// función para mostrar los productos en el carrito
function displayCartItems() {
    const params = getQueryParams();
    const cartItemsContainer = document.getElementById('confirmed-items-list');
    let total = 0;

    for (let i = 0; params[`product${i}`]; i++) {
        const product = params[`product${i}`];
        const price = parseFloat(params[`price${i}`]);
        const quantity = parseInt(params[`quantity${i}`]);
        const image = params[`image${i}`];

        // Crear el elemento de cada producto en el carrito con el botón "Eliminar"
        const itemDiv = document.createElement('li');
        itemDiv.classList.add('cart-item');
        itemDiv.setAttribute('data-index', i); // Agregar el índice para identificar el producto

        itemDiv.innerHTML = `
            <img src="${image}" alt="${product}" style="width: 90px; height: 90px; margin-right: 10px; 	font-family: 'Poppins', sans-serif;
">
            <p>${product} - $${price.toFixed(3)} x ${quantity}</p>
            <button class="remove-btn" onclick="removeCartItem(${i})">Eliminar</button>
        `;
        
        cartItemsContainer.appendChild(itemDiv);

        total += price * quantity;
    }

    document.getElementById('cart-total').textContent = `Total: $${total.toFixed(3)}`;
}

// Función para eliminar el producto del carrito
function removeCartItem(index) {
    const cartItemsContainer = document.getElementById('confirmed-items-list');
    const itemToRemove = document.querySelector(`.cart-item[data-index="${index}"]`);
    
    if (itemToRemove) {
        cartItemsContainer.removeChild(itemToRemove);
        updateTotal();
    }
}

// Función para actualizar el total después de la eliminación de un producto
function updateTotal() {
    const cartItems = document.querySelectorAll('.cart-item');
    let total = 0;

    cartItems.forEach(item => {
        const priceText = item.querySelector('p').textContent;
        const price = parseFloat(priceText.match(/\$(\d+(\.\d+)?)/)[1]);
        const quantity = parseInt(priceText.split(' x ')[1]);
        total += price * quantity;
    });

    document.getElementById('cart-total').textContent = `Total: $${total.toFixed(2)}`;
}

displayCartItems();
