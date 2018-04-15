<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.03.18
 * Time: 17:05
 */

echo '<b>Входные_параметры:</b>';
echo '<br>крыша/козырек улица =' . $L25->B5_RoofVisorOut;
echo '<br>стена улица =' . $L25->B6_WallOut;
echo '<br>стена помещение =' . $L25->B7_WallIn;
echo '<br>2 стороны помещение =' . $L25->B8_2SideIn;
echo '<br>4 стороны помещение =' . $L25->B9_4SideIn;
echo '<br>';
echo '<br>ориентация =' . $L25->B11_Orientation;
echo '<br>Большая сторона =' . $L25->B12_BolshStorona_cm;
echo '<br>Меньшая сторона =' . $L25->B13_MenshStorona_cm;
echo '<br>Цвет бортов =' . $L25->B14_CvetBortov;
echo '<br>Цвет тыла =' . $L25->B15_CvetTill;
echo '<br>Толщина, см =' . $L25->B16_Tolchina;
echo '<br>';
echo '<br>Макет =' . $L25->B18_MaketRazrab;
echo '<br>плёнка лицевая =' . $L25->B19_PlenkaLic;
echo '<br>фасад акрил =' . $L25->B20_FasadAkryl;
echo '<br>фасад поликарбонат =' . $L25->B21_FasadPolikarb;
echo '<br>источник света =' . $L25->B22_IstochnikSveta;

//echo '<hr>';
//echo $L25->L5_FasadPlastik() . '+' .
//     $L25->L6_BortPVH() . '+' .
//     $L25->L7_Till() . '+' .
//     $L25->L8_OporiLicPlastik() . '+' .
//     $L25->L9_RamaVnutr() . '+' .
//     $L25->L10_RamaNaruj() . '+' .
//     $L25->L11_Podvesi() . '+' .
//     $L25->L12_Podvesi() . '+' .
//     $L25->L14_Elektrika();
//echo 'H26 =' . $L25->H26_StoimosBazovay() . ' I26 =' . $L25->I26_StoimosBazovay();
//echo '<br>I19 ='. $L25->I19_ItogoSborka();
//echo '<br>I20 =' . $L25->I20_Snabjeniye() . ' I21 =' . $L25->I21_Koef2() .
//      ' I22 =' . $L25->I22_Koef3() . ' I23 =' . $L25->I23_Koef4();

echo '<hr><b>Выходная величина:</b>';
echo '<br>имя конструктора =C_light';
echo '<br>';
echo '<br>вариант исполнения =' . $L25->E10_VPR();
echo '<br>ориентация текст =' . $L25->E14_VPR();
echo '<br>ориентация код (1-гор/2-верт) =' . $L25->B11_Orientation;
echo '<br>больший размер, см =' . $L25->O12_BolshRazmcm();
echo '<br>меньший размер, см =' . $L25->O13_MenshRazmcm();
echo '<br>толщина, см =' . $L25->B16_Tolchina;
echo '<br>цвет бортов,  "Ritrama" № =' . $L25->O15_CvetBortRitramaNom();
echo '<br>цвет тыла, "Ritrama" № =' . $L25->O16_CvetTillRitramaNom();
echo '<br>макет разрабатывает =' . $L25->O17_MaketRazrab();
echo '<br>пленка лицевая =' . $L25->O18_PlenkaLic();
echo '<br>пластик лицевой =' . $L25->O19_PlastikLic();
echo '<br>источник света =' . $L25->B22_IstochnikSveta;
echo '<br>';
echo '<br>центр отв (для 4 стор), см =' . $L25->O22_CenrOtvDl4StorPomeshcm();
echo '<br>';
echo '<br><b>снабжение, грн =' . $L25->O28_Snabzhenie_grn() . '</b>';
echo '<br><b>стоимость базовая (нал), грн =' . $L25->O29_StoimostBazovya_grn() . '</b>';
echo '<br>';
echo '<br><b>энергопотребление, вт =' . $L25->O31_Energopotrebleniyevt() . '</b>';
echo '<br><b>вес, кг =' . $L25->O32_Veskg() . '</b>';