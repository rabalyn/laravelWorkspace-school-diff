<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binary_Serialisierung implements Serialisierungsserver
{
    public function serialize($data) {
        $serializedData = serialize($data);
        file_put_contents('foobar.ser', $serializedData);
    }

    public function deserialize() {
        
    }
}
