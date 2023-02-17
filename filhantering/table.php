<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" class="rel">
    <title>Table data</title>
</head>
<body>
    <?php
    $filename = "data.csv";
    $f = fopen($filename, "a+");
    $data = [];
    $userNr = 1;
    unlink("data.json");
    $jsonName = fopen("data.json", "a+");
    fwrite($jsonName, '{'.PHP_EOL);
    while (($row = fgetcsv($f)) !== false) {
        $data[] = $row;
    }
    $table = '<table border="1" cellpadding="10">';
    $table .= "<tr>
                <td> Name </td>
                <td> Email </td>
                </tr>";
    foreach($data as $row){
        $table .=   "<tr>
                        <td> $row[0] </td> 
                        <td> $row[1] </td>
                    </tr>";
        
        fwrite($jsonName, 
        '"user'.$userNr.'" : {
            "name" : "'.$row[0].'",
            "email" : "'.$row[1].'"
        }'.checkIfComma($userNr, $data).PHP_EOL);
        $userNr++;
    }
    fwrite($jsonName, "}".PHP_EOL);
    function checkIfComma($number, $data){
        if($number != count($data)){
            return ",";
        }else{
            return "";
        }
    }

    fclose($jsonName);
    $table .= "</table>";
    echo($table);
    fclose($f);
    ?>
    <form action="index.php">
        <input type="submit"value="Go back">
    </form>
    <form action="#" method="post">
        <input type="submit"value="Clear form" name="clearForm">
    </form>
    <?php
    if(isset($_POST["clearForm"])){
        unlink($filename);
        $f = fopen($filename, "a+");
        fclose($f);
        header("Location:table.php");
    }
    ?>
</body>
</html>