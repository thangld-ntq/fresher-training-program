<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>
	<?php

		########################################
		// function tìm số nguyên tố bé hơn $v$al;

		function so_nguyen_to($val)
		{
			$count= 0;
			for ($i=1;$i<=$val;$i++)
	    	{
	    		if($i==1) {
		        		echo $i." ";
		        }else {
			        for ($j=1;$j<=$i;$j++)
			        {
				        if ($i%$j==0)
				                $count++;
				        }
				        if($count==2)
				            echo $i." ";
			        $count=0;
				}
			}
		}
		echo so_nguyen_to(12).'<br>';

		################################
		// hàm tính tổng cơ số 2.

		function sum($val)
		{
			if ($val==1) {
				return $val;
			}
			return pow($val,2) + sum($val-1);
		}// End tổng cơ số 2
		
		echo sum(5).'<br>';

		##############################
		// tìm BCNN của hai số a vs b

		function lcm($a, $b)
		{
    	$oa = $a;
     	$ob = $b;
     		if($a==0||$b==0)
     			return 0;
		    while ($a != $b)
		    {
		        if ($a <= $b)
		            $a += $oa;
		        else
		            $b += $ob;
		    }
		    return $a;
		}// end BCNN

		// Gọi hàm

		echo lcm(6,10).'<br>';

		############################
		// tìm bcnn của một mảng.

		function LCM_Array($Array)
		{
			$val=$Array[0];
			$n=count($Array);
			for ($i=1; $i < $n; $i++) { 
				$val=lcm($val,$Array[$i]);
			}
			return $val;
		}
		 $numbers = array( 1,5,3,4,8);
		 echo LCM_Array($numbers).'<br>';

		 // end bcnn của mảng

		 #############################

		 //ước chung lớn nhất của hai số;
		function UCLN($a,$b)
		{
			$val=$a % $b;
			while ($val != 0) {
				$val = $a % $b;
				$a = $b;
				$b = $val;
			}
			return $a;
		}

		echo UCLN(4,6).'<br>';

		####################################

		// ước chung lớn nhất của một mảng

		function UCLN_ARRAY($array)
		{
			$val = $array[0];
			for ($i = 1; $i < count($array); $i++) { 
				$val = UCLN ($val,$array[$i]);
			}
			return $val;
		}
		$numbers = array(4,8,12,35);
		//echo UCLN_ARRAY($numbers);

		##########################

		function tam_giac($val){
			for ($i=0; $i < $val; $i++) { 
				for ($j=0; $j <= $i; $j++) { 
					echo "*";
				}
				echo "<br>";
			}
		}
		tam_giac(4);
		###########################

		// đệ quy menu đa cấp.

		$array = array (
			['name' => 'Java', 'level' => 0, 'position' => 1],
			['name' => 'PHP', 'level' => 0, 'position' => 2],
			['name' => 'Python', 'level' => 0, 'position' => 3],
			['name' => 'PHP 5.6', 'level' => 2, 'position' => 4],
			['name' => 'PHP 7', 'level' => 2, 'position' => 5]
			);
		foreach ($array as $value) {
			if($value['level']==0)
			{
				echo $value['name'].'<br>';

				$id = $value['position'];
				foreach ($array as $value2) 
				{
					if ($value2['level'] == $id)
					{
						echo "--| ".$value2['name'].'<br>';
					}
				}
			}
		}
	?>
	
</body>
</html>