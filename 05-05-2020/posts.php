<?php

require_once("dbManager.php");

class posts extends dbManager 
{
	function __construct()
	{
		parent::__construct();
	}
	function getAllPosts()
	{
		$sql = "SELECT * FROM posts";
		return $this->query($sql);
	}


}

$post = new posts();
$result = $post->getAllPosts();
echo "<pre>";
print_r($result);
echo "</pre>";
?>