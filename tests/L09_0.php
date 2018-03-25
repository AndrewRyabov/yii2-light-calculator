<?php
/**
 * Created by PhpStorm.
 * User: Andrii
 * Date: 07.06.2017
 * Time: 2:24
 */

switch ($L09->J4_VarIspoln) {
    case 1: $temp = 'крыша'; break;
    case 2: $temp = 'улица'; break;
    case 3: $temp = 'помещ'; break;
    case 4: $temp = '2 стор'; break;
    case 5: $temp = '4 стор'; break;
    default: $temp = 'ОШИБКА';
}

echo 'Вариант исполнения:';
echo '<br><br>';
echo 'J4_J4_VarIspoln =' . $L09->J4_VarIspoln .' ('.$temp.')';
