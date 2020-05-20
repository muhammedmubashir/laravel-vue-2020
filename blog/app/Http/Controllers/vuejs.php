<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vuejs extends Controller
{
    function index()
    {
    	return view("vue.index");
    }
}
