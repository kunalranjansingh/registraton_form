<?php
include 'r_form_connection.php';

if (isset($_POST['submit'])) {
    $id= $_POST['id'];
    $FullName = $_POST['name'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $State = $_POST['state'];
    $ZipCode = $_POST['zip_code'];
    $Country = $_POST['country'];
    $Profession = $_POST['student'];
    $Intrestedfield = isset($_POST['global_p']) ? implode(", ", $_POST['global_p']) : '';

    $resumeName = '';
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === 0) {
        $resumeTmp = $_FILES['resume']['tmp_name'];
        $resumeName = uniqid() . "_" . basename($_FILES['resume']['name']);
        $resumeDestination = "resume/" . $resumeName;

        if (move_uploaded_file($resumeTmp, $resumeDestination)) {
            echo "Resume uploaded successfully!<br>";
        } else {
            echo "Error uploading resume.<br>";
        }
    } else {
        echo "No resume uploaded or error in uploading.<br>";
    }

    // Debugging: show uploaded file info
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $sql = "INSERT INTO r_forms(id ,name, address, city, state, zip_code, country, profession, intrested_field, resume)
            VALUES ('$id','$FullName', '$Address', '$City', '$State', '$ZipCode', '$Country', '$Profession', '$Intrestedfield', '$resumeName')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('New record inserted successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
