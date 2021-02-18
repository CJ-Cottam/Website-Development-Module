<?php
//The functions.inc.php is a list of all different functions that are used in different php scripts.

//PHP function used to check empty input fields in the signup form.
function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
    $result = false;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat))
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

/*This PHP function checks if the username is valid.
The function checks to see if their username has only letters from A to Z and 0-9, then checks the length of the characters.
*/
function invalidUid($username)
{
    $result = false;
    if(preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        $usernamelen = strlen($username);
        if( $usernamelen < 6 && $usernamelen > 16)
        {
            $result= true;
            header("location: ../main-pages/signup.php?error=invalidUsernameLength");
            exit();        
        }
        else
        {
            $result= false;
        }
    }
    else{
        $result = true;
    }
    return $result;
}

//PHP function used to check that the email entered is valid.
function invalidEmail($email)
{
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

//PHP function used to check that both the password and Repeated Password match and are valid passwords 
function pwdMatch($pwd, $pwdRepeat)
{
    $result = false;
    if($pwd !== $pwdRepeat)
    {
        $result = true;
    }
    else{
        $pwdlen = strlen($pwd);
        if($pwdlen < 4)
        {
            $result = true;
            header("location: ../main-pages/signup.php?error=passwordlengthInvalidOrCharacters");
            exit();      
        }
        else{
            $result = false;
        }
    }
    return $result;
}

//PHP function used to check if a username or email already exists in our database 
function uidExist($conn, $username, $email)
{
    //Prepared statement of finding all the information based on the username OR email
    $sql = "SELECT * FROM users WHERE username = ? OR email  = ?;";
    $stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../main-pages/signup.php?error=SelectStmtFailuidExist");
        exit();
    }
    else
    {
        //Binds the variables and executes them
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        //Gets the result data and checks if the row is equal to the information we found
        $resultData = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else
        {
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }
}

//PHP function used to create the user after submitting information from the signup form 
function createUser($conn, $name, $email, $username, $pwd)
{
    //Creating the User
    $sql = "INSERT INTO users (name, username, email, pwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../main-pages/signup.php?error=INSERTStmtFailCreate");
        exit();
    }
    else
    {
        //Hashing the Users Password
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        ProfileDB($conn, $username);
    }
}

//PHP function used to create information to store information relating their profile picture after their account has been created
function ProfileDB($conn, $username)
{
    //Connecting to the Profile Img DB
    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../main-pages/signup.php?error=SelectStmtFailCreate");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $usersid = $row['id'];
                $sql = "INSERT INTO profileimg (userid, image) VALUES(?,?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../main-pages/signup.php?error=InsertStmtFailCreate");
                    exit();
                }
                else{
                    //The default image, when the user first joins is automatically assigned.
                    $var = 'default_profile.jpg';
                    mysqli_stmt_bind_param($stmt, "ss", $usersid, $var);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    header("location: ../main-pages/signup.php?error=AccountCreated");
                    exit();
                }
            }
        }
        else
        {
            header("location: ../main-pages/signup.php?error=noUsers");
            exit();
        }
    }
}

//PHP function used to check empty fields, when the user is updating their information.
function emptyForm($inputfield)
{
    $result = false;
    if(empty($inputfield))
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


//PHP function used to check empty login fields in the signup form.
function emptyInputLogin($username,$pwd){
    $result = false;
    if(empty($username) || empty($pwd))
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

//PHP function used to login our user
function loginUser($conn, $username, $pwd)
{
    //We call to our uidExist function to see if the users username or email exists in our database
    $uidExists = uidExist($conn, $username, $username);
    if($uidExists === false)
    {
        header("location: ../main-pages/login.php?error=InvalidLogin");
        exit();
    }
    
    //We then check that the users password matches with the hashed password on our database.
    $pwdHashed = $uidExists["pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../main-pages/login.php?error=wrongPassword");
        exit();
    }
    else if($checkPwd === true)
    {
        //If the passwords match then a session is established
        session_start();
        $_SESSION["userid"] = $uidExists["id"];
        $_SESSION["useruid"] = $uidExists["username"];
        $_SESSION["name"] =  $uidExists["name"];
        $_SESSION["email"] =  $uidExists["email"];
        header("location: ../index.php");
        exit();
    }
}

//PHP function used to delete the users information from all our databases
function DeleteUser($conn, $username, $email, $pwd)
{
    $uidExists = uidExist($conn, $username, $email);
    //We verify that the user has entered the right password to confirm their account deletion.
    $pwdHashed = $uidExists["pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    $id = $uidExists["id"];
    if ($checkPwd === false) {

        header("location: ../main-pages/profile.php?error=wrongPasswordDelete");
        exit();
    }
    else if($checkPwd === true)
    {
        //If the passwords match then begin the process of deleting the users information.
        //Deleting the users information from the users database
        $sql = "DELETE FROM users WHERE id=?;";
        $stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main-pages/profile.php?error=DeleteStmtFail");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $id);
            mysqli_stmt_execute($stmt);
            //Deleting the users information from the profile image database
            $sqlImg = "DELETE FROM profileimg WHERE userid=?;";
            $stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
            if (!mysqli_stmt_prepare($stmt, $sqlImg)) {
                header("location: ../main-pages/profile.php?error=profileImgStmtFailed");
                exit();
            }
            else
            {
                //Before uploading we check to see if, there is already a profile picture that is not the same format
                mysqli_stmt_bind_param($stmt, "s", $id);
                mysqli_stmt_execute($stmt);
                //Deleting all the users comments.
                $sqlComments = "DELETE FROM comments WHERE author =?;";
                $stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
                if (!mysqli_stmt_prepare($stmt, $sqlComments)) {
                    header("location: ../main-pages/profile.php?error=profileImgStmtFailed");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    //This last part makes sure the user is logged out and having the session destroyed.
                    session_unset();
                    session_destroy();                
                    header("location: ../index.php?=ProfileDeleted");
                    exit();
                }
               
            }
        }
        
    }
}

//PHP Function for Updating Users Password
function UpdatePassword($conn, $username,$email,$CurrentPwd, $NewPwd)
{
    //Finds the users password in the database to check that the user entered their current password for changing.
    $uidExists = uidExist($conn, $username, $email);
    $pwdHashed = $uidExists["pwd"];
    $id = $uidExists["id"]; //We use the ID for the SQL UPDATE statement.
    $checkPwd = password_verify($CurrentPwd, $pwdHashed); //We verify that the CurrentPassword the user entered matches with the one on the database.

    if ($checkPwd === false) {
        header("location: ../main-pages/login.php?error=wrongPasswordPwdUpdate");
        exit();
    }
    else if($checkPwd === true)
    {
        $sql = "UPDATE users SET pwd = ? WHERE id = ?;"; //We then prepare an SQL statement to update the users password
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main-pages/profile.php?error=UpdateStmtFailedPwdUpdate");
            exit();
        }
        else
        {
            //Hashing the Users Password
            $hashedPwd = password_hash($NewPwd, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ss", $hashedPwd, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: ../main-pages/profile.php?PasswordUpdated");
            exit();
        }
    }
}

