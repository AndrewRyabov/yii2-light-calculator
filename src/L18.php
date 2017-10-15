<?php namespace almaz44\light\calculator;
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 03.08.2017
 * Time: 10:08
 */
class L18
{
    // Входные параметры:
// Входные параметры:
    public $T5_RoofVisorOut; // крыша/козырек улица
    public $T6_WallOut; // стена улица
    public $T7_WallIn; // стена помещение
    public $T8_2SideIn; // 2 стороны помещение
    public $T9_4SideIn; // 4 стороны помещение

    public $T11_BigStor; // Большая сторона
    public $T12_SmallStor; // Маленькая сторона


    public function __construct($RoofVisorOut, $WallOut, $WallIn,
                                $SideIn2, $SideIn4, $BigStor, $SmallStor)

    {
        // Заполнение входных данных.
        $this->T5_RoofVisorOut = $RoofVisorOut;
        $this->T6_WallOut = $WallOut;
        $this->T7_WallIn = $WallIn;
        $this->T8_2SideIn = $SideIn2;
        $this->T9_4SideIn = $SideIn4;
        $this->T11_BigStor = $BigStor;
        $this->T12_SmallStor = $SmallStor;

    }

    function AH21_Energopotreblenie_Vt()
    {
        //умножение и округление
        //вывод
        return round($this->W17_MochostKlasterov_Vt() * $this->W5_Ulica(), 0);
    }

    function W17_MochostKlasterov_Vt()
    {
        //умножение
        //вывод

        return ($this->W15_KolichestvoKlasterov_shtuk() * L10_AI57_Claster3750_3kr_IP65P);
    }

    function W15_KolichestvoKlasterov_shtuk()
    {
        //деление и округление
        //вывод

        return round($this->W13_PlochadFasada_m2() / L10_BB77_PloshOsvKlast3750and3krandIP65_m2, 0);
    }

    function W13_PlochadFasada_m2()
    {
        //умножение
        //вывод

        return ($this->W11_LargeSize_m() * $this->W12_SmallSize_m());
    }

    function W11_LargeSize_m()
    {
        //деление и округление
        //вывод

        return round($this->T11_BigStor / 100, 2);
    }

    function W12_SmallSize_m()
    {
        //деление и округление
        //вывод

        return round($this->T12_SmallStor / 100, 2);
    }

    function W5_Ulica()
    {
        //если (T7+T8+T9)=0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->T7_WallIn + $this->T8_2SideIn + $this->T9_4SideIn) == 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function AH22_Ves_kg()
    {
        //сложение, умножение и округление
        //вывод
        return round(($this->W21_VesKlasterov_kg() + $this->AB18_2ItogoBPBezGarantii()) * $this->W5_Ulica(), 1);
    }

    function W21_VesKlasterov_kg()
    {
        //умножение
        //вывод

        return ($this->W15_KolichestvoKlasterov_shtuk() * L10_AG57_Claster3750_3kr_IP65V);
    }

    function AB18_2ItogoBPBezGarantii()
    {
        //сложение
        //вывод

        return ($this->AB6_1Ves() + $this->AB7_2Ves() + $this->AB8_3Ves() + $this->AB9_4Ves() + $this->AB10_5Ves() + $this->AB11_6Ves() + $this->AB12_7Ves() + $this->AB13_8Ves() + $this->AB14_9Ves() + $this->AB15_10Ves() + $this->AB16_11Ves());
    }

    function AB6_1Ves()
    {
        //умножение
        //вывод
        return ($this->Y6_1PodborBPIP20() * L10_AG20_PowerSupply_24VT_IP20V);
    }

    function Y6_1PodborBPIP20()
    {
        //W19>0 и W19<=24, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 0 and $this->W19_MinMoshonostBP_Vt() <= 24) {
            return 1;
        } else {
            return 0;
        }
    }

    function W19_MinMoshonostBP_Vt()
    {
        //умножение
        //вывод

        return ($this->W17_MochostKlasterov_Vt() * L10_BB78_K_ZapasPoTokuDlBP);
    }

    function AB7_2Ves()
    {
        //умножение
        //вывод
        return ($this->Y7_2PodborBPIP20() * L10_AG21_PowerSupply_36VT_IP20V);
    }

