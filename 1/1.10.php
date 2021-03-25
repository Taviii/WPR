<?php

$a = rand(2, 10);

function gwiazdki($a)
{

    for ($i = 1; $i <= $a; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo("*");
        }
        echo("<br>");
    }
	
    for ($i = $a; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo("*");
        }
        echo("<br>");
    }
	
    for ($i = $a; $i > 0; $i--) {
        for ($j = $i; $j < $a; $j++) {
            echo str_repeat("&nbsp;", 2);
        }
        for ($k = 0; $k < $i; $k++) {
            echo("*");
        }
        echo("<br>");
    }
	
    for ($i = 0; $i < $a; $i++) {
        for ($j = $a; $j > $i + 1; $j--) {
            echo str_repeat("&nbsp;", 2);
        }
        for ($k = 0; $k <= $i; $k++) {
            echo("*");
        }
        echo("<br>");
    }
}

gwiazdki($a);

?>