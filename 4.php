<?php
$arr = ['Blue', 'Green', 'Red'];
echo('Оригинальный массив: ');
echo implode(" ", $arr);
echo('<br>Массив в нижнем регистре: ');
echo strtolower(implode(" ", $arr));
echo('<br>Массив в верхнем регистре: ');
echo strtoupper(implode(" ", $arr));
?>