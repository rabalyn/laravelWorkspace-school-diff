<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Artikel;

class ArtikelController extends Controller
{
    public function test() {
        $artikel = new Artikel;
        $artikel->bezeichnung = 'Fußball';
        echo $artikel->bezeichnung;
        echo '<br>';
        echo $artikel->preis;
        echo '<br>';
        echo $artikel->bezeichnung;
        echo '<br>';
    }
}
