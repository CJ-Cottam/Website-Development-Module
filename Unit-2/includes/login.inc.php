<?php
//This PHP Script acts as barriar to check if the user has actually pressed the submit button, if not the user is redirected.
if (isset($_POST["submit"])) {
    //We collect the username and password from the POST
    $username = $_POST["uid"];
    $pwd = $_POST["password"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    //We call to our database and functions files 
    if (emptyInputLogin($username,$pwd) !== false) {
        header("location: ../main-pages/login.php?error=emptyinput");
        exit();
    }
    //If everything is successful, it triggers the loginUser function
    loginUser($conn, $username, $pwd);
}
else{
    header("location: ../main-pages/login.php");
    exit();
}