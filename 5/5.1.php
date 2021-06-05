<?php
if (!$db = mysqli_connect("localhost", "root", "No?PassworD1", "jaz_db")){
	exit("Błąd połączenia");
}
else {
	echo "Udało się połączyćz bazą danych";
}
echo "</br>";
$query = 'select * from movie';
if(!$result = mysqli_query($db,$query)){
    echo "Nie udało się";
}
else{
    echo "Dane zostały pobrane pomyślnie";
}
echo "</br>";
while($rows = mysqli_fetch_row($result)){
    foreach ($rows as $row){
        echo $row;
        echo "</br>";
    }
}

if ($result = mysqli_query($db, $query)) {
    $row_cnt = mysqli_num_rows($result);
    printf("Jest %d rekordów\n", $row_cnt);
}

echo "</br>";
    
$result = mysqli_query($db,$query);
while($r=mysqli_fetch_array($result))
{
echo $r['id']."<br/>";
}


echo "</br>";
$insert = 'insert into movie (id, title, category, rating, isAvailable) values (Zdane WPR, Komedia, 5, 1)';
if(mysqli_query($db, $insert)){
    echo "Film dodany pomyślnie";
} else{
    echo "Błąd";
}
echo "</br>";
$rowsno = mysqli_affected_rows($db);
echo "Liczba dodanych rekordów: $rowsno"
?>
