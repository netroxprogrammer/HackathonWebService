<?php
require_once 'Libraries/Database.php';

$response=array();

$databaseCon=new Database();

if($_GET['User_Number']){
	$User_Number=$_GET['User_Number'];
$insert=$databaseCon->Insert("Insert into users(User_Number) Values('$User_Number')");
if($insert){
	$response['success']=1;
	$response['message']="Data  Successfully Add";
	
	echo json_encode($response);
  }
  else
  {
  	$response['success']=0;
  	$response['message']= "Oops! An error occurred.";
  	echo json_encode($response);
  }
  $response['success']=0;
  $response['message']="No Column  Found";
}
else{
	$response['success']=0;
	$response['message']="Sorry  Mismatch  Index";
	echo json_encode($response);
}

?>