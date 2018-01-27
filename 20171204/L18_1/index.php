<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: Anrew
 * Date: 03.08.2017
 * Time: 12:30
 */
// Загрузка классов
include_once 'class.09.php';
include_once 'class.10.php';
include_once 'class.18.php';

// инициализация классов
$L09 = new L09();
$L10 = new L10();
$L18 = new L18(300, 60);

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
echo '<br>B14_BolshProsvmm='.$L18->B14_BolshProsvmm();
echo '<br>B15_MenshProsvmm='.$L18->B15_MenshProsvmm();
echo '<br>B16_BolshStorm='.$L18->B16_BolshStorm();
echo '<br>B17_MenshStorm='.$L18->B17_MenshStorm();

echo '<br>D8_Flag1='.$L18->D8_Flag1();
echo '<br>D9_Flag2='.$L18->D9_Flag2();
echo '<br>D10_Flag3='.$L18->D10_Flag3();
echo '<br>D11_Flag4='.$L18->D11_Flag4();
echo '<br>D12_Flag5='.$L18->D12_Flag5();
echo '<br>D13_Flag6='.$L18->D13_Flag6();
echo '<br>D14_Flag7='.$L18->D14_Flag7();
echo '<br>D15_Flag8='.$L18->D15_Flag8();
echo '<br>D16_Flag9='.$L18->D16_Flag9();
echo '<br>D17_Flag10='.$L18->D17_Flag10();
echo '<br>D18_Flag11='.$L18->D18_Flag11();
echo '<br>D19_Flag12='.$L18->D19_Flag12();
echo '<br>D20_Flag13='.$L18->D20_Flag13();
echo '<br>D21_Flag14='.$L18->D21_Flag14();

echo '<br>F8_StoimLin1grn='.$L18->F8_StoimLin1grn();
echo '<br>F9_StoimLin2grn='.$L18->F9_StoimLin2grn();
echo '<br>F10_StoimLin3grn='.$L18->F10_StoimLin3grn();
echo '<br>F11_StoimLin4grn='.$L18->F11_StoimLin4grn();
echo '<br>F12_StoimLin5grn='.$L18->F12_StoimLin5grn();
echo '<br>F13_StoimLin6grn='.$L18->F13_StoimLin6grn();
echo '<br>F14_StoimLin7grn='.$L18->F14_StoimLin7grn();
echo '<br>F15_StoimLin8grn='.$L18->F15_StoimLin8grn();
echo '<br>F16_StoimLin9grn='.$L18->F16_StoimLin9grn();
echo '<br>F17_StoimLin10grn='.$L18->F17_StoimLin10grn();
echo '<br>F18_StoimLin11grn='.$L18->F18_StoimLin11grn();
echo '<br>F19_StoimLin12grn='.$L18->F19_StoimLin12grn();
echo '<br>F20_StoimLin13grn='.$L18->F20_StoimLin13grn();
echo '<br>F21_StoimLin14grn='.$L18->F21_StoimLin14grn();
echo '<br>F23_StoimLinItogogrn='.$L18->F23_StoimLinItogogrn();
echo '<br>F24_BolshLinsht='.$L18->F24_BolshLinsht();
echo '<br>F25_VseBolshLingrn='.$L18->F25_VseBolshLingrn();

