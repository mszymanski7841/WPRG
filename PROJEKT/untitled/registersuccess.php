<?php

include_once 'config.php';
include 'logowanie.php';

?>
<head>
    <title> Biblioteka </title>
    <link rel="stylesheet" href="style.css">
<body>

<h1 id="ih1">PANEL LOGOWANIA</h1>

<h2 id="ih2">Pomyślnie utworzono konto!</h2>
<p id="serwis">Zaloguj się, by skorzystać z serwisu.</p>

<form method="post" action="main_page.php">

    <div class="center"><input class="inputs" type="text" name="username" placeholder="Twoj login"/>
        <br> <br>
        <input class="inputs" type="password" name="password" placeholder="Twoje hasło"/></div>
    <br/>
    <div id="srodekbox">
        <button class="zoom" type="submit">Zaloguj się</button>
    </div>

</form>
<form action="register.php">
    <div id="rejestr">
        <button class="zoom">Zarejestruj się teraz!</button>
    </div>
</form>
<form action="forgot.php">
    <div class="forgotpass">
        <button class="zoom">Przypomnij hasło</button>
    </div>
</form>
</body>
</head>



