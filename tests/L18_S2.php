<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.03.18
 * Time: 17:05
 */

echo '<b>Входные параметры:</b>';
echo '<br>Большая сторона =' . $L18_22->T11_BigSide_cm;
echo '<br>Меньшая сторона =' . $L18_22->T12_SmallSide_cm;

echo '<hr><b>Выходная величина:</b>';
echo '<br>Стоимость материалов, грн =' . $L18_22->AH6_StoimostMaterialov_grn();
echo '<br>';
echo '<br>Трудоёмкость кластеры, мин =' . $L18_22->AH10_TrydoemkostKlaster_min();
echo '<br>Стоимость работы, грн =' . $L18_22->AH11_StoimostMaterialov_grn();

echo '<hr><b>Энергопотребление,_вт=' . $L18_22->AH21_Energopotreblenie_Vt() . '</b>';
echo '<br><b>Вес, кг =' . $L18_22->AH22_Ves_kg() . '</b>';
echo '<br><b>Итого, грн =' . $L18_22->AH24_Itogo_grn() . '</b>';