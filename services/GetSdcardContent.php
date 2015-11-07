<?php
$response=array();
if(isset($_GET['submit'])){
	
	$response['success']="1";
	$response['sdcard']="sdcard";
	echo json_encode($response);
}
?>
