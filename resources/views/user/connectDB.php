<?php
 $DB_Host  = "localhost";
 $DB_User  = "root";
 $password = "";
 $DB_Name  = "employ1";
  // Create connection
 $conn = new mysqli($DB_Host, $DB_User, $password, $DB_Name);
 // Check connection
 if ($conn->connect_error) {
 die ("Connection failed: " . $conn->connect_error);
}
?>