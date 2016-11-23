<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\XML_Serialisierung;
use App\Binary_Serialisierung;
use App\Serialisierer;
use App\Handyliste;
use App\Handy;

class Serialisierungscontroller extends Controller
{
    public function serialize($type) {
        if($type == 'xml') {
            $server = new XML_Serialisierung;
            echo 'xml<br>';
        } else if($type == 'bin') {
            $server = new Binary_Serialisierung;
            echo 'bin<br>';
        }

        $serialisierer = new Serialisierer;
        $serialisierer->create($server);

        $data = new Handyliste;
        $h = new Handy;
        $h->setHersteller('Samsung');
        $h->setModell('S7');
        $h->setPreis(499.95);
        $data->addHandy($h);
        $h1 = new Handy;
        $h1->setModell('Burning Note');
        $h1->setHersteller('Firestarter');
        $h1->setPreis(6.61);
        $data->addHandy($h1);


        $serialisierer->serialisieren($data);
    }
}
