<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 06.03.18
 * Time: 22:03
 */

echo '<b>Входные параметры:</b>';
echo '<br>крыша/козырек улица =' . $L16_3->AJ5_RoofVisorOut;
echo '<br>стена улица =' . $L16_3->AJ6_WallOut;
echo '<br>стена помещение =' . $L16_3->AJ7_WallIn;
echo '<br>2 стороны помещение =' . $L16_3->AJ8_2SideIn;
echo '<br>4 стороны помещение =' . $L16_3->AJ9_4SideIn;
echo '<br>';
echo '<br>большая сторона, см =' . $L16_3->AJ11_MaxSide_cm;
echo '<br>меньшая сторона, см =' . $L16_3->AJ12_MinSide_cm;
echo '<br>';

echo '<hr>тыл + пвх борт (если есть), грн =' . $L16_3->AP32_TillPlusPVHBortEE_grn() . ' = ' . $L16_3->AQ32_TillPlusPVHBortEEgrn();
echo '<br>клей, грн =' . $L16_3->AP36_Kley_grn();
echo '<br>саморезы, грн =' . $L16_3->AP42_Samorez_grn();

//echo '<hr>';
//echo '<br>'.$L16_3->AT5_Virez1mpTill_min();
//echo '<br>'.$L16_3->AT6_Virez1Till_min();
//echo '<br>'.$L16_3->AT7_PogonRez1mp_min();
//echo '<br>'.$L16_3->AT8_Pogon2Perim_min();
//echo '<br>';
//echo '<br>'.$L16_3->AT10_1mpKleyShva_min();
//echo '<br>'.$L16_3->AT11_2PerimKleyShvamin();
//echo '<br>';
//echo '<br>'.$L16_3->AT13_Vkrytit1SamorezS_min();
//echo '<br>'.$L16_3->AT14_Vkrytit1Perimetr_min();
//echo '<br>';
//echo '<br>'.$L16_3->AT16_TillKrUlica_min();
//echo '<br>'.$L16_3->AT17_TillPomesh_min();
//echo '<br>'.$L16_3->AT18_PVH4TillPomeshmin();
//echo '<br>';
//echo '<br>'.$L16_3->AT20_TillKrmin();
//echo '<br>'.$L16_3->AT21_TillUlica_min();
//echo '<br>'.$L16_3->AT22_TillPomesh_min();
//echo '<br>'.$L16_3->AT23_PVH4TillPomesh_min();
echo '<br>собрать тыл, мин =' . $L16_3->AT24_SobrTill_min();

echo '<hr><b>Выходные параметры:</b>';
echo '<br>стоимость материалов, грн =' . $L16_3->AW6_StoimMat_grn();
echo '<br>';
echo '<br>трудоемкость тыл , мин =' . $L16_3->AW10_TrudTill_min();
echo '<br>стоимость работы, грн =' . $L16_3->AW11_StoimRab_grn();
echo '<br>';
echo '<br>тыл пвх 5 мм =' . $L16_3->AW15_TillPVH5mm();
echo '<br>тыл пвх 4 мм =' . $L16_3->AW16_TillPVH4mm();
echo '<br>тыл пвх 3 мм =' . $L16_3->AW17_TillPVH3mm();
echo '<br>тыл двп =' . $L16_3->AW18_TillDVP();
echo '<br>';
echo '<br>вес, кг =' . $L16_3->AW22_Ves_kg();
echo '<br>';
echo '<br>итого, грн. =' . $L16_3->AW24_Itogo_grn();