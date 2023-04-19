<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Strona 3</title>
</head>
<body>
<h2>Podsumowanie</h2>
<p>Dane zamawiającego: </p>
<ul>
    <li>Imię: <?php echo $_SESSION['ordName']; ?></li>
    <li>Nazwisko: <?php echo $_SESSION['ordLastName']; ?></li>
<li>Numer karty: <?php echo $_SESSION['cardNumber']; ?></li>

</ul>
<p>Dane <?php echo " ".$_SESSION['persons']." " ?> dodatkowych osób:</p>
<ul>
    <?php
    for($i=1; $i<=$_SESSION['persons']; $i++){
        echo '<li>'.$_SESSION['firstName'][$i].' '.$_SESSION['lastName'][$i].'</li>';
    }
    ?>
</ul>
</body>
</html>