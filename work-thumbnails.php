<?php

if($page=="home"){
    $maxRows = 5;
}

$dbhost = 'localhost';
$dbuser = 'brucetang';
$dbpass = 'twixie78';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ){
  die('Could not connect: ' . mysql_error());
}
$sql = "SELECT * FROM `work_table`";

mysql_select_db('work_db');
$retval = mysql_query( $sql, $conn );

if(! $retval ){
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
    echo "<div class='col-md-4 col-sm-4'>";
        echo "<a href='work-detail.php?client={$row['Href']}' title='{$row['Title']}' alt='{$row['Alt']}'>";
        echo "<div class='wk-tn-text-cont'>";
        echo "<div class='wk-tn-text'>{$row['Display_Name']}</div>";
        echo "</div>";
        echo "<figure class='wk-img-ctr {$row['Img_Class']}'><img class='img-responsive' src='{$row['Img_Path']}' alt='{$row['Alt']}' /></figure>";
        echo "</a>";
    echo "</div>";
    
    if($page=="home"){
        if((int)$row['ID']==$maxRows){
            break;
        }
    }
} 

mysql_close($conn);
?>