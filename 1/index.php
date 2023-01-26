<?php
declare(strict_types=1);
echo("Welcome to page 1");
function combine(string $one, string $two){
    return $one . $two;
}
echo combine("One plus", " two equals three");
?>