<?php
session_start();
include 'config.php';
include 'db_func.php';
if(isset($_POST['reset'])){
    $username = $_SESSION['user']['username'];
    $password = $_POST['newpassword'];
    $password2 = $_POST['newpassword2'];
    $conn = db_connect();
    if($password==$password2){
        $result = $conn->query("UPDATE uzytkownicy SET password='$password' WHERE username = '$username'");
        ?><p id="password">Pomyślnie zresetowano hasło!</p><?php
    }else{
        ?> <p id="password2">Podane hasła różnią się!</p><?php
    }

}

?>
<head>
    <title> Resetowanie hasła </title>
    <link rel="stylesheet" href="style.css">
<body>
<form action="logout.php">
    <div class="logout">
        <button class="zoom">Wyloguj się</button>
    </div>
</form>

<h1 id="ih1">Resetowanie hasła</h1>

<div id="buttons">
    <p><a href="main_page.php">Strona główna</a></p>
</div>
<form method="POST" action="">
    <div id="srodekbox">
        <input type="password" placeholder="Podaj nowe hasło" required name="newpassword">
        <br>
        <br>
        <input type="password" placeholder="Podaj jeszcze raz nowe hasło" required name="newpassword2">
        <br>
        <br>
        <input type="submit" name="reset" value="Zresetuj hasło">
    </div>
</form>
</body>
</head>
