<!DOCTYPE html>
<html lang="en">
<head>
    <title> Queen | Login</title>
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
   <!--Ajax-->
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Favicon image source = https://logos-world.net/queen-logo-history/ -->
    <link rel="icon" type="image/ico" href="../photos/queen_photos/queen_favicon.ico"/>
    <!--My JavaScript/AJAX-->
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet"> 
    <script type="text/javascript" src="../css_and_js/my_css_and_js/assignment.js"></script>

</head>

<body>
    <!--Navigation Bar-->
    <?php include '../includes/navbar_main_pages.php';?>
    
    <!--Image Header-->
    <!--Image source = https://welcometothemusicbox.wordpress.com/2012/12/15/throwback-quee/-->
    <section class="signup-form">
        <header id="image-header">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-12">
                        <h2> Login</h2>
                        <?php //Error messages that display depending on what is in the url
                            if(isset($_GET["error"]))
                            {
                                if($_GET["error"] == "emptyinput")
                                {
                                    echo "<p id='errormsg'>Fill in all fields!</p>";
                                }
                                else if($_GET["error"] == "InvalidLogin")
                                {
                                    echo"<p  id='errormsg'>Invalid Login Details!</p>";
                                }
                                else if($_GET["error"] == "wrongPassword")
                                { 
                                    echo"<p  id='errormsg'>Wrong Password!</p>";
                                }
                                else if($_GET["error"] == "none")
                                {
                                    echo"<p  id='errormsg'>You have successfully signed up!</p>";
                                }
                            }
                        ?>
                        <!--HTML Login form-->
                        <div class="signup-form-form">
                            <form action="../includes/login.inc.php" method="POST">
                                <input  id='inputfield' type="text" name="uid" placeholder="Email/Username">
                                <input  id='inputfield'  type="password" name="password" placeholder="Password">
                                <button id='submitbtn' type="submit" name="submit">Login</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
    </section>    
    
</body>
</html>