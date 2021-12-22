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
            <li style="float:right"><a class="active" href="mediterranean.php">Mediterranean</a></li>
            <li style="float:right"><a href="index.html">Home</a></li>
            <li style="font-size:40px; font-family:Ink Free">DESSERTS AROUND THE WORLD</li>
      
        </ul>
        
        

        <div class=meddetail>
		
			<p style="text-align:center"> Mediterranean Desserts</p>
			<p> 
			The Mediterranean Diet is a way of eating based on the traditional cuisine of countries bordering the Mediterranean Sea. 
			These include Italy, Greece, Spain, and Israel. 
			The diet typically consists of the region’s traditional fruits, vegetables, beans, nuts, seafood, olive oil, and dairy. 
			This diet can have a profound impact on your mood and mental health and help you foster a deep appreciation for the pleasures of healthy eating and delicious foods. 
			The Mediterranean Diet is an inexpensive and satisfying way to eat that can help you live a healthier and longer life.
			</p>
			
			<p>
			Scroll down below to view our scrumptious Mediterranean deserts that are both healthy and delicious! 
			
			</p>
		</div>
		
		<?php
		require "functions.php";
		$desserts = getDesserts("Mediterranean");
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