<?php
namespace almaz44\light\calculator;
/**
 * Created by PhpStorm.
 * User: Andrii
 * Date: 28.02.2018
 * Time: 18:11
 */
class L17_1
{
    // Входные параметры:
    public $B5_RoofVisorOut; // крыша/козырек улица
    public $B6_WallOut; // стена улица
    public $B7_WallIn; // стена помещение
    public $B8_2SideIn; // 2 стороны помещение
    public $B9_4SideIn; // 4 стороны помещение
    //
    public $B11_MaxSide_cm; // большая сторона, см
    public $B12_MinSide_cm; // меньшая сторона, см
    //
    public $B14_PlastikFront; //Пластик лицевой (1-пол/2-акр)

    // Промежуточные данные.
    private $L09;       // класс исходных данных.

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)

    {
        // Заполнение входных данных.
        $this->B5_RoofVisorOut = 0; // крыша/козырек улица
        $this->B6_WallOut = 0;      // стена улица
        $this->B7_WallIn = 0;       // стена помещение
        $this->B8_2SideIn = 0;      // 2 стороны помещение
        $this->B9_4SideIn = 0;      // 4 стороны помещение
        switch ($VarIspoln){
            case 1: $this->B5_RoofVisorOut = 1; break;
            case 2: $this->B6_WallOut = 1; break;
            case 3: $this->B7_WallIn = 1; break;
            case 4: $this->B8_2SideIn = 1; break;
            case 5: $this->B9_4SideIn = 1; break;
            default: $this->B8_2SideIn = 1; break;
        }

        // Запрос исходных данных
        $this->L09 = new L09($SCLight, $VarIspoln,
            $Orientation, $MaxSide_cm, $MinSide_cm,
            $FrontImg, $ColorSide, $ColorBack, $Ugol,
            $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);

        $this->B11_MaxSide_cm = $this->L09->J22_MaxSide_cm;
        $this->B12_MinSide_cm = $this->L09->J23_MinSide_cm;
        $this->B14_PlastikFront = $this->L09->J40_PlasticLic;
    }

//// флаги
    function E5_MinSideM()
    {
        return $this->B12_MinSide_cm/100;
    }
    //
    function E7_Polikarbonat()
    {
    return ( $this->B14_PlastikFront == 1) ? 1 : 0;
    }
    function E8_Akril()
    {
    return ($this->E7_Polikarbonat() == 0) ? 1 : 0;
    }
    function E9_Street()
    {
        $temp = $this->B7_WallIn + $this->B8_2SideIn + $this->B9_4SideIn;
    return ($temp == 0) ? 1 : 0;
    }
    function E10_In()
    {
        return ($this->E9_Street() == 0) ? 1 : 0;
    }
    //
    function E12_BorderSupportOut()
    {
        $temp = L10_BK34_GranicPrimOporLicPolikUlica_m * $this->E7_Polikarbonat() +
                L10_BK35_GranicPrimOporLicAkrilUlica_m + $this->E8_Akril();
        return $temp;
    }
    function E13_BorderSupportIn()
    {
        return ($this->E8_Akril() == 1) ? L10_BK36_GranicPrimOporLicAkrilPomesh_m : 2;
    }
    //
    function E15_AvailabilitySupportOu()
    {
        return ($this->E5_MinSideM() > $this->E12_BorderSupportOut()) ? 1 : 0;
    }
    function E16_AvailabilitySupportIn()
    {
        return ($this->E5_MinSideM() > $this->E13_BorderSupportIn()) ? 1 : 0;
    }
//// расчетная величина, материал
    function H5_MaxSizeM()
    {
    return round($this->B11_MaxSide_cm / 100, 2);
    }
    function H6_MinSizeM()
    {
        return round($this->B12_MinSide_cm / 100, 2);
    }
    function H7_AreaFasada_m2()
    {
        return ($this->H5_MaxSizeM() * $this->H6_MinSizeM());
    }
    //
    function H9_Acril3mm_1m2()
    {
        return L10_J15_AkrilM3S;
    }
    function H10_OvergrowthAcrila()
    {
        return L10_BB7_K_PererashodAkryl;
    }
    function H11_PriceOvergrowthAkril1mp_grn()
    {
        return L10_J40_RaskrAkrlLazS;
    }
    function H12_UDProfil1mp_grn()
    {
        return  L10_AR24_ProfileUD_05mm;

    }
    function H13_OvergrowthUDProfil()
    {
        return  L10_BB58_K_PererashCDUD;

    }
    function H14_Samorez_1ps_grn()
    {
        return  L10_AR42_Samorez19ZnBur;

    }
    function H15_RashodSamorezna1mp_ps()
    {
        return  L10_BB61_K_KolSamorezVRamaPVHKorobShtMp;

    }
    //
    function H18_AcrilSupport1Side_grn()
    {
        return (0.1 * 0.1 * $this->H9_Acril3mm_1m2() * $this->H10_OvergrowthAcrila());
    }
    function H19_Cutting1Support_grn()
    {
        return ((0.1 + 0.1 + 0.1 + 0.1) * $this->H11_PriceOvergrowthAkril1mp_grn());
    }
    function H20_UDSupport1Side_grn()
    {
        $temp = $this->H6_MinSizeM() *
                $this->H12_UDProfil1mp_grn() *
                $this->H13_OvergrowthUDProfil();
        return $temp;
    }
    function H21_SamorezSupport1Side_ps()
    {
        $temp = $this->H6_MinSizeM() *
                $this->H15_RashodSamorezna1mp_ps() +
                1;
        return round($temp, 0);
    }
    function H22_SamorezSupport1Side_grn()
    {
        return ($this->H21_SamorezSupport1Side_ps() * $this->H14_Samorez_1ps_grn());
    }
    function H23_SamorezClampingAkril_grn()
    {
        return (2 * $this->H14_Samorez_1ps_grn());
    }
    function H24_Support1Side_grn()
    {
        $temp = $this->H18_AcrilSupport1Side_grn() +
                $this->H19_Cutting1Support_grn() +
                $this->H20_UDSupport1Side_grn() +
                $this->H22_SamorezSupport1Side_grn() +
                $this->H23_SamorezClampingAkril_grn();
        return $temp;
    }
    function H25_Support2Side_grn()
    {
        $temp = $this->H18_AcrilSupport1Side_grn() * 2 +
                $this->H19_Cutting1Support_grn() * 2 +
                $this->H20_UDSupport1Side_grn() +
                $this->H14_Samorez_1ps_grn() +
                $this->H23_SamorezClampingAkril_grn();
        return $temp;
    }
    //
    function H27_NumberRoofSupports_ps()
    {
        $temp = round($this->H7_AreaFasada_m2() / L10_BB38_K_OpirPloshK_m2, 0) *
                $this->E15_AvailabilitySupportOu() *
                $this->B5_RoofVisorOut;
        return $temp;
    }
    function H28_NumberSupportsWallStreet_ps()
    {
        $temp = round($this->H7_AreaFasada_m2() / L10_BB39_K_OpirPloshS_m2, 0) *
                $this->E15_AvailabilitySupportOu() *
                $this->B6_WallOut;
        return $temp;
    }
    function H29_NumberSupportsIn1_ps()
    {
        $temp = round($this->H7_AreaFasada_m2() / L10_BB40_K_OpirPloshP_m2, 0) *
                $this->E16_AvailabilitySupportIn() *
                $this->B7_WallIn;
        return $temp;
    }
    function H30_NumberSupportsIn2_ps()
    {
        $temp = round($this->H7_AreaFasada_m2() / L10_BB40_K_OpirPloshP_m2) *
                $this->E16_AvailabilitySupportIn() *
                $this->B8_2SideIn;
        return $temp;
    }
    function H31_NumberSupportIn4_ps()
    {
        $temp = $this->H30_NumberSupportsIn2_ps() * 4 *
                $this->E16_AvailabilitySupportIn() *
                $this->B9_4SideIn;
        return $temp;
    }
    //
    function H33_SupportWallItogo_grn()
    {
        return $this->H24_Support1Side_grn() *
               $this->H27_NumberRoofSupports_ps();
    }
    function H34_SupportRoofItogo_grn()
    {
        return $this->H24_Support1Side_grn() *
               $this->H28_NumberSupportsWallStreet_ps();
    }
    function H35_SupportWallInItogo_grn()
    {
        return $this->H24_Support1Side_grn() *
               $this->H29_NumberSupportsIn1_ps();
    }
    function H36_Support2SideItogo_grn()
    {
        return $this->H24_Support1Side_grn() *
               $this->H30_NumberSupportsIn2_ps();
    }
    function H37_Support4SideItogo_grn()
    {
        return $this->H24_Support1Side_grn() *
               $this->H31_NumberSupportIn4_ps() *
               $this->E16_AvailabilitySupportIn();
    }
    function H38_MaterialSupportItogo_grn()
    {
        $temp = $this->H33_SupportWallItogo_grn() +
                $this->H34_SupportRoofItogo_grn() +
                $this->H35_SupportWallInItogo_grn() +
                $this->H36_Support2SideItogo_grn() +
                $this->H37_Support4SideItogo_grn();
        return $temp;
    }
