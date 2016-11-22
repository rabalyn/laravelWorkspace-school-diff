<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lampe;
use App\Schalter;
use App\Motor;

class SchaltController extends Controller
{
    public function toggle() {
        $server = new Lampe();
        $schalter = new Schalter();
        $schalter->create($server);
        $schalter->anschalten();
        echo '<br>';
        $schalter->ausschalten();
        echo '<br>';
        echo '<br>';

        $motor = new Motor();
        $schalter->create($motor);
        $schalter->anschalten();
        echo '<br>';
        $schalter->ausschalten();
    }
}
