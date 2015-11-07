<?php
include_once 'Libraries/Database.php';
$response=array();
$database=new Database();

if($_GET['Accounts'] && $_GET['User_Number']){
	$accounts=$_GET['Accounts'];
	$User_Number=$_GET['User_Number'];
	$insert=$database->Insert("insert into  accounts(Account_Name,User_Number) values('$accounts','$User_Number')");
	if($insert){
		$response['success']="1";
		$response['message']="Data Successfully Enter";
		echo json_encode($response);
	}else{
		$response['success']="0";
		$response['message']="ops ! Sorry No Entery";
		echo json_encode($response);
	}
}
else{
	$response['success']="0";
	$response['message']="Sorry Column not Found";
	echo json_encode($response);
}

?>