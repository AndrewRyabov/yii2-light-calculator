<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.02.18
 * Time: 18:52
 */

echo '<b>Входные параметры (фасад пленка затяжка 1):</b>';
echo '<br>крыша/козырек улица =' . $L15_2->R5_RoofVisorOut;
echo '<br>стена улица =' . $L15_2->R6_WallOut;
echo '<br>стена помещение =' . $L15_2->R7_WallIn;
echo '<br>2 стороны помещение =' . $L15_2->R8_2SideIn;
echo '<br>4 стороны помещение =' . $L15_2->R9_4SideIn;
echo '<br>';
echo '<br>большая сторона, см =' . $L15_2->R11_BolshStorona_cm;
echo '<br>меньшая сторона, см =' . $L15_2->R12_MenshStorona_cm;
echo '<br>';
echo '<br>пленка "Ritrama" эк 1 м2, грн =' . $L15_2->R14_PlenkaRitramaek1m2_grn;
echo '<br>порезка 1 мп, грн =' . $L15_2->R15_Porezka1mp_grn;
echo '<br>';
echo '<br><b>ширина пленки 1 м</b>';
echo '<hr>1 сторона итого, грн: =' . $L15_2->Z31_StoronaItogo_grn();
echo '<br>2 сторона итого, грн: =' . $L15_2->AD31_StoroniItogo_grn();
echo '<br>4 сторона итого, грн: =' . $L15_2->AH31_StoroniItogo_grn();
echo '<br>грн: =' . $L15_2->AJ31_Itogo1m_grn();
echo '<br>';
echo '<br><b>ширина пленки 1.22 м</b>';
echo '<hr>1 сторона итого, грн: =' . $L15_2->Z48_StoronaItogo_grn();
echo '<br>2 сторона итого, грн: =' . $L15_2->AD48_StoroniItogo_grn();
echo '<br>4 сторона итого, грн: =' . $L15_2->AH48_StoroniItogo_grn();
echo '<br>грн: =' . $L15_2->AJ48_Itogo1Tochka22m_grn();
echo '<br><b>итого пленка + порезка + переасход</b>, грн: =' . $L15_2->AJ50_ItogoPlenkaPlusPorezkaPlusPerarasxod();

echo '<hr><b>Выходные параметры:</b>';
echo '<br>итого, грн. =' . $L15_2->AM24_Itogo_grn();