<?php
  require "database.php";

  function addComment()
  {
    // insert comment
    $sql = "INSERT INTO comments (comment, rating) VALUES 
      (\"". $_POST["comment"]. "\",\"". $_POST["rating"]. "\")";
    $conn = openConnection();
    if ($conn->query($sql) === TRUE) {
      echo "<br>New comment created successfully<br>";
    } else {
      echo "<br>Error: " . $sql . "<br>" . $conn->error. "<br>";
    }
    $conn->close();
  }

  // Get Desserts
  function getDesserts ($cuisine) {
    $sql = "SELECT * FROM dessert WHERE cuisine = \"". $cuisine. "\" ORDER by dessertId";
    $conn = openConnection();
    $result = $conn->query($sql);
    $rows = array();
    if ($result->num_rows > 0) {  
      while($row = $result->fetch_assoc()) {
        $rows[] = $row;        
      }
    }
  
    $conn->close();
    return $rows;
  } 

  // Get comments
  function getComments () {
    $sql = "SELECT * FROM comments";
    $conn = openConnection();
    $result = $conn->query($sql);
    $rows = array();
    if ($result->num_rows > 0) {  
      while($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
    }
  
    $conn->close();
    return $rows;
  } 

  function searchDessert() {

    $dessertName = $_POST["dessertName"];
    $price = $_POST["price"];

    // Search dessert
    if (strlen($dessertName) == 0 && strlen($price) == 0)
      $sql = "SELECT * FROM dessert ORDER BY cuisine";
    elseif (strlen($dessertName) == 0)
      $sql = "SELECT * FROM dessert where price < ". $price;
    elseif (strlen($price) == 0)
      $sql = "SELECT * FROM dessert where dessertName like \"%". $dessertName . "%\"";
    else
    $sql = "SELECT * FROM dessert where dessertName like \"%". $dessertName . "%\" AND price < ". $price;
    $conn = openConnection();
    $result = $conn->query($sql);
    $rows = array();
    if ($result->num_rows > 0) {  
      while($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
    }
    $conn->close();
    return $rows;
  }
?>