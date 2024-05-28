
document.addEventListener('DOMContentLoaded', function () {
    const addButtons = document.querySelectorAll('.add-button');
	const itemTotalElement = document.getElementById('item-total');
	const toPayElement = document.getElementById('to-pay');
    const payButton = document.getElementById('pay-button');
    let totalPrice = 0;
	
	// Find the HTML elements that contain the restaurant name and address
	const restaurantNameElement = document.querySelector(".pt-3 h2.fw-bold");
	const restaurantAddressElement = document.querySelector(".pt-3 p.text-white");

	// Get the restaurant name and address from the HTML elements
	const selectedRestaurantName = restaurantNameElement.textContent;
	const selectedRestaurantAddress = restaurantAddressElement.textContent;

	// Update the content of the elements in the second block
	document.getElementById("restaurant-name").textContent = selectedRestaurantName;
	document.getElementById("restaurant-address").textContent = selectedRestaurantAddress;


    addButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Get the dish name and price from the button's data attributes
            const dishName = button.getAttribute('data-dish-name');
            const dishPrice = parseFloat(button.getAttribute('data-dish-price'));
			
			 console.log(dishName, dishPrice);

            // Find the corresponding item in the second block
            const blockItems = document.querySelectorAll('.osahan-cart-item .gold-members .media-body p.m-0');

            // Initialize variables to keep track of item existence and quantity
            let itemExists = false;

            blockItems.forEach(function (item) {
                if (item.textContent.trim() === dishName) {
                    // If the item already exists, update its quantity and price
                    const itemParent = item.parentElement.parentElement.parentElement;
                    const quantitySpan = itemParent.querySelector('.count-number .quantity');
                    const currentQuantity = parseInt(quantitySpan.textContent);
                    quantitySpan.textContent = (currentQuantity + 1).toString();

                    const priceSpan = itemParent.querySelector('.text-muted');
                    const currentPrice = parseFloat(priceSpan.textContent.replace('$', ''));
                    const newPrice = currentPrice + dishPrice;
                    priceSpan.textContent = `$${newPrice.toFixed(2)}`;

                    itemExists = true;
                }
            });

            // If the item is new, add it to the second block
            if (!itemExists) {
                const newItem = document.createElement('div');
                newItem.classList.add('d-flex', 'align-items-center', 'justify-content-between', 'px-3', 'py-2', 'border-bottom', 'gold-members');
                newItem.innerHTML = `
                    <div class="d-flex align-items-center">
                        <div class="me-2 text-danger">·</div>
                        <div class="media-body">
                            <p class="m-0">${dishName}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ">
                        <span class="count-number float-end count-number-input">
                            <span class="quantity">1</span>
                        </span>
                        <p class="text-gray mb-0 float-end ms-2 text-muted small">$${dishPrice.toFixed(2)}</p>
                    </div>
                `;
                document.querySelector('.osahan-cart-item .gold-members').appendChild(newItem);
            }
			totalPrice += dishPrice;
            itemTotalElement.textContent = totalPrice.toFixed(2);
			
			 // Calculate the total price including delivery fee (assuming $10)
            const deliveryFee = 10.00;
            const totalToPay = totalPrice + deliveryFee;
            toPayElement.textContent = totalToPay.toFixed(2);

            // Update the "PAY $" button
            payButton.textContent = `PAY $${totalToPay.toFixed(2)}`;
        });
    });
});

