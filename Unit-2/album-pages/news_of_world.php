<!DOCTYPE html>
<html lang="en">

    <head>
        <title> Queen | News of the World </title>
        <!--Meta Tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--My CSS & JS-->
        <link href="../css_and_js/my_css_and_js/custom.css" rel="stylesheet" type="text/css">
        <link href="../css_and_js/my_css_and_js/assignment.js">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
        <!--Fonts Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <!--Jquery, Popper, Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Favicon-->
        <!--Favicon image source = https://logos-world.net/queen-logo-history/ -->
        <link rel="icon" type="image/ico" href="../photos/queen_photos/queen_favicon.ico" />
        <script src="../css_and_js/my_css_and_js/assignment.js"></script>
    </head>
<body>
    <!--Navigation Bar-->
    <?php include '../includes/navbar_main_pages.php';?>

    <!--Album Details-->
    <section id="albums_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 shadow">
                    <!--Album Cover-->
                    <h2 class="text-center">News of The World</h2>
                    <!--Track Listing-->
                    <div class="col-lg-8">
                        <div class="box">
                            <div class="box-image">
                                <!--Album cover image source = http://www.onemusicapi.com/artists/album-covers/Queen.html-->
                                <img class="img-fluid" alt="News of the World Cover" src="../photos/album-covers/Queen - News of the World.JPG">
                                Released In 28 October 1977 <br>Length: 39 mins
                                <br>
                                Rate the Album!
                            </div>
                            <ol>
                                <li>We Will Rock You</li>
                                <li>We Are the Champions</li>
                                <li>Sheer Heart Attack</li>
                                <li>All Dead, All Dead</li>
                                <li>Spread Your Wings</li>
                                <li>Fight From the Inside</li>
                                <li>Get Down, Make Love</li>
                                <li>Sleeping on the Sidewalk</li>
                                <li>Who Needs You</li>
                                <li>It's Late</li>
                                <li>My Melancholy Blues</li>
                            </ol>
                        </div>
                        <!--Links to the Album on Spotify or Apple Music-->
                        <div class="Album-Links">
                            <a href="https://open.spotify.com/album/0bgXKrFKEMJYf03k0Lje4Z">
                                    <!--Spotify - https://www.flaticon.com/free-icon/spotify_2111624-->
                                <img class="img-fluid" src="../photos/app-icons/spotify.png" alt="Spotify">
                            </a>
                            <a href="https://music.apple.com/us/album/news-of-the-world/1440646541">
                                <!--Apple Music - https://www.apple.com/apple-music/-->
                                <img class="img-fluid" src="../photos/app-icons/apple-music.png" alt="Apple Music">
                            </a>
                        </div>
                    </div>
                    <!--The comments Section-->
                    <div class="container">
                        <form method="POST" id="comment_form">
                            <div class="form-group">
                                <!--The text box field-->
                                <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <!--Hidden input field to pass the comment id-->
                                <input type="hidden" name="comment_id" id="comment_id" value="News_of_World" />
                                
                                <?php if(isset($_SESSION['useruid'])) //PHP IF statement to check if a user is actually logged in or not.
                                {
                                    echo "<input type='submit' name='submit' id='submit' class='btn btn-info' value='Submit' />";
                                }
                                else{
                                    echo "<h3> Please Login to comment on albums! </h3>";
                                } ?>
                               
                            </div>
                        </form>
                        <span id="comment_message"></span> <!--Displays a message if a comment has been added or not-->
                        <br />
                        <div id="display_comment"></div> <!--Displays all the comments relating to this album-->
                    </div>  
                </div>
    
                <!--Aside Posts of popular Albums-->
                <div class="col-lg-4">
                    <div class="container">
                    <div id="aside-heading">
                        <h3>Popular Albums!</h3>
                    </div>
                    <!--Aside-post of Sheer Heart Attack-->
                    <div class="aside-post">
                        <a href="sheer_heart_attack.php">
                            <!--Album cover image source = http://www.onemusicapi.com/artists/album-covers/Queen.html-->
                            <img class="img-fluid" alt="sheer_heart_attack" src="../photos/album-covers/Sheer_Heart_Attack.jpg">
                        </a>
                        <div class="aside-content">
                            <a href="sheer_heart_attack.php"><h3>Sheer Heart Attack</h3></a>
                        </div>
                    </div>
    
                    <!--Aside-post of A Night at the Opera-->
                    <div class="aside-post">
                        <a href="night_at_opera.php">
                            <!--Album cover image source = http://www.onemusicapi.com/artists/album-covers/Queen.html-->
                            <img class="img-fluid" alt="Night at Opera" src="../photos/album-covers/Queen - A Night at the Opera.jpg">
                        </a>
                        <div class="aside-content">
                            <a href="night_at_opera.php"> 
                                <h3>A Night at the Opera</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Footer section-->
    <?php include '../includes/footer.php';?>

</body>

</html>