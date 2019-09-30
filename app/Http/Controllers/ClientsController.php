<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    public function index(){    
        $clients = Client::where('status', 1)->get();
        return view('clients.index', [        
            'clients' => $clients    
        ]); 
    }

    public function store() {    
        request()->validate([    
            'name' => 'required|min:3',    
            'email' => 'required|email', 
            'status'=>'required',
        ]);

        $name = request('name');    
        $email = request('email');    
        $status = request('status');

        $client = new Client();    
        $client->name = $name;   
        $client->email = $email;    
        $client->status = $status;
        $client->save();

        return back(); }
    
}
