<?php
$arr = ['1','2','3','4','5'];
$rand = rand(0,5);
$elem = '$';
print ('Исходный массив: ' . implode(' ', $arr));
array_splice($arr, $rand, 0, $elem);
print ('<br>Массив после вставки $ выглядит так: ' . implode(' ', $arr));
?>