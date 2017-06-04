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

    public function getKnn(){
        return view('algorithms.knn');
    }

    public function getDecisionTrees(){
        return view('algorithms.decisionTrees');
    }

    public function getBayes(){
        return view('algorithms.bayes');
    }
}