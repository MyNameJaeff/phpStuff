<?php
$array = array(165, 170, 184, 156, 198, 200, 202, 209, 199, 145);
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
print_r($array);
?>