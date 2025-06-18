<?php
include 'db.php';
$result = $conn->query("SELECT * FROM delivery_info ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delivery Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            padding: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 16px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #34495e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .table-container {
            max-width: 1200px;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="table-container">
    <h2>Delivery Information Dashboard</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Building</th>
            <th>Colony</th>
            <th>Province</th>
            <th>City</th>
            <th>Area</th>
            <th>Address</th>
            <th>Date</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['fullname']) ?></td>
            <td><?= htmlspecialchars($row['phone']) ?></td>
            <td><?= htmlspecialchars($row['building']) ?></td>
            <td><?= htmlspecialchars($row['colony']) ?></td>
            <td><?= htmlspecialchars($row['province']) ?></td>
            <td><?= htmlspecialchars($row['city']) ?></td>
            <td><?= htmlspecialchars($row['area']) ?></td>
            <td><?= htmlspecialchars($row['address']) ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>
