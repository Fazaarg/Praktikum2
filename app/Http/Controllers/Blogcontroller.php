<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
  
    public function home()
    {
      return view('home');
    } 

    public function tentang()
    {
    return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
    }
}

