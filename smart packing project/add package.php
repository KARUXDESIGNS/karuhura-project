
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Package</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add New Package</h2>
        <form action="karuhura.sql" method="POST">
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="number" class="form-control" name="weight" id="weight" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="contents">Contents</label>
                <input type="text" class="form-control" name="contents" id="contents" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" name="destination" id="destination" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Package</button>
        </form>
        <a href="index.php" class="btn btn-link mt-3">Back to Home</a>
    </div>
</body>
</html>
<?php 
include 'config.php';
 ?>

