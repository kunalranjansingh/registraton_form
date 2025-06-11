<?php
include 'r_form_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete query
    $query = "DELETE FROM r_forms WHERE id = '$id'";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('Record deleted successfully'); window.location.href='your_table_page.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "No ID specified.";
}
?>
