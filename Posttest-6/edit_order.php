<?php
require 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM orders WHERE id = ?");
$stmt->execute([$id]);
$order = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $order_details = $_POST['order'];

    $stmt = $pdo->prepare("UPDATE orders SET name = ?, date = ?, order_details = ? WHERE id = ?");
    $stmt->execute([$name, $date, $order_details, $id]);

    header("Location: view_orders.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Order</title>
</head>
<body>
    <h2>Edit Order</h2>
    <form method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($order['name']); ?>" required>
        <br>
        <label for="date">Tanggal:</label>
        <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($order['date']); ?>" required>
        <br>
        <label for="order">Pesanan:</label>
        <textarea id="order" name="order" required><?php echo htmlspecialchars($order['order_details']); ?></textarea>
        <br>
        <button type="submit">Update Order</button>
    </form>
    <a href="view_orders.php">Cancel</a>
</body>
</html>
