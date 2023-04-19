<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="input">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $number = $_POST["input"];
    echo("Decbin: " . decbin($number) . "<br>");
    $binary = "";
    while($number >= 1){
        $temp = $number % 2; //Ger 0 eller 1
        echo $number."<br>";
        $number = $number/2; //Tar bort det som ska bli över
        $binary .= $temp; //Lägger 0 eller 1 i string
    }
    echo("<br>Own: " . strrev($binary)); //printar reversed string
}
/* $array = array(165, 170, 184, 156, 198, 200, 202, 209, 199, 145);
for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){
        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }
    }
}
echo("<br>");
print_r($array);
echo("<br>");
for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){
        if($array[$i] < $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }
    }
}
print_r($array); */
?>