<form method="post">
	<p>Podaj długości boków</p>
		<input type="number" name="boka" placeholder="tu wpisz długość boku a">
		<input type="number" name="bokb" placeholder="tu wpisz długość boku b">
		<input type="submit" value="Oblicz" name="oblicz">
</form>

<?php
if(isset($_POST["oblicz"])){
$a =$_POST["boka"];
$b =$_POST["bokb"];
	echo("bok 1 wynosi:" . $a);
	echo("<br> bok 2 wynosi:" . $b);
	echo("<br> wynik to:" . $a*$b);
}
?>