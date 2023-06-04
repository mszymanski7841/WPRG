<?php
$conn = mysqli_connect('localhost', 'root', '', 'mojabaza');
if (!$conn) {
    echo "Błąd połączenia";
}

if (isset($_GET['id'])) {
    $carId = $_GET['id'];

    $sql = "SELECT * FROM `samochody` WHERE id = $carId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $carData = $result->fetch_assoc();
        $marka = $carData['marka'];
        $model = $carData['model'];
        $cena = $carData['cena'];
        $rok = $carData['rok'];
        $opis = $carData['opis'];
    } else {
        echo "Nie znaleziono samochodu o podanym ID.";
    }
} else {
    echo "Nieprawidłowe ID samochodu.";
}
$conn->close();
?>
<HTML>
<head>
    <title>Informacje o samochodzie</title>
<body>
<h1>Informacje o samochodzie</h1>
<table>
    <tr>
        <th>Marka</th>
        <td><?php echo $marka; ?></td>
    </tr>
    <tr>
        <th>Model</th>
        <td><?php echo $model; ?></td>
    </tr>
    <tr>
        <th>Cena</th>
        <td><?php echo $cena; ?></td>
    </tr>
    <tr>
        <th>Rok</th>
        <td><?php echo $rok; ?></td>
    </tr>
    <tr>
        <th>Opis</th>
        <td><?php echo $opis; ?></td>
    </tr>
</table>
<a href="main.php">Powrót</a>
</body>
</head>
</HTML>