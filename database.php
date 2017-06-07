<?php
//connect to MySql
$con = mysqli_connect("localhost","root","password","shouts");

//Test connecttion

if(mysqli_connect_errno()){
  echo 'Failed to connect to MySql'.mysqli_connect_error();
}
 ?>
