<?php
//Signup code
//This PHP file is used to call many of the functions to validate the information from the signup form and then call the create user function.
//Checks if the submit button has been selected
if (isset($_POST["submit"])) {

    //Grabs the information from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["pwdrepeat"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //A few IF statements to check all the fields and data have been entered correctly
    if (emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false) {
        header("location: ../main-pages/signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../main-pages/signup.php?error=invalidUsername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../main-pages/signup.php?error=InvalidEmail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../main-pages/signup.php?error=PasswordsDoNotMatch");
        exit();
    }
    if (uidExist($conn, $username, $email) !== false) {
        header("location: ../main-pages/signup.php?error=UsernameExists");
        exit();
    }
    //Triggers the createUser function and passes in the correct information.
    createUser($conn, $name, $email, $username, $pwd);

}
else{
    header("location: ../main-pages/signup.php?=error320302203");
    exit();
}