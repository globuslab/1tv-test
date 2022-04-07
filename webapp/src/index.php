<?php

  $mysqli = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);

  echo("Hello world! Your IP: ".$_SERVER['$REMOTE_ADDR']);

  // Check connection
  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }


  // Perform query
  if ($result = $mysqli -> query("SHOW DATABASES")) {
    echo "Returned rows are: " . $result -> num_rows;
    // Free result set
    $result -> free_result();
  }

  $mysqli -> close();


?>
