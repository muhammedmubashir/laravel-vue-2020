<?php
// $functionRef = function () 
// {
// 	echo "something from clousre";
// };

// $functionRef();


class simpleClass
{
	private $myData = 100;
}

$simpleClosure = function() {
	return $this->myData;
};


$result = Closure::bind($simpleClosure, new simpleClass(), 'simpleClass');
echo $result();
?>