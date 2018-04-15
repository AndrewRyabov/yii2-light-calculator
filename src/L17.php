<?php namespace almaz44\light\calculator;
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
        return L10_BB105_K_PererashDerPlanokupak;
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
        return $this->Y33_NumberSamorezItogo_ps() * $this->Y21_Samorez1_grn();
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
        return $this->Y31_LongUDBox_mp() * $this->Z19_UDProfil1mp_grn();
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

    // Промежуточные данные.
//    private $L09;       // класс исходных данных.

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)

    {
        // Заполнение входных данных.
        $this->AJ5_4WallIn = ($VarIspoln == 5) ? 1 : 0;     // 4 стороны помещение
        $this->AJ7_Orientation = $Orientation;              // ориентация
        $this->AJ8_BigStor = $MaxSide_cm;                   // большая сторона
        $this->AJ9_SmallStor = $MinSide_cm;                 // меньшая сторона
    }

    // C-light _ рама внешняя 4 стороны _ 2

    function AM5_BigSize()
    {
        return round ($this->AJ8_BigStor/100, 2);
    }
    function AM6_SmallSize()
    {
        return round ($this->AJ9_SmallStor/100, 2);
    }
    function AM7_HorizontalSize()
    {
        return ($this->AJ7_Orientation == 1) ? $this->AM5_BigSize() : $this->AM6_SmallSize();
    }
    function AM8_VerticalSize()
    {
        return ($this->AJ7_Orientation == 2) ? $this->AM5_BigSize() : $this->AM6_SmallSize();
    }
    //
    function AM12_BoxNorm()
    {
        return ($this->AM7_HorizontalSize() > L10_BK55_PredGorRazmRamMin_m) ? 1 : 0;
    }
    function AM13_BoxMin()
    {
        return ($this->AM12_BoxNorm() == 1) ? 0 : 1;
    }
//// расчетная величина, материал, знач
    function AP5_Truba40x25x2mm()
    {
        return L10_AR9_TrubaBlack_4025mm;
    }
    function AP6_OverflowTrubaSteelBlack()
    {
        return L10_BB56_K_PererashTrubaBlack_20x20_40x20;
    }
    function AP7_ConeAL15x15_mg_grn()
    {
        return L10_AR70_UgolAL_151515mm;
    }
    function AP8_OverflowConeAL()
    {
        return L10_BB57_K_PererashUgolAL_12x12_15x15;
    }
    //
    function AP10_KronshteynUho_grn()
    {
        return L10_AR51_kronshteynUho;
    }
    function AP11_BoltM8Gaika_grn()
    {
        return L10_AR38_BoltMetrichM8x50PlusGaika;
    }
    function AP12_Samorez_grn()
    {
        return L10_AR42_Samorez19ZnBur;
    }
    function AP13_RashodSamorez_ps()
    {
        return L10_BB62_K_KolSamorezVALRamaPVHKorobShtMp;
    }
    //
    function AP15_AerozolKraska_grn()
    {
        return L10_J128_KraskaPF112_1lSsht;
    }
    //
    function AP18_ConeAL_grn()
    {
        return $this->AM8_VerticalSize() * $this->AP7_ConeAL15x15_mg_grn() * $this->AP8_OverflowConeAL() * 4;
    }
    function AP19_SamorezConeAL_ps()
    {
        return round($this->AM8_VerticalSize() * $this->AP13_RashodSamorez_ps() * 8 + 0.5, 0);
    }
    function AP20_SamorezConeAL_grn()
    {
        return $this->AP19_SamorezConeAL_ps() * $this->AP12_Samorez_grn();
    }
    function AP21_MaterialConeALItogo_grn()
    {
        return round($this->AP18_ConeAL_grn() + $this->AP20_SamorezConeAL_grn(), 0);
    }
    //
    function AP23_KSizeBoxSteel()
    {
        return L10_BK57_K_RazmRamStal;
    }
    function AP24_MinSizeOutBoxCone_m()
    {
        return L10_BK56_MinrazmVneshRamUgol_m;
    }
    function AP25_SizeBoxOutCone_m()
    {
        return round($this->AM7_HorizontalSize() / $this->AP23_KSizeBoxSteel(), 2);
    }
    function AP26_SizeBoxOutConeItogo_m()
    {
        return ($this->AP25_SizeBoxOutCone_m() > $this->AP24_MinSizeOutBoxCone_m()) ?
            $this->AP25_SizeBoxOutCone_m() :
            $this->AP24_MinSizeOutBoxCone_m();
    }
    function AP27_SteelTrubaCone_m()
    {
        return $this->AP26_SizeBoxOutConeItogo_m() * 8;
    }
    function AP28_SteelTrubaCone_grn()
    {
        return $this->AP27_SteelTrubaCone_m() * $this->AP5_Truba40x25x2mm() * $this->AP6_OverflowTrubaSteelBlack();
    }
    function AP29_Color_grn()
    {
        return $this->AP15_AerozolKraska_grn() * L10_BK58_K_Isp1BallonKraskDlRam;
    }
    function AP30_BoltBox_grn()
    {
        return 16 * $this->AP11_BoltM8Gaika_grn();
    }
    function AP31_MaterialSteelBoxItogo_grn()
    {
        $temp = $this->AP28_SteelTrubaCone_grn() + $this->AP29_Color_grn() + $this->AP30_BoltBox_grn();
        return round($temp, 0);
    }
    //
    function AP33_MaterialSteelBoxMin_grn()
    {
        $temp = $this->AP10_KronshteynUho_grn() * 8 +
                $this->AP12_Samorez_grn() * 24;
        return round($temp, 0);
    }
    //
    function AP35_BoxOutNormal_grn()
    {
        return $this->AP21_MaterialConeALItogo_grn() * $this->AP31_MaterialSteelBoxItogo_grn();
    }
    function AP36_BoxOutMin_grn()
    {
        return $this->AP21_MaterialConeALItogo_grn() + $this->AP33_MaterialSteelBoxMin_grn();
    }
    function AP37_BoxOut_grn()
    {
        $temp = $this->AP35_BoxOutNormal_grn() * $this->AM12_BoxNorm() +
                $this->AP36_BoxOutMin_grn() * $this->AM13_BoxMin();
        return $temp;
    }
