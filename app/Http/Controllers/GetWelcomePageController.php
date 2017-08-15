<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GetWelcomePageController extends Controller
{
    public function getHomepage(){
        return view('pages.welcome');
    }
}
