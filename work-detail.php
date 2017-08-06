<?php
$page = 'work';
$client = $_GET["client"];

$role_icon_array = array
  (
    array("Brand Identity","fa-star"),
  array("Visual Design","fa-picture-o"),
  array("Art Direction","fa-eye"),
  array("UX","fa-object-ungroup")
);

$dbhost = 'localhost';
$dbuser = 'brucetang';
$dbpass = 'twixie78';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ){
  die('Could not connect: ' . mysql_error());
}
$sql = "SELECT * FROM `work_detail_table`";

mysql_select_db('work_db');
$retval = mysql_query( $sql, $conn );

if(! $retval ){
  die('Could not get data: ' . mysql_error());
}

mysql_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
    
    <body id="workDetailBody">
        <?php include("header.php"); ?>

                
        <!-- WORK HEADER -->
        <section class="work-detail-header" id="work">
            <div id="work-bg-container1"></div>
            <div id="work-bg-container2"></div>
            <h2>WORK</h2>
        </section>
        <!-- END WORK HEADER -->
        
        <section class="work-detail-main">                
                <?php
                    echo "<section class='work-detail-header'>";
                    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
                        if($row['ID']==$client){
                            echo "<h1 class='{$row['H1_Class']}'>{$row['Title']}</h1>";
                            echo "<p>{$row[Intro]}</p>";
                            echo "<h3 class='role-list-heading'>MY ROLE:</h3>";
                            
                            //ROLES
                            echo "<ul class='role-list'>";
                            $roles_array = explode(",", $row['Role']);
                            $icon_class="";
                            

                            foreach ($roles_array as $value) {
                                for($i=0;$i<count($role_icon_array);$i++){
                                    if (strpos($value, " ") !== FALSE){
                                        $first_space_pos = strpos($value," ");
                                   
                                        if($first_space_pos == 0){
                                            $value = substr_replace($value,"",0,1);
                                        }
                                    }
                                    
                                    
                                    if(strval($role_icon_array[$i][0]) == strval($value)){
                                        $icon_class = $role_icon_array[$i][1];
                                        break(1);
                                    }
                                }
                                
                                echo "<li><span class='fa fa-fw $icon_class role-icon'></span> $value</li>";
                            }
                            
                            echo "</ul>";
                             // END ROLES
                            
                            //PROJECT LINK BUTTON
                            if($row['Href']){
                                echo "<form action='{$row['Href']}'><button class='launch-project-btn' type='submit'>VIEW THE SITE</button></form>";
                            }
                        
                            echo "</section>";
                        
                            echo "<section class='work-detail-showcase'>";
                            echo "<div id='work-detail-showcase-overlay'></div>";
                            echo "<div class='col-md-12'>";
                            $images_array = explode(",", $row['Images']);
                            foreach ($images_array as $value) {
                                echo $value;
                            }
                        
                            echo "</div>";
                            echo "</section>";
                        }
                    }
                ?>
        </section>
        

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        
        <!-- GSAP plugins -->
        <script type="text/javascript" src="js/greensock/TweenMax.min.js"></script>
        <script type="text/javascript" src="js/greensock/plugins/CSSPlugin.min.js"></script>
        <script type="text/javascript" src="js/greensock/plugins/ScrollToPlugin.min.js"></script>
        <script type="text/javascript" src="js/greensock/easing/EasePack.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        
        <!-- Site javascript file -->
        <script type="text/javascript" src="js/jquery.js"></script>

        <script>

        </script>

      </body>
</html>