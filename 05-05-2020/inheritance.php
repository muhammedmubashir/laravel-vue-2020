<?php
//inheritance 
//php Multi level inheritance 
// Multiple inheritance nahi hoti

class A
{
	function method1()
	{
		echo "method1 from class A";
	}
	function method2()
	{
		echo "method2 from class A";
	}
}

class B extends A
{
	function method3()
	{
		echo "method3 from class B";
	}
	function method4()
	{
		echo "method4 from class B";
	}
	//method overriding -> polymorphism
	function method1()
	{
		echo "method1 from class B";
	}
}
// C++ -> diamond problem -> by reference -> 
class C extends B
{
	function method1()
	{
		echo "method1 from class C";
	}
	function method5()
	{
		echo "method5 from class C";
	}
}

$objC = new C();
$objC->method1();
echo "<br>";
$objC->method2();
echo "<br>";
$objC->method3();
echo "<br>";
$objC->method4();
echo "<br>";
$objC->method5();
// $obj_a = new A();
// $obj_a->method1();
// echo "<br>";
// $obj_b = new B();
// $obj_b->method3();
// echo "<br>";
// $obj_b->method4();
// echo "<br>";
// $obj_b->method1();
// echo "<br>";
// $obj_b->method2();




?>