@extends('layout.layout')

@section('content')
  <h1>Liste des messages</h1>

  <ul>

    @foreach($posts as $post)
      <a href="/show/{{$post->id}}"><li>{{$post->content}}</li></a>
    @endforeach

  </ul>

  <a href="add/post">Ajouter un message secret</a>
@stop
