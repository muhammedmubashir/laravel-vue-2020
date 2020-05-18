<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class postModel extends Model
{
    protected $table 		= "posts";
    protected $primaryKey 	= "post_id";
    public $timestamps 		= false;
    // create_at 
    // updated_at 

    //relationship / join function between post & comments
    function comments()
    {	
    	// hasMany("model/table","localkey","foriegn_key")
    	return $this->hasMany
    			("App\commentsModel","post_id","post_id");
    }

    function getAllPosts()
    {
    	// return DB::table('posts')->get();
    	return DB::table('posts')->paginate(5);
    }

    //scss
    // SASS LESS 
}
