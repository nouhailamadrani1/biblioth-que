<?php 
include "connectlogin.php";
echo"hiiii";
session_unset();
session_destroy();
header("location: login.php");
?>