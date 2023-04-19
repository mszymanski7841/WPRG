<?php
$file = fopen('odwiedziny.txt','r+');
if(!$file){
    echo "Nie udało się otworzyć pliku";
}else{
    echo "Ilość odwiedzin: ";
    $counter = fgets($file);
    echo $counter;
    $counter += 1;
    fseek($file, 0);
    fwrite($file,$counter);
    rewind($file);
    fclose($file);
}