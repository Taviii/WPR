<?php
function dodawanie($a, $b) {
    return $a + $b;
}

function odejmowanie($a, $b) {
    return $a - $b;
}

function mnożenie($a, $b) {
    return $a * $b;
}

function dzielenie($a, $b) {
    if ($b == 0){
        print_r("Błąd, nie można dzielić przez 0");
    } else {
        return $a / $b;
    }
}

function modulo($a, $b) {
	return $a % $b;
}