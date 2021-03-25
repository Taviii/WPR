<?php

$a = rand(1,1000);
$b = rand(1,1000);

echo("Liczby to:" . $a . " i " . $b);
echo("<br> Wynik dodawania:" . ($a + $b));
echo("<br> Wynik odejmowania:" . ($a - $b));
echo("<br> Wynik mnożenia:" . ($a * $b));
echo("<br> Wynik dzielenia:" . ($a / $b));
echo("<br> Wynik modulo:" . ($a % $b));

?>