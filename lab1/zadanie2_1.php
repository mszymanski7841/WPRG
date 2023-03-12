<?php
function zadanie2_1($arg)
{
    $liczby = array();
    for ($i = 0; $i < 10; $i++) {
        $liczby[] = rand();
    }
    return $liczby[$arg];

}
echo zadanie2_1(1);
?>

