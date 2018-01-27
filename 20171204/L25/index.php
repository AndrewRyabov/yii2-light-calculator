<?php
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
include_once 'class.25.php';

// инициализация классов
$L09 = new L09();
$L10 = new L10();
$L25 = new L25(0, 0, 0, 1, 0, 1, 300, 60,
    0, 0, 1, 1, 3, 0, 1, диоды);

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

echo '<br>D5_KrishaUlica='.$L25->D5_KrishaUlica();
echo '<br>D6_StenaUlica='.$L25->D6_StenaUlica();
echo '<br>D7_StenaPomesh='.$L25->D7_StenaPomesh();
echo '<br>D8_2StorPomesh='.$L25->D8_2StorPomesh();
echo '<br>D9_4StorPomesh='.$L25->D9_4StorPomesh();
echo '<br>D10_VPR='.$L25->D10_VPR();

echo '<br>D12_Goriz='.$L25->D12_Goriz();
echo '<br>D13_Vertikal='.$L25->D13_Vertikal();
echo '<br>D14_VPR='.$L25->D14_VPR();

echo '<br>D17_RazbPredvar='.$L25->D17_RazbPredvar();
echo '<br>D18_NerazbPredvar='.$L25->D18_NerazbPredvar();
echo '<br>D20_Razb='.$L25->D20_Razb();
echo '<br>D21_Nerazb='.$L25->D21_Nerazb();
echo '<br>D22_Pusto='.$L25->D22_Pusto();
echo '<br>D23_VPR='.$L25->D23_VPR();

echo '<br>D26_GorRazcm='.$L25->D26_GorRazcm();
echo '<br>D27_CentrOtverstiyacm='.$L25->D27_CentrOtverstiyacm();
echo '<br>D29_ZnachD27='.$L25->D29_ZnachD27();
echo '<br>D30_Pusto='.$L25->D30_Pusto();
echo '<br>D31_VPR='.$L25->D31_VPR();

echo '<br>D33_Akryl='.$L25->D33_Akryl();
echo '<br>D34_Policarb='.$L25->D34_Policarb();
echo '<br>D35_VPR='.$L25->D35_VPR();

echo '<br>D37_Zakazchik='.$L25->D37_Zakazchik();
echo '<br>D38_L24='.$L25->D38_L24();
echo '<br>D39_VPR='.$L25->D39_VPR();

echo '<br>D42_PolnocvetFoto='.$L25->D42_PolnocvetFoto();
echo '<br>D43_PolnocvetFotoPlusLaminat='.$L25->D43_PolnocvetFotoPlusLaminat();
echo '<br>D44_Polnocvet720DPI='.$L25->D44_Polnocvet720DPI();
echo '<br>D45_Polnocvet720DPIPlusLamonat='.$L25->D45_Polnocvet720DPIPlusLamonat();
echo '<br>D46_EconomWhiteFonPlusApp='.$L25->D46_EconomWhiteFonPlusApp();
echo '<br>D47_EconomCvetnFonPlusProrez='.$L25->D47_EconomCvetnFonPlusProrez();
echo '<br>D48_EconomCvetnFonPlusApp='.$L25->D48_EconomCvetnFonPlusApp();
echo '<br>D49_SvetorassWhiteFonPlusApp='.$L25->D49_SvetorassWhiteFonPlusApp();
echo '<br>D50_SvetorassCvetnFonPlusProrez='.$L25->D50_SvetorassCvetnFonPlusProrez();
echo '<br>D51_SvetorassCvetnFonPlusApp='.$L25->D51_SvetorassCvetnFonPlusApp();
echo '<br>D52_VPR='.$L25->D52_VPR();

