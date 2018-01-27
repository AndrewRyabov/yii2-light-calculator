<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 16.10.2017
 * Time: 19:41
 */
// Загрузка классов

include_once 'class.10.php';
include_once 'class.19.php';

// инициализация классов

$L10 = new L10();
$L19 = new L19(0, 0, 0, 1, 0, 1, 300, 60, 2, 3.4, 4.8, 0, 3.8, 0, 2.2, 14.2, 7.1);

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
	echo '<br>X5_BigStor_m='.$L19->X5_BigStor_m();
echo '<br>X6_SmallStor_m='.$L19->X6_SmallStor_m();
echo '<br>X7_GorizontalnyaStorona_m='.$L19->X7_GorizontalnyaStorona_m();
echo '<br>X8_VertykalnyaStorona_m='.$L19->X8_VertykalnyaStorona_m();
echo '<br>U5_PodvesiTros2Tochki='.$L19->U5_PodvesiTros2Tochki();
echo '<br>U6_PodvesiTros4Tochki='.$L19->U6_PodvesiTros4Tochki();
echo '<br>U7_PodvesiDla1Storoni='.$L19->U7_PodvesiDla1Storoni();
echo '<br>U9_IzpolsyetsTilPVX4mm='.$L19->U9_IzpolsyetsTilPVX4mm();
echo '<br>U10_IzpolsyetsTilPVX3mm='.$L19->U10_IzpolsyetsTilPVX3mm();
echo '<br>U11_IzpolsyetsTilDVP='.$L19->U11_IzpolsyetsTilDVP();
echo '<br>U13_PVX4mmUsilenii='.$L19->U13_PVX4mmUsilenii();
echo '<br>U14_PVX3mmUsilenii='.$L19->U14_PVX3mmUsilenii();
echo '<br>U15_DVPUsilenii='.$L19->U15_DVPUsilenii();
echo '<br>U17_PodvesUsileniiVes='.$L19->U17_PodvesUsileniiVes();
echo '<br>U18_PodvesLegkiiVes='.$L19->U18_PodvesLegkiiVes();
echo '<br>U20_VertRazmerBoleeGraniciLegkUsil='.$L19-> U20_VertRazmerBoleeGraniciLegkUsil();
echo '<br>U21_VertRazmerMeneeGraniciLegkUsil='.$L19->U21_VertRazmerMeneeGraniciLegkUsil();
echo '<br>U23_PodvwsYsilenniUlica='.$L19->U23_PodvwsYsilenniUlica();
echo '<br>U24_PodvwsLegkiiUlica='.$L19->U24_PodvwsLegkiiUlica();
echo '<br>X10_Profil123012_1mp_grn='.$L19->X10_Profil123012_1mp_grn();
echo '<br>X11_PerarsxodProfil1a23012='.$L19->X11_PerarsxodProfil1a23012();
echo '<br>X12_Samorez_1shtuka_grn='.$L19->X12_Samorez_1shtuka_grn();
echo '<br>X13_PVX5mm_1m2_grn='.$L19->X13_PVX5mm_1m2_grn();
echo '<br>X14_KleiPVX5mm_1mp_grn='.$L19->X14_KleiPVX5mm_1mp_grn();
echo '<br>X15_Uxo_1shtuka_grn='.$L19->X15_Uxo_1shtuka_grn();
echo '<br>X16_Koush_1shtuka_grn='.$L19->X16_Koush_1shtuka_grn();
echo '<br>X17_ZachimDlaTrosa_1shtuka_grn='.$L19->X17_ZachimDlaTrosa_1shtuka_grn();
echo '<br>X18_TrosStalnoi1mp_grn='.$L19->X18_TrosStalnoi1mp_grn();
echo '<br>X19_BoltKruk_grn='.$L19->X19_BoltKruk_grn();
echo '<br>X21_PVXYsiletelPlusKlei_grn='.$L19->X21_PVXYsiletelPlusKlei_grn();
echo '<br>X22_12na13na12Dla1Podvesa_grn='.$L19->X22_12na13na12Dla1Podvesa_grn();
echo '<br>X23_KolCamorVYsilPodvese_shtuk='.$L19->X23_KolCamorVYsilPodvese_shtuk();
echo '<br>X25_2LegkixPodvesa_grn='.$L19->X25_2LegkixPodvesa_grn();
echo '<br>X26_2YsilenixPodvesa_grn='.$L19->X26_2YsilenixPodvesa_grn();
echo '<br>X27_Tros2Tochki_grn='.$L19->X27_Tros2Tochki_grn();
echo '<br>X28_Tros4Tochki_grn='.$L19->X28_Tros4Tochki_grn();
echo '<br>X30_TrosStalnoi1mp_grn='.$L19->X30_TrosStalnoi1mp_grn();
echo '<br>X31_StenaUlica_grn='.$L19->X31_StenaUlica_grn();
echo '<br>X31_StenaUlica_grn='.$L19->X31_StenaUlica_grn();
echo '<br>X33_2StoroniPomechenia_grn='.$L19->X33_2StoroniPomechenia_grn();
echo '<br>X34_4StoroniPomechenia_grn='.$L19->X34_4StoroniPomechenia_grn();
echo '<br>X35_4StoroniPomechenia_grn='.$L19->X35_4StoroniPomechenia_grn();
echo '<br>Y10_Profil123012_1mp_grn='.$L19->Y10_Profil123012_1mp_grn();
echo '<br>Y13_PVX5mm1m2_grn='.$L19->Y13_PVX5mm1m2_grn();
echo '<br>Y15_BoltKruk_grn='.$L19->Y15_BoltKruk_grn();
echo '<br>Y19_Yxo1shtuk_grn='.$L19->Y19_Yxo1shtuk_grn();
echo '<br>Y25_2LegkixPodvesa_grn='.$L19->Y25_2LegkixPodvesa_grn();
echo '<br>Y26_2YsilennixPodvesa_grn='.$L19->Y26_2YsilennixPodvesa_grn();
echo '<br>Y27_Tros2Tochki_grn='.$L19->Y27_Tros2Tochki_grn();
echo '<br>Y28_Tros4Tochki_grn='.$L19->Y28_Tros4Tochki_grn();
echo '<br>Y30_RoofViserOut_grn='.$L19->Y30_RoofViserOut_grn();
echo '<br>Y31_RoofOut_grn='.$L19->Y31_RoofOut_grn();
echo '<br>Y32_RoofIn_grn='.$L19->Y32_RoofIn_grn();
echo '<br>Y33_2RoofIn_grn='.$L19->Y33_2RoofIn_grn();
echo '<br>Y34_4RoofIn_grn='.$L19->Y34_4RoofIn_grn();
echo '<br>Y35_PodvesiMaterialiItogo_grn='.$L19->Y35_PodvesiMaterialiItogo_grn();
echo '<br>AB5_PrirezatProfil_min='.$L19->AB5_PrirezatProfil_min();
echo '<br>AB6_PrirezatTros_min='.$L19->AB6_PrirezatTros_min();
echo '<br>AB7_ZakrytitSamorez_min='.$L19->AB7_ZakrytitSamorez_min();
echo '<br>AB8_ZakrytitSamorez_min='.$L19->AB8_ZakrytitSamorez_min();
echo '<br>AB9_Montag1PodvesaYsilenogo_min='.$L19->AB9_Montag1PodvesaYsilenogo_min();
echo '<br>AB10_Montag1BoltKrukI2Zagima_min='.$L19->AB10_Montag1BoltKrukI2Zagima_min();
echo '<br>AB11_Montag2Zagimov_min='.$L19->AB11_Montag2Zagimov_min();
echo '<br>AB15_2PodvesaLegkix_grn='.$L19->AB15_2PodvesaLegkix_grn();
echo '<br>AB16_2PodvesaYsilennix_grn='.$L19->AB16_2PodvesaYsilennix_grn();
echo '<br>AB17_2Trosa_min='.$L19->AB17_2Trosa_min();
echo '<br>AB18_4Trosa_min='.$L19->AB18_4Trosa_min();
echo '<br>AB20_RoofViser_grn='.$L19->AB20_RoofViser_grn();
echo '<br>AB21_RoofOut_min='.$L19->AB21_RoofOut_min();
echo '<br>AB22_RoofIn_min='.$L19->AB22_RoofIn_min();
echo '<br>AB23_2RoofIn_grn='.$L19->AB23_2RoofIn_grn();
echo '<br>AB24_4RoofIn_grn='.$L19->AB24_4RoofIn_grn();
echo '<br>AB25_PodvesiRabotaItogo_grn='.$L19->AB25_PodvesiRabotaItogo_grn();
echo '<br>AE6_RashodiNaTransport_grn='.$L19->AE6_RashodiNaTransport_grn();
echo '<br>AE10_TrydoemkostPodvesa_min='.$L19->AE10_TrydoemkostPodvesa_min();
echo '<br>AE11_StoimostRabot_grn='.$L19->AE11_StoimostRabot_grn();
echo '<br>AE22_VesPodvesov_kg='.$L19->AE22_VesPodvesov_kg();
echo '<br>AE24_Itogo_grn='.$L19->AE24_Itogo_grn();


?>
</body>
</html>



