<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postModel;

class postController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {

    	// $data['postList'] = postModel::all();
    	// Where id > 100 & id < 200
    	// limit 50, 10
    	// group by colnames
    	// // order by 

    	// $data['postList'] = postModel::select('title')
	    //    ->orderBy('title', 'asc')
	    //    ->limit(3)
	    //    ->get();
    	// method#1
	    // $data['postList'] 	= postModel::getAllposts();
	    $postObject 		= new postModel();
	    $data['postList'] 	= $postObject->getAllPosts();

		//for this, need to define static getAllposts
		// $data['postList'] 	= postModel::getAllPosts();
	    return view("post.list",$data);
    }

    function create()
    {
        $this->middleware('auth');
    	return view("post.create");
    }

    function store(Request $request)
    {
    	// $_POST
    	// $_GET 
    	
    	// XSS attach -> JS 
    	// sql injection 
    	// CSRF
    	//https://laravel.com/docs/7.x/validation#available-validation-rules
		// HOME WORK     	
    	//validation
    	$validationArray = [
    	"title" => "required|min:5|max:255",
    	"description" => "required"
    	];
    	$validatedData = $request->validate($validationArray);

    	//getting posted data
    	$postedData = $request->all();
    	$post = new postModel();
    	
    	$post->title 		= $postedData['title'];
    	$post->details 		= $postedData['description'];
    	$post->userid 		= 1; //loggedin userid
     	$post->create_date 	= date("Y-m-d");
    	$post->status 		= 1;

    	//for record save in DB
    	$post->save();
  //   	return redirect($to = null, $status = 302, $headers = [], $secure = null);

		// return redirect('/home');
    	// $session->flash
		return redirect()
				->route('posts.index')
				->with("status","Record Saved Successfully!")
		;
    }

    function show($postID,$title="")
    {
    	// $data['post'] = postModel::where("post_id",$postID)->first();
    	// $data['post'] = postModel::where("post_id",$postID)->get();
    	// postModel::findOrFail()
    	// $data['comments'] = commentsModel-> postid -> comments 
    	$data['post'] 		= postModel::find($postID);
    	$data['comments'] 	= postModel::find($postID)->comments;

    	return view("post.show",$data);
    	// flash message 
    	// validation 
    	// model relation 
    }

    function edit()
    {}

    function update()
    {}

    function destroy()
    {}
}
