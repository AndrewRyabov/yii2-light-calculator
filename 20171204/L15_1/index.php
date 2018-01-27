<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: Andrii
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
$L15 = new L15(0, 1, 0, 0, 0, 1, 300, 60, 0, 0);

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

echo '<br>E5_FillSide='.$L15->E5_FillSide();
echo '<br>E6_FilmBack='.$L15->E6_FilmBack();
echo '<br>H5_GorisR_cm='.$L15->H5_GorisR_cm();
echo '<br>H6_VerticalR_cm='.$L15->H6_VerticalR_cm();
echo '<br>H7_GorisR_m='.$L15->H7_GorisR_m();
echo '<br>H8_GorisRTill4Stor_m='.$L15->H8_GorisRTill4Stor_m();
echo '<br>H9_VerticalR_m='.$L15->H9_VerticalR_m();
echo '<br>H11_PerimeKrisha_mp='.$L15->H11_PerimeKrisha_mp();
echo '<br>H12_PerimeUlica_mp='.$L15->H12_PerimeUlica_mp();
echo '<br>H13_PerimeStenaPomesh_mp='.$L15->H13_PerimeStenaPomesh_mp();
echo '<br>H14_Perime2StorPomesh_mp='.$L15->H14_Perime2StorPomesh_mp();
echo '<br>H15_Perime4StorPomesh_mp='.$L15->H15_Perime4StorPomesh_mp();
echo '<br>H19_PloshBKrisha_m2='.$L15->H19_PloshBKrisha_m2();
echo '<br>H20_PloshBUlica_m2='.$L15->H20_PloshBUlica_m2();
echo '<br>H21_PloshBSPomesh_m2='.$L15->H21_PloshBSPomesh_m2();
echo '<br>H22_PloshB2StorPomesh_m2='.$L15->H22_PloshB2StorPomesh_m2();
echo '<br>H23_PloshB4StorPomesh_m2='.$L15->H23_PloshB4StorPomesh_m2();
echo '<br>H25_PloshTKrisha_m2='.$L15->H25_PloshTKrisha_m2();
echo '<br>H26_PloshTUlica_m2='.$L15->H26_PloshTUlica_m2();
echo '<br>H27_PloshTSPomesh_m2='.$L15->H27_PloshTSPomesh_m2();
echo '<br>H28_Plosh4SPomesh_m2='.$L15->H28_Plosh4SPomesh_m2();
echo '<br>H30_PloshBPredvar_m2='.$L15->H30_PloshBPredvar_m2();
echo '<br>H31_PloshB_m2='.$L15->H31_PloshB_m2();
echo '<br>H32_PloshTPredvar_m2='.$L15->H32_PloshTPredvar_m2();
echo '<br>H33_PloshTill_m2='.$L15->H33_PloshTill_m2();
echo '<br>K5_KrishaBort_min='.$L15->K5_KrishaBort_min();
echo '<br>K6_UlicaBort_min='.$L15->K6_UlicaBort_min();
echo '<br>K7_StenaPBort_min='.$L15->K7_StenaPBort_min();
echo '<br>K8_2StoroniBort_min='.$L15->K8_2StoroniBort_min();
echo '<br>K9_4StoroniBort_min='.$L15->K9_4StoroniBort_min();
echo '<br>K11_KrishaTil_min='.$L15->K11_KrishaTil_min();
echo '<br>K12_UlicaTil_min='.$L15->K12_UlicaTil_min();
echo '<br>K13_StenaPTil_min='.$L15->K13_StenaPTil_min();
echo '<br>K14_4StoroniTil_min='.$L15->K14_4StoroniTil_min();
echo '<br>K16_BortPredvar_min='.$L15->K16_BortPredvar_min();
echo '<br>K17_Bort_min='.$L15->K17_Bort_min();
echo '<br>K18_TilPredvar_min='.$L15->K18_TilPredvar_min();
echo '<br>K19_Til_min='.$L15->K19_Til_min();
echo '<br>N5_PloshPlenki_m2='.$L15->N5_PloshPlenki_m2();
echo '<br>N6_PlenkaItogo_mp='.$L15->N6_PlenkaItogo_mp();
echo '<br>N7_StoimPlenki_grn='.$L15->N7_StoimPlenki_grn();
echo '<br>N11_TrudNanes_min='.$L15->N11_TrudNanes_min();
echo '<br>N12_StoimRaboti_grn='.$L15->N12_StoimRaboti_grn();
echo '<br>N24_Itogo_grn='.$L15->N24_Itogo_grn();

?>
</body>
</html>
