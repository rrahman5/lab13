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

	<link type="text/css" rel="stylesheet" href="css/home.css">

	</head>

	<body>

		<div class="banner">
	        <?php include 'inc/header.inc';?>

	        <?php include 'inc/nav.inc';?>
	    </div>

	    <main>
	        <div class="homeContent">

	            <section class="homeInformation">
		            
		            <section class="homeContentBlock" id="about">
		                <h2> About</h2>
		                <p> Glaciers are melting, sea levels are rising, cloud forests are dying, and wildlife is scrambling to keep pace. It's becoming clear that humans have caused most of the past century's warming by releasing heat-trapping gases as we power our modern lives. Called greenhouse gases, their levels are higher now than in the last 650,000 years.</p>
		                <p>We call the result global warming, but it is causing a set of changes to the Earth's climate, or long-term weather patterns, that varies from place to place. As the Earth spins each day, the new heat swirls with it, picking up moisture over the oceans, rising here, settling there. It's changing the rhythms of climate that all living things have come to rely upon. [Watch Polar Bears 101].</p>
		                <p>What will we do to slow this warming? How will we cope with the changes we've already set into motion? While we struggle to figure it all out, the face of the Earth as we know it—coasts, forests, farms and snow-capped mountains—hangs in the balance.</p>
		            </section>
		        

		            <section class = "homeContentBlock" id="history">
		                <h2>History</h2>
		                <p>The history of climate change science began in the early 19th century when ice ages and other natural changes in paleoclimate were first suspected and the natural greenhouse effect first identified.[64] In the late 19th century, scientists first argued that human emissions of greenhouse gases could change the climate. In the 1960s, the warming effect of carbon dioxide gas became increasingly convincing.[279] By the 1990s, as a result of improving fidelity of computer models and observational work confirming the Milankovitch theory of the ice ages, a consensus position formed: greenhouse gases were deeply involved in most climate changes and human caused emissions were bringing discernible global warming. Since the 1990s, scientific research on climate change has included multiple disciplines and has expanded.[280] Research during this period has been summarized in the Assessment Reports by the Intergovernmental Panel on Climate Change.</p>
		            </section>

		            <section class = "homeContentBlock" id="help">
		                <h2> How to Help</h2>
		                <ol>
		                    <li>Speak up! What’s the single biggest way you can make an impact on global climate change? “Talk to your friends and family, and make sure your representatives are making good decisions,” Haq says. By voicing your concerns—via social media or, better yet, directly to your elected officials—you send a message that you care about the warming world. Encourage Congress to enact new laws that limit carbon emissions and require polluters to pay for the emissions they produce. “The main reason elected officials do anything difficult is because their constituents make them,” Haq says. You can help protect public lands, stop offshore drilling, and more here.</li>

		                    <li>Power your home with renewable energy. Choose a utility company that generates at least half its power from wind or solar and has been certified by Green-e Energy, an organization that vets renewable energy options. If that isn’t possible for you, take a look at your electric bill; many utilities now list other ways to support renewable sources on their monthly statements and websites.</li>

		                    <li>Weatherize, weatherize, weatherize. “Building heating and cooling are among the biggest uses of energy,” Haq says. Indeed, heating and air-conditioning account for almost half of home energy use. You can make your space more energy efficient by sealing drafts and ensuring it’s adequately insulated. You can also claim federal tax credits for many energy-efficiency home improvements.</li>

		                    <li>Invest in energy-efficient appliances. Since they were first implemented nationally in 1987, efficiency standards for dozens of appliances and products have kept 2.3 billion tons of carbon dioxide out of the air. That’s about the same amount as the annual carbon pollution coughed up by nearly 440 million cars. “Energy efficiency is the lowest-cost way to reduce emissions,” Haq says. When shopping for refrigerators, washing machines, and other appliances, look for the Energy Star label. It will tell you which are the most efficient.</li>

		                    <li>Reduce water waste. Saving water reduces carbon pollution, too. That's because it takes a lot of energy to pump, heat, and treat your water. So take shorter showers, turn off the tap while brushing your teeth, and switch to WaterSense-labeled fixtures and appliances. The EPA estimates that if just one out of every 100 American homes were retrofitted with water-efficient fixtures, about 100 million kilowatt-hours of electricity per year would be saved—avoiding 80,000 tons of global warming pollution.</li>

		                    <li>Actually eat the food you buy—and make less of it meat. Approximately 10 percent of U.S. energy use goes into growing, processing, packaging, and shipping food—about 40 percent of which just winds up in the landfill. “If you’re wasting less food, you’re likely cutting down on energy consumption,” Haq says. And since livestock products are among the most resource-intensive to produce, eating meat-free meals can make a big difference, too.</li>

		                    <li>Buy better bulbs. LED lightbulbs use up to 80 percent less energy than conventional incandescents. They’re also cheaper in the long run: A 10-watt LED that replaces your traditional 60-watt bulb will save you $125 over the lightbulb’s life.</li>
		                </ol>

		            </section>

		        </section>

		        <section class="homeJoin">
		            <div class="homeContentBlock" id="join">
		                <h2> Want to Help Further? Sign Up Below to Volunteer:</h2>
		                    <form action="/future.php" method="get" target="_blank">
		                        <label>First name:</label><br>
		                        <input type="text" name="firstname">
		                        <br>
		                        <label>Last name:</label><br>
		                        <input type="text" name="lastname">
		                        <br>
		                        <label>Email:</label><br>
		                        <input type="text" name="email">
		                        <br>
		                        <label>Where You Currently Live:</label><br>
		                        <input type="text" name="location">
		                        <br>
		                        <button type="submit" value="Submit"> Join Newsletter </button>

		                    </form>
		            </div>
		        </section>
    
        	</div>

        </main>

        <?php include 'inc/footer.inc';?>


    	<script src="http://code.jquery.com/jquery.js"></script>
    	<script src="js/menu-highlighter.js"></script>

	</body>

</html>