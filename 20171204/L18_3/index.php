<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 03.08.2017
 * Time: 10:06
 */
// Загрузка классов

include_once 'class.10.php';
include_once 'class.18.php';

// инициализация классов

$L10 = new L10();
$L18 = new L18(0, 0, 0, 1, 0, 300, 60);

// HTML код страницы:
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Калькулятор C_Light</title>

</head>
<body>
<?php
// Вывод переменных:
	echo '<br>AO5_Ulica='.$L18->AO5_Ulica();
	echo '<br>AO6_Pomechenie='.$L18->AO6_Pomechenie();
	echo '<br>AO7_2Storoni='.$L18->AO7_2Storoni();
	echo '<br>AO8_4Storoni='.$L18->AO8_4Storoni();
	echo '<br>AO9_1Storona='.$L18->AO9_1Storona();
	echo '<br>AO10_KoeficientYmnogenia='.$L18->AO10_KoeficientYmnogenia();
	echo '<br>AO13_LargeSize_m='.$L18->AO13_LargeSize_m();
	echo '<br>AO14_SmallSize_m='.$L18->AO14_SmallSize_m();
	echo '<br>AO15_PlochadFasada_m2='.$L18->AO15_PlochadFasada_m2();
	echo '<br>AO17_DlinaPolosi_m='.$L18->AO17_DlinaPolosi_m();
	echo '<br>AO18_StoimostPolosi_grn='.$L18->AO18_StoimostPolosi_grn();
	echo '<br>AO19_MochostPolosi_Vt='.$L18->AO19_MochostPolosi_Vt();
	echo '<br>AO20_PotreblTok_A='.$L18->AO20_PotreblTok_A();
	echo '<br>AO21_MinMoshonostBP_Vt='.$L18->AO21_MinMoshonostBP_Vt();
	echo '<br>AO23_VesPolosi_kg='.$L18->AO23_VesPolosi_kg();	
	echo '<br>AO25_KabelSegment_mp='.$L18->AO25_KabelSegment_mp();
	echo '<br>AO26_KabelSegment_grn='.$L18->AO26_KabelSegment_grn();
	echo '<br>AO28_KabelBlochni_mp='.$L18->AO28_KabelBlochni_mp();
	echo '<br>AO29_KabelBlochni_grn='.$L18->AO29_KabelBlochni_grn();
	echo '<br>AO30_KabelItogo_grn='.$L18->AO30_KabelItogo_grn();

	echo '<br>AQ6_1PodborBPIP20='.$L18->AQ6_1PodborBPIP20();
    	echo '<br>AQ7_2PodborBPIP20='.$L18->AQ7_2PodborBPIP20();
    	echo '<br>AQ8_3PodborBPIP20='.$L18->AQ8_3PodborBPIP20();
    	echo '<br>AQ9_4PodborBPIP20='.$L18->AQ9_4PodborBPIP20();
    	echo '<br>AQ10_5PodborBPIP20='.$L18->AQ10_5PodborBPIP20();
    	echo '<br>AQ11_6PodborBPIP20='.$L18->AQ11_6PodborBPIP20();
    	echo '<br>AQ12_7PodborBPIP20='.$L18->AQ12_7PodborBPIP20();
    	echo '<br>AQ13_8PodborBPIP20='.$L18->AQ13_8PodborBPIP20();
    	echo '<br>AQ14_9PodborBPIP20='.$L18->AQ14_9PodborBPIP20();
    	echo '<br>AQ15_10PodborBPIP20='.$L18->AQ15_10PodborBPIP20();
   	echo '<br>AQ16_11PodborBPIP20='.$L18->AQ16_11PodborBPIP20();

    	echo '<br>AS6_1Stoimost='.$L18->AS6_1Stoimost();
    	echo '<br>AS7_2Stoimost='.$L18->AS7_2Stoimost();
    	echo '<br>AS8_3Stoimost='.$L18->AS8_3Stoimost();
    	echo '<br>AS9_4Stoimost='.$L18->AS9_4Stoimost();
   	echo '<br>AS10_5Stoimost='.$L18->AS10_5Stoimost();
   	echo '<br>AS11_6Stoimost='.$L18->AS11_6Stoimost();
    	echo '<br>AS12_7Stoimost='.$L18->AS12_7Stoimost();
    	echo '<br>AS13_8Stoimost='.$L18->AS13_8Stoimost();
    	echo '<br>AS14_9Stoimost='.$L18->AS14_9Stoimost();
   	echo '<br>AS15_10Stoimost='.$L18->AS15_10Stoimost();
    	echo '<br>AS16_11Stoimost='.$L18->AS16_11Stoimost();

   	echo '<br>AT6_1Ves='.$L18->AT6_1Ves();
    	echo '<br>AT7_2Ves='.$L18->AT7_2Ves();
    	echo '<br>AT8_3Ves='.$L18->AT8_3Ves();
    	echo '<br>AT9_4Ves='.$L18->AT9_4Ves();
   	echo '<br>AT10_5Ves='.$L18->AT10_5Ves();
    	echo '<br>AT11_6Ves='.$L18->AT11_6Ves();
    	echo '<br>AT12_7Ves='.$L18->AT12_7Ves();
    	echo '<br>AT13_8Ves='.$L18->AT13_8Ves();
    	echo '<br>AT14_9Ves='.$L18->AT14_9Ves();
    	echo '<br>AT15_10Ves='.$L18->AT15_10Ves();
    	echo '<br>AT16_11Ves='.$L18->AT16_11Ves();

   	echo '<br>AS18_KabelItogo_grn='.$L18->AS18_KabelItogo_grn();
    	echo '<br>AT18_2ItogoBPBezGarantii='.$L18->AT18_2ItogoBPBezGarantii();
    	echo '<br>AS19_BPSGarantiei_grn='.$L18->AS19_BPSGarantiei_grn();

	echo '<br>AS21_MaterialiItogo_grn='.$L18->AS21_MaterialiItogo_grn();

   	echo '<br>AW5_MontagKlasterov_min='.$L18->AW5_MontagKlasterov_min();
   	echo '<br>AW6_MontagBP_min='.$L18->AW6_MontagBP_min();
	echo '<br>AW8_MontagElektriki_min='.$L18->AW8_MontagElektriki_min();

    	echo '<br>AZ6_StoimostMaterialov_grn='.$L18->AZ6_StoimostMaterialov_grn();
	echo '<br>AZ10_TrydoemkostKlaster_min='.$L18->AZ10_TrydoemkostKlaster_min();
   	echo '<br>AZ11_StoimostMaterialov_grn='.$L18->AZ11_StoimostMaterialov_grn();
   	echo '<br>AZ21_Energopotreblenie_Vt='.$L18->AZ21_Energopotreblenie_Vt();
   	echo '<br>AZ22_Ves_kg='.$L18->AZ22_Ves_kg();
   	echo '<br>AZ24_Itogo_grn='.$L18->AZ24_Itogo_grn();


?>
</body>
</html>



