<?php 

	$name = "Kabendera Asinah"; 
	$passmark = 50;
	$markObtained = 90.2;

	if ($markObtained >= 50) {
		echo "Hi $name. You scored $markObtained and therefore, you passed.";
	} else {
		echo "Hi $name. You scored $markObtained and therefore, you failed.";
	}


	if ($markObtained >= 80) {
		echo "Your grade is A.";
	} elseif ($markObtained >= 70 and $markObtained <= 79) {
		echo "Your grade is B.";
	} elseif ($markObtained >= 60 and $markObtained <= 69) {
		echo "Your grade is C.";
	} elseif ($markObtained >= 50 and $markObtained <= 59) {
		echo "Your grade is D.";
	} else {
		echo "Your grade is F.";
	}

?>