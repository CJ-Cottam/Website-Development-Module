<?php 
    session_start();
?>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!--The navbar_main_pages.php was created because of different directory issues, I had been facing this is primary used for the index. This php file is used in every other PHP file 
except for the index-->
<section id="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <!-- Brand/logo -->
            <a id="navbar-brand" href="../index.php">
                <!--Logo source = https://www.pinterest.co.uk/pin/1337074881389781/ -->
                <img src="../photos/queen_photos/queen-navbar.png">
            </a>
            <!-- Links -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle navigation"> 
                <i class="fa fa-bars"></i>
            </button>
            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../main-pages/about_us.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../main-pages/albums.php">Albums</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../main-pages/merch.php">Merchandise</a>
                    </li>
                    <?php //If the user is login in, the navbar now displays a Profile tab with the username and a logout button
                          //Otherwise displays a signup or login
                        if (isset($_SESSION["useruid"])) {
                            echo "<li class='nav-item'> <a  id='login' class='nav-link' href='../main-pages/profile.php'>". $_SESSION["useruid"]. "</a></li>";
                            echo "<li class='nav-item'> <a  id='login' class='nav-link' href='../includes/logout.inc.php'>Logout</a></li>";
                        }
                        else{
                            echo "<li class='nav-item'> <a  id='login' class='nav-link' href='../main-pages/login.php'>Login</a></li>";
                            echo "<li class='nav-item'> <a  id='login' class='nav-link' href='../main-pages/signup.php'>Sign Up</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </div>

    <link href="../css_and_js/cookie_plugin/cookie.css" rel="stylesheet" type="text/css">
    <!--//Cookie Popup
        //Source = https://www.jqueryscript.net/other/GDPR-Cookie-Consent-Popup-Plugin.html
        //Creator = ketanmistry -->
    <script type="text/javascript" src="../css_and_js/cookie_plugin/jquery.ihavecookies.js"></script> 
</section>