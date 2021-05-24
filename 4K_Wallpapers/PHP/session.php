<?php
// Starting session
session_start();
 
// Storing session data
$_SESSION["firstname"] = "Peter";
$_SESSION["lastname"] = "Parker";
echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
?> 