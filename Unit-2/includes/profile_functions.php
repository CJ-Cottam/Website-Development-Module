<?php
//This PHP file is used to check information and call to functions for updating or deleting account information.
//Checks if the submit button has been selected
require_once 'dbh.inc.php';
require_once 'functions.inc.php';
session_start();

if(isset($_POST["UpdatePassword"])) //Update Password, We check the submit button has been pressed
{
    $CurrentPwd = $_POST["Currentpwd"];
    $NewPwd = $_POST["Newpwd"];
    $RepeatPwd = $_POST["RepeatNewpwd"];
    $email = $_SESSION["email"];
    $username = $_SESSION["uid"];
    if(pwdMatch($pwd, $pwdRepeat) !== false)
    {
        header("location: ../main-pages/profile.php?=passwordsDoNotMatch");
        exit();
    }
    else
    {
        UpdatePassword($conn, $username,$email,$CurrentPwd, $NewPwd);
    }
}
else if(isset($_POST['ConfirmDelete'])) //Account Deletion
{
    //Grabs the information from the form
    $pwd = $_POST["pwd"];
    $username = $_SESSION["uid"];
    $email = $_SESSION["email"];
    //A few IF statements to check all the fields and data have been entered correctly
    if (emptyForm($pwd) !== false) {
        header("location: ../main-pages/profile.php?error=EmptyPwdForm");
        exit();
    }
    else
    {
        //Triggers the createUser function and passes in the correct information.
        DeleteUser($conn, $username, $email, $pwd);    
    }
}
else if(isset($_POST['UpdateName'])) //Update Name
{
    $newName = $_POST["name"];
    if(emptyForm($newName) !== false)
    {
        header("location: ../main-pages/profile.php?error=EmptyNameForm");
        exit();
    }
    else
    {
        UpdateName($conn, $newName, $username, $email);
    }
}
else if(isset($_POST['UpdateUsername'])) //Update Username
{
    $newUsername = $_POST["newUsername"];
    if(emptyForm($newUsername) !== false)
    {
        header("location: ../main-pages/profile.php?error=EmptyUsernameForm");
        exit();
    }
    else if (invalidUid($newUsername) !== false) {
        header("location: ../main-pages/signup.php?error=invalidUsername");
        exit();
    }
    else
    {
        UpdateUsername($conn, $newUsername);
    }
}
else if(isset($_POST['UpdateEmail'])) //Update Email
{
    $UpdateEmail = $_POST["email"];
    if(emptyForm($UpdateEmail) !== false)
    {
        header("location: ../main-pages/profile.php?error=EmptyEmailForm");
        exit();
    }
    if (invalidEmail($UpdateEmail) !== false) {
        header("location: ../main-pages/profile.php?error=InvalidEmail");
        exit();
    }
    else
    {
        UpdateEmail($conn, $UpdateEmail);
    }
}
else{ //If the user pressed not of the buttons above, they are redirected to the profile page.
    header("location: ../main-pages/profile.php?error=UpdateButtonNotPressed");
    exit();
}