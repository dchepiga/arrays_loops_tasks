<?php

/*3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого
    массива. Результат запишите переменную $result.
*/

$array = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($array as $el) {
    // ф-ция pow() возводит число в нужную степень
    $result += pow($el, 2);
}
echo $result;