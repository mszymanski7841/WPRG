<?php
session_start();

include 'db_func.php';

$conn = db_connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $sql = "SELECT * FROM uzytkownicy WHERE username = \"{$_POST['username']}\"";
    $query = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($query);

    if ($user != null){
        header('Location: registererrornickname.php');
    }

    if ($password != $_POST['repeatpassword']){
        header('Location: registererrorpass.php');
    }

    elseif ($user === null) {
        $sql = "INSERT INTO uzytkownicy (username, password) VALUES (\"{$_POST['username']}\", \"{$password}\")";
        mysqli_query($conn,$sql);
        header('Location: registersuccess.php');
    }

}

db_disconnect($conn);

?>
<header>
 <link rel="stylesheet" href="style.css">
<title>Rejestracja</title>
<body>
<form action="index.php">
<div id="rejestr"><button class="zoom">Panel logowania</button></div>
</form>

<h1 id="ih1">Utwórz nowe konto</h1>
<p id="serwis">Wypełnij krótki formularz by się zarejestrować.</p>

<br/>

<form method="POST">
<div class="center"><input class="inputs" type="text" name="username" placeholder="Podaj login" required/></div>
<br/>
<div class="center"><input class="inputs" type="password" name="password" placeholder="Podaj hasło" required/></div>
<br/>
<div class="center"><input class="inputs" type="password" name="repeatpassword" placeholder="Powtórz hasło" required/></div>
<br/>
<div id="srodekbox"><button class="zoom" type="submit">Zarejestruj się!</button></div>


</form>
</body>
</header>
