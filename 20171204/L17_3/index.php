<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: Anrew
 * Date: 27.07.2017
 * Time: 10:48
 */
// Загрузка классов
include_once 'class.09.php';
include_once 'class.10.php';
include_once 'class.17.php';

// инициализация классов
$L09 = new L09();
$L10 = new L10();
$L17 = new L17(1, 1, 300, 60, 2);

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
echo '<br>AM5_TrebNerazb='.$L17->AM5_TrebNerazb();
echo '<br>AM6_DopustNerazb='.$L17->AM6_DopustNerazb();
echo '<br>AM7_NerazbItogo='.$L17->AM7_NerazbItogo();
echo '<br>AM8_RazbItogo='.$L17->AM8_RazbItogo();
echo '<br>AM11_Rama4Ugolka='.$L17->AM11_Rama4Ugolka();
echo '<br>AM12_Rama40x20mm='.$L17->AM12_Rama40x20mm();
echo '<br>AM13_Rama20x20mm='.$L17->AM13_Rama20x20mm();

echo '<br>AP5_BolshRazm='.$L17->AP5_BolshRazm();
echo '<br>AP6_MenshRazm='.$L17->AP6_MenshRazm();
echo '<br>AP7_GorRazm='.$L17->AP7_GorRazm();
echo '<br>AP8_VertRazm='.$L17->AP8_VertRazm();
echo '<br>AP10_TrubaBlack20201mpgrn='.$L17->AP10_TrubaBlack20201mpgrn();
echo '<br>AQ10_TrubaBlack20201mpgrn='.$L17->AQ10_TrubaBlack20201mpgrn();
echo '<br>AP11_TrubaBlack40401mpgrn='.$L17->AP11_TrubaBlack40401mpgrn();
echo '<br>AQ11_TrubaBlack40401mpgrn='.$L17->AQ11_TrubaBlack40401mpgrn();
echo '<br>AP12_PererashTrubaBlack='.$L17->AP12_PererashTrubaBlack();
echo '<br>AP13_UgolAL15151mp='.$L17->AP13_UgolAL15151mp();
echo '<br>AQ13_UgolAL15151mp='.$L17->AQ13_UgolAL15151mp();
echo '<br>AP14_PererashUgolAL='.$L17->AP14_PererashUgolAL();
echo '<br>AP15_BoltM8PlusGaika='.$L17->AP15_BoltM8PlusGaika();
echo '<br>AQ15_BoltM8PlusGaika='.$L17->AQ15_BoltM8PlusGaika();
echo '<br>AP16_SamorezBlack1shtgrn='.$L17->AP16_SamorezBlack1shtgrn();
echo '<br>AP17_SamorezCinkBur1shtgrn='.$L17->AP17_SamorezCinkBur1shtgrn();
echo '<br>AP18_RashSamorezNa1mpsht='.$L17->AP18_RashSamorezNa1mpsht();
echo '<br>AP19_Kronsht4x41shtgrn='.$L17->AP19_Kronsht4x41shtgrn();
echo '<br>AQ19_Kronsht4x41shtgrn='.$L17->AQ19_Kronsht4x41shtgrn();
echo '<br>AP20_Kraska1lgrn='.$L17->AP20_Kraska1lgrn();
echo '<br>AP21_KleyPVH1mpgrn='.$L17->AP21_KleyPVH1mpgrn();
echo '<br>AP24_Kleygrn='.$L17->AP24_Kleygrn();
echo '<br>AP26_UgolALgrn='.$L17->AP26_UgolALgrn();
echo '<br>AQ26_UgolALgrn='.$L17->AQ26_UgolALgrn();
echo '<br>AP27_Samorez1VertLinsht='.$L17->AP27_Samorez1VertLinsht();
echo '<br>AP28_SamorezVUgolALsht='.$L17->AP28_SamorezVUgolALsht();
echo '<br>AP29_SamorezVUgolALgrn='.$L17->AP29_SamorezVUgolALgrn();
echo '<br>AP30_MatUgolALItogogrn='.$L17->AP30_MatUgolALItogogrn();
echo '<br>AQ30_MatUgolALItogogrn='.$L17->AQ30_MatUgolALItogogrn();
echo '<br>AP32_Kronsht4x4grn='.$L17->AP32_Kronsht4x4grn();
echo '<br>AQ32_Kronsht4x4grn='.$L17->AQ32_Kronsht4x4grn();
echo '<br>AP33_SamorezDlKronsht4x4grn='.$L17->AP33_SamorezDlKronsht4x4grn();
echo '<br>AP34_MatKronsht4x4Itogogrn='.$L17->AP34_MatKronsht4x4Itogogrn();
echo '<br>AQ34_MatKronsht4x4Itogogrn='.$L17->AQ34_MatKronsht4x4Itogogrn();
echo '<br>AP36_TrubaBlack2020mp='.$L17->AP36_TrubaBlack2020mp();
echo '<br>AQ36_TrubaBlack2020mp='.$L17->AQ36_TrubaBlack2020mp();
echo '<br>AP37_TrubaBlack2020grn='.$L17->AP37_TrubaBlack2020grn();
echo '<br>AP38_BoltM8x50PlusGaikagrn='.$L17->AP38_BoltM8x50PlusGaikagrn();
echo '<br>AQ38_BoltM8x50PlusGaikagrn='.$L17->AQ38_BoltM8x50PlusGaikagrn();
echo '<br>AP39_LKMlitr='.$L17->AP39_LKMlitr();
echo '<br>AP40_LKMgrn='.$L17->AP40_LKMgrn();
echo '<br>AP41_Samorezsht='.$L17->AP41_Samorezsht();
echo '<br>AP42_Samorezgrn='.$L17->AP42_Samorezgrn();
echo '<br>AP43_MatTruba2020Itogogrn='.$L17->AP43_MatTruba2020Itogogrn();
echo '<br>AQ43_MatTruba2020Itogogrn='.$L17->AQ43_MatTruba2020Itogogrn();
echo '<br>AP45_TrubaBlack4020mp='.$L17->AP45_TrubaBlack4020mp();
echo '<br>AQ45_TrubaBlack4020mp='.$L17->AQ45_TrubaBlack4020mp();
echo '<br>AP46_TrubaBlack2020grn='.$L17->AP46_TrubaBlack2020grn();
echo '<br>AP47_BoltM8x50PlusGaikagrn='.$L17->AP47_BoltM8x50PlusGaikagrn();
echo '<br>AQ47_BoltM8x50PlusGaikagrn='.$L17->AQ47_BoltM8x50PlusGaikagrn();
echo '<br>AP48_LKMlitr='.$L17->AP48_LKMlitr();
echo '<br>AP49_LKMgrn='.$L17->AP49_LKMgrn();
echo '<br>AP50_Samorezsht='.$L17->AP50_Samorezsht();
echo '<br>AP51_Samorezgrn='.$L17->AP51_Samorezgrn();
echo '<br>AP52_MatTruba4020Itogogrn='.$L17->AP52_MatTruba4020Itogogrn();
echo '<br>AQ52_MatTruba4020Itogogrn='.$L17->AQ52_MatTruba4020Itogogrn();
echo '<br>AP54_MatVivesNerazbgrn='.$L17->AP54_MatVivesNerazbgrn();
echo '<br>AQ54_MatVivesNerazbgrn='.$L17->AQ54_MatVivesNerazbgrn();
echo '<br>AP55_MatVivesRazbDo1mgrn='.$L17->AP55_MatVivesRazbDo1mgrn();
echo '<br>AQ55_MatVivesRazbDo1mgrn='.$L17->AQ55_MatVivesRazbDo1mgrn();
echo '<br>AP56_MatVivesOt1mDo2mgrn='.$L17->AP56_MatVivesOt1mDo2mgrn();
echo '<br>AQ56_MatVivesOt1mDo2mgrn='.$L17->AQ56_MatVivesOt1mDo2mgrn();
echo '<br>AP57_MatVivesOt2mDo3mgrn='.$L17->AP57_MatVivesOt2mDo3mgrn();
echo '<br>AQ57_MatVivesOt2mDo3mgrn='.$L17->AQ57_MatVivesOt2mDo3mgrn();
echo '<br>AP59_MatVivesItogogrn='.$L17->AP59_MatVivesItogogrn();
echo '<br>AQ59_MatVivesItogogrn='.$L17->AQ59_MatVivesItogogrn();

