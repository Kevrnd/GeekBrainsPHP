<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="utf-8">
    <title>PHP Lesson2 HomeWork</title>
 </head>
<body>
<?
	/*Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/
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
    $arg1 = 10;
    $arg2 = 14;
    $operation = '+';
    
    function mathOperation ($arg1, $arg2, $operation){
		switch ($operation) {
			case '+': {
			    return(sum ($arg1, $arg2));
		        break;
		   }
		    case '-':{
		        return(subtract ($arg1, $arg2));
		        break;
		    }
		    case '*':{
		        return(multiplication ($arg1, $arg2));
		        break;
		    }
		    case '/':{
		        return(divided ($arg1, $arg2));
		        break;
		    }
		     
			default:{
			    echo "Введена не корректная арифмитическая операция";
			    break;
			}
		}		//break;
	}

    echo (mathOperation (100, 500,'/'));