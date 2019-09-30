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
                <div class="form-group">  <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror"  placeholder="Entrez votre pseudo">  @error('name')  <div class="invalid-feedback">      {{ $errors->first('name')}}  </div>  @enderror </div> 
                <div class="form-group">     
                <input type="text" name="email" class="form-control"      placeholder="Entrez votre email">    
                </div>    <button type="submit" class="btn btn-primary">Ajouter le client</button> 

                <select class="custom-select @error('status') is-invalid @enderror" name="status">    
                    <option value="" selected>Status...</option>    
                    <option value="1">Actif</option>    
                    <option value="0">Inactif</option> 
                </select> 
            </form>

    </div>
@endsection