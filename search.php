<!DOCTYPE html>
 <html>
 <head>
		<title>Search</title>
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
            <div class="content">
				<h2 class="title">
				  Search for a Dessert
				</h2>				
                <form method="post" action="results.php">
                    <div class="form-group">
                        <label for="dessertName">Dessert Name</label>
                        <input type="text" class="form-control" name="dessertName" placeholder="Enter dessert name.." maxlength=50>                               
                    </div>
                    <div class="form-group">
					<label for="price">Dessert Price</label>
					<select id="price" name="price" class="form-control" > 
                        <option selected></option>						
						<option value=5>< $5</option> 
						<option value=10>< $10</option> 
						<option value=15>< $15</option> 
						<option value=20>< $20</option>                        
						<option value=30>< $30</option>						
					</select>
				    </div>                    
                    <input type="submit" value="Search"/>            
                </form>
            </div>
        </section>
	</body>
</html>