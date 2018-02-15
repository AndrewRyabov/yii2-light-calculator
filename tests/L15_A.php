<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.02.18
 * Time: 23:09
 */

echo '<b>Входные параметры (Борт/тыл плёнка):</b>';
echo '<br>$B5_RoofVisorOut // крыша/козырек улица =' . $L15_1->B5_RoofVisorOut;
echo '<br>$B6_WallOut // стена улица =' . $L15_1->B6_WallOut;
echo '<br>$B7_WallIn // стена помещение =' . $L15_1->B7_WallIn;
echo '<br>$B8_2SideIn // 2 стороны помещение =' . $L15_1->B8_2SideIn;
echo '<br>$B9_4SideIn // 4 стороны помещение =' . $L15_1->B9_4SideIn;
echo '<br>';
echo '<br>$B11_Orientation // ориентация =' . $L15_1->B11_Orientation;
echo '<br>$B12_MaxSide_cm // большая сторона, см =' . $L15_1->B12_MaxSide_cm;
echo '<br>$B13_MinSide_cm // меньшая сторона, см =' . $L15_1->B13_MinSide_cm;
echo '<br>$B14_ColorSide; // цвет бортов =' . $L15_1->B14_ColorSide;
echo '<br>$B15_ColorBack; // цвет тыла =' . $L15_1->B15_ColorBack;
echo '<br>$B17_IstochnikSveta; // источник света =' . $L15_1->B17_IstochnikSveta;

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
echo '<br>стоимость пленки, грн. N6_PlenkaItogo_mp()=' . $L15_1->N6_PloshPlenki_grn();
echo '<br>трудоемкость нанесения , мин. N11_TrudNanes_min()=' . $L15_1->N10_PloshPlenki_min();
echo '<br>стоимость работы, грн. N12_StoimRaboti_grn()=' . $L15_1->N11_StoimostRaboti_grn();
echo '<br>глубина борта, см. N20_GlubinaBorta_sm()=' . $L15_1->N20_GlubinaBorta_sm();
echo '<br>итого, грн. N24_Itogo_grn=' . $L15_1->N24_Itogo_grn();