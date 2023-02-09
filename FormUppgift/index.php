<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form uppgift</title>
</head>
<body>
    <div class="allt">
        <div class="TitleBox">
            <h1>PHP FORM</h1>
        </div>
        <div class="FormBox">
            <form action="#" method="post" id="form" enctype="multipart/form-data" class="form">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required><br>
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required><br>
                <label for="birthDate">Birth Date:</label>
                <input type="text" id="birthDate" name="birthDate" required><br>
                <input type="file" class="file form-control" id="file" name="file" accept="image/png, image/jpeg, image/jpg, image/gif" required><br>
                <input type="submit" id="sumbitForm" name="submitForm" value="Show" class="submit">
            </form>
        </div>
        <div class="OutputBox">
            <div class="ImageBox">
            <?php
            if(isset($_POST['submitForm'])){
                $fileName = $_FILES['file']['name'];  
                $temp_name = $_FILES['file']['tmp_name'];
                if(isset($fileName) && !empty($fileName)){
                    $location = 'uploads/';
                    if(move_uploaded_file($temp_name, $location.$fileName)){
                        echo '<img src="'.$location.$fileName.'" alt="Chosen Image">';
                    }
                } else {
                    echo 'You should select a file to upload !!';
                }
                
            }
            ?>
            </div>
            <div class="textBox">
                <?php
                if(isset($_POST['submitForm'])){
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $birthDate = $_POST['birthDate'];
                    echo('<h3>'.$firstName.' '.$lastName.'</h3>');
                    echo('<h3>'.$birthDate.'</h3>');
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>