<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: Anrew
 * Date: 27.07.2017
 * Time: 10:48
 */
// Загрузка классов
include_once 'class.10.php';
include_once 'class.31.php';

// инициализация классов
$L10 = new L10();
$L31 = new L31(0, 0, 0, 1, 0, 1, 300, 60, 1,
    6543,14.8,1);

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
echo '<br>E5_VivesRazb='.$L31->E5_VivesRazb();
echo '<br>E6_VivesNeRazb='.$L31->E6_VivesNeRazb();
echo '<br>E8_VivesOdin12cm='.$L31->E8_VivesOdin12cm();
echo '<br>E9_VivesOdin24cm='.$L31->E9_VivesOdin24cm();
echo '<br>E10_Vives4StorNeRazb='.$L31->E10_Vives4StorNeRazb();
echo '<br>E11_Vives4StorRazb='.$L31->E11_Vives4StorRazb();
echo '<br>E13_Vives1Or2Stor='.$L31->E13_Vives1Or2Stor();

echo '<br>H5_BolshRazmDVPm='.$L31->H5_BolshRazmDVPm();
echo '<br>H6_MenshRazmDVPm='.$L31->H6_MenshRazmDVPm();
echo '<br>H7_FasadPloskoyKrishim2='.$L31->H7_FasadPloskoyKrishim2();
echo '<br>H8_PerimPloskoyKrishimp='.$L31->H8_PerimPloskoyKrishimp();

echo '<br>H10_GorRazm='.$L31->H10_GorRazm();
echo '<br>H11_VerRazm='.$L31->H11_VerRazm();
echo '<br>H12_Perim4StorVivesmp='.$L31->H12_Perim4StorVivesmp();
echo '<br>H13_BokPlosh4StorVivm2='.$L31->H13_BokPlosh4StorVivm2();
echo '<br>H14_Plosh2TorcZagl4StorVivm2='.$L31->H14_Plosh2TorcZagl4StorVivm2();
echo '<br>H15_DvpUpakDlNeRazbVivm2='.$L31->H15_DvpUpakDlNeRazbVivm2();
echo '<br>H16_PlankiUpakDlNeRazbVivmp='.$L31->H16_PlankiUpakDlNeRazbVivmp();
echo '<br>H17_SamorUpakDlNeRazbVivsht='.$L31->H17_SamorUpakDlNeRazbVivsht();

echo '<br>H19_BokPlosh4StorRazbVivm2='.$L31->H19_BokPlosh4StorRazbVivm2();
echo '<br>H20_DVPUpakDl1RazbVivm2='.$L31->H20_DVPUpakDl1RazbVivm2();
echo '<br>H21_PlankiUpakDl1RazbVivmp='.$L31->H21_PlankiUpakDl1RazbVivmp();
echo '<br>H22_SamorUpakDl1RazbVivsht='.$L31->H22_SamorUpakDl1RazbVivsht();

echo '<br>H24_VisPak1StorVivm='.$L31->H24_VisPak1StorVivm();
echo '<br>H25_BokPloshDVP1PakVivm2='.$L31->H25_BokPloshDVP1PakVivm2();
echo '<br>H26_DVPUpakDl1PakVivm2='.$L31->H26_DVPUpakDl1PakVivm2();
echo '<br>H27_PlUpakDl1PakVivmp='.$L31->H27_PlUpakDl1PakVivmp();
echo '<br>H28_SamorUpakDl1pakVivsht='.$L31->H28_SamorUpakDl1pakVivsht();

echo '<br>H31_DVPUpak1m2grn='.$L31->H31_DVPUpak1m2grn();
echo '<br>H32_PererashDVPUpak='.$L31->H32_PererashDVPUpak();
echo '<br>H33_PlankaDerevo1mpgrn='.$L31->H33_PlankaDerevo1mpgrn();
echo '<br>H34_PererashPlank='.$L31->H34_PererashPlank();
echo '<br>H35_Stoim1Samorezgrn='.$L31->H35_Stoim1Samorezgrn();

echo '<br>H37_PaketVives1StorMatergrn='.$L31->H37_PaketVives1StorMatergrn();
echo '<br>H38_1Viv4StorRazbMatergrn='.$L31->H38_1Viv4StorRazbMatergrn();
echo '<br>H39_1Viv4StorNeRazbMatergrn='.$L31->H39_1Viv4StorNeRazbMatergrn();

echo '<br>H41_PakViv1StorMatgrn='.$L31->H41_PakViv1StorMatgrn();
echo '<br>H42_Vives4StorRazbMatgrn='.$L31->H42_Vives4StorRazbMatgrn();
echo '<br>H43_Vives4StorNeRazbMatgrn='.$L31->H43_Vives4StorNeRazbMatgrn();

