<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $order = $_POST['order'];

    $stmt = $pdo->prepare("INSERT INTO orders (name, date, order_details) VALUES (?, ?, ?)");
    $stmt->execute([$name, $date, $order]);

    header("Location: index.php"); // Redirect after submission
    exit;
}
?>
