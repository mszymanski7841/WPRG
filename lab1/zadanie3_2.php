<?php
function zadanie3_2()
{
    $rzuty = array();
    echo "Podaj ilosc rzutow\n";
    $n = readline();
    for($i = 0; $i<$n; $i++){
        $rzuty[] = rand(1,6);
    }

    print_r($rzuty);
}
zadanie3_2();
?>