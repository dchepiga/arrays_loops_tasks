<?php
/*28. Вывести таблицу умножения с помощью двух циклов for.*/

$from = 10;
$to = 10;
echo '<table border="1">';

for($i = 1; $i <= $from; $i++){
    echo '<tr>';
    for($j = 1; $j <= $to; $j++)
    {
        echo '<td>'. $i *$j. '</td>';
    }
    echo '</tr>';
}

echo '</table>';
