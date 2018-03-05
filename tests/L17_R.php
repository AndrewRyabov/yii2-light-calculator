<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 01.03.18
 * Time: 23:11
 */
echo '<b>Входные параметры:</b>';
echo '<br>крыша/козырек улица =' . $L17_2->S5_RoofVisorOut;
echo '<br>стена улица =' . $L17_2->S6_WallOut;
echo '<br>стена помещение =' . $L17_2->S7_WallIn;
echo '<br>2 стороны помещение =' . $L17_2->S8_2SideIn;
echo '<br>4 стороны помещение =' . $L17_2->S9_4SideIn;
echo '<br>';
echo '<br>ориентация (1-гор/2-верт)=' . $L17_2->S11_Orientation;
echo '<br>большая сторона, см =' . $L17_2->S12_MaxSide_cm;
echo '<br>меньшая сторона, см =' . $L17_2->S13_MinSide_cm;
echo '<br>';
echo '<br>пластик лиц (1-полик/2-акрил) =' . $L17_2->S15_PlastikFront;
echo '<br>';
echo '<br>стоимость опор лицевых, грн =' . $L17_2->S20_CosSupportFront;
//
//echo '<hr><hr>' . $L17_2->Y5_LargeSize_m();
//echo '<br>' . $L17_2->Y6_SmallSize_m();
//echo '<br>' . $L17_2->Y7_GorizontalSize_m();
//echo '<br>' . $L17_2->Y8_VerticalSize_m();
//echo '<br>' . $L17_2->Y9_AreaFront_m2();
//echo '<br>' . $L17_2->Y10_PerimetrBox_m();
////
//echo '<hr>' . $L17_2->Z11_DensityPolikarbonat6mm_kg();
//echo '<br>' . $L17_2->Z12_DensityAkril3mm_kg();
//echo '<br>' . $L17_2->Z13_Massa_kg();
//echo '<br>' . $L17_2->Z14_MassaMax1UD_kg();
////
//echo '<hr>' . $L17_2->Y15_2UDPodves();
//echo '<br>' . $L17_2->Y16_4UDPodves();
//echo '<br>' . $L17_2->Y17_6UDPodves();
////
//echo '<hr>' . $L17_2->Y19_UDProfil1mp_gr() . ' = ' . $L17_2->Z19_UDProfil1mp_grn();
//echo '<br>' . $L17_2->Y20_OverflowUDProfil();
//echo '<br>' . $L17_2->Y21_Samorez1_grn();
//echo '<br>' . $L17_2->Y22_NumberSamorez1mpBox_ps();
//echo '<br>' . $L17_2->Y23_NumberSamorez1mpPack();
//echo '<br>' . $L17_2->Y24_PlankaPack1mp_grn() . ' = ' . $L17_2->Z24_Planka1mp_grn();
//echo '<br>' . $L17_2->Y25_OverflowPlankaPack();
//echo '<br>' . $L17_2->Y26_PVH5mm1mm2_grn();
////
//echo '<hr>' . $L17_2->Y29_NumberJump_ps();
//echo '<br>' . $L17_2->Y30_NumberUDItogo_ps();
//echo '<br>' . $L17_2->Y31_LongUDBox_mp() . ' = ' . $L17_2->Z31_LongUDBoxItogo_mp();
//echo '<br>' . $L17_2->Y32_CostUDProfil_grn();
//echo '<br>' . $L17_2->Y33_NumberSamorezItogo_ps();
//echo '<br>' . $L17_2->Y34_CostSamorez_grn();
//echo '<br>' . $L17_2->Y35_BoxMaterial1side_grn() . ' = ' . $L17_2->Z35_BoxMaterial1Side_kg();
//
//echo '<hr>' . $L17_2->Y37_LongPlanka_m() . ' = ' . $L17_2->Z37_LonghtPlanka_m();
//echo '<br>' . $L17_2->Y38_CostPlanka_grn();
//echo '<br>' . $L17_2->Y39_SamorezPlanka_ps();
//echo '<br>' . $L17_2->Y40_CostSamorez_grn();
//echo '<br>' . $L17_2->Y41_PVHLineSupportBack_mp();
//echo '<br>' . $L17_2->Y42_VHLineSupportBack_grn();
//echo '<br>' . $L17_2->Y43_NumberUDpodves_ps();
//echo '<br>' . $L17_2->Y44_CostUDPodvesov_grn() . ' = ' . $L17_2->Z44_CostUDPodves_grn();
//echo '<br>' . $L17_2->Y45_NumberSamorez_ps();
//echo '<br>' . $L17_2->Y46_CostSamorez_grn();
//echo '<br>' . $L17_2->Y47_CostBoltM8x50_grn() . ' = ' . $L17_2->Z47_CostBoltM8x50_grn();
//echo '<br>' . $L17_2->Y48_BoxMaterial2Side_grn() . ' = ' . $L17_2->Z48_BoxMaterial2Side_grn();







echo '<hr>рама материалы 1 сторона, грн =' . $L17_2->Y35_BoxMaterial1side_grn() . ' = ' . $L17_2->Z35_BoxMaterial1Side_kg();
echo '<br>рама материалы 2 стороны, грн =' . $L17_2->Y48_BoxMaterial2Side_grn() . ' = ' . $L17_2->Z48_BoxMaterial2Side_grn();
echo '<br>рама материалы 4 стороны, грн =' . $L17_2->Y54_BoxMaterial4Side_grn() . ' = ' . $L17_2->Z54_BoxMaterial4Side_grn();
echo '<br>рама материалы итого, грн =' . $L17_2->Y56_BoxMaterialItogo_grn() . ' = ' . $L17_2->Z56_BoxMaterialItogo_grn();
//
echo '<hr>работа 1 сторона, мин =' . $L17_2->AC13_Work1Side_min();
echo '<br>работа 2 стороны, мин =' . $L17_2->AC20_Work2Side_min();
echo '<br>работа 4 стороны, мин =' . $L17_2->AC24_Work4Side_min();
echo '<br>работа итого, мин =' . $L17_2->AC26_WorkItogo_min();

echo '<hr><b>Выходные параметры:</b>';
echo '<br>стоимость материалов, грн =' . $L17_2->AF6_CostMaterial_grn();
echo '<br>трудоемкость рама , мин =' . $L17_2->AF10_WorkBox_min();
echo '<br>стоимость работы, грн =' . $L17_2->AF11_CostWork_grn();
echo '<br>вес, кг =' . $L17_2->AF22_Massa_kg();
echo '<br>итого, грн. =' . $L17_2->AF24_Itogo_grn();