<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.03.18
 * Time: 17:05
 */

echo '<b>Входные параметры:</b>';
echo '<br>Большая сторона =' . $L18_21->T52_BigSide_cm;
echo '<br>Меньшая сторона =' . $L18_21->T53_SmallSide_cm;

echo '<hr><b>Выходная величина:</b>';
echo '<br>Стоимость материалов, грн =' . $L18_21->AH47_StoimostMaterialov_grn();
echo '<br>';
echo '<br>Трудоёмкость кластеры, мин =' . $L18_21->AH51_TrydoemkostKlaster_min();
echo '<br>Стоимость работы, грн =' . $L18_21->AH52_StoimostMaterialov_grn();

echo '<hr><b>Энергопотребление,_вт=' . $L18_21->AH62_Energopotreblenie_Vt() . '</b>';
echo '<br><b>Вес, кг =' . $L18_21->AH63_Ves_kg() . '</b>';
echo '<br><b>Итого, грн =' . $L18_21->AH65_Itogo_grn() . '</b>';