<?php
function zadanie4($pesel){
    $rok = substr($pesel,0,2 );
    $miesiac = substr($pesel, 2,2);
    $dzien = substr($pesel, 4, 2);
    $plec = substr($pesel, 10,1 );

    if($miesiac > 80 && $miesiac <= 92){
        $rok += 1800;
        $miesiac -= 80;
    } //lata 1800-1899
    else if($miesiac > 0 && $miesiac <=12){
        $rok += 1900;
    }
    else if($miesiac > 20 && $miesiac <=32){
        $rok += 2000;
        $miesiac -= 20;
    } //lata 2000-2099
    else if($miesiac > 40 && $miesiac <=52){
        $rok += 2100;
        $miesiac -= 40;
    } //lata 2000-2099
    else if($miesiac > 60 && $miesiac <=72){
        $rok += 2200;
        $miesiac -= 60;
    } //lata 2200-2299



    echo  $dzien,"-",$miesiac, "-", $rok, "\n";
    if($plec %2 == 0){
        echo "płeć: Kobieta";
    }else{
        echo "płeć: Mezczyzna";
    }
    echo "\n";
}
zadanie4("07240813117"); //przyklad nr pesel
?>