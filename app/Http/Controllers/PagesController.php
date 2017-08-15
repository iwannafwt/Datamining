<?php

namespace App\http\Controllers;

/*it handles all the static pages*/

class PagesController extends Controller
{



//    public function getIndex(){
//        return view('pages.index.datasetTable');
//    }

    public function getAbout(){
        return view('pages.about');
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function getCvi(){
        return view('pages.cv.cvi');
    }

    public function getCvm(){
        return view('pages.cv.cvm');
    }
}