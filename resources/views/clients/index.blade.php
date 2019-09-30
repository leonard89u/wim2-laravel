@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Clients</h1> 

        <ul>    
            <?php foreach ($clients as $client): ?>
                <li><?= $client->name ?></li>    
            <?php endforeach; ?> 
        </ul>

        <h2>Nouveau Client</h2> 
            <form action="clients" method="post">    
                @csrf    
                <div class="form-group">      
                <input type="text" name="name" class="form-control"      placeholder="Entrez votre pseudo">    
                </div>    
                <div class="form-group">     
                <input type="text" name="email" class="form-control"      placeholder="Entrez votre email">    
                </div>    <button type="submit" class="btn btn-primary">Ajouter le client</button> 
            </form>

    </div>
@endsection