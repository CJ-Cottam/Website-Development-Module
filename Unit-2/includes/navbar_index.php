<?php 
    session_start();
?>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!--The navbar_index.php was created because of different directory issues, I had been facing this is primary used for the navigation between the index and other files that were contained in folders-->
<section id="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <!--Brand/logo -->
            <a id="navbar-brand" href="../coursework2/index.php">
                <!--Logo source = https://www.pinterest.co.uk/pin/1337074881389781/ -->
                <img src="../coursework2/photos/queen_photos/queen-navbar.png">
            </a>
            <!-- Links -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle navigation"> 
                <i class="fa fa-bars"></i>
            </button>
            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../coursework2/index.php">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../coursework2/main-pages/about_us.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../coursework2/main-pages/albums.php">Albums</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../coursework2/main-pages/merch.php">Merchandise</a>
                    </li>
                    <?php //If the user logins in, we display a profile and logout tabs otherwise, we display a signup or Login tab
                        if (isset($_SESSION["useruid"])) {
                            echo "<li class='nav-item'> <a  id='login' class='nav-link' href='../coursework2/main-pages/profile.php'>". $_SESSION["useruid"]. "</a></li>";
                            echo "<li class='nav-item'> <a  id='login' class='nav-link' href='../coursework2/includes/logout.inc.php'>Logout</a></li>";


                            
                        }
                        else{
                            echo "<li class='nav-item'> <a  id='login' class='nav-link' href='../coursework2/main-pages/login.php'>Login</a></li>";
                            echo "<li class='nav-item'> <a  id='login' class='nav-link' href='../coursework2/main-pages/signup.php'>Sign Up</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </div> 
    <link href="../coursework2/css_and_js/cookie_plugin/cookie.css" rel="stylesheet" type="text/css">
    <!--//Cookie Popup
        //Source = https://www.jqueryscript.net/other/GDPR-Cookie-Consent-Popup-Plugin.html
        //Creator = ketanmistry -->
    <script type="text/javascript" src="../coursework2/css_and_js/cookie_plugin/jquery.ihavecookies.js"></script> 
</section>