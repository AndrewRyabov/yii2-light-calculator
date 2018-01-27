<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 27.06.2017
 * Time: 16:32
 */
// Загрузка классов
include_once 'class.09.php';
include_once 'class.10.php';
include_once 'class.17.php';

// инициализация классов
$L09 = new L09();
$L10 = new L10();
$L17 = new L17(0, 1, 0, 0, 0, 300, 60, 1);

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
	echo '<br>E5_Ulica='.$L17->E5_Ulica();
	echo '<br>E6_Pomechenie='.$L17->E6_Pomechenie();
	echo '<br>E8_NalichieOporUlica='.$L17->E8_NalichieOporUlica();
	echo '<br>E9_NalichieOporPomech='.$L17->E9_NalichieOporPomech();

	echo '<br>H5_LargeSize_m='.$L17->H5_LargeSize_m();
	echo '<br>H6_SmallSize_m='.$L17->H6_SmallSize_m();
	echo '<br>H7_PlochadFasada_m2='.$L17->H7_PlochadFasada_m2();
	echo '<br>H9_Acril3mm_1m2='.$L17->H9_Acril3mm_1m2();
	echo '<br>H10_PererashodAcrila='.$L17->H10_PererashodAcrila();
	echo '<br>H11_StoimostRezaAkril1mp_grn='.$L17->H11_StoimostRezaAkril1mp_grn();
	echo '<br>H12_UDProfil1mp_grn='.$L17->H12_UDProfil1mp_grn();
	echo '<br>H13_PererashodUDProfil='.$L17->H13_PererashodUDProfil();
	echo '<br>H14_Samorez_1shtuk='.$L17->H14_Samorez_1shtuk();
	echo '<br>H15_RashodSamorezna1mp_shtuk='.$L17->H15_RashodSamorezna1mp_shtuk();
	echo '<br>H18_PAcrilOpora1storona_grn='.$L17->H18_PAcrilOpora1storona_grn();
	echo '<br>H19_Vurezanie1Opori_grn='.$L17->H19_Vurezanie1Opori_grn();
	echo '<br>H20_UDOpora1Storona_grn='.$L17->H20_UDOpora1Storona_grn();
	echo '<br>H21_SamorezOpora1Storona_shtuk='.$L17->H21_SamorezOpora1Storona_shtuk();
	echo '<br>H22_SamorezOpora1Storona_grn='.$L17->H22_SamorezOpora1Storona_grn();
	echo '<br>H23_Opora1storona_grn='.$L17->H23_Opora1storona_grn();
	echo '<br>H24_opora2Storoni_grn='.$L17->H24_opora2Storoni_grn();
	echo '<br>H26_KolichestvoOporKrusha_shtuk='.$L17->H26_KolichestvoOporKrusha_shtuk();
	echo '<br>H27_KolichestvoOporStenaUlica_shtuk='.$L17->H27_KolichestvoOporStenaUlica_shtuk();
	echo '<br>H28_KolichestvoOporPomechenie1_shtuk='.$L17->H28_KolichestvoOporPomechenie1_shtuk();
	echo '<br>H29_KolichestvoOporPomechenie2_shtuk='.$L17->H29_KolichestvoOporPomechenie2_shtuk();
	echo '<br>H30_KolichestvoOporPomechenie4_shtuk='.$L17->H30_KolichestvoOporPomechenie4_shtuk();
	echo '<br>H32_OporuKrushaItogo_grn='.$L17->H32_OporuKrushaItogo_grn();
	echo '<br>H33_OporuKrushaItogo_grn='.$L17->H33_OporuKrushaItogo_grn();
	echo '<br>H34_OporuStenaPomecheniaItogo_grn='.$L17->H34_OporuStenaPomecheniaItogo_grn();
	echo '<br>H35_Oporu2StoroniItogo_grn='.$L17->H35_Oporu2StoroniItogo_grn();
	echo '<br>H36_Oporu4StoroniItogo_grn='.$L17->H36_Oporu4StoroniItogo_grn();
	echo '<br>H37_MaterialOporItogo_grn='.$L17->H37_MaterialOporItogo_grn();
	
	echo '<br>I9_Akril3mm1m2_kg='.$L17->I9_Akril3mm1m2_kg();
	echo '<br>I12_UDprofil1mp_grn_kg='.$L17->I12_UDprofil1mp_grn_kg();
	echo '<br>I18_AkrilOpora1Storona_grn_kg='.$L17->I18_AkrilOpora1Storona_grn_kg();
	echo '<br>I20_UDOpora1Storona_grn_kg='.$L17->I20_UDOpora1Storona_grn_kg();
	echo '<br>I23_Opora1storona_grn='.$L17->I23_Opora1storona_grn();
	echo '<br>I24_opora2Storoni_grn='.$L17->I24_opora2Storoni_grn();
	echo '<br>I32_OporiKrushaItogo_grn='.$L17->I32_OporiKrushaItogo_grn();
	echo '<br>I33_OporiUlicaItogo_grn='.$L17->I33_OporiUlicaItogo_grn();
	echo '<br>I34_OporiStenaPomechenieItogo_grn='.$L17->I34_OporiStenaPomechenieItogo_grn();
	echo '<br>I35_Opori2StoroniItogo_grn='.$L17->I35_Opori2StoroniItogo_grn();
	echo '<br>I36_Opori4StoroniItogo_grn='.$L17->I36_Opori4StoroniItogo_grn();
	echo '<br>I37_MaterialOporItogo_grn='.$L17->I37_MaterialOporItogo_grn();

	echo '<br>L5_Virezat1ProfilUD_min='.$L17->L5_Virezat1ProfilUD_min();
	echo '<br>L6_Virezat1Samorez_min='.$L17->L6_Virezat1Samorez_min();
	echo '<br>L8_SobratOpory1Storona_min='.$L17->L8_SobratOpory1Storona_min();
	echo '<br>L10_OporaIzgotovit1Storona_min='.$L17->L10_OporaIzgotovit1Storona_min();
	echo '<br>L11_OporaIzgotovit2Storona_min='.$L17->L11_OporaIzgotovit2Storona_min();
	echo '<br>L13_OporaKrushaItogo_min='.$L17->L13_OporaKrushaItogo_min();
	echo '<br>L14_OporaulicaItogo_min='.$L17->L14_OporaulicaItogo_min();
	echo '<br>L15_OporaStenaPomech1Itogo_min='.$L17->L15_OporaStenaPomech1Itogo_min();
	echo '<br>L16_OporaStenaPomech2Itogo_min='.$L17->L16_OporaStenaPomech2Itogo_min();
	echo '<br>L17_OporaStenaPomech4Itogo_min='.$L17->L17_OporaStenaPomech4Itogo_min();
	echo '<br>L18_OporiItogo_min='.$L17->L18_OporiItogo_min();
	
	echo '<br>O6_StoimostMaterialov_grn='.$L17->O6_StoimostMaterialov_grn();
	echo '<br>O10_TrydoemkostRobotu_min='.$L17->O10_TrydoemkostRobotu_min();
	echo '<br>O11_StoimostRabotu_grn='.$L17->O11_StoimostRabotu_grn();
	echo '<br>O22_Ves_kg='.$L17->O22_Ves_kg();
	echo '<br>O24_Itogo_grn='.$L17->O24_Itogo_grn();

?>
</body>
</html>



