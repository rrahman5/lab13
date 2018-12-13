<?php
	
	$firstname = filter_input(INPUT_POST, 'firstname');
	$lastname = filter_input(INPUT_POST, 'lastname');
	$email = filter_input(INPUT_POST, 'email');
	$location = filter_input(INPUT_POST, 'location');

	if (!empty($firstname)) {
		if (!empty($email)) {
			$host = "66.147.242.186";
			$dbusername = "urcscon3_la";
			$dbpassword = "Coffee1N/!";
			$dbname = "urcscon3_Los-Angeles";

			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error()) {
				die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());
			} else {
				$sql = "INSERT INTO losangeles_volunteer (firstname, lastname, email, location) values ('$firstname', '$lastname', $email', '$location')";
				if ($conn->query($sql)) {
					echo "New record was successfully entered!";
				} else {
					echo "Error: ".$sql."<br>".$conn->error;
				}
				$conn->close();
			}

		} else {
			echo "Please enter your email address";
			die();
		}
	} else {
		echo "Please enter your first name";
		die();
	}
?>