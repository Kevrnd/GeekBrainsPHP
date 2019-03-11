<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="utf-8">
    <title>PHP Lesson2 HomeWork</title>
 </head>
<body>
<?
	function sum ($a,$b){
		return ($a+$b);
	} 
	function subtract ($a,$b){
		return ($a-$b);
	} 
	function multiplication ($a,$b){
		return ($a*$b);
	} 
	function divided ($a,$b){
		return ($a/$b);
	} 
	echo sum (10,5)."<br>";
	echo subtract (38,8)."<br>";
    echo multiplication (10,5)."<br>"; 
	echo divided (255,5)."<br>";
?>
</body>