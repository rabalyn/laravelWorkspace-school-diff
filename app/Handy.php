<?php

namespace App;

class Handy {
    private $hersteller;
    private $modell;
    private $preis;

    public function __toString() {
        return $this->modell . ' von ' . $this->hersteller . ' zum Preis von ' . $this->preis;
    }

    public function getHersteller() {
        return $this->hersteller;
    }

    public function getModell() {
        return $this->modell;
    }

    public function getPreis() {
        return $this->preis;
    }

    public function setHersteller($hersteller) {
        $this->hersteller = $hersteller;
    }

    public function setModell($modell) {
        $this->modell = $modell;
    }

    public function setPreis($preis) {
        $this->preis = $preis;
    }
}
