<?php
require 'config.php';

$stmt = $pdo->query("SELECT * FROM orders");
$orders = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Orders</title>
</head>
<body>
    <h2>Orders</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Order Details</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($orders as $order): ?>
        <tr>
            <td><?php echo $order['id']; ?></td>
            <td><?php echo htmlspecialchars($order['name']); ?></td>
            <td><?php echo htmlspecialchars($order['date']); ?></td>
            <td><?php echo htmlspecialchars($order['order_details']); ?></td>
            <td>
                <a href="edit_order.php?id=<?php echo $order['id']; ?>">Edit</a>
                <a href="delete_order.php?id=<?php echo $order['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php">Back</a>
</body>
</html>
