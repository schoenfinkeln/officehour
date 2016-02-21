<?php

namespace App\Http\Controllers;

use App\Officehour;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index(){
        $officehours = Officehour::with('appointments')->get();
        return view('index', compact('officehours'));
    }
}
