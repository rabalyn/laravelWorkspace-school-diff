<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel
{
    private $property = [];

    public function __set($name, $value) {
        $this->property[$name] = $value;
    }

    public function __get($name) {
        if(isset($this->property[$name])) {
            return $this->property[$name];
        } else {
            return null;
        }
    }
}
