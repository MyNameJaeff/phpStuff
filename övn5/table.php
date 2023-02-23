<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Table</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_database";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT id, fullname, birth_date, image_path FROM users";
    $result = $conn->query($sql);
    
    $table = '<table border="1" cellpadding="10">';
    $table .= "<tr>
                    <td> Id </td>
                    <td> Name </td>
                    <td> Birth Date </td>
                    <td> Image </td>
                    </tr>";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $table .= "<tr><td>" . 
            $row["id"] . "</td><td>" . 
            $row["fullname"] . "</td><td>" . 
            $row["birth_date"] . "</td><td class='imageBox'>" . "<img src='" . 
            $row["image_path"] . "' alt='uploadedImage'>" . "</td></tr>";
      }
    } else {
      echo "0 results";
    }
    $table .= "</table>";
    echo($table);
    $conn->close();
    ?>
    <br>
    <form action="index.php" method="post">
        <input type="submit" value="Go back">
    </form>
</body>
</html>