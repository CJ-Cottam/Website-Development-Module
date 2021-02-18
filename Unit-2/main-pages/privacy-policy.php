<!DOCTYPE html>
<html lang="en">

<head>
    <title> Queen | Privacy Policy </title>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
   <!--Google Fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
   <!--Favicon image source = https://logos-world.net/queen-logo-history/ -->
    <link rel="icon" type="image/ico" href="../photos/queen_photos/queen_favicon.ico"/>
    <!--AJAX-->
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!--Navigation Bar-->
    <?php include '../includes/navbar_main_pages.php';?>


    <!--Banner-->
    <section id="cookie-policy">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul class="nav  nav-tabs left-tabs">
                        <!--First slide is Queen, Freddie, Brian, Roger, John-->
                        <li class="nav-item">
                            <a class="nav-link active" href="#cookie" data-toggle="tab">Cookie Policy</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#GDPR" data-toggle="tab">GDPR</a>
                          </li>
                    </ul>
                    <!--Content inside the tabs-->
                    <!--I decided to use a tab-cotent seen in the about_us page to explain cookies and GDPR separately-->-
                    <div class="tab-content">
                        <article id="cookie" class="tab-pane container active">
                            <h1>Cookie Policy</h1>
                            <h5>Last Updated on 20/1/2020</h5>
                            <section>
                                <p id="cookie-des">
                            </section>
                        </article>
                        <!--Article on Freddie Mercury-->
                        <article id="GDPR" class="tab-pane container">
                            <h1>General Data Protection Regulation(GDPR)</h1>
                            <h5>Last Updated on 03/12/2020</h5>
                            <section>
                                <p id="GDPR-des">

                                </p>
                                
                                <!--This calls a JavaScript function that uses pure ajax to fetch a GDPR document I created to better show the GDPR-->
                                <button onclick="loadImg()" id="clickGDPR-Photo">GDPR Policy</button>
                                <img id="img-GDPR"/>
                            </section>   
                        </article>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="../css_and_js/my_css_and_js/assignment.js"></script>

    <!--Footer section-->
    <?php include '../includes/footer.php';?>
</body>
</html>