<?php
require_once 'classes/Tv.php';

class SmartTv extends Tv {
    public $sistemaOperativo;
    public $wifi;

    public function __construct($_marca, $_modello, $_prezzo, $_sistemaoperativo, $_quantita = 1) {
        parent::__construct($_marca, $_modello, $_prezzo, $_quantita = 1)
        $this->$sistemaOperativo = $_sistemaoperativo;
    }


}
