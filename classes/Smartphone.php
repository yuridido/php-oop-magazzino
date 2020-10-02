<?php
class Smartphone {
    public $marca;
    public $modello;
    public $schermo;
    public $sistemaOperativo;
    public $prezzo;
    public $quantita;

    public function __construct($_marca, $_modello, $_prezzo, $_quantita = 1) {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->prezzo = $_prezzo;
        $this->quantita = $_quantita;
    }



}
