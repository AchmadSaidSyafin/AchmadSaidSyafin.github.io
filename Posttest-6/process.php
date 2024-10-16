<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $order = $_POST['order'];
    $file = $_FILES['file'];

    // Directory to store uploaded files
    $uploadDirectory = 'uploads/';
    
    // Make sure the directory exists
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }

    // Handle file upload
    if (isset($file) && $file['error'] == UPLOAD_ERR_OK) {
        $fileName = basename($file['name']);
        $targetFilePath = $uploadDirectory . $fileName;

        // Move the uploaded file to the designated folder
        if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
            echo "File uploaded successfully: " . $fileName;
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }

    // Process other form fields as needed
    // Example: save to database or send email

    // Output data (for demonstration purposes)
    echo "Nama: $name<br>Tanggal: $date<br>Pesanan: $order";
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
