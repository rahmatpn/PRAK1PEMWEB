<?php
	$hari = date("d");
	var_dump($hari);

	if($hari<"10"){
		echo "awal bulan";
	}
	
	else if ($hari > "20"){
		echo "akhir bulan";
	}
	else{
		echo "pertengahan bulan";
	}

$meletus = "hijau";
	switch($meletus){
			case "hijau";
			echo "dor";
			break;
			case "kuning";
			echo "der";
			break;
			case "kelabu";
			echo "dur";
			break;
		default:
			echo "balonku masih utuh";
	}

$w = 99;

while($w <100){
	echo "anda kurang sehat";
}
	
	?>