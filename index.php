<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Input Student</title>
</head>
<body>
    <div class="container mt-5 mb-5" style="background-color: #f8f9fa;">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow rounded">
                    <div class="card-header text-center" style="font-family: 'Arial', sans-serif; font-size: 1.5rem;">Student Data</div>
                    <div class="card-body">
                        <a href="input_student.php" class="btn btn-md btn-success mb-3">ADD DATA</a>

                            <table class="table table-bordered mt-3" id="mytable">

                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">FULL NAME</th>
                                    <th scope="col">ADDRES</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include("connect.php");
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM tb_student");
                                while($row = mysqli_fetch_array($query)){
                                ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['nisn'] ?></td>
                                    <td><?php echo $row['fullname'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td class="text-center">
                                        <a href="edit-student.php?id=<?php echo $row['id_student']?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="delete-student.php?id=<?php echo $row['id_student']?>" class="btn btn-sm btn-danger">HAPUS</a>

                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
