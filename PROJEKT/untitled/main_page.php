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



<div class="date"><p>Czas i data serwera <?php echo date("h:i:sA") ?> <?php echo date("d/m/Y") ?> </p></div>
<p class="logged">Zalogowano na <b><?php echo $_SESSION['user']['username']; ?></b>!</p>

<div id="buttons">
    <p><a href="booksusers.php">Książki</a>
        <span style="padding-left: 20px"><a href="add.php"> Dodaj swoją książkę</a></span>
        <span style="padding-left: 20px"><a href="rentedbooks.php">Wypożyczone książki</a></span>
        <span style="padding-left: 20px"><a href="aboutus.php">O nas</a></span> </p>
        <span style="padding-left: 20px"><a href="passwordReset.php">Zresetuj hasło</a></span> </p>
</div>
</body>
</head>

