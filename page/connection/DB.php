<?php
/**
* 
*/
class DBconnection 
{
	protected  $db;
	protected $x;
	function __construct($username,$pass,$dbname)
	{
	//	try {
			$this->db=new PDO("mysql:host=localhost;dbname=".$dbname."",$username,$pass) or die("error");
			$this->x="a <br>";
		//} catch (Exception $e) {
			
		//}
	}

	
}

//$d=new DBconnection("root","","company2");