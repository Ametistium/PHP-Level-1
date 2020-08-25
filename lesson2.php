<?php 
	
echo "Задание 1<br>";
function firstTask($a,$b){
	if ($a >= 0 && $b>= 0){
		$result = $a - $b;
		echo "Числа $a и $b положительные, значит их разность = "."$result"."<br>";
	}
	else if ($a < 0 && $b < 0){
	 	$result = $a * $b;
		echo "Числа $a и $b отрицательные, значит их произведение = "."$result"."<br>";
	 }
	else {
		$result = $a + $b;
		echo "Числа $a и $b имеют разные знаки, значит их сумма = "."$result"."<br>";
	}
}
firstTask(rand(-99,99),rand(-99,99));


echo "Задание 2<br>";
function secondTask($a){
	if ($a == 16) {
		return;
	}
	echo $a." ";
	secondTask($a+1);
}

secondTask(rand(0,15));

echo "<br> Или через switch = ";
switch (rand(0,15)) {
	case '0':
		echo " 0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
		break;
	case '1':
		echo " 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
		break;
	case '2':
		echo " 2,3,4,5,6,7,8,9,10,11,12,13,14,15";
		break;
	case '3':
		echo " 3,4,5,6,7,8,9,10,11,12,13,14,15";
		break;
	case '4':
		echo " 4,5,6,7,8,9,10,11,12,13,14,15";
		break;
	case '5':
		echo " 5,6,7,8,9,10,11,12,13,14,15";
		break;
	case '6':
		echo " 6,7,8,9,10,11,12,13,14,15";
		break;
	case '7':
		echo " 7,8,9,10,11,12,13,14,15";
		break;
	case '8':
		echo " 8,9,10,11,12,13,14,15";
		break;
	case '9':
		echo " 9,10,11,12,13,14,15";
		break;
	case '10':
		echo " 10,11,12,13,14,15";
		break;
	case '11':
		echo " 11,12,13,14,15";
		break;
	case '12':
		echo " 12,13,14,15";
		break;
	case '13':
		echo " 13,14,15";
		break;
	case '14':
		echo " 14,15";
		break;
	case '15':
		echo " 15";
		break;
}

echo "<br>";




// Задание 3
function sum($a,$b){
	$result =  $a+$b;
	echo "$result";
}
function sub($a,$b){
	$result =  $a-$b;
	echo "$result";
}
function mult($a,$b){
	$result =  $a*$b;
	echo "$result";
}
function div($a,$b){
	$result =  $a/$b;
	echo "$result";
}



echo "Задание 4<br>";
function mathOperation($a,$b,$operation){
	switch ($operation) {
		case '+':
			sum($a,$b);
			break;
		case '-':
			return sub($a,$b);
			break;
		case '*':
			return mult($a,$b);
			break;
		case '/':
			return div($a,$b);
			break;
		default:
			echo "xz";
			break;
	}
}
mathOperation(10,20,"+");


echo "<br>Задание 6<br>";   //Совсем не понял, что имелось ввиду в задании
function power($val,$pow){
	$result =  $val**$pow;
	echo "$result";
}
power(3,3);


echo "<br>Задание 7<br>";  //Понятное дело, что это делается через массив, но как работать с массивами я пока не знаю
							// Получилось сделать для Часов по колхозному. А для минут немного не получается. Оставил всё как есть

function myDate($a,$b){
	if ($a == 1 || $a == 21) 
		echo "$a час";

		// if ($b % 10 && $b < 60 && $b != 11 ) 
		// 	echo "$a час и $b минута";
		// elseif ($b >= 5 && $b < 60) 
		// 	echo "$a час и $b минут";
		
		// else 
		// 	echo "$a час и $b минуты";
		
	elseif ($a > 1 && $a <= 4 || $a >= 22 && $a < 24) 
		echo "$a часа";
	
	elseif ($a >= 5 && $a <= 24) 
		echo "$a часов";
	
	else 
		echo "Некорректно введено время";
	
}
myDate(rand(1,24),21);


?>