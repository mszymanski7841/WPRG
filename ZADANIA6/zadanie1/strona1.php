<?php
session_start();
    if (isset($_POST['cardNumber']) && isset($_POST['persons'])) {
        $_SESSION['cardNumber'] = $_POST['cardNumber'];
        $_SESSION['persons'] = $_POST['persons'];
        $_SESSION['ordName'] = $_POST['ordName'];
        $_SESSION['ordLastName'] = $_POST['ordLastName'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="strona1.php">
    <label>Imię zamawiającego</label><input type="text" name="ordName" required="required"><br>
    <label>Nazwisko zamawiającego</label><input type="text" name="ordLastName" required="required"><br>
  <label>Numer karty</label><input type="number" name="cardNumber" required="required"><br>
  <label>Ilosc osob</label><input type="number" name="persons" required="required"></br>
  <input type="submit" value="Dalej">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    header("Location: strona2.php");
}
?>

