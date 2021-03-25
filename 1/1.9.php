<?php
    $tab1długość = 3;
    $tab2długość = 3;
    $różnicadługości = abs($tab1długość - $tab2długość);

    $tab1 = [];
    $tab2 = [];

    for ($i = 0; $i < $tab1długość; $i++) {
        $tab1[$i] = rand( 1 , 100);
    }
    for ($i = 0; $i < $tab2długość; $i++) {
        $tab2[$i] = rand( 1 , 100);
    }

    $iloczynskalarny = 0;

    if ($różnicadługości == 0) {
        for ($i = 0; $i < $tab1długość; $i++) {
            echo("Tab1  [" . $i . "]: " . $tab1[$i] . " Tab2  [" . $i . "]: " . $tab2[$i] . "<br>");
            $iloczynskalarny += $tab1[$i] * $tab2[$i];
        }
        echo("Iloczyn skalarny wynosi: " . $iloczynskalarny);
    }else
        echo("BŁĄD");
?>