////
    function I9_Akril3mm1m2_kg()
    {
        return L10_L15_AkrilM3P;
    }
    function I12_UDprofil1mp_grn_kg()
    {
        return L10_AS24_ProfileUD_05mm;
    }
    //
    function I18_AcrilSupport1Side_kg()
    {
        $temp = 0.12 * 0.1 * $this->I9_Akril3mm1m2_kg();
        return $temp;
    }
    function I20_UDSupport1Side_kg()
    {
        $temp = $this->H6_MinSizeM() * $this->I12_UDprofil1mp_grn_kg();
        return $temp;
    }
    //
    function I24_Support1Side_kg()
    {
        $temp = $this->I18_AcrilSupport1Side_kg() + $this->I20_UDSupport1Side_kg();
        return $temp;
    }
    function I25_Support2Side_kg()
    {
        $temp = $this->I18_AcrilSupport1Side_kg() * 2;
        return $temp;
    }
    //
    function I33_SupportWallItogo_kg()
    {
        return $this->I24_Support1Side_kg() *
               $this->H27_NumberRoofSupports_ps();
    }
    function I34_SupportRoofItogo_kg()
    {
        return $this->I24_Support1Side_kg() *
               $this->H28_NumberSupportsWallStreet_ps();
    }
    function I35_SupportWallInItogo_kg()
    {
        return $this->I24_Support1Side_kg() *
               $this->H29_NumberSupportsIn1_ps();
    }
    function I36_Support2SideItogo_kg()
    {
        return $this->I25_Support2Side_kg() *
               $this->H30_NumberSupportsIn2_ps();
    }
    function I37_Support4SideItogo_kg()
    {
        return $this->I24_Support1Side_kg() *
               $this->H31_NumberSupportIn4_ps() *
               $this->E16_AvailabilitySupportIn();
    }
    function I38_MaterialSupportItogo_kg()
    {
        $temp = $this->I33_SupportWallItogo_kg() +
                $this->H34_SupportRoofItogo_grn() +
                $this->H35_SupportWallInItogo_grn() +
                $this->H36_Support2SideItogo_grn() +
                $this->H37_Support4SideItogo_grn();
        return $temp;
    }
//// трудоемкость
    function L5_Cut1ProfilUD_min()
    {
        return L10_BT21_PriresStalProfCDUDStilk_1sht;
    }
    function L6_Screw1Samorez_min()
    {
        return L10_BT25_VkruchSamorez_1sht;
    }
    //
    function L8_AssembleSupport1Side_min()
    {
        $temp = $this->L5_Cut1ProfilUD_min() +
                $this->L6_Screw1Samorez_min() * 2;
        return $temp;
    }
    //
    function L10_SupportAssemble1Side_min()
    {
        $temp = $this->L5_Cut1ProfilUD_min() +
                ($this->H21_SamorezSupport1Side_ps() + 2) *
                $this->L6_Screw1Samorez_min();
        return $temp;
    }
    function L11_SupportAssemble2Side_min()
    {
        return 4 * $this->L6_Screw1Samorez_min();
    }
    //
    function L13_SupportRoofItogo_min()
    {
        return $this->H27_NumberRoofSupports_ps() *
               $this->L10_SupportAssemble1Side_min();
    }
    function L14_SupportOutItogo_min()
    {
        return $this->H28_NumberSupportsWallStreet_ps() *
               $this->L10_SupportAssemble1Side_min();
    }
    function L15_SupportWallIn1Itogo_min()
    {
        return $this->H29_NumberSupportsIn1_ps() *
               $this->L10_SupportAssemble1Side_min();
    }
    function L16_Support2SideItogo_min()
    {
        return $this->H30_NumberSupportsIn2_ps() *
               $this->L11_SupportAssemble2Side_min();
    }
    function L17_Support4SideItogo_min()
    {
        return $this->H31_NumberSupportIn4_ps() *
               $this->L10_SupportAssemble1Side_min();
    }
    function L18_SupportItogo_min()
    {
        $temp = round($this->L13_SupportRoofItogo_min() +
                      $this->L14_SupportOutItogo_min() +
                      $this->L15_SupportWallIn1Itogo_min() +
                      $this->L16_Support2SideItogo_min() +
                      $this->L17_Support4SideItogo_min(), 0);
        return $temp;
    }
//// выходная величина
    function O6_CostMaterials_grn()
    {
        return round($this->H38_MaterialSupportItogo_grn(), 0);
    }
    //
    function O10_TrydoemkostSupport_min()
    {
        return $this->L18_SupportItogo_min();
    }
    function O11_CostWork_grn()
    {
        return round($this->O10_TrydoemkostSupport_min() * L10_C67_K1, 0);
    }
    //
    function O22_Massa_kg()
    {
        return round($this->I38_MaterialSupportItogo_kg(), 1);
    }
    //
    function O24_Itogo_grn()
    {
        return $this->O6_CostMaterials_grn() +
               $this->O11_CostWork_grn();
    }
}

class L17_2
{
    // Входные параметры:
    public $S5_RoofVisorOut; // крыша/козырек улица
    public $S6_WallOut; // стена улица
    public $S7_WallIn; // стена помещение
    public $S8_2SideIn; // 2 стороны помещение
    public $S9_4SideIn; // 4 стороны помещение
    //
    public $S11_Orientation; // Ориентация
    public $S12_MaxSide_cm; // большая сторона, см
    public $S13_MinSide_cm; // меньшая сторона, см
    //
    public $S15_PlastikFront; //Пластик лицевой (1-пол/2-акр)
    //
    public $S20_CosSupportFront; // стоимость опор лицевых, грн

