<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="utf-8">
    <title>PHP Lesson3 HomeWork</title>
 </head>
<body>
<?
    /*Объявить массив, в котором в качестве ключей будут 
    использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
    Московская область: Москва, Зеленоград, Клин
    Ленинградская область:Санкт-Петербург, Всеволожск, Павловск, Кронштадт    
    Рязанская область … (названия городов можно найти на maps.yandex.ru) */
    $country=["Московская область" => ["Москва","Зеленоград","Клин"]
    ,"Ленинградская область"=> ["Санкт-Петербург", "Всеволожск", "Павловск",
    "Кронштадт"],"Ростовская область" => ["Ростов-на-Дону", "Батайск", "Миллерово", "Сальск"]
    ];
    foreach ($country as $value=>$key) {
        echo "<br>$value:<br>";
        foreach ($key as $val){
            echo "$val"." ";
        }

    }

?>
</body>
</html>
