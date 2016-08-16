<?php
	echo "hello world";

	functon add($num1,$num2){

		$result = $num1 + $num2;
		return $result;
	}

	$result = add(1,1);

	echo $result;

	class Robot {

		private $name;

		function setName($name){
			$this->name = $name;

		}

		function getName(){
			return $this $name;
		}

	}

	$robot = new Robot();

	$robot->setName('ドラえもん');

	functon diff($num1,$num2){
		$result = $num1 - $num2;
		return $result;

	}

	$result = diff(1,1);
	echo $result;

	function org_echo($val){
		//org_echo を追加
	}

	function org_var_dump($val){

		if(DEBUG){
			echo '<pre>';
			var_dump($val);
			echo '<pre>';
		}

	}

?>
