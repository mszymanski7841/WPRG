<?php
function silnia($liczba)
{
    $l = 1;
    if($liczba < 0){
        echo "Silnia nie może być z liczby ujemnej!";
    }else{
        for($a=1; $a<=$liczba; $a++){
            $l *= $a;
        }
        return $l;
    }
}

function silniarek($liczba){
    if($liczba <= 1){
        return 1;
    }else{
        return $liczba*silniarek($liczba-1);
    }
}

echo "Podaj liczbę \n";
$d = readline();

$time1 = microtime(true);
$silnia_nierekurencyjna = silnia($d);
$time2 = microtime(true);
$time_nrek = $time2 - $time1;
echo "Silnia  wynosi: $silnia_nierekurencyjna\n";
echo "Funkcja silnia nierekurencyjna wykonała się w czasie $time_nrek sekund\n";

$time3 = microtime(true);
$silnia_rekurencyjna = silniarek($d);
$time4 = microtime(true);
$time_rek = $time2 - $time1;
echo "Funkcja silnia rekurencyjna wykonała się w czasie $time_rek sekund\n";

if($time_rek>$time_nrek){
    echo "Funkcja nierekurencyjna działa szybciej o ". ($time_rek-$time_nrek)."\n";
}else{
    echo "Funkcja rekurencyjna działa szybciej o ". ($time_nrek-$time_rek) ."\n";
}
?>

