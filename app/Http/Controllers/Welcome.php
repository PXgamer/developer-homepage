<?php

namespace App\Http\Controllers;

use GrahamCampbell\GitHub\Facades\GitHub;

class Welcome extends Controller
{
    public function index()
    {
        $me = Github::me()->show();

        return view('welcome', ['me' => $me]);
    }
}
