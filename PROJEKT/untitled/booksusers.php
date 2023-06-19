<!doctype html>
<head>
    <title>Książki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="logout.php">
    <div class="logout">
        <button class="zoom">Wyloguj się</button>
    </div>
</form>
<h1 id="ih1">Dostępne książki</h1>
<div class="mainpage"><p><a href="main_page.php">Strona główna</a></p>
        <br>
    <?php
    require_once 'dproces.php';
    include 'db_func.php';
    if (isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

    $conn = db_connect();
    $result = $conn->query("SELECT * FROM ksiazki");
    ?>
    <br>
    <div class="tabelka">
        <table class="table" border="1">
            <thead>
            <tr>
                <th>ID Książki</th>
                <th>Okładka</th>
                <th>Tytuł</th>
                <th>Autor</th>
                <th>Gatunek</th>
                <th>Rok wydania</th>
                <th colspan="2">Operacja</th>
            </tr>
            </thead>
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Książki'] ?></td>
                    <td><img src="./okladki/<?php echo $row['image']?>" class="okladka"> </td>
                    <td><?php echo $row['Tytuł'] ?></td>
                    <td><?php echo $row['Autor'] ?></td>
                    <td><?php echo $row['Gatunek'] ?></td>
                    <td><?php echo $row['Rok_wydania'] ?></td>
                    <td><?php
                        if ($row['Wypożyczone'] === "0") {
                            ?>
                            <a href="dproces.php?rent=<?php echo $row['ID_Książki']; ?>">Wypożycz</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php }
            db_disconnect($conn); ?>
        </table>
    </div>
    <p> Jeżeli pole operacji jest puste to książka jest już wypożyczona przez kogoś innego! </p>
</body>
</html>