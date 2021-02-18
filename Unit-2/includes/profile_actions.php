<?php
//This PHP file, works alongside with the profile.php file in displaying the appropriate   forms for whatever detail the user would like to change.
if (isset($_POST["NameChange"])) { //If the user pressed the button to choose the name change option and a field is echoed        
    echo"<form action='../includes/profile_functions.php' class='buttonPos' method='POST'>
    <input  id='inputfield' type='text' name='name' placeholder='name'>
    <button id='submitbtn' type='submit' name='UpdateName'>Update Name</button>
    </form>";
}
else
{ 
    
    echo "<p> Name: " .$_SESSION["name"]. "</p>";
    echo "<p>Email: " .$_SESSION["email"]. "</p>";
    echo "<form  method='POST' class='buttonPos'>
        <button id='submitbtn' type='submit' name='NameChange'>Change Name</button>
        </form>";
}

if (isset($_POST["userChange"])) { //If the user pressed the button to change their username and a field is echoed   

    
    echo"<form action='../includes/profile_functions.php' method='POST' class='buttonPos'>
    <input  id='inputfield' type='text' name='newUsername' placeholder='Username'>
    <button id='submitbtn' type='submit' name='UpdateUsername'>Update Username</button>
    </form>";
}
else
{
    echo "<form  method='POST' class='buttonPos'>
        <button  id='submitbtn' type='submit' name='userChange'> Change Username</button>
        </form>";
}

if (isset($_POST["emailChange"])) { //If the user pressed the button to choose the change email option and a field is echoed   

    
    echo"<form action='../includes/profile_functions.php' method='POST' class='buttonPos'>
    <input id='inputfield' type='text' name='email' placeholder='Email'>
    <button id='submitbtn' type='submit' name='UpdateEmail'>Update Email</button>
    </form>";
}
else
{
    
    echo "<form  method='POST' class='buttonPos' >
        <button  id='submitbtn' type='submit' name='emailChange'> Change Email</button>
        </form>";
}

if (isset($_POST["submitDelete"])) { //If the user pressed the button to choose to delete their account a field is echoed 

    echo"<form action='../includes/profile_functions.php' method='POST' class='buttonPos'>
    <input  id='inputfield' type='password' name='pwd' placeholder='Enter password to Delete Account'>
    <button id='submitbtn' type='submit' name='ConfirmDelete'>Delete Profile</button>
    </form>";
}
else
{
    echo "<form  method='POST' class='buttonPos'>
    <button id='submitbtn' type='submit' name='submitDelete'> Delete Account</button>
    </form>";
}
if (isset($_POST["submitChangeForm"])) { //If the user pressed the button to choose the change password option and a field is echoed 

    echo"<form action='../includes/profile_functions.php' method='POST' class='buttonPos'>
    <input id='inputfield' type='password' name='Currentpwd' placeholder='Enter current password'>
    <input id='inputfield' type='password' name='Newpwd' placeholder='Enter new password'>
    <input id='inputfield' type='password' name='RepeatNewpwd' placeholder='Enter new password again'>

    <button id='submitbtn' type='submit' name='UpdatePassword'>Update password</button>
    </form>";
}
else
{
    echo "<form  method='POST' class='buttonPos'>
    <button id='submitbtn' type='submit' name='submitChangeForm'> Change Password</button>
    </form>";
}
?>