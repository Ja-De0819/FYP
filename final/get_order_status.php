<?php
// Include the database connection configuration
include('db_connection.php');

// Fetch the order status from the database for a specific order (you need to identify the order, e.g., by order_id)
$order_id = 123; // Replace with the actual order ID
$query = "SELECT status FROM orders WHERE order_id = $order_id";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $status = $row['status'];
    echo json_encode(['status' => $status]);
} else {
    echo json_encode(['error' => 'Failed to fetch order status']);
}

// Close the database connection
mysqli_close($conn);
?>
