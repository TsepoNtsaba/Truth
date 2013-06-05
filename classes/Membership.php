<?php

require 'Mysql.php';

class Membership
{
	function validate_user{$un, $pwd) 
	{
		$mysql = New Mysql();
		$ensure_credentials =  $mysql->verify($un, md5($pwd));
		
		if($ensure_credentials)
		{
			$_SESSION['status'] = 'authorized';
			header("location:Home.php");
		}
		else 
		{
			return "Please enter correct username and password"
		}
}