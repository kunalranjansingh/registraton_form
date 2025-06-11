<?php
include 'r_form_connection.php';

// Check if ID is passed
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM r_forms WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
} else {
    echo "<h2 style='color:red;'>No ID specified!</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Single Form Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }
        .table-container {
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 1px 20px rgba(0, 0, 0, 0.2);
            
        }
        table {
            
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ccc;
        }
        .clr {
            background-color: #007bff;
            color: white;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="table-container">
    <h2>Selected Student Record</h2>
    <table>
        <tr class="clr">
            <th>ID</th>
            <th>Full Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Postal / Zip Code</th>
            <th>Country</th>
            <th>You Are</th>
            <th>Interests</th>
            <th>Resume</th>
        </tr>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['address']; ?></td>
            <td><?= $row['city']; ?></td>
            <td><?= $row['state']; ?></td>
            <td><?= $row['zip_code']; ?></td>
            <td><?= $row['country']; ?></td>
            <td><?= $row['student']; ?></td>
            <td><?= $row['global_p']; ?></td>
            <td><?= $row['resume']; ?></td>
        </tr>
    </table>
</div>
</body>
</html>
