<?php $page = 'work'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bruce Tang Design | Work</title>

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


        <!-- WORK -->
        <section class="main-section" id="work">
            <div id="work-bg-container1"></div>
            <div id="work-bg-container2"></div>

            <div class="container">
                <h1>WORK</h1>
                <h4>Below is a selection of work I have done over the last 13 years.</h4>
                <div class="row no-gutter" id="work-tns">
                    <?php include("work-thumbnails.php"); ?>
                </div>
            </div>
        </section>
        <!-- END WORK -->

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Site javascript file -->
        <script type="text/javascript" src="js/jquery.js"></script>

      </body>
</html>