    // Промежуточные данные.
    private $L09, $L17_1;       // класс исходных данных.

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)

    {
        // Заполнение входных данных.
        $this->S5_RoofVisorOut = 0; // крыша/козырек улица
        $this->S6_WallOut = 0;      // стена улица
        $this->S7_WallIn = 0;       // стена помещение
        $this->S8_2SideIn = 0;      // 2 стороны помещение
        $this->S9_4SideIn = 0;      // 4 стороны помещение
        switch ($VarIspoln){
            case 1: $this->S5_RoofVisorOut = 1; break;
            case 2: $this->S6_WallOut = 1; break;
            case 3: $this->S7_WallIn = 1; break;
            case 4: $this->S8_2SideIn = 1; break;
            case 5: $this->S9_4SideIn = 1; break;
            default: $this->S8_2SideIn = 1; break;
        }

        // Запрос исходных данных
        $this->L09 = new L09($SCLight, $VarIspoln,
                             $Orientation, $MaxSide_cm, $MinSide_cm,
                             $FrontImg, $ColorSide, $ColorBack, $Ugol,
                             $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);

        $this->S11_Orientation = $Orientation;
        $this->S12_MaxSide_cm = $MaxSide_cm;
        $this->S13_MinSide_cm = $MinSide_cm;
        $this->S15_PlastikFront = $this->L09->J40_PlasticLic;

        $this->L17_1 = new L17_1($SCLight, $VarIspoln,
                             $Orientation, $MaxSide_cm, $MinSide_cm,
                             $FrontImg, $ColorSide, $ColorBack, $Ugol,
                             $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);

        $this->S20_CosSupportFront =  $this->L17_1->O24_Itogo_grn();
    }

//// Флаги
    function V5_MaxSizeMore400sm()
    {
    return ($this->S12_MaxSide_cm > (100 * L10_BK19_RazmObyazIspGorRam_m)) ? 1 : 0;
    }
    function V6_MaxSizeMore300sm()
    {
    return ($this->S12_MaxSide_cm > (100 * L10_BK20_GorRazmSvyazIspGorRam_m)) ? 1 : 0;
    }
    function V7_MinSizeMore44sm()
    {
    return ($this->S13_MinSide_cm > (100 * L10_BK21_VertRazmSvyazIspGorRam_m)) ? 1 : 0;
    }
    function V8_More300x44sm()
    {
        return ($this->V6_MaxSizeMore300sm() * $this->V7_MinSizeMore44sm());
    }
    function V9_PlankaDiod()
    {
        return ($this->S13_MinSide_cm > (100 * L10_BK22_MaxRazmOtsutElectroram2Stor_m)) ? 1 : 0;
    }
    //
    function V11_1Side()
    {
    return (($this->S8_2SideIn == 0) AND ($this->S9_4SideIn == 0)) ? 1 : 0;
    }
    function V12_2Side()
    {
        return ($this->S8_2SideIn);
    }
    function V13_4Side()
    {
        return ($this->S9_4SideIn);
    }
    //
    function V15_Street()
    {
        $temp = $this->S7_WallIn +
                $this->S8_2SideIn +
                $this->S9_4SideIn;
        return ($temp == 0) ? 1 : 0;
    }
    function V16_SupportFrontOn()
    {
        return ($this->S20_CosSupportFront > 0) ? 1 : 0;
    }
    function V17_SupportStreet()
    {
        return ($this->V15_Street() * $this->V16_SupportFrontOn());
    }
    //
    function V19_LongBox()
    {
        $temp = ($this->V5_MaxSizeMore400sm() == 1) OR
        ($this->V8_More300x44sm() == 1) OR
        ($this->V17_SupportStreet() == 1) OR
        ($this->S5_RoofVisorOut);
        return ($temp) ? 1 : 0;
    }
    function V20_ShortBox()
    {
        return ($this->S5_RoofVisorOut);
    }
    //
    function V22_SupportFrontOff()
    {
        return ($this->V16_SupportFrontOn() == 0) ? 1 : 0;
    }
    function V23_JumperOn()
    {
        return ($this->S5_RoofVisorOut * $this->V22_SupportFrontOff());
    }
    //
    function V26_PolikarbonatFront()
    {
        return ($this->S15_PlastikFront == 1) ? 1 : 0;
    }
    function V27_AkrilFront()
    {
        return ($this->S15_PlastikFront == 2) ? 1 : 0;
    }
