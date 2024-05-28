// Function to refresh the order status
function refreshOrderStatus() {
    // Make an AJAX request to fetch the latest order status from the server
    // You can use Fetch API or a library like jQuery for the AJAX request
    fetch('get_order_status.php')
        .then(response => response.json())
        .then(data => {
            const orderStatus = data.status;
            const orderStatusElement = document.getElementById('orderStatus');
            orderStatusElement.textContent = orderStatus;
        })
        .catch(error => {
            console.error('Error fetching order status:', error);
        });
}

// Initial refresh when the page loads
refreshOrderStatus();
