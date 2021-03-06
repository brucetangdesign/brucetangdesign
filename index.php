<?php $page = 'home'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bruce Tang Design</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Trirong:300i" rel="stylesheet" type='text/css'>

        <!-- Site Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet/less" type="text/css" href="css/stylesheet.less">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

        <!-- GSAP -->
    	<script type="text/javascript"  src="js/greensock/TweenMax.min.js"></script>
        <script type="text/javascript" src="js/greensock/plugins/CSSPlugin.min.js"></script>
        <script type="text/javascript" src="js/greensock/plugins/ScrollToPlugin.min.js"></script>
        <script type="text/javascript" src="js/greensock/easing/EasePack.min.js"></script>

        <!-- ScrollMagic -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.js"></script>

        <!-- LESS -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    </head>

    <body>
        <?php include("header.php"); ?>

        <!-- CONFETTI -->
        <div id="confetti-1"></div>
        <div id="confetti-2"></div>
        <div id="confetti-3"></div>
        <div id="confetti-4"></div>
        <div id="confetti-5"></div>
        <div id="confetti-6"></div>
        <div id="confetti-7"></div>
        <div id="confetti-8"></div>
        <div id="confetti-9"></div>
        <!-- END CONFETTI -->

        <!-- INTRO/LANDING -->
        <section class="main-section" id="intro">
            <div id="intro-bg-container1"></div>
            <div id="intro-bg-container2"></div>
            <div id="intro-bg-container3"></div>
            <div class="container">
                <h1>BRUCE <span class='secondary-text-color'>TANG</span></h1>
                <h4>An award winning web designer with over 15 years of experience <br>building creative, well crafted, user friendly web sites.</h4>
                <a href="#work">
                <div id="home-down-arrow">
                <svg height="60" width="120">
                    <g stroke="white" stroke-width="1">
                      <line x1="0" y1="0" x2="60" y2="60"/>
                      <line x1="60" y1="60" x2="120" y2="0"/>
                    </g>
                </svg>
                </div>
                </a>
            </div>
        </section>
        <!-- END INTRO/LANDING -->

        <!-- WORK -->
        <section class="main-section" id="work">
            <div id="work-bg-container1"></div>
            <div id="work-bg-container2"></div>
            <div id="work-bg-container3"></div>

            <div class="container">
                <h1>WORK</h1>
                <h4>Selections from my portfolio</h4>
                <div class="row no-gutter" id="work-tns">
                    <?php include("work-thumbnails.php"); ?>
                </div>
                <form action="work.php"><button class="more-work-btn" type="submit">VIEW ALL WORK</button></form>
            </div>
        </section>
        <!-- END WORK -->

        <!-- ABOUT -->
        <section class="main-section" id="about">
            <!--<div id="confetti-5"></div>-->
            <div id="about-bg-container1"></div>
            <div id="about-bg-container2"></div>
            <div id="about-bg-container3"></div>

            <div class="container">
                <!--<div id="about-bg-container"></div>-->
                <h1>ABOUT</h1>
                <div class = "row">
                    <div class="col-sm-8">
                      <p>For the past 13 years I have created engaging web experiences for a diverse set of clients. I started my career at the award winning, NYC based interactive design agency, Squeaky Wheel Media. In 2012 I embarked on my career as a freelance visual designer, front end developer and consultant.</p>
                      <p>I have designed and collaborated on award winning websites for a wide array of clients, big and small (NY Lottery, Lexus, Revlon, AMF, USC Credit Union, Oberlin College, SoBe, MaxMara, WisdomTree, and Axe to name a few.</p>
                      <ul id="about-awards">
                        <li><img src="img/awards-webby.png"/></li>
                        <li><img src="img/awards-w3.png"/></li>
                        <li><img src="img/awards-oneshow.png"/></li>
                        <li><img src="img/awards-pixel.png"/></li>
                        <li><img src="img/awards-communicator.png"/></li>
                      </ul>
                    </div>
                    <div class="col-sm-4" id="test">
                      <h2>CORE SERVICES</h2>
                      <ul>
                        <li>Visual Design</li>
                        <li>Front-End Web Development</li>
                        <li>Interaction Design</li>
                        <li>Animation</li>
                        <li>Art Direction</li>
                      </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- END ABOUT -->

        <!-- CONTACT -->
        <section class="main-section" id="contact">
            <div id="contact-bg-container1"></div>
            <div id="contact-bg-container2"></div>

            <div class="container">
                <h1>CONTACT</h1>
                <h4>Let's work together </h4>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-link">
                            <a id="email-link" href="mailto:bruce@brucetangdesign.com" title="email" alt="email"><span class="fa fa-envelope-o fa-4x"></span>  EMAIL</a>
                        </div>
                    </div>
                    <div class=" col-md-6 col-sm-6">
                        <div class="contact-link">
                            <a id="phone-link" href="tel:631-741-7344" title="phone" alt="phone"><span class="fa fa-mobile fa-4x"></span>  P: 631-741-7344</a>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-4 col-sm-4">
                      <div class="contact-link">
                          <a id="email-link" href="https://dribbble.com/brucetang" title="dribbble" alt="dribbble"><span class="fa fa-dribbble fa-4x"></span>  DRIBBBLE</a>
                      </div>
                  </div>
                -->
                </div>
            </div>
        </section>
        <!-- END CONTACT -->

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Site javascript file -->
        <script type="text/javascript" src="js/jquery.js"></script>

      </body>
</html>