//// расчетная величина, материал
    function Y5_LargeSize_m()
    {
        return round($this->S12_MaxSide_cm / 100, 2);
    }
    function Y6_SmallSize_m()
    {
        return round($this->S13_MinSide_cm / 100, 2);
    }
    function Y7_GorizontalSize_m()
    {
        return ($this->S11_Orientation == 1) ? $this->Y5_LargeSize_m() : $this->Y6_SmallSize_m();
    }
    function Y8_VerticalSize_m()
    {
        return ($this->S11_Orientation == 2) ? $this->Y5_LargeSize_m() : $this->Y6_SmallSize_m();
    }
    function Y9_AreaFront_m2()
    {
        return ($this->Y5_LargeSize_m() * $this->Y6_SmallSize_m());
    }
    function Y10_PerimetrBox_m()
    {
        $temp = $this->Y5_LargeSize_m() + $this->Y5_LargeSize_m() +
                $this->Y6_SmallSize_m() + $this->Y6_SmallSize_m();
        return $temp;
    }

    function Y15_2UDPodves()
    {
        return ($this->Z13_Massa_kg() <= ($this->Z14_MassaMax1UD_kg() * 2)) ? 1 : 0;
    }
    function Y16_4UDPodves()
    {
        $temp = ($this->Z13_Massa_kg() > ($this->Z14_MassaMax1UD_kg() * 2)) AND
        ($this->Z13_Massa_kg() <= ($this->Z14_MassaMax1UD_kg() * 4));
        return ($temp) ? 1 : 0;
    }
    function Y17_6UDPodves()
    {
        $temp = $this->Y15_2UDPodves() + $this->Y16_4UDPodves();
        return ($temp == 0) ? 1 : 0;
    }
    //
    function Y19_UDProfil1mp_gr()
    {
        return L10_AR24_ProfileUD_05mm;
    }
    function Y20_OverflowUDProfil()
    {
        return L10_BB58_K_PererashCDUD;
    }
    function Y21_Samorez1_grn()
    {
        return L10_AR42_Samorez19ZnBur;
    }
    function Y22_NumberSamorez1mpBox_ps()
    {
        return L10_BB61_K_KolSamorezVRamaPVHKorobShtMp;
    }
    function Y23_NumberSamorez1mpPack()
    {
        return L10_BB60_K_KolSamorezVZadStShtMp;
    }
    function Y24_PlankaPack1mp_grn()
    {
        return L10_U92_PlankUpakDer25x15;
    }
    function Y25_OverflowPlankaPack()
    {
        return L10_BB56_K_PererashTrubaBlack_20x20_40x20; // TODO Возможна ошибка.
    }
    function Y26_PVH5mm1mm2_grn()
    {
        return L10_J25_PVH_5mmS;
    }
    //
    function Y29_NumberJump_ps()
    {
        return round($this->Y5_LargeSize_m() - 1, 0);
    }
    function Y30_NumberUDItogo_ps()
    {
        $temp = 2 * $this->V19_LongBox() +
                2 * $this->V20_ShortBox() +
                $this->Y29_NumberJump_ps() * $this->V23_JumperOn();
        return $temp;
    }
    function Y31_LongUDBox_mp()
    {
        $temp = $this->Y5_LargeSize_m() * 2 * $this->V19_LongBox() +
                $this->Y6_SmallSize_m() * 2 * $this->V20_ShortBox() +
                $this->Y6_SmallSize_m() *
                $this->Y29_NumberJump_ps() *
                $this->V23_JumperOn();
        return $temp;
    }
    function Y32_CostUDProfil_grn()
    {
        $temp = $this->Y31_LongUDBox_mp() *
                $this->Y20_OverflowUDProfil() *
                $this->Y19_UDProfil1mp_gr();
        return $temp;
    }
    function Y33_NumberSamorezItogo_ps()
    {
        $temp = $this->Y31_LongUDBox_mp() * $this->Y22_NumberSamorez1mpBox_ps();
        return round($temp, 0);
    }
    function Y34_CostSamorez_grn()
    {
        return $this->Y33_NumbeSamorezItogo_ps() * $this->Y21_Samorez1_grn();
    }
    function Y35_BoxMaterial1side_grn()
    {
        return ($this->Y32_CostUDProfil_grn() + $this->Y34_CostSamorez_grn());
    }
    //
    function Y37_LongPlanka_m()
    {
        return $this->Y5_LargeSize_m() * 2 * $this->V9_PlankaDiod();
    }
    function Y38_CostPlanka_grn()
    {
        return $this->Y37_LongPlanka_m() * $this->Y25_OverflowPlankaPack() * $this->Y24_PlankaPack1mp_grn();
    }
    function Y39_SamorezPlanka_ps()
    {
        return $this->Y37_LongPlanka_m() * $this->Y23_NumberSamorez1mpPack();
    }
    function Y40_CostSamorez_grn()
    {
        return $this->Y39_SamorezPlanka_ps() * $this->Y21_Samorez1_grn();
    }
    function Y41_PVHLineSupportBack_mp()
    {
        return 2 * $this->Y7_GorizontalSize_m();
    }
    function Y42_VHLineSupportBack_grn()
    {
        return $this->Y41_PVHLineSupportBack_mp() * L10_BK16_OporDVPTilPVH5mm_m * $this->Y26_PVH5mm1mm2_grn();
    }
    function Y43_NumberUDpodves_ps()
    {
        $temp = 2 * $this->Y15_2UDPodves() +
                4 * $this->Y16_4UDPodves() +
                6 * $this->Y17_6UDPodves();
        return $temp;
    }
    function Y44_CostUDPodvesov_grn()
    {
        $temp = $this->Y43_NumberUDpodves_ps() *
                L10_BK8_GlubinaBort2StorViveskaLentDiod_m *
                $this->Y20_OverflowUDProfil() *
                $this->Y19_UDProfil1mp_gr();
        return $temp;
    }
    function Y45_NumberSamorez_ps()
    {
        return 2* $this->Y43_NumberUDpodves_ps();
    }
    function Y46_CostSamorez_grn()
    {
        return $this->Y45_NumberSamorez_ps() * L10_AR42_Samorez19ZnBur;
    }
    function Y47_CostBoltM8x50_grn()
    {
        $temp = $this->Y43_NumberUDpodves_ps() / 1.5 * L10_AR38_BoltMetrichM8x50PlusGaika;
        return $temp;
    }
    function Y48_BoxMaterial2Side_grn()
    {
        $temp = $this->Y38_CostPlanka_grn() +
                $this->Y40_CostSamorez_grn() +
                $this->Y42_VHLineSupportBack_grn() +
                $this->Y44_CostUDPodvesov_grn() +
                $this->Y47_CostBoltM8x50_grn();
        return $temp;
    }
    //
    function Y50_LenghtUDBox_mp()
    {
        return $this->Y7_GorizontalSize_m() * 4;
    }
    function Y51_CostUDProfil_grn()
    {
        return $this->Y19_UDProfil1mp_gr() * $this->Y20_OverflowUDProfil() * $this->Y50_LenghtUDBox_mp();
    }
    function Y52_NumberSamorez_ps()
    {
        return $this->Y50_LenghtUDBox_mp() * $this->Y22_NumberSamorez1mpBox_ps();
    }
    function Y53_CostSamorez_grn()
    {
        return $this->Y21_Samorez1_grn() * $this->Y52_NumberSamorez_ps();
    }
    function Y54_BoxMaterial4Side_grn()
    {
        return $this->Y51_CostUDProfil_grn() + $this->Y53_CostSamorez_grn();
    }
    //
    function Y56_BoxMaterialItogo_grn()
    {
        $temp = $this->Y35_BoxMaterial1side_grn() * $this->V11_1Side() +
                $this->Y48_BoxMaterial2Side_grn() * $this->V12_2Side() +
                $this->Y54_BoxMaterial4Side_grn() * $this->V13_4Side();
        return $temp;
    }
////
    function Z11_DensityPolikarbonat6mm_kg()
    {
        return L10_L7_Plikarb6P;
    }
    function Z12_DensityAkril3mm_kg()
    {
        return L10_L15_AkrilM3P;
    }
    function Z13_Massa_kg()
    {
        $temp = $this->Y9_AreaFront_m2() * 3 *
                $this->Z11_DensityPolikarbonat6mm_kg() * $this->V26_PolikarbonatFront() +
                $this->Y9_AreaFront_m2() * 2.5 *
                $this->Z12_DensityAkril3mm_kg() * $this->V27_AkrilFront();
        return $temp;
    }
    function Z14_MassaMax1UD_kg()
    {
        return L10_BK29_PredVesNa1UDDl2StorPomesh_kg;
    }
    //
    function Z19_UDProfil1mp_grn()
    {
        return L10_AS24_ProfileUD_05mm;
    }
    //
    function Z24_Planka1mp_grn()
    {
        return L10_V92_PlankUpakDer25x15;
    }
    //
    function Z31_LongUDBoxItogo_mp()
    {
        return ($this->Y23_NumberSamorez1mpPack() * $this->Z19_UDProfil1mp_grn());
    }
    //
    function Z35_BoxMaterial1Side_kg()
    {
        return $this->Z31_LongUDBoxItogo_mp();
    }
    //
    function Z37_LonghtPlanka_m()
    {
        return $this->Y37_LongPlanka_m() * $this->Z24_Planka1mp_grn();
    }
    //
    function Z44_CostUDPodves_grn()
    {
        return $this->Y43_NumberUDpodves_ps() * $this->Z19_UDProfil1mp_grn() * L10_BK8_GlubinaBort2StorViveskaLentDiod_m;
    }
    //
    function Z47_CostBoltM8x50_grn()
    {
        $temp = $this->Y43_NumberUDpodves_ps() / 1.5 * L10_AS38_BoltMetrichM8x50PlusGaika;
        return $temp;
    }
    function Z48_BoxMaterial2Side_grn()
    {
        return $this->Z37_LonghtPlanka_m() + $this->Z44_CostUDPodves_grn() + $this->Z47_CostBoltM8x50_grn();
    }
    function Z50_LongUDBox_mp()
    {
        return $this->Y50_LenghtUDBox_mp() * $this->Z19_UDProfil1mp_grn();
    }
    //
    function Z54_BoxMaterial4Side_grn()
    {
        return $this->Z50_LongUDBox_mp();
    }
    //
    function Z56_BoxMaterialItogo_grn()
    {
        $temp = $this->Z35_BoxMaterial1Side_kg() * $this->V11_1Side() +
                $this->Z48_BoxMaterial2Side_grn() * $this->V12_2Side() +
                $this->Z54_BoxMaterial4Side_grn() * $this->V13_4Side();
        return $temp;
    }
