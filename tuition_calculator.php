<?php

	$tuition = 1500000;
	$amountPaid = 700000;
	$balance = $tuition - $amountPaid;

	echo "The balance is $balance";

	if ($balance == 500000) {
		echo "You are allowed to do two papers.";
	} else if ($balance >= 900000){
		echo "You are allowed to do one paper.";
	} else if ($balance >= 1200000) {
		echo "You are not allowed to do any paper.";
	} else {
		echo "You are allowed to do all papers.";
	}

?>