<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.03.18
 * Time: 17:05
 */

echo '<b>Входные параметры:</b>';
echo '<br>Мощность ленты, Вт =' . $L18_32->AL42PowerLenti_VT;
echo '<br>1 стор труд лента, мин =' . $L18_32->AL43_StorTrudLenta_min;
echo '<br>';
echo '<br>2 стороны помещение =' . $L18_32->AL45_Storoni2Pomechenia;
echo '<br>4 стороны помещение =' . $L18_32->AL46_Storoni4Pomechenia;
echo '<br>';
echo '<br>2_стор_матер_без_БП,грн=' . $L18_32->AL49_Storoni2MaterBezBP;
echo '<br>4_стор_матер_без_БП,грн=' . $L18_32->AL50_Storoni4MaterBezBP;
echo '<br>';
echo '<br>2_стор_вес_без_БП,кг=' . $L18_32->AL53_Stor2VesBezBP_kg;
echo '<br>4_стор_вес_без_БП,кг=' . $L18_32->AL54_Stor4VesBezBP_kg;

echo '<hr><b>Выходная_величина:</b>';
echo '<br>стоим матер 2 стороны,грн=' . $L18_32->AZ43_StoimostMaterialov2Stor_grn();
echo '<br>вес объединение 2 стор,кг=' .$L18_32->AZ45_VesObedunenia2Stor_kg();
echo '<br>трудоемкость 2 стороны,мин=' . $L18_32->AZ47_Trydoemkost2Stor_min();
echo '<br>флаг замены 2 =' . $L18_32->AZ48_FlagZameni2();

echo '<hr>стоим.матер.4стороны,грн=' . $L18_32->AZ52_StoimostMaterialov4Stor_grn();
echo '<br>вес_объединение4стор,кг=' . $L18_32->AZ54_VesObedunenia4Stor_kg();
echo '<br>трудоемкость4стороны,мин=' . $L18_32->AZ56_StoimostMaterialov_grn();
echo '<br>флаг замены 4 =' . $L18_32->AZ57_FlagZameni4();