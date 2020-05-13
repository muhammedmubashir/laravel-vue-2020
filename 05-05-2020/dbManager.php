<?php
class dbManager
{
	public $dbManager;
	function __construct()
	{
		require_once("dbConfig.php");
		$this->dbManager = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
	}

	function query($sql)
	{
		return mysqli_query($this->dbManager, $sql);
	}

	function fetch_result()
	{

	}

	function result_count()
	{
		
	}
}
?>