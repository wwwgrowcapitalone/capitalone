<?php
   error_reporting(0);
   $servername = "localhost";
   $username   = "root";
   $password   = "";
   $dbname     = "growcapitalone";
   
   $connection = mysqli_connect($servername,$username,$password,$dbname);
   
   if($connection)
   {
	   //echo "connection ok";
   }
   else
   {
	   echo "connection failed".mysqli_connect_error();
   } 
?>                              