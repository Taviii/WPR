<form method="post">
	<p>Podaj ilość wierszy oraz kolumn</p>
		<input type="number" name="wiersz" placeholder="tu wpisz ilość wierszy">
		<input type="number" name="kolumna" placeholder="tu wpisz ilość kolumn">
		<input type="submit" value="Dalej" name="sprawdzenie">
</form>

<?php

if(isset($_POST["sprawdzenie"])){
	
	$wiersz = $_POST["wiersz"];
	$kolumna = $_POST["kolumna"];
	if(!is_numeric($wiersz) || !is_numeric($kolumna) || $wiersz <= 0 || $kolumna <= 0) {
		echo("Błąd");
		return;
	}
$tab = array(array());

for ($i = 0 ; $i < $wiersz ; $i++) {
    for ($j = 0 ; $j < $kolumna ; $j++) {
        $tab[$i][$j] = rand(1, 100);
    }
}

echo("Przed Transpozycją:<br>");
	for ($i = 0 ; $i < $wiersz ; $i++) {
		for ($j = 0 ; $j < $kolumna ; $j++) {
			echo($tab[$i][$j] . " ");
		}
		echo("<br>");
	}

echo("<br>Po Transpozycji:<br>");
	for ($i = 0 ; $i < $kolumna ; $i++) {
		for ($j = 0 ; $j < $wiersz ; $j++) {
			echo($tab[$j][$i] . " ");
		}
		echo("<br>");
}
}
?>