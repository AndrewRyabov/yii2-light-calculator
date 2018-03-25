<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.03.18
 * Time: 17:05
 */

echo '<b>Входные параметры:</b>';
echo '<br>большая сторона, см =' . $L18_33->AL89_BigSide_cm;
echo '<br>меньшая сторона, см =' . $L18_33->AL90_SmallSide_cm;

echo '<hr><b>Выходная_величина:</b>';
echo '<br>стоимость_материалов,грн=' . $L18_33->AZ84_StoimostMaterialov_grn();

echo '<br>';
echo '<br>трудоемкость лента, мин =' . $L18_33->AZ88_TrydoemkostLenta_min();
echo '<br>стоимость работы, грн =' . $L18_33->AZ89_StoimosRaboti_grn();

echo '<hr><b>энергопотребление, Вт =' . $L18_33->AZ99_Energopotreblenie_Vt() . '</b>';
echo '<br><b>вес, кг =' . $L18_33->AZ100_Ves_kg() . '</b>';
echo '<br><b>итого, грн =' . $L18_33->AZ102_Itogo_grn() . '</b>';