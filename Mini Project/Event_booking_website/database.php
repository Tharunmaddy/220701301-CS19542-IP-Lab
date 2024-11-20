<?php
  define("DB_HOST", "localhost:3307");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");
  define("DB_DATABASE", "event_booking");
  $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
  
  if ($db) {
    echo "Connected!";
  } else {
    echo "Connection Failed";
  }
?>