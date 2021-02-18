<!DOCTYPE html>
<html lang="en">

<head>
    <title> Queen | Album Lists </title>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!--Favicon image source = https://logos-world.net/queen-logo-history/ -->
    <link rel="icon" type="image/ico" href="../photos/queen_photos/queen_favicon.ico"/>
    <!--My JavaScript-->
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet"> 
    <!--AJAX-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--My JS/AJAX-->
    <script type="text/javascript" src="../css_and_js/my_css_and_js/assignment.js"></script>
</head>

<body>
    <!--Navigation Bar-->
    <?php include '../includes/navbar_main_pages.php';?>
    <!--Showcase Albums--
    The showcase section which contains a slide of Queen albums with a flip effect-->
    <section id="showcase">
        <div class="container">
            <h1 class="text-center">Showcase Albums!</h1>
            <div class="row">
               <!--Carousel Wrapper-->
               <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">
                   <!--Controls-->
                   <div class="controls-top">
                        <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fa fa-angle-left fa-3x pr-3"></i></a>
                        <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fa fa-angle-right fa-3x pl-3"></i></a>
                    </div>
                    <!--/.Controls-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/Hot-Space.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Hot Space</h4>
                                            <hr>
                                            <p>Released In 21 May 1982</p>
                                            <hr>
                                            <p>Length: 44 mins</p>
                                            11 Tracks
                                            <a href="../album-pages/hot_space.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/A-Kind-of-magic.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>A Kind of Magic</h4>
                                            <hr>
                                            <p>Released In 1 June 1986</p>
                                            <hr>
                                            <p>Length: 1hr  11mins</p>
                                            16 Tracks
                                            <a href="../album-pages/kind_of_magic.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/Innuendo.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Innuendo</h4>
                                            <hr>
                                            <p>Released In 4 February 1991</p>
                                            <hr>
                                            <p>Length: 1hr  16mins</p>
                                            17 Tracks
                                            <a href="../album-pages/Innuendo.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/jazz.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Jazz</h4>
                                            <hr>
                                            <p>Released In 10 November 1978</p>
                                            <hr>
                                            <p>Length: 1hr  1min1</p>
                                            18 Tracks
                                            <a href="../album-pages/jazz.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.First slide-->
                    <!--Second slide-->
                    <div class="carousel-item">
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/live_at_Wembley.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Live at Wembley</h4>
                                            <hr>
                                            <p>Released In 10 December 1990</p>
                                            <hr>
                                            <p>Length: 1hr  51mins</p>
                                            28 Tracks
                                            <a href="../album-pages/live_at_wembley.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/Queen - A Night at the Opera.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Night at the Opera!</h4>
                                            <hr>
                                            <p>Released In 4 February 1991</p>
                                            <hr>
                                            <p>Length: 1hr  2mins</p>
                                            18 Tracks
                                            <a href="../album-pages/night_at_opera.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/Queen - News of the World.JPG"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>News of the World</h4>
                                            <hr>
                                            <p>Released In 28 October 1977</p>
                                            <hr>
                                            <p>Length: 56mins</p>
                                            16 Tracks
                                            <a href="../album-pages/news_of_world.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/Sheer_Heart_Attack.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Sheer Heart Attack</h4>
                                            <hr>
                                            <p>Released In 8 November 1974</p>
                                            <hr>
                                            <p>Length: 55mins</p>
                                            18 Tracks
                                            <a href="../album-pages/sheer_heart_attack.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/The_Miracle.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>The Miracle</h4>
                                            <hr>
                                            <p>Released In 22 May 1989</p>
                                            <hr>
                                            <p>Length: 1hr  10mins</p>
                                            17 Tracks
                                            <a href="../album-pages/miracle.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/the_game.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>The Game</h4>
                                        <hr>
                                        <p>Released In 30 June 1980</p>
                                        <hr>
                                        <p>Length: 36mins</p>
                                        10 Tracks
                                        <a href="../album-pages/the_game.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
  
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/cosmos.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>The Cosmos Rocks</h4>
                                            <hr>
                                            <p>Released In 15 September 2008</p>
                                            <hr>
                                            <p>Length:1hr 4mins</p>
                                            15 Tracks
                                            <a href="../album-pages/cosmos.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img class="img-fluid" src="../photos/album-covers/forever.jpg"
                                            alt="Card image cap">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Forever</h4>
                                            <hr>
                                            <p>Released In 10 November 2010</p>
                                            <hr>
                                            <p>Length: 2hrs  15mins</p>
                                            36 Tracks
                                            <a href="../album-pages/forever.php"><button id="btn1"> View More!</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Third slide-->
                <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </div>
