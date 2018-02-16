<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.02.18
 * Time: 23:09
 */

echo '<b>Входные параметры:</b>';
echo '<br>крыша/козырек улица =' . $L15_1->B5_RoofVisorOut;
echo '<br>стена улица =' . $L15_1->B6_WallOut;
echo '<br>стена помещение =' . $L15_1->B7_WallIn;
echo '<br>2 стороны помещение =' . $L15_1->B8_2SideIn;
echo '<br>4 стороны помещение =' . $L15_1->B9_4SideIn;
echo '<br>';
echo '<br>ориентация =' . $L15_1->B11_Orientation;
echo '<br>большая сторона, см =' . $L15_1->B12_MaxSide_cm;
echo '<br>меньшая сторона, см =' . $L15_1->B13_MinSide_cm;
echo '<br>цвет бортов =' . $L15_1->B14_ColorSide;
echo '<br>цвет тыла =' . $L15_1->B15_ColorBack;
echo '<br>источник света =' . $L15_1->B17_IstochnikSveta;

echo '<hr>глубина борта, м =' . $L15_1->E20_GlubinaBorta_m();
echo '<br>';
echo '<br>площадь борт итого, м2 =' . $L15_1->H21_PloshBortItogo_m2();
echo '<br>пленка борт итого, грн =' . $L15_1->H23_PlenkaBortItogo_grn();
echo '<br>площадь тыл итого, м2 =' . $L15_1->H27_PloshTilItogo_m2();
echo '<br>пленка тыл итого, грн =' . $L15_1->H29_PlenkaTilItogo_grn();
echo '<br>';
echo '<br>закатка борт итого, мин ='. $L15_1->K11_ZakatkaBortItogo_min();
echo '<br>закатка тыл итого, мин =' . $L15_1->K19_ZakatkaTilItogo_min();

echo '<hr><b>Выходные параметры:</b>';
echo '<br>стоимость пленки, грн. =' . $L15_1->N6_PloshPlenki_grn();
echo '<br>трудоемкость нанесения , мин. =' . $L15_1->N10_PloshPlenki_min();
echo '<br>стоимость работы, грн. =' . $L15_1->N11_StoimostRaboti_grn();
echo '<br>глубина борта, см. =' . $L15_1->N20_GlubinaBorta_sm();
echo '<br>итого, грн. =' . $L15_1->N24_Itogo_grn();