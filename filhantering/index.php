<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" class="rel">
    <title>Filhantering</title>
</head>
<body>
    <div class="FormBox">
        <form action="#" method="post" id="form" enctype="multipart/form-data" class="form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <input type="submit" id="sumbitForm" name="submitForm" value="Submit" class="submit">
        </form>
    </div>
    <?php
    $filename = "data.csv";
    $f = fopen($filename, "a+");
    if(isset($_POST['submitForm'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $data = [[$name, $email]];
        foreach($data as $row){
            fputcsv($f, $row);
            header("Location:table.php");
        }
    }
    ?>
</body>
</html>