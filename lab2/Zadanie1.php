<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Zadanie1.php" method="post">
    <ul>
        <li>
            <label>Imię i nazwisko *</label> <input id="nameid" name="name" placeholder="Twoje imię i nazwisko" required="required"> <br>
        </li>
        <li>
            <label>Adres e-mail *</label> <input id="emailid" name="email" placeholder="Twój adres e-mail" type="email" required="required">
        </li>
        <li>
            <label>Telefon kontaktowy </label> <input id="phoneid" name="phone" placeholder="Dozwolone znaki: cyfry" type="tel">
        </li>
        <li>
            <label>Wybierz temat *</label> <select id="topicid" name="topic" required="required">
                <option>Wykonanie strony internetowej</option>
            </select>
        </li>
        <li>
            <label>Treść wiadomości *</label> <textarea id ="textid" name="text" required="required" placeholder="Wpisz tutaj treść swojej wiadomości"></textarea>
        </li>
        <li>
            <label>Preferowana forma kontaktu </label> <br>
            <ul><li><input type="checkbox" name="prefmail"><label>E-mail</label></li></ul>
            <ul><li><input type="checkbox" name="prefphone"><label>Telefon</label></li></ul>
        </li>
        <li>
            <label>Posiadasz już stronę www? </label> <br>
            <ul><li><input type="radio" id="yesid" name="yes"><label>Tak</label></li></ul>
            <ul><li><input type="radio" id="noid" name="yes"><label>Nie</label></li></ul>
        </li>
        <li>
            <label>Załączniki </label> <br>
            <input id="file" value="Wybierz plik" type="file">
        </li>
    </ul>
    <input type="submit" value="Wyślij formularz">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "<ul>";
    if(isset($_POST["name"])){
        echo("<li>".$_POST["name"]."</li>");
    }
    if(isset($_POST["email"])){
        echo("<li>".$_POST["email"]."</li>");
    }
    if(isset($_POST["phone"])){
        echo("<li>".$_POST["phone"]."</li>");
    }
    if(isset($_POST["topic"])){
        echo("<li>".$_POST["topic"]."</li>");
    }
    if(isset($_POST["text"])){
        echo("<li>".$_POST["text"]."</li>");
    }
    echo("<li>");
    if(isset($_POST["prefmail"])){
        echo("E-mail");
        if(isset($_POST["prefphone"])){
            echo(" oraz telefon");
        }
    }elseif(isset($_POST["prefphone"])){
        echo("Telefon");
    }
    echo("</li>");
    echo("<li>");
    if(isset($_POST["yes"])){
        echo("Tak");
    }else{
        echo("Nie");
    }
    echo("</li>");
    echo "</ul>";
}
?>