<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 27.06.2017
 * Time: 16:32
 */
// Загрузка классов

include_once 'class.10.php';
include_once 'class.18.php';

// инициализация классов

$L10 = new L10();
$L18 = new L18(0, 0, 0, 1, 0, 2);

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
	echo '<br>BG5_TrebovanieDiodov='.$L18->BG5_TrebovanieDiodov();
	echo '<br>BG6_TrebovanieLamp='.$L18->BG6_TrebovanieLamp();
	echo '<br>BG8_DopystimostLamp='.$L18->BG8_DopystimostLamp();
	echo '<br>BG9_DopystimostKlasterov='.$L18->BG9_DopystimostKlasterov();
	echo '<br>BG10_DopystimostLent='.$L18->BG10_DopystimostLent();
	echo '<br>BG11_ObazatelnostLent='.$L18->BG11_ObazatelnostLent();
	echo '<br>BG13_Lampi='.$L18->BG13_Lampi();
	echo '<br>BG14_Klasteri='.$L18->BG14_Klasteri();
	echo '<br>BG15_Lenti='.$L18->BG15_Lenti();
	echo '<br>BJ5_LampiMat_grn='.$L18->BJ5_LampiMat_grn();
	echo '<br>BJ6_KlasteriMat_grn='.$L18->BJ6_KlasteriMat_grn();
	echo '<br>BJ7_StoimostMat_grn='.$L18->BJ7_StoimostMat_grn();
	echo '<br>BJ9_ElektrikaItogo='.$L18->BJ9_ElektrikaItogo();
	echo '<br>BK5_LampiVes_kg='.$L18->BK5_LampiVes_kg();
	echo '<br>BK6_KlasteriVes_kg='.$L18->BK6_KlasteriVes_kg();	
	echo '<br>BK7_LentiVes_kg='.$L18->BK7_LentiVes_kg();
	echo '<br>BK9_ElektrikaItogo='.$L18->BK9_ElektrikaItogo();
	echo '<br>BL5_Lampi_Vt='.$L18->BL5_Lampi_Vt();
	echo '<br>BL6_Klasteri_Vt='.$L18->BL6_Klasteri_Vt();
	echo '<br>BL7_Lenti_Vt='.$L18->BL7_Lenti_Vt();
	echo '<br>BL9_ElektrikaItogo='.$L18->BL9_ElektrikaItogo();
    	echo '<br>BM5_Lampi_min='.$L18->BM5_Lampi_min();
    	echo '<br>BM6_Klasteri_min='.$L18->BM6_Klasteri_min();
    	echo '<br>BM7_Lenti_min='.$L18->BM7_Lenti_min();
    	echo '<br>BM9_ElektrikaItogo='.$L18->BM9_ElektrikaItogo();
    	echo '<br>BO7_BPR='.$L18->BO7_BPR();
    	echo '<br>BO8_BPR='.$L18->BO8_BPR();
    	echo '<br>BO9_BPR='.$L18->BO9_BPR();
    	
	echo '<br>BP9_Diodi='.$L18->BP9_Diodi();
    	

    	echo '<br>BS6_StoimostMaterialov_grn='.$L18->BS6_StoimostMaterialov_grn();
	echo '<br>BS10_TrydoemkostElektrika_min='.$L18->BS10_TrydoemkostElektrika_min();
   	echo '<br>BS11_StoimostRaboty_grn='.$L18->BS11_StoimostRaboty_grn();
	echo '<br>BS20_IstochnikSSveta='.$L18->BS20_IstochnikSSveta();
   	echo '<br>BS21_Energopotreblenie_Vt='.$L18->BS21_Energopotreblenie_Vt();
   	echo '<br>BS22_Ves_kg='.$L18->BS22_Ves_kg();
   	echo '<br>BS24_Itogo_grn='.$L18->BS24_Itogo_grn();


?>
</body>
</html>



