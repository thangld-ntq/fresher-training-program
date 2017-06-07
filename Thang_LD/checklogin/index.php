<?php 
$action = $_GET['action'];
	require_once('controller/usercontroller.php');
	$usercontroller = new UserController();
	$usercontroller->$action();
 ?>