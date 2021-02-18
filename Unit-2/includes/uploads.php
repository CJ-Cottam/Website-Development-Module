<?php
//Profile Image Upload
//This PHP File handles the profile picture upload and updating the Profile Image Database
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'dbh.inc.php';
if (isset($_POST["submit"])) 
{
    $id = $_SESSION['userid'];
    //Grabs the file and takes the name and details of the image
    //The details of the files are collected from an AJAX function that does the validation checking. For example that the image is a PNG and not more than 5MB
    $file = $_FILES['fileAjax'];
    $fileName = $_FILES['fileAjax']['name'];
    $fileTmpName = $_FILES['fileAjax']['tmp_name'];
    $fileSize = $_FILES['fileAjax']['size'];
    $fileError = $_FILES['fileAjax']['error'];
    $fileType = $_FILES['fileAjax']['type'];
    $data = '';
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));


    //We used an SFTP function that connects to the Mayar server with my credentials to upload the file.
    SFTPUpload($fileTmpName, $id, $fileType, $sftpServer, $sftpPort, $sftpRemoteDir, $sftpUsername, $sftpPassword);
    //We then update the Profile Image database to have the new name of the image.
    updateIMGDB($conn, $id, $fileType);
}
else
{
    header("location: ../index.php?error=SubmitButtonNotPressed");
    exit();
}

//File Upload Function.
function SFTPUpload($fileTmpName, $id, $fileType, $sftpServer, $sftpPort, $sftpRemoteDir, $sftpUsername, $sftpPassword )
{
    //I research on how to do the file upload for SFTP transfer, most methods same to be the same
    //References
    //https://www.php.net/manual/en/function.curl-setopt.php
    // https://www.glenscott.co.uk/uploading-file-sftp-server-php-curl/
    //We assigned the value of the temp name our file to the variable called dataFile.
    $dataFile      =  $fileTmpName;
    //We then initiate a connection by delcaring the url, port number, server name and the directory, we want to point at with the file name at the end.
    $ch = curl_init('sftp://' . $sftpServer . ':' . $sftpPort . $sftpRemoteDir . '/' . basename($dataFile));
    //We assign the url and at the end the new name, we want to call it.
    $url = 'sftp://' . $sftpServer . ':' . $sftpPort . $sftpRemoteDir . '/profile'.$id.'.'.basename($fileType);
    $fh = fopen($dataFile, 'r');
    //If the file is readable we then execute various cURL functions
    if ($fh) {
        //We pass in our username and password
        curl_setopt($ch, CURLOPT_USERPWD, $sftpUsername . ':' . $sftpPassword);
        curl_setopt($ch, CURLOPT_UPLOAD, true); //Declare that this is an upload
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_SFTP); //Pass in the SFTP protocol
        curl_setopt($ch, CURLOPT_INFILE, $fh); //Allows the file to be read during transfer
        curl_setopt($ch, CURLOPT_INFILESIZE, filesize($dataFile)); //The expected size of the file in bytes
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        
        $verbose = fopen('php://temp', 'w+');
        curl_setopt($ch, CURLOPT_STDERR, $verbose);
    
        //Executes
        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);
    
        if ($response) {
            echo "Success";
        } else {
            echo "Failure";
            rewind($verbose);
            $verboseLog = stream_get_contents($verbose);
            echo "Verbose information:\n" . $verboseLog . "\n";
        }
    }
}

//PHP Function used to update the Image Database
function updateIMGDB($conn, $id, $fileType)
{
    //We update the row where the current user is and change the name.
    $sql = "UPDATE profileimg SET image = ? WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) 
    {
        header("location: ../main-pages/signup.php?error=profile_img_stmt_failed");
        exit();
    }
    else
    {
        $FileName = "profile$id.".basename($fileType); // The new name with their id.
        mysqli_stmt_bind_param($stmt, "ss", $FileName, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../main-pages/profile.php?ImageUploaded");
        exit();
    }
}
    