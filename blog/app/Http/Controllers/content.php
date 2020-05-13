<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class content extends Controller
{
    function services()
    {
		$data["services"] = ["Logo Designing","Web Designing","SEO"];
		return view("content.services" ,$data);
    }
    function aboutus()
    {
		$data["aboutContent"] = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
		return view("content.aboutus" ,$data);
    }
    function portfolio()
    {
		$data["services"] = ["Logo Designing","Web Designing","SEO"];
		return view("content.portfolio" ,$data);
    }
}

// Controller -> Business logic 
// View -> HTML, CSS , JS 
// Model -> DB related 