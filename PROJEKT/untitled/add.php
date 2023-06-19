<?php

include "db_func.php";
require_once 'dproces.php';

$conn = db_connect();

?>
<form action="logout.php">
    <div class="logout"><button class="zoom">Wyloguj się</button></div>
</form>
<title>Dodaj książkę</title>
<link rel="stylesheet" href="style.css">

<h1 id="ih1">Dodaj swoją książkę</h1>

<div id="buttons"><p><a href="main_page.php">Strona główna</a></p>
    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <p><?php echo $_SESSION['message'];?></p>
        <?php unset($_SESSION['message']);
    }
    ?>
<br>
<div class="add">
    <form method="post" action="dproces.php" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Podaj tytuł"/>
        <input type="text" name="author" placeholder="Podaj autora książki"/>
        <select name="genre">
            <option value="Powieść historyczna">Powieść historyczna</option>
            <option value="Powieść przygodowa">Powieść przygodowa</option>
            <option value="Tragedia">Tragedia</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Psychologia">Psychologia</option>
            <option value="Horror">Horror</option>
            <option value="Naukowa">Naukowa</option>
            <option value="Autobiografia">Autobiografia</option>
            <option value="Kryminał">Kryminał</option>
            <option value="Thriller">Thriller</option>
            <option value="Romans">Romans</option>
            <option value="Literatura faktu">Literatura faktu</option>
        </select>
        <input type="year" name="date" placeholder="Podaj rok wydania"/>
        <input type="file" name="uploadimage">
        <input type="submit" name="add" value="Dodaj książkę">
    </form>
</div>
