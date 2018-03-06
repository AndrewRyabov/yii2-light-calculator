<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 06.03.18
 * Time: 22:03
 */

echo '<b>Входные параметры:</b>';
echo '<br>крыша/козырек улица =' . $L16_2->S5_RoofVisorOut;
echo '<br>стена улица =' . $L16_2->S6_WallOut;
echo '<br>стена помещение =' . $L16_2->S7_WallIn;
echo '<br>2 стороны помещение =' . $L16_2->S8_2SideIn;
echo '<br>4 стороны помещение =' . $L16_2->S9_4SideIn;
echo '<br>';
echo '<br>ориентация =' . $L16_2->S11_Orientation;
echo '<br>большая сторона, см =' . $L16_2->S12_MaxSide_cm;
echo '<br>меньшая сторона, см =' . $L16_2->S13_MinSide_cm;
echo '<br>';
echo '<br>пластик лиц (1-пол/2-акр) =' . $L16_2->S15_PlastLic;
echo '<br>источник света  =' . $L16_2->S16_IstocknikSveta;
echo '<br>';
echo '<br>левый верх угол (0/6/12) , см =' . $L16_2->S19_LeviiVerxUgol;
echo '<br>правый верх угол (0/6/12) , см =' . $L16_2->S20_PraviiVerxUgol;
echo '<br>правый ниж угол (0/6/12) , см =' . $L16_2->S21_LeviiNizhniiUgol;
echo '<br>левый ниж угол  (0/6/12), см =' . $L16_2->S22_PraviiNizhniiUgol;



echo '<hr><b>Выходные параметры:</b>';
echo '<br>стоимость материалов, грн =' . $L16_2->AF6_StoimosMaterialov_grn();
echo '<br>глубина борта, см =' . $L16_2->AF7_GlubinaBorta_m();
echo '<br>';
echo '<br>трудоемкость борт , мин =' . $L16_2->AF10_Trudoemkost1Bort_min();
echo '<br>стоимость работы, грн =' . $L16_2->AF11_StoimRaboti_grn();
echo '<br>';
echo '<br>вес, кг =' . $L16_2->AF22_Veskg();
echo '<br>';
echo '<br>итого, грн. =' . $L16_2->AF24_Itogo_grn();