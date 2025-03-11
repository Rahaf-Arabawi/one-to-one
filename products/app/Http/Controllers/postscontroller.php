<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;

class postscontroller extends Controller
{
    public function index(){
       $post = posts::find(1);
    //    return $post;
      // return $post->comments;
      foreach ($post->comments as $comments){
        return $comments->boby;
      }

      // foreach ($post->comments as $comments){
      //   dd($comments->boby);
      // }
    }
}
