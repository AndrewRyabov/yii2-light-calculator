<?php namespace almaz44\light\calculator;
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 27.07.2017
 * Time: 8:01
 */
class L17
{
    // Входные параметры:
    public $S5_RoofVisorOut; // крыша/козырек улица
    public $S6_WallOut; // стена улица
    public $S7_WallIn; // стена помещение
    public $S8_2SideIn; // 2 стороны помещение
    public $S9_4SideIn; // 4 стороны помещение

    public $S11_Orientacia; // ориентация
    public $S12_BigStor; // Большая сторона
    public $S13_SmallStor; // Маленькая сторона

    public $S20_StoimostOporLicevix_grn;//Стоимость опор лицевых

    public function __construct($RoofVisorOut, $WallOut, $WallIn,
                                $SideIn2, $SideIn4, $Orientacia, $BigStor, $SmallStor, $StoimostOporLicevix_grn)

    {
        // Заполнение входных данных.
        $this->S5_RoofVisorOut = $RoofVisorOut;
        $this->S6_WallOut = $WallOut;
        $this->S7_WallIn = $WallIn;
        $this->S8_2SideIn = $SideIn2;
        $this->S9_4SideIn = $SideIn4;
        $this->S11_Orientacia = $Orientacia;
        $this->S12_BigStor = $BigStor;
        $this->S13_SmallStor = $SmallStor;
        $this->S20_StoimostOporLicevix_grn = $StoimostOporLicevix_grn;
    }

    function Y8_VerticalSize_m()
    {
        //S11=2, то присвоить Y5, иначе вернуть Y6
        //вывод

        if ($this->S11_Orientacia == 2) {
            return $this->Y5_LargeSize_m();
        } else {
            return $this->Y6_SmallSize_m();
        }
    }

    function Y5_LargeSize_m()
    {
        //деление и округление
        //вывод

        return round($this->S12_BigStor / 100, 2);
    }

    function Y6_SmallSize_m()
    {
        //деление и округление
        //вывод

        return round($this->S13_SmallStor / 100, 2);
    }

    function Y9_PlochadFasada_m2()
    {
        //сложение
        //вывод

        return ($this->Y5_LargeSize_m() * $this->Y6_SmallSize_m());
    }

    function Y10_PerimetrViveski_m()
    {
        //сложение
        //вывод

        return ($this->Y5_LargeSize_m() + $this->Y5_LargeSize_m() + $this->Y6_SmallSize_m() + $this->Y6_SmallSize_m());
    }

    function AF22_Ves_kg()
    {
        //округление
        //вывод

        return round($this->Z41_RamaMateriakItogo_grn(), 1);
    }

    function Z41_RamaMateriakItogo_grn()
    {
        //умножение и сложение
        //вывод

        return ($this->Z24_RamaMateriali1Storona_mp_kg() * $this->V9_1Storona() + $this->Z33_RamaMateriali2Storona_grn_kg() * $this->V10_2Storoni() + $this->Z39_RamaMateriali2Storona_grn_kg() * $this->V11_4Storoni());
    }

    function Z24_RamaMateriali1Storona_mp_kg()
    {

        //вывод

        return $this->Z20_DlinaUDProfila_grn_kg();
    }

    function Z20_DlinaUDProfila_grn_kg()
    {
        //умножение
        //вывод

        return $this->Y20_DlinaUDKarkasaItogo_mp() * $this->Z12_UDProfil1mp_grn_kg();
    }

    function Y20_DlinaUDKarkasaItogo_mp()
    {
        //умножение и сложение
        //вывод

        return ($this->Y5_LargeSize_m() * 2 * $this->V17_DlinnaiChastRamu() + $this->Y6_SmallSize_m() * 2 * $this->V18_KorotkaChastRami() + $this->Y6_SmallSize_m() * $this->Y18_KolichectvoPeremichek_shtuk() * $this->V21_PeremickyEst());
    }

