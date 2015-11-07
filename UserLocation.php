<?php
require_once 'Libraries/Database.php';
$response=array();
$databaseCon=new Database();

if($_GET['UserIdNumber'] && $_GET['latitude'] && $_GET['longitude']){
	$User_Number=$_GET['UserIdNumber'];
	$latitude=$_GET['latitude'];
	$Longitude=$_GET['longitude'];
	$insert=$databaseCon->Insert("insert into location(Latitude,Longitude,User_Number) 
			values('$User_Number','$latitude','$Longitude')");
	if($insert){
		$response['success']="1";
		$response['message']="data successfully save";
		echo json_encode($response);	 
	}
	else{
		$response['success']="0";
		$response['message']="ops ! data  not save";
		echo json_encode($response);
	}
	
}
else{
	$response['success']="0";
	$response['message']="sorry mismatch index";
	echo json_encode($response);
}

?>