//// кг.
    function AQ5_TrubaBlack40x25x2_mm()
    {
        return L10_AS9_TrubaBlack_4040mm;
    }
    //
    function AQ7_ConeAL15x15_mp_grn()
    {
        return L10_AS70_UgolAL_151515mm;
    }
    //
    function AQ10_KronshteynSteelUho_grn()
    {
        return L10_AS51_kronshteynUho;
    }
    function AQ11_BoltM8Gaika_grn()
    {
        return L10_AS38_BoltMetrichM8x50PlusGaika;
    }
    function AQ12_SamorezZink_grn()
    {
        return L10_AS42_Samorez19ZnBur;
    }
    //
    function AQ18_ConeAL_grn()
    {
        return $this->AM8_VerticalSize() * L10_AS70_UgolAL_151515mm * 4;
    }
    function AQ19_SamorezConeAL_ps()
    {
        return $this->AP19_SamorezConeAL_ps() * L10_AS42_Samorez19ZnBur;
    }
    //
    function AQ21_MaterialConeALItogo_grn()
    {
        return $this->AQ18_ConeAL_grn() * $this->AQ19_SamorezConeAL_ps();
    }
    //
    function AQ27_SteelTrubaCone_m()
    {
        return $this->AP27_SteelTrubaCone_m() * $this->AQ5_TrubaBlack40x25x2_mm();
    }
    //
    function AQ30_BoltBox_grn()
    {
        return 16 * $this->AQ11_BoltM8Gaika_grn();
    }
    function AQ31_MaterialSeelBoxItogo_grn()
    {
        return round($this->AQ27_SteelTrubaCone_m() + $this->AQ30_BoltBox_grn(), 1);
    }
    //
    function AQ33_MaterialSteelBoxMinimal_grn()
    {
        $temp = $this->AQ10_KronshteynSteelUho_grn() * 8 +
                $this->AQ12_SamorezZink_grn() * 24;
        return round($temp, 1);
    }
    //
    function AQ35_BoxOutNormal_grn()
    {
        return $this->AQ21_MaterialConeALItogo_grn() * $this->AQ31_MaterialSeelBoxItogo_grn();
    }
    function AQ36_BoxOutMinim_grn()
    {
        return $this->AQ21_MaterialConeALItogo_grn() + $this->AQ33_MaterialSteelBoxMinimal_grn();
    }
    function AQ37_BoxOut_grn()
    {
        $temp = $this->AQ35_BoxOutNormal_grn() * $this->AM12_BoxNorm() +
                $this->AQ36_BoxOutMinim_grn() * $this->AM13_BoxMin();
        return $temp;
    }
