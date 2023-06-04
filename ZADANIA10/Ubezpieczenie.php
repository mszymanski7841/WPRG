<?php
require_once 'AutoZDodatkami.php';
require_once 'NoweAuto.php';
class Ubezpieczenie extends AutoZDodatkami{
    public $procUbezp;
    public $liczbaLat;

    public function __construct($model, $cenaEuro, $kursEuro, $alarm, $radio, $klimatyzacja, $procUbezp, $liczbaLat)
    {
        parent::__construct($model, $cenaEuro, $kursEuro, $alarm, $radio, $klimatyzacja);
        $this->procUbezp = $procUbezp;
        $this->liczbaLat = $liczbaLat;
    }
    public function obliczCene()
    {
        $cenaKoncowa = parent::obliczCene();
        $cenaUbezpieczenia = $this->procUbezp * ($cenaKoncowa * ((100 - $this->liczbaLat)/100));
        return $cenaUbezpieczenia;
    }
}