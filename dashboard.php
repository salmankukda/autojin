<?php
$conn = new mysqli("localhost", "root", "", "autojin");

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM products WHERE id = $id");
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM product2 WHERE id = $id");
}
$result2 = $conn->query("SELECT * FROM product2");
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            background: #F3E3E2;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: #1B2E3C;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }
        th, td {
            border: 1px solid #1B2E3C;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #1B2E3C;
            color: #fff;
        }
        a.button {
            padding: 5px 10px;
            background: #1B2E3C;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a.button:hover {
            background: #dc2626;
        }
        .add-btn {
            margin-bottom: 15px;
            display: inline-block;
            background: #28a745;
        }
    </style>
</head>
<body>

<h1>CAR GADGETS</h1>
<a href="index.php" class="button add-btn">Back</a>
<a href="delivery_dashboard.php" class="button add-btn">YOUR ORDERS</a>

<a href="add_product.php" class="button add-btn">+ Add Product</a>
<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['productname'] ?></td>
        <td><?= $row['brand'] ?></td>
        <td>$<?= $row['price'] ?></td>
        <td><img src="<?= $row['image'] ?>" width="80"></td>
        <td>
            <a href="edit_product.php?id=<?= $row['id'] ?>" class="button">Edit</a>
            <a href="?delete=<?= $row['id'] ?>" class="button" onclick="return confirm('Delete this product?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>


<h1>CAR CARE</h1>
<a href="index.php" class="button add-btn">Back</a>

<a href="add_product2.php" class="button add-btn">+ Add Product</a>
<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

    <?php while($row = $result2->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['productname'] ?></td>
        <td><?= $row['brand'] ?></td>
        <td>$<?= $row['price'] ?></td>
        <td><img src="<?= $row['image'] ?>" width="80"></td>
        <td>
            <a href="edit_product1.php?id=<?= $row['id'] ?>" class="button">Edit</a>
            <a href="?delete=<?= $row['id'] ?>" class="button" onclick="return confirm('Delete this product?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
