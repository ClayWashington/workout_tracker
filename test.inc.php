<?php

  require('connect.php');

  $current_date = date('F d, Y');

  $query = "INSERT INTO Exercise 
            VALUES ('', 'pushups', '$current_date')";
  $result = MySQL_query($query) or die('Problem inserting into Exercise.' . MySQL_error());

  




?>