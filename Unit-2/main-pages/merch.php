<!DOCTYPE html>
<html lang="en">

<head>
    <title> Queen | Merchandise </title>
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
    <!--Favicon image source = https://logos-world.net/queen-logo-history/ -->
    <link rel="icon" type="image/ico" href="../photos/queen_photos/queen_favicon.ico"/>
    <!--My JavaScript-->
    <!--AJAX-->
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <script type="text/javascript" src="../css_and_js/my_css_and_js/assignment.js"></script>
</head>


<body>
    
<?php include '../includes/navbar_main_pages.php';?>


        <!--Merchandise Section-->
        <section id="merch">
            <div class="merch-boxes">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <!--Use panels to neatly display each item of merch-->
                            <div class="panel panel-primary">
                                <div class="panel-heading">Upcoming Item</div>
                                <div class="panel-body">
                                    <!--image source = https://www.queenonlinestore.com/*/*/-Taylored-Limited-Edition-Lion-windcheater/6QHB0000000-->
                                    <img class="img-responsive" src="../photos/merch-photos/taylored.jpg">
                                </div>
                                <div class="panel-footer">
                                    'Taylored' Limited Edition 'Lion' windcheater
                                    <hr>
                                    This Stunning and eye catching store exclusive windcheater is made from 100% recycled (So good for the planet) Polyester.
                                    Featuring Roger Taylors 'Lion' design embroidered onto the chest and hood top print and Tsylored Jolly Roger Tag.
                                    <hr>
                                    <div class="price-box">
                                        £60.00
                                        <br>
                                        <label for="sizes">Choose a Size</label>
                                        <select id="sizes_list">
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select>
                                        <button id="btn2">Add to Cart!</button></butt>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Second Product-->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Limited Edition Hot Space Freddie T-Shirt!</div>
                                <div class="panel-body">
                                    <!--Image Source = https://www.queenonlinestore.com/*/*/Limited-Edition-Hot-Space-Freddie-T-Shirt/6K4R0000000-->
                                    <img class="img-responsive" src="../photos/merch-photos/hot-space-shirt.jpg">
                                </div>
                                <div class="panel-footer">
                                    New in store for the summer and available for a limited time, these bright and eye catching T-Shirts are made and printed to a super soft, high quality standard that will make you stand out as a Queen fan in any crowd.                     
                                    <hr>
                                    <div class="price-box">
                                        £45.00
                                        <br>
                                        <label for="sizes">Choose a Size</label>
                                        <select id="sizes_list">
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select>
                                        <button id="btn2">Add to Cart!</button></butt>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Third Product-->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Live Around The World T-Shirt</div>
                                <div class="panel-body">
                                    <!--Image source = https://www.queenonlinestore.com/*/*/Live-Around-The-World-T-Shirt/6N1G0000000-->
                                    <img class="img-responsive" src="../photos/merch-photos/live-around.jpg">
                                </div>
                                <div class="panel-footer">
                                    Super soft high quality t-shirts, with front / back print and inside neck print.
                                    <hr>
                                    <div class="price-box">
                                        £20.00
                                        <br>
                                        <label for="sizes">Choose a Size</label>
                                        <select id="sizes">
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select>
                                        <button>Add to Cart!</button></butt>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Fourth Product-->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">The Game T-Shirt</div>
                                <div class="panel-body">
                                    <!--Image source= https://www.queenonlinestore.com/*/*/The-Game-T-Shirt/6HEZ0000000-->
                                    <img class="img-responsive" src="../photos/merch-photos/game.png">
                                </div>
                                <div class="panel-footer">
                                    Super soft high quality t-shirts, with front print, inside neck print.
                                    <hr>
                                    <div class="price-box">
                                        £35.00
                                        <br>
                                        <label for="sizes">Choose a Size</label>
                                        <select id="sizes">
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select>
                                        <button>Add to Cart!</button></butt>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Fifth Product-->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Brian 'Live' T-Shirt</div>
                                <div class="panel-body">
                                    <!--Image source =https://www.queenonlinestore.com/*/*/Brian-Live-T-Shirt/6E4F0000000 -->
                                    <img class="img-responsive" src="../photos/merch-photos/brian-live.jpg">
                                </div>
                                <div class="panel-footer">
                                    Super soft high quality t-shirts, with front print, inside neck print.
                                    <div class="price-box">
                                        £25.00
                                        <br>
                                        <label for="sizes">Choose a Size</label>
                                        <select id="sizes">
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select>
                                        <button>Add to Cart!</button></butt>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Sixth Product-->
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">News Of The World 'Frank' Full Print T-Shirt</div>
                                <div class="panel-body">
                                    <!--image source =https://www.queenonlinestore.com/*/*/News-Of-The-World-Frank-Full-Print-T-Shirt/5VR10000000 -->
                                    <img class="img-responsive" src="../photos/merch-photos/news-of-the-world.jpg">
                                </div>
                                <div class="panel-footer">
                                    This store exclusive stunning T-Shirt is made from ultra soft material for extra comfort and is printed with an amazing full size front image of 'Frank' using state of the art printing ink techniques to make the image ultra sharp and colourful.
                                    <div class="price-box">
                                        £25.00
                                        <br>
                                        <label for="sizes">Choose a Size</label>
                                        <select id="sizes">
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select>
                                        <button>Add to Cart!</button></butt>
                                    </div>
                                </div>
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