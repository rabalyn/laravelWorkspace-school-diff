<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampe implements Schaltserver
{
    public function an() {
        echo 'Lampe ist an';
    }

    public function aus() {
        echo 'Lampe ist aus';
    }
}
