<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function home()
    {
         $data = array('title' => 'Index Page');
        return view ('Index',$data);
    }
}
