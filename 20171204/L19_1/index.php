<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 06.10.2017
 * Time: 20:27
 */
// Загрузка классов

include_once 'class.10.php';
include_once 'class.19.php';

// инициализация классов

$L10 = new L10();
$L18 = new L18(300, 60, 1, 0, 0);

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
	echo '<br>E5_TrebovanieLamp='.$L18->E5_TrebovanieLamp();
	echo '<br>E6_PlenkaBort='.$L18->E6_PlenkaBort();
	echo '<br>E7_PlenkaTil='.$L18->E7_PlenkaTil();
	echo '<br>E8_PlenkaVizdelii='.$L18->E8_PlenkaVizdelii();

	echo '<br>H5_BigStor_m='.$L18->H5_BigStor_m();
	echo '<br>H6_SmallStor_m='.$L18->H6_SmallStor_m();
	echo '<br>H8_Stoimost1StandarntoiPoezdki_grn='.$L18->H8_Stoimost1StandarntoiPoezdki_grn();
	echo '<br>H11_PlochadStandart_m2='.$L18->H11_PlochadStandart_m2();
	echo '<br>H12_PlochadViveski_m2='.$L18->H12_PlochadViveski_m2();
	echo '<br>H13_PlochadEkvivalentna_m2='.$L18->H13_PlochadEkvivalentna_m2();
	echo '<br>H14_KoefPloshadnoj='.$L18->H14_KoefPloshadnoj();
	echo '<br>H16_RashodiNaMashStand_grn='.$L18->H16_RashodiNaMashStand_grn();
	echo '<br>H17_RashodiNaMashPlenka_grn='.$L18->H17_RashodiNaMashPlenka_grn();
	echo '<br>H18_RashodiNaMashEkv_grn='.$L18->H18_RashodiNaMashEkv_grn();
	echo '<br>H20_DostavkaListovixMater_grn='.$L18->H20_DostavkaListovixMater_grn();
	
	echo '<br>K5_TrydoemkostStandart_min='.$L18->K5_TrydoemkostStandart_min();
	echo '<br>K6_TrydoemkostPlenka_min='.$L18->K6_TrydoemkostPlenka_min();
	echo '<br>K7_RashodiNaMashEkv_grn='.$L18->K7_RashodiNaMashEkv_grn();

	echo '<br>N6_RashodiNaTransport_grn='.$L18->N6_RashodiNaTransport_grn();
	echo '<br>N10_TrydoemkostSnabjenia_min='.$L18->N10_TrydoemkostSnabjenia_min();
	echo '<br>N11_StoimostRabot_grn='.$L18->N11_StoimostRabot_grn();
    	echo '<br>N24_Itogo_grn='.$L18->N24_Itogo_grn();
    


?>
</body>
</html>



