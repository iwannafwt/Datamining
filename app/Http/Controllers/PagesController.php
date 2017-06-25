<?php

namespace App\http\Controllers;

/*it handles all the static pages*/

class PagesController extends Controller
{
    public function getHomepage(){
        return view('pages.welcome');
    }

    public function getIndex(){
        return view('pages.index');
    }

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

    public function getKnn(){
        return view('pages.theory.knn');
    }

    public function getDecisionTrees(){
        return view('pages.theory.decisionTrees');
    }

    public function getBayes(){
        return view('pages.theory.bayes');
    }

    public function getTheory(){
        return view('pages.theory.index');
    }
}