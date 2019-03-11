<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="utf-8">
    <title>PHP Lesson3 HomeWork</title>
 </head>
<body>
<?
    /*С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.*/
    $i=0;
    while ($i<=100){
        if ($i%3 == 0){
            echo "число $i делится на 3 без остатка"."<br>";
        }
        $i++;
    }
?>
</body>
</html>
