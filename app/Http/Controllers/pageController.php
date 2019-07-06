<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class pageController extends Controller
{

    public function index()
    {

      $posts = post::orderby('id','desc')->get();

      //return view('post')->withposts('$posts');
      return view('post')->with('posts',$posts);
    }
}
