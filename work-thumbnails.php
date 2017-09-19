<?php

if($page=="home"){
    $maxRows = 5;
    $maxWork = 5;
}

$dsn = 'mysql:host=localhost;dbname=work_db;charset=utf8mb4';
$user = 'brucetang';
$password = 'twixie78';

try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    try {
        $sth = $dbh->query("SELECT * FROM work_table");
        $row = array_reverse($sth->fetchAll(PDO::FETCH_ASSOC));
        $count = 0;
        foreach ($row as $key) {
            echo "<div class='col-md-4 col-sm-4'>";
                echo "<a href='work-detail.php?client={$key['Href']}' title='{$key['Title']}' alt='{$key['Alt']}'>";
                echo "<div class='wk-tn-text-cont'>";
                echo "<div class='wk-tn-text'>{$key['Display_Name']}</div>";
                echo "</div>";
                echo "<figure class='wk-img-ctr {$key['Img_Class']}'><img class='img-responsive' src='{$key['Img_Path']}' alt='{$key['Alt']}' /></figure>";
                echo "</a>";
            echo "</div>";

            if($page=="home"){
                /*if((int)$key['ID']==1){
                    break;
                }*/
                if($count == $maxWork){
                  break;
                }
            }
            $count++;
        }
    } catch (PDOException $e) {
        log_error("Failed to run query", $e->getMessage(), $e->getCode(), array('exception' => $e));
    }
} catch (PDOException $e) {
    log_error("Failed to connect to database test", $e->getMessage(), $e->getCode(), array('exception' => $e));
}

function log_error($message, $error = null, $code = null, $extra = null){
    echo $error;
    echo $code;
    // This would log the error to an error log
    // You could use an existing logging library or use a simple fwrite.
    // For a good logging library I recommend monolog https://github.com/Seldaek/monolog
}

$conn = NULL;
?>
