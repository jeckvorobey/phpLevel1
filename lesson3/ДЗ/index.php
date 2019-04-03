<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя работа № 2</title>
</head>
<body>
<ol>
    <li>Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
        Затем написать скрипт, который работает по следующему принципу:<br>

        если $a и $b положительные, вывести их разность;<br>
        если $а и $b отрицательные, вывести их произведение;<br>
        если $а и $b разных знаков, вывести их сумму;<br>
        ноль можно считать положительным числом.<br>
        <?php

            $a = rand(-10,10);
            $b = rand(-10,10);
            
            
            function script ($a, $b){
                if($a >= 0 && $b >= 0) {
                    return $a - $b;
                } elseif(($a < 0 && $b < 0) {
                    return $a * $b;
                } 
				return $a + $b;
                
            }

            echo script($a, $b);

        ?>
    </li>
    <li>Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод
        чисел от $a до 15.<br>
        <?php

        $a = rand(0,15);
        switch ($a) {
            case 0:
                echo 0;
                
			case 1:
                echo 1;
               
            case 2:
                echo 2;
              
            case 3:
                echo $a . ' ';
                $a++;
            case 4:
                echo $a . ' ';
                $a++;
            case 5:
                echo $a . ' ';
                $a++;
            case 6:
                echo $a . ' ';
                $a++;
            case 7:
                echo $a . ' ';
                $a++;
            case 8:
                echo $a . ' ';
                $a++;
            case 9:
                echo $a . ' ';
                $a++;
            case 10:
                echo $a . ' ';
                $a++;
            case 11:
                echo $a . ' ';
                $a++;
            case 12:
                echo $a . ' ';
                $a++;
            case 13:
                echo $a . ' ';
                $a++;
            case 14:
                echo $a . ' ';
                $a++;
            case 15:
                echo $a . ' ';
                $a++;
        }

        ?>
    </li>
    <li>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
        Обязательно использовать оператор return.
        <?php

        function add ($a, $b) {
            return $a + $b;
        }

        function sub($a, $b) {
            return $a - $b;
        }

        function mult ($a, $b) {
            return $a * $b;
        }

        function div ($a, $b) {
            if($b == 0) {
                return 'На ноль делить нельзя!';
            }
            return $a / $b;
            
        }

        ?>
    </li>
    <li>Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1,
        $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения
        операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное
        значение (использовать switch).
        <?php

          

        function calc ($arg1, $arg2, $operation) {
            switch ($operation) {
                case '+':
                    add($arg1, $arg2);
                    break;
                case '-':
                    sub($arg1, $arg2);
                    break;
                case '*':
                    mult($arg1, $arg2);
                    break;
                case '/':
                    div($arg1, $arg2);
                    break;
                default:
                    return 'Не верный знак операции!';
            }
        }
		
		calc(10,5,'+');

        ?>
    </li>
    <li>Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи
        встроенных функций PHP.
    </li>
    <li>С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где
        $val – заданное число, $pow – степень.<br>
        <?php

        function power($val, $pow) {
            if ($val == 0) {
                return 0;
            } else {      
                if ($pow == 0) {
                    return 1;               
                } else if ($pow == 1){
                    return $val;
                } else if ($pow == -1) {
                    return 1 / $val;
                } else {
                    if ($pow > 1) {
                        $test = $val * power($val, $pow - 1);
                        echo $test."<br>";
                        return $test;
                    } else {
                        return 1 / ($val * power($val, ($pow * (-1)) - 1));
                    }
                }
            }
        }
        
		//power(2,3) = 2 * power(2,2) = 2 * 2 * 2 = 8
        
        
        

		
		function power($a, $n) {
			if ($n == 1){
            return $a;
      }      
      if ($n > 1) {
				 return $a * power($a, $n - 1);
      }
    }    
		//power(2,3) = 2 * power(2,2) = 2 * 2 * 2
		
        
        
        //2 ^ 3 =    power(2, 3) =  2 * power(2,2) = 2 * 2 * 2  = 8
        

        echo power(2, 4); 

        ?>
    </li>
    <li>Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями,
        например:<br>

        22 часа 15 минут<br>
        21 час 43 минуты<br>

        <?php

        function timeNow () {

            $h = date('H');//20
            $m = date('i');//13

            $res = '';

            if($h == 1 || $h == 21) {
                $res .= $h . ' час ';
            } elseif (($h == 2)||($h == 3)||($h == 4)||($h == 22)||($h == 23)||($h == 24)) {
                $res .= $h . ' часа ';
            } else {
                $res .= $h . ' часов ';
            }

            $arr1 = [1,21,31,41,51];//массив минута
            $arr2 = [2,3,4,22,23,24,32,33,34,42,43,44,52,53,54];//массив минуты

            if(in_array($m, $arr1)) {
                $res .= $m . ' минута';
            } elseif (in_array($m, $arr2)) {
                $res .= $m . ' минуты';
            } else {
                $res .= $m . ' минут';
            }

            return $res;
        }

        echo timeNow();

        ?>

    </li>
</ol>

<footer><?php echo date('Y'); ?></footer>

</body>
</html>