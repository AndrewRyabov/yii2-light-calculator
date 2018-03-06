<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 01.03.18
 * Time: 23:11
 */

echo '<b>Входные параметры:</b>';
echo '<br>4 стороны помещение =' . $L17_3->AJ5_4WallIn;
echo '<br>';
echo '<br>ориентация =' . $L17_3->AJ7_Orientation;
echo '<br>большая сторона, см = ' . $L17_3->AJ8_BigStor;
echo '<br>меньшая сторона, см = ' . $L17_3->AJ9_SmallStor;
echo '<br>';

echo '<hr><b>Выходные параметры:</b>';
echo '<br>стоимость материалов, грн =' . $L17_3->AW6_CostMaterial_grn();
echo '<br>трудоемкость рамы , мин =' . $L17_3->AW10_WorkBoxOut_min();
echo '<br>стоимость работы, грн =' . $L17_3->AW11_CostWork_grn();
echo '<br>вес, кг =' . $L17_3->AW22_Massa_kg();
echo '<br>итого, грн. =' . $L17_3->AW24_Itogo_grn();