// Function to update the order status
function updateOrderStatus(newStatus) {
    // Make an AJAX request to update the order status on the server
    // You can use Fetch API or a library like jQuery for the AJAX request
    fetch('update_order_status.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ newStatus })
    })
        .then(response => response.json())
        .then(data => {
            console.log(data.message); // Log the success message
            // You can also trigger a status refresh after updating
            refreshOrderStatus();
        })
        .catch(error => {
            console.error('Error updating order status:', error);
        });
}
