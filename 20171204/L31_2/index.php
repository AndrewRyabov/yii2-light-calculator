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
$L31 = new L31(0, 0, 0, 0, 1, 2, 200, 80, 0,
    8695,35,2);

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
echo '<br>X5_VivesRazb='.$L31->X5_VivesRazb();
echo '<br>X6_VivesNeRazb='.$L31->X6_VivesNeRazb();

echo '<br>X8_VivesOdin12cm='.$L31->X8_VivesOdin12cm();
echo '<br>X9_VivesOdino24cm='.$L31->X9_VivesOdino24cm();
echo '<br>X10_Vives4StorNeRazb='.$L31->X10_Vives4StorNeRazb();
echo '<br>X11_Vives4StorRazb='.$L31->X11_Vives4StorRazb();

echo '<br>X13_Vives1Ili2Stor='.$L31->X13_Vives1Ili2Stor();

echo '<br>AA5_BolshRazmDVPm='.$L31->AA5_BolshRazmDVPm();
echo '<br>AA6_MenshRazmDVPm='.$L31->AA6_MenshRazmDVPm();
echo '<br>AA7_FasadPloskViveskim2='.$L31->AA7_FasadPloskViveskim2();
echo '<br>AA8_PerimPloskVivesmp='.$L31->AA8_PerimPloskVivesmp();

echo '<br>AA10_GorRazm='.$L31->AA10_GorRazm();
echo '<br>AA11_VerRazm='.$L31->AA11_VerRazm();
echo '<br>AA12_Perim4StorVivmp='.$L31->AA12_Perim4StorVivmp();
echo '<br>AA13_BokPlosh4StorVivm2='.$L31->AA13_BokPlosh4StorVivm2();
echo '<br>AA14_Plosh2TorcZagl4StorVivesm2='.$L31->AA14_Plosh2TorcZagl4StorVivesm2();
echo '<br>AA15_DVPUpakDlNeRazbVivm2='.$L31->AA15_DVPUpakDlNeRazbVivm2();
echo '<br>AA16_PlankUpakDlNeRazbVivmp='.$L31->AA16_PlankUpakDlNeRazbVivmp();
echo '<br>AA17_CamorezUpakDlNeRazbVivsht='.$L31->AA17_CamorezUpakDlNeRazbVivsht();

echo '<br>AA19_BokPlosh4StorPazbVivm2='.$L31->AA19_BokPlosh4StorPazbVivm2();
echo '<br>AA20_DVPUpakDl1RazbVivm2='.$L31->AA20_DVPUpakDl1RazbVivm2();
echo '<br>AA21_PlankUpakDl1RazbVivmp='.$L31->AA21_PlankUpakDl1RazbVivmp();
echo '<br>AA22_CamorezUpakDl1RazbVivsht='.$L31->AA22_CamorezUpakDl1RazbVivsht();

echo '<br>AA24_VisPak1StorVivm='.$L31->AA24_VisPak1StorVivm();
echo '<br>AA25_BokPloshDVP1PakVivm2='.$L31->AA25_BokPloshDVP1PakVivm2();
echo '<br>AA26_DVPUpakDl1PakVivm2='.$L31->AA26_DVPUpakDl1PakVivm2();
echo '<br>AA27_DVPUpakDl1PakVivmp='.$L31->AA27_DVPUpakDl1PakVivmp();
echo '<br>AA28_CamorezUpakDl1PakVivsht='.$L31->AA28_CamorezUpakDl1PakVivsht();

echo '<br>AA31_DVPUpak1m2grn='.$L31->AA31_DVPUpak1m2grn();
echo '<br>AA32_PererashDVPUpak='.$L31->AA32_PererashDVPUpak();
echo '<br>AA33_PlankDer1mpgrn='.$L31->AA33_PlankDer1mpgrn();
echo '<br>AA34_PererashPlank='.$L31->AA34_PererashPlank();
echo '<br>AA35_Stoim1Samgrn='.$L31->AA35_Stoim1Samgrn();

echo '<br>AA37_PakViv1StorMatgrn='.$L31->AA37_PakViv1StorMatgrn();
echo '<br>AA38_1Viv4StorRazbMatgrn='.$L31->AA38_1Viv4StorRazbMatgrn();
echo '<br>AA39_1Viv4StorNeRazbMatgrn='.$L31->AA39_1Viv4StorNeRazbMatgrn();

echo '<br>AA41_PakViv1StorMatgrn='.$L31->AA41_PakViv1StorMatgrn();
echo '<br>AA42_Viv4StorrazbMatgrn='.$L31->AA42_Viv4StorrazbMatgrn();
echo '<br>AA43_Viv4StorNeRazbMatgrn='.$L31->AA43_Viv4StorNeRazbMatgrn();

