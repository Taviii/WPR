<form method="post">
	<p>Podaj długości boków</p>
		<input type="number" name="boka" placeholder="wpisz długość boku a">
		<input type="number" name="bokb" placeholder="wpisz długość boku b">
		<input type="number" name="bokc" placeholder="wpisz długość boku c">
		<input type="submit" value="Sprawdź" name="oblicz">
</form>

<?php
if(isset($_POST["oblicz"])){
$a = $_POST["boka"];
$b = $_POST["bokb"];
$c = $_POST["bokc"];

if($a+$b>$c && $a+$c>$b && $b+$c>$a) {
    echo("Można zbudować trójkąt");
} else {
    echo("BŁĄD");
}
}
?>