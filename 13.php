<?php
/*13. Вывести таблицу умножения*/


$cols = 10;
$rows = 10;
$i = 1;

echo "<table border = '1'>";

while ($i <= $rows) {
    echo "<tr>";
    $j = 1;
    while ($j <= $cols) {
        echo "<td>" . $i * $j . "</td>";
        $j++;
    }
    echo "</tr>";
    $i++;
}
echo "</table>";
