<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra uppgifter</title>
</head>
<body>
    <?php
    $br = "<br>";
    function additionTimesThree($first, $second){
        return $first == $second ? ($first + $second) * 3 : $first + $second;
    }
    echo(additionTimesThree(1,2).$br);
    echo(additionTimesThree(2,2).$br);
    echo($br);
    
    function absoluteDiffrence($n){
        return $n > 51 ? ($n - 51) * 3 : 51 - $n;
    }
    echo(absoluteDiffrence(50).$br);
    echo(absoluteDiffrence(53).$br);
    echo($br);

    function isThrity($x, $y){
        return $x == 30 || $y == 30 || ($x + $y) == 30; 
    }
    echo(var_dump(isThrity(30, 0)).$br);
    echo(var_dump(isThrity(15, 15)).$br);
    echo(var_dump(isThrity(10, 10)).$br);
    echo($br);

    function withinMargin($x){
        if(abs($x-100) <= 10 || abs($x-200) <= 10)
                return true;
            return false;
    }
    echo(var_dump(withinMargin(111)).$br);
    echo(var_dump(withinMargin(200)).$br);
    echo(var_dump(withinMargin(101)).$br);
    echo($br);

    function iffify($x){
        return str_split($x,2)[0] == "if" ? $x : "if " . $x;
    }
    echo(iffify("if else").$br);
    echo(iffify("not else").$br);
    ?>
</body>
</html>