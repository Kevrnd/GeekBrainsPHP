<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="utf-8">
    <title>PHP Lesson2 HomeWork</title>
 </head>
<body>
<?
	 $hour = date (H);
	 if ($hour == 00 or ($hour >= 05 and $hour <= 20)){
	     echo $hour. " часов ";
	 } else if (( $hour >= 02 and $hour <= 04) or ($hour >= 22 and $hour <= 23)){
	     echo $hour. " часа ";
	 } else{
	     echo $hour." час ";
	 }
	 $minute = date (i);
     if ($minute == 0 or $minute >= 5 and $minute <= 20 ){
         echo $minute . " минут";
     } else if ($minute == 1 or $minute == 21 or $minute == 31 or $minute == 41 or $minute == 51){
         echo $minute . " минута";
     } else {
         echo $minute . " минуты";
     }
     