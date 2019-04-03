<!-- 1 -->
<? 
echo "--------------------1--------------------<br>";
	// Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
	$a = 0;
	$b = -100;

	// если $a и $b положительные, вывести их разность;
	if ($a >= 0 && $b >= 0) {
		echo ($a - $b);
	// если $а и $b отрицательные, вывести их произведение;
	} elseif ($a < 0 && $b < 0) {
		echo $a * $b;
	// если $а и $b разных знаков, вывести их сумму;
	} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
		echo $a + $b;
	} 
?>

<br>
<br>

<!-- 2 -->
<?
echo "--------------------2--------------------<br>";
/**
 * Присвоить переменной $а 
 * значение в промежутке [0..15]. 
 */
$a = 7;

/**
 * С помощью оператора switch 
 * организовать вывод 
 * чисел от $a до 15.
 */
switch ($a) {
	case 0:
		echo "0<br>";    
  case 1:
		echo "1<br>";
	case 2:
		echo "2<br>";
	case 3:
		echo "3<br>";
  case 4:
		echo "4<br>";
  case 5:
		echo "5<br>";
  case 6:
		echo "6<br>";
  case 7:
		echo "7<br>";
  case 8:
		echo "8<br>";
  case 9:
		echo "9<br>";
  case 10:
		echo "10<br>";
  case 11:
		echo "11<br>";
  case 12:
		echo "12<br>";
  case 13:
		echo "13<br>";
  case 14:
		echo "14<br>";
  case 15:
		echo "15<br>";
}
?>

<br>

<!-- 3 -->
<?
echo "--------------------3--------------------<br>";
	function sum($a, $b) {
		return $a+$b;
	}
	function raz($a, $b) {
		return $a-$b;
	}
	function pro($a, $b) {
		return $a*$b;
	}
	function cha($a, $b) {
		if($b==0)
			return "на 0 делить нельзя!";
		return $a/$b;
	}

	echo sum(5, 5)."<br>"; // сумма
	echo raz(5, 5)."<br>"; // разность
	echo pro(5, 5)."<br>"; // произведение
	echo cha(5, 5); // частное
?>

<br>
<br>

<!-- 4 -->
<?
echo "--------------------4--------------------<br>";
/**
 * Реализовать функцию с тремя параметрами: 
 * function mathOperation($arg1, $arg2, $operation), 
 * где $arg1, $arg2 – значения аргументов, 
 * $operation – строка с названием операции.
 *
 * В зависимости от переданного значения 
 * операции:
 */
echo mathOperation(15, 14, '*');

function mathOperation($arg1, $arg2, $operation) {
	// Использовать switch:
	switch ($operation) {
		/**
		 * Выполнить одну из 
     * арифметических операций:
		 */
		case '+':
			// вернуть полученное значение 
			return sum($arg1,$arg2);
			break;
		case '-':
			// вернуть полученное значение 
			return $arg1 - $arg2;
			break;
		case '*':
			// вернуть полученное значение 
			return $arg1 * $arg2;
			break;
		case '/':
			// вернуть полученное значение 
			return $arg1 / $arg2;
			break;

		// Значение по несовподению не одного из case:
		default:
			echo "Заданы не корректные аргументы.";
			break;
	}
}
?>

<br>
<br>


<?
echo "--------------------6--------------------<br>";
/**
 * С помощью рекурсии организовать функцию возведения 
 * числа в степень. Формат: function power($val, $pow), 
 * где $val – заданное число, $pow – степень.
 */
function power($val, $pow) {
		if($pow == 1){
			return $val;
		}
    
		if($pow==0) {
			return 1;
		}

		if($pow < 0){
			return power( 1/$val, -$pow); 
		}	

		return 	$val * power($val, $pow-1);
	}
  
  // power(2,3) =  2  * power(2,2) = 2 * 2 * 2  = 8


	$a = power(5, 5); 
	echo "ОТВЕТ: $a";
	echo "<hr>";
?>



<br>
<br>

<!-- 7 -->
<?
echo "--------------------7--------------------<br>";
/**
 * Написать функцию, которая вычисляет текущее время
 * и возвращает его в формате с правильными
 * склонениями, например: 22 часа 15 минут, 21 час 43 минуты.
 * 
 * 0, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20 часов
 * 2, 3, 4, 22, 23, 24 часа
 * 1, 21 час
 * 
 * 0, 5-20, 25-30, 35-40, 45-50, 55-59 минут
 * 1, 21, 31, 41, 51 минута
 * 2-4, 22-24, 32-34, 42-44, 52-54 минуты
 */
function timeNow ($hour, $minute) {
	if ($hour == 0 || ($hour>= 5 && $hour<= 20)) {
		$result .= $hour.' часов ';
	}
	elseif ($hour%10 == 1) {
		$result .= $hour.' час ';
	}
	else {
		$result .= $hour.' часa ';
	}
	
	if ($minute%10 == 0 || ($minute%10 >= 5 && $minute%10 <= 9) ||  ($minute%100 >= 11 && $minute%100 <= 14)) {
		$result .= $minute.' минут';
	}
	elseif ($minute%10 == 1) {
		$result .= $minute.' минута';
	}
	else {
		$result .= $minute.' минуты';
	}
	return $result;
}
echo (timeNow(date('G'), date ('i')));



function f($x,$y){
   echo $x." ".$y;
}

f(1,2)





?>
