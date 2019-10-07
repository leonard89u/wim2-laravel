@extends('layouts.app')

@section('content')
<DIV>

    <P><?= $client->name ?></P>

    <P><?= $client->email ?></P>

    <P><?= $client->status ?></P>

</DIV>
<a href="/clients/{{ $client->id }}/edit" class="btn btn-primary my-3">Editer</a>

@endsection  