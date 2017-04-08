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
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <title><?php echo TextConstants::TITLE; ?></title>



        <style>



        </style>

    </head>

    <body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
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
                        <li><a href="#featured" id="home"><?php echo TextConstants::HOME; ?></a></li>
                        <li><a href="#mission"><?php echo TextConstants::OUR_WORK; ?></a></li>
                        <li><a href="#services"><?php echo TextConstants::ABOUT_US; ?></a></li>
                        <li><a href="#staff"><?php echo TextConstants::CONTACT_US; ?></a></li>
                        <li><a href="#testimonials"><?php echo TextConstants::SEND_REQUEST; ?></a></li>
                        <li><a role="button" id="changeLang"><?php echo TextConstants::LANG; ?></a></li>

                    </ul>
                </div>
            </div>
        </nav>

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


        <div class="jumbotron container">
            <h3> <?php echo TextConstants::WHAT_IS_ABZ; ?></h3>
            <p> <?php echo TextConstants::HOME_COMPANY_DEFINITION ?> </p>

        </div>

        <div id="serv" class="services container">
            <h2 class="text-center"><?php echo TextConstants::COMPANY_WORK_FEILD; ?></h2>
            <div class="row">
                <section class="col-sm-4 col-md-4 col-lg-4 ">
                    <img class="icon fadeInDown" src="ServicesImages/EngineerImage.png" alt="Icon">
                    <h3><?php echo TextConstants::CONSTRUCTION_AND_ENG; ?></h3>
                </section>

                <section class="col-sm-4 col-md-4 col-lg-4">
                    <img class="icon" src="ServicesImages/electrical.png" alt="Icon">
                    <h3>Internal and external electric work</h3>
                </section>
                <!--<div class="clearfix"></div>-->

                <section class="col-sm-4 col-md-4 col-lg-4">
                    <img class="icon" src="ServicesImages/sanitary.png" alt="Icon">
                    <h3><?php echo TextConstants::SANITARY; ?></h3>

                </section>

                <section class="col-sm-4 col-md-4 col-lg-4">
                    <img class="icon" src="ServicesImages/heating.png" alt="Icon">
                    <h3><?php echo TextConstants::HEATER; ?></h3>
                </section>




                <section class="col-sm-4 col-md-4 col-lg-4">
                    <img class="icon" src="ServicesImages/PAINT.png" alt="Icon">
                    <h3><?php echo TextConstants::PAINT; ?></h3>
                </section>

                <section id="solar"  class="col-sm-4 col-md-4 col-lg-4">
                    <img class="icon" src="ServicesImages/solar.png" alt="Icon">
                    <h3><?php echo TextConstants::SOLAR; ?></h3>
                </section>

            </div><!-- row -->
        </div><!-- content container -->
        <h2 class="text-center text-info"><?php echo TextConstants::MOST_IMPORT; ?></h2>

        <div class="container">

            <section class="col-xs-6  col-sm-6 col-md-4 col-lg-4 ">
                <h3><?php echo TextConstants::SAIID_HALLAB; ?> </h3>

            </section>        
            <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
                <h3><?php echo TextConstants::SAIIDSHA; ?> </h3>

            </section>        
            <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
                <h3><?php echo TextConstants::SAIID_HALLAB; ?> </h3>

            </section>        
            <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
                <h3><?php echo TextConstants::SPIRO; ?> </h3>

            </section>     
            <div class="clearfix"></div>
            <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
                <h3><?php echo TextConstants::JAWDAT; ?> </h3>

            </section>        
            <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
                <h3><?php echo TextConstants::OBEID; ?> </h3>

            </section>       
            <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
                <h3><?php echo TextConstants::TUFIC; ?> </h3>

            </section>       
            <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
                <h3><?php echo TextConstants::RADWAN; ?> </h3>

            </section>       
            <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
                <h3><?php echo TextConstants::KARAMI; ?> </h3>

            </section>       
            <section   class="col-xs-6  col-sm-6 col-md-4 col-lg-4">
                <h3 class="text-success"><?php echo TextConstants::MANY_OTHERS; ?> </h3>

            </section>       

        </div>

        <div id="ourWork" class="container">
            <section  class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image101.jpg" width="200" height="200" alt="image101" class="thumbnail"/>
            </section>

            <section class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image102.jpg" width="200" height="200" alt="image102" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image103.jpg" width="200" height="200" alt="image103" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image104.jpg" width="200" height="200" alt="image104" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image105.jpg" width="200" height="200" alt="image105" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image106.jpg" width="200" height="200" alt="image106" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image107.jpg" width="200" height="200" alt="image107" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image108.jpg" width="200" height="200" alt="image108" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image110.jpg" width="200" height="200" alt="image110" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image111.jpg" width="200" height="200" alt="image111" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image112.jpg" width="200" height="200" alt="image112" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image113.jpg" width="200" height="200" alt="image113" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image114.jpg" width="200" height="200" alt="image114" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image115.jpg" width="200" height="200" alt="image115" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image116.jpg" width="200" height="200" alt="image116" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image117.jpg" width="200" height="200" alt="image117" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image120.jpg" width="200" height="200" alt="image120" class="thumbnail"/>
            </section>
            <section   class="col-xs-6  col-sm-4 col-md-4 col-lg-4">
                <img src="OurWorkImages/image130.jpg" width="200" height="200" alt="image130" class="thumbnail"/>
            </section>


        </div>
        <h2 class="text-center"> <?php echo TextConstants::ABOUT_US; ?></h2>
        <div class="container">
            <blockquote   class="col-xs-6  col-sm-6 col-md-6 col-lg-6">
                <h1> <?php echo TextConstants::OMAR; ?>  </h1>
                <img src="AboutUsImages/about6.jpg" width="200" height="200" alt="image120" class="img-circle"/>
                <footer class="quotes"> 
                    <?php echo TextConstants::OMAR_QUOTES; ?>
                </footer>
            </blockquote>            
            <blockquote   class="col-xs-6  col-sm-6 col-md-6 col-lg-6">
                <h1><?php echo TextConstants::MARWAN; ?>  </h1>

                <img src="AboutUsImages/about7.jpg" width="200" height="200" alt="image120" class="img-circle"/>
                <footer class="quotes"> 
                    <?php echo TextConstants::MARWAN_QUOTES; ?>
                </footer>

            </blockquote>            
            <div class="clearfix"></div>

            <blockquote   class="col-xs-6  col-sm-6 col-md-6 col-lg-6">
                <h1><?php echo TextConstants::AMER; ?>   </h1>

                <img src="AboutUsImages/about8.jpg" width="200" height="200" alt="image120" class="img-circle"/>
                <footer class="quotes"> 
                    <?php echo TextConstants::AMER_QUOTES; ?>
                </footer>
            </blockquote>            
            <blockquote   class="col-xs-6  col-sm-6 col-md-6 col-lg-6">
                <h1><?php echo TextConstants::KIFAH; ?>   </h1>

                <img src="AboutUsImages/about4.jpg" width="200" height="200" alt="image120" class="img-circle"/>
                <footer class="quotes"> 
                    <?php echo TextConstants::KIFAH_QUOTES; ?>
                </footer>
            </blockquote>            

        </div> 
        <div class="container-fluid"> 
            <h2 class="text-center"> <?php echo TextConstants::SEND_REQUEST; ?></h2>
            <form class="form-horizontal"> 
                Name<input class ="form-control" type="text" name="Name" value="" />
                Email Address<input class ="form-control"  type="text" name="Email" value="" />
                Phone Number<input class ="form-control"  type="text" name="Number" value="" />
                Message<textarea class ="form-control" rows="8" cols="50" name="Message"></textarea>
                <input class="submit btn-danger form-control" type="submit" name="contact_submitted" value="Send" />
            </form>          


        </div>



        <div class="container-fluid" id="contact-us" >    
            <h2 class="text-center"> <?php echo TextConstants::CONTACT_US; ?></h2>
            <h2 class="text-info"> <?php echo TextConstants::FIRST_OFFICE; ?></h2>
            <h3> <?php echo TextConstants::FIRST_OFFICE_ADDRESS; ?></h3>
            <h2 class="text-info"> <?php echo TextConstants::SECOND_OFFICE; ?></h2>
            <h3> <?php echo TextConstants::SECOND_OFFICE_ADDRESS; ?></h3>
            <h2 class="text-info"> <?php echo TextConstants::DUBAI_OFFICE; ?></h2>
            <h3> <?php echo TextConstants::DUBAI_OFFICE_ADDRESS; ?></h3>
            <h2 class="text-info"> <?php echo TextConstants::PHONE_LEBANON; ?></h2>
            <h3> <?php echo TextConstants::KIFAH + TextConstants::KIFAH_PHONE; ?></h3>
            <h3> <?php echo TextConstants::AMER + TextConstants::AMER_PHONE; ?></h3>
            <h2 class="text-info"> <?php echo TextConstants::DUBAI_PHONE_LBL; ?></h2>
            <h3> <?php echo TextConstants::KIFAH + TextConstants::KIFAH_DUBAI_PHONE; ?></h3>
            <h2 class="text-info"> <?php echo TextConstants::EMAIL_LBL; ?></h2>
            <h3> <?php echo TextConstants::EMAIL; ?></h3>   

        </div>


    </body>
</html>