echo '<br>G8_EnergoLin1vt='.$L18->G8_EnergoLin1vt();
echo '<br>G9_EnergoLin2vt='.$L18->G9_EnergoLin2vt();
echo '<br>G10_EnergoLin3vt='.$L18->G10_EnergoLin3vt();
echo '<br>G11_EnergoLin4vt='.$L18->G11_EnergoLin4vt();
echo '<br>G12_EnergoLin5vt='.$L18->G12_EnergoLin5vt();
echo '<br>G13_EnergoLin6vt='.$L18->G13_EnergoLin6vt();
echo '<br>G14_EnergoLin7vt='.$L18->G14_EnergoLin7vt();
echo '<br>G15_EnergoLin8vt='.$L18->G15_EnergoLin8vt();
echo '<br>G16_EnergoLin9vt='.$L18->G16_EnergoLin9vt();
echo '<br>G17_EnergoLin10vt='.$L18->G17_EnergoLin10vt();
echo '<br>G18_EnergoLin11vt='.$L18->G18_EnergoLin11vt();
echo '<br>G19_EnergoLin12vt='.$L18->G19_EnergoLin12vt();
echo '<br>G20_EnergoLin13vt='.$L18->G20_EnergoLin13vt();
echo '<br>G21_EnergoLin14vt='.$L18->G21_EnergoLin14vt();
echo '<br>G23_EnergoLinItogovt='.$L18->G23_EnergoLinItogovt();
echo '<br>G25_EnergoVseBolshLinvt='.$L18->G25_EnergoVseBolshLinvt();

echo '<br>H8_VesLin1kg='.$L18->H8_VesLin1kg();
echo '<br>H9_VesLin2kg='.$L18->H9_VesLin2kg();
echo '<br>H10_VesLin3kg='.$L18->H10_VesLin3kg();
echo '<br>H11_VesLin4kg='.$L18->H11_VesLin4kg();
echo '<br>H12_VesLin5kg='.$L18->H12_VesLin5kg();
echo '<br>H13_VesLin6kg='.$L18->H13_VesLin6kg();
echo '<br>H14_VesLin7kg='.$L18->H14_VesLin7kg();
echo '<br>H15_VesLin8kg='.$L18->H15_VesLin8kg();
echo '<br>H16_VesLin9kg='.$L18->H16_VesLin9kg();
echo '<br>H17_VesLin10kg='.$L18->H17_VesLin10kg();
echo '<br>H18_VesLin11kg='.$L18->H18_VesLin11kg();
echo '<br>H19_VesLin12kg='.$L18->H19_VesLin12kg();
echo '<br>H20_VesLin13kg='.$L18->H20_VesLin13kg();
echo '<br>H21_VesLin14kg='.$L18->H21_VesLin14kg();
echo '<br>H23_VesLinItogokg='.$L18->H23_VesLinItogokg();
echo '<br>H25_VesBolshLinkg='.$L18->H25_VesBolshLinkg();

echo '<br>I8_KolvoLamp1sht='.$L18->I8_KolvoLamp1sht();
echo '<br>I9_KolvoLamp2sht='.$L18->I9_KolvoLamp2sht();
echo '<br>I10_KolvoLamp3sht='.$L18->I10_KolvoLamp3sht();
echo '<br>I11_KolvoLamp4sht='.$L18->I11_KolvoLamp4sht();
echo '<br>I12_KolvoLamp5sht='.$L18->I12_KolvoLamp5sht();
echo '<br>I13_KolvoLamp6sht='.$L18->I13_KolvoLamp6sht();
echo '<br>I14_KolvoLamp7sht='.$L18->I14_KolvoLamp7sht();
echo '<br>I15_KolvoLamp8sht='.$L18->I15_KolvoLamp8sht();
echo '<br>I16_KolvoLamp9sht='.$L18->I16_KolvoLamp9sht();
echo '<br>I17_KolvoLamp10sht='.$L18->I17_KolvoLamp10sht();
echo '<br>I18_KolvoLamp11sht='.$L18->I18_KolvoLamp11sht();
echo '<br>I19_KolvoLamp12sht='.$L18->I19_KolvoLamp12sht();
echo '<br>I20_KolvoLamp13sht='.$L18->I20_KolvoLamp13sht();
echo '<br>I21_KolvoLamp14sht='.$L18->I21_KolvoLamp14sht();
echo '<br>I23_KolvoLampLinItogosht='.$L18->I23_KolvoLampLinItogosht();
echo '<br>I25_KolvoBolshLinsht='.$L18->I25_KolvoBolshLinsht();

