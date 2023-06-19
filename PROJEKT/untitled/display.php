<?php
require_once 'dproces.php';
include 'db_func.php';
$conn = db_connect();
$result = $conn->query("SELECT * FROM ksiazki");
//$id = '';
//$image = '';
//$title = '';
//$author = '';
//$genre = '';
//$date = '';
//$update = '';
?>


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

<div class="mainpage"><p><a href="main_pageadmin.php">Strona główna</a></p>
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    } ?>
</div>

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
            <th>Wypożyczona</th>
            <th colspan="2">Operacja</th>
        </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['ID_Książki'] ?></td>
                <td><img src="./okladki/<?php echo $row['image'] ?>" class="okladka"></td>
                <td><?php echo $row['Tytuł'] ?></td>
                <td><?php echo $row['Autor'] ?></td>
                <td><?php echo $row['Gatunek'] ?></td>
                <td><?php echo $row['Rok_wydania'] ?></td>
                <td><?php if ($row['Wypożyczone'] === "0") {
                        echo "Nie";
                    } else {
                        echo "Tak";
                    } ?></td>
                <td>
                    <a href="display.php?edit=<?php echo $row['ID_Książki']; ?>">Edytuj</a>
                    <a href="dproces.php?delete=<?php echo $row['ID_Książki']; ?>">Usuń</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <!--    <img src="./okladki/potop.jpg.jpg">-->

</div>


<div class="row justify-content-center">
    <form action="dproces.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Okładka</label>
        <input type="file" name="uploadimage" value="<?php echo $image; ?>"
               class="form-control">

        <div class="form-group">
            <label>Tytuł</label>
            <input type="text" name="title" value="<?php echo $title; ?>" placeholder="Podaj tytuł"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Autor</label>
            <input type="text" name="author" value="<?php echo $author; ?>" placeholder="Podaj autora"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Gatunek</label>
            <input type="text" name="genre" value="<?php echo $genre; ?>" placeholder="Podaj gatunek"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Rok wydania</label>
            <input type="text" name="date" value="<?php echo $date; ?>" placeholder="Podaj rok wydania książki"
                   class="form-control">
        </div>
        <div class="form-group">
            <?php
            if ($update == true) {
                ?>
                <button type="submit" name="update">Zapisz</button>
            <?php } else { ?>
                <button type="submit" name="save">Dodaj</button>
            <?php } ?>
        </div>
    </form>
</div>
</body>
</html>