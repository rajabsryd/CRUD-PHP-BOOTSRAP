<?php
include("connect.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nisn = $_POST['nisn'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];

    $query = mysqli_query($connection, "UPDATE tb_student SET nisn='$nisn', fullname='$fullname', address='$address' WHERE id_student='$id'");

    if ($query) {
        echo "Student updated successfully.";
        header("Location: index.php"); 
    } else {
        echo "Error updating student: " . mysqli_error($connection);
    }
} else {
    die("Error: ID not provided.");
}
?>
