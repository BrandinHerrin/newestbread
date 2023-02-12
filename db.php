<?php
    $host = "Hostbread";
    $username = "bread";
    $password = "bread123";
    $dbname = "DailyBread";

    
  
    $conn = mysqli_connect($host, $username, $password, $dbname);
  
    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
?>