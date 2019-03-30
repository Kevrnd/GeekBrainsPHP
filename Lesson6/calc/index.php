<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
</head>
<body>
    <div class = content>
        <i class="fas fa-calculator" id = "calc"></i> 
        <form action="calc.php" method="post">
            <fieldset>
                <legend>Калькулятор</legend>
                <h3>Введите первое число</h3>
                <input type="number" label="0" step="0.00000001" name="fstnum">
                <br>
                <h3>Введите второе число</h3>
                <input type="number" label="0" step="0.00000001" name="secnum">
                <br>
                <h3>Выберите действие</h3>
                <button type="input" name="d" value = "1">
                <i class="fas fa-plus but"></i>
                </button>
                <button type="input" name="d" value = "2">
                <i class="fas fa-minus but"></i>
                </button>
                <button type="input" name="d" value = "3">
                <i class="fas fa-divide but"></i>
                </button>
                <button type="input" name="d" value = "4">  
                <i class="fas fa-times but"></i>
                </button>
            </fieldset>
        </form>
    </div>
</body>
</html>