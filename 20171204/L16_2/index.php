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
$L16 = new L16(0, 0, 0, 1, 0, 1, 300, 60, 1);

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

echo '<br>V5_FasadPolik='.$L16->V5_FasadPolik();
echo '<br>V6_FasadAkril='.$L16->V6_FasadAkril();
echo '<br>V8_Ulica='.$L16->V8_Ulica();
echo '<br>V9_Pomesh='.$L16->V9_Pomesh();
echo '<br>V11_1Stor='.$L16->V11_1Stor();
echo '<br>V12_2Stor='.$L16->V12_2Stor();
echo '<br>V13_4Stor='.$L16->V13_4Stor();
echo '<br>Y5_BolshRm='.$L16->Y5_BolshRm();
echo '<br>Y6_MenshRm='.$L16->Y6_MenshRm();
echo '<br>Y7_GorisRasm='.$L16->Y7_GorisRasm();
echo '<br>Y8_VerticalRasm='.$L16->Y8_VerticalRasm();
echo '<br>Y9_Perimrtrm='.$L16->Y9_Perimrtrm();
echo '<br>Y10_4Uglam='.$L16->Y10_4Uglam();
echo '<br>Y11_Perim4Bortm='.$L16->Y11_Perim4Bortm();
echo '<br>Y14_Stoim1m2PVH5mmgrn='.$L16->Y14_Stoim1m2PVH5mmgrn();
echo '<br>Y15_Stoim1m2PVH4mmgrn='.$L16->Y15_Stoim1m2PVH4mmgrn();
echo '<br>Y16_Stoim1m2PVHBortgrn='.$L16->Y16_Stoim1m2PVHBortgrn();
echo '<br>Y17_PereeashPVH='.$L16->Y17_PereeashPVH();
echo '<br>Y18_Kley1mpOdnShvgrn='.$L16->Y18_Kley1mpOdnShvgrn();
echo '<br>Y19_Kley1Perimgrn='.$L16->Y19_Kley1Perimgrn();
echo '<br>Y20_Kley4Uglagrn='.$L16->Y20_Kley4Uglagrn();
echo '<br>Y22_UlicaBortm2='.$L16->Y22_UlicaBortm2();
echo '<br>Y23_StenaPomeshBortm2='.$L16->Y23_StenaPomeshBortm2();
echo '<br>Y24_2StorPomeshBortm2='.$L16->Y24_2StorPomeshBortm2();
echo '<br>Y25_4StorPomeshBortm2='.$L16->Y25_4StorPomeshBortm2();
echo '<br>Y27_KrKozUlicaBortm2='.$L16->Y27_KrKozUlicaBortm2();
echo '<br>Y28_StenaUlicaBortm2='.$L16->Y28_StenaUlicaBortm2();
echo '<br>Y29_StenaPomeshBortm2='.$L16->Y29_StenaPomeshBortm2();
echo '<br>Y30_2StorPomeshBortm2='.$L16->y30_2StorPomeshBortm2();
echo '<br>Y31_4StorPomeshBortm2='.$L16->Y31_4StorPomeshBortm2();
echo '<br>Y32_PVHPlastBortm2='.$L16->Y32_PVHPlastBortm2();
echo '<br>Y34_KrRozUlicaBortgrn='.$L16->Y34_KrRozUlicaBortgrn();
echo '<br>Y35_StenaUlicaBortgrn='.$L16->Y35_StenaUlicaBortgrn();
echo '<br>Y36_StenaPomeshBortgrn='.$L16->Y36_StenaPomeshBortgrn();
echo '<br>Y37_2StorPomeshBortgrn='.$L16->Y37_2StorPomeshBortgrn();
echo '<br>Y38_4StorPomeshBortgrn='.$L16->Y38_4StorPomeshBortgrn();
echo '<br>Y39_PVHPlastBortgrn='.$L16->Y39_PVHPlastBortgrn();
echo '<br>Y41_KleyKrKozgrn='.$L16->Y41_KleyKrKozgrn();
echo '<br>Y42_KleyStenaUlicagrn='.$L16->Y42_KleyStenaUlicagrn();
echo '<br>Y43_KleyStenaPomeshgrn='.$L16->Y43_KleyStenaPomeshgrn();
echo '<br>Y44_Kley2StorPomeshgrn='.$L16->Y44_Kley2StorPomeshgrn();
echo '<br>Y45_Kley4StorPomeshgrn='.$L16->Y45_Kley4StorPomeshgrn();
echo '<br>Y46_Kleygrn='.$L16->Y46_Kleygrn();
echo '<br>AC5_VirezRust1Permin='.$L16->AC5_VirezRust1Permin();
echo '<br>AC6_Virez4PVHBortmin='.$L16->AC6_Virez4PVHBortmin();
echo '<br>AC7_VkleyRust1Permin='.$L16->AC7_VkleyRust1Permin();
echo '<br>AC8_SobrNaKley4Bortmin='.$L16->AC8_SobrNaKley4Bortmin();
echo '<br>AC10_KrKozUlicaBortmin='.$L16->AC10_KrKozUlicaBortmin();
echo '<br>AC11_StenaUlicaBortmin='.$L16->AC11_StenaUlicaBortmin();
echo '<br>AC12_StenaPomeshBortmin='.$L16->AC12_StenaPomeshBortmin();
echo '<br>AC13_2StorPomeshBortmin='.$L16->AC13_2StorPomeshBortmin();
echo '<br>AC14_4StorPomeshBortmin='.$L16->AC14_4StorPomeshBortmin();
echo '<br>AC16_KrKozUlicaBortmin='.$L16->Ac16_KrKozUlicaBortmin();
echo '<br>AC17_StenaUlicaBortmin='.$L16->AC17_StenaUlicaBortmin();
echo '<br>AC18_StenaPomeshBortmin='.$L16->AC18_StenaPomeshBortmin();
echo '<br>AC19_2StorPomeshBortmin='.$L16->AC19_2StorPomeshBortmin();
echo '<br>AC20_4StorPomeshBortmin='.$L16->AC20_4StorPomeshBortmin();
echo '<br>AC21_SobrPVHBortmin='.$L16->AC21_SobrPVHBortmin();
echo '<br>AF5_PVHPlastm2='.$L16->AF5_PVHPlastm2();
echo '<br>AF6_StoimMatgrn='.$L16->AF6_StoimMatgrn();
echo '<br>AF10_TrudBortgrn='.$L16->AF10_TrudBortgrn();
echo '<br>AF11_StoimRabgrn='.$L16->AF11_StoimRabgrn();
echo '<br>AF22_Veskg='.$L16->AF22_Veskg();
echo '<br>AF24_StoimRabgrn='.$L16->AF24_StoimRabgrn();

?>
</body>
</html>
