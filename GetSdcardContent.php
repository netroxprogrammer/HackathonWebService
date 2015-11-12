<?php
$response=array();
if($_GET['submit']){
	
	$response['success']="1";
	$response['sdcard']="sdcard";
	echo json_encode($response);
}

?>
<form action="GetSdcardContent.php" method="get">
<input type="submit" name="submit" />
</form>
