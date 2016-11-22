<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Handy;
use App\Handyliste;

class ItController extends Controller
{
    // 'php artisan make:controller ItController'

    public function create() {
        $h1 = new Handy();
        $h1->setHersteller('Apple');
        $h1->setModell('3GS');
        $h1->setPreis(299.99);

        $h2 = new Handy();
        $h2->setHersteller('Samsung');
        $h2->setModell('S7');
        $h2->setPreis(199.99);

        $h3 = new Handy();
        $h3->setHersteller('One Plus');
        $h3->setModell('One');
        $h3->setPreis(599.99);

        $handyListe = new Handyliste();
        $handyListe->addHandy($h1);
        $handyListe->addHandy($h2);
        $handyListe->addHandy($h3);

        //return $handyListe->toString();
        $filteredSamsung = $handyListe->sucheHersteller('One Plus');
        return $filteredSamsung->toString();
    }

}
