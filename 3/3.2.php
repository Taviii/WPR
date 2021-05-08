<h3>Dawaj byczq, zapiszę Ci tekst do pliczku ( ͡° ͜ʖ ͡°)</h3>

<form method="post">
    <input type="text" name="pole1">
	<br>
    <input type="text" name="pole2">
    <br>
    <input type=submit value="zapisz" name="zapisz">
</form>

<?php
if(isset($_POST['zapisz']))
{

    $pole1text=$_POST['pole1']." ";
    $pole2text=$_POST['pole2']."\n";
	
    $fp = fopen('pliczqbyczq.txt', 'a') or die("Coś się zepsuło ¯\_(ツ)_/¯ ");
	
    fwrite($fp,(string)$pole1text);
    fwrite($fp,(string)$pole2text);
    fclose($fp);
}

?>