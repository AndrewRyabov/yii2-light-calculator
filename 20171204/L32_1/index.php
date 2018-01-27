<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 05.11.2017
 * Time: 16:55
 */
// Загрузка классов

include_once 'class.10.php';
include_once 'class.32.php';

// инициализация классов

$L10 = new L10();
$L32 = new L32(3.05, 0.65, 0.24, 1,  2.05, 0.85, 0.85, 2, 1.75, 0.55, 0.48, 1);

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
	echo '<br>F5_Poz1Obem_m3='.$L32->F5_Poz1Obem_m3();
echo '<br>F6_FlagDoblo120sm_poz1='.$L32->F6_FlagDoblo120sm_poz1();
echo '<br>F10_Poz2Obem_m3='.$L32->F10_Poz2Obem_m3();
echo '<br>F11_FlagDoblo120sm_poz2='.$L32->F11_FlagDoblo120sm_poz2();
echo '<br>F15_Poz3Obem_m3='.$L32->F15_Poz3Obem_m3();
echo '<br>F16_FlagDoblo120sm_poz3='.$L32->F16_FlagDoblo120sm_poz3();
echo '<br>I5_KolichectvoPosilok_sht='.$L32->I5_KolichectvoPosilok_sht();
echo '<br>I6_ObchiiObemposilok_m3='.$L32->I6_ObchiiObemposilok_m3();
echo '<br>I7_Stoim1ReisaDoblo_grn='.$L32->I7_Stoim1ReisaDoblo_grn();
echo '<br>I8_Stoim1ReisaGazel_grn='.$L32->I8_Stoim1ReisaGazel_grn();
echo '<br>I9_PremiaGazel_grn='.$L32->I9_PremiaGazel_grn();
echo '<br>I11_PremiaGazel_grn='.$L32->I11_PremiaGazel_grn();
echo '<br>I12_Stoim1ProbegaDoblo_grn='.$L32->I12_Stoim1ProbegaDoblo_grn();
echo '<br>I13_Stoim1ProbegaGazel_grn='.$L32->I13_Stoim1ProbegaGazel_grn();
echo '<br>I15_MaterialiDobloItogo_grn='.$L32->I15_MaterialiDobloItogo_grn();
echo '<br>I16_MaterialiGazelItogo_grn='.$L32->I16_MaterialiGazelItogo_grn();
echo '<br>L5_ReisDoblo1_min='.$L32->L5_ReisDoblo1_min();
echo '<br>L6_ZagrOformVigZa1Reis_min='.$L32->L6_ZagrOformVigZa1Reis_min();
echo '<br>L8_TrydDoblo1Reis_min='.$L32->L8_TrydDoblo1Reis_min();
echo '<br>L9_TrydDoblo1Reis_grn='.$L32->L9_TrydDoblo1Reis_grn();
echo '<br>O5_ZatratiDobloItogo_grn='.$L32->O5_ZatratiDobloItogo_grn();
echo '<br>O6_ZatrtiGazelItogo_grn='.$L32->O6_ZatrtiGazelItogo_grn();
echo '<br>O8_ObjemZakazaItogo_m3='.$L32->O8_ObjemZakazaItogo_m3();
echo '<br>O9_FlagDoblo120sm='.$L32->O9_FlagDoblo120sm();
echo '<br>O10_FlagDoblo2tochka5m3='.$L32->O10_FlagDoblo2tochka5m3();
echo '<br>O11_FlagDobloItogo='.$L32->O11_FlagDobloItogo();
echo '<br>O12_FlagGazel='.$L32->O12_FlagGazel();
echo '<br>O19_ZatratiDobloItogo_grn='.$L32->O19_ZatratiDobloItogo_grn();
echo '<br>O20_ZatratiGazelItogo_grn='.$L32->O20_ZatratiGazelItogo_grn();
echo '<br>O21_DostavkaKNPItogo_grn='.$L32->O21_DostavkaKNPItogo_grn();
echo '<br>R20_ObjemZakazaItogo_m3='.$L32->R20_ObjemZakazaItogo_m3();
echo '<br>R21_FlagDoblo='.$L32->R21_FlagDoblo();
echo '<br>R31_DostavkaZakazaKNPNal_grn='.$L32->R31_DostavkaZakazaKNPNal_grn();




?>
</body>
</html>



