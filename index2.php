<!DOCTYPE html>
<html>
<body>

<h1>World Desserts</h1>
<br>
<table>
<tr>
    <th>Dessert Id</th>
    <th>Dessert Name</th>
    <th>Cuisine</th>
    <th>Description</th>
    <th>Price</th>
</tr>
<?php
require "functions.php";

$desserts = getDesserts("");
foreach($desserts as $dessert) {
  echo "<tr><td>". $dessert["dessertId"] . "</td><td>". $dessert["dessertName"]. "</td><td>". $dessert["cuisine"]. "</td><td>"
      . $dessert["description"]. "</td><td>". $dessert["price"]. "</td></tr>";  
}

?>
</table>
<br>
<table>
<tr>
    <th>Comment</th>
    <th>Rating</th>
</tr>
<?php

$comments = getComments();
foreach($comments as $comment) {
  echo "<tr><td>". $comment["comment"] . "</td><td>". $comment["rating"]. "</td></tr>";  
}

?>
</table>
<br>
<form method="post" action="addComment.php">
        <label for="comment">Comment:</label>
        <input type="text" name="comment"><br>
        <label for="rating">Rating:</label>
        <select id="rating" name="rating">
          <option value="*">*</option>
          <option value="**">**</option>
          <option value="***">***</option>
          <option value="****">****</option>
          <option value="*****">*****</option>
        </select><br>
        <input type="submit" value="Add Comment"/>
</form>
<br>
<form method="post" action="searchResults.php">
        <label for="dessertName">Dessert Name</label>
        <input type="text" name="dessertName">
        <label for="price">Rating:</label>
        <select id="price" name="price">
          <option value="*">*</option>
          <option value="**">**</option>
          <option value="***">***</option>
          <option value="****">****</option>
          <option value="*****">*****</option>
        </select><br>
        <input type="submit" value="Search"/>
</form>
</body>
</html>