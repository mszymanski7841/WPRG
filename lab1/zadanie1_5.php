<?php
function trojkat(){
    echo "Podaj podstawe ";
    $a = readline();
    echo "Podaj wysokosc ";
    $h = readline();
    $pole = ($a*$h)/2;
    echo "Pole trojkata wynosi $pole";
}
function trapez(){
    echo "Podaj bok a ";
    $a = readline();
    echo "Podaj bok b ";
    $b = readline();
    echo "Podaj wysokosc ";
    $h = readline();
    $pole = (($a+$b))*$h/2;
    echo "Pole trapezu wynosi $pole";
}
function prostokat(){
    echo "Podaj podstawe a ";
    $a = readline();
    echo "Podaj podstawe b ";
    $b = readline();
    $pole = $a*$b;
    echo "Pole prostokatu wynosi $pole";
}
echo "Wybierz jakie pole chcesz obliczyc\n";
echo "1. Pole trojkata\n";
echo "2. Pole trapezu\n";
echo "3. Pole prostokata\n";

$wybor = readline();
switch($wybor){
    case 1:
        trojkat();
        break;
    case 2:
        trapez();
        break;
    case 3:
        prostokat();
        break;
    default:
        echo "Podana opcja nie istnieje!";

}

?>