<?php
//abstract keyword
error_reporting(E_ALL);
ini_set('display_errors', 'On');
abstract class employee
{
	public $firstname;
	public $lastname;
	public $dob;
	public $joining_date;
	public $salary;

	function updateInfo()
	{
		$this->firstname 	= "Muhammad";
		$this->lastname 	= "Salik";
		$this->dob 			= "01-01-1990";
		$this->joining_date = "01-01-2019";
	}

	abstract public function salary();
}

class DailyEmployee extends employee
{
	public $per_day;
	public $no_of_days;

	function salary()
	{
		return round($this->per_day * $this->no_of_days);
	}

	function setValues()
	{
		$this->per_day = 1000;
		$this->no_of_days = 22;
	}
}


class PermitEmployee extends employee
{
	public $annual_salary;

	function salary()
	{
		return round($this->annual_salary / 12);
	}

	function setValues()
	{
		$this->annual_salary = 1200000;
	}
}
$dailyEmployeeObject = new PermitEmployee();
$dailyEmployeeObject->setValues();
echo $dailyEmployeeObject->salary();
?>