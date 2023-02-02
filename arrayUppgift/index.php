<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    $farm = ['Cow', 'Sheep', 'Horse', 'Dog', 'Chicken'];
    foreach($farm as $animal){
        echo($animal . "<br>");
    }
    $farm[2] = "Får";
    echo '<pre>';
    print_r($farm);
    echo '</pre>';
    array_push($farm, "Kanin");
    echo '<pre>';
    print_r($farm);
    echo '</pre>';
    ?>
    <?php
    $assoArr = ["Adam"=>"35", "Tom"=>"37", "Alex"=>"43", "Jonas"=>"33", "David"=>"26"];
    $table = '<table border="1" cellpadding="10">';
    foreach($assoArr as $KEY => $VALUE){
        $table .=   "<tr>
                        <td> $KEY </td> 
                        <td> $VALUE </td>
                    </tr>";
    }
    $table .= "</table>";
    echo($table);
    ?>
</body>
</html>