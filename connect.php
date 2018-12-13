<?php
	
	$name = filter_input(INPUT_POST, 'name');
	$email = filter_input(INPUT_POST, 'email');
	$thoughts = filter_input(INPUT_POST, 'thoughts');
	$danger = filter_input(INPUT_POST, 'danger');
	$causes = filter_input(INPUT_POST, 'causes');
	$careValue = filter_input(INPUT_POST, 'careValue');
	$blameValue = filter_input(INPUT_POST, 'blameValue');
	$ourActions = filter_input(INPUT_POST, 'ourActions');
	$yourActions = filter_input(INPUT_POST, 'yourActions');

	if (!empty($name)) {
		if (!empty($email)) {
			$host = "66.147.242.186";
			$dbusername = "urcscon3_la";
			$dbpassword = "Coffee1N/!";
			$dbname = "urcscon3_Los-Angeles";

			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error()) {
				die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());
			} else {
				$sql = "INSERT INTO losangeles_volunteer (name, email) values ('$name', '$email')";
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
		echo "Please enter your name";
		die();
	}
?>