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
        #img {

            margin-left: -14px;
            height: 130px;
            width: 250px;
            margin-top: -5px;

        }

        .navbar .navbar-nav {
            margin-bottom: -50px;

            display: inline-block;
            float: none;
        }

        .navbar .navbar-collapse {

            text-align: center;

        }

        .navbar .navbar-collapse a {

            font-size: 20px;

        }

    </style>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#collapse">
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
<div class="clearfix"></div>

<!-- start carousel Inner-->
<div class="content container">
    <div class="row">
        <section class="col-sm-12">

            <div class="carousel slide" id="featured" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#featured" data-slide-to="0" class="active"></li>
                    <li data-target="#featured" data-slide-to="1"></li>
                    <li data-target="#featured" data-slide-to="2"></li>
                    <li data-target="#featured" data-slide-to="3"></li>
                    <li data-target="#featured" data-slide-to="4"></li>
                    <li data-target="#featured" data-slide-to="5"></li>
                    <li data-target="#featured" data-slide-to="6"></li>
                    <li data-target="#featured" data-slide-to="7"></li>
                    <li data-target="#featured" data-slide-to="8"></li>
                    <li data-target="#featured" data-slide-to="9"></li>

                </ol>

                <div class="carousel-inner">
                    <div class="item active"><img src="CarouselImages/image9.jpg" width="1500px"></div>
                    <div class="item "><img src="CarouselImages/image1.jpg" width="1500px"></div>
                    <div class="item"><img src="CarouselImages/image2.jpg" width="1500px"></div>
                    <div class="item"><img src="CarouselImages/image3.jpg" width="1500px"></div>
                    <div class="item"><img src="CarouselImages/image4.jpg" width="1500px"></div>
                    <div class="item"><img src="CarouselImages/image5.jpg" width="1500px"></div>
                    <div class="item"><img src="CarouselImages/image6.jpg" width="1500px"></div>
                    <div class="item"><img src="CarouselImages/image7.jpg" width="1500px"></div>
                    <div class="item "><img src="CarouselImages/image8.jpg" width="1500px"></div>
                    <div class="item "><img src="CarouselImages/image10.jpg" width="1500px"></div>

                </div>
                <!-- end carousel Inner-->

                <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#featured" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </section>
    </div>
</div>


<div class="services container">
    <h2>Services</h2>
    <div class="row">
        <section class="col-sm-6 col-md-4 col-lg-2">
            <img class="icon" src="images/icon-exoticpets.svg" alt="Icon">
            <h3>Exotic Pets</h3>
            <p>We offer specialized care for reptiles, rodents, birds, and other exotic pets.</p>
        </section>

        <section class="col-sm-6 col-md-4 col-lg-2">
            <img class="icon" src="images/icon-grooming.svg" alt="Icon">
            <h3>Grooming</h3>
            <p>Our therapeutic grooming treatments help battle fleas, allergic dermatitis, and other challenging skin
                conditions.</p>
        </section>

        <section class="col-sm-6 col-md-4 col-lg-2">
            <img class="icon" src="images/icon-health.svg" alt="Icon">
            <h3>GeneralHealth</h3>
            <p>Wellness and senior exams, ultrasound, x-ray, and dental cleanings are just a few of our general health
                services.</p>
        </section>

        <section class="col-sm-6 col-md-4 col-lg-2">
            <img class="icon" src="images/icon-nutrition.svg" alt="Icon">
            <h3>Nutrition</h3>
            <p>Let our nutrition experts review your pet's diet and prescribe a custom nutrition plan for optimum health
                and disease prevention.</p>
        </section>

        <section class="col-sm-6 col-md-4 col-lg-2">
            <img class="icon" src="images/icon-pestcontrol.svg" alt="Icon">
            <h3>Pest Control</h3>
            <p>We offer the latest advances in safe and effective prevention and treatment of fleas, ticks, worms, heart
                worm, and other parasites.</p>
        </section>

        <section class="col-sm-6 col-md-4 col-lg-2">
            <img class="icon" src="images/icon-vaccinations.svg" alt="Icon">
            <h3>Vaccinations</h3>
            <p>Our veterinarians are experienced in modern vaccination protocols that prevent many of the deadliest
                diseases in pets.</p>
        </section>
    </div><!-- row -->
</div><!-- content container -->


</body>
</html>