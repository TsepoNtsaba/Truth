<?php

require_once 'includes/constants.php';
class Mysql
{
	private $connection;
	
	function __construct()
	{
		$this->conn  = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database');
	}
	
	
	function verify($un, $pwd)
	{
		
		$query = "SELECT *
				FROM users
				WHERE username = ? AND passowrd = ?
				LIMIT 1";
				
		if($statement = this->connection->prepare($query))
		{
			$statement->bind_param('ss', $un, $pwd);
			$statement->execute();
			
			if($statement->fecth())
			{
				statement->close();
				return true;
			}
		}
	}
}