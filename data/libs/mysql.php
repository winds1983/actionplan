<?php
class MySQL
{
	public $host;
	
	public $dbuser;
	
	public $dbpwd;
	
	public $dbname;
	
	public $conn;
	
	public function __construct($host, $dbuser, $dbpwd, $dbname)
	{
		$this->host = $host;
		$this->dbuser = $dbuser;
		$this->dbpwd = $dbpwd;
		$this->dbname = $dbname;
		
		$conn = mysql_connect($host, $dbuser, $dbpwd);
		mysql_select_db($dbname, $conn);
		mysql_query("set names 'utf-8'");
	}
}