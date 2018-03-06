<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 01.03.18
 * Time: 23:11
 */

echo '<b>Входные параметры:</b>';
echo '<br>1 стороны помещение =' . $L17_4->BA5_2WallIn;
echo '<br>';
echo '<br>большая сторона, см = ' . $L17_4->BA7_BigStor_sm;
echo '<br>меньшая сторона, см = ' . $L17_4->BA8_SmallStor_sm;
echo '<br>';


//echo '<hr><hr>'. $L17_4->BD5_BigSize_m();
//echo '<br>'.$L17_4->BD6_SmallSize_m();
//echo '<br>'.$L17_4->BD7_SquareBack_m2();
//echo '<br>'.$L17_4->BD8_Perimetr_m();
//echo '<br>';
//echo '<br>'.$L17_4->BD10_FlagSize();
//echo '<br>'.$L17_4->BD11_FlagItogo();
//echo '<hr>'.$L17_4->BG5_SamorezBlack_grn().' = '.$L17_4->BH5_SamorezBlack_kg();
//echo '<br>'.$L17_4->BG6_PlankaPack1mp_grn().' = '.$L17_4->BH6_PlankaPack_kg();
//echo '<br>'.$L17_4->BG7_KoefOverflowUpakPlanok();
//echo '<br>'.$L17_4->BG8_NumSamorez1mp_ps();
//echo '<br>';
//echo '<br>'.$L17_4->BG11_NumPlanok_ps();
//echo '<br>'.$L17_4->BG12_CostPlanok_grn().' = '.$L17_4->BH12_CostUpakPlanok_kg();
//echo '<br>'.$L17_4->BG13_NumberSamorez_ps();
//echo '<br>'.$L17_4->BG14_CostSamorez_grn().' = '.$L17_4->BH14_CostSamorez_kg();


echo '<hr>материалы итого, грн =' . $L17_4->BG15_MaterialItogo_grn() . ' = ' . $L17_4->BH15_MaterialItogo_kg();
echo '<br>монтаж электрорамы, мин =' . $L17_4->BK11_MontagElecroBox_min();

echo '<hr><b>Выходные параметры:</b>';
echo '<br>стоимость материалов, грн =' . $L17_4->BN6_CostMaterial_grn();
echo '<br>трудоемкость Электрорамы , мин =' . $L17_4->BN10_WorkElectroBox_min();
echo '<br>стоимость работы, грн =' . $L17_4->BN11_CostWork_grn();
echo '<br>вес, кг =' . $L17_4->BN22_Massa_kg();
echo '<br>итого, грн. =' . $L17_4->BN24_Iogo_grn();