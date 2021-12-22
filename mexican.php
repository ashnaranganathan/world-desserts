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
            <li style="float:right"><a  href="italian.php">Italian</a></li>
            <li style="float:right"><a class="active" href="mexican.php">Mexican</a></li>
            <li style="float:right"><a href="thai.php">Thai</a></li>
            <li style="float:right"><a href="indian.php">Indian</a></li>
            <li style="float:right"><a href="mediterranean.php">Mediterranean</a></li>
            <li style="float:right"><a href="index.html">Home</a></li>
            <li style="font-size:40px; font-family:Ink Free">DESSERTS AROUND THE WORLD</li>
      
        </ul>
        
        

        <div class=mexicandetail>
		
			<p style="text-align:center"> Mexican Desserts</p>
			<p> 
                
                From chilaquiles to empanadas to fajitas, the best Mexican food is tasty, spicy and oftentimes 
                very easy to prepare. Traditional Mexican cuisine typically relies on indigenous staples like beans, 
                chili peppers, and corn,
                 and you can almost always expect a decadent sauce on the side, such as mole or pico de gallo.
            </p>
			
			<p>
			Scroll down below to view our scrumptious Mexican deserts that are both healthy and delicious! 
			
			</p>
		</div>
		
		
		<?php
		require "functions.php";
		$desserts = getDesserts("Mexican");
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