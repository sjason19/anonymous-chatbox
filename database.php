<?php
//Connect to Mysql
$con = mysqli_connect("localhost", "root", "ghz495op", "chatbox");

//Test connection
if(mysqli_connect_errno()) {
  die('Failed to connect to MySQL: '.mysqli_connect_error());
}
 ?>
