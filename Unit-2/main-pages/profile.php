
<!DOCTYPE html>
<html lang="en">
<head>

   <!--Meta Tags-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--My CSS-->
   <link href="../css_and_js/my_css_and_js/custom.css" rel="stylesheet" type="text/css">

   <!--Bootstrap-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <!--Jquery first, Popper.js, Bootstrap JS-->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <!--Google Fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Favicon image source = https://logos-world.net/queen-logo-history/ -->
    <link rel="icon" type="image/ico" href="../photos/queen_photos/queen_favicon.ico"/>

    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic:ital@1&display=swap" rel="stylesheet"> 
</head>

<body>
    <!--Navigation Bar-->
    <?php include_once '../includes/navbar_main_pages.php';
        include_once '../includes/dbh.inc.php'
    ?>
    <?php //If the user is logged in, the title of the tab is changed to the username. If the user comes onto this page while not being logged in, they are redirected to the homepage.
    if (isset($_SESSION["useruid"])) 
    {
        echo "<title> Queen | " . $_SESSION["useruid"]. "'s Profile</title>";
    }
    else
    {
        header("location: ../index.php?error=NotLoggedIn");
        exit();
    }  
    ?>
    <!--Image Header-->
    <!--Image source = https://welcometothemusicbox.wordpress.com/2012/12/15/throwback-quee/-->
            <header id="profile-image_bk">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-12">
                            <div class="Profile_Text">
                                <div class="text">
                                    <h1>Profile:</h1>
                                    <?php echo "<h2>" . $_SESSION["useruid"]. "</h2>"
                                    ?>
                                </div>
                                <!--This SQL statement selects the id, that is associated to our username, this is used to find their profile image.-->
                                <?php
                                    $sql = "SELECT id FROM users WHERE username=?;";
                                    $stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
                                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                                        echo "Failed";
                                        exit();
                                    }
                                    else{
                                        $var = $_SESSION["useruid"];
                                        mysqli_stmt_bind_param($stmt, "s", $var);
                                        mysqli_stmt_execute($stmt);
                                        $resultData = mysqli_stmt_get_result($stmt);
                                        if(mysqli_num_rows($resultData)>0)
                                        {
                                            $row = mysqli_fetch_assoc($resultData);
                                            $id = $row['id'];
                                            $sqlImg = "SELECT image FROM profileimg WHERE userid=?";
                                            $stmt = mysqli_stmt_init($conn);//Initializes the statement and if failed returns the user to the signup page with an error
                                            if (!mysqli_stmt_prepare($stmt, $sqlImg)) {
                                                header("location: ../main-pages/index.php?error=Profilestmtfailed");
                                                exit();
                                            }
                                            else{
                                                mysqli_stmt_bind_param($stmt, "s", $id);
                                                mysqli_stmt_execute($stmt);
                                                $ResultImg = mysqli_stmt_get_result($stmt);
                                                $rowImg = mysqli_fetch_assoc($ResultImg);
                                                $imgname = $rowImg['image'];
                                            }
                                        }
                                    }
                                
                                ?>
                                <!--This Section is used to display information, such as the username, profile picture, name, email. With also lists of actions for the user to choose-->
                                <div class="profile_Img" >
                                    <!--I pass in the name of the users profile image, which is always profile*idNumber*.png, This value is used in JavaScript Ajax function-->
                                    <img id="profile_pic" src="" value="<?php echo $imgname?>">
                                    <!--Profile Picture Upload-->
                                    <div class="container">
                                        <form id="formAjax"  method="POST" action="../includes/uploads.php" enctype="multipart/form-data">
                                            <input type="file" id="fileAjax" name="fileAjax">
                                            <br>
                                            <button type="submit"  id="submit" name="submit" value="UPLOAD">UPLOAD</button>
                                        </form>
                                        <!--Status and Error message is display the user that their image is uploading or that any errors have occurred.-->
                                        <p id="status"></p> 
                                        <P id="ErrorMsg"></P>
                                    </div>
                                </div>
                                <script src="../css_and_js/my_css_and_js/assignment.js" ></script>

                                <!--Displays Profile Info-->
                                <!--I includes a profile actions that echos a list of different actions that the user can choose.
                                Such as Deleting an account, changing their name, username, email or Password.-->
                                <div class="Profile_Sum">
                                    <?php include_once '../includes/profile_actions.php'?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    </section>
</body>
</html>