<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="utf-8">
    <title>PHP Lesson3 HomeWork</title>
 </head>
<body>
<?   
    $a = "H e l l o W o r l d !";
    function ch($a){    
    return strtr ($a, " ", "_");}
    echo ch($a);

?>
</body>
</html>
