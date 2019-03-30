<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Мой магазин шин</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h3>Мой магазин шин</h3>
            <img src="images/logo.jpg" alt="Наш магазин">
            <ul>
                <li><a href="index.php">Главная</a></li> 
                <li><a href="catalog.html">Каталог</a></li>
                <li><a href="feedback.php">Отзывы</a></li>         
                <li><a href="contacts.html">Контакты</a></li>    
            </ul>
        </div>
        <hr>
        <h1>Мой магазин шин</h1>
        <h2>Отзывы</h2>
        <? include 'outfdb.php'?>
        <hr>
        <h2>Добавьте свой отзыв</h2>
        <form name ="insfeedback" method="post"action ='insfeedback.php'>
            <label for="fio">Ваше имя</label>
            <br>
            <input type="text" value="Ваше имя" name="fio" id="fio" class="incontactsz" size="40">
            <br>
            <label for="email">Ваша электронная почта(Email)</label>
            <br>
            <input type="email" value="example@mail.ru" name="email" id="email" class="incontactsz" size="50">
            <br>
            <label for="usercomment">Ваше обращение</label>
            <br>
            <textarea name="usercomment" class="incontactsz" id="usercomment" ></textarea>
            <button>Опубликовать</button>
        </form>

        <div class="footer">
            <footer>&#169;"Все права защищены"</footer>
        </div>
    </div>
</body>
</html>