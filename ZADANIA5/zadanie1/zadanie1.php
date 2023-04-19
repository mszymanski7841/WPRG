
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method = post>
    <label>Wybierz plik: </label><input type="file" name="file"><br>
    <input type="submit" name="reverse" value="Odwróć">
</form>

</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['reverse'])){
    $filename = $_POST['file'];
    $lines = file($filename);
    $reversed = array_reverse($lines);
    file_put_contents($filename,implode('', $reversed));
}
}
?>