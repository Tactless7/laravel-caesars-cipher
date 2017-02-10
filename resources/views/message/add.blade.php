@extends('layout.layout')

@section('content')
    <h1>Ajouter un message secret</h1>
    <form action="/add/post" method="post">
        <label for="content">Contenu : <input type="text" name="content" required></label>
        <label for="decalage">Décalage : <input type="number" name="decalage" required></label>
        {{ csrf_field() }}
        <button type="submit">Ajouter le message</button>
    </form>
@stop
