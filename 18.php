<?php
/*18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    выходные дни следует вывести жирным.*/

$weekends = ['saturday', 'sunday'];
$arr = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday',
    'saturday', 'sunday'];

foreach ($arr as $item) {
    echo ((in_array($item, $weekends))) ? '<strong>' . $item . '</strong><br>' : $item . '<br>';
}