//// Трудоемкость
    function AC5_Cut1ProfilUD_min()
    {
        return L10_BT21_PriresStalProfCDUDStilk_1sht;
    }
    function AC6_Vkrytit1Samorez_min()
    {
        return L10_BT26_VkruchSeriiSamorezov_1sht;
    }
    function AC7_VkrytitSamorez_min()
    {
        return L10_BT25_VkruchSamorez_1sht;
    }
    function AC8_Sverl1OtvIzSer_min()
    {
        return L10_BT29_Sverl1OtvIzSer_min;
    }
    //
    function AC11_CutProfilUD_min()
    {
        return $this->AC5_Cut1ProfilUD_min() * $this->Y30_NumberUDItogo_ps();
    }
    function AC12_VkrytitSamorezUD_min()
    {
        return $this->AC6_Vkrytit1Samorez_min() * $this->Y33_NumberSamorezItogo_ps();
    }
    function AC13_Work1Side_min()
    {
        return $this->AC11_CutProfilUD_min() + $this->AC12_VkrytitSamorezUD_min();
    }
    //
    function AC15_CutUDPodves_min()
    {
        return $this->Y43_NumberUDpodves_ps() * $this->AC5_Cut1ProfilUD_min();
    }
    function AC16_SverlitUDPodves_min()
    {
        return $this->Y43_NumberUDpodves_ps() * 4 * $this->AC8_Sverl1OtvIzSer_min();
    }
    function AC17_VkrutitSamorezUD_min()
    {
        return $this->Y43_NumberUDpodves_ps() * 2 * $this->AC6_Vkrytit1Samorez_min();
    }
    function AC18_CutPlanka_min()
    {
        return 2 * $this->AC5_Cut1ProfilUD_min() * $this->V9_PlankaDiod();
    }
    function AC19_PrikrPlanka_min()
    {
        $temp = $this->Y37_LongPlanka_m() *
                $this->Y23_NumberSamorez1mpPack() *
                $this->V9_PlankaDiod() *
                $this->AC6_Vkrytit1Samorez_min();
        return $temp;
    }
    function AC20_Work2Side_min()
    {
        $temp = $this->AC15_CutUDPodves_min() +
                $this->AC16_SverlitUDPodves_min() +
                $this->AC17_VkrutitSamorezUD_min() +
                $this->AC18_CutPlanka_min() +
                $this->AC19_PrikrPlanka_min();
        return $temp;
    }
    //
    function AC22_CutProfil4Side_min()
    {
        return $this->AC5_Cut1ProfilUD_min() * 4;
    }
    function AC23_VkrytitSamorez4Side_min()
    {
        return $this->AC6_Vkrytit1Samorez_min() * $this->Y52_NumberSamorez_ps();
    }
    function AC24_Work4Side_min()
    {
        return $this->AC22_CutProfil4Side_min() + $this->AC23_VkrytitSamorez4Side_min();
    }
    function AC26_WorkItogo_min()
    {
        $temp = $this->AC13_Work1Side_min() * $this->V11_1Side() +
                $this->AC20_Work2Side_min() * $this->V12_2Side() +
                $this->AC24_Work4Side_min() * $this->V13_4Side();
        return $temp;
    }
//// выходная величина
    function AF6_CostMaterial_grn()
    {
        return round($this->Y56_BoxMaterialItogo_grn(), 0);
    }
    //
    function AF10_WorkBox_min()
    {
        return round($this->AC26_WorkItogo_min(), 0);
    }
    function AF11_CostWork_grn()
    {
        return round($this->AF10_WorkBox_min() * L10_C67_K1, 0);
    }
    //
    function AF22_Massa_kg()
    {
        return round($this->Z56_BoxMaterialItogo_grn(), 1);
    }
    function AF24_Itogo_grn()
    {
        return $this->AF6_CostMaterial_grn() + $this->AF11_CostWork_grn();
    }
}

class L17_3
{
    // Входные параметры:
    public $AJ5_4WallIn; // 4 стороны помещение

    public $AJ7_Orientation; // ориентация
    public $AJ8_BigStor; // большая сторона
    public $AJ9_SmallStor; // меньшая сторона

    public $AJ11_Konstrukt; // конструктив

    public function __construct($WallIn4, $Orientation, $BigStor,
                                $SmallStor, $Konstrukt)

    {
        // Заполнение входных данных.
        $this->AJ5_4WallIn = $WallIn4;

        $this->AJ7_Orientation = $Orientation;
        $this->AJ8_BigStor = $BigStor;
        $this->AJ9_SmallStor = $SmallStor;

        $this->AJ11_Konstrukt = $Konstrukt;
    }

    // C light - пленка борт/тыл

