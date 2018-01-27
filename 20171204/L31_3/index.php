<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 03.11.2017
 * Time: 17:22
 */
// Загрузка классов

include_once 'class.10.php';
include_once 'class.31.php';

// инициализация классов

$L10 = new L10();
$L31 = new L31(0, 0, 0, 0,  1, 1, 170, 50, 1, 7355, 29, 1);

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
	echo '<br>AQ5_ViveskaRazb='.$L31->AQ5_ViveskaRazb();
echo '<br>AQ6_ViveskaYerazb='.$L31->AQ6_ViveskaYerazb();
echo '<br>AQ8_ViveskaOdinochanaa12sm='.$L31->AQ8_ViveskaOdinochanaa12sm();
echo '<br>AQ9_ViveskaOdinochanaa24sm='.$L31->AQ9_ViveskaOdinochanaa24sm();
echo '<br>AQ10_Viveska4StorNerazb='.$L31->AQ10_Viveska4StorNerazb();
echo '<br>AQ11_Viveska4StorRazb='.$L31->AQ11_Viveska4StorRazb();
echo '<br>AQ13_Viv1Ili2Stor='.$L31->AQ13_Viv1Ili2Stor();
echo '<br>AT5_BolichiiRazmerDvp_m='.$L31->AT5_BolichiiRazmerDvp_m();
echo '<br>AT6_MenchiiRazmerDvp_m='.$L31->AT6_MenchiiRazmerDvp_m();
echo '<br>AT7_FasadPlockoiPlochadi_m2='.$L31->AT7_FasadPlockoiPlochadi_m2();
echo '<br>AT8_PerumetrPlockoiViveski_mp='.$L31->AT8_PerumetrPlockoiViveski_mp();
echo '<br>AT10_GorizontalniiRazmer_m='.$L31->AT10_GorizontalniiRazmer_m();
echo '<br>AT11_VertikaniiRazmer_m='.$L31->AT11_VertikaniiRazmer_m();
echo '<br>AT12_Perimetr4StoronViveski_mp='.$L31->AT12_Perimetr4StoronViveski_mp();
echo '<br>AT13_BokovaaPloch4StorViv_m2='.$L31->AT13_BokovaaPloch4StorViv_m2();
echo '<br>AT14_Ploch2TorcZagl4StorVuv_m2='.$L31->AT14_Ploch2TorcZagl4StorVuv_m2();
echo '<br>AT15_DvpYpakDlaNerazborVuv_m2='.$L31->AT15_DvpYpakDlaNerazborVuv_m2();
echo '<br>AT16_DvpYpakDlaNerazborVuv_m2='.$L31->AT16_DvpYpakDlaNerazborVuv_m2();
echo '<br>AT17_SamorYpakDlaNerazbVuv_sht='.$L31->AT17_SamorYpakDlaNerazbVuv_sht();

echo '<br>AT19_BokovaaPloch2TorcZagl4StorVuv_m2='.$L31->AT19_BokovaaPloch2TorcZagl4StorVuv_m2();
echo '<br>AT20_DvpYpakDlaNerazborVuv_m2='.$L31->AT20_DvpYpakDlaNerazborVuv_m2();
echo '<br>AT21_PlankiYpakDla1RazbVuv_mp='.$L31->AT21_PlankiYpakDla1RazbVuv_mp();
echo '<br>AT22_SamorYpakDla1RazbVuv_sht='.$L31->AT22_SamorYpakDla1RazbVuv_sht();
echo '<br>AT24_VisotaPaketa1StoronVuv_m='.$L31->AT24_VisotaPaketa1StoronVuv_m();
echo '<br>AT25_BokovaaPloch2TorcZagl4StorVuv_m2='.$L31->AT25_BokovaaPloch2TorcZagl4StorVuv_m2();
echo '<br>AT26_DvpYpakDla1PaketaVuv_mp='.$L31->AT26_DvpYpakDla1PaketaVuv_mp();
echo '<br>AT27_PlankiYpakDla1PaketaVuv_mp='.$L31->AT27_PlankiYpakDla1PaketaVuv_mp();
echo '<br>AT28_SamorYpakDla1PaketaVuv_sht='.$L31->AT28_SamorYpakDla1PaketaVuv_sht();

echo '<br>AT31_DvpYpakovochnoe1m2_grn='.$L31->AT31_DvpYpakovochnoe1m2_grn();
echo '<br>AT32_PererasxodDvpYpakovochnogo='.$L31->AT32_PererasxodDvpYpakovochnogo();
echo '<br>AT33_PlankaDerevo1mp_grn='.$L31->AT33_PlankaDerevo1mp_grn();
echo '<br>AT34_PererasxodPlank1='.$L31->AT34_PererasxodPlank1();
echo '<br>AT35_Stoimos1Samoreza_grn='.$L31->AT35_Stoimos1Samoreza_grn();
echo '<br>AT37_PaketVivesok1StoronaMater_grn='.$L31->AT37_PaketVivesok1StoronaMater_grn();
echo '<br>AT38_1Viveska4StorRazbMater_grn='.$L31->AT38_1Viveska4StorRazbMater_grn();
echo '<br>AT39_1Viveska4StorNerazbMater_grn='.$L31->AT39_1Viveska4StorNerazbMater_grn();
echo '<br>AT41_PaketVivesok1StoronaMater_grn='.$L31->AT41_PaketVivesok1StoronaMater_grn();
echo '<br>AT42_Viveska4StorRazbMater_grn='.$L31->AT42_Viveska4StorRazbMater_grn();
echo '<br>AT43_Viveska4StorNerazbMater_grn='.$L31->AT43_Viveska4StorNerazbMater_grn();
echo '<br>AT45_PaketVivesok1StoronaMater_grn='.$L31->AT45_PaketVivesok1StoronaMater_grn();
echo '<br>AT46_1Viveska4StorRazbMater_grn='.$L31->AT46_1Viveska4StorRazbMater_grn();
echo '<br>AT47_1Viveska4StorNerazbMater_grn='.$L31->AT47_1Viveska4StorNerazbMater_grn();
echo '<br>AT48_ItogoMaterYpakovochnii_grn='.$L31->AT48_ItogoMaterYpakovochnii_grn();

