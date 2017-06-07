<?php 
	class UserViews
	{
		public function formLogin()
		{
			require_once('../templates/login.html');
		}
		public function addUser()
		{
			require_once('../templates/add-user.html');
		}
		public function editUser()
		{
			require_once('../templates/edit-user.html');
		}
		public function listUser($data)
		{
			require_once('../templates/list-users.html');
		}
	}
 ?>