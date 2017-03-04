<!DOCTYPE html>
<?php include_once 'Strings/TextConstants.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <title>ABZ Construction</title>
        <style>
            #img{

                margin-left: -14px;
                height: 130px;
                width: 250px;
                margin-top: -5px;
            }    
        </style>
    </head>
    <body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="collapsed navbar-toggle " data-toggle="collapse" data-target="#collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="navbar-brand" id="img" href="#featured" src="images/ABZ_LOGO.png">
                </div><!-- navbar-header -->
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#featured"><?php echo TextConstants::HOME; ?></a></li>
                        <li><a href="#mission"><?php echo TextConstants::OUR_WORK; ?></a></li>
                        <li><a href="#services"><?php echo TextConstants::ABOUT_US; ?></a></li>
                        <li><a href="#staff"><?php echo TextConstants::CONTACT_US; ?></a></li>
                        <li><a href="#testimonials"><?php echo TextConstants::SEND_REQUEST; ?></a></li>
                    </ul>        
                </div>
            </div>
        </nav>

        <div class="contenet container">
            <div class="row">
                <section class="col-sm-12">
                                            <!-- start carousel Inner-->

                    <div class="carousel slide">
                        <!-- end carousel Inner-->

                        <div class="carousel-inner">
                            <div class="item active">  <img src="CarouselImages/image1.jpg"></div>
                            <div class="item">  <img src="CarouselImages/image2.jpg"></div>
                            <div class="item">  <img src="CarouselImages/image3.jpg"></div>
                            <div class="item">  <img src="CarouselImages/image4.jpg"></div>
                            <div class="item">  <img src="CarouselImages/image5.jpg"></div>
                            <div class="item">  <img src="CarouselImages/image6.jpg"></div>
                            <div class="item">  <img src="CarouselImages/image7.jpg"></div>
                            <div class="item">  <img src="CarouselImages/image8.jpg"></div>
                            <div class="item">  <img src="CarouselImages/image9.jpg"></div>
                            <div class="item">  <img src="CarouselImages/image10.jpg"></div>

                        </div>
                        <!-- end carousel Inner-->

                        <a class="left carousel-control" href="#featured" role="button" data-silde="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#featured" role="button" data-silde="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>

                    </div>
                                                                              
                              <!-- end carousel-->

            </div>
        </section>

    </div>
</body>
</html>