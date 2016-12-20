<?php

/*17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
    месяц выведите жирным. Текущий месяц должен храниться в переменной $month.*/

$month = strtolower(date('F'));
$arr = ['january', 'february', 'march', 'april', 'may',
    'june', 'july', 'august', 'september', 'october', 'november', 'december'];

foreach ($arr as $value) {
    echo (($month !== $value)) ? $value . '<br>' : '<strong>' . $value . '</strong><br>';
}