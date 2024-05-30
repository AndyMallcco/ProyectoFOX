<?php

namespace App\Http\Controllers;

class InicioController
{
    public function __invoke()
    {
        return view('inicio');
    }
}