//// трудоемкость
    function AT5_VkruchSeriiSamorezov_1sht_min()
    {
        return L10_BT26_VkruchSeriiSamorezov_1sht;
    }
    function AT6_SverlHoleDo5mm_min()
    {
        return L10_BT27_SverlOtvDo5mm_1sht;
    }
    function AT7_SverlHoleOver5mm_min()
    {
        return L10_BT28_SverlOtvBol5mm_1sht;
    }
    function AT8_CutALProfil_ps()
    {
        return L10_BT21_PriresStalProfCDUDStilk_1sht;
    }
    //
    function AT10_Cut2ALProfil_min()
    {
        return $this->AT8_CutALProfil_ps() * 4;
    }
    function AT11_Sverl4ALProfil_min()
    {
        return $this->AM8_VerticalSize() * 2 * 4 * $this->AP13_RashodSamorez_ps() * $this->AT6_SverlHoleDo5mm_min();
    }
    function AT12_Prikrutit4ALProfil_min()
    {
        return $this->AM8_VerticalSize() * 2 * 4 * $this->AP13_RashodSamorez_ps() * $this->AT5_VkruchSeriiSamorezov_1sht_min();
    }
    function AT13_Sborka4ALProfil_min()
    {
        return $this->AT10_Cut2ALProfil_min() + $this->AT11_Sverl4ALProfil_min() + $this->AT12_Prikrutit4ALProfil_min();
    }
    //
    function AT15_SvarkaPokraskaBoxOut4ugol_min()
    {
        return L10_CC11_Izgot1UgolStalIzPolos50x4I20x4_min * 4;
    }
    function AT16_SverlHoleBolt16ps_min()
    {
        return $this->AT7_SverlHoleOver5mm_min() * 16;
    }
    function AT18_BoxSteelNormal_min()
    {
        return $this->AT15_SvarkaPokraskaBoxOut4ugol_min() * $this->AT16_SverlHoleBolt16ps_min();
    }
    //
    function AT20_PrikrutitBoxMinim8_min()
    {
        return 24 * $this->AT5_VkruchSeriiSamorezov_1sht_min();
    }
    //
    function AT23_BoxOutNormal_min()
    {
        return $this->AT13_Sborka4ALProfil_min() + $this->AT18_BoxSteelNormal_min();
    }
    function AT24_BoxOutMin_min()
    {
        return $this->AT13_Sborka4ALProfil_min() + $this->AT20_PrikrutitBoxMinim8_min();
    }
    function AT25_BoxOut_min()
    {
        $temp = $this->AT23_BoxOutNormal_min() * $this->AM12_BoxNorm() +
                $this->AT24_BoxOutMin_min() * $this->AM13_BoxMin();
        return round($temp, 0);
    }
//// выходная величина
    function AW6_CostMaterial_grn()
    {
        return $this->AP37_BoxOut_grn() * $this->AJ5_4WallIn;
    }
    //
    function AW10_WorkBoxOut_min()
    {
        return $this->AT25_BoxOut_min() * $this->AJ5_4WallIn;
    }
    function AW11_CostWork_grn()
    {
        return round($this->AW10_WorkBoxOut_min() * L10_C67_K1, 0);
    }
    //
    function AW22_Massa_kg()
    {
        return round($this->AQ37_BoxOut_grn() * $this->AJ5_4WallIn, 1);
    }
    //
    function AW24_Itogo_grn()
    {
        return $this->AW6_CostMaterial_grn() + $this->AW11_CostWork_grn();
    }
}

class L17_4{
    // Входные параметры:
    public $BA5_2WallIn; // 2 стороны помещение

    public $BA7_BigStor_sm; // большая сторона
    public $BA8_SmallStor_sm; // меньшая сторона

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)

    {
        // Заполнение входных данных.
        $this->BA5_2WallIn = ($VarIspoln == 4) ? 1 : 0;     // 2 стороны помещение
        $this->BA7_BigStor_sm = $MaxSide_cm;                   // большая сторона
        $this->BA8_SmallStor_sm = $MinSide_cm;                 // меньшая сторона
    }