echo '<br>J8_DlnLampLin1mm='.$L18->J8_DlnLampLin1mm();
echo '<br>J9_DlnLampLin2mm='.$L18->J9_DlnLampLin2mm();
echo '<br>J10_DlnLampLin3mm='.$L18->J10_DlnLampLin3mm();
echo '<br>J11_DlnLampLin4mm='.$L18->J11_DlnLampLin4mm();
echo '<br>J12_DlnLampLin5mm='.$L18->J12_DlnLampLin5mm();
echo '<br>J13_DlnLampLin6mm='.$L18->J13_DlnLampLin6mm();
echo '<br>J14_DlnLampLin7mm='.$L18->J14_DlnLampLin7mm();
echo '<br>J15_DlnLampLin8mm='.$L18->J15_DlnLampLin8mm();
echo '<br>J16_DlnLampLin9mm='.$L18->J16_DlnLampLin9mm();
echo '<br>J17_DlnLampLin10mm='.$L18->J17_DlnLampLin10mm();
echo '<br>J18_DlnLampLin11mm='.$L18->J18_DlnLampLin11mm();
echo '<br>J19_DlnLampLin12mm='.$L18->J19_DlnLampLin12mm();
echo '<br>J20_DlnLampLin13mm='.$L18->J20_DlnLampLin13mm();
echo '<br>J21_DlnLampLin14mm='.$L18->J21_DlnLampLin14mm();
echo '<br>J23_DlnLampLinItogomm='.$L18->J23_DlnLampLinItogomm();
echo '<br>J25_DlnLampBolshLinmm='.$L18->J25_DlnLampBolshLinmm();

echo '<br>D33_Flag1='.$L18->D33_Flag1();
echo '<br>D34_Flag2='.$L18->D34_Flag2();
echo '<br>D35_Flag3='.$L18->D35_Flag3();
echo '<br>D36_Flag4='.$L18->D36_Flag4();
echo '<br>D37_Flag5='.$L18->D37_Flag5();
echo '<br>D38_Flag6='.$L18->D38_Flag6();
echo '<br>D39_Flag7='.$L18->D39_Flag7();
echo '<br>D40_Flag8='.$L18->D40_Flag8();
echo '<br>D41_Flag9='.$L18->D41_Flag9();
echo '<br>D42_Flag10='.$L18->D42_Flag10();
echo '<br>D43_Flag11='.$L18->D43_Flag11();
echo '<br>D44_Flag12='.$L18->D44_Flag12();
echo '<br>D45_Flag13='.$L18->D45_Flag13();
echo '<br>D46_Flag14='.$L18->D46_Flag14();

echo '<br>F33_StoimLin1grn='.$L18->F33_StoimLin1grn();
echo '<br>F34_StoimLin2grn='.$L18->F34_StoimLin2grn();
echo '<br>F35_StoimLin3grn='.$L18->F35_StoimLin3grn();
echo '<br>F36_StoimLin4grn='.$L18->F36_StoimLin4grn();
echo '<br>F37_StoimLin5grn='.$L18->F37_StoimLin5grn();
echo '<br>F38_StoimLin6grn='.$L18->F38_StoimLin6grn();
echo '<br>F39_StoimLin7grn='.$L18->F39_StoimLin7grn();
echo '<br>F40_StoimLin8grn='.$L18->F40_StoimLin8grn();
echo '<br>F41_StoimLin9grn='.$L18->F41_StoimLin9grn();
echo '<br>F42_StoimLin10grn='.$L18->F42_StoimLin10grn();
echo '<br>F43_StoimLin11grn='.$L18->F43_StoimLin11grn();
echo '<br>F44_StoimLin12grn='.$L18->F44_StoimLin12grn();
echo '<br>F45_StoimLin13grn='.$L18->F45_StoimLin13grn();
echo '<br>F46_StoimLin14grn='.$L18->F46_StoimLin14grn();
echo '<br>F48_StoimLinItogogrn='.$L18->F48_StoimLinItogogrn();
echo '<br>F49_BolshLinsht='.$L18->F49_BolshLinsht();
echo '<br>F50_VseBolshLingrn='.$L18->F50_VseBolshLingrn();

