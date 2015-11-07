<?php
include_once 'Libraries/Database.php';
$response=array();

$databaseconnection=new Database();
if($_GET['serialNumber'] && $_GET['simImei'] && $_GET['softwareVersion']){
	$serialNumber=$_GET['serialNumber'];
	$simImei=$_GET['simImei'];
	$softwareVersion=$_GET['softwareVersion'];
	$qeury="insert into  smsinformation(Sim_SerialNumber,Sim_IMEI,SoftwareVersion)
	 values('$serialNumber','$simImei','$softwareVersion')";
	$insert=$databaseconnection->Insert($qeury);
	if($insert){
		$response['success']="1";
		$response['message']="data Enter Successfully";
		echo json_encode($response);
	}
	else{
		$response['success']="0";
		$response['message']="Ops ! data   not Enter";
		echo json_encode($response);	
	}
	
}else{
	$response['success']="0";
	$response['message']="Column  not Found";
	echo json_encode($response);
}
?>