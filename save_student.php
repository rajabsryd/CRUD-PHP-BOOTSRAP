<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "dbr"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nisn = $_POST['nisn'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];

if (empty($nisn) || empty($fullname) || empty($address)) {
    die("Error: All fields are required.");
}

$stmt = $conn->prepare("INSERT INTO tb_student (nisn, fullname, address) VALUES (?, ?, ?)");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sss", $nisn, $fullname, $address);

echo "Executing SQL: INSERT INTO students (nisn, fullname, address) VALUES ('$nisn', '$fullname', '$address')<br>";

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

header("location:index.php");

$stmt->close();
$conn->close();
?>
