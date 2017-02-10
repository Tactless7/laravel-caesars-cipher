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

    public function addPost(Request $request){
        $post = new Post;
        $post->content = $request->content;
        $post->decalage = $request->decalage;
        $post->save();
        return redirect()->route('home');
    }

    public function cryptList($id){
        $post = \App\Post::find($id);
    }

    public function cryptMessage($content, $decalage){
        $alphabet = 'abcdefghijklmnopqrstuvwxyz';
        $content = strtolower($content); //tester stripos
        $cryptedContent = '';

        for ($i=0; $i < strlen($content) ; $i++) {
            if(strstr($alphabet, $content[$i])){
                $pos = strpos($alphabet, $content[$i]);
                var_dump($pos + $decalage);
                if(($pos + $decalage) >= strlen($alphabet)){
                    $pos = ($pos + $decalage) - 26;
                    var_dump($pos);
                    $cryptedChar = $alphabet[$pos];
                } else {
                    $cryptedChar = $alphabet[$pos + $decalage];
                }
            } else {
                $cryptedChar = $content[$i];
            }
            $cryptedContent = $cryptedContent . $cryptedChar;
        }
        return $cryptedContent;
    }
}
