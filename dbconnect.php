<?php

date_default_timezone_set("Asia/Kolkata");
session_start();
if($_SERVER['HTTP_HOST']=="localhost"){$connect=mysqli_connect("localhost","u425723177_webtiksol","webTik@2020","u425723177_digitalcard") or die ('Database not available...');}else {$connect=mysqli_connect("localhost","u425723177_webtiksol","webTik@2020","u425723177_digitalcard") or die ('Connection issue #567844 Error');}
$date=date('Y-m-d H:i:s');

?>