<?php
require_once 'dbh.inc.php';
//This PHP script is used to load comments on our album pages.

//We select the comments that our relevant to whatever page the user is on.
$sql = "SELECT * FROM comments WHERE album_name = ?";
$stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
$album_name = $_POST["page_id"]; // We get the page_id (the name of the album page) and assigned the value to the variable 
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index?error=StmtFail");
    exit();
}
else
{
    //Executes our statement
    mysqli_stmt_bind_param($stmt, "s",$album_name);
    mysqli_stmt_execute($stmt);
    //Gets the result data and checks if we do have any comments
    $resultData = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($resultData)>0)
    {
        while($row = mysqli_fetch_assoc($resultData))
        {
            $id = $row['id'];
            //We then select the comments that ordered by time stamps in a descending order, so most recent comment.
            $sql = "SELECT * FROM comments WHERE album_name = ? ORDER BY time_stamp DESC";
            $stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../index?error=StmtFail");
                exit();            
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "s",$album_name);
                mysqli_stmt_execute($stmt);
                $resultData = mysqli_stmt_get_result($stmt);       
                $output = '';
                foreach($resultData as $row)
                {   //We then use a for loop to iterate through each field in the row and echo the comments
                    $output .= '
                    <div class="panel panel-default">
                    <div class="panel-heading">
                    By <b>'.$row["author"].'</b> on <i>'.$row["time_stamp"].'</i>
                    </div>
                    <div class="panel-body">'.$row["message"].'
                    </div>
                    </div>
                    ';
                }
                echo $output;
            }
        }
    } 
    else
    {
        echo "There are no comments";
    }
    mysqli_stmt_close($stmt);
}
?>