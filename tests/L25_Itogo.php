<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 07.06.2017
 * Time: 2:24
 */
include_once '../src/L25.php';
$L25 = new \almaz44\light\calculator\L25(0, 0, 0, 1, 0, 1, 300, 60, 0, 0, 1, 1, 3, 0, 1, диоды);

// Вывод переменных:
echo '<br>O30_StoimIzgot1shtgrn=' . $L25->O30_StoimIzgot1shtgrn() . '=' . $L25->O30_StoimIzgot1shtgrn();
echo '<br>O31_Energopotrebleniyevt=' . $L25->O31_Energopotrebleniyevt() . '=' . $L25->O31_Energopotrebleniyevt();
echo '<br>O32_Veskg=' . $L25->O32_Veskg() . '=' . $L25->O32_Veskg();