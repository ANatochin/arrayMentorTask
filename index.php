<?php

//Рекурсивно выведите на экран ряд Фибоначчи до 10-го элемента

$firstNum = 0;
$secondNum =1;
echo($firstNum.', '.$secondNum);
function fibonacciRow($length, $firstNum, $secondNum) {

    if( $length > 0 ) {
        $sum = $firstNum + $secondNum;
        echo (', '.$sum);
        $firstNum = $secondNum;
        $secondNum = $sum;
        fibonacciRow($length-1, $firstNum, $secondNum);
    }
}
fibonacciRow(10, $firstNum, $secondNum);

echo ('<br>');
echo ('=======================');
echo ('<br>');
//Создайте в цикле (for либо while) одномерный массив из 10 элементов, где значение на каждой итерации - произвольное число от 1 до 10 (используйте функцию mt_rand)
$arr = [];
for($i = 0; $i<10; $i++){
    array_push($arr,mt_rand(1, 10));
}
var_dump($arr);

echo ('<br>');
echo ('=======================');
echo ('<br>');
//Выведите все чётные и все нечётные элементы массива из задания 2
echo('Четные: ');
echo ('<br>');
for($j = 0;$j<count($arr); $j++){
    if ($arr[$j]%2==0){
        print_r ($arr[$j].' ');
    }
}
echo ('<br>');
echo('Нечетные: ');
echo ('<br>');
for($k = 0; $k<count($arr); $k++){
    if ($arr[$k]%2!=0){
        print_r ($arr[$k].' ');
    }
}
echo ('<br>');
echo ('=======================');

//Отсортируйте массив из задания 2 по ключу в порядке убывания
krsort($arr);
foreach ($arr as $key=>$value){
    echo('<pre>');
    echo ($key." - ".$value);
    echo('</pre>');
}

echo ('<br>');
echo ('=======================');

//Отсортируйте массив из задания 2 по значению в порядке убывания
arsort($arr);
foreach ($arr as $key=>$value){
    echo('<pre>');
    echo ($key." - ".$value);
    echo('</pre>');
}

echo ('<br>');
echo ('=======================');

//Создайте индексированный массив произвольных имён (до 10 элементов). Поменяйте местами ключи и значения этого массива и выведите на экран
$namesArray = ['Jim','John','James','Jenny','July','Jack','Joker',];
$changedArr = array_flip($namesArray);
foreach ($changedArr as $name=>$ind){
    echo('<pre>');
    echo ($name." = ".$ind);
    echo('</pre>');
}

//Создайте двумерный массив и переберите его циклами foreach, for и while

$doubleArr = [
    [1,2,3,4],
    [5,6,7,8],
    [4,3,2,1],
];

foreach ($doubleArr as $value){
    if(is_array($value)){
        foreach ($value as $ky => $vo){
            echo('<pre>');
            echo (' '.$ky .'=>'. $vo);
            echo('</pre>');
        }
    }
}
echo('===========');
for ($in = 0; $in<count($doubleArr); $in++){
    for ($jn = 0; $jn<count($doubleArr[$in]); $jn++){
        echo('<pre>');
        echo ($jn.' => '.$doubleArr[$in][$jn]);
        echo('</pre>');
    }
}

echo('===========');
$upperI = 0;
while ($upperI<count($doubleArr)){
    $innerI = 0;
    while($innerI<count($doubleArr[$upperI])){
        echo('<pre>');
        echo ($innerI.' => '.$doubleArr[$upperI][$innerI]);
        echo('</pre>');
        $innerI++;
    }
    $upperI++;
}