    function AP5_BolshRazm()
    {

        //больший размер, м
        //округление и деление
        //вывод

        return round ($this->AJ8_BigStor/100, 2);
    }
    function AP6_MenshRazm()
    {

        //меньший размер, м
        //округление и деление
        //вывод

        return round ($this->AJ9_SmallStor/100, 2);
    }
    function AP7_GorRazm()
    {

        //горизонтальный размер, м
        //если $this->AH7_Orientation = 1, то вывести AN5_BolshRazm()
        //иначе - вывести AN6_MenshRazm()
        //вывод

        if ($this->AJ7_Orientation == 1)
        {
            return $this->AP5_BolshRazm();
        }
        else
        {
            return $this->AP6_MenshRazm();
        }
    }
    function AM5_TrebNerazb()
    {

        //требование неразборности (1-да/0-нет)
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AJ11_Konstrukt == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM6_DopustNerazb()
    {

        //допустимость неразборности (1-да/0-нет)
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AP7_GorRazm()<=L10_BB122_PredGorRazmNerazb4StorVivesm)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM7_NerazbItogo()
    {
        //неразборность, итого (1-неразб/0-разб)
        //умножение
        //вывод

        return $this->AM5_TrebNerazb()*$this->AM6_DopustNerazb();
    }
    function AM8_RazbItogo()
    {

        //разборность, итого (1-разб/0-неразб)
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AM7_NerazbItogo() == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM11_Rama4Ugolka()
    {

        //рама - 4 уголка (1-да/0-нет)
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AP7_GorRazm()<=L10_BB123_PredGorRazmDlRamaIz4Uglm)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM12_Rama40x20mm()
    {

        //рама - 40*20 мм (1-да/0-нет)
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AP7_GorRazm()>L10_BB124_PredGorRazmDlRamaIz20x20mmM)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM13_Rama20x20mm()
    {

        //рама - 20*20 мм (1-да/0-нет)
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AM11_Rama4Ugolka()+$this->AM12_Rama40x20mm()==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AP8_VertRazm()
    {

        //вертикальный размер, м
        //если условие = true, то вывести AN5_BolshRazm()
        //иначе - вывести AN6_MenshRazm()
        //вывод

        if ($this->AJ7_Orientation == 2)
        {
            return $this->AP5_BolshRazm();
        }
        else
        {
            return $this->AP6_MenshRazm();
        }
    }
    function AP10_TrubaBlack20201mpgrn()
    {

        //труба черн 20*20 1 мп, грн
        //значение
        //вывод

        return L10_AR6_TrubaBlack_2020mm;
    }
    function AQ10_TrubaBlack20201mpgrn()
    {

        //труба черн 20*20 1 мп, грн
        //значение
        //вывод

        return L10_AS6_TrubaBlack_2020mm;
    }
    function AP11_TrubaBlack40401mpgrn()
    {

        //труба черн 40*20 1 мп, грн
        //значение
        //вывод

        return L10_AR7_TrubaBlack_4040mm;
    }
    function AQ11_TrubaBlack40401mpgrn()
    {

        //труба черн 40*20 1 мп, грн
        //значение
        //вывод

        return L10_AS7_TrubaBlack_4040mm;
    }
    function AP12_PererashTrubaBlack()
    {

        //перерасход трубы черн
        //значение
        //вывод

        return L10_BB56_K_PererashTrubaBlack_20x20_40x20;
    }
    function AP13_UgolAL15151mp()
    {

        //уголок AL 15*15 1 мп
        //значение
        //вывод

        return L10_AR70_UgolAL_151515mm;
    }
    function AQ13_UgolAL15151mp()
    {

        //уголок AL 15*15 1 мп
        //значение
        //вывод

        return L10_AS70_UgolAL_151515mm;
    }
    function AP14_PererashUgolAL()
    {

        //перерасход уголок AL
        //значение
        //вывод

        return L10_BB57_K_PererashUgolAL_12x12_15x15;
    }
    function AP15_BoltM8PlusGaika()
    {

        //болт м8 + гайка
        //значение
        //вывод

        return L10_AR38_BoltMetrichM8x50PlusGaika;
    }
    function AQ15_BoltM8PlusGaika()
    {

        //болт м8 + гайка
        //значение
        //вывод

        return L10_AS38_BoltMetrichM8x50PlusGaika;
    }
    function AP16_SamorezBlack1shtgrn()
    {

        //саморез черн 1 шт, грн
        //значение
        //вывод

        return L10_AR43_Samorez19BlackWood;
    }
    function AP17_SamorezCinkBur1shtgrn()
    {

        //саморез цинк бур 1 шт, грн
        //значение
        //вывод

        return L10_AR42_Samorez19ZnBur;
    }
    function AP18_RashSamorezNa1mpsht()
    {

        //расход саморезов на 1 мп, шт
        //значение
        //вывод

        return L10_BB61_K_KolSamorezVRamaPVHKorobShtMp;
    }
    function AP19_Kronsht4x41shtgrn()
    {
        //кронштейн 4*4    1 шт, грн
        return L10_AR48_Kronsht_4x4;
    }
    function AQ19_Kronsht4x41shtgrn()
    {
        //кронштейн 4*4    1 шт, грн
        return L10_AS48_Kronsht_4x4;
    }
    function AP20_Kraska1lgrn()
    {

        //краска 1л, грн
        //значение
        //вывод

        return L10_J128_KraskaPF112_1lSsht;
    }
    function AP21_KleyPVH1mpgrn()
    {

        //клей пвх 1 мп, грн
        //значение
        //вывод

        return L10_K117_CosmofenPlusPVH_200mlSmp;
    }
    function AP24_Kleygrn()
    {

        //клей, грн
        //прибавление и умножение
        //вывод

        return (0.7 + $this->AP8_VertRazm() + $this->AP8_VertRazm())*8*$this->AP21_KleyPVH1mpgrn();
    }
    function AP26_UgolALgrn()
    {

        //уголок AL, грн
        //умножение
        //вывод

        return $this->AP8_VertRazm()*4*$this->AP13_UgolAL15151mp()*$this->AP14_PererashUgolAL();
    }
    function AQ26_UgolALgrn()
    {

        //уголок AL, грн
        //умножение
        //вывод

        return $this->AP8_VertRazm()*4*$this->AQ13_UgolAL15151mp();
    }
    function AP27_Samorez1VertLinsht()
    {

        //саморезы 1 верт линия, шт
        //округление и умножение
        //вывод

        return round ($this->AP8_VertRazm()*$this->AP18_RashSamorezNa1mpsht(), 0);
    }
    function AP28_SamorezVUgolALsht()
    {

        //саморезы в уголок AL, шт
        //умножение
        //вывод

        return $this->AP27_Samorez1VertLinsht()*8;
    }
    function AP29_SamorezVUgolALgrn()
    {

        //саморезы в уголок AL, грн
        //умножение
        //вывод

        return $this->AP28_SamorezVUgolALsht()*$this->AP17_SamorezCinkBur1shtgrn();
    }
    function AP30_MatUgolALItogogrn()
    {

        //материалы уголки AL итого, грн
        //прибавление
        //вывод

        return $this->AP26_UgolALgrn()+$this->AP29_SamorezVUgolALgrn();
    }
    function AQ30_MatUgolALItogogrn()
    {

        //материалы уголки AL итого, грн
        //прибавление
        //вывод

        return $this->AQ26_UgolALgrn();
    }
    function AP32_Kronsht4x4grn()
    {

        //кронштейны 4*4, грн
        //умножение
        //вывод

        return $this->AP19_Kronsht4x41shtgrn()*4;
    }
    function AQ32_Kronsht4x4grn()
    {

        //кронштейны 4*4, грн
        //умножение
        //вывод

        return $this->AQ19_Kronsht4x41shtgrn()*4;
    }
    function AP33_SamorezDlKronsht4x4grn()
    {

        //саморезы для кроншт 4*4, грн
        //умножение
        //вывод

        return $this->AP16_SamorezBlack1shtgrn()*16;
    }
    function AP34_MatKronsht4x4Itogogrn()
    {

        //материалы кроншт 4*4 итого, грн
        //прибавление
        //вывод

        return $this->AP32_Kronsht4x4grn()+$this->AP33_SamorezDlKronsht4x4grn();
    }
    function AQ34_MatKronsht4x4Itogogrn()
    {

        //материалы кроншт 4*4 итого, грн
        //прибавление
        //вывод

        return $this->AQ32_Kronsht4x4grn();
    }
    function AP36_TrubaBlack2020mp()
    {

        //труба черн 20*20, мп
        //умножение и прибавление
        //вывод

        return $this->AP7_GorRazm()*4+0.8;
    }
    function AQ36_TrubaBlack2020mp()
    {

        //труба черн 20*20, мп
        //умножение и прибавление
        //вывод

        return $this->AP36_TrubaBlack2020mp()*$this->AQ10_TrubaBlack20201mpgrn();
    }
    function AP37_TrubaBlack2020grn()
    {

        //труба черн 20*20, грн
        //умножение
        //вывод

        return $this->AP36_TrubaBlack2020mp()*$this->AP10_TrubaBlack20201mpgrn()*$this->AP12_PererashTrubaBlack();
    }
    function AP38_BoltM8x50PlusGaikagrn()
    {

        //болты М8*50 + гайка, грн
        //умножение
        //вывод

        return 8*$this->AP15_BoltM8PlusGaika();
    }
    function AQ38_BoltM8x50PlusGaikagrn()
    {

        //болты М8*50 + гайка, грн
        //умножение
        //вывод

        return 8*$this->AQ15_BoltM8PlusGaika();
    }
    function AP39_LKMlitr()
    {

        //лкм, литров
        //умножение и деление
        //вывод

        return $this->AP36_TrubaBlack2020mp()*0.08/4;
    }
    function AP40_LKMgrn()
    {

        //лкм, грн
        //умножение
        //вывод

        return $this->AP39_LKMlitr()*2*$this->AP20_Kraska1lgrn();
    }
    function AP41_Samorezsht()
    {

        //саморезы, шт
        //умножение
        //вывод

        return $this->AP7_GorRazm()*4*$this->AP18_RashSamorezNa1mpsht();
    }
    function AP42_Samorezgrn()
    {

        //саморезы, грн
        //умножение
        //вывод

        return $this->AP41_Samorezsht()*$this->AP17_SamorezCinkBur1shtgrn();
    }
    function AP43_MatTruba2020Itogogrn()
    {

        //материалы труба 20*20 итого, грн
        //прибавление
        //вывод

        return $this->AP37_TrubaBlack2020grn()+$this->AP38_BoltM8x50PlusGaikagrn()+$this->AP40_LKMgrn()+$this->AP42_Samorezgrn();
    }
    function AQ43_MatTruba2020Itogogrn()
    {

        //материалы труба 20*20 итого, грн
        //прибавление
        //вывод

        return $this->AQ36_TrubaBlack2020mp()+$this->AQ38_BoltM8x50PlusGaikagrn();
    }
    function AP45_TrubaBlack4020mp()
    {

        //труба черн 40*20, мп
        //умножение и прибавление
        //вывод

        return $this->AP7_GorRazm()*4+0.8;
    }
    function AQ45_TrubaBlack4020mp()
    {

        //труба черн 40*20, мп
        //умножение и прибавление
        //вывод

        return $this->AP45_TrubaBlack4020mp()*$this->AQ11_TrubaBlack40401mpgrn();
    }
    function AP46_TrubaBlack2020grn()
    {

        //труба черн 20*20, грн
        //умножение
        //вывод

        return $this->AP45_TrubaBlack4020mp()*$this->AP11_TrubaBlack40401mpgrn()*$this->AP12_PererashTrubaBlack();
    }
    function AP47_BoltM8x50PlusGaikagrn()
    {

        //болты М8*50 + гайка, грн
        //умножение
        //вывод

        return 8*$this->AP15_BoltM8PlusGaika();
    }
    function AQ47_BoltM8x50PlusGaikagrn()
    {

        //болты М8*50 + гайка, грн
        //умножение
        //вывод

        return 8*$this->AQ15_BoltM8PlusGaika();
    }
    function AP48_LKMlitr()
    {

        //лкм, литров
        //умножение и деление
        //вывод

        return $this->AP36_TrubaBlack2020mp()*0.12/4;
    }
    function AP49_LKMgrn()
    {

        //лкм, грн
        //умножение
        //вывод

        return $this->AP48_LKMlitr()*2*$this->AP20_Kraska1lgrn();
    }
    function AP50_Samorezsht()
    {

        //саморезы, шт
        //умножение
        //вывод

        return $this->AP7_GorRazm()*4*$this->AP18_RashSamorezNa1mpsht();
    }
    function AP51_Samorezgrn()
    {

        //саморезы, грн
        //умножение
        //вывод

        return $this->AP50_Samorezsht()*$this->AP17_SamorezCinkBur1shtgrn();
    }
    function AP52_MatTruba4020Itogogrn()
    {

        //материалы труба 40*20 итого, грн
        //прибавление
        //вывод

        return $this->AP46_TrubaBlack2020grn()+$this->AP47_BoltM8x50PlusGaikagrn()+$this->AP49_LKMgrn()+$this->AP51_Samorezgrn();
    }
    function AQ52_MatTruba4020Itogogrn()
    {

        //материалы труба 40*20 итого, грн
        //прибавление
        //вывод

        return $this->AQ45_TrubaBlack4020mp()+$this->AQ47_BoltM8x50PlusGaikagrn();
    }
    function AP54_MatVivesNerazbgrn()
    {

        //матер вывеска неразборная, грн
        //прибавление
        //вывод

        return $this->AP24_Kleygrn()+$this->AP34_MatKronsht4x4Itogogrn();
    }
    function AQ54_MatVivesNerazbgrn()
    {

        //матер вывеска неразборная, грн
        //прибавление
        //вывод

        return $this->AQ34_MatKronsht4x4Itogogrn();
    }
    function AP55_MatVivesRazbDo1mgrn()
    {

        //матер выв разб до 1 м, грн
        //прибавление
        //вывод

        return $this->AP30_MatUgolALItogogrn()+$this->AP34_MatKronsht4x4Itogogrn();
    }
    function AQ55_MatVivesRazbDo1mgrn()
    {

        //матер выв разб до 1 м, грн
        //прибавление
        //вывод

        return $this->AQ30_MatUgolALItogogrn()+$this->AQ34_MatKronsht4x4Itogogrn();
    }
    function AP56_MatVivesOt1mDo2mgrn()
    {

        //матер выв от 1 м до 2 м, грн
        //прибавление
        //вывод

        return $this->AP30_MatUgolALItogogrn()+$this->AP43_MatTruba2020Itogogrn();
    }
    function AQ56_MatVivesOt1mDo2mgrn()
    {

        //матер выв от 1 м до 2 м, грн
        //прибавление
        //вывод

        return $this->AQ30_MatUgolALItogogrn()+$this->AQ43_MatTruba2020Itogogrn();
    }
    function AP57_MatVivesOt2mDo3mgrn()
    {

        //матер выв от 2м до 3 м, грн
        //прибавление
        //вывод

        return $this->AP30_MatUgolALItogogrn()+$this->AP52_MatTruba4020Itogogrn();
    }
    function AQ57_MatVivesOt2mDo3mgrn()
    {

        //матер выв от 2м до 3 м, грн
        //прибавление
        //вывод

        return $this->AQ30_MatUgolALItogogrn()+$this->AQ52_MatTruba4020Itogogrn();
    }
    function AP59_MatVivesItogogrn()
    {

        //материалы вывеска итого, грн
        //умножение и прибавление
        //вывод

        return $this->AP54_MatVivesNerazbgrn()*$this->AM7_NerazbItogo()+$this->AP55_MatVivesRazbDo1mgrn()*$this->AM8_RazbItogo()*$this->AM11_Rama4Ugolka()+$this->AP56_MatVivesOt1mDo2mgrn()*$this->AM13_Rama20x20mm()+$this->AP57_MatVivesOt2mDo3mgrn()*$this->AM12_Rama40x20mm();
    }
    function AQ59_MatVivesItogogrn()
    {

        //материалы вывеска итого, грн
        //умножение и прибавление
        //вывод

        return $this->AQ54_MatVivesNerazbgrn()*$this->AM7_NerazbItogo()+$this->AQ55_MatVivesRazbDo1mgrn()*$this->AM8_RazbItogo()*$this->AM11_Rama4Ugolka()+$this->AQ56_MatVivesOt1mDo2mgrn()*$this->AM13_Rama20x20mm()+$this->AQ57_MatVivesOt2mDo3mgrn()*$this->AM12_Rama40x20mm();
    }
    function AT5_VkrutSamorez1shtmin()
    {

        //вкрутить саморез 1 шт, мин
        //значение
        //вывод

        return L10_BT25_VkruchSamorez_1sht;
    }
    function AT6_SverlitOtvDo5mmmin()
    {

        //сверлить отверст до 5 мм, мин
        //значение
        //вывод

        return L10_BT27_SverlOtvDo5mm_1sht;
    }
    function AT7_SverlitOtvBol5mmmin()
    {

        //сверлить отверст более 5 мм, мин
        //значение
        //вывод

        return L10_BT28_SverlOtvBol5mm_1sht;
    }
    function AT8_PrirezALProf1sht()
    {

        //прирезать AL профиль, 1 шт
        //значение
        //вывод

        return L10_BT21_PriresStalProfCDUDStilk_1sht;
    }
    function AT10_Skl1mp1Ugol4StorVivmin()
    {

        //склейка 1 мп угла 4 стор выв, мин
        //значение
        //вывод

        return L10_BT17_Skl1mp1Ugol4StorViv_min;
    }
    function AT11_Skl1Ugol4StorVivmin()
    {

        //склейка 1 угла 4 стор выв минимум, мин
        //значение
        //вывод

        return L10_BT18_Skl1Ugol4StorVivMinim_min;
    }
    function AT13_Skl1Ugolmin()
    {

        //склейка одного угла, мин
        //умножение
        //вывод

        return $this->AP8_VertRazm()*$this->AT10_Skl1mp1Ugol4StorVivmin();
    }
    function AT14_Skl1UgolItogomin()
    {

        //склейка одного угла итого, мин
        //если условие = true, то вывести AQ11_Skl1Ugol4StorVivmin()
        //иначе - вывести AQ13_Skl1Ugolmin()
        //вывод

        if ($this->AT13_Skl1Ugolmin() < $this->AT11_Skl1Ugol4StorVivmin())
        {
            return $this->AT11_Skl1Ugol4StorVivmin();
        }
        else
        {
            return $this->AT13_Skl1Ugolmin();
        }
    }
    function AT17_Prirez4ALProfmin()
    {

        //прирезать 4 AL профиля, мин
        //умножение
        //вывод

        return $this->AT8_PrirezALProf1sht()*4;
    }
    function AT18_Prosv4ALProfmin()
    {

        //просверлить 4 AL профиля, мин
        //умножение
        //вывод

        return $this->AP8_VertRazm()*4*$this->AP18_RashSamorezNa1mpsht()*$this->AT6_SverlitOtvDo5mmmin();
    }
    function AT19_ProkrOtkr4ALProfmin()
    {

        //прикрутить/откр  4 AL профиля, мин
        //умножение
        //вывод

        return $this->AP8_VertRazm()*4*$this->AP18_RashSamorezNa1mpsht()*$this->AT5_VkrutSamorez1shtmin();
    }
    function AT20_SobrRazb4ALProfmin()
    {

        //собрать/разобр 4 AL профиля, мин
        //прибавление
        //вывод

        return $this->AT17_Prirez4ALProfmin()+$this->AT18_Prosv4ALProfmin()+$this->AT19_ProkrOtkr4ALProfmin();
    }
    function AT22_SobrRazb4Kronshtmin()
    {

        //собрать/ разобр 4 кронштейна, мин
        //умножение
        //вывод

        return 16*$this->AT5_VkrutSamorez1shtmin();
    }
    function AT24_IzgotSobrRazbRama2020min()
    {

        //изгот/собр/разобр рама 20*20, мин
        //умножение и деление
        //вывод

        return $this->AP37_TrubaBlack2020grn()*0.8/L10_C67_K1;
    }
    function AT26_IzgotSobrRazbRama4040min()
    {

        //изгот/собр/разобр рама 40*20, мин
        //умножение и деление
        //вывод

        return $this->AP46_TrubaBlack2020grn()*0.8/L10_C67_K1;
    }
    function AT28_VivNerazbSobrmin()
    {

        //вывеска неразборная собрать, мин
        //умножение и прибавление
        //вывод

        return $this->AT14_Skl1UgolItogomin()*4+$this->AT22_SobrRazb4Kronshtmin();
    }
    function AT29_RamaDlyaVivRazbDo1mmin()
    {

        //рама для выв разб до 1 м, мин
        //прибавление
        //вывод

        return $this->AT20_SobrRazb4ALProfmin()+$this->AT22_SobrRazb4Kronshtmin();
    }
    function AT30_RamaOt1mDo2mmin()
    {

        //рама от 1 м до 2 м, мин
        //прибавление
        //вывод

        return $this->AT20_SobrRazb4ALProfmin()+$this->AT24_IzgotSobrRazbRama2020min();
    }
    function AT31_RamaOt2mDo3mmin()
    {

        //рама от 2м до 3 м, мин
        //прибавление
        //вывод

        return $this->AT20_SobrRazb4ALProfmin()+$this->AT26_IzgotSobrRazbRama4040min();
    }
    function AT33_RamaPlusSborRazbItogomin()
    {

        //рама + сборка/разборка итого, мин
        //умножение и прибавление
        //вывод

        return $this->AT28_VivNerazbSobrmin()*$this->AM7_NerazbItogo()+$this->AT29_RamaDlyaVivRazbDo1mmin()*$this->AM11_Rama4Ugolka()*$this->AM8_RazbItogo()+$this->AT30_RamaOt1mDo2mmin()*$this->AM13_Rama20x20mm()+$this->AT31_RamaOt2mDo3mmin()*$this->AM12_Rama40x20mm();
    }
    function AW6_StoimMatgrn()
    {

        //стоимость материалов, грн
        //округление
        //вывод

        return round ($this->AP59_MatVivesItogogrn(), 0);
    }
    function AW7_Konstrukt()
    {

        //конструктив (1-раз/0-нераз)
        //округление
        //вывод

        return $this->AM8_RazbItogo();
    }
    function AW10_TrudRamaVneshgrn()
    {

        //трудоем рама внеш, мин
        //округление
        //вывод

        return round ($this->AT33_RamaPlusSborRazbItogomin(), 0);
    }
    function AW11_StoimRabgrn()
    {

        //стоимость работы, грн
        //округление и умножение
        //вывод

        return round ($this->AW10_TrudRamaVneshgrn()*L10_C67_K1, 0);
    }
    function AW22_Veskg()
    {

        //вес, кг
        //прибавление
        //вывод

        return round($this->AQ59_MatVivesItogogrn()*$this->AJ5_4WallIn, 1);
    }
    function AW24_Itogogrn()
    {

        //итого, грн
        //прибавление
        //вывод

        return $this->AW6_StoimMatgrn()+$this->AW11_StoimRabgrn();
    }








}

class L17_4{}