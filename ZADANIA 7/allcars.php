<?php
$conn = mysqli_connect('localhost','root','','mojabaza');
if (!$conn){
    echo "Błąd połączenia";
}
$sql = 'SELECT * FROM samochody ORDER BY rok';
$result = $conn->query($sql);
$conn->close();
?>
<html>
<a href="main.php">Powrót</a>
<table>
    <tr>
        <th>ID</th>
        <th>MARKA</th>
        <th>MODEL</th>
        <th>CENA</th>
        <th>ROK</th>
        <th>OPIS</th>
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
        </tr>
        <?php
    }
    ?>
</table>
</html>