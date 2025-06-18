<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $building = $_POST['building'];
    $colony = $_POST['colony'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("INSERT INTO delivery_info (fullname, phone, building, colony, province, city, area, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $fullname, $phone, $building, $colony, $province, $city, $area, $address);
    $stmt->execute();

    echo "<p class='success'>✅ Delivery Information Saved!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delivery Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f4f7;
            padding: 40px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        form {
            max-width: 600px;
            background: white;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        }

        label {
            font-weight: 500;
            margin-top: 15px;
            display: block;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            background-color: #1e88e5;
            color: white;
            padding: 12px;
            border: none;
            margin-top: 20px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .success {
            text-align: center;
            color: green;
            font-weight: bold;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #1565c0;
        }
    </style>
</head>
<body>

<h2>Delivery Information Form</h2>
<form method="POST">
    <label>Full Name</label>
    <input name="fullname" required placeholder="Enter your first and last name">

    <label>Phone Number</label>
    <input name="phone" required placeholder="Please enter your phone number">

    <label>Building / House No / Floor / Street</label>
    <input name="building" required placeholder="Please enter">

    <label>Colony / Suburb / Locality / Landmark</label>
    <input name="colony" required placeholder="Please enter">

    <label>Province</label>
    <select name="province" required>
        <option value="">Select your province</option>
        <option>Punjab</option>
        <option>Sindh</option>
        <option>KPK</option>
        <option>Balochistan</option>
    </select>

    <label>City</label>
    <select name="city" required>
        <option value="">Select your city</option>
        <option>Lahore</option>
        <option>Karachi</option>
        <option>Islamabad</option>
        <option>Peshawar</option>
    </select>

    <label>Area</label>
    <input name="area" required placeholder="Please choose your area">

    <label>Address</label>
    <textarea name="address" required placeholder="e.g. House# 123, Street# 123, ABC Road"></textarea>

    <button type="submit">Proceed</button>
</form>

</body>
</html>
