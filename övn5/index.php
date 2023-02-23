<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databas uppgift</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="name">Namn: </label>
        <input type="text" name="name" id="name" required> <br>
        <label for="bdate">Födelsedatum: </label>
        <input type="date" name="bdate" id="bdate" required> <br>
        <input type="file" name="file" id="file" accept="image/png, image/jpeg, image/jpg, image/gif" required><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    /*$sql = "CREATE DATABASE user_database";
    if($conn->query($sql) === FALSE){
        echo("Error creating database: " . $conn->error);
    }*/
    
    $conn->close();

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $bdate = $_POST["bdate"];
        $fileName = $_FILES['file']['name'];  
        $temp_name = $_FILES['file']['tmp_name'];
        echo($name." ".$bdate." ".$fileName);
    }
    ?>
</body>
</html>