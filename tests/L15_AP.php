<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.02.18
 * Time: 19:24
 */

echo '<b>Входные параметры:</b>';
echo '<br>крыша/козырек улица =' . $L15_3->AQ5_RoofVisorOut;
echo '<br>стена улица =' . $L15_3->AQ6_WallOut;
echo '<br>стена помещение =' . $L15_3->AQ7_WallIn;
echo '<br>2 стороны помещение =' . $L15_3->AQ8_SideIn2;
echo '<br>4 стороны помещение =' . $L15_3->AQ9_SideIn4;
echo '<br>';
echo '<br>большая сторона, см =' . $L15_3->AQ11_BolshStorona_cm;
echo '<br>меньшая сторона, см =' . $L15_3->AQ12_MenshStorona_cm;
echo '<br>лиц изоб (1-есть/0-нет) =' . $L15_3->AQ13_LicIzobr;
echo '<br>';
echo '<br>макет изоб (1-рисовать/0-нет)=' . $L15_3->AQ15_MaketIzobr;
echo '<br>пленка лицевая (код) =' . $L15_3->AQ16_PlenkaLic;
echo '<br>';
echo '<br>пленка затяжка экон, грн =' . $L15_3->AQ18_PlenkZatazkEkon_grn;

//echo '<hr>';


echo '<hr><b>Выходные параметры:</b>';
echo '<br>фасад материалы итого, грн. =' . $L15_3->BC6_FasadMatItogo_grn();
echo '<br>трудоемкость нанесения, мин=' . $L15_3->BC10_TrudoemkostNanesenia_min();
echo '<br>дизайн, мин=' . $L15_3->BC11_Dizain_min();
echo '<br>стоимость работы, грн.=' . $L15_3->BC12_StoimostRaboti_grn();
echo '<br>итого, грн. =' . $L15_3->BC24_Itigo_grn();