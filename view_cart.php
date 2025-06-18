<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$total = 0;

// Handle remove
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['remove'])) {
        $remove_id = $_POST['remove'];
        unset($_SESSION['cart'][$remove_id]);
        header("Location: view_cart.php");
        exit;
    }

    if (isset($_POST['clear_cart'])) {
        $_SESSION['cart'] = [];
        header("Location: view_cart.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background:rgb(0, 0, 0);
            color: #333;
        }
        .cart-container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color:rgb(0, 0, 0);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .total {
            text-align: right;
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
        .btn, .remove-btn {
            display: inline-block;
            margin-top: 10px;
            background-color:rgb(0, 0, 0);
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .remove-btn {
            background-color:rgb(0, 0, 0);
        }
        .btn:hover {
            background-color:rgb(0, 0, 0);
        }
        .remove-btn:hover {
            background-color:rgb(0, 0, 0);
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<div class="cart-container">
    <h1>Your Shopping Cart</h1>

    <?php if (empty($cart)): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <form method="POST">
            <table>
                <tr>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($cart as $id => $item): 
                    $subtotal = $item['price'] * $item['quantity'];
                    $total += $subtotal;
                ?>
                    <tr>
                        <td>$<?= number_format($item['price'], 2) ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td>$<?= number_format($subtotal, 2) ?></td>
                        <td>
                            <button class="remove-btn" type="submit" name="remove" value="<?= $id ?>">Remove</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <p class="total">Total: $<?= number_format($total, 2) ?></p>

           
        </form>
        
    <?php endif; ?>
    <div class="action-buttons">
                <a href="index.php" class="btn">← Continue Shopping</a>
                  <a href="delivery_form.php" class="btn">PROCEED ORDER</a>

                                <button type="submit" name="clear_cart" class="btn" >Clear Cart</button>

            </div>
</div>
</body>
</html>
