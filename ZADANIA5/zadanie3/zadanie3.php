<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Adres strony</label><input type="text" name="address"><br>
    <label>Opis strony</label><input type="text" name="desc"><br>
    <input type="submit" name="add" value="Dodaj">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['address'])&& $_POST['desc']){
        $file = fopen('adresy.txt','a+');
        if(!$file){
            echo "Nie udało się otworzyć pliku";
        }else{
            fwrite($file, "http://".$_POST['address']."/; ".$_POST['desc']."\n");
            fclose($file);
        }
    }
}
?>