<?php 

session_start();

$_SESSION["username"]="sessionname";

echo $_SESSION["username"];

session_unset();

?>