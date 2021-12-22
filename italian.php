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
            <li style="float:right"><a class="active" href="italian.php">Italian</a></li>
            <li style="float:right"><a href="mexican.php">Mexican</a></li>
            <li style="float:right"><a href="thai.php">Thai</a></li>
            <li style="float:right"><a href="indian.php">Indian</a></li>
            <li style="float:right"><a  href="mediterranean.php">Mediterranean</a></li>
            <li style="float:right"><a href="index.html">Home</a></li>
            <li style="font-size:40px; font-family:Ink Free">DESSERTS AROUND THE WORLD</li>
      
        </ul>
        
        

        <div class=italiandetail>
		
			<p style="text-align:center"> Italian Desserts</p>
			<p> 
                Italy is the graciously beautiful country known for its rich heritage, culture, art, and let’s not forget its 
                most relished and cherished food varieties. Italian cuisine has reached across all continents. 
                There have been many changes, variations, and adaptations that have all blended in. 
                The culture of any country plays an important role in this. Every country has added their own creativity and 
                colour to the beloved Italian Cuisine. Italian food receives a huge fan base more than any other cuisines. 
                From pasta to pizza, wine, gelato, Italian food is simply the best.  Italians 
                are also notorious for keeping their food waste to a minimum due to their simplicity of their dishes.

            </p>
			
			<p>
			Scroll down below to view our scrumptious Italian deserts that are both healthy and delicious! 
			
			</p>
		</div>
		
		
		<?php
		require "functions.php";
		$desserts = getDesserts("Italian");
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