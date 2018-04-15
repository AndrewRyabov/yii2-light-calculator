<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.03.18
 * Time: 17:05
 */

echo '<b>Входные_параметры:</b>';
echo '<br>крыша/козырек улица =' . $L19_2->R5_RoofViserOut;
echo '<br>стена улица =' . $L19_2->R6_RoofOut;
echo '<br>стена помещение =' . $L19_2->R7_RoofIn;
echo '<br>2 стороны помещение =' . $L19_2->R8_2RoofIn;
echo '<br>4 стороны помещение =' . $L19_2->R9_4RoofIn;
echo '<br>';
echo '<br>ориентация =' . $L19_2->R11_Orient;
echo '<br>Большая сторона =' . $L19_2->R12_BigStor;
echo '<br>Меньшая сторона =' . $L19_2->R13_SmallStor;
echo '<br>источник света =' . $L19_2->R14_IstochnikSveta;
echo '<br>';
echo '<br>фасад, кг =' . $L19_2->R21_Fasad_kg;
echo '<br>борт, кг =' . $L19_2->R22_Bort_kg;
echo '<br>тыл, кг =' . $L19_2->R23_Til_kg;
echo '<br>рама внутренняя, кг =' . $L19_2->R24_RamaVnytrenia_kg;
echo '<br>опоры лицев пласт, кг =' . $L19_2->R25_OporiLicevPlast_kg;
echo '<br>электрика, кг =' . $L19_2->R26_Electrika_kg;
echo '<br>итого предв вес, кг =' . $L19_2->R27_ItogoPredvVes_kg;
echo '<br>итого предв вес 1 линия, кг =' . $L19_2->R28_ItogoPredvVes1Linia_kg;

//
echo '<hr><b>Выходная величина:</b>';
echo '<br>Материалы, подвесы, грн=' . $L19_2->AE6_MaterialiPodvesi_grn();
echo '<br>';
echo '<br>Трудоёмкость подвесы, мин =' . $L19_2->AE10_TrydoemkostPodvesi_min();
echo '<br>Стоимость работы, грн =' . $L19_2->AE11_StoimostRabot_grn();
echo '<br>';
echo '<br><b>Вес подвесов, кг =' . $L19_2->AE22_VesPodvesov_kg();
echo '<br>';
echo '<br><b>Итого, грн =' . $L19_2->AE24_Itogo_grn();