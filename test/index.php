<?php
include 'var.php';
include 'header.php';
echo "<main class='container d-flex justify-content-around'>";
$table = '<table border="1" cellpadding="10">';
$tableReverse = '<table border="1" cellpadding="10">';
foreach($linje19 as $stop){
    $table .= "<tr><td> $stop </td></tr>";
}
foreach(array_reverse($linje19) as $stop){
    $tableReverse .= "<tr><td> $stop </td></tr>";
}
$table .= "</table>";
$tableReverse .= "</table>";
echo $table;
echo $tableReverse;
echo "</main>";
include 'footer.php';
?>
