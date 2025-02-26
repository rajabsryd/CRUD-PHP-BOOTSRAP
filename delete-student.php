<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM tb_student WHERE id_student='$id'");
    $row = mysqli_fetch_array($query);
} else {
    die("Error: ID not provided.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Delete Student</title>
</head>
<body>
    <div class="container mt-5" style="background-color: #f8f9fa;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow rounded">
                    <div class="card-header text-center" style="font-family: 'Arial', sans-serif; font-size: 1.5rem;">Delete Student</div>
                    <div class="card-body">
                        <p>Are you sure you want to delete the student <strong><?php echo $row['fullname']; ?></strong>?</p>
                        <form action="process_delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id_student']; ?>">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                            <a href="index.php" class="btn btn-secondary">CANCEL</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
