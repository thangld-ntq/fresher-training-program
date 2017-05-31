<?php
	function checkEmail($email)
	{
		try{
			$pattern = "/^fresher[a-zA-Z0-9]*@ntq\-solution\.com\.vn$/";
			if(preg_match($pattern, $email)){
				echo $email;
			}else{
				throw new Exception("Email sai đinh dạng");
				
			}

		}catch(Exception $e){
			echo 'mesage: '.$e->getMessage();
		}
	}
	checkEmail('fresherthang@ntq-solution.com.vn');
?>