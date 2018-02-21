<?php
class Masyvas {
	 public $masyvas = [];
	 public $dydis = rand(2,10);
	 public $elementai = rand(0,50);
	for($i = 0; $i<=$dydis;$i++){
		$masyvas[] = $elementai;
	}
	





}


$obj = new Masyvas();
echo json_encode($obj);
?>