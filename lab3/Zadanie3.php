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
    <label>Ścieżka: </label><input type="text" name="path"><br>
    <label>Nazwa katalogu: </label><input type="text" name="name"><br>
    <label>Operacja: </label>
    <select name="operation">
        <option value="read">Odczyt</option>
        <option value="delete">Usunięcie</option>
        <option value="create">Tworzenie</option>
    </select>
    <input type="submit" name="submit" value="Prześlij">
</form>

</body>
</html>
<?php
function operacjaNaKatalogu($sciezka, $nazwa, $operacja = "read") {
    $sciezka = rtrim($sciezka, '/') . '/';

    switch ($operacja) {
        case "read":
            if (file_exists($sciezka . $nazwa)) {
                $arr = scandir($sciezka . $nazwa);
                echo "<p>Podany katalog zawiera:</p>";
                echo "<ul>";
                foreach ($arr as $file) {
                    if ($file != "." && $file != "..") {
                        echo "<li>$file</li>";
                    }
                }
                echo "</ul>";
            } else {
                echo "Katalog o podanej nazwie nie istnieje!";
            }
            break;
        case "delete":
            if (file_exists($sciezka . $nazwa)) {
                if (count(scandir($sciezka . $nazwa)) == 2) {
                    rmdir($sciezka . $nazwa);
                    echo "Katalog został usunięty.";
                } else {
                    echo "Podany katalog musi być pusty!";
                }
            } else {
                echo "Katalog o podanej nazwie nie istnieje!";
            }
            break;
        case "create":
            if (!file_exists($sciezka . $nazwa)) {
                mkdir($sciezka . $nazwa);
                echo "Utworzono katalog!";
            } else {
                echo "Katalog o podanej nazwie już istnieje!";
            }
            break;
        default:
            echo "Brak podanej operacji!";
            break;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sciezka = $_POST["path"];
    $nazwa = $_POST["name"];
    if (isset($_POST["operation"])) {
        $operacja = $_POST["operation"];
    } else {
        $operacja = "read";
    }
    operacjaNaKatalogu($sciezka, $nazwa, $operacja);
}
?>
