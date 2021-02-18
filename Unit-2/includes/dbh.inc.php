<?php
//Database connection settings
$serverName = "*Retracted ";
$dBUsername = "*Retracted*";
$dBPassword = "*Retracted*";
$dBName = "*Retracted*";
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
//The SFTP connection settings are used for mainly file transfer, for when their user uploads their profile image
$sftpServer    = '*Retracted*';
$sftpUsername  = '*Retracted*';
$sftpPassword  = '*Retracted*';
$sftpPort      = 22;
$sftpRemoteDir = '*Retracted*';
if(!$conn){
    die("Connection Failed: " .mysqli_connect_error());
}
