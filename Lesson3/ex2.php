<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="utf-8">
    <title>PHP Lesson3 HomeWork</title>
 </head>
<body>
<?
/*    С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – это ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число. */
    $i=0;
    do{
        if ($i==0) {
            echo "Это ноль <br>";
        } elseif($i%2==0){
            echo "Четное число<br>";
        } else {
            echo"Нечетное число<br>";}
        $i++;
    } while ($i<=10)

?>
</body>
</html>
