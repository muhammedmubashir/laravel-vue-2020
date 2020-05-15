<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentsModel extends Model
{
    protected $table 		= "comments";
    protected $primaryKey 	= "comments_id";
    public $timestamps 		= false;

    // function post()
    // {
    // 	return $this->belongsTo("App\postModel","post_id");
    // }

    //https://laravel.com/docs/7.x/queries

    // function getAllCommentsWithImagePosts()
    // {
    // 	$users = $this->select('select * from users where active = ?', [1]);
    // }
}
