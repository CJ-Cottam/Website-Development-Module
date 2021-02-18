<?php
require_once 'dbh.inc.php';
session_start();
//This PHP file is used to post the comments for the albums page and is used alongside AJAX for error handling.
$author = '';
$comment_content = '';
$error = '';
$album_name = '';
if(empty($_POST["comment_content"]))
{
    //If the comment_content field is empty we assign a message to an error variable, which is later encoded to ajax to be displayed.
    $error .= '<p class="text-danger"> Comment is required</p>';
}
else
{
    //If the field is not empty we collect the text in the comment field, the username and the id (page name)
    $message = $_POST["comment_content"];
    $author = $_SESSION["useruid"];
    $album_name = $_POST["comment_id"]; 
}

if($error == '') // If there are no errors, we then begin to prepare our SQL statement to insert the comment.
{
    $sql = "INSERT INTO comments (author, message, album_name) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index?error=stmtfailed");
        exit();
    }
    else
    {
        //Binds the variables and executes them
        mysqli_stmt_bind_param($stmt, "sss",$author, $message, $album_name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $error = '<label class="text-success">Comment Added </label>';
    }
}
//If there were any errors or such, we then pass the information to an array and encode the data to be passed in the AJAX function.
$data = array('error' => $error);
echo json_encode($data);

?>