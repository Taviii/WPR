<FORM method="post">
	<p>Podaj dwie liczby</p>
	<input type="number" required name="l1" placeholder="wpisz pierwszą liczbę">
	<input type="number" required name="l2" placeholder="wpisz drugą liczbę">
	
	<p>Wybierz działanie matematyczne:</p>
	<input type="radio" name="kalkulator" value="dodawanie" placeholder="dodawanie"> dodawanie</br>
	<input type="radio" name="kalkulator" value="odejmowanie" placeholder="odejmowanie"> odejmowanie </br>
	<input type="radio" name="kalkulator" value="mnożenie" placeholder="mnożenie"> mnożenie </br>
	<input type="radio" name="kalkulator" value="dzielenie" placeholder="dzielenie"> dzielenie </br>
	<input type="radio" name="kalkulator" value="modulo" placeholder="modulo"> modulo </br></br>
	
	<input type="submit" value="Sprawdź" name="oblicz">
	
<?php

if(isset($_POST["oblicz"])){
	$a = $_POST["l1"];
	$b = $_POST["l2"];
	
	$dzialanie = $_POST["kalkulator"];
	$wynik = "";
	
	switch($dzialanie){
		case "dodawanie":
		$wynik = $a + $b;
		break;
		
		case "odejmowanie":
		$wynik = $a - $b;
		break;
	
		case "mnożenie":
		$wynik = $a * $b;
		break;	
		
		case "dzielenie":
		$wynik = $a / $b;
		break;
		
		case "modulo":
		$wynik = $a % $b;
		break;	
	}

	echo $wynik;
	

}
?>