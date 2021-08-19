<?php
$servername = "database";
$username = "root";
$password = "sina";

try {
    $conn = new PDO("mysql:host=$servername;dbname=app", $username, $password);
    // set the PDO error mode to exception
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


  phpinfo();
  ?>