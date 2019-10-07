<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    public function index(){    
        $clients = Client::actifs()->get();
        return view('clients.index', [        
            'clients' => $clients    
        ]); 
    }

    public function store() {    
//Récupération du tableau des données validées 
$data = request()->validate([    'name' => 'required|min:3',
        'email' => 'required|email',
        'status' => 'required',
    ]); 
    //Création et sauvegarde du nouveau client 
    Client::create($data);

        return back(); }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client) {    
        return view('clients.edit', compact('client')); 
    }

    public function update(Client $client) {    
        //Récupération du tableau des données validées 
        $data = request()->validate([    'name' => 'required|min:3',
                'email' => 'required|email',
                'status' => 'required',
            ]);

        //$cli = Client::where('id', $client->id)->get();
        $name = request('name');    
        $email = request('email');      
        $client->name = $name;    
        $client->email = $email;    
        $client->save();
        return view('clients.edit', compact('client')); 

    }
}