<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
<label>Login</label><input type="text" name="username" placeholder="Login"><br>
<label>Hasło</label><input type="password" name="password" placeholder="Hasło"><br>
<input type="submit" value="Prześlij">
</form>

</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == '1234'){
        header('Location: zalogowano.php');
    }
    else{
       echo "Niepoprawny login lub hasło!";
    }
}
?>

