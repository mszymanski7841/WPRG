<?php
function narodowosc()
{
    $narod = array("Polska" => "Polak", "Holandia" => "Holender", "Niemcy" => "Niemiec", "Czechy" => "Czech", "Francja" => "Francuz");

    $kraj = readline();
    if (array_key_exists($kraj, $narod)) {
        return $narod[$kraj];
    }else{
        return "Nierozpoznano narodowosci";
    }
}
echo "Podaj kraj\n";
echo narodowosc();
?>