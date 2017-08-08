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

$dsn = 'mysql:host=localhost;dbname=work_db;charset=utf8mb4';
$user = 'brucetang';
$password = 'twixie78';

try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

} catch (PDOException $e) {
    log_error("Failed to connect to database", $e->getMessage(), $e->getCode(), array('exception' => $e));
}

function log_error($message, $error = null, $code = null, $extra = null){
    echo $message;
    // This would log the error to an error log
    // You could use an existing logging library or use a simple fwrite.
    // For a good logging library I recommend monolog https://github.com/Seldaek/monolog
}

$conn=NULL;
?>

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
                    try{
                      $sth = $dbh->query("SELECT * FROM work_detail_table");
                      $row = $sth->fetchAll(PDO::FETCH_ASSOC);

                      foreach ($row as $key) {
                          if($key['ID']==$client){
                              echo "<h1 class='{$key['H1_Class']}'>{$key['Title']}</h1>";
                              echo "<p>{$key[Intro]}</p>";
                              echo "<h3 class='role-list-heading'>MY ROLE:</h3>";

                              //ROLES
                              echo "<ul class='role-list'>";
                              $roles_array = explode(",", $key['Role']);
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
                              if($key['Href']){
                                  echo "<form action='{$row['Href']}'><button class='launch-project-btn' type='submit'>VIEW THE SITE</button></form>";
                              }

                              echo "</section>";

                              echo "<section class='work-detail-showcase'>";
                              echo "<div id='work-detail-showcase-overlay'></div>";
                              echo "<div class='col-md-12'>";
                              $images_array = explode(",", $key['Images']);
                              foreach ($images_array as $value) {
                                  echo $value;
                              }

                              echo "</div>";
                              echo "</section>";
                          }
                      }

                    } catch (PDOException $e) {
                        log_error("Failed to run query", $e->getMessage(), $e->getCode(), array('exception' => $e));
                    }
                ?>
        </section>

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Site javascript file -->
        <script type="text/javascript" src="js/jquery.js"></script>

      </body>
</html>
