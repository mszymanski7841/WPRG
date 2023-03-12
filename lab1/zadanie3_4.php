<?php
function czyPierwsza($n){
    $iteracje = 0;
    if($n<2){
        return false;
    }
    for($i=2;pow($i,2)<=$n;$i++){
        $iteracje++;
        if($n%$i==0){
            return false;
        }
    }
    echo "Ilosc wykonanych iteracji wynosi: $iteracje\n";
    return true;
}
$n = 41;
if(czyPierwsza($n)){
    echo "$n jest liczba pierwsza\n";
}else{
    echo "$n nie jest liczba pierwsza\n";
}
?>