<?php
	/**
	* 
	*/
	//namespase shape;
	namespace Shape;
	
	// hinh tron

	define("pi", 3.14);
	class circle 
	{
		private $diameter;
		private $perimeter;
		private $acreage;
		public function info_circle($radius)
		{
			$this->diameter= $radius*2;
			$this->perimeter = $radius*2*pi;
			$this->acreage = pow($radius, 2)*pi;
			echo "Bán kính: ".$radius.'<br>';
			echo "đường kính: ".$this->diameter.'<br>';
			echo "chu vi: ".$this->perimeter.'<br>';
			echo "diện tích ".$this->acreage.'<br>';

		}
		
			
	}

	// hinh vuong

	class square
	{	
		private $acreage;
		private $perimeter;
		public function info_square($edge)
		{
			$this -> acreage = pow($edge, 2);
			$this -> perimeter = 4*$edge;
			echo "Chiều dài cạnh: ".$edge."<br>";
			echo "chu vi hình vuông: ".$this->perimeter.'<br>';
			echo "diện tích hình vuông: ".$this->acreage.'<br>';
			
		}
	}
	// hinh chu nhat

	class rectangle
	{
		private $perimeter;
		private $acreage;
		public function info_rectangle($short_edge,$long_edge)
		{

			$this -> perimeter = 2*($short_edge + $long_edge);
			$this -> acreage = $short_edge * $long_edge;
			echo "chiều rộng: ".$short_edge.'<br>';
			echo "chiều dài: ".$long_edge.'<br>';
			echo "chu vi: ".$this->perimeter.'<br>';
			echo "diện tích: ".$this->acreage.'<br>';

		}
	}
?>