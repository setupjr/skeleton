<?php

namespace App\Http\Controllers;

use App\Clients;

class FrontClientController extends Controller
{
    public function listClient()
    {
        $clients = Clients::all();

        return view("listacliente", ["clients" => $clients]);
    }
}