    function Y7_2PodborBPIP20()
    {
        //W19>24 и W19<=36, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 24 and $this->W19_MinMoshonostBP_Vt() <= 36) {
            return 1;
        } else {
            return 0;
        }
    }

    function AB8_3Ves()
    {
        //умножение
        //вывод
        return ($this->Y8_3PodborBPIP20() * L10_AG22_PowerSupply_48VT_IP20V);
    }

    function Y8_3PodborBPIP20()
    {
        //W19>36 и W19<=48, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 36 and $this->W19_MinMoshonostBP_Vt() <= 48) {
            return 1;
        } else {
            return 0;
        }
    }

    function AB9_4Ves()
    {
        //умножение
        //вывод
        return ($this->Y9_4PodborBPIP20() * L10_AG23_PowerSupply_60VT_IP20V);
    }

    function Y9_4PodborBPIP20()
    {
        //W19>48 и W19<=60, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 48 and $this->W19_MinMoshonostBP_Vt() <= 60) {
            return 1;
        } else {
            return 0;
        }
    }

    function AB10_5Ves()
    {
        //умножение
        //вывод
        return ($this->Y10_5PodborBPIP20() * L10_AG24_PowerSupply_80VT_IP20V);
    }

    function Y10_5PodborBPIP20()
    {
        //W19>60 и W19<=80, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 60 and $this->W19_MinMoshonostBP_Vt() <= 80) {
            return 1;
        } else {
            return 0;
        }
    }

    function AB11_6Ves()
    {
        //умножение
        //вывод
        return ($this->Y11_6PodborBPIP20() * L10_AG25_PowerSupply_100VT_IP20V);
    }

    function Y11_6PodborBPIP20()
    {
        //W19>80 и W19<=100, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 80 and $this->W19_MinMoshonostBP_Vt() <= 100) {
            return 1;
        } else {
            return 0;
        }
    }

    function AB12_7Ves()
    {
        //умножение
        //вывод
        return ($this->Y12_7PodborBPIP20() * L10_AG26_PowerSupply_120VT_IP20V);
    }

    function Y12_7PodborBPIP20()
    {
        //W19>100 и W19<=120, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 100 and $this->W19_MinMoshonostBP_Vt() <= 120) {
            return 1;
        } else {
            return 0;
        }
    }

    function AB13_8Ves()
    {
        //умножение
        //вывод
        return ($this->Y13_8PodborBPIP20() * L10_AG27_PowerSupply_180VT_IP20V);
    }

    function Y13_8PodborBPIP20()
    {
        //W19>120 и W19<=180, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 120 and $this->W19_MinMoshonostBP_Vt() <= 180) {
            return 1;
        } else {
            return 0;
        }
    }

    function AB14_9Ves()
    {
        //умножение
        //вывод
        return ($this->Y14_9PodborBPIP20() * L10_AG28_PowerSupply_240VT_IP20V);
    }

    function Y14_9PodborBPIP20()
    {
        //W19>180 и W19<=240, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 180 and $this->W19_MinMoshonostBP_Vt() <= 240) {
            return 1;
        } else {
            return 0;
        }
    }

    function AB15_10Ves()
    {
        //умножение
        //вывод
        return ($this->Y15_10PodborBPIP20() * L10_AG29_PowerSupply_360VT_IP20V);
    }

    function Y15_10PodborBPIP20()
    {
        //W19>240 и W19<=360, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 240 and $this->W19_MinMoshonostBP_Vt() <= 360) {
            return 1;
        } else {
            return 0;
        }
    }

    function AB16_11Ves()
    {
        //умножение
        //вывод
        return ($this->Y16_11PodborBPIP20() * L10_AG30_PowerSupply_504BT_IP20V);
    }

    function Y16_11PodborBPIP20()
    {
        //W19>360 и W19<=504, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt() > 360 and $this->W19_MinMoshonostBP_Vt() <= 504) {
            return 1;
        } else {
            return 0;
        }
    }

    function AH24_Itogo_grn()
    {
        //сложение
        //вывод
        return ($this->AH6_StoimostMaterialov_grn() + $this->AH11_StoimostMaterialov_grn());
    }

    function AH6_StoimostMaterialov_grn()
    {
        //сложение, умножение и округление
        //вывод
        return round(($this->W16_StoimostKlasterov_grn() + $this->W29_KabelItogo_grn() + $this->AA19_BPSGarantiei_grn()) * $this->W5_Ulica(), 0);
    }

    function W16_StoimostKlasterov_grn()
    {
        //умножение
        //вывод

        return ($this->W15_KolichestvoKlasterov_shtuk() * L10_AF57_Claster3750_3kr_IP65S);
    }

    function W29_KabelItogo_grn()
    {
        //умножение
        //вывод

        return $this->W24_KabelSegment_grn() + $this->W27_KabelBlochni_grn();
    }

    function W24_KabelSegment_grn()
    {
        //умножение
        //вывод

        return ($this->W23_KabelSegment_mp() * L10_AF79_CabelCu_1mm2_13A);
    }

    function W23_KabelSegment_mp()
    {
        //деление и округление
        //вывод

        return round($this->W15_KolichestvoKlasterov_shtuk() / 50, 0);
    }

    function W27_KabelBlochni_grn()
    {
        //умножение
        //вывод

        return ($this->W26_KabelBlochni_mp() * L10_AF80_CabelCu_15mm2_20A);
    }

    function W26_KabelBlochni_mp()
    {
        //деление и округление
        //вывод

        return round($this->W18_PotreblTok_A() / 20, 0) * 4.5;
    }

    function W18_PotreblTok_A()
    {
        //деление
        //вывод

        return ($this->W17_MochostKlasterov_Vt() / 12);
    }

    function AA19_BPSGarantiei_grn()
    {
        //умножение
        //вывод
        return ($this->AA18_KabelItogo_grn() * L10_BB79_GarantKoefNaBP);
    }

    function AA18_KabelItogo_grn()
    {
        //сложение
        //вывод

        return $this->AA6_1Stoimost() + $this->AA7_2Stoimost() + $this->AA8_3Stoimost() + $this->AA9_4Stoimost() + $this->AA10_5Stoimost() + $this->AA11_6Stoimost() + $this->AA12_7Stoimost() + $this->AA13_8Stoimost() + $this->AA14_9Stoimost() + $this->AA15_10Stoimost() + $this->AA16_11Stoimost();
    }

    function AA6_1Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y6_1PodborBPIP20() * L10_AF20_PowerSupply_24VT_IP20S);
    }

    function AA7_2Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y7_2PodborBPIP20() * L10_AF21_PowerSupply_36VT_IP20S);
    }

    function AA8_3Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y8_3PodborBPIP20() * L10_AF22_PowerSupply_48VT_IP20S);
    }

    function AA9_4Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y9_4PodborBPIP20() * L10_AF23_PowerSupply_60VT_IP20S);
    }

    function AA10_5Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y10_5PodborBPIP20() * L10_AF24_PowerSupply_80VT_IP20S);
    }

    function AA11_6Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y11_6PodborBPIP20() * L10_AF25_PowerSupply_100VT_IP20S);
    }

    function AA12_7Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y12_7PodborBPIP20() * L10_AF26_PowerSupply_120VT_IP20S);
    }

    function AA13_8Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y13_8PodborBPIP20() * L10_AF27_PowerSupply_180VT_IP20S);
    }

    function AA14_9Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y14_9PodborBPIP20() * L10_AF28_PowerSupply_240VT_IP20S);
    }

    function AA15_10Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y15_10PodborBPIP20() * L10_AF29_PowerSupply_360VT_IP20S);
    }

    function AA16_11Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y16_11PodborBPIP20() * L10_AF30_PowerSupply_504BT_IP20S);
    }

    function AH11_StoimostMaterialov_grn()
    {
        //умножение и округление
        //вывод
        return round($this->AH10_TrydoemkostKlaster_min() * L10_C67_K1, 0);
    }

    function AH10_TrydoemkostKlaster_min()
    {
        //сложение, умножение и округление
        //вывод
        return ($this->AE5_MontagKlasterov_min() + $this->AE6_MontagBP_min()) * $this->W5_Ulica();
    }

    function AE5_MontagKlasterov_min()
    {
        //умножение
        //вывод
        return ($this->W15_KolichestvoKlasterov_shtuk() * L10_BT57_MontajKlast_1sht);
    }

    function AE6_MontagBP_min()
    {

        //вывод
        return L10_BT55_MontajBlockPit_1sht;
    }

}