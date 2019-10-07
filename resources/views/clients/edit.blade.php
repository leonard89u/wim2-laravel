@extends('layouts.app')

@section('content')

<form action="/clients/{{$client->id}}" method="post">    
                @method('PATCH')
                @csrf    
                <div class="form-group">  <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror"  placeholder="Entrez votre pseudo"value="{{ old('champ') ?? $client->champ }}">  
                @error('name')  
                <div class="invalid-feedback">      
                {{ $errors->first('name')}}  
                </div>  @enderror 
                </div> 
                <div class="form-group">     
                <input type="text" name="email" class="form-control"      placeholder="Entrez votre email" value="{{ old('champ') ?? $client->champ }}">    
                </div>     
                <select class="custom-select @error('status') is-invalid @enderror" name="status">    
                    <option value="" selected>Status...</option>    {{ (old('status') ?? $client->status) === 1  ? "selected":"" }}
                    <option value="1" {{ (old('status') ?? $client->status) === 1  ? "selected":"" }}>Actif</option>    
                    <option value="0" {{ (old('status') ?? $client->status) === 0  ? "selected":"" }}>Inactif</option> 
                </select> 
                <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@endsection