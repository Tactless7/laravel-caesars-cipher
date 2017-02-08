@extends('layout.layout')

@section('content')
  <h1>Liste des messages</h1>

  <ul>

    @foreach($posts as $post)
      <li>{{$post->content}}</li>
    @endforeach

  </ul>
@stop
