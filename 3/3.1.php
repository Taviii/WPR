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

if(isset($_POST["oblicz"] )) {
	$a = $_POST["l1"];
	$b = $_POST["l2"];
	
	$dzialanie = $_POST["kalkulator"];
	include("3.1.1.php");
	
	switch($dzialanie){
		case "dodawanie":
		echo dodawanie($a, $b);
		break;
		
		case "odejmowanie":
		echo odejmowanie($a, $b);
		break;
	
		case "mnożenie":
		echo mnożenie($a, $b);
		break;	
		
		case "dzielenie":
		echo dzielenie($a, $b);
		break;
		
		case "modulo":
		echo modulo($a, $b);
		break;	
	}	

}
?>