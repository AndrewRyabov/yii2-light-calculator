﻿<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 07.06.2017
 * Time: 2:24
 */
// Загрузка классов
include_once 'class.09.php';
include_once 'class.10.php';
include_once 'class.15.php';

// инициализация классов
$L09 = new L09();
$L10 = new L10();
$L15 = new L15(0, 1, 0, 0, 0, 300, 60, 1, 1, 3);

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

echo '<br>U5_1Storona='.$L15->U5_1Storona();
echo '<br>U6_2Storony='.$L15->U6_2Storony();
echo '<br>U7_4Storony='.$L15->U7_4Storony();
echo '<br>U9_PlenkaFasadEst='.$L15->U9_PlenkaFasadEst();
echo '<br>U10_DesignCreate='.$L15->U10_DesignCreate();
echo '<br>U11_DesignCheck='.$L15->U11_DesignCheck();
echo '<br>U13_FullColorPhoto='.$L15->U13_FullColorPhoto();
echo '<br>U14_FullColorPhotoPlusLamin='.$L15->U14_FullColorPhotoPlusLamin();
echo '<br>U15_FullColor720='.$L15->U15_FullColor720();
echo '<br>U16_FullColor720PlusLamin='.$L15->U16_FullColor720PlusLamin();
echo '<br>U17_EconWhitePlusApplication='.$L15->U17_EconWhitePlusApplication();
echo '<br>U18_EconWhitePlusProrez='.$L15->U18_EconWhitePlusProrez();
echo '<br>U19_EconColorfullPlusApp='.$L15->U19_EconColorfullPlusApp();
echo '<br>U20_LWhitePlusApp='.$L15->U20_LWhitePlusApp();
echo '<br>U21_LColorfullPlusProrez='.$L15->U21_LColorfullPlusProrez();
echo '<br>U22_LColorfullPlusApp='.$L15->U22_LColorfullPlusApp();
echo '<br>U24_FasadColorfullPlenka='.$L15->U24_FasadColorfullPlenka();
echo '<br>U26_Svetorass='.$L15->U26_Svetorass();
echo '<br>U27_KUdorojLRitrama='.$L15->U27_KUdorojLRitrama();
echo '<br>U29_BolshStorNeBol30cm='.$L15->U29_BolshStorNeBol30cm();
echo '<br>U30_BolshStorBol60cm='.$L15->U30_BolshStorBol60cm();
echo '<br>U31_BolshStorNeBol60cm='.$L15->U31_BolshStorNeBol60cm();
echo '<br>U32_BolshBol60cmAndMen120cm='.$L15->U32_BolshBol60cmAndMen120cm();
echo '<br>U33_BolshStorNeBol120cm='.$L15->U33_BolshStorNeBol120cm();
echo '<br>U34_BolshStorBol120cm='.$L15->U34_BolshStorBol120cm();
echo '<br>U35_MenshStorNeBol60cm='.$L15->U35_MenshStorNeBol60cm();
echo '<br>U36_MenshStorBol60cm='.$L15->U36_MenshStorBol60cm();
echo '<br>U37_BolshBol120cmMenshMen60cm='.$L15->U37_BolshBol120cmMenshMen60cm();
echo '<br>U38_BolshBol120cmMenshBol60cm='.$L15->U38_BolshBol120cmMenshBol60cm();
echo '<br>X5_BolshStorm='.$L15->X5_BolshStorm();
echo '<br>X6_MenshStorm='.$L15->X6_MenshStorm();
echo '<br>X8_KolFasadov='.$L15->X8_KolFasadov();
echo '<br>X9_PloshFasadam2='.$L15->X9_PloshFasadam2();
echo '<br>X10_PloshAllFasadovm2='.$L15->X10_PloshAllFasadovm2();
echo '<br>X11_RaschPFasadDlTrudm2='.$L15->X11_RaschPFasadDlTrudm2();
echo '<br>X12_PlenkaDlAppm2='.$L15->X12_PlenkaDlAppm2();
echo '<br>X13_PlenkaDlAppgrn='.$L15->X13_PlenkaDlAppgrn();
echo '<br>X14_PerimetrIzobrmp='.$L15->X14_PerimetrIzobrmp();
echo '<br>X15_DlinaResamp='.$L15->X15_DlinaResamp();
echo '<br>X16_StoimRezamp='.$L15->X16_StoimRezamp();
echo '<br>X17_PlenkaMontajm2='.$L15->X17_PlenkaMontajm2();
echo '<br>X18_PlenkaMontajgrn='.$L15->X18_PlenkaMontajgrn();
echo '<br>X21_1StBolshNeBol120cmm2='.$L15->X21_1StBolshNeBol120cmm2();
echo '<br>X22_1StBolshBol120cmm2='.$L15->X22_1StBolshBol120cmm2();
echo '<br>X23_Plenka1Storm2='.$L15->X23_Plenka1Storm2();
echo '<br>X24_Plenka1Storgrn='.$L15->X24_Plenka1Storgrn();
echo '<br>X26_2StorBolshNeBol60cmm2='.$L15->X26_2StorBolshNeBol60cmm2();
echo '<br>X27_2StorBolshBol60cmAndMen120cmm2='.$L15->X27_2StorBolshBol60cmAndMen120cmm2();
echo '<br>X28_2StorBolshBol120cmMenshMen60cmm2='.$L15->X28_2StorBolshBol120cmMenshMen60cmm2();
echo '<br>X29_2StorBolshBol120cmMenBol60cmm2='.$L15->X29_2StorBolshBol120cmMenBol60cmm2();
echo '<br>X30_Plenka2Storm2='.$L15->X30_Plenka2Storm2();
echo '<br>X31_Plenka2Storgrn='.$L15->X31_Plenka2Storgrn();
echo '<br>X33_4StorBolshNeBol30cmm2='.$L15->X33_4StorBolshNeBol30cmm2();
echo '<br>X34_4StorBolshBol60cmAndMen120cmm2='.$L15->X34_4StorBolshBol60cmAndMen120cmm2();
echo '<br>X35_4StorBolshBol120cmMenshMen60cmm2='.$L15->X35_4StorBolshBol120cmMenshMen60cmm2();
echo '<br>X36_4StorBolshBol120cmMenshBol60cmm2='.$L15->X36_4StorBolshBol120cmMenshBol60cmm2();
echo '<br>X37_Plemka4Storm2='.$L15->X37_Plemka4Storm2();
echo '<br>X38_Plemka4Storgrn='.$L15->X38_Plemka4Storgrn();
echo '<br>X39_CvetnPlenkaFasadItogm2='.$L15->X39_CvetnPlenkaFasadItogm2();
echo '<br>X40_CvetnPlenkaFasadItoggrn='.$L15->X40_CvetnPlenkaFasadItoggrn();
echo '<br>X43_PolnCvetFotogrn='.$L15->X43_PolnCvetFotogrn();
echo '<br>X44_PolnCvetFotoPlusLamingrn='.$L15->X44_PolnCvetFotoPlusLamingrn();
echo '<br>X45_PolnCvet720grn='.$L15->X45_PolnCvet720grn();
echo '<br>X46_PolnCvet720PlusLamingrn='.$L15->X46_PolnCvet720PlusLamingrn();
echo '<br>X47_RWhitePlusAppgrn='.$L15->X47_RWhitePlusAppgrn();
echo '<br>X48_RCvetnPlusProrezgrn='.$L15->X48_RCvetnPlusProrezgrn();
echo '<br>X49_RCvetnPlusAppgrn='.$L15->X49_RCvetnPlusAppgrn();
echo '<br>X51_FullColorFotoItoggrn='.$L15->X51_FullColorFotoItoggrn();
echo '<br>X52_FullColorFotoPlusLaminItoggrn='.$L15->X52_FullColorFotoPlusLaminItoggrn();
echo '<br>X53_FullColor720Itoggrn='.$L15->X53_FullColor720Itoggrn();
echo '<br>X54_FullColor720PlusLaminItoggrn='.$L15->X54_FullColor720PlusLaminItoggrn();
echo '<br>X55_REconWhitePlusAppItoggrn='.$L15->X55_REconWhitePlusAppItoggrn();
echo '<br>X56_REconCvetnPlusProrezItoggrn='.$L15->X56_REconCvetnPlusProrezItoggrn();
echo '<br>X57_REconCvetnPlusAppItoggrn='.$L15->X57_REconCvetnPlusAppItoggrn();
echo '<br>X58_RSvetWhitePlusAppItoggrn='.$L15->X58_RSvetWhitePlusAppItoggrn();
echo '<br>X59_RSvetCvetnPlusProrezItoggrn='.$L15->X59_RSvetCvetnPlusProrezItoggrn();
echo '<br>X60_RSvetCvetnPlusAppItoggrn='.$L15->X60_RSvetCvetnPlusAppItoggrn();
echo '<br>X61_FasadMatItoggrn='.$L15->X61_FasadMatItoggrn();
echo '<br>AA5_FullColormin='.$L15->AA5_FullColormin();
echo '<br>AA6_ColorPolPrmin='.$L15->AA6_ColorPolPrmin();
echo '<br>AA7_Appmin='.$L15->AA7_Appmin();
echo '<br>AA9_FullColorFotomin='.$L15->AA9_FullColorFotomin();
echo '<br>AA10_FullColorFotoPluslammin='.$L15->AA10_FullColorFotoPluslammin();
echo '<br>AA11_FullColor720min='.$L15->AA11_FullColor720min();
echo '<br>AA12_FullColor720PlusLammin='.$L15->AA12_FullColor720PlusLammin();
echo '<br>AA13_REconWhitePlusAppmin='.$L15->AA13_REconWhitePlusAppmin();
echo '<br>AA14_REconCvetPlusPrmin='.$L15->AA14_REconCvetPlusPrmin();
echo '<br>AA15_REconCvetPlusAppmin='.$L15->AA15_REconCvetPlusAppmin();
echo '<br>AA16_RSvetWhitePlusAppmin='.$L15->AA16_RSvetWhitePlusAppmin();
echo '<br>AA17_RSvetCvetPlusPrmin='.$L15->AA17_RSvetCvetPlusPrmin();
echo '<br>AA18_RCvetFullColorPlusAppmin='.$L15->AA18_RCvetFullColorPlusAppmin();
echo '<br>AA20_PolnCvetFotomin='.$L15->AA20_PolnCvetFotomin();
echo '<br>AA21_PolnCvetFotoPlusLammin='.$L15->AA21_PolnCvetFotoPlusLammin();
echo '<br>AA22_PolnCvet720min='.$L15->AA22_PolnCvet720min();
echo '<br>AA23_Poln720PlusLammin='.$L15->AA23_Poln720PlusLammin();
echo '<br>AA24_REconWhitePlusAppmin='.$L15->AA24_REconWhitePlusAppmin();
echo '<br>AA25_REconCvetPlusPrmin='.$L15->AA25_REconCvetPlusPrmin();
echo '<br>AA26_REconCvetPlusAppmin='.$L15->AA26_REconCvetPlusAppmin();
echo '<br>AA27_RSvetWhitePlusAppmin='.$L15->AA27_RSvetWhitePlusAppmin();
echo '<br>AA28_RSvetCvetPlusPrmin='.$L15->AA28_RSvetCvetPlusPrmin();
echo '<br>AA29_RSvetFullColorPlusAppmin='.$L15->AA29_RSvetFullColorPlusAppmin();
echo '<br>AA30_TrudItogomin='.$L15->AA30_TrudItogomin();
echo '<br>AA32_Designmin='.$L15->AA32_Designmin();
echo '<br>AD6_CvetPlFasad12mmp='.$L15->AD6_CvetPlFasad12mmp();
echo '<br>AD7_FasadMatItogogrn='.$L15->AD7_FasadMatItogogrn();
echo '<br>AD10_Trudmin='.$L15->AD10_Trudmin();
echo '<br>AD11_StoimRabotigrn='.$L15->AD11_StoimRabotigrn();
echo '<br>AD13_Designgrn='.$L15->AD13_Designgrn();
echo '<br>AD24_Itigogrn='.$L15->AD24_Itigogrn();

?>
</body>
</html>