    function V17_DlinnaiChastRamu()
    {
        //если V7 =1,V15=1, S5=1, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->V7_SmallSize_m() == 1 or $this->V15_OporiUlica() == 1 or $this->S5_RoofVisorOut == 1) {
            return 1;
        } else {
            return 0;
        }
    }

    function V7_SmallSize_m()
    {
        //умножение
        //вывод

        return ($this->V5_MaxSizeBolee300cm() * $this->V6_MinSizeBolee44sm());
    }

    function V5_MaxSizeBolee300cm()
    {
        //если S12 >300,  то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->S12_BigStor > 300) {
            return 1;
        } else {
            return 0;
        }
    }

    function V6_MinSizeBolee44sm()
    {
        //если S13 >44,  то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->S13_SmallStor > 44) {
            return 1;
        } else {
            return 0;
        }
    }

    function V15_OporiUlica()
    {
        //умножение
        //вывод

        return ($this->V13_Ulica() * $this->V14_OporiLicevieEst());
    }

    function V13_Ulica()
    {
        //сложение
        //вывод

        if ($this->S7_WallIn + $this->S8_2SideIn + $this->S9_4SideIn == 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function V14_OporiLicevieEst()
    {
        //если S20>0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->S20_StoimostOporLicevix_grn > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function V18_KorotkaChastRami()
    {

        //вывод

        return ($this->S5_RoofVisorOut);
    }

    function Y18_KolichectvoPeremichek_shtuk()
    {
        //отнимание и округление
        //вывод

        return round($this->Y5_LargeSize_m() - 1, 0);
    }

    function V21_PeremickyEst()
    {
        //умножение
        //вывод

        return ($this->S5_RoofVisorOut * $this->V20_OporLicevixNet());
    }

    function V20_OporLicevixNet()
    {
        //V14=0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->V14_OporiLicevieEst() == 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function Z12_UDProfil1mp_grn_kg()
    {

        //вывод

        return L10_AS24_ProfileUD_05mmV;
    }

    function V9_1Storona()
    {
        //если S8=0 и S9=0, то присвоить 1, иначе вернуть 0
        //вывод


        if ($this->S8_2SideIn == 0 and $this->S9_4SideIn == 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function Z33_RamaMateriali2Storona_grn_kg()
    {

        //вывод

        return $this->Z29_DlinaUDKarkasa_grn_kg();
    }

    function Z29_DlinaUDKarkasa_grn_kg()
    {
        //умножение
        //вывод

        return $this->Y29_DlinaUDKarkasa_mp() * $this->Z12_UDProfil1mp_grn_kg();
    }

    function Y29_DlinaUDKarkasa_mp()
    {
        //сложение
        //вывод

        return ($this->Y5_LargeSize_m() + $this->Y27_DlinnaPeremichek_mp());
    }

    function Y27_DlinnaPeremichek_mp()
    {
        //умножение
        //вывод

        return ($this->Y6_SmallSize_m() * $this->Y26_KolichestvoPeremichek_shtuk());
    }

    function Y26_KolichestvoPeremichek_shtuk()
    {
        //деление и округление
        //вывод

        return round($this->Y5_LargeSize_m() / 0.24, 0);
    }

    function V10_2Storoni()
    {

        //вывод

        return ($this->S8_2SideIn);
    }

    function Z39_RamaMateriali2Storona_grn_kg()
    {

        //вывод

        return $this->Z35_DlinaUDKarkasa_mp_kg();
    }

    function Z35_DlinaUDKarkasa_mp_kg()
    {
        //умножение
        //вывод

        return $this->Y35_DlinaUDKarkasa_mp() * $this->Z12_UDProfil1mp_grn_kg();
    }

    function Y35_DlinaUDKarkasa_mp()
    {
        //умножение
        //вывод
        return ($this->Y7_GorizontalSize_m() * 4);
    }

    function Y7_GorizontalSize_m()
    {
        //S11=1, то присвоить Y5, иначе вернуть Y6
        //вывод

        if ($this->S11_Orientacia == 1) {
            return $this->Y5_LargeSize_m();
        } else {
            return $this->Y6_SmallSize_m();
        }
    }

    function V11_4Storoni()
    {

        //вывод

        return ($this->S9_4SideIn);
    }

    function AF24_Itogo_grn()
    {
        //сложение
        //вывод

        return ($this->AF6_StoimostMaterialov_grn() + $this->AF11_StoimostRaboti_grn());
    }

    function AF6_StoimostMaterialov_grn()
    {
        //округление
        //вывод

        return round($this->Y41_RamaMateriakItogo_grn(), 0);
    }

    function Y41_RamaMateriakItogo_grn()
    {
        //умножение и сложение
        //вывод

        return ($this->Y24_RamaMaterialu1Storona_grn() * $this->V9_1Storona() + $this->Y33_RamaMateriali2Storoni_grn() * $this->V10_2Storoni() + $this->Y39_RamaMateriali4Storoni_grn() * $this->V11_4Storoni());
    }

    function Y24_RamaMaterialu1Storona_grn()
    {
        //сложение
        //вывод

        return ($this->Y21_StoimostUDProfila_grn() + $this->Y23_StoimostSamorezov_grn());
    }

    function Y21_StoimostUDProfila_grn()
    {
        //умножение
        //вывод

        return ($this->Y20_DlinaUDKarkasaItogo_mp() * $this->Y13_Pererasxod1Profila() * $this->Y12_UDProfil1mp_grn());
    }

    function Y13_Pererasxod1Profila()
    {

        //вывод

        return L10_BB58_K_PererashCDUD;
    }

    function Y12_UDProfil1mp_grn()
    {

        //вывод

        return L10_AR24_ProfileUD_05mmS;
    }

    function Y23_StoimostSamorezov_grn()
    {
        //умножение
        //вывод

        return ($this->Y22_KolvoSamorezov_grn() * $this->Y14_Samorez1shtuk_grn());
    }

    function Y22_KolvoSamorezov_grn()
    {
        //умножение и округление
        //вывод

        return round($this->Y20_DlinaUDKarkasaItogo_mp() * $this->Y15_RasxodSamorezovNa1mp_shtuk(), 0);
    }

    function Y15_RasxodSamorezovNa1mp_shtuk()
    {

        //вывод

        return L10_BB61_K_KolSamorezVRamaPVHKorobShtMp;
    }

    function Y14_Samorez1shtuk_grn()
    {

        //вывод

        return L10_AR42_Samorez19ZnBur;
    }

    function Y33_RamaMateriali2Storoni_grn()
    {
        //сложение
        //вывод
        return ($this->Y30_StoimostUDProfila() + $this->Y32_StoimostSamorezov_grn());
    }

    function Y30_StoimostUDProfila()
    {
        //умножение
        //вывод

        return ($this->Y12_UDProfil1mp_grn() * $this->Y13_Pererasxod1Profila() * $this->Y29_DlinaUDKarkasa_mp());
    }

    function Y32_StoimostSamorezov_grn()
    {
        //умножение
        //вывод

        return ($this->Y31_KolvoSamorezovItogo_shtuk() * $this->Y14_Samorez1shtuk_grn());
    }

    function Y31_KolvoSamorezovItogo_shtuk()
    {
        //умножение и сложение
        //вывод

        return ($this->Y5_LargeSize_m() * $this->Y15_RasxodSamorezovNa1mp_shtuk() + $this->Y26_KolichestvoPeremichek_shtuk() * 2);
    }

    function Y39_RamaMateriali4Storoni_grn()
    {
        //сложение
        //вывод
        return ($this->Y36_DlinaUDKarkasa() + $this->Y38_StoimostSamorezov_grn());
    }

    function Y36_DlinaUDKarkasa()
    {
        //умножение
        //вывод
        return ($this->Y12_UDProfil1mp_grn() * $this->Y13_Pererasxod1Profila() * $this->Y35_DlinaUDKarkasa_mp());
    }

    function Y38_StoimostSamorezov_grn()
    {
        //умножение
        //вывод
        return ($this->Y14_Samorez1shtuk_grn() * $this->Y37_KolvoSamorezovItogo_Shtuk());
    }

    function Y37_KolvoSamorezovItogo_Shtuk()
    {
        //умножение
        //вывод
        return ($this->Y35_DlinaUDKarkasa_mp() * $this->Y15_RasxodSamorezovNa1mp_shtuk());
    }

    function AF11_StoimostRaboti_grn()
    {
        //умножение и округление
        //вывод

        return round($this->AF10_TrydoemkostRama_min() * L10_C67_K1, 0);
    }

    function AF10_TrydoemkostRama_min()
    {
        //округление
        //вывод

        return round($this->AC20_RabotaItogo_min(), 0);
    }

    function AC20_RabotaItogo_min()
    {
        //умножение и сложение
        //вывод

        return ($this->AC10_Rabota1Storona_min() * $this->V9_1Storona() + $this->AC14_Rabota2Storona_min() * $this->V10_2Storoni() + $this->AC18_Rabota4Storona_min() * $this->V11_4Storoni());
    }

    function AC10_Rabota1Storona_min()
    {
        //сложение
        //вывод

        return ($this->AC8_VirezatProfilz1Storon_min() + $this->AC9_VkrytitSamorezi1Stor_min());
    }

    function AC8_VirezatProfilz1Storon_min()
    {
        //умножение
        //вывод

        return ($this->AC5_Virezat1ProfilUD_min() * $this->Y19_KolichestvoUDElementov_shtuk());
    }

    function AC5_Virezat1ProfilUD_min()
    {

        //вывод

        return L10_BT21_PriresStalProfCDUDStilk_1sht;
    }

    function Y19_KolichestvoUDElementov_shtuk()
    {
        //умножение и сложение
        //вывод

        return (2 * $this->V17_DlinnaiChastRamu() + 2 * $this->V18_KorotkaChastRami() + $this->Y18_KolichectvoPeremichek_shtuk() * $this->V21_PeremickyEst());
    }

    function AC9_VkrytitSamorezi1Stor_min()
    {
        //умножение
        //вывод

        return ($this->AC6_Vkrytit1Samorez_min() * $this->Y22_KolvoSamorezov_grn());
    }

    function AC6_Vkrytit1Samorez_min()
    {

        //вывод

        return L10_BT26_VkruchSeriiSamorezov_1sht;
    }

    function AC14_Rabota2Storona_min()
    {
        //сложение
        //вывод

        return ($this->AC12_VirezatProfilz2Storon_min() + $this->AC13_VkrytitSamorezi2Stor_min());
    }

    function AC12_VirezatProfilz2Storon_min()
    {
        //умножение
        //вывод

        return ($this->AC5_Virezat1ProfilUD_min() * $this->Y28_KolichestvoUDElementov_shtuk());
    }

    function Y28_KolichestvoUDElementov_shtuk()
    {
        //сложение
        //вывод

        return ($this->Y26_KolichestvoPeremichek_shtuk() + 1);
    }

    function AC13_VkrytitSamorezi2Stor_min()
    {
        //умножение
        //вывод

        return ($this->AC6_Vkrytit1Samorez_min() * $this->Y31_KolvoSamorezovItogo_shtuk());
    }

    function AC18_Rabota4Storona_min()
    {
        //сложение
        //вывод

        return ($this->AC16_VkrytitSamorezi4Stor_min() + $this->AC17_VkrytitSamorezi4Stor_min());
    }

    function AC16_VkrytitSamorezi4Stor_min()
    {
        //умножение
        //вывод

        return ($this->AC5_Virezat1ProfilUD_min() * 4);
    }

    function AC17_VkrytitSamorezi4Stor_min()
    {
        //умножение
        //вывод

        return ($this->AC6_Vkrytit1Samorez_min() * $this->Y37_KolvoSamorezovItogo_Shtuk());
    }


}