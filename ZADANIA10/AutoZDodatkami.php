<?php
require_once 'NoweAuto.php';

class AutoZDodatkami extends NoweAuto{
    const ALARM = 300;
    const RADIO = 100;
    const KLIMATYZACJA = 600;

    public $alarm;
    public $radio;
    public $klimatyzacja;

    public function __construct($model, $cenaEuro, $kursEuro, $alarm, $radio, $klimatyzacja)
    {
        parent::__construct($model, $cenaEuro, $kursEuro);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }
    public function obliczCene()
    {
        $cenaBezDodatkow = parent::obliczCene();
        $cenaZDodatkami = $cenaBezDodatkow + self::ALARM + self::RADIO + self::KLIMATYZACJA;
        return $cenaZDodatkami;
    }
}
