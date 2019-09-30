<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    public function index(){    
        $clients = Client::all(); 
        return view('clients.index', [        
            'clients' => $clients    
        ]); 
    }

    public function store() {    $name = request('name');    $email = request('email');    $client = new Client();    $client->name = $name;    $client->email = $email;    $client->save();
        return back(); }
    
}
