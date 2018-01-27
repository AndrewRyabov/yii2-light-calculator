<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 15.07.2017
 * Time: 12:25
 */
// Загрузка классов
include_once 'class.09.php';
include_once 'class.10.php';
include_once 'class.16.php';

// инициализация классов
$L09 = new L09();
$L10 = new L10();
$L16 = new L16(0, 0, 0, 1, 0, 300, 60);

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

echo '<br>AM5_Ulica='.$L16->AM5_Ulica();
echo '<br>AM6_Pomesh='.$L16->AM6_Pomesh();
echo '<br>AM8_PVHKrisha5mm='.$L16->AM8_PVHKrisha5mm();
echo '<br>AM9_PVHKrisha4mm='.$L16->AM9_PVHKrisha4mm();
echo '<br>AM10_PVHUlica4mm='.$L16->AM10_PVHUlica4mm();
echo '<br>AM11_PVHUlica3mm='.$L16->AM11_PVHUlica3mm();
echo '<br>AM13_TillPVH='.$L16->AM13_TillPVH();
echo '<br>AM14_PVHBort='.$L16->AM14_PVHBort();
echo '<br>AM16_TillPVH5mm='.$L16->AM16_TillPVH5mm();
echo '<br>AM17_TillPVH4mm='.$L16->AM17_TillPVH4mm();
echo '<br>AM18_TillPVH3mm='.$L16->AM18_TillPVH3mm();

echo '<br>AP5_BolshRasm='.$L16->AP5_BolshRasm();
echo '<br>AP6_MenshRasm='.$L16->AP6_MenshRasm();
echo '<br>AP7_PerimTillmp='.$L16->AP7_PerimTillmp();
echo '<br>AP8_PloshTillm2='.$L16->AP8_PloshTillm2();
echo '<br>AP9_PVH5mm1m2grn='.$L16->AP9_PVH5mm1m2grn();
echo '<br>AP10_PVH4mm1m2grn='.$L16->AP10_PVH4mm1m2grn();
echo '<br>AP11_PVH3mm1m2grn='.$L16->AP11_PVH3mm1m2grn();
echo '<br>AP12_DVP3mm1m2grn='.$L16->AP12_DVP3mm1m2grn();

echo '<br>AQ9_PVH5mm1m2grn='.$L16->AQ9_PVH5mm1m2grn();
echo '<br>AQ10_PVH4mm1m2grn='.$L16->AQ10_PVH4mm1m2grn();
echo '<br>AQ11_PVH3mm1m2grn='.$L16->AQ11_PVH3mm1m2grn();
echo '<br>AQ12_DVP3mm1m2grn='.$L16->AQ12_DVP3mm1m2grn();

echo '<br>AP13_PererashPVH='.$L16->AP13_PererashPVH();
echo '<br>AP14_PererashDVP='.$L16->AP14_PererashDVP();
echo '<br>AP16_Stoim1mpKleygrn='.$L16->AP16_Stoim1mpKleygrn();
echo '<br>AP17_Kley1Perimgrn='.$L16->AP17_Kley1Perimgrn();
echo '<br>AP18_Stoim1Samorez='.$L16->AP18_Stoim1Samorez();
echo '<br>AP19_KolvoSamorezNa1mpsht='.$L16->AP19_KolvoSamorezNa1mpsht();
echo '<br>AP20_KolvoSamorezV1Perimsht='.$L16->AP20_KolvoSamorezV1Perimsht();
echo '<br>AP21_StoimSamorez1Perimgrn='.$L16->AP21_StoimSamorez1Perimgrn();
echo '<br>AP23_PVHBort5mmPlusRustm2='.$L16->AP23_PVHBort5mmPlusRustm2();

echo '<br>AQ23_PVHBort5mmPlusRustm2='.$L16->AQ23_PVHBort5mmPlusRustm2();

echo '<br>AP24_PVHBort5mmPlusRustgrn='.$L16->AP24_PVHBort5mmPlusRustgrn();
echo '<br>AP26_PVHTillKrishagrn='.$L16->AP26_PVHTillKrishagrn();
echo '<br>AP27_PVHTillUlicagrn='.$L16->AP27_PVHTillUlicagrn();
echo '<br>AP28_PVH4TillPomeshgrn='.$L16->AP28_PVH4TillPomeshgrn();
echo '<br>AP29_DVPTillPomeshgrn='.$L16->AP29_DVPTillPomeshgrn();
echo '<br>AP31_TillBezBortgrn='.$L16->AP31_TillBezBortgrn();
echo '<br>AP32_TillPlusPVHBortEEgrn='.$L16->AP32_TillPlusPVHBortEEgrn();

