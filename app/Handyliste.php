<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handyliste extends \ArrayObject {

    public function addHandy($handy) {
        $this->append($handy);
    }

    public function sucheHersteller($hersteller) {
        $filteredListe = new Handyliste();

        foreach ($this as $handy) {
            if($handy->getHersteller() == $hersteller) {
                $filteredListe->addHandy($handy);
            }
        }

        return $filteredListe;
    }

    public function toString() {
        $returnString = '';
        foreach ($this as $handy) {
            $returnString .= $handy->toString();
            $returnString .= '<br>';
        }

        return $returnString;
    }
}