//// флаги/расчеты
    function BD5_BigSize_m()
    {
        return round($this->BA7_BigStor_sm / 100, 2);
    }
    function BD6_SmallSize_m()
    {
        return round($this->BA8_SmallStor_sm / 100, 2);
    }
    function BD7_SquareBack_m2()
    {
        return $this->BD5_BigSize_m() * $this->BD6_SmallSize_m();
    }
    function BD8_Perimetr_m()
    {
        $temp = 2 * ($this->BD5_BigSize_m() + $this->BD6_SmallSize_m());
        return $temp;
    }
    //
    function BD10_FlagSize()
    {
        return ($this->BD6_SmallSize_m() > L10_BK22_MaxRazmOtsutElectroram2Stor_m) ? 1 : 0;
    }
    function BD11_FlagItogo()
    {
        return $this->BD10_FlagSize() * $this->BA5_2WallIn;
    }
//// расчетная величина, материал
    function BG5_SamorezBlack_grn()
    {
        return L10_AR43_Samorez19BlackWood;
    }
    function BG6_PlankaPack1mp_grn()
    {
        return L10_U92_PlankUpakDer25x15;
    }
    function BG7_KoefOverflowUpakPlanok()
    {
        return L10_BB105_K_PererashDerPlanokupak;
    }
    function BG8_NumSamorez1mp_ps()
    {
        return L10_BB61_K_KolSamorezVRamaPVHKorobShtMp;
    }
    //
    function BG11_NumPlanok_ps()
    {
        return round($this->BD5_BigSize_m() * 4, 0);
    }
    function BG12_CostPlanok_grn()
    {
        $temp = $this->BG11_NumPlanok_ps() *
                $this->BD6_SmallSize_m() *
                $this->BG6_PlankaPack1mp_grn() *
                $this->BG7_KoefOverflowUpakPlanok();
        return $temp;
    }
    function BG13_NumberSamorez_ps()
    {
        return $this->BG11_NumPlanok_ps() * 2;
    }
    function BG14_CostSamorez_grn()
    {
        return $this->BG13_NumberSamorez_ps() * $this->BG5_SamorezBlack_grn();
    }
    function BG15_MaterialItogo_grn()
    {
        return round($this->BG12_CostPlanok_grn() + $this->BG14_CostSamorez_grn(), 0);
    }
//// расчетная величина, материал, кг.
    function BH5_SamorezBlack_kg()
    {
        return L10_AS43_Samorez19BlackWood;
    }
    function BH6_PlankaPack_kg()
    {
        return L10_V92_PlankUpakDer25x15;
    }
    function BH12_CostUpakPlanok_kg()
    {
        return $this->BG11_NumPlanok_ps() * $this->BD6_SmallSize_m() * $this->BH6_PlankaPack_kg();
    }
    //
    function BH14_CostSamorez_kg()
    {
        return $this->BG13_NumberSamorez_ps() * $this->BH5_SamorezBlack_kg();
    }
    function BH15_MaterialItogo_kg()
    {
        return round($this->BH12_CostUpakPlanok_kg() + $this->BH14_CostSamorez_kg(), 1);
    }
//// трудоемкость
    function BK5_VkrutitSam1_min()
    {
        return L10_BT25_VkruchSamorez_1sht;
    }
    function BK6_PrirezatPlanku_min()
    {
        return L10_BT22_PriresPlankDerUpak_min;
    }
    //
    function BK9_PrirezatPlanki_min()
    {
        return $this->BG11_NumPlanok_ps() * $this->BK6_PrirezatPlanku_min();
    }
    function BK10_PrikrutPlanli_min()
    {
        return $this->BG13_NumberSamorez_ps() * $this->BK5_VkrutitSam1_min() * 2;
    }
    function BK11_MontagElecroBox_min()
    {
        return round($this->BK9_PrirezatPlanki_min() + $this->BK10_PrikrutPlanli_min(), 0);
    }
    //// выходная величина
    function BN6_CostMaterial_grn()
    {
        return $this->BG15_MaterialItogo_grn() * $this->BD11_FlagItogo();
    }
    //
    function BN10_WorkElectroBox_min()
    {
        return $this->BK11_MontagElecroBox_min() * $this->BD11_FlagItogo();
    }
    function BN11_CostWork_grn()
    {
        return round($this->BN10_WorkElectroBox_min() * L10_C67_K1, 0);
    }
    //
    function BN22_Massa_kg()
    {
        return $this->BH15_MaterialItogo_kg() * $this->BD11_FlagItogo();
    }
    //
    function BN24_Iogo_grn()
    {
        return $this->BN6_CostMaterial_grn() + $this->BN11_CostWork_grn();
    }
}