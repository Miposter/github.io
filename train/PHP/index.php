<?php
//Типы данных
$float = 10.24;
$int = 10;
$str = 'hello World! $int';
$str2 = "вторая строка! $int"; //два типа данных
$bool = true; //false, логический оператор
$arr = ['first' => 2, 'kebab' => 4,6,8, false]; //массив
$null = null; //неопеределённое значение
$obj;
echo "Различные переменные: $float, $int, $str, $str2";
echo " Сложение строк $str $str2";
print_r($arr);
var_dump($null);
var_dump($int); //показывает тип переменной

//Создание функций
function hello() {
    echo 'hello';
}

hello();
//

function num() {
    return 10 + 20;
}

$res = PHP_EOL . $int + num();
echo $res;
//

function my($a) {
    return $a + 15;
}

echo PHP_EOL . my(20);
echo PHP_EOL . my($int);
//

//Типы данных 2
echo PHP_EOL . pow (10, 2);
echo PHP_EOL . ucfirst ($str);
echo PHP_EOL . ucfirst ($str2); //Не работает, если есть число, только один тип данных в переменной
echo PHP_EOL . str_replace('World', '1', $str);

//Массивы - хранилище каких-либо типпов данных, в том числе другого массива (первая вложенность) внутри массива
array_push($arr, 10);
$arr[] = 30;
var_dump($arr);
var_dump($arr[2]);

//Условные операторы
$r = 130;
$res = '';
if ($r > 150) {
    $res = "Success";
    echo $res;
}
elseif ($r > 140) {
    echo "Sad";
}
else {
    echo "Super Sad";
}

//Логические операторы

//           && - и.     || - или

//Оператор Foreach, каждый элемент массива имеет значение $value в момент вывода
foreach($arr as $key => $value) {
    echo PHP_EOL . $key . PHP_EOL;
    echo PHP_EOL . $value . PHP_EOL;
    echo '-----' . PHP_EOL;
    echo '////' . PHP_EOL;
    if ($key < 3) {
        continue;
    }
    else {
        echo PHP_EOL . $key;
    }    
}
echo '///';
foreach ($arr as $key => $value) {
    if (is_int($value)) {
        echo PHP_EOL . $value;
    }
}

//is_string, is_bool, is_array и т.д

