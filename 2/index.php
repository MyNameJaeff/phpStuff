<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Uppgift 1</title>
</head>
<body>
    <div class="InputForm">
        <form name="form" action="" method="post">
            <input type="number" id="numberInput" name="numberInput2">
            
        </form>
    </div>
    <div class="box">
        <?php
        echo(allTable(5));
        echo(allTable(10));
        echo(allTable(15));
        ?>
    </div>
    <div class="box2">
        <?php
        if($_POST['numberInput2']){
            echo(allTable($_POST['numberInput2']));
        }
        function allTable($numberInput){
            $table = '<table class="table table-striped table-hover">';
            for($multiply = 1; $multiply <= 10; $multiply++){
                $table .=   "<tr>
                                <td> $numberInput X $multiply </td> <td> = </td> <td>" . $numberInput*$multiply . "</td>
                            </tr>";
            }
            $table .= "</table>";
            return $table;
        }
        ?>
    </div>
</body>
</html>