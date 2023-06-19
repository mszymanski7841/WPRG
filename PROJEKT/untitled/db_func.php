<?php

include_once 'config.php';

function db_connect()
{
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);
    if ($conn === false) {
        die('Bląd połączenia z bazą danych!');
    }

    return $conn;
}

function db_disconnect($connection)
{
    mysqli_close($connection);
}