echo '<br>AQ26_PVHTillKrishagrn='.$L16->AQ26_PVHTillKrishagrn();
echo '<br>AQ27_PVHTillUlicagrn='.$L16->AQ27_PVHTillUlicagrn();
echo '<br>AQ28_PVH4TillPomeshgrn='.$L16->AQ28_PVH4TillPomeshgrn();
echo '<br>AQ29_DVPTillPomeshgrn='.$L16->AQ29_DVPTillPomeshgrn();
echo '<br>AQ31_TillBezBortgrn='.$L16->AQ31_TillBezBortgrn();
echo '<br>AQ32_TillPlusPVHBortEEgrn='.$L16->AQ32_TillPlusPVHBortEEgrn();

echo '<br>AP34_KleyKrishagrn='.$L16->AP34_KleyKrishagrn();
echo '<br>AP35_KleyUlicagrn='.$L16->AP35_KleyUlicagrn();
echo '<br>AP36_Kley4StorPomeshgrn='.$L16->AP36_Kley4StorPomeshgrn();
echo '<br>AP37_Kleygrn='.$L16->AP37_Kleygrn();
echo '<br>AP39_SamorezKrishagrn='.$L16->AP39_SamorezKrishagrn();
echo '<br>AP40_SamorezUlicagrn='.$L16->AP40_SamorezUlicagrn();
echo '<br>AP41_SamorezPomeshgrn='.$L16->AP41_SamorezPomeshgrn();
echo '<br>AP42_Samorezgrn='.$L16->AP42_Samorezgrn();

echo '<br>AT5_Virez1mpTillmin='.$L16->AT5_Virez1mpTillmin();
echo '<br>AT6_Virez1Tillmin='.$L16->AT6_Virez1Tillmin();
echo '<br>AT7_PogonRez1mpmin='.$L16->AT7_PogonRez1mpmin();
echo '<br>AT8_Pogon1Perimmin='.$L16->AT8_Pogon1Perimmin();
echo '<br>AT10_1mpKleyShvamin='.$L16->AT10_1mpKleyShvamin();
echo '<br>AT11_1PerimKleyShvamin='.$L16->AT11_1PerimKleyShvamin();
echo '<br>AT13_ObkatPVH1mpmin='.$L16->AT13_ObkatPVH1mpmin();
echo '<br>AT14_ObkatPerimmin='.$L16->AT14_ObkatPerimmin();
echo '<br>AT16_Vkrut1SamorezSermin='.$L16->AT16_Vkrut1SamorezSermin();
echo '<br>AT17_Vkrut1Perimmin='.$L16->AT17_Vkrut1Perimmin();
echo '<br>AT19_TillKrUlicamin='.$L16->AT19_TillKrUlicamin();
echo '<br>AT20_TillPomeshmin='.$L16->AT20_TillPomeshmin();
echo '<br>AT21_PVH4TillPomeshmin='.$L16->AT21_PVH4TillPomeshmin();
echo '<br>AT23_TillKrmin='.$L16->AT23_TillKrmin();
echo '<br>AT24_TillUlicamin='.$L16->AT24_TillUlicamin();
echo '<br>AT25_TillPomeshmin='.$L16->AT25_TillPomeshmin();
echo '<br>AT26_PVH4TillPomeshmin='.$L16->AT26_PVH4TillPomeshmin();
echo '<br>AT27_SobrTillmin='.$L16->AT27_SobrTillmin();

echo '<br>AW6_StoimMatgrn='.$L16->AW6_StoimMatgrn();
echo '<br>AW10_TrudTillgrn='.$L16->AW10_TrudTillgrn();
echo '<br>AW11_StoimRabgrn='.$L16->AW11_StoimRabgrn();
echo '<br>AW15_TillPVH5mm='.$L16->AW15_TillPVH5mm();
echo '<br>AW16_TillPVH4mm='.$L16->AW16_TillPVH4mm();
echo '<br>AW17_TillPVH3mm='.$L16->AW17_TillPVH3mm();
echo '<br>AW18_TillDVP='.$L16->AW18_TillDVP();
echo '<br>AW22_Veskg='.$L16->AW22_Veskg();
echo '<br>AW24_Itogogrn='.$L16->AW24_Itogogrn();

?>
</body>
</html>
