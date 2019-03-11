<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="utf-8">
    <title>PHP Lesson2 HomeWork</title>
 </head>
<body>
<?
	/*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/
function power($val, $pow){
	$power = $val*$val;
	$pow = $pow-1;
	if ($pow > 1){
	   	power ($power, $pow);  
	} else {
        echo ("Значение функции = ". $power."<br>");
	}
	}
	
echo power (4,2);

	