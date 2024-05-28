<?php
// Include the database connection configuration
include('db_connection.php');

// Receive the new order status from the request
$data = json_decode(file_get_contents('php://input'));
$newStatus = $data->newStatus;

// Update the order status in the database for a specific order (you need to identify the order, e.g., by order_id)
$order_id = 123; // Replace with the actual order ID
$query = "UPDATE orders SET status = '$newStatus' WHERE order_id = $order_id";

if (mysqli_query($conn, $query)) {
    echo json_encode(['message' => 'Order status updated successfully']);
} else {
    echo json_encode(['error' => 'Failed to update order status']);
}

// Close the database connection
mysqli_close($conn);
?>