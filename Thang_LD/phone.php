<?php
	function checkPhoneNumber($phone)
	{
		if(checkNumber($phone)
			&& checkLengthPhone($phone)
			&& checkFormatPhone($phone))
		{
			return "$phone is valid";
		} return "$phone not is valid";
	}
	function checkNumber($phone){
		if(is_numeric($phone))
	    {
	       return true;
	    }
	    else {
	    	 throw new Exception("this is not number.");
	    }
	}
	function checkLengthPhone($phone){
		$len=strlen($phone);
		$first_phone = substr($phone,0,2);
		if($len == 10 && $first_phone == '09' || $len == 11 && $first_phone == 01)
		{
			return true;
		}else{
			throw new Exception ("this is not format length phone");
		}
	}
	function checkFormatPhone($phone)
	{
		$arr =array('098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', '0163', '0162', '091', '094', '0123', '0124', '0125', '0127', '0129','090', '093', '0120', '0121', '0122', '0126', '0128');
		$string = substr($phone,0,3);
		$string1 = substr($phone,0,4);
		if(in_array($string, $arr) || in_array($string1, $arr)){
			return true;
		}else{
			throw new Exception ("this is not format firt phone");
		}

	}
	try
	{
		    //Thử nhập tham số thứ nhất dạng chuỗi
		   echo checkPhoneNumber('0933456790');
	}
	catch(Exception $e)
	{
		    echo $e->getMessage();
		
	}
	?>
	