echo '<br>H5_FasadPlastik='.$L25->H5_FasadPlastik();
echo '<br>I5_FasadPlastik='.$L25->I5_FasadPlastik();
echo '<br>K5_FasadPlastik='.$L25->K5_FasadPlastik();
echo '<br>L5_FasadPlastik='.$L25->L5_FasadPlastik();
echo '<br>H6_BortPVH='.$L25->H6_BortPVH();
echo '<br>I6_BortPVH='.$L25->I6_BortPVH();
echo '<br>K6_BortPVH='.$L25->K6_BortPVH();
echo '<br>L6_BortPVH='.$L25->L6_BortPVH();
echo '<br>H7_Till='.$L25->H7_Till();
echo '<br>I7_Till='.$L25->I7_Till();
echo '<br>K7_Till='.$L25->K7_Till();
echo '<br>L7_Till='.$L25->L7_Till();
echo '<br>H8_OporiLicPlastik='.$L25->H8_OporiLicPlastik();
echo '<br>I8_OporiLicPlastik='.$L25->I8_OporiLicPlastik();
echo '<br>K8_OporiLicPlastik='.$L25->K8_OporiLicPlastik();
echo '<br>L8_OporiLicPlastik='.$L25->L8_OporiLicPlastik();
echo '<br>H9_RamaVnutr='.$L25->H9_RamaVnutr();
echo '<br>I9_RamaVnutr='.$L25->I9_RamaVnutr();
echo '<br>K9_RamaVnutr='.$L25->K9_RamaVnutr();
echo '<br>L9_RamaVnutr='.$L25->L9_RamaVnutr();
echo '<br>H10_RamaNaruj='.$L25->H10_RamaNaruj();
echo '<br>I10_RamaNaruj='.$L25->I10_RamaNaruj();
echo '<br>K10_RamaNaruj='.$L25->K10_RamaNaruj();
echo '<br>L10_RamaNaruj='.$L25->L10_RamaNaruj();
echo '<br>H11_Podvesi='.$L25->H11_Podvesi();
echo '<br>I11_Podvesi='.$L25->I11_Podvesi();
echo '<br>K11_Podvesi='.$L25->K11_Podvesi();
echo '<br>L11_Podvesi='.$L25->L11_Podvesi();
echo '<br>H13_Elektrika='.$L25->H13_Elektrika();
echo '<br>I13_Elektrika='.$L25->I13_Elektrika();
echo '<br>K13_Elektrika='.$L25->K13_Elektrika();
echo '<br>L13_Elektrika='.$L25->L13_Elektrika();
echo '<br>H15_PlenkaFasad='.$L25->H15_PlenkaFasad();
echo '<br>I15_PlenkaFasad='.$L25->I15_PlenkaFasad();
echo '<br>K15_PlenkaFasad='.$L25->K15_PlenkaFasad();
echo '<br>H16_PlenkaBortTill='.$L25->H16_PlenkaBortTill();
echo '<br>I16_PlenkaBortTill='.$L25->I16_PlenkaBortTill();
echo '<br>K16_PlenkaBortTill='.$L25->K16_PlenkaBortTill();
echo '<br>H17_PlenkaStreych='.$L25->H17_PlenkaStreych();
echo '<br>I17_PlenkaStreych='.$L25->I17_PlenkaStreych();
echo '<br>K17_PlenkaStreych='.$L25->K17_PlenkaStreych();
echo '<br>H18_ItogoSborka='.$L25->H18_ItogoSborka();
echo '<br>I18_ItogoSborka='.$L25->I18_ItogoSborka();
echo '<br>K18_ItogoSborka='.$L25->K18_ItogoSborka();
echo '<br>L18_ItogoSborka='.$L25->L18_ItogoSborka();

echo '<br>H19_Snabjeniye='.$L25->H19_Snabjeniye();
echo '<br>I19_Snabjeniye='.$L25->I19_Snabjeniye();
echo '<br>K19_Snabjeniye='.$L25->K19_Snabjeniye();
echo '<br>I20_Upravl='.$L25->I20_Upravl();
echo '<br>I21_SoftPlusInternet='.$L25->I21_SoftPlusInternet();
echo '<br>I22_Pribil='.$L25->I22_Pribil();
echo '<br>H23_AmorizaciyaOborudovaniya='.$L25->H23_AmorizaciyaOborudovaniya();
echo '<br>H24_ArendaPomesh='.$L25->H24_ArendaPomesh();
echo '<br>J26_ZatratiObshiye='.$L25->J26_ZatratiObshiye();

echo '<br>J28_StoimNalichSMaxSkidkoy='.$L25->J28_StoimNalichSMaxSkidkoy();
echo '<br>J29_StoimNalichRoznica='.$L25->J29_StoimNalichRoznica();

echo '<br>J31_BNStoimPlatNDSSMaxSkidkoy='.$L25->J31_BNStoimPlatNDSSMaxSkidkoy();
echo '<br>J32_BNStoimPlatNDSSRoznica='.$L25->J32_BNStoimPlatNDSSRoznica();

echo '<br>O6_ImiaKonstruktora='.$L25->O6_ImiaKonstruktora();

echo '<br>O9_VarIsp='.$L25->O9_VarIsp();
echo '<br>O10_OrientText='.$L25->O10_OrientText();
echo '<br>O11_OrientKod='.$L25->O11_OrientKod();
echo '<br>O12_BolshRazmcm='.$L25->O12_BolshRazmcm();
echo '<br>O13_MenshRazmcm='.$L25->O13_MenshRazmcm();
echo '<br>O14_Tolshcm='.$L25->O14_Tolshcm();
echo '<br>O15_CvetBortRitramaNom='.$L25->O15_CvetBortRitramaNom();
echo '<br>O16_CvetTillRitramaNom='.$L25->O16_CvetTillRitramaNom();
echo '<br>O17_MaketRazrab='.$L25->O17_MaketRazrab();
echo '<br>O18_PlenkaLic='.$L25->O18_PlenkaLic();
echo '<br>O19_PlastikLic='.$L25->O19_PlastikLic();
echo '<br>O20_IstochnikSveta='.$L25->O20_IstochnikSveta();
echo '<br>O21_KonstruktDl4StorPomesh='.$L25->O21_KonstruktDl4StorPomesh();
echo '<br>O22_CenrOtvDl4StorPomeshcm='.$L25->O22_CenrOtvDl4StorPomeshcm();

echo '<br>O30_StoimIzgot1shtgrn='.$L25->O30_StoimIzgot1shtgrn();
echo '<br>O31_Energopotrebleniyevt='.$L25->O31_Energopotrebleniyevt();
echo '<br>O32_Veskg='.$L25->O32_Veskg();

?>
</body>
</html>
