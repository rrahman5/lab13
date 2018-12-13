<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php include "inc/html-top.inc";?>

	<link type="text/css" rel="stylesheet" href="css/future.css">

	</head>

	<body>

		<div class="banner">
	        <?php include 'inc/header.inc';?>

	        <?php include 'inc/nav.inc';?>
	    </div>

		<main>

			<div class="futureContent">
   
			    <h2> The Future </h2>
				<p> Change will continue through this century and beyond. Global climate is projected to continue to change over this century and beyond. The magnitude of climate change beyond the next few decades depends primarily on the amount of heat-trapping gases emitted globally, and how sensitive the Earth’s climate is to those emissions.</p>

				<p>Temperatures will continue to rise. Because human-induced warming is superimposed on a naturally varying climate, the temperature rise has not been, and will not be, uniform or smooth across the country or over time</p>

				<p>Frost-free season (and growing season) will lengthen
				The length of the frost-free season (and the corresponding growing season) has been increasing nationally since the 1980s, with the largest increases occurring in the western United States, affecting ecosystems and agriculture. Across the United States, the growing season is projected to continue to lengthen.</p>

			</div>

		</main>

		<?php include 'inc/footer.inc';?>

		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/menu-highlighter.js"></script>
	</body>

</html>