<?php

session_start();

include 'db_func.php';


$conn = db_connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $sql = "SELECT * FROM uzytkownicy WHERE username = \"{$_POST['username']}\"";
    $query = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($query);
    if ($user === null) {
        header('Location: indexerror.php');

    } elseif ($password !== $user['password']) {
        header('Location: indexerror.php');

    } elseif ($_POST['username'] === 'admin'){
        header('Location: main_pageadmin.php');
        $_SESSION['user'] = $user;
    } else {
        $_SESSION['user'] = $user;
    }
}

db_disconnect($conn);

