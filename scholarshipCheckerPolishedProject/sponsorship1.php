<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Handling</title>
</head>
<body>
	<h1>Government Sponsorship Checker</h1>
	<?php

		include 'functions1.php';

		$points = $_POST['points'];
		$gender = $_POST['gender'];
		$disability = $_POST['disability'];

		sayHi($_POST['firstName']);

		if ($points >= 18) {
			echo "You qualify for government sponsorship. 🎉";
		} elseif ($points >= 15 and $gender == "Female") {
			echo "You qualify for government sponsorship. 🎉";
		} elseif ($points >= 10 and $disability == "Yes") {
			echo "You qualify for government sponsorship. 🎉";
		} else {
			echo "Sorry, you do not qualify. Ddayo osome 🤣";
		}

	?>   

	<div class="link">
		<a href="forms.php">Back</a>
	</div>
</body>
</html>
