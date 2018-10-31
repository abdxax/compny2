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

public function getPostion(){
	$s=$this->dpo->prepare("SELECT * FROM role");
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

public function getMech(){
	$s=$this->dpo->prepare("SELECT * FROM equipment");
	$s->execute(array());
	return $s;
}

public function getmaintenance_type(){
	$s=$this->dpo->prepare("SELECT * FROM maintenance_type");
	$s->execute(array());
	return $s;
}

public function AddNewAppoi($id_que,$id_typ,$id_dep,$dat,$create,$note,$status){
	$s=$this->dpo->prepare("INSERT INTO request_maintenance(id_equ,id_type,id_department,day,Note,craete_att,status)VALUES (?,?,?,?,?,?,?)");
	if($s->execute(array($id_que,$id_typ,$id_dep,$dat,$note,$create,$status))){
		header("location:index.php");
	}

	
}

public function getAllDateApp($dep){
	$sql=$this->dpo->prepare("SELECT * FROM request_maintenance LEFT JOIN equipment ON request_maintenance.id_equ=equipment.equipment_on WHERE request_maintenance.status=? AND request_maintenance.id_department=?");
	$sql->execute(array("new",$dep));
	return $sql;
}

public function getManint($id){
	$sql=$this->dpo->prepare("SELECT * FROM maintenance_type WHERE type_id=?");
	$sql->execute(array($id));
	foreach ($sql as $key ) {
		return $key['type_maninte'];
	}
}


public function getDepartemtId($email){
	$sql=$this->dpo->prepare("SELECT * FROM info WHERE email=?");
	$sql->execute(array($email));
	foreach ($sql as $key ) {
		return $key['department_id'];
	}
	
}


public function login($email,$pass){
	$sql=$this->dpo->prepare("SELECT * FROM user WHERE email=? AND password=?");
	$sql->execute(array($email,$pass));
	if ($sql->rowCount()==1) {
		foreach ($sql as $key ) {
			if ($key['role_id']==1) {
				$_SESSION['email']=$email;
				$_SESSION['pass']=$pass;
				$_SESSION['role']=$key['role_id'];
				$_SESSION['depart']=$this->getDepartemtId($email);
				header("location:admin/index.php");
			}
			else if($key["role_id"]==2){
				$_SESSION['email']=$email;
				$_SESSION['pass']=$pass;
				$_SESSION['role']=$key['role_id'];
				$_SESSION['depart']=$this->getDepartemtId($email);
				header("location:head/index.php");

			}
		}
	}
}

public function getTickit($id){
	$sql=$this->dpo->prepare("SELECT * FROM request_maintenance LEFT JOIN equipment ON request_maintenance.id_equ=equipment.equipment_on WHERE request_maintenance.status=? AND request_maintenance.id_requiest=?");
	$sql->execute(array("new",$id));
	return $sql;
}

public function getEmployeeAtDepartment($id){
	$sql=$this->dpo->prepare("SELECT * FROM info  WHERE department_id=?");
	$sql->execute(array($id));
	return $sql;


}

 public function getAlluser(){
    	$d=$this->dpo->prepare("SELECT * FROM info");
    	$s=$d->execute();
    	return $d;
    }


   public function openTicket($email,$req,$dt,$note,$dep){
   	$d=$this->dpo->prepare("INSERT INTO maintenance(id_request,email_employee,Note,status,depart,create_at)VALUES (?,?,?,?,?,?)");
   	if($d->execute(array($req,$email,$note,"open",$dep,$dt))){
   		$sq=$this->dpo->prepare("UPDATE request_maintenance SET status=? WHERE id_requiest=?");
   		if($sq->execute(array("open",$req))){
   			header("index.php?msg=Done");
   		}
   	}

   }

}

//$c=new comp2();
//$c->ts();
