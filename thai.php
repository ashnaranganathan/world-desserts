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
            <li style="float:right"><a class="active" href="thai.php">Thai</a></li>
            <li style="float:right"><a href="indian.php">Indian</a></li>
            <li style="float:right"><a  href="mediterranean.php">Mediterranean</a></li>
            <li style="float:right"><a href="index.html">Home</a></li>
            <li style="font-size:40px; font-family:Ink Free">DESSERTS AROUND THE WORLD</li>
      
        </ul>
        
        

        <div class=thaidetail>
		
			<p style="text-align:center"> Thai Desserts</p>
			<p> 
                Thai dishes are sweet, salty, spicy or sour. 
                There are many dishes with thick noodles, vegetables, lettuce, and chicken, lamb, shrimp, or beef
                Thai cooking places emphasis on lightly prepared dishes with strong aromatic components and a 
                spicy edge. Australian chef David Thompson, an expert on Thai food, observes that unlike many other cuisines,
                 Thai cooking is "about the juggling of disparate elements to create a harmonious finish. Like a complex musical 
                 chord it's got to have a smooth surface but it doesn't matter what's happening underneath. 
                Simplicity isn't the dictum here, at all."
			</p>
			
			<p>
			Scroll down below to view our scrumptious Thai deserts that are both healthy and delicious! 
			
			</p>
		</div>
		
		
		<?php
		require "functions.php";
		$desserts = getDesserts("Thai");
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