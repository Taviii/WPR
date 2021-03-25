<form method="post">
	<p>Podaj Podaj dwa napisy rozdzielone spacją</p>
		<input type="text" name="napisy" placeholder="wpisz dwa napisy">
		<input type="submit" value="Zamień" name="zmiana">
</form>	

<?php
if(isset($_POST["zmiana"])){
	$napisy = $_POST["napisy"];
	$napisy2 = preg_split('/\s/', $napisy);
		echo("%$napisy2[1] $napisy2[0]%$#");
}
?>