echo '<br>AA45_PakViv1StorMatgrn='.$L31->AA45_PakViv1StorMatgrn();
echo '<br>AA46_1Viv4StorrazbMatgrn='.$L31->AA46_1Viv4StorrazbMatgrn();
echo '<br>AA47_1Viv4StorNeRazbMatgrn='.$L31->AA47_1Viv4StorNeRazbMatgrn();
echo '<br>AA48_ItogoMatUpakgrn='.$L31->AA48_ItogoMatUpakgrn();

echo '<br>AD5_VisotaUpakm='.$L31->AD5_VisotaUpakm();
echo '<br>AD6_KolvoUpaksht='.$L31->AD6_KolvoUpaksht();
echo '<br>AD7_ObyemUpakm3='.$L31->AD7_ObyemUpakm3();
echo '<br>AD8_ObyemUpakm3='.$L31->AD8_ObyemUpakm3();

echo '<br>AD11_PlotnostDVPkgm2='.$L31->AD11_PlotnostDVPkgm2();
echo '<br>AD12_PloshUpakm2='.$L31->AD12_PloshUpakm2();
echo '<br>AD13_VesDVPUpakkg='.$L31->AD13_VesDVPUpakkg();

echo '<br>AG5_DVPPerimetrNeRazbVivmp='.$L31->AG5_DVPPerimetrNeRazbVivmp();
echo '<br>AG6_DVPPerimetrVirezmin='.$L31->AG6_DVPPerimetrVirezmin();
echo '<br>AG7_PrirezPlankDermin='.$L31->AG7_PrirezPlankDermin();
echo '<br>AG8_VkrutSamorezmin='.$L31->AG8_VkrutSamorezmin();
echo '<br>AG9_NeRazb4Stormin='.$L31->AG9_NeRazb4Stormin();

echo '<br>AG11_DVPPerimrazbVivmp='.$L31->AG11_DVPPerimrazbVivmp();
echo '<br>AG12_DVPPerimVirmin='.$L31->AG12_DVPPerimVirmin();
echo '<br>AG13_PrirPlankDermin='.$L31->AG13_PrirPlankDermin();
echo '<br>AG14_VkrutSamorezmin='.$L31->AG14_VkrutSamorezmin();
echo '<br>AG15_RazbViv4Stormin='.$L31->AG15_RazbViv4Stormin();

echo '<br>AG17_DVPPerimPak1Stormp='.$L31->AG17_DVPPerimPak1Stormp();
echo '<br>AG18_DVPPerimVirmin='.$L31->AG18_DVPPerimVirmin();
echo '<br>AG19_PrirplankDermin='.$L31->AG19_PrirplankDermin();
echo '<br>AG20_VkrutSmin='.$L31->AG20_VkrutSmin();

echo '<br>AG21_Pak1StorVivmin='.$L31->AG21_Pak1StorVivmin();
echo '<br>AG24_PakViv1Stormin='.$L31->AG24_PakViv1Stormin();
echo '<br>AG25_Viv4StorRazbmin='.$L31->AG25_Viv4StorRazbmin();

echo '<br>AG26_Viv4StorNeRazbmin='.$L31->AG26_Viv4StorNeRazbmin();
echo '<br>AG28_PakViv1Stormin='.$L31->AG28_PakViv1Stormin();
echo '<br>AG29_Viv4StorRazbmin='.$L31->AG29_Viv4StorRazbmin();
echo '<br>AG30_Viv4StorNeRazbmin='.$L31->AG30_Viv4StorNeRazbmin();
echo '<br>AG31_ItogoRabmin='.$L31->AG31_ItogoRabmin();

echo '<br>AJ6_Stoimmatgrn='.$L31->AJ6_Stoimmatgrn();
echo '<br>AJ10_TrudNPUpakmin='.$L31->AJ10_TrudNPUpakmin();

echo '<br>AJ11_StoimRabPoUpakgrn='.$L31->AJ11_StoimRabPoUpakgrn();
echo '<br>AJ15_BolshRazm='.$L31->AJ15_BolshRazm();
echo '<br>AJ16_MenshRazm='.$L31->AJ16_MenshRazm();
echo '<br>AJ17_Vism='.$L31->AJ17_Vism();
echo '<br>AJ18_VesVivPlusUpakkg='.$L31->AJ18_VesVivPlusUpakkg();
echo '<br>AJ19_StoimPosgrn='.$L31->AJ19_StoimPosgrn();
echo '<br>AJ20_KolvoPossht='.$L31->AJ20_KolvoPossht();

echo '<br>AJ30_UpakDlNPNalgrn='.$L31->AJ30_UpakDlNPNalgrn();


?>
</body>
</html>



