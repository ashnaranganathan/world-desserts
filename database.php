<?php

function openConnection() {
    $conn = new mysqli("us-cdbr-east-05.cleardb.net", "b8eb4fa61b9439", "c7d070de", "heroku_c679880accdf827");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else
      return $conn;
  }

?>