<?php
function zadanie3_1for()
{
    $max = 0;
    $liczby = array();
    for ($i = 0; $i < 10; $i++) { //tablica wypelniana jest losowymi liczbami;
        $liczby[] = rand(1,10);
    }
    for ($i = 0; $i < 10; $i++) {
        if($liczby[$i]>$max){
            $max = $liczby[$i];
        }
    }
    echo "Najwieksza wartosc z tabeli wynosi: $max";
    echo "\n";


}
function zadanie3_1while(){
    $max = 0;
    $liczby = array();
    for ($i = 0; $i < 10; $i++) {
        $liczby[] = rand(1,10);
    }
    $i = 1;
    while($i<10){
        if($liczby[$i]>$max){
            $max = $liczby[$i];
        }
        $i++;
    }
    echo "Najwieksza wartosc z tabeli wynosi: $max";
    echo "\n";
}
function zadanie3_1dowhile(){
    $max = 0;
    $liczby = array();
    for ($i = 0; $i < 10; $i++) {
        $liczby[] = rand(1,10);
    }
    $i = 1;
    do{
        if($liczby[$i]>$max){
            $max = $liczby[$i];
        }
        $i++;
    } while ($i<10);
    echo "Najwieksza wartosc z tabeli wynosi: $max";
    echo "\n";
}
function zadanie3_1foreach(){
    $max = 0;
    $liczby = array();
    for ($i = 0; $i < 10; $i++) {
        $liczby[] = rand(1,10);
    }
    foreach($liczby as $value){
        if($value>$max){
            $max = $value;
        }
    }
    echo "Najwieksza wartosc z tabeli wynosi: $max";
    echo "\n";
}

zadanie3_1for();
zadanie3_1while();
zadanie3_1dowhile();
zadanie3_1foreach();
?>