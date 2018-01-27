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
include_once 'class.16.php';

// инициализация классов
$L09 = new L09();
$L10 = new L10();
$L16 = new L16(0, 1, 0, 0, 0, 300, 60, 1);

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
	echo '<br>E5_MaxSize='.$L16->E5_MaxSize();
	echo '<br>E6_MaxSize2='.$L16->E6_MaxSize2();
	echo '<br>E8_Akril='.$L16->E8_Akril();
	echo '<br>E9_Polik='.$L16->E9_Polik();
	echo '<br>E10_AkrilItogo='.$L16->E10_AkrilItogo();
	echo '<br>E11_PolikItogo='.$L16->E11_PolikItogo();
	echo '<br>E13_Ulica='.$L16->E13_Ulica();
	echo '<br>E14_Pomechenie='.$L16->E14_Pomechenie();
	echo '<br>E16_PolikUlicaTolst='.$L16->E16_PolikUlicaTolst();
	echo '<br>E17_PolikUlicaTonk='.$L16->E17_PolikUlicaTonk();
	echo '<br>E18_PolikPomecheniaTolst='.$L16->E18_PolikPomecheniaTolst();
	echo '<br>E19_PolikPomecheniaTonk='.$L16->E19_PolikPomecheniaTonk();
	echo '<br>E20_AkrilUlicaTolst='.$L16->E20_AkrilUlicaTolst();
	echo '<br>E21_AkrilUlicaTonk='.$L16->E21_AkrilUlicaTonk();
	echo '<br>E22_AkrilPomecheniaTolst='.$L16->E22_AkrilPomecheniaTolst();
	echo '<br>E23_AkrilPomecheniaTonk='.$L16->E23_AkrilPomecheniaTonk();
	echo '<br>E25_1Storona='.$L16->E25_1Storona();
	echo '<br>E26_2Storonu='.$L16->E26_2Storonu();
	echo '<br>E27_4Storonu='.$L16->E27_4Storonu();

	echo '<br>H5_LargeSize_m='.$L16->H5_LargeSize_m();
	echo '<br>H6_SmallSize_m='.$L16->H6_SmallSize_m();
	echo '<br>H7_PrimetrFasada_mp='.$L16->H7_PrimetrFasada_mp();
	echo '<br>H8_SmallSize_m='.$L16->H8_SmallSize_m();
	echo '<br>H9_PlochadMaterialaFasad_m2='.$L16->H9_PlochadMaterialaFasad_m2();
	echo '<br>H10_Cena1mpCleia_grn='.$L16->H10_Cena1mpCleia_grn();
	echo '<br>H12_PolicarbonatKrusha6mm_grn='.$L16->H12_PolicarbonatKrusha6mm_grn();
	echo '<br>H13_PolicarbonatUlica6mm_grn='.$L16->H13_PolicarbonatUlica6mm_grn();
	echo '<br>H14_PolicarbonatUlica4mm_grn='.$L16->H14_PolicarbonatUlica4mm_grn();
	echo '<br>H15_PolicarbonatPomechenia6mm_grn='.$L16->H15_PolicarbonatPomechenia6mm_grn();
	echo '<br>H16_PolicarbonatPomechenia4mm_grn='.$L16->H16_PolicarbonatPomechenia4mm_grn();
	echo '<br>H17_PolicarbonatFasad_grn='.$L16->H17_PolicarbonatFasad_grn();
	echo '<br>H19_AkrilUlica3mm_grn='.$L16->H19_AkrilUlica3mm_grn();
	echo '<br>H20_AkrilUlica2mm_grn='.$L16->H20_AkrilUlica2mm_grn();
	echo '<br>H21_AkrilPomechenia3mm_grn='.$L16->H21_AkrilPomechenia3mm_grn();
	echo '<br>H22_AkrilPomechenia2mm_grn='.$L16->H22_AkrilPomechenia2mm_grn();
	echo '<br>H23_AkrilFasad_grn='.$L16->H23_AkrilFasad_grn();
	echo '<br>H25_FasadPlastik1Side_grn='.$L16->H25_FasadPlastik1Side_grn();
	echo '<br>H26_FasadPlastik_grn='.$L16->H26_FasadPlastik_grn();
	echo '<br>H28_Klei1FasadPolik_grn='.$L16->H28_Klei1FasadPolik_grn();
	echo '<br>H29_Klei1FasadAkril_grn='.$L16->H29_Klei1FasadAkril_grn();
	echo '<br>H30_Klei1Fasad_grn='.$L16->H30_Klei1Fasad_grn();
	echo '<br>H31_Klei_grn='.$L16->H31_Klei_grn();

    echo '<br>I12_PolicarbonatKrusha6mm_grn_kg='.$L16->I12_PolicarbonatKrusha6mm_grn_kg();
    echo '<br>I13_PolicarbonatUlica6mm_grn_kg='.$L16->I13_PolicarbonatUlica6mm_grn_kg();
    echo '<br>I14_PolicarbonatUlica4mm_grn_kg='.$L16->I14_PolicarbonatUlica4mm_grn_kg();
    echo '<br>I15_PolicarbonatPomechenie6mm_grn_kg='.$L16->I15_PolicarbonatPomechenie6mm_grn_kg();
    echo '<br>I16_PolicarbonatPomechenie4mm_grn_kg='.$L16->I16_PolicarbonatPomechenie4mm_grn_kg();
    echo '<br>I17_PolikarbonatFasad_grn_kg='.$L16->I17_PolikarbonatFasad_grn_kg();
    echo '<br>I19_AkrilUlica3mm_grn_kg='.$L16->I19_AkrilUlica3mm_grn_kg();
    echo '<br>I20_AkrilUlica2mm_grn_kg='.$L16->I20_AkrilUlica2mm_grn_kg();
    echo '<br>I21_AkrilPomechenie3mm_grn_kg='.$L16->I21_AkrilPomechenie3mm_grn_kg();
    echo '<br>I22_AkrilPomechenie2mm_grn_kg='.$L16->I22_AkrilPomechenie2mm_grn_kg();
    echo '<br>I23_AkrilFasad_grn_kg='.$L16->I23_AkrilFasad_grn_kg();
    echo '<br>I25_FasadPlastik1Storona_grn_kg='.$L16->I25_FasadPlastik1Storona_grn_kg();
    echo '<br>I26_FasadPlastikVseStoroni_grn_kg='.$L16->I26_FasadPlastikVseStoroni_grn_kg();




	echo '<br>L5_Virezat1AkrilFasada_min='.$L16->L5_Virezat1AkrilFasada_min();
	echo '<br>L6_Virezat1PolikFasada_min='.$L16->L6_Virezat1PolikFasada_min();
	echo '<br>L7_Virezat1Fasad_min='.$L16->L7_Virezat1Fasad_min();
	echo '<br>L9_Vkleit1mp_min='.$L16->L9_Vkleit1mp_min();
	echo '<br>L10_Vkleit1FasadPolik_min='.$L16->L10_Vkleit1FasadPolik_min();
	echo '<br>L11_Vkleit1FasadAcril_min='.$L16->L11_Vkleit1FasadAcril_min();
	echo '<br>L12_Vkleit1Fasad_min='.$L16->L12_Vkleit1Fasad_min();
	echo '<br>L14_Obkatatpvx_min1mp='.$L16->L14_Obkatatpvx_min1mp();
	echo '<br>L15_ObkatatAcril_min1mp='.$L16->L15_ObkatatAcril_min1mp();
	echo '<br>L16_Obkatat1mp='.$L16->L16_Obkatat1mp();
	echo '<br>L17_Obkatat1Fasad_min='.$L16->L17_Obkatat1Fasad_min();
	echo '<br>L19_FasadObrabotka1Storona_min='.$L16->L19_FasadObrabotka1Storona_min();
	echo '<br>L20_FasadObrabotka_min='.$L16->L20_FasadObrabotka_min();
		
	echo '<br>O6_StoimostMaterialov_grn='.$L16->O6_StoimostMaterialov_grn();
    echo '<br>O7_FasadAkril='.$L16->O7_FasadAkril();
    echo '<br>O8_FasadPolikarbonat='.$L16->O8_FasadPolikarbonat();
	echo '<br>O10_TrydoemkostFasad_min='.$L16->O10_TrydoemkostFasad_min();
	echo '<br>O11_StoimostRabot_grn='.$L16->O11_StoimostRabot_grn();
    echo '<br>O22_Ves_kg='.$L16->O22_Ves_kg();
	echo '<br>O24_Itogo_grn='.$L16->O24_Itogo_grn();




?>
</body>
</html>



