<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function list(){
      $posts = \App\Post::all();
      return view('message.list', ['posts' => $posts]);
    }
}
