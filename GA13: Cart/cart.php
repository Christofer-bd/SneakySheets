<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Shopping Cart - GameHub</title>

<style>

    html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

    body { 
            font-family: Arial, sans-serif;
            background-image: url("bg.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: rgba(0,0,0,0.75);
            background-blend-mode: darken;
            background-attachment: fixed;
            color: white;
            min-height: 100vh;
        }
    
 
    .cart-header {
    background: rgba(255, 255, 255, 0);
    backdrop-filter: blur(10px);
    padding: 15px;
    font-size: 50px;
    text-align: center;
    font-weight: bold;
    border: none;
    color: white;
}

.product-card {
    width: 150px;
    height: auto;
    display: flex;
    padding: 15px;
    background: rgba(0, 0, 0, 0); 
    backdrop-filter: blur(8px);
    margin-top: 10px;
    border: none;
    align-items: center;
    border-radius: 10px;
}

.product-card img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
    margin-right: 15px;
}

.product-info {
    flex: 1;
}

.product-name {
    font-size: 16px;
    font-weight: bold;
    color: white;
}

.product-desc {
    color: #e0e0e0;
    font-size: 12px;
    margin-top: 3px;
}

.price {
    font-size: 18px;
    color: #ff4d73;
    font-weight: bold;
    margin-top: 5px;
}

.quantity-control {
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.quantity-control button {
    width: 28px;
    height: 28px;
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    font-size: 18px;
    cursor: pointer;
    backdrop-filter: blur(5px);
    border-radius: 5px;
}

.quantity-control input {
    width: 40px;
    height: 28px;
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    text-align: center;
    margin: 0 5px;
    font-size: 16px;
    backdrop-filter: blur(5px);
    border-radius: 5px;
}

.checkout-bar {
    position: fixed;
    bottom: 0;
    width: 100%;
    background: hsla(0, 0%, 0%, 0.00);
    backdrop-filter: blur(10px);
    display: flex;
    justify-content: space-between;
    padding: 15px;
    border: none;
    align-items: center;
}

.checkout-btn {
    background: #ff004f;
    color: white;
    padding: 12px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
    margin-right: 45px;
}

.checkbox {
    margin-right: 10px;
    transform: scale(1.3);
}

</style>

</head>
<body>

<div class="cart-header">Shopping Cart</div>

<!-- XBOX -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="xbox.jpg">
    <div class="product-info">
        <div class="product-name">XBOX</div>
        <div class="price">₱20,000</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- PlayStation 5 -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="ps5.jpg">
    <div class="product-info">
        <div class="product-name">PlayStation 5 Console</div>
        <div class="price">₱27,990</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Nintendo Switch -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="nintendo.jpg">
    <div class="product-info">
        <div class="product-name">Nintendo Switch V2</div>
        <div class="price">₱14,990</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Xbox Series X -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="xboxseries.jpg">
    <div class="product-info">
        <div class="product-name">Xbox Series X 1TB</div>
        <div class="price">₱44,959</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- SR Formula -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="moza.jpg">
    <div class="product-info">
        <div class="product-name">SR Formula Steering Wheel [RS21]</div>
        <div class="price">₱29,950</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- PC Games -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="pcgames.jpg">
    <div class="product-info">
        <div class="product-name">PC Games</div>
        <div class="price">₱500</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Gaming Laptop -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="laptop.jpg">
    <div class="product-info">
        <div class="product-name">Gaming Laptop</div>
        <div class="price">₱50,000</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Keyboard -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="keyboard.jpg">
    <div class="product-info">
        <div class="product-name">Keyboard</div>
        <div class="price">₱2,000</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Mouse -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="mouse.jpg">
    <div class="product-info">
        <div class="product-name">Mouse</div>
        <div class="price">₱500</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Headset -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="headset.jpg">
    <div class="product-info">
        <div class="product-name">Headset</div>
        <div class="price">₱1,000</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Controller -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="controller.jpg">
    <div class="product-info">
        <div class="product-name">Controller</div>
        <div class="price">₱2,500</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Microphone -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="microphone.jpg">
    <div class="product-info">
        <div class="product-name">Microphone</div>
        <div class="price">₱900</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Speaker -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="speaker.jpg">
    <div class="product-info">
        <div class="product-name">Speaker</div>
        <div class="price">₱1,000</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Webcam -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="webcam.jpg">
    <div class="product-info">
        <div class="product-name">Webcam</div>
        <div class="price">₱1,500</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Gaming Chair -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="gamingchair.jpg">
    <div class="product-info">
        <div class="product-name">Gaming Chair</div>
        <div class="price">₱5,000</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- Gaming Mousepad -->
<div class="product-card">
    <input type="checkbox" class="checkbox">
    <img src="mousepad.jpg">
    <div class="product-info">
        <div class="product-name">Gaming Mousepad</div>
        <div class="price">₱250</div>
        <div class="quantity-control">
            <button>-</button>
            <input type="text" value="1">
            <button>+</button>
        </div>
    </div>
</div>

<!-- CHECKOUT BAR -->
<div class="checkout-bar">
    <div style="font-size: 20px;">₱0.00</div>
    <div class="checkout-btn">Check Out</div>
</div>


<script>
function updateTotal() {
    let total = 0;
    document.querySelectorAll('.product-card').forEach(card => {
        const checkbox = card.querySelector('.checkbox');
        if (checkbox.checked) { // only add if checked
            const priceText = card.querySelector('.price').innerText.replace('₱', '').replace(',', '');
            const price = parseFloat(priceText);
            const quantity = parseInt(card.querySelector('.quantity-control input').value);
            total += price * quantity;
        }
    });
    // Update the checkout bar
    document.querySelector('.checkout-bar div').innerText = '₱' + total.toLocaleString();
}

// Update total when quantity changes
document.querySelectorAll('.quantity-control').forEach(control => {
    const input = control.querySelector('input');
    const btns = control.querySelectorAll('button');
    const btnDecrease = btns[0];
    const btnIncrease = btns[1];

    btnIncrease.addEventListener('click', () => {
        input.value = parseInt(input.value) + 1;
        updateTotal();
    });

    btnDecrease.addEventListener('click', () => {
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
            updateTotal();
        }
    });

    // Optional: update total if someone manually types a number
    input.addEventListener('input', () => {
        if (parseInt(input.value) < 1 || isNaN(input.value)) input.value = 1;
        updateTotal();
    });
});

// Update total when checkbox is clicked
document.querySelectorAll('.checkbox').forEach(box => {
    box.addEventListener('change', updateTotal);
});

// Initialize total on page load
updateTotal();
</script>
</body>
</html>