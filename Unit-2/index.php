<!DOCTYPE html>
<html lang="en">
<head>
    <title> Queen | Home </title>
   <!--Meta Tags-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--My CSS-->
   <link href="css_and_js/my_css_and_js/custom.css" rel="stylesheet" type="text/css">
   <!--Cookie_pop plugin source = https://www.jqueryscript.net/other/GDPR-Cookie-Consent-Popup-Plugin.html-->
   
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

    <!--Favicon image source = https://logos-world.net/queen-logo-history/ -->
    <link rel="icon" type="image/ico" href="../photos/queen_photos/queen_favicon.ico"/>
 <!--My JavaScript/AJAX-->    
    <script type="text/javascript" src="css_and_js/my_css_and_js/assignment.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet"> 
</head>

<body>
    <!--Navigation Bar-->
    <?php include 'includes/navbar_index.php';?>
    <!--Image Header-->
    <!--Image source = https://wallpapersafari.com/queen-logo-wallpapers -->
    <header id="image-header">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12">
                    <div id="index-text">
                        <h1>Queen</h1>
                        “I won’t be a rock star. I will be a legend.”
                        <?php 
                            if (isset($_SESSION["useruid"])) 
                            {
                                echo "Welcome ".$_SESSION["useruid"]." also known as ".$_SESSION["name"];
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>