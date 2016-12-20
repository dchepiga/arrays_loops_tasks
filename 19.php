<?php
/*19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
    текущий день выведите курсивом. Текущий день должен храниться в переменной $day.*/

$day = strtolower(date('l'));

$arr = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday',
    'saturday', 'sunday'];

foreach ($arr as $item) {
    echo (($day !== $item)) ? $item . '<br>' : '<i>' . $item . '</i><br>';
}