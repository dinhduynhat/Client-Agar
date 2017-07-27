<?php
$postdata = file_get_contents("php://input");
function checkOpen($host, $port) {
    $connection = @fsockopen($host, $port, $errno, $errstr, 1);
    if (is_resource($connection))
    {
        fclose($connection);
        return true;
    }
    else
    {
        return false;
    }
}
switch($postdata) {
case "US-Fremont":/*
    switch(mt_rand(1, 1)) {
        case 1:
            if(checkOpen("ubuntu@ec2-52-79-52-94.ap-northeast-2.compute.amazonaws.com,"4501")) {*/
            echo 'ubuntu@ec2-52-79-52-94.ap-northeast-2.compute.amazonaws.com:4501';/*
                break;
            }
        case 2:
            if(checkOpen("133.130.109.62","451")) {
            echo '133.130.109.62:451';
                break;
            }
        case 3:
            if(checkOpen("106.187.54.5","451")) {
            echo '106.187.54.5:451';
                break;
            }
    }*/
  break;
case "US-Fremont:korea":
    echo '125.179.150.250:4501';
    break;
case "US-Fremont:special":
    echo '45.32.51.38:1252';
    break;
case "US-Fremont:teams":
    echo '0.0.0.0:1252';
    break;
default:
    echo "Fuc*";
}
?>