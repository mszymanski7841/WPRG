<?php

require 'logowanie.php';


?>
<head>
  <title> Strona główna </title>
<link rel="stylesheet" href="style.css">
<body>
<form action="logout.php">
<div class="logout"><button class="zoom">Wyloguj się</button></div>
</form>

<h1 id="ih1">Strona główna</h1>
<p class="logged">Zalogowano na <b><?php echo $_SESSION['user']['username']; ?></b>!</p>


<div id="buttons">
    <p>
        <a href="display.php">Książki</a>
        <span style="padding-left: 20px"><a href="addadmin.php"> Dodaj książkę</a></span>
        <span style="padding-left: 20px"><a href="registeredusers.php">Lista użytkowników</a></span>
        <span style="padding-left: 20px"><a href="rentedbooksadmin.php">Wypożyczenia użytkowników</a></span>
        <span style="padding-left: 20px"><a href="passwordResetAdmin.php">Zresetuj hasło</a></span>
    </p> </div>
<div class="date"><p>Czas i data serwera <?php echo date("h:i:sA") ?> <?php echo date("d/m/Y") ?> </p></div>

</body>
</head>


