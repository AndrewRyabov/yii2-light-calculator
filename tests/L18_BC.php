<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.03.18
 * Time: 17:06
 */

echo '<b>Входные_параметры:</b>';
echo '<br>крыша/козырек_улица_=' . $L18_4->BD5_RoofVisorOut;
echo '<br>стена улица =' . $L18_4->BD6_AOallOut;
echo '<br>стена помещение =' . $L18_4->BD7_AOallIn;
echo '<br>2 стороны помещение =' . $L18_4->BD8_SideIn2;
echo '<br>4 стороны помещение =' . $L18_4->BD9_SideIn4;
echo '<br>';
echo '<br>источник света =' . $L18_4->BD12_Istochniksveta;
echo '<br>';
echo '<br>флаг замены 2 =' . $L18_4->BD17_FlagZameni2;
echo '<br>флаг замены 4 =' . $L18_4->BD18_FlagZameni4;

echo '<hr><b>Выходная_величина:</b>';
echo '<br>стоимость_материалов,_грн=' . $L18_4->BV6_StoimostMaterialov_grn();
echo '<br>';
echo '<br>трудоемкость_электрика,_мин=' . $L18_4->BV10_TrydElektrika_min();
echo '<br>стоимость работы, грн =' . $L18_4->BV11_StoimostRaboty_grn();

echo '<hr><b>энергопотребление, Вт =' . $L18_4->BV21_Energopotreblenie_Vt() . '</b>';
echo '<br><b>вес, кг =' . $L18_4->BV22_Ves_kg() . '</b>';
echo '<br><b>итого, грн =' . $L18_4->BV24_Itogo_grn() . '</b>';