<?php
  $hostname = "localhost";
  $username = "id19092254_happychatomiyadb";
  $password = "x(ZC0[MDc*68|F*l";
  $dbname = "id19092254_happychat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
