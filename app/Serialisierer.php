<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serialisierer
{
    private $link;

    public function create($link) {
        $this->link = $link;
    }

    public function serialisieren($data) {
        $this->link->serialize($data);
    }
}
