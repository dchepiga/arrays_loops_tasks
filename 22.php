<?php
/*22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx
    xxxx
    xxxxxx
    xxxxxxxx
    xxxxxxxxxx
*/

$num = 5;
for ($i = 1; $i <= $num; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo 'xx';
    }
    echo '<br>';
}

//OR v2 with more iterations
echo '<br>';

for ($i = 1; $i <= $num; $i++) {
    for ($j = 1; $j <= $i*2; $j++) {
        echo 'x';
    }
    echo '<br>';
}