echo '<br>AT5_VkrutSamorez1shtmin='.$L17->AT5_VkrutSamorez1shtmin();
echo '<br>AT6_SverlitOtvDo5mmmin='.$L17->AT6_SverlitOtvDo5mmmin();
echo '<br>AT7_SverlitOtvBol5mmmin='.$L17->AT7_SverlitOtvBol5mmmin();
echo '<br>AT8_PrirezALProf1sht='.$L17->AT8_PrirezALProf1sht();
echo '<br>AT10_Skl1mp1Ugol4StorVivmin='.$L17->AT10_Skl1mp1Ugol4StorVivmin();
echo '<br>AT11_Skl1Ugol4StorVivmin='.$L17->AT11_Skl1Ugol4StorVivmin();
echo '<br>AT13_Skl1Ugolmin='.$L17->AT13_Skl1Ugolmin();
echo '<br>AT14_Skl1UgolItogomin='.$L17->AT14_Skl1UgolItogomin();
echo '<br>AT17_Prirez4ALProfmin='.$L17->AT17_Prirez4ALProfmin();
echo '<br>AT18_Prosv4ALProfmin='.$L17->AT18_Prosv4ALProfmin();
echo '<br>AT19_ProkrOtkr4ALProfmin='.$L17->AT19_ProkrOtkr4ALProfmin();
echo '<br>AT20_SobrRazb4ALProfmin='.$L17->AT20_SobrRazb4ALProfmin();
echo '<br>AT22_SobrRazb4Kronshtmin='.$L17->AT22_SobrRazb4Kronshtmin();
echo '<br>AT24_IzgotSobrRazbRama2020min='.$L17->AT24_IzgotSobrRazbRama2020min();
echo '<br>AT26_IzgotSobrRazbRama4040min='.$L17->AT26_IzgotSobrRazbRama4040min();
echo '<br>AT28_VivNerazbSobrmin='.$L17->AT28_VivNerazbSobrmin();
echo '<br>AT29_RamaDlyaVivRazbDo1mmin='.$L17->AT29_RamaDlyaVivRazbDo1mmin();
echo '<br>AT30_RamaOt1mDo2mmin='.$L17->AT30_RamaOt1mDo2mmin();
echo '<br>AT31_RamaOt2mDo3mmin='.$L17->AT31_RamaOt2mDo3mmin();
echo '<br>AT33_RamaPlusSborRazbItogomin='.$L17->AT33_RamaPlusSborRazbItogomin();

echo '<br>AW6_StoimMatgrn='.$L17->AW6_StoimMatgrn();
echo '<br>AW7_Konstrukt='.$L17->AW7_Konstrukt();
echo '<br>AW10_TrudRamaVneshgrn='.$L17->AW10_TrudRamaVneshgrn();
echo '<br>AW11_StoimRabgrn='.$L17->AW11_StoimRabgrn();
echo '<br>AW22_Veskg='.$L17->AW22_Veskg();
echo '<br>AW24_Itogogrn='.$L17->AW24_Itogogrn();

?>
</body>
</html>



