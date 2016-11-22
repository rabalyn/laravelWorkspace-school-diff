<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schalter
{
    private $link;

    public function create($link) {
        $this->link = $link;
    }

    public function anschalten() {
        $this->link->an();
    }

    public function ausschalten() {
        $this->link->aus();
    }
}
