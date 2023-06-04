<?php
$conn = mysqli_connect('localhost','root','','mojabaza');
if (!$conn){
    echo "Błąd połączenia";
}
$sql = 'SELECT * FROM `samochody` ORDER BY cena ASC LIMIT 5';
$result = $conn->query($sql);
$conn->close();
?>
<HTML>
<head>
<title>Strona główna</title>
<body>
<a href="allcars.php">Wszystkie samochody</a>
<a href="addcar.php">Dodaj samochód</a><br>
<table>
    <tr>
        <th>ID</th>
        <th>MARKA</th>
        <th>MODEL</th>
        <th>CENA</th>
        <th>ROK</th>
        <th>OPIS</th>
        <th>INFO</th>
    </tr>
    <?php
    while($rows=$result->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['marka'];?></td>
            <td><?php echo $rows['model'];?></td>
            <td><?php echo $rows['cena'];?></td>
            <td><?php echo $rows['rok'];?></td>
            <td><?php echo $rows['opis'];?></td>
            <td>
                <a href="info.php?id=<?php echo $rows['id']; ?>">Pokaż szczegóły</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</head>
</HTML>
