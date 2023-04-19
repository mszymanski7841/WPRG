<?php
$cookie = 'odwiedziny';
$visited = 'odwiedzone';
if(!isset($_COOKIE[$visited])){
    if(isset($_COOKIE[$cookie])){
    $ilosc_odwiedzin = $_COOKIE[$cookie] + 1;

}else{
    $ilosc_odwiedzin = 1;
}
    setcookie($cookie, $ilosc_odwiedzin, time()+3600);
    setcookie($visited, true, 0);
}else{
    $ilosc_odwiedzin = $_COOKIE[$cookie];
}
echo "Ilosc odwiedzin: " .$ilosc_odwiedzin."<br>";
$max = 5;
if($ilosc_odwiedzin>=5){
    echo "Odwiedzono stronę " .$ilosc_odwiedzin. " razy";
}
?>