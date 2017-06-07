<?php 
	class UserController
	{
		public function getUser()
		{
			require_once('../models/usermodels.php');
			$userModel = new UserModels();
			$data = $userModel->getUser();

			require_once('../views/userviews.php');
			$userviews = new UserViews();
			$userviews->listUser($data);

		}
		public function login()
		{
			if(isset($_POST['btn'])) {
				$username = addslashes($_POST['inputUsername']);
    			$password = addslashes($_POST['inputPassword']);
			}
			$user = array(
				'username' =>$username,
				'pass' =>$password,
				);
			
			require_once('../models/usermodels.php');
			$userModel = new UserModels();
			$data = $userModel->login();
			require_once('../views/userviews.php');
			$userviews = new UserViews();
			$userviews->login($user);
		}
	}
 ?>