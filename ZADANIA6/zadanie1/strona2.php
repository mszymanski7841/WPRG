<?php
session_start();
    for ($i = 1; $i <= $_SESSION['persons']; $i++) {
        if (isset($_POST['firstName'.$i]) && isset($_POST['lastName'.$i])) {
            $_SESSION['firstName'][$i] = $_POST['firstName'.$i];
            $_SESSION['lastName'][$i] = $_POST['lastName'.$i];
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Strona 2</title>
</head>
<body>
<form action="strona2.php" method="POST">
    <?php
    for ($i = 1; $i <= $_SESSION['persons']; $i++) {
        echo '<label for="firstName'.$i.'">Imię osoby '.$i.':</label>';
        echo '<input type="text" required="required" id="firstName'.$i.'" name="firstName'.$i.'"><br>';
        echo '<label for="lastName'.$i.'">Nazwisko osoby '.$i.':</label>';
        echo '<input type="text" required="required" id="lastName'.$i.'" name="lastName'.$i.'"><br><br>';
    }
    ?>
    <input type="submit" value="Dalej">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
   header("Location: strona3.php");
}
?>