echo '<br>G33_EnergoLin1vt='.$L18->G33_EnergoLin1vt();
echo '<br>G34_EnergoLin2vt='.$L18->G34_EnergoLin2vt();
echo '<br>G35_EnergoLin3vt='.$L18->G35_EnergoLin3vt();
echo '<br>G36_EnergoLin4vt='.$L18->G36_EnergoLin4vt();
echo '<br>G37_EnergoLin5vt='.$L18->G37_EnergoLin5vt();
echo '<br>G38_EnergoLin6vt='.$L18->G38_EnergoLin6vt();
echo '<br>G39_EnergoLin7vt='.$L18->G39_EnergoLin7vt();
echo '<br>G40_EnergoLin8vt='.$L18->G40_EnergoLin8vt();
echo '<br>G41_EnergoLin9vt='.$L18->G41_EnergoLin9vt();
echo '<br>G42_EnergoLin10vt='.$L18->G42_EnergoLin10vt();
echo '<br>G43_EnergoLin11vt='.$L18->G43_EnergoLin11vt();
echo '<br>G44_EnergoLin12vt='.$L18->G44_EnergoLin12vt();
echo '<br>G45_EnergoLin13vt='.$L18->G45_EnergoLin13vt();
echo '<br>G46_EnergoLin14vt='.$L18->G46_EnergoLin14vt();
echo '<br>G48_EnergoLinItogovt='.$L18->G48_EnergoLinItogovt();
echo '<br>G50_EnergoVseBolshLinvt='.$L18->G50_EnergoVseBolshLinvt();

echo '<br>H33_VesLin1kg='.$L18->H33_VesLin1kg();
echo '<br>H34_VesLin2kg='.$L18->H34_VesLin2kg();
echo '<br>H35_VesLin3kg='.$L18->H35_VesLin3kg();
echo '<br>H36_VesLin4kg='.$L18->H36_VesLin4kg();
echo '<br>H37_VesLin5kg='.$L18->H37_VesLin5kg();
echo '<br>H38_VesLin6kg='.$L18->H38_VesLin6kg();
echo '<br>H39_VesLin7kg='.$L18->H39_VesLin7kg();
echo '<br>H40_VesLin8kg='.$L18->H40_VesLin8kg();
echo '<br>H41_VesLin9kg='.$L18->H41_VesLin9kg();
echo '<br>H42_VesLin10kg='.$L18->H42_VesLin10kg();
echo '<br>H43_VesLin11kg='.$L18->H43_VesLin11kg();
echo '<br>H44_VesLin12kg='.$L18->H44_VesLin12kg();
echo '<br>H45_VesLin13kg='.$L18->H45_VesLin13kg();
echo '<br>H46_VesLin14kg='.$L18->H46_VesLin14kg();
echo '<br>H48_VesLinItogokg='.$L18->H48_VesLinItogokg();
echo '<br>H50_VesBolshLinkg='.$L18->H50_VesBolshLinkg();

echo '<br>I33_KolvoLamp1sht='.$L18->I33_KolvoLamp1sht();
echo '<br>I34_KolvoLamp2sht='.$L18->I34_KolvoLamp2sht();
echo '<br>I35_KolvoLamp3sht='.$L18->I35_KolvoLamp3sht();
echo '<br>I36_KolvoLamp4sht='.$L18->I36_KolvoLamp4sht();
echo '<br>I37_KolvoLamp5sht='.$L18->I37_KolvoLamp5sht();
echo '<br>I38_KolvoLamp6sht='.$L18->I38_KolvoLamp6sht();
echo '<br>I39_KolvoLamp7sht='.$L18->I39_KolvoLamp7sht();
echo '<br>I40_KolvoLamp8sht='.$L18->I40_KolvoLamp8sht();
echo '<br>I41_KolvoLamp9sht='.$L18->I41_KolvoLamp9sht();
echo '<br>I42_KolvoLamp10sht='.$L18->I42_KolvoLamp10sht();
echo '<br>I43_KolvoLamp11sht='.$L18->I43_KolvoLamp11sht();
echo '<br>I44_KolvoLamp12sht='.$L18->I44_KolvoLamp12sht();
echo '<br>I45_KolvoLamp13sht='.$L18->I45_KolvoLamp13sht();
echo '<br>I46_KolvoLamp14sht='.$L18->I46_KolvoLamp14sht();
echo '<br>I48_KolvoLampLinItogosht='.$L18->I48_KolvoLampLinItogosht();
echo '<br>I50_KolvoBolshLinsht='.$L18->I50_KolvoBolshLinsht();

