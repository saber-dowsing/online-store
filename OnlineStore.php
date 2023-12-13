<!-- OnlineStore.php -->

<?php

require_once 'Product.php';
require_once 'Customer.php';
require_once 'Order.php';

// Create products
$product1 = new Product(1, 'Laptop', 999.99);
$product2 = new Product(2, 'Smartphone', 499.99);

// Create customers
$customer1 = new Customer(101, 'Alice', 'alice@example.com');
$customer2 = new Customer(102, 'Bob', 'bob@example.com');

// Create orders
$order1 = new Order(1001, $customer1);
$order1->addProduct($product1);
$order1->addProduct($product2);

$order2 = new Order(1002, $customer2);
$order2->addProduct($product2);

// Display information
echo "Order Information:\n";
$order1->displayInfo();
echo "\n";
$order2->displayInfo();

?>
