<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

interface Serialisierungsserver
{
    public function serialize($object);
    public function deserialize();
}
