<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Global Warming</title>
        <link type="text/css" rel="stylesheet" href="css/styles.css">
</head>

	<body>
    <? php include "inc/nav.inc"; ?>
   
     
    <h1>Sign up to Volunteer to Help Curb Global Warming!</h1> 
	<form method="post" action="connect.php">

		Name: (required) 
		<input type="text" name="name"><br><br>

		E-mail: (required)
		<input type="text" name="email"><br><br>

		What do you think about global warming?
		<input type="text" name="thoughts"><br><br>

		On a scale of 1-5 how much do you think it is a danger to us?
		<input type="text" name="danger"><br><br>

		What do you think are the main causes of global warming: (select below)<br>
		a) Deforestation
		<input type="checkbox" name="causes" value="deforestation"><br>
		b) Farming
		<input type="checkbox" name="causes" value="farming"><br>
		c) Rise in temperature
		<input type="checkbox" name="causes" value="riseTemp"><br>
		d) Factories
		<input type="checkbox" name="causes" value="factories"><br><br>

		On a scale of 1-5 how much do you care about the world our future generation lives in?
		<input type="radio" name="careValue" value="1">1
		<input type="radio" name="careValue" value="2">2
		<input type="radio" name="careValue" value="3">3
		<input type="radio" name="careValue" value="4">4
		<input type="radio" name="careValue" value="5">5<br>

		On a scale of 1-5 how much do you think the future world will blame us for global warming?
		<input type="radio" name="blameValue" value="1">1
		<input type="radio" name="blameValue" value="2">2
		<input type="radio" name="blameValue" value="3">3
		<input type="radio" name="blameValue" value="4">4
		<input type="radio" name="blameValue" value="5">5<br>

		What can we do to fight global warming?
		<input type="text" name="ourActions"><br><br>

		What can You do to fight global warming?
		<input type="text" name="yourActions"><br><br>

		<input type="submit" value="Submit">

	</form>


</p>
    
<p>
    Admin role intent:

    Allow admin to see the submissions of the form 
</p>

        



	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/menu-highlighter.js"></script>
	</body>

</html>