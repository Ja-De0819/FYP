-- Table to store orders
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    order_date DATETIME,
    total_payment DECIMAL(8, 2),
    status VARCHAR(255)
);

-- Table to store order statuses
CREATE TABLE order_statuses (
    status_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    status VARCHAR(255),
    status_date DATETIME,
    FOREIGN KEY (order_id) REFERENCES orders(order_id)
);