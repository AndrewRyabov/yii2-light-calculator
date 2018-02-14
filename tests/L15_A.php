<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.02.18
 * Time: 23:09
 */

echo '<b>Входные параметры:</b>';
echo '<br>$B5_RoofVisorOut // крыша/козырек улица = ' . $L15_1->B5_RoofVisorOut;
echo '<br>$B6_WallOut // стена улица = ' . $L15_1->B6_WallOut;
echo '<br>$B7_WallIn // стена помещение = ' . $L15_1->B7_WallIn;
echo '<br>$B8_2SideIn // 2 стороны помещение = ' . $L15_1->B8_2SideIn;
echo '<br>$B9_4SideIn // 4 стороны помещение = ' . $L15_1->B9_4SideIn;
echo '<br>';
echo '<br>$B11_Orientation // ориентация = ' . $L15_1->B11_Orientation;
echo '<br>$B12_MaxSide_cm // большая сторона, см = ' . $L15_1->B12_MaxSide_cm;
echo '<br>$B13_MinSide_cm // меньшая сторона, см = ' . $L15_1->B13_MinSide_cm;
echo '<br>$B14_ColorSide // цвет бортов = ' . $L15_1->B14_ColorSide;
echo '<br>$B15_ColorBack // цвет тыла = ' . $L15_1->B15_ColorBack;
echo '<hr>';
echo '$VarIspoln=' . $L15_1->VarIspoln;

echo '<hr>стоимость пленки, грн. N6_PlenkaItogo_mp()=' . $L15_1->N6_PlenkaItogo_mp();
echo '<br>трудоемкость нанесения , мин. N11_TrudNanes_min()=' . $L15_1->N11_TrudNanes_min();
echo '<br>стоимость работы, грн. N12_StoimRaboti_grn()=' . $L15_1->N12_StoimRaboti_grn();
echo '<br>глубина борта, см. N20????? =????????';
echo '<br>итого, грн. N24_Itogo_grn=' . $L15_1->N24_Itogo_grn();