<!DOCTYPE html>
<html>
<head>
	<title>Bai kiem tra</title>
</head>
<body>
<?php
		//bai 1.
		//data

		$fresherphp = array(
	[
		'first_name'=>'thieu',
		'last_name' => 'nguyen',
		'middle_name' => 'van',
		'brith_day' => '01-06-1991',
		'phone_number' => '01649593418'
	],
	[
		'first_name'=>'thieu1',
		'last_name' => 'nguyen1',
		'middle_name' => 'van1',
		'brith_day' => '01-06-1992',
		'phone_number' => '0909593418'
	],
	[
		'first_name'=>'thang',
		'last_name' => 'luong',
		'middle_name' => 'dinh',
		'brith_day' => '01-06-1990',
		'phone_number' => '0976149492'
	]
	);

	// class sinh vien

	class  Sinhvien
	{
		public $first_name;
		public $last_name;
		public $middle_name;
		public $brith_day;
		public $phone_number;
		public $array;
		
		function __construct()
		{
		}
		// mang chua thong tin sinh vien do.
		function data_sinhvien($val){
			$array = $val;
			return $array;
	    }

	    #############
	    // thong tin sinh vien


	    function property($val)
	    {
	    	$first_name = $val['first_name'];
	    	echo "first name: ".$first_name.'<br>';
	    	$last_name = $val ['last_name'];
	    	echo "last name: ".$last_name.'<br>';
	    	$middle_name = $val['middle_name'];
	    	echo "middle name: ".$middle_name."<br>";
	    	$brith_day = $val ['brith_day'];
	    	echo "brith day: ".$brith_day."<br>";
	    	$phone_number = $val ['phone_number'];
	    	echo "phone: ".$phone_number."<br>";
	    }
        #########################
	    // ham tinh tuoi.

	    function age ($val)
	    {
	     	$array = explode("-",$val['brith_day']);
	     	$n=count($array);
	     	$age = 2017 - $array[$n-1];
	     	echo $age;
	    }


	 }
	 // bai 3 

	 class Criele
	 {
	 	public $ban_kinh;
	 	public $chu_vi;
	 	public $dien_tich;
	 	function __construct()
	 	{
	 		echo "hinh tron".'<br>';
	 	}
	 	function chuvi($ban_kinh){
	 		$chu_vi = $ban_kinh*2*3.14;
	 		return $chu_vi;
	 	}
	 	function dientich($ban_kinh){
	 		$dien_tich = pow($ban_kinh,2)*3.14;
	 		return $dien_tich;
	 	}
	 }
	 $Criele = new Criele();
	 echo "chu vi hinh tron la: ".$Criele::chuvi(4).'<br>';
	 echo "chu vi hinh tron la: ".$Criele::dientich(4).'<br>';

	 $Sinhvien = new Sinhvien();

	// in ra thong tin sinh vien trong mot mang

	 print_r($Sinhvien::data_sinhvien($fresherphp[2]));
	
	// in ra thuoc tinh sinh vien.

	 print_r($Sinhvien::property($fresherphp[2]));
	
	// in ra tuoi cua sinhvien
	 print_r($Sinhvien::age($fresherphp[1]));		 

?>
</body>
</html>
