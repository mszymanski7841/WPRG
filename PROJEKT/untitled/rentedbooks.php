<!doctype html>
<head>
    <title>Wypożyczone książki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="logout.php">
    <div class="logout">
        <button class="zoom">Wyloguj się</button>
    </div>
</form>
<h1 id="ih1">Wypożyczone książki</h1>
<div class="mainpage"><p><a href="main_page.php">Strona główna</a>
        <br>
        <?php
        require_once 'dproces.php';
        include 'db_func.php';
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        $user = $_SESSION['user']['ID'];
        $conn = db_connect();
        $result = $conn->query("SELECT wypozyczenia.ID_Książki, ksiazki.Tytuł, ksiazki.Autor, ksiazki.Gatunek, ksiazki.Rok_wydania from wypozyczenia INNER JOIN ksiazki ON ksiazki.ID_Książki=wypozyczenia.ID_książki WHERE ID_Użytkownika='$user'");
        ?>

        <br>
    <table class="table" border="1">
        <thead>
        <tr>
            <th>ID Książki</th>
            <th>Tytuł</th>
            <th>Autor</th>
            <th>Gatunek</th>
            <th>Rok wydania</th>
            <th colspan="1">Operacja</th>
        </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['ID_Książki'] ?></td>
                <td><?php echo $row['Tytuł'] ?></td>
                <td><?php echo $row['Autor'] ?></td>
                <td><?php echo $row['Gatunek'] ?></td>
                <td><?php echo $row['Rok_wydania'] ?></td>
                <td>
                    <a href="dproces.php?back=<?php echo $row['ID_Książki']; ?>">Oddaj</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>