<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller{
    public function main()
    {
        return view('main');
    }
}