echo '<br>J33_DlnLampLin1mm='.$L18->J33_DlnLampLin1mm();
echo '<br>J34_DlnLampLin2mm='.$L18->J34_DlnLampLin2mm();
echo '<br>J35_DlnLampLin3mm='.$L18->J35_DlnLampLin3mm();
echo '<br>J36_DlnLampLin4mm='.$L18->J36_DlnLampLin4mm();
echo '<br>J37_DlnLampLin5mm='.$L18->J37_DlnLampLin5mm();
echo '<br>J38_DlnLampLin6mm='.$L18->J38_DlnLampLin6mm();
echo '<br>J39_DlnLampLin7mm='.$L18->J39_DlnLampLin7mm();
echo '<br>J40_DlnLampLin8mm='.$L18->J40_DlnLampLin8mm();
echo '<br>J41_DlnLampLin9mm='.$L18->J41_DlnLampLin9mm();
echo '<br>J42_DlnLampLin10mm='.$L18->J42_DlnLampLin10mm();
echo '<br>J43_DlnLampLin11mm='.$L18->J43_DlnLampLin11mm();
echo '<br>J44_DlnLampLin12mm='.$L18->J44_DlnLampLin12mm();
echo '<br>J45_DlnLampLin13mm='.$L18->J45_DlnLampLin13mm();
echo '<br>J46_DlnLampLin14mm='.$L18->J46_DlnLampLin14mm();
echo '<br>J48_DlnLampLinItogomm='.$L18->J48_DlnLampLinItogomm();
echo '<br>J50_DlnLampBolshLinmm='.$L18->J50_DlnLampBolshLinmm();

echo '<br>H52_PrisutBolshLin='.$L18->H52_PrisutBolshLin();
echo '<br>H53_PrisutmenshLin='.$L18->H53_PrisutmenshLin();

echo '<br>F56_StoimLiniyItogogrn='.$L18->F56_StoimLiniyItogogrn();
echo '<br>G56_EnergopotLiniyItogovt='.$L18->G56_EnergopotLiniyItogovt();
echo '<br>H56_VesLiniyItogokg='.$L18->H56_VesLiniyItogokg();
echo '<br>I56_KolvoLampItogosht='.$L18->I56_KolvoLampItogosht();
echo '<br>J55_DlnLiniyItogomm='.$L18->J55_DlnLiniyItogomm();
echo '<br>J56_DlnLiniyItogom='.$L18->J56_DlnLiniyItogom();

echo '<br>M5_MontProvodm='.$L18->M5_MontProvodm();
echo '<br>M6_MontProvodgrn='.$L18->M6_MontProvodgrn();
echo '<br>M8_SetKabelm='.$L18->M8_SetKabelm();
echo '<br>M9_SetKabelgrn='.$L18->M9_SetKabelgrn();
echo '<br>M11_MatItogogrn='.$L18->M11_MatItogogrn();

echo '<br>P6_StoimMatgrn='.$L18->P6_StoimMatgrn();
echo '<br>P10_TrudLampmin='.$L18->P10_TrudLampmin();
echo '<br>P11_StoimRabgrn='.$L18->P11_StoimRabgrn();
echo '<br>P21_Energopotvt='.$L18->P21_Energopotvt();
echo '<br>P22_Veskg='.$L18->P22_Veskg();
echo '<br>P24_Itogogrn='.$L18->P24_Itogogrn();

?>
</body>
</html>



