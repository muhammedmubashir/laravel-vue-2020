<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postModel;

class postController extends Controller
{
    function index()
    {
    	$data['postList'] = postModel::all();
    	// Where id > 100 & id < 200
    	// limit 50, 10
    	// group by colnames
    	// // order by 

    	// $data['postList'] = postModel::select('title')
     //    ->orderBy('title', 'asc')
     //    ->limit(3)
     //    ->get();
    	return view("post.list",$data);
    }

    function create()
    {
    	return view("post.create");
    }

    function store()
    {}

    function show()
    {}

    function edit()
    {}

    function update()
    {}

    function destroy()
    {}
    

    function myfunction()
}
