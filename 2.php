<?php
$arr = ['Привет', ',', ' мир', '!'];
unset($arr[0]);//Удаляет первый элемент массива
array_unshift($arr, 'Здравствуй');//Добавляет новый элемент массива  в начало
for ($i=0;$i<count($arr);$i++){
    print($arr[$i]);
}
?>