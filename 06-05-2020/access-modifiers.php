<?php
// encapsulation / access modifiers

// public
// protected
// private
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// class people
// {
// 	public $awam;
// 	protected $politicians;
// 	private $journalist;

// 	function setValues()
// 	{
// 		$this->awam 		= "Mazloom";
// 		$this->politicians 	= "Mazloom & Emandar";
// 		$this->journalist 	= "Mazloom & Sachy";
// 	}
// 	function show()
// 	{
// 		echo $this->awam."<br>";
// 		echo $this->politicians."<br>";
// 		echo $this->journalist;
// 	}
// }

// class human extends people
// {
// 	function setValues()
// 	{
// 		$this->awam 		= "Changed Mazloom";
// 		$this->politicians 	= "Changed Mazloom & Emandar";
// 		$this->journalist 	= "Changed Mazloom & Sachy";
// 	}
// }

// $obj_human = new human();
// $obj_human->setValues();
// $obj_human->show();


// // $obj_p = new people();
// // $obj_p->setValues();
// // $obj_p->show();
// // $obj_p->awam 		= "Mazloom";
// // // $obj_p->politicians = "Emandar";
// // // $obj_p->journalist  = "Sachy";
// // $obj_p->show();
// Design Pattern -> Singleton
class test
{
	private function __construct()
	{

	}

	static function create()
	{
		static $testObject;
		if(is_object($testObject))
		{
			return $testObject;
		}
		$testObject = new test();
		return $testObject;
	}

	function show_msg()
	{
		echo "I M here";
	}
}
// can not call, due to private constructor
// $obj_test = new test();
// $obj_test->create();
$obj_test = test::create();
$obj_test->show_msg();
?>