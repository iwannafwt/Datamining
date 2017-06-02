<?php

namespace App\http\Controllers;

/*it handles all the static pages*/

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.index');
    }
}