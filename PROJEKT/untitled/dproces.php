<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'biblioteka') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$image = '';
$title = '';
$author = '';
$genre = '';
$date = '';
$user = $_SESSION['user']['ID'];
$data = date("Y-m-d");


if(isset($_POST['save'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $date = $_POST['date'];

    $mysqli->query("INSERT INTO ksiazki (Tytuł, Autor, Gatunek, Rok_wydania) VALUES ('$title', '$author', '$genre', '$date')");

    $_SESSION['message'] = "Rekord został zapisany!";

    header("Location: display.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM ksiazki WHERE ID_Książki='$id'");

    $_SESSION['message'] = "Rekord został usunięty!";

    header("Location: display.php");
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM ksiazki WHERE ID_Książki='$id'");
    error_reporting(0);
    if (count($result)==1){
        $row = $result->fetch_array();
        $cover = $row['image'];
        $title = $row['Tytuł'];
        $author = $row['Autor'];
        $genre = $row['Gatunek'];
        $date = $row['Rok_wydania'];
    }
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $date = $_POST['date'];

    $image = $_FILES['uploadimage']['name'];
    $tmpname = $_FILES['uploadimage']['tmp_name'];
    $folder = "./okladki/" . $image;

    $mysqli->query("UPDATE ksiazki SET image='$image',Tytuł='$title', Autor='$author', Gatunek='$genre', Rok_wydania='$date' WHERE ID_Książki='$id'");

    $_SESSION['message'] = "Rekord został zaktualizowany!";

    header("Location: display.php");

}
if(isset($_GET['rent'])){
    $id = $_GET['rent'];
    $mysqli->query("INSERT INTO wypozyczenia (ID_Użytkownika, ID_Książki, Data_wypożyczenia) VALUES ('$user', '$id', '$data')");
    $mysqli->query("UPDATE ksiazki SET Wypożyczone=1 WHERE ID_Książki='$id'");
    $_SESSION['message'] = "Pomyślnie wypożyczono książkę!";

    header("Location: booksusers.php");
}
if(isset($_GET['back'])){
    $id = $_GET['back'];
    $mysqli->query("DELETE FROM wypozyczenia WHERE ID_Książki='$id'");
    $mysqli->query("UPDATE ksiazki SET Wypożyczone=0 WHERE ID_Książki='$id'");

    $_SESSION['message'] = "Pomyślnie zwrócono książkę!";

    header("Location: rentedbooks.php");
}
if(isset($_GET['return'])){
    $id = $_GET['return'];
    $mysqli->query("DELETE FROM wypozyczenia WHERE ID_Książki='$id'");
    $mysqli->query("UPDATE ksiazki SET Wypożyczone=0 WHERE ID_Książki='$id'");

    $_SESSION['message'] = "Pomyślnie zwrócono książkę użytkownika!";

    header("Location: rentedbooksadmin.php");
}
if(isset($_POST['add'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $date = $_POST['date'];

    $image = $_FILES['uploadimage']['name'];
    $tmpname = $_FILES['uploadimage']['tmp_name'];
    $folder = "./okladki/" . $image;

    $mysqli->query("INSERT INTO ksiazki (Tytuł, Autor, Gatunek, Rok_wydania, image) VALUES ('$title', '$author', '$genre', '$date','$image')");

    $_SESSION['message'] = "Pomyślnie dodano książkę!";

    header("Location: add.php");
}
if(isset($_POST['addAdmin'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $date = $_POST['date'];

    $image = $_FILES['uploadimage']['name'];
    $tmpname = $_FILES['uploadimage']['tmp_name'];
    $folder = "./okladki/" . $image;

    $mysqli->query("INSERT INTO ksiazki (Tytuł, Autor, Gatunek, Rok_wydania, image) VALUES ('$title', '$author', '$genre', '$date','$image')");

    $_SESSION['message'] = "Pomyślnie dodano książkę!";

    header("Location: addAdmin.php");
}
