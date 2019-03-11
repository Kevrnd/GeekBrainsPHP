<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="utf-8">
    <title>PHP Lesson2 HomeWork</title>
    <script src="main.js"></script>
</head>
<body>
<?
	$a = 0;
	$b = 10;
	if($a>=0 and $b>=0){
		echo "Разность переменных a и b = ". ($a-$b);
	}else if ($a<0 and $b<0){
		echo "Произведение переменных a и b = ". ($a*$b);
	}else{
		echo "Сумма переменных a и b = ". ($a+$b);
	}
?>
</body>