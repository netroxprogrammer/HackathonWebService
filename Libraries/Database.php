<?php
require_once 'Config/Config.php';
class Database{
	
	public $DB_HOST=DB_HOST;
	public $DB_NAME=DB_NAME;
	public $DB_PASSWORD=DB_PASSWORD;
	public $DB_USER=DB_USER;
	public  $link;
	public  $error;
	
	public function __construct(){
		$this->Connection();
	}
	public function Connection(){
		$this->link=new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASSWORD, $this->DB_NAME);
		if($this->link){
			$this->error="Database Connection Error: ".$this->link->connect_errno;
		}
	}
	public function Insert($query){
		$insert_data=$this->link=$this->link->query($query) or die($this->error.__LINE__);
		if($insert_data){
			return  true;
		}
		return false;
	}
}
?>