<!DOCTYPE html>
 <html>
 <head>
		<title>Review</title>
		<script src=".\..\scripts\reviews.js"></script>
	
		<style>
		.form-control {  
		  width: 100%;  
		  padding: 15px;  
		  margin: 5px 0 22px 0;  
		  display: inline-block;  
		  border: none;  
		  background: #f1f1f1;  
		}  
		.registerbtn {  
		  background-color: #4CAF50;  
		  color: white;  
		  padding: 16px 20px;  
		  margin: 8px 0;  
		  border: none;  
		  cursor: pointer;  
		  width: 100%;  
		  opacity: 0.9;  
		}  

		.reviewleftcontent {
		  padding-top: 20px;
		  padding-right: 20px;
		  padding-bottom: 20px;
		  WIDTH: 50%
		}
		
		.checked {
			color: orange;
		}
		
		.star {
		  font-size: 40px;
		}

		</style>
		<link rel="stylesheet"  href= .\..\styles\styles.css>
	</head>

	<body>
        <ul>
            <li style="float:right"><a id="link_italian" href="italian.html" onmouseover=changeImage(this)>Italian</a></li>
            <li style="float:right"><a id="link_mexican" href="mexican.html" onmouseover=changeImage(this)>Mexican</a></li>
            <li style="float:right"><a id="link_thai" href="thai.html" onmouseover=changeImage(this)>Thai</a></li>
            <li style="float:right"><a id="link_indian" href="indian.html" onmouseover=changeImage(this)>Indian</a></li>
            <li style="float:right"><a id="link_medi" href="mediterranean.html" onmouseover=changeImage(this)>Mediterranean</a></li>
            <li style="float:right"><a href="index.html">Home</a></li>
            <li style="font-size: 40px;font-family: monospace;text-align: center;color: white;">DESSERTS AROUND THE WORLD</li>
      
        </ul>
	
		<section class="homesection">
			<div class="reviewleftcontent">
				<h2 class="title">
				  Customer Reviews
				</h2>
				<?php
				require "functions.php";
				$comments = getComments();
				foreach($comments as $comment) {
				?>							
				<?php for ($x = 1; $x <= $comment["rating"]; $x++)  {?>			
					<span class="star checked">*</span>
				<?php } ?>
				<?php for ($x = 1; $x <= (5 - $comment["rating"]); $x++) { ?>					
					<span class="star">*</span>
				<?php } ?>
				<br>
				<i><?php echo $comment["comment"] ?><i>&nbsp;-&nbsp;<b><?php echo $comment["name"] ?></b>
				<br><br>
				<?php } ?> 
			</div>			 	
			<div class="content">
				<h2 class="title">
				  Write your Review
				</h2>
				<form method="post" action="addComment.php">
					<span class='error-message' id='submit-error'></span>
					<span class='error-message' id='name-error'></span>
					<span class='error-message' id='email-error'></span>
					<span class='error-message' id='message-error'></span>
					<div class="form-group">
					<label for="contact-name">Name</label>
					<input type="text" class="form-control" id="contact-name" name="name"  placeholder="Enter your name.." maxlength=50 onkeyup="validateName()">
				</div>
				<div class="form-group">
					<label for="rating">Rating</label>
					<select id="rating" name="rating" class="form-control" > 
						<option value=1>1 star</option> 
						<option value=2>2 star</option> 
						<option value=3>3 star</option> 
						<option value=4>4 star</option>
						<option value=5 selected>5 star</option>						
					</select>
				</div>
				<div class="form-group">
					<label for='contactMessage'>Your Message</label>
					<textarea class="form-control" rows="5" id='contact-message'  maxlength=150 name='comment'  placeholder="Enter a brief message" onkeyup='validateMessage()'></textarea>
				</div>
				<input id="submitComment" type="submit" value="Add Comment" disabled=true/>
			</form>
		</div>
	</section>
	</body>
</html>