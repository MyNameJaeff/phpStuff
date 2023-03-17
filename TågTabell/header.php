<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" class="rel">
    <title>Tabell </title>
</head>
<body>
    <header class="container d-flex justify-content-center ">
        <h1><?php echo $linjenamn ?></h1>
        <form method="post">
            <input type="text" name="stopOne"><br>
            <input type="text" name="stopTwo"><br>
            <input type="submit" id="sumbitForm" name="submitForm" value="Submit" class="submit">
        </form>
    </header>