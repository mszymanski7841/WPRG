<?php
function checkVar()
{
    return isset($_POST['pesel']);
}
function checkNumeric()
{
    return is_numeric($_POST['pesel']);
}
function checkLength(){
    return strlen($_POST['pesel']) == 11;
}
$pesel = '';
$pesel_length = strlen((string)$pesel);

if (checkVar())
{
    $pesel = $_POST['pesel'];
}
function sprawdzenie($pesel){
    $rok = substr($pesel,0,2 );
    $miesiac = substr($pesel, 2,2);
    $dzien = substr($pesel, 4, 2);
    $plec = substr($pesel, 10,1 );

    if($miesiac > 80 && $miesiac <= 92){
        $rok += 1800;
        $miesiac -= 80;
    } //lata 1800-1899
    else if($miesiac > 0 && $miesiac <=12){
        $rok += 1900;
    }
    else if($miesiac > 20 && $miesiac <=32){
        $rok += 2000;
        $miesiac -= 20;
    } //lata 2000-2099
    else if($miesiac > 40 && $miesiac <=52){
        $rok += 2100;
        $miesiac -= 40;
    } //lata 2000-2099
    else if($miesiac > 60 && $miesiac <=72){
        $rok += 2200;
        $miesiac -= 60;
    } //lata 2200-2299


    if($plec %2 == 0){
        echo  "Urodziłaś się $dzien-$miesiac-$rok <br>";
        echo "płeć: Kobieta";
    }else{
        echo  "Urodziłeś się $dzien-$miesiac-$rok <br>";
        echo "płeć: Mezczyzna";
    }
    echo "\n";
}
?>


<HTML>
<form method="POST">
<label>PESEL: </label><input type="text" name="pesel"> <br>
    <input type="submit" value="Prześlij" name="submit">
</form>
</HTML>


<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        if (checkVar()) {
            if (isset($_POST['pesel']) && checkNumeric() && checkLength()) {
                echo "Twój pesel to:  {$_POST['pesel']}.<br>";
                sprawdzenie($pesel);

            } else {
                echo "Błędne dane! Podaj prawidłowy numer pesel! <BR>";
            }
        }
    }
}
?>