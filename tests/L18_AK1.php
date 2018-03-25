<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.03.18
 * Time: 17:05
 */

echo '<b>Входные параметры:</b>';
echo '<br>большая сторона, см =' . $L18_31->AL11_BigSide_cm;
echo '<br>меньшая сторона, см =' . $L18_31->AL12_SmallSide_cm;

echo '<hr><b>Выходная_величина:</b>';
echo '<br>стоимость_материалов,грн=' . $L18_31->AZ6_StoimostMaterialov_grn();
echo '<br>стоимость_БП_с_гарантией,грн=' .$L18_31->AZ7_StoimostBPSGarantiei_grn();
echo '<br>вес 1 БП, кг =' . $L18_31->AZ8_Ves1BP_kg();

echo '<br>';
echo '<br>трудоемкость лента, мин =' . $L18_31->AZ10_TrydoemkostKlaster_min();
echo '<br>стоимость работы, грн =' . $L18_31->AZ11_StoimostMaterialov_grn();

echo '<hr><b>энергопотребление, Вт =' . $L18_31->AZ21_Energopotreblenie_Vt() . '</b>';
echo '<br><b>вес, кг =' . $L18_31->AZ22_Ves_kg() . '</b>';
echo '<br><b>итого, грн =' . $L18_31->AZ24_Itogo_grn() . '</b>';