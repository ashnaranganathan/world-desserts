<!DOCTYPE HTML>

<html>

    <head>
        <META http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet"  href= .\..\styles\styles.css>
        <!-- External Style sheet will be linked here-->
        <script src=".\..\scripts\main.js"></script>
        <!-- Script sheet will be linked here later on-->   
		
		<style>
			body {
				background-color: lavenderblush;
			}

		</style>
    </head>

    <body>
        <ul>
            <li style="float:right"><a href="italian.php">Italian</a></li>
            <li style="float:right"><a href="mexican.php">Mexican</a></li>
            <li style="float:right"><a href="thai.php">Thai</a></li>
            <li style="float:right"><a href="indian.php">Indian</a></li>
            <li style="float:right"><a href="mediterranean.php">Mediterranean</a></li>
            <li style="float:right"><a href="index.html">Home</a></li>
            <li style="font-size:40px; font-family:Ink Free">DESSERTS AROUND THE WORLD</li>
      
        </ul>
        
        

        <div class=resultsdetail>
		
			<p style="text-align:center"> World Desserts</p>
			<p> 
				Here at Deserts Around The World, we believe in offering our customers 
				the chance to enjoy delicacies from all around the world. We hire talented chefs and use the 
				finest ingredients to recreate the magical taste of all of these dishes. Currently, we offer
				mouthwatering delicacies that hail from Italy, India, Thailand, Mexico, and the Medditteranean. We hope
				to expand our offerings soon. Click on the tabs above to view our offerings in that selection.		
            </p>
			
			<p>
			Scroll down below to view our scrumptious Indian deserts that are both healthy and delicious! 
			
			</p>
		</div>
		
	<?php
		require "functions.php";
		$desserts = searchDessert();
		foreach($desserts as $dessert) {
	?>
		
	<section class="section">
	<div>
		<img src="./../images/<?php echo $dessert["dessertId"] ?>.jpg" class="img" />
	</div>
	<div class="content">
		<h2 class="title">
			<?php echo $dessert["dessertName"]; ?>
		</h2>
		<p class="paragraph">
			<?php echo $dessert["description"]; ?>
		</p>
		<p class="paragraph">
			<b>Price:</b> <?php echo $dessert["price"]; ?>
		</p>
	</div>
	</section>
	<?php } ?>  	
    </body>    
</html>