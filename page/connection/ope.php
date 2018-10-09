<?php
/**
* 
*/
require "DB.php";

class comp2 extends DBconnection
{
	private $dpo;
	function __construct()
	{
		 parent::__construct("root","","compony2");
		
		  $this->dpo=$this->db;
	}

	public function ts(){
		$s=$this->dpo->prepare("SELECT * FROM user");
		$s->execute();
		foreach ($s as $key) {
			echo $key['email'];
		}
	}


public function getDepartemt(){
	$s=$this->dpo->prepare("SELECT * FROM departemnt");
		$s->execute();
		return $s;
}

public function CreateUser($name,$email,$phone,$depa,$role,$createat,$password){
	$s=$this->dpo->prepare("INSERT INTO user (email,password,role_id) VALUES (?,?,?)");
	if ($s->execute(array($email,$password,$role))) {
	$info=$this->dpo->prepare("INSERT INTO info (email,name,phone,department_id,create_at) VALUES (?,?,?,?,?)");
	if ($info->execute(array($email,$name,$phone,$depa,$createat))) {
		echo "<script>
            alert('Done');
		</script>";
	}
	}
}

public function addMechen ($name,$id,$location,$mec,$time){
	$s=$this->dpo->prepare("INSERT INTO equipment (name,equipment_on,location,MAINT_SCALE,create_at) VALUES (?,?,?,?,?)");
	if ($s->execute(array($name,$id,$location,$mec,$time))) {
	  header("location:../en/operation.php");

	}
}

public function addOper($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15){
	$s=$this->dpo->prepare("INSERT INTO operation (eq_on,PHASES,VOLT,AMPS,P,RPM,PFCOS,CYCLE,MCC,SERIALMODELNO,TYPE,YEAR_OF_INSTALLATION,MANUFACTURE,YEAR_OF_MANUFACTURE,create_at) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	if ($s->execute(array($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15))) {
	  header("location:../en/machien.php");

	}
}

public function getAllMachien(){
	$s=$this->dpo->prepare("SELECT * FROM equipment");
	$s->execute();
	return $s;
}

public function getAllParts($id){
	$s=$this->dpo->prepare("SELECT * FROM parts WHERE id_equ=?");
	$s->execute(array($id));
	return $s;
}
}

//$c=new comp2();
//$c->ts();
