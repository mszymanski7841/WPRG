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

<div class="mainpage"><p><a href="main_pageadmin.php">Strona główna</a>
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
        $result = $conn->query("SELECT * from wypozyczenia");
        ?>

        <br>
    <table class="table" border="1">
        <thead>
        <tr>
            <th>ID Wypożyczenia</th>
            <th>ID Użytkownika</th>
            <th>ID Książki</th>
            <th>Data Wypożyczenia</th>
            <th colspan="1">Operacja</th>
        </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['ID_Wypożyczenia'] ?></td>
                <td><?php echo $row['ID_Użytkownika'] ?></td>
                <td><?php echo $row['ID_Książki'] ?></td>
                <td><?php echo $row['Data_wypożyczenia'] ?></td>
                <td>
                    <a href="dproces.php?return=<?php echo $row['ID_Książki']; ?>">Zwróć</a>
                </td>
            </tr>
        <?php }; ?>
    </table>
</body>
</html>