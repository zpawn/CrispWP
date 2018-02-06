<?php

//** SetUp
date_default_timezone_set('Europe/Kiev');
set_time_limit(5);

/**
 * Task 01:
 * Получаем текущий час в виде строки от 00 до 23 и приводим строку к целому числу от 0 до 23
 */

$welcome = '';
$hour = (int)strftime('%H');

if ($hour >= 6 && $hour < 12) {
    $welcome = 'Good morning';
} elseif ($hour >= 12 && $hour < 18) {
    $welcome = 'Good afternoon';
} elseif ($hour >= 18 && $hour < 23) {
    $welcome = 'Good evening';
} else {
    $welcome = 'Goodnight';
}

echo strftime('%H:%M') .' - '. $welcome;
hr();

/**
 * Task 02:
 * Создать массив из 100 случайных чисел.(дальше работаем с ним).
 * Посчитать количество элементов массива, не используя count.
 * Отфильтровать массив так чтобы четные числа записались в 1 масив нечетные в другой.
 */
$arr = $even = $odd = [];
for ($i = 0; $i < 100; $i += 1) {

    $value = rand(1, 99999);

    while (in_array($value, $arr)) {
        $value = rand(1, 99999);
    }

    $arr[] = $value;
}
unset($i);

$count = array_reduce($arr, function ($result, $item) {
    $result += 1;
    return $result;
}, 0);

echo 'count: ' . $count;

foreach ($arr as $value) {
    if ($value % 2 == 0) {
        $even[] = $value;
    } else {
        $odd[] = $value;
    }
}

create_table($even, $odd);
hr();

/**
 * Task 03:
 * Вывести числа в следующей последовательности: 200 199 198 … 0.
 * Задание решите с помощью цикла do…while
 */

$mark = 200;
do {
    echo $mark . ' ';
    $mark -= 1;
} while ($mark >= 0);
hr();

/**
 * Task 04:
 * Найти сумму  1+4+7+10+...+112. Ответ: 2147
 */

$sum = 0;
$num = $sum = 1;

do {
    $sum += $num;
    $num += 3;
} while ($num <= 112);

echo 'sum: '. $sum;
hr();

/**
 * Task 05:
 * С помощью цикла напечатайте таблицу умножения на 7 от 1 до 9
 * 1*7=7
 * 2*7=14
 * 3*7=21
 */
for ($i = 1; $i <= 9; $i += 1) {
    echo $i .' * 7 = '. ($i * 7) .'<br>';
}
hr();

/**
 * Task 06:
 * Создать ассоциативный массив из 10 элементов. Вывести все его ключи.
 * Перебрать массив так чтобы если в значении было число мы заменяем его на “тут было число n(где n наше число)” , если строка “Здесь была строка из n символов”
 */
$assoc_array = [
    uniqid() => 'aloha',
    uniqid() => 36,
    uniqid() => 'hello',
    uniqid() => 'Ola',
    uniqid() => 21,
    uniqid() => 'bonjour',
    uniqid() => 15,
    uniqid() => 'hola',
    uniqid() => 'ciao',
];

$message = '';

foreach ($assoc_array as $key => $value) {
    if (is_int($value)) {
        $message = 'тут было число '. $value;
    } else {
        $message = 'Здесь была строка из '. strlen($value) .' символов';
    }

    echo $key . ' => '. $message .'<br>';
}

////

function hr () {
    echo '<br>========================<br>';
}

function create_table ($even, $odd) {
    echo '<table border="1"><tr><th>even</th><th>odd</th></tr><tr><td><pre>';
    print_r($even);
    echo '</pre></td><td><pre>';
    print_r($odd);
    echo '</pre></td></td></tr></table>';
}
