<?php
$conn = new mysqli("localhost", "root", "", "autojin");

// Check for DB connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productname = $_POST['productname'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];

    // Upload image
    $image = 'uploads/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

    // Insert into database (make sure column names match your DB)
    $stmt = $conn->prepare("INSERT INTO products (productname, brand, price, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $productname, $brand, $price, $image);
    $stmt->execute();

    // Redirect to dashboard
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F3E3E2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .add-form {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            width: 400px;
            color: #1B2E3C;
        }

        .add-form h2 {
            text-align: center;
            color: #dc2626;
            margin-bottom: 20px;
        }

        .add-form label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        .add-form input[type="text"],
        .add-form input[type="number"],
        .add-form input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .add-form button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #1B2E3C;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        .add-form button:hover {
            background-color: #dc2626;
        }
    </style>
</head>
<body>

<div class="add-form">
    <h2>Add New Product</h2>
    <form method="POST" enctype="multipart/form-data">
        <label>Product Name</label>
        <input name="productname" type="text" placeholder="Product Name" required>

        <label>Brand</label>
        <input name="brand" type="text" placeholder="Brand" required>

        <label>Price ($)</label>
        <input name="price" type="number" placeholder="Price" step="0.01" required>

        <label>Upload Image</label>
        <input name="image" type="file" accept="image/*" required>

        <button type="submit">Add Product</button>
    </form>
</div>

</body>
</html>
