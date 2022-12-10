<?php

	$points = 12;
	$gender = "Female";
	$disability = "No";

	if ($points >= 18) {
		echo "You qualify for government sponsorship.";
	} elseif ($points >= 15 and $gender == "Female") {
		echo "Hi girl, you qualify for government sponsorship.";
	} elseif ($points >= 10 and $disability == "Yes") {
		echo "You qualify for government sponsorship.";
	} else {
		echo "Sorry, you do not qualify. Ddayo osome 🤣";
	}

?>   