<?php
require_once 'AutoZDodatkami.php';
require_once 'Ubezpieczenie.php';
class NoweAuto{
    public $model;
    public $cenaEuro;
    public $kursEuro;

    public function __construct($model, $cenaEuro, $kursEuro){
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
        $this->kursEuro = $kursEuro;
    }
    public function obliczCene(){
        $cenaPLN = $this->cenaEuro*$this->kursEuro;
        return $cenaPLN;
}
}
$samochod = new NoweAuto("Fiat Panda", 500,4.7);
$cenaPLN = $samochod->obliczCene();
$samochod2 = new AutoZDodatkami("Toyota Yaris", 6000, 4.7, 1, 1, 1); //1 - jest dane wyposazenie, 0 - nie ma
$cena2 = $samochod2->obliczCene();
$samochod3 = new Ubezpieczenie("Fiat Punto", 800, 4.7, 0,1,0,0.8,4);
$cena3 = $samochod3->obliczCene();
echo $cena3;
?>