</section>

<!--Other Albums section-->
<section class="Album-posts">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--Jazz Queen-->
                <article class="Album-post shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <!--Image Cover-->
                            <!--Album cover source = http://www.onemusicapi.com/artists/album-covers/Queen.html-->
                            <img class="img-fluid" alt="Jazz Cover" src="../photos/album-covers/jazz.jpg">
                        </div>
                        <div class="col-sm-8">
                            <!--Title and Description-->
                            <h3> <a href="../album-pages/jazz.php">Jazz</h3></a>
                            <p class="Album-post-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. 
                            </p>
                        </div>
                    </div>
                </article>

                <!--A Kind of Magic-->
                <article class="Album-post shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <!--Image Cover-->
                            <!--Album cover image source = http://www.onemusicapi.com/artists/album-covers/Queen.html-->
                            <img class="img-fluid" alt="A Kind of Magic Cover" src="../photos/album-covers/A-Kind-of-magic.jpg">
                        </div>
                        <div class="col-sm-8">
                            <!--Title and Description-->
                            <h3> <a href="../album-pages/kind_of_magic.php">A Kind of Magic</h3></a>
                            <p class="Album-post-des">Lorem Ipsum is simply dummy text 
                                of the printing and typesetting industry. Lorem Ipsum ha
                                s been the industry's standard dummy text ever since the 1500s, when an unknown printer 
                                took a galley of type and scrambled it to
                                make a type specimen book. 
                            </p>
                        </div>
                    </div>
                </article>

                <!--Innuendo-->
                <article class="Album-post shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <!--Image Cover-->
                            <!--Album cover image source = http://www.onemusicapi.com/artists/album-covers/Queen.html-->
                            <img class="img-fluid" alt="Innuendo Cover" src="../photos/album-covers/Innuendo.jpg">
                        </div>
                        <div class="col-sm-8">
                            <!--Title and Description-->
                            <h3><a href="../album-pages/Innuendo.php">Innuendo</h3></a>
                            <p>Lorem Ipsum is simply dummy 
                                text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                hen an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. 
                            </p>
                        </div>
                    </div>
                </article>

                <!--The Miracle-->
                <article class="Album-post shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <!--Image Cover-->
                            <!--Album cover image source = http://www.onemusicapi.com/artists/album-covers/Queen.html-->
                            <img class="img-fluid" alt="The Miracle Cover" src="../photos/album-covers/The_Miracle.jpg">
                        </div>
                        <div class="col-sm-8">
                            <!--Title and Description-->
                            <h3><a href="../album-pages/miracle.php"> The Miracle</a></h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to
                            </p>
                        </div>
                    </div>
                </article>

                <!--Hot Space-->
                <article class="Album-post shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <!--Image Cover-->
                            <!--Album cover image source = http://www.onemusicapi.com/artists/album-covers/Queen.html-->
                            <img class="img-fluid" alt="Hot Space Cover" src="../photos/album-covers/Hot-Space.jpg">
                        </div>
                        <div class="col-sm-8">
                            <!--Title and Description-->
                            <h3> <a href="../album-pages/hot_space.php">Hot Space</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. 
                            </p>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </div>
</section>
    <!--Footer section-->
    <?php include '../includes/footer.php';?>

</body>
</html>