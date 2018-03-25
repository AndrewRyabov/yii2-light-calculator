<?php
/**
 * Created by PhpStorm.
 * User: Andrii
 * Date: 07.06.2017
 * Time: 2:24
 */

echo 'J38_MaketImg=' . $L09->J38_MaketImg;
echo '<br>J39_PlenkLic=' . $L09->J39_PlenkLic;
echo '<br>J40_PlasticLic=' . $L09->J40_PlasticLic;

// источник света (1-диоды внеш / 2-диоды встроен / 3-лампы)
switch ($L09->J41_Light) {
    case 1: $temp = 'диоды внешние'; break;
    case 2: $temp = 'диоды встроеннные'; break;
    case 3: $temp = 'лампы'; break;
    default: $temp = 'ОШИБКА';
}
echo '<br>J41_Light=' . $L09->J41_Light .' ('.$temp.')';