<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor implements Schaltserver
{
    public function an() {
        echo 'Motor ist an';
    }

    public function aus() {
        echo 'Motor ist aus';
    }
}
