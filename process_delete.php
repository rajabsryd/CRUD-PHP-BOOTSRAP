<?php
include("connect.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = mysqli_query($connection, "DELETE FROM tb_student WHERE id_student='$id'");

    if ($query) {
        echo "Student deleted successfully.";
        header("Location: index.php"); 
    } else {
        echo "Error deleting student: " . mysqli_error($connection);
    }
} else {
    die("Error: ID not provided.");
}
?>