echo '<br>H45_PakViv1StorMatgrn='.$L31->H45_PakViv1StorMatgrn();
echo '<br>H46_1Viv4StorRazbMatgrn='.$L31->H46_1Viv4StorRazbMatgrn();
echo '<br>H47_1Viv4StorNeRazbMatgrn='.$L31->H47_1Viv4StorNeRazbMatgrn();
echo '<br>H48_ItogoMatUpakgrn='.$L31->H48_ItogoMatUpakgrn();

echo '<br>K5_VisUpakm='.$L31->K5_VisUpakm();
echo '<br>K6_KolvoUpaksht='.$L31->K6_KolvoUpaksht();
echo '<br>K7_ObyomUpakm3='.$L31->K7_ObyomUpakm3();
echo '<br>K8_ObyomUpakovokm3='.$L31->K8_ObyomUpakovokm3();

echo '<br>K11_PlotnDVPkgm2='.$L31->K11_PlotnDVPkgm2();
echo '<br>K12_PloshUpakm2='.$L31->K12_PloshUpakm2();
echo '<br>K13_VesDVPUpakkg='.$L31->K13_VesDVPUpakkg();

echo '<br>N5_DVPPerimNERazbVivmp='.$L31->N5_DVPPerimNERazbVivmp();
echo '<br>N6_DVPPerimVirezmin='.$L31->N6_DVPPerimVirezmin();
echo '<br>N7_PrirezPlankDermin='.$L31->N7_PrirezPlankDermin();
echo '<br>N8_VkrutSamorezmin='.$L31->N8_VkrutSamorezmin();
echo '<br>N9_NeRazbViv4Stormin='.$L31->N9_NeRazbViv4Stormin();

echo '<br>N11_DVPPerimRazbVivmp='.$L31->N11_DVPPerimRazbVivmp();
echo '<br>N12_DVPPerimVirezmin='.$L31->N12_DVPPerimVirezmin();
echo '<br>N13_PrirPlankDermin='.$L31->N13_PrirPlankDermin();
echo '<br>N14_VkrutSamorezmin='.$L31->N14_VkrutSamorezmin();
echo '<br>N15_RazbViv4Stormin='.$L31->N15_RazbViv4Stormin();

echo '<br>N17_DVPPerimPak1Stormp='.$L31->N17_DVPPerimPak1Stormp();
echo '<br>N18_DVPPerimVirezatmin='.$L31->N18_DVPPerimVirezatmin();
echo '<br>N19_PrirPlankDermin='.$L31->N19_PrirPlankDermin();
echo '<br>N20_VkrutSamorezmin='.$L31->N20_VkrutSamorezmin();
echo '<br>N21_Pak1StorVivmin='.$L31->N21_Pak1StorVivmin();

echo '<br>N24_PakViv1Stormin='.$L31->N24_PakViv1Stormin();
echo '<br>N25_Viv4StorRazbmin='.$L31->N25_Viv4StorRazbmin();
echo '<br>N26_Viv4StorNeRazbmin='.$L31->N26_Viv4StorNeRazbmin();

echo '<br>N28_PakViv1Stormin='.$L31->N28_PakViv1Stormin();
echo '<br>N29_Viv4StorRazbmin='.$L31->N29_Viv4StorRazbmin();
echo '<br>N30_Viv4StorNeRazbmin='.$L31->N30_Viv4StorNeRazbmin();
echo '<br>N31_ItogoRabmin='.$L31->N31_ItogoRabmin();

echo '<br>Q6_StorimMatgrn='.$L31->Q6_StorimMatgrn();

echo '<br>Q10_TrudNPUpakmin='.$L31->Q10_TrudNPUpakmin();
echo '<br>Q11_StorimRabpoUpakgrn='.$L31->Q11_StorimRabpoUpakgrn();

echo '<br>Q15_BolshRazmm='.$L31->Q15_BolshRazmm();
echo '<br>Q16_MenshRazmm='.$L31->Q16_MenshRazmm();
echo '<br>Q17_Visotam='.$L31->Q17_Visotam();
echo '<br>Q18_VesVivPlusUpakkg='.$L31->Q18_VesVivPlusUpakkg();
echo '<br>Q19_StoimPosgrn='.$L31->Q19_StoimPosgrn();
echo '<br>Q20_KolvoPossht='.$L31->Q20_KolvoPossht();

echo '<br>Q30_UpakDlNPNalgrn='.$L31->Q30_UpakDlNPNalgrn();

?>
</body>
</html>



