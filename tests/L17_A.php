<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 01.03.18
 * Time: 22:49
 */

echo '<b>Входные параметры:</b>';
echo '<br>крыша/козырек улица =' . $L17_1->B5_RoofVisorOut;
echo '<br>стена улица =' . $L17_1->B6_WallOut;
echo '<br>стена помещение =' . $L17_1->B7_WallIn;
echo '<br>2 стороны помещение =' . $L17_1->B8_2SideIn;
echo '<br>4 стороны помещение =' . $L17_1->B9_4SideIn;
echo '<br>';
echo '<br>большая сторона, см = ' . $L17_1->B11_MaxSide_cm;
echo '<br>меньшая сторона, см = ' . $L17_1->B12_MinSide_cm;
echo '<br>';
echo '<br>пласт лиц (1-пол/2-акр) = ' . $L17_1->B14_PlastikFront;
echo '<br>';
echo '<br>опора 1 сторона, грн =' . $L17_1->H24_Support1Side_grn();
echo '<br>опора 1 сторона, шт =' . $L17_1->I24_Support1Side_kg();
echo '<br>';
echo '<br>опора 2 сторона, грн =' . $L17_1->H25_Support2Side_grn();
echo '<br>опора 2 сторона, шт =' . $L17_1->I25_Support2Side_kg();
echo '<br>';
echo '<br>материал опор итого, грн = ' . $L17_1->H38_MaterialSupportItogo_grn();
echo '<br>материал опор итого, шт = ' . $L17_1->I38_MaterialSupportItogo_kg();
echo '<br>';
echo '<br>трудоемкость опоры итого, мин = ' . $L17_1->L18_SupportItogo_min();

echo '<hr><b>Выходные параметры:</b>';
echo '<br>стоимость материалов, грн =' . $L17_1->O6_CostMaterials_grn();
echo '<br>трудоемкость опоры , мин =' . $L17_1->O10_TrydoemkostSupport_min();
echo '<br>стоимость работы, грн =' . $L17_1->O11_CostWork_grn();
echo '<br>вес, кг =' . $L17_1->O22_Massa_kg();
echo '<br>итого, грн. =' . $L17_1->O24_Itogo_grn();