<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <label>Dzień </label><input type="number" name="day" placeholder="Dzień"><br>
    <label>Miesiąc </label><input type="number" name="month" placeholder="Miesiąc"><br>
    <label>Rok </label><input type="number" name="year" placeholder="Rok"><br>
    <input type="submit" name="submit" value="Prześlij"><br>

</form>
</body>
</html>

<?php

function weekday(){
        $day = $_GET['day'];
        $month = $_GET['month'];
        $year = $_GET['year'];
        $date = "$year-$month-$day";
        echo "Urodziłeś się w ".date("l", strtotime($date))."<br>";
}
function age(){
    $day = $_GET['day'];
    $month = $_GET['month'];
    $year = $_GET['year'];
    $date = "$year-$month-$day";
    $now = strtotime("now");
    $seconds = $now - strtotime($date);
    $years = date('Y',$seconds) - 1970;
    echo "Masz ".$years." lat<br>";
}
function daystobirthday(){
    $day = $_GET['day'];
    $month = $_GET['month'];
    $year = $_GET['year'];
    $now = strtotime("now");
    $birthdate = strtotime("$year-$month-$day");
    $next_birthday = strtotime(date('Y')."-".$month."-".$day);

    if($next_birthday < $now) {
        $next_birthday = strtotime((date('Y')+1)."-".$month."-".$day);
    }

    $diff = $next_birthday - $now;
    $daysleft = floor($diff / (60 * 60 * 24));

    echo "Pozostało ".$daysleft. " dni do następnych urodzin";
}
if(isset($_GET['submit'])) {
    weekday();
    age();
    daysToBirthday();
}

?>