echo '<br>AW5_VisotaYpakovki_m='.$L31->AW5_VisotaYpakovki_m();
echo '<br>AW6_KolYpakovok_sht='.$L31->AW6_KolYpakovok_sht();
echo '<br>AW7_ObuemYpakovki_m3='.$L31->AW7_ObuemYpakovki_m3();
echo '<br>AW8_ObuemYpakovok_m3='.$L31->AW8_ObuemYpakovok_m3();
echo '<br>AW11_PlotnostDvp_kgm2='.$L31->AW11_PlotnostDvp_kgm2();
echo '<br>AW12_PlochadYpakovki_m2='.$L31->AW12_PlochadYpakovki_m2();
echo '<br>AW13_VesDvpYpak_kg='.$L31->AW13_VesDvpYpak_kg();

echo '<br>AZ5_DvpPerimetrNerazbViv_mp='.$L31->AZ5_DvpPerimetrNerazbViv_mp();
echo '<br>AZ6_DvpPerimetrNerazbViv_min='.$L31->AZ6_DvpPerimetrNerazbViv_min();
echo '<br>AZ7_PrirezatPlankiDer_min='.$L31->AZ7_PrirezatPlankiDer_min();
echo '<br>AZ8_VkrytitSamorez_min='.$L31->AZ8_VkrytitSamorez_min();
echo '<br>AZ9_NerazbViveska4Stor_min='.$L31->AZ9_NerazbViveska4Stor_min();
echo '<br>AZ11_DvpPerimetrRazbViv_mp='.$L31->AZ11_DvpPerimetrRazbViv_mp();
echo '<br>AZ12_DvpPerimetrVirezat_min='.$L31->AZ12_DvpPerimetrVirezat_min();
echo '<br>AZ13_PrirezatPlankiDer_min='.$L31->AZ13_PrirezatPlankiDer_min();
echo '<br>AZ14_VkrytitSamorezi_min='.$L31->AZ14_VkrytitSamorezi_min();
echo '<br>AZ15_RazbViveska4Stor_min='.$L31->AZ15_RazbViveska4Stor_min();
echo '<br>AZ17_DvpPerimetrPaket1Stor_mp='.$L31->AZ17_DvpPerimetrPaket1Stor_mp();
echo '<br>AZ18_DvpPerimetrVirezat_min='.$L31->AZ18_DvpPerimetrVirezat_min();
echo '<br>AZ19_PrirezatPlankiDer_min='.$L31->AZ19_PrirezatPlankiDer_min();
echo '<br>AZ20_VkrytitSamorezi_min='.$L31->AZ20_VkrytitSamorezi_min();
echo '<br>AZ21_Paker1StorVivesok_min='.$L31->AZ21_Paker1StorVivesok_min();
echo '<br>AZ24_PakerVivesok1Storona_min='.$L31->AZ24_PakerVivesok1Storona_min();
echo '<br>AZ25_Viveski4StorRazb_min='.$L31->AZ25_Viveski4StorRazb_min();
echo '<br>AZ26_Viveski4StorNerazb_min='.$L31->AZ26_Viveski4StorNerazb_min();
echo '<br>AZ28_PakerVivesok1Storona_min='.$L31->AZ28_PakerVivesok1Storona_min();
echo '<br>AZ29_Viveski4StorRazb_min='.$L31->AZ29_Viveski4StorRazb_min();
echo '<br>AZ30_Viveski4StorNerazb_min='.$L31->AZ30_Viveski4StorNerazb_min();
echo '<br>AZ31_ItogoRabota_min='.$L31->AZ31_ItogoRabota_min();

echo '<br>BC6_StoimostMaterialov_grn='.$L31->BC6_StoimostMaterialov_grn();
echo '<br>BC10_TrydoemkNPYpakovki_min='.$L31->BC10_TrydoemkNPYpakovki_min();
echo '<br>BC11_StoimRabPoYpakovke_grn='.$L31->BC11_StoimRabPoYpakovke_grn();
echo '<br>BC15_BolchiiRazmer_m='.$L31->BC15_BolchiiRazmer_m();
echo '<br>BC16_MenchiiRazmer_m='.$L31->BC16_MenchiiRazmer_m();
echo '<br>BC17_Visota_m='.$L31->BC17_Visota_m();
echo '<br>BC18_VesViveskaPlusYpakovka_kg='.$L31->BC18_VesViveskaPlusYpakovka_kg();
echo '<br>BC19_StoimostPosilki_grn='.$L31->BC19_StoimostPosilki_grn();
echo '<br>BC20_KolichestvoPosilok_sht='.$L31->BC20_KolichestvoPosilok_sht();
echo '<br>BC30_YpakovkaDlaNPNal_grn='.$L31->BC30_YpakovkaDlaNPNal_grn();




?>
</body>
</html>



