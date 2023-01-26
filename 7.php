<?php
$arr = ['white', 'green', 'red'];
echo('Оригинальный массив: ');
echo implode(" ", $arr);
echo('<br>Элементы массива по возрастанию: ');
sort($arr);
echo (implode(" ", $arr));
?>