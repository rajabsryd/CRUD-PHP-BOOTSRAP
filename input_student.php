<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Input Student</title>
</head>
<body>
    <div class="container mt-5" style="background-color: #f8f9fa;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow rounded">
                    <div class="card-header text-center" style="font-family: 'Arial', sans-serif; font-size: 1.5rem;">Input Student</div>
                    <div class="card-body">
                        <form action="save_student.php" method="post">
                            <div class="form-group mb-3">
                                <label for="nisn">NISN</label>
                                <input type="text" id="nisn" name="nisn" placeholder="Input Your NISN..." class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fullname">Full Name</label>
                                <input type="text" id="fullname" name="fullname" placeholder="Input Your Full Name..." class="form-control" autocomplete="off" required>

                            </div>
                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <textarea id="address" name="address" placeholder="Input Your Address..." class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-right: 10px;">SAVE</button>
                            <button type="reset" class="btn btn-secondary" style="margin-right: 10px;">RESET</button>
                            <a href="index.php" class="btn btn-success">Student Data</a>
                            <style>
                                .btn-primary:hover {
                                    background-color: #0056b3;
                                    color: white;
                                }
                                .btn-secondary:hover {
                                    background-color: #e0a800;
                                    color: white;
                                }
                            </style>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
