<form method="post">
    <input type="number" name="numer1" placeholder="podaj pierwszą liczbę">
    <input type="number" name="numer2" placeholder="podaj drugą liczbę">
    <input type="number" name="numer3" placeholder="podaj trzecią liczbę">
    <input type="submit" value="Sortuj" name="sort">
</form>

<?php
if(isset($_POST["sort"])){
    $arrayNumber[0]=$_POST["numer1"];
    $arrayNumber[1]=$_POST["numer2"];
    $arrayNumber[2]=$_POST["numer3"];


    for($a=0; $a<count($arrayNumber); $a++){
        for($b=1; $b<count($arrayNumber)-$a; $b++){
            $tempNumber = 0;
            if($arrayNumber[$b-1] > $arrayNumber[$b]){
                $tempNumber = $arrayNumber[$b-1];
                $arrayNumber[$b-1] = $arrayNumber[$b];
                $arrayNumber[$b] = $tempNumber;
            }
        }
    }
echo("Od najmniejszej:");
    for($a = 0; $a < count($arrayNumber); $a++){
        echo "$arrayNumber[$a] ";
    }
echo ("<br> Od największej:");
    for($a = count($arrayNumber)-1; $a >= 0; $a--){
        echo " $arrayNumber[$a]  ";
    }
}
?>