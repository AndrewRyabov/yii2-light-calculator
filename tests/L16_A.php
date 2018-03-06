<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 06.03.18
 * Time: 22:02
 */

echo '<b>Входные параметры:</b>';
echo '<br>крыша/козырек улица =' . $L16_1->B5_RoofVisorOut;
echo '<br>стена улица =' . $L16_1->B6_WallOut;
echo '<br>стена помещение =' . $L16_1->B7_WallIn;
echo '<br>2 стороны помещение =' . $L16_1->B8_2SideIn;
echo '<br>4 стороны помещение =' . $L16_1->B9_4SideIn;
echo '<br>';
echo '<br>большая сторона, см =' . $L16_1->B11_BigStor;
echo '<br>меньшая сторона, см =' . $L16_1->B12_SmallStor;
echo '<br>';
echo '<br>фасад =' . $L16_1->B14_Fasad;



echo '<hr><b>Выходные параметры:</b>';
echo '<br>стоимость материалов, грн =' . $L16_1->O6_StoimostMaterialov_grn();
echo '<br>фасад поликарбонат =' . $L16_1->O7_FasadPolikarbonat();
echo '<br>фасад акрил =' . $L16_1->O8_FasadAkril();
echo '<br>';
echo '<br>трудоемкость фасад , мин =' . $L16_1->O10_FasadPolikarbonat();
echo '<br>стоимость работы, грн =' . $L16_1->O11_StoimostRaboti_grn();
echo '<br>';
echo '<br>вес, кг =' . $L16_1->O22_Ves_kg();
echo '<br>';
echo '<br>итого, грн. =' . $L16_1->O24_Itogo_grn();