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
            <li style="float:right"><a class="active" href="indian.php">Indian</a></li>
            <li style="float:right"><a href="mediterranean.php">Mediterranean</a></li>
            <li style="float:right"><a href="index.html">Home</a></li>
            <li style="font-size:40px; font-family:Ink Free">DESSERTS AROUND THE WORLD</li>
      
        </ul>
        
        

        <div class=indiandetail>
		
			<p style="text-align:center"> Indian Desserts</p>
			<p> 
                Indian cuisine consists of a variety of regional and traditional cuisines native to the Indian subcontinent. Given the diversity in soil, climate, culture, ethnic groups,
                 and occupations, these cuisines vary substantially and use locally available spices, herbs, vegetables, and fruits.
                Indian food is also heavily influenced by religion, in particular Hinduism and Islam, cultural choices 
                and traditions. Spicy, rich, flavourful and diverse are terms that are frequently used to describe Indian food. 
                All these words are apt in describing Indian cuisine, 
                for it is diverse in variety and taste, and is made up from a wide array of regional cuisines 
                throughout various parts of India			
            </p>
			
			<p>
			Scroll down below to view our scrumptious Indian deserts that are both healthy and delicious! 
			
			</p>
		</div>
		
	<?php
		require "functions.php";
		$desserts = getDesserts("Indian");
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