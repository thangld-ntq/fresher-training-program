<?php
	class UserModels
	{
		public function getUser()
		{
			$conn = mysqli_connect('localhost','root','123456','fresher');
			if (mysqli_connect_errno()) {
				echo "connect error:".mysqli_connect_error() ;
			}
			$result = $conn->query('SELECT * FROM user');
			$data  =  array();
			if($result->num_rows > 0){
				while ($r = mysqli_fetch_assoc($result)) {
					$data[] = $r;
				}
			}
			return $data;
		}
		public function login($user)
		{
			
			$conn = mysqli_connect('localhost','root','123456','fresher');
			if (mysqli_connect_errno()) {
				echo "connect error:".mysqli_connect_error() ;
			}
			$password = md5($password);
		    $query = mysql_query("SELECT username, pass FROM user WHERE username=$user['username']");
		    if (mysql_num_rows($query) == 0) {
		        exit;
		    }
		    $row = mysql_fetch_array($query);
		    if ($password != $row['password']) {
		        exit;
		    }else {
		    	return $user;
		    }
		}
	}
?>