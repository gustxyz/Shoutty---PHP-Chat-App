<?php
//Connect to MysqlndUhConnection
$con = mysqli_connect("localhost", "root", "", "shoutit");


//test connection_aborted
if(mysqli_connect_errno()){
  echo 'Failed to connect to MySQL: '.$mysqli_connect_error();
}
?>
