<?php

	$day =$_POST['day']; 

	if ($day == "Monday") {
		echo "Bright day with hope";
	} elseif ($day == "Tuesday") {
		echo "Nice day full of energy";
	} elseif ($day == "Wednesday") {
		echo "Great with great moods";
	} elseif ($day == "Thursday") {
		echo "Beautiful day just";
	} elseif ($day == "Friday") {
		echo "End of the week";
	} else {
		echo "A great weekend";
	}

?>