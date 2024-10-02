<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $date = htmlspecialchars($_POST['date']);
    $order = htmlspecialchars($_POST['order']);
} else {
    // Jika bukan POST, mungkin redirect kembali atau tampilkan pesan error
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Diterima</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h2 class="logo">STEAK HOUSE</h2>
    </header>

    <main>
        <div class="submitted-orders">
            <h2>Pesanan yang Diterima:</h2>
            <p><strong>Nama:</strong> <?php echo $name; ?></p>
            <p><strong>Tanggal:</strong> <?php echo $date; ?></p>
            <p><strong>Pesanan:</strong> <?php echo $order; ?></p>
            <a href="index.html">Kembali</a>
        </div>
    </main>

    <footer>
        <h2>©STEAK HOUSE</h2>
    </footer>
</body>
</html>
