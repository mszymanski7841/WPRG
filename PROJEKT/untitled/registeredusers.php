<!doctype html>
<html>
<head>
    <title>Lista użytkowników</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="logout.php">
    <div class="logout">
        <button class="zoom">Wyloguj się</button>
    </div>
</form>

<h1 id="ih1">Zarejestrowani użytkownicy</h1>

<div class="mainpage"><p><a href="main_pageadmin.php">Strona główna</a></p></div>
<br>


<div class="userlist">
    <div class="tabela-zaw">
        <table border="1">
            <thead>
            <tr>
                <th>ID Użytkownika</th>
                <th>Nazwa użytkownika</th>
            </tr>
            </thead>

            <tbody>
            <?php
            include 'db_func.php';
            $conn = db_connect();
            $result = $conn->query("select * from uzytkownicy");
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['ID']; ?> </td>
                    <td><?php echo $row['username']; ?> </td>
                </tr>
                <?php
            }
            db_disconnect($conn);
            ?>
            </tbody>
        </table>
    </div>
</div>
<br>

</body>
</html>