<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.02.18
 * Time: 19:33
 */

echo '<b>Входные параметры:</b>';
echo '<br>крыша/козырек улица =' . $L15_4->BG5_RoofVisorOut;
echo '<br>стена улица =' . $L15_4->BG6_WallOut;
echo '<br>стена помещение =' . $L15_4->BG7_WallIn;
echo '<br>2 стороны помещение =' . $L15_4->BG8_2SideIn;
echo '<br>4 стороны помещение =' . $L15_4->BG9_4SideIn;
echo '<br>';
echo '<br>ориентация =' . $L15_4->BG11_Orientation;
echo '<br>большая сторона, см =' . $L15_4->BG12_MaxSide_cm;
echo '<br>меньшая сторона, см =' . $L15_4->BG13_MinSide_cm;
echo '<br>глубина борта, м =' . $L15_4->BG14_GlubinaBorta_sm;

echo '<hr>стрейч, грн =' . $L15_4->BM24_Streich_grn();
echo '<br>скотч, грн =' . $L15_4->BM27_Scotch_grn();
echo '<br>упаковка итого, мин =' . $L15_4->BP17_YpakovkaItogo_grn();

echo '<hr><b>Выходные параметры:</b>';
echo '<br>пленка стрейч (500 мм) итого, мп =' . $L15_4->BS6_PlenkaStreich500mmItogo_mp();
echo '<br>стоимость материалов, грн =' . $L15_4->BS7_StoimostMaterialov_grn();
echo '<br>трудоемкость упаковки , мин =' . $L15_4->BS11_TrydoemkostYpakovki_min();
echo '<br>стоимость работы, грн. =' . $L15_4->BS12_StoimostRaboti_grn();
echo '<br>итого, грн. =' . $L15_4->BS24_Itogo_grn();