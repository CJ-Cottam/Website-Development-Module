<?php
//This PHP script logouts the user.
//Starts up the session, stops it then destroys the session

session_start();
session_unset();
session_destroy();

header("location: ../index.php");
exit();
