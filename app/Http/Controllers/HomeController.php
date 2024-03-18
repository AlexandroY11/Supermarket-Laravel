<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
