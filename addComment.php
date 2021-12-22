<?php
    require "database.php";

    $rating =  intval($_POST["rating"]);

    // insert comment
    $sql = "INSERT INTO comments (comment, rating, name, email) VALUES 
      (\"". $_POST["comment"]. "\",\"". $rating. "\",\"". $_POST["name"]. "\",\"". $_POST["email"]. "\")";
    $conn = openConnection();
    if ($conn->query($sql) === TRUE) {
      echo "<br>New comment created successfully<br>";
    } else {
      echo "<br>Error: " . $sql . "<br>" . $conn->error. "<br>";
    }
    $conn->close();

    header('Location: reviews.php');
    exit();
?>