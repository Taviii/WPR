<form action="2.php" method="post">
    <label>
        <tr>
            <td>Ilość osób </td>
            <td><select name="iloscos" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
					<option value="5">5</option>
                </select>
            </td>
            <br>
        </tr>
        <tr>
            <td>Imię osoby rezerwującej </td>
            <td><input type="text" name="imie" required></td>
            <br>
        </tr>
        <tr>
            <td>Nazwisko osoby rezerwującej </td>
            <td><input type="text" name="nazwisko" required></td>
            <br>
        </tr>
        <tr>
            <td>Adres osoby rezerwującej: </td>
        </tr>
		<br>
        <tr>
            <td>Miasto:</td>
            <td><input type="text" name="miasto" size="40"></td>
            <br>
        </tr>
        <tr>
            <td>Kod pocztowy:</td>
            <td><input type="text" name="kod" pattern="[0-9]{2}-[0-9]{3}" maxlength="6"></td>
            <br>
        </tr>
        <tr>
            <td>Ulica:</td>
            <td><input type="text" name="ulica" size="40"></td>
            <br>
        </tr>
        <tr>
            <td>Nr budynku i mieszkania:</td>
            <td><input type="text" name="nrbud" size="10"></td>
            <br>
        </tr>
        <tr>
            <td>Nr telefonu kontaktowego (np ***-***-***)</td>
            <td><input type="tel" name="nrtel" size="10"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required></td>
            <br>
        </tr>
        <tr>
            <td>Adres email </td>
            <td><input type="email" name="email" required></td>
            <br>
        </tr>
        <tr>
            <td>Podaj datę przyjazdu: </td>
            <td><input type="date" name="dataOd" required></td>
            <br>
        </tr>
        <tr>
            <td>Podaj datę wyjazdu: </td>
            <td><input type="date" name="dataDo" required></td>
            <br>
        </tr>
        <tr>
            <td>Godzina przyjazdu: </td>
            <td><input type="time" name="gPrzyj"></td>
            <br>
        </tr>
		<tr>
            <td>Godzina wyjazdu: </td>
            <td><input type="time" name="gOdj"></td>
            <br>
            <br>
        </tr>
        <tr>
            <td>Dodatkowe udogodnienia: <br></td>
            <td>Łóżeczko dla małego dziecka</td>
            <td><input type="checkbox" name="lozko"></td>
            <br>
        </tr>
        <tr>
            <td>Klimatyzacja w pokoju</td>
            <td><input type="checkbox" name="klimatyzacja"></td>
            <br>
        </tr>
        <tr>
            <td>Popielniczka</td>
            <td><input type="checkbox" name="popielniczka"></td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["iloscos"]) && isset($_POST["imie"]) && isset($_POST["nazwisko"]) &&
    isset($_POST["nrtel"]) && isset($_POST["dataOd"]) && isset($_POST["dataDo"])) {
    $iloscos = $_POST["iloscos"];
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $miasto = $_POST["miasto"];
	$kod = $_POST["kod"];
	$ulica = $_POST["ulica"];
	$nrbud = $_POST["nrbud"];
    $nrtel = $_POST["nrtel"];
    $email = $_POST["email"];
    $dataOd = $_POST["dataOd"];
    $dataDo = $_POST["dataDo"];
    $gPrzyj = $_POST["gPrzyj"];
	$gOdj = $_POST["gOdj"];
	

    echo ("Podana ilość osób:" . $iloscos . "<br>" .
		"bane osoby rezerwującej:" . "<br>" .
        "Imię:" . $imie . "<br>" .
        "Nazwisko:" .$nazwisko . "<br>" .
        "Miasto:" . $miasto . "<br>" .
		"Kod pocztowy:" . $kod . "<br>" .
		"Ulica:" . $ulica . "<br>" .
		"Numer budynku:" . $nrbud . "<br>" .
        "Numer telefonu:" . $nrtel . "<br>" .
        "Email:" . $email . "<br>" .
        "Data przyjazdu:" . $dataOd . "<br>" .
        "Data wyjazdu:" . $dataDo . "<br>" .
        "Godzina przyjazdu:" . $gPrzyj . "<br>" .
		"Godzina wyjazdu:" . $gOdj . "<br>"
    );


    if (isset($_POST["lozko"])) {
        echo "Dodatkowe łóżeczko dla dziecka" . "<br>";
    }
    if (isset($_POST["Klimatyzacja"])) {
        echo "Klimatyzacja w pokoju" . "<br>";
    }
    if (isset($_POST["popielniczka"])) {
        echo "Popielniczka w pokoju" . "<br>";
    }
}
?>