<?php
session_start();

$captcha = substr(str_shuffle("abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789"),0,7);
$_SESSION['captcha']=$captcha;

$pick = imagecreate(60,20);
$box = imagecolorallocate($pick,0,0,0);
$text = imagecolorallocate($pick,255,255,255);
imagefilledrectangle($pick,0,0,50,20,$box);
imagestring($pick,10,3,3,$captcha,$text);
imagejpeg($pick);

?>