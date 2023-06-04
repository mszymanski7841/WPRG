<?php
$conn = mysqli_connect('localhost', 'root', '', 'mojabaza');
if (!$conn) {
    echo "Błąd połączenia";
}
$make = '';
$model = '';
$price = '';
$year = '';
$desc = '';

if(isset($_POST['dodaj'])){
    $make = $_POST['marka'];
    $model = $_POST['model'];
    $price = $_POST['cena'];
    $year = $_POST['rok'];
    $desc = $_POST['opis'];

    $sql = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ('$make', '$model', '$price', '$year', '$desc')";
    $result = $conn->query($sql);
    if ($result) {
        echo "Samochód został dodany do bazy danych.";
    } else {
        echo "Błąd przy dodawaniu samochodu: " . mysqli_error($conn);
    }
}
?>

<HTML>
<a href="main.php">Powrót</a>
<form method="post" >
    <label>Marka samochodu: </label><input type="text" name="marka" placeholder="marka" required="required"><br>
    <label>Model samochodu: </label><input type="text" name="model" placeholder="model" required="required"><br>
    <label>Cena samochodu: </label><input type="text" name="cena" placeholder="cena" required="required"><br>
    <label>Rocznik samochodu: </label><input type="text" name="rok" placeholder="rok" required="required"><br>
    <label>Opis samochodu: </label><input type="text" name="opis" placeholder="opis" required="required"><br>
    <input type="submit" name="dodaj" value="dodaj">
</form>
</HTML>