//PHP Function for Updating the User's Name
function UpdateName($conn, $newName, $username, $email)
{
    $uidExist = uidExist($conn, $username, $email);
    $id = $uidExist["id"];
    $sql = "UPDATE users SET name = ? WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../main-pages/profile.php?error=NameUpdateStmtFail");
        exit();
    }
    else
    {
        //Hashing the Users Password
        mysqli_stmt_bind_param($stmt, "ss", $newName, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $_SESSION["name"] =  $newName;
        header("location: ../main-pages/profile.php?=NameUpdated");
        exit();
    }
}

//PHP Function for Updating the Username
function UpdateUsername($conn, $newUsername)
{
    if(UsernameExist($conn, $newUsername) === false) // Checks the new username doesn't already exists by another user in the database
    {
        $username = $_SESSION["useruid"];
        $email = $_SESSION["email"];

        $uidExist = uidExist($conn, $username, $email);
        $id = $uidExist["id"];
        $username = $uidExist["username"];
        $email = $uidExist["email"];
        //Prepared UPDATE Statement
        $sql = "UPDATE users SET username = ? WHERE id = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main-pages/profile.php?error=UsernameExistsStmtFail");
            exit();
        }
        else
        {
            //Udpating the users Username
            mysqli_stmt_bind_param($stmt, "ss", $newUsername, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $uidExists = uidExist($conn, $newUsername, $email);
            
            session_start();
            $_SESSION["userid"] = $uidExists["id"];
            $_SESSION["useruid"] = $uidExists["username"];
            $_SESSION["name"] =  $uidExists["name"];
            $_SESSION["email"] =  $uidExists["email"];            
            header("location: ../main-pages/profile.php?=UsernameUpdated");
            exit();
        }
    }
    else
    {
        header("location: ../main-pages/profile.php?=UsernameExists");
        exit();
    }
}
//PHP Function to update the Email
function UpdateEmail($conn, $newEmail)
{
    if(UsernameExist($conn, $newEmail) === false)
    {
        $username = $_SESSION["useruid"];
        $email = $_SESSION["email"];

        $uidExist = uidExist($conn, $username, $email);
        $id = $uidExist["id"];
        $username = $uidExist["username"];
        $email = $uidExist["email"];

        $sql = "UPDATE users SET email = ? WHERE id = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main-pages/profile.php?error=NameUpdateStmtFail");
            exit();
        }
        else
        {
            //Hashing the Users Password
            mysqli_stmt_bind_param($stmt, "ss", $newEmail, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $uidExists = uidExist($conn, $username, $newEmail);
            
            session_start();
            $_SESSION["userid"] = $uidExists["id"];
            $_SESSION["useruid"] = $uidExists["username"];
            $_SESSION["name"] =  $uidExists["name"];
            $_SESSION["email"] =  $uidExists["email"];            
            header("location: ../main-pages/profile.php?=UsernameUpdated");
            exit();
        }
    }
    else
    {
        header("location: ../main-pages/profile.php?=EmailExists");
        exit();
    }
}

//PHP Function to check if an Email or Username exists
function UsernameExist($conn, $newUsername)
{
    //Prepared statement of finding all the information based on the username OR email
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../main-pages/signup.php?error=UsernameExistsStmt");
        exit();
    }
    else
    {
        //Binds the variables and executes them
        mysqli_stmt_bind_param($stmt, "ss", $newUsername, $newUsername);
        mysqli_stmt_execute($stmt);
        //Gets the result data and checks if the row is equal to the information we found
        $resultData = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else
        {
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }
}