<?php

include_once 'config.php';
include 'logowanie.php';

?>
<head>
    <title> Biblioteka </title>
 <link rel="stylesheet" href="style.css">
<body>

<h1 id="ih1">PANEL LOGOWANIA</h1>
<h2 id="ih2">Witaj!</h2>
<p id="serwis">Zaloguj się, by skorzystać z biblioteki.</p>

<form method="post" action="main_page.php">

<div class="center"><input class="inputs" type="text" name="username" placeholder="Twoj login" />
    <br> <br>
<input class="inputs" type="password" name="password" placeholder="Twoje hasło" /> </div>   
    <br/>
<div id="srodekbox"><button class="zoom" type="submit">Zaloguj się</button></div>
</form>

<form action="register.php">
<div id="rejestr"><button class="zoom">Zarejestruj się teraz!</button></div>
</form>

<form action="forgot.php">
<div class="forgotpass"><button class="zoom">Przypomnij hasło</button></div>
<div class="book"><img src="https://www.animatedimages.org/data/media/53/animated-book-image-0012.gif" border="0" alt="animated-book-image-0012" class="bookopt"></div> 
</form>
</body>
</head>


