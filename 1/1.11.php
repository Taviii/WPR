<form method="post">
	<p>Wpisz jakieś zdanie</p>
		<input type="text" name="zdanie" placeholder="tu wpisz zdanie">
		<input type="submit" value="sprawdź czy jest to panagram" name="sprawdzenie">
</form>

<?php

if(isset($_POST["sprawdzenie"])){
    $zdanie = strtolower($_POST["zdanie"]);
    $alfabet = str_split("abcdefghijklmnopqrstuvwxyz");
    echo "<br>";
    $panagram = TRUE;
	
    for($i = 0 ; $i < count($alfabet) ; $i++){
        if(strstr($zdanie, $alfabet[$i])==FALSE){
            $panagram=FALSE;
        }
    }
	
    if($panagram){
        echo "zdanie jest panagramem";
    } else {
        echo "zdanie nie jest panagramem"; 
    }
}

?>