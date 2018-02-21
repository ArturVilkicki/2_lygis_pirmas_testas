<?php
class Masyvas {
	 public $masyvas = [];
	for(i = 0; i<=mt_rand(2,10);i++){
		$masyvas[] = mt_rand(0,50);
	}
	//print_r($masyvas);





}


$obj = new Masyvas();
echo json_encode($obj);
?>