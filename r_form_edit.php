
<?php include 'r_form_connection.php' ;
 if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip_code'];
    $country = $_POST['country'];
    $profession = $_POST['profession'];
    $interest = $_POST['intrested_field'];

    $update = "UPDATE r_forms SET name='$name', address='$address', city='$city', state='$state', zip_code='$zip', country='$country', profession='$profession', intrested_field='$interest' WHERE id='$id'";
    
    if (mysqli_query($con, $update)) {
        echo "<script>alert('Record updated successfully'); window.location.href='your_table_page.php';</script>";
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <script src="https://kit.fontawesome.com/13d6d99986.js" crossorigin="anonymous"></script>
    <style>
       body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }
form{
    border: 2px solid;
    border-collapse: collapse;
    margin: 10px;
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
.table-container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 1px 20px rgba(0, 0, 0, 0.2);
        }
    table input{
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }
        
    </style>
</head>
<body>
   
    <div class="table-container">
    <h1>Student Details</h1>
    <form method="post">
    <h2>Edit Student Info</h2>
    <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    <input type="text" name="address" value="<?= $row['address'] ?>"><br>
    <input type="text" name="city" value="<?= $row['city'] ?>"><br>
    <input type="text" name="state" value="<?= $row['state'] ?>"><br>
    <input type="text" name="zip_code" value="<?= $row['zip_code'] ?>"><br>
    <input type="text" name="country" value="<?= $row['country'] ?>"><br>
    <input type="text" name="profession" value="<?= $row['profession'] ?>"><br>
    <input type="text" name="intrested_field" value="<?= $row['intrested_field'] ?>"><br>
    <button type="submit" name="update">Update</button>
</form>
    </div>
</body>
</html>