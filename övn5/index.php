<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" class="href">
    <title>Databas uppgift</title>
</head>
<body>
    <div>
        <form action="#" method="post" enctype="multipart/form-data" class="form">
            <div class="mb-1">
                <label for="name" class="form-label">Namn: </label>
                <input type="text" name="name" id="name" required class="form-control" > <br>
            </div>
            <div class="mb-1">
                <label for="bdate" class="form-label">Födelsedatum: </label>
                <input type="date" name="bdate" id="bdate" required class="form-control" > <br>
            </div>
            <div class="mb-3 input-group">
                <input type="file" name="file" id="file" accept="image/png, image/jpeg, image/jpg, image/gif" required class="form-control" ><br>
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </form><br>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_database";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    /*if($conn->query($sql) === TRUE){
        die("Error creating database: " . $conn->error);
    }*/
    
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(30) NOT NULL,
        birth_date VARCHAR(30) NOT NULL,
        image_path VARCHAR(100) NOT NULL
        )";

    if (!mysqli_query($conn, $sql)) {
        die("Error creating table: " . mysqli_error($conn));
    }
    $conn->close();

    if(isset($_POST["submit"])){
        $conn = new mysqli($servername, $username, $password, $dbname);
        $name = $_POST["name"];
        $bdate = $_POST["bdate"];
        $fileName = $_FILES['file']['name'];  
        $temp_name = $_FILES['file']['tmp_name'];
        $location = 'uploads/';

        if(!move_uploaded_file($temp_name, $location.$fileName)){
            die("Error: Could not upload the files to the folder");
        }
        
        $sql = "INSERT INTO `users`(`fullname`, `birth_date`, `image_path`) 
        VALUES ('$name','$bdate','$location$fileName')";
        
        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>
        <form action="table.php" method="post">
            <input type="submit" value="Go next">
        </form>
    </div>
</body>
</html>