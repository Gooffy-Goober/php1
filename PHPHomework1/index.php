<?php

//Задание 1
echo 'Задание 1';

$a = 10;
$b = 2;

echo '<br/>Сумма чисел:' . ($a + $b);
echo '<br/>Разность чисел:' . ($a - $b);
echo '<br/>Разность чисел:' . ($a * $b);
echo '<br/>Разность чисел:' . ($a / $b);


//Задание 2
echo '<br/><br/>Задание 2 <br/>';

$x = 2;
$y = 6;
$z = 9;

echo ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);


//Задание 3
echo '<br/><br/>Задание 3 <br/>';

$a = 17;
$b = 10;

$c = $a - $b;
$d = 7;

$result = $c + $d;

echo 'Результат:' . $result;


//Задание 4
echo '<br/><br/>Задание 4 <br/>';

$text1 = 'Привет, ';
$text2 = 'Мир!';

echo $text1 . $text2;


//Задание 5
echo '<br/><br/>Задание 5 <br/>';

$name = 'Александр';

echo 'Привет,' . $name . '!';


//Задание 6
echo '<br/><br/>Задание 6 <br/>';

$num = 12345;
$num = "$num";
$sum = 0;

for ($i = 0, $cnt = strlen($num); $i < $cnt; $i++) {
    $sum += $num[$i];
}

echo 'Cумма цифр числа: ' . $sum;


//Задание 7
echo '<br/><br/>Задание 7 <br/>';

$secInHour = 60 * 60;
echo 'Секунд в часе: ' . $secInHour;

$secInDay = $secInHour * 24;
echo '<br/>Секунд в дне: ' . $secInDay;

$secInMonth = $secInDay * 30;
echo '<br/>Секунд в месяце: ' . $secInMonth;

$secInYear = $secInDay * 365;
echo '<br/>Секунд в году: ' . $secInYear;

$currentDate = time ();
$oldDate = mktime(0, 0, 0, 1, 1, 2000);
$second=$currentDate-$oldDate;

echo '<br/> С начала 2000 года прошло '.$second.' секунд';


//Задание 8
echo '<br/><br/>Задание 8 <br/>';

$hour = date('H');
$minute = date('i');
$second = date('s');

echo $hour . ":" . $minute . ":" . $second;

//Задание 9
echo '<br/><br/>Задание 9 <br/>';

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;

echo $var;


//Задание 10
echo '<br/><br/>Задание 10 <br/>';

const LASTNAME = 'Басовец';
$name = 'Александр';
$secondName = 'Сергеевич';
$age = 16;

if (defined('LASTNAME')) {
    echo 'Меня зовут ' . LASTNAME . ' (' . mb_substr($name, 0, 1) . '.' . mb_substr($secondName, 0, 1) . '.).<br/> Мне ' . $age . ' лет.';
}