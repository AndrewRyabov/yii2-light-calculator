<?php
namespace almaz44\light\calculator;
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 27.07.2017
 * Time: 8:01
 */
class L17_1
{
    // Входные параметры:
    public $B5_RoofVisorOut; // крыша/козырек улица
    public $B6_WallOut; // стена улица
    public $B7_WallIn; // стена помещение
    public $B8_2SideIn; // 2 стороны помещение
    public $B9_4SideIn; // 4 стороны помещение

    public $B11_BigStor; // Большая сторона
    public $B12_SmallStor; // Маленькая сторона

    public $B14_PlastikLicevoy;//Пластик лицевой

    public function __construct($RoofVisorOut, $WallOut, $WallIn,
                                $SideIn2, $SideIn4, $BigStor, $SmallStor, $PlastikLicevoy)

    {
        // Заполнение входных данных.
        $this->B5_RoofVisorOut = $RoofVisorOut;
        $this->B6_WallOut = $WallOut;
        $this->B7_WallIn = $WallIn;
        $this->B8_2SideIn = $SideIn2;
        $this->B9_4SideIn = $SideIn4;

        $this->B11_BigStor = $BigStor;
        $this->B12_SmallStor = $SmallStor;
        $this->B14_PlastikLicevoy = $PlastikLicevoy;
    }


    function H6_SmallSize_m()
    {
        //деление и округление
        //вывод

        return round($this->B12_SmallStor/100, 2);
    }

    function E5_Ulica()
    {
        //если B7+B8+B9 =0, то присвоить 1, иначе вернуть 0
        //вывод

        if (($this->B7_WallIn+$this->B8_2SideIn+$this->B9_4SideIn)== 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function E6_Pomechenie()
    {
        //если E5_MaxSize =0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->E5_Ulica() == 0)
        {
            return 1;
        }
        else
        {
            return 0;

        }

    }


    function E8_NalichieOporUlica()
    {
        //если H6 >V19'10',то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->H6_SmallSize_m()>L10_BB34_K_GranicaPOLicUlica_m)
        {
            return 1;
        }
        else
        {
            return 0;

        }

    }

    function E9_NalichieOporPomech()
    {
        //если E8_MaxSize =0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->H6_SmallSize_m()>L10_BB35_K_GranicaPOLicPomesh_m)
        {
            return 1;
        }
        else
        {
            return 0;

        }

    }

    function H5_LargeSize_m()
    {
        //деление и округление
        //вывод

        return round($this->B11_BigStor/100, 2);
    }

    function H7_PlochadFasada_m2()
    {
        //умножение
        //вывод

        return ($this->H5_LargeSize_m()*$this->H6_SmallSize_m());
    }

    function H9_Acril3mm_1m2()
    {

        //вывод

        return L10_J15_AkrilM3S;
    }

    function H10_PererashodAcrila()
    {

        //вывод

        return L10_BB7_K_PererashodAkryl;
    }

    function H11_StoimostRezaAkril1mp_grn()
    {

        //вывод

        return L10_J40_RaskrAkrlLazS;
    }


    function H12_UDProfil1mp_grn()
    {

        //вывод

        return  L10_AR24_ProfileUD_05mm;

    }


    function H13_PererashodUDProfil()
    {

        //вывод

        return  L10_BB58_K_PererashCDUD;

    }

    function H14_Samorez_1shtuk()
    {

        //вывод

        return  L10_AR42_Samorez19ZnBur;

    }
    function H15_RashodSamorezna1mp_shtuk()
    {

        //вывод

        return  L10_BB61_K_KolSamorezVRamaPVHKorobShtMp;

    }

    function H18_PAcrilOpora1storona_grn()
    {
        //умножение
        //вывод

        return (0.12*0.1*$this->H9_Acril3mm_1m2()*$this->H10_PererashodAcrila());
    }

    function H19_Vurezanie1Opori_grn()
    {
        //умножение и сложение
        //вывод

        return (0.12+0.12+0.1+0.1)*$this->H11_StoimostRezaAkril1mp_grn();
    }

    function H20_UDOpora1Storona_grn()
    {
        //умножение
        //вывод

        return ($this->H6_SmallSize_m()*$this->H12_UDProfil1mp_grn()*$this->H13_PererashodUDProfil());
    }


    function H21_SamorezOpora1Storona_shtuk()
    {
        //умножение и округление
        //вывод

        return round($this->H6_SmallSize_m()*$this->H15_RashodSamorezna1mp_shtuk(), 0);
    }

    function H22_SamorezOpora1Storona_grn()
    {
        //умножение
        //вывод

        return ($this->H21_SamorezOpora1Storona_shtuk()*$this->H14_Samorez_1shtuk());
    }

    function H23_Opora1storona_grn()

    {
//сложение
//вывод
        return ($this->H18_PAcrilOpora1storona_grn()+$this->H19_Vurezanie1Opori_grn() +$this->H20_UDOpora1Storona_grn()+$this->H22_SamorezOpora1Storona_grn());
    }


    function H24_opora2Storoni_grn()
    {
        //умножение и сложение
        //вывод

        return ($this->H18_PAcrilOpora1storona_grn()+$this->H19_Vurezanie1Opori_grn()+$this->H14_Samorez_1shtuk())*2;
    }

    function H26_KolichestvoOporKrusha_shtuk()
    {
        //умножение, деление и округление
        //вывод

        return round($this->H7_PlochadFasada_m2()/L10_BB38_K_OpirPloshK_m2, 0)*$this->E8_NalichieOporUlica()*$this->B5_RoofVisorOut;
    }


    function H27_KolichestvoOporStenaUlica_shtuk()
    {
        //умножение, деление и округление
        //вывод

        return round($this->H7_PlochadFasada_m2()/L10_BB39_K_OpirPloshS_m2, 0)*$this->E8_NalichieOporUlica()*$this->B6_WallOut;
    }

    function H28_KolichestvoOporPomechenie1_shtuk()
    {
        //умножение, деление и округление
        //вывод

        return round($this->H7_PlochadFasada_m2()/L10_BB40_K_OpirPloshP_m2, 0)*$this->E9_NalichieOporPomech()*$this->B7_WallIn;
    }

    function H29_KolichestvoOporPomechenie2_shtuk()
    {
        //умножение, деление и округление
        //вывод

        return round($this->H7_PlochadFasada_m2()/L10_BB40_K_OpirPloshP_m2, 0)*$this->E9_NalichieOporPomech()*$this->B8_2SideIn;
    }
    function H30_KolichestvoOporPomechenie4_shtuk()
    {
        //умножение
        //вывод

        return $this->H29_KolichestvoOporPomechenie2_shtuk()*4*$this->E9_NalichieOporPomech()*$this->B9_4SideIn;
    }
    function H32_OporuKrushaItogo_grn()
    {
        //умножение
        //вывод

        return $this->H23_Opora1storona_grn()*$this->H26_KolichestvoOporKrusha_shtuk();
    }
    function H33_OporuKrushaItogo_grn()
    {
        //умножение
        //вывод

        return $this->H23_Opora1storona_grn()*$this->H27_KolichestvoOporStenaUlica_shtuk();
    }

    function H34_OporuStenaPomecheniaItogo_grn()
    {
        //умножение
        //вывод

        return $this->H23_Opora1storona_grn()*$this->H28_KolichestvoOporPomechenie1_shtuk();
    }
    function H35_Oporu2StoroniItogo_grn()
    {
        //умножение
        //вывод

        return $this->H24_opora2Storoni_grn()*$this->H29_KolichestvoOporPomechenie2_shtuk();
    }
    function H36_Oporu4StoroniItogo_grn()
    {
        //умножение
        //вывод

        return $this->H23_Opora1storona_grn()*$this->H30_KolichestvoOporPomechenie4_shtuk()*$this->E9_NalichieOporPomech();
    }
    function H37_MaterialOporItogo_grn()

    {
//сложение
//вывод
        return ($this->H32_OporuKrushaItogo_grn()+$this->H33_OporuKrushaItogo_grn() +$this->H34_OporuStenaPomecheniaItogo_grn()+$this->H35_Oporu2StoroniItogo_grn()+$this->H36_Oporu4StoroniItogo_grn());
    }

    function I9_Akril3mm1m2_kg()
    {

        //вывод

        return L10_L15_AkrilM3P;
    }
    function I12_UDprofil1mp_grn_kg()
    {

        //вывод

        return L10_AS24_ProfileUD_05mm;
    }
    function I18_AkrilOpora1Storona_grn_kg()
    {
        //умножение
        //вывод

        return 0.12*0.1*$this->I9_Akril3mm1m2_kg();
    }
    function I20_UDOpora1Storona_grn_kg()
    {
        //умножение
        //вывод

        return $this->H6_SmallSize_m()*$this->I12_UDprofil1mp_grn_kg();
    }

    function I23_Opora1storona_grn()

    {
//сложение
//вывод
        return ($this->I18_AkrilOpora1Storona_grn_kg()+$this->I20_UDOpora1Storona_grn_kg());
    }
    function I24_opora2Storoni_grn()
    {
        //умножение
        //вывод

        return $this->I18_AkrilOpora1Storona_grn_kg()*2;
    }
    function I32_OporiKrushaItogo_grn()
    {
        //умножение
        //вывод

        return $this->I23_Opora1storona_grn()*$this->H26_KolichestvoOporKrusha_shtuk();
    }
    function I33_OporiUlicaItogo_grn()
    {
        //умножение
        //вывод

        return $this->I23_Opora1storona_grn()*$this->H27_KolichestvoOporStenaUlica_shtuk();
    }
    function I34_OporiStenaPomechenieItogo_grn()
    {
        //умножение
        //вывод

        return $this->I23_Opora1storona_grn()*$this->H28_KolichestvoOporPomechenie1_shtuk();
    }
    function I35_Opori2StoroniItogo_grn()
    {
        //умножение
        //вывод

        return $this->I24_opora2Storoni_grn()*$this->H29_KolichestvoOporPomechenie2_shtuk();
    }
    function I36_Opori4StoroniItogo_grn()
    {
        //умножение
        //вывод

        return $this->I23_Opora1storona_grn()*$this->H30_KolichestvoOporPomechenie4_shtuk()*$this->E9_NalichieOporPomech();
    }
    function I37_MaterialOporItogo_grn()

    {
//сложение
//вывод
        return ($this->I32_OporiKrushaItogo_grn()+$this->I33_OporiUlicaItogo_grn()+$this->I34_OporiStenaPomechenieItogo_grn()+$this->I35_Opori2StoroniItogo_grn()+$this->I36_Opori4StoroniItogo_grn());
    }

    function L5_Virezat1ProfilUD_min()
    {

        //вывод

        return L10_BT21_PriresStalProfCDUDStilk_1sht;
    }
    function L6_Virezat1Samorez_min()
    {

        //вывод

        return L10_BT25_VkruchSamorez_1sht;
    }
    function L8_SobratOpory1Storona_min()
    {
        //умножение и сложение
        //вывод

        return ($this->L5_Virezat1ProfilUD_min()+$this->L6_Virezat1Samorez_min()*$this->H21_SamorezOpora1Storona_shtuk());
    }
    function L10_OporaIzgotovit1Storona_min()
    {
        //умножение и сложение
        //вывод

        return $this->L5_Virezat1ProfilUD_min()+($this->H21_SamorezOpora1Storona_shtuk()+2)*$this->L6_Virezat1Samorez_min();
    }
    function L11_OporaIzgotovit2Storona_min()
    {
        //умножение
        //вывод

        return 2*$this->L6_Virezat1Samorez_min();
    }
    function L13_OporaKrushaItogo_min()
    {
        //умножение
        //вывод

        return $this->H26_KolichestvoOporKrusha_shtuk()*$this->L10_OporaIzgotovit1Storona_min();
    }
    function L14_OporaulicaItogo_min()
    {
        //умножение
        //вывод

        return $this->H27_KolichestvoOporStenaUlica_shtuk()*$this->L10_OporaIzgotovit1Storona_min();
    }
    function L15_OporaStenaPomech1Itogo_min()
    {
        //умножение
        //вывод

        return $this->H28_KolichestvoOporPomechenie1_shtuk()*$this->L10_OporaIzgotovit1Storona_min();
    }

    function L16_OporaStenaPomech2Itogo_min()
    {
        //умножение
        //вывод

        return $this->H29_KolichestvoOporPomechenie2_shtuk()*$this->L11_OporaIzgotovit2Storona_min();
    }
    function L17_OporaStenaPomech4Itogo_min()
    {
        //умножение
        //вывод

        return $this->H30_KolichestvoOporPomechenie4_shtuk()*$this->L10_OporaIzgotovit1Storona_min();
    }
    function L18_OporiItogo_min()
    {
        //умножение, деление и округление
        //вывод

        return round($this->L13_OporaKrushaItogo_min()+$this->L14_OporaulicaItogo_min()+$this->L15_OporaStenaPomech1Itogo_min()+$this->L16_OporaStenaPomech2Itogo_min()+$this->L17_OporaStenaPomech4Itogo_min(), 0);
    }
    function O6_StoimostMaterialov_grn()
    {
        //умножение
        //вывод

        return round($this->H37_MaterialOporItogo_grn(), 0);
    }

    function O10_TrydoemkostRobotu_min()
    {

        //вывод

        return $this->L18_OporiItogo_min();
    }
    function O11_StoimostRabotu_grn()
    {
        //умножение и округление
        //вывод

        return round($this->O10_TrydoemkostRobotu_min()*L10_C67_K1, 0);
    }
    function O22_Ves_kg()
    {
        //умножение и округление
        //вывод

        return round($this->I37_MaterialOporItogo_grn(), 1);
    }



    function O24_Itogo_grn()
    {
        //сложение
        //вывод

        return $this->O6_StoimostMaterialov_grn()+$this->O11_StoimostRabotu_grn();
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


    function V5_MaxSizeBolee300cm()
    {
        //если S12 >300,  то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->S12_BigStor >300)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }


    function V6_MinSizeBolee44sm()
    {
        //если S13 >44,  то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->S13_SmallStor >44)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V7_SmallSize_m()
    {
        //умножение
        //вывод

        return ($this->V5_MaxSizeBolee300cm()*$this->V6_MinSizeBolee44sm());
    }

    function V9_1Storona()
    {
        //если S8=0 и S9=0, то присвоить 1, иначе вернуть 0
        //вывод


        if ($this->S8_2SideIn==0 and $this->S9_4SideIn==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V10_2Storoni()
    {

        //вывод

        return ($this->S8_2SideIn);
    }
    function V11_4Storoni()
    {

        //вывод

        return ($this->S9_4SideIn);
    }

    function V13_Ulica()
    {
        //сложение
        //вывод

        if ($this->S7_WallIn+$this->S8_2SideIn+$this->S9_4SideIn==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V14_OporiLicevieEst()
    {
        //если S20>0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->S20_StoimostOporLicevix_grn>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V15_OporiUlica()
    {
        //умножение
        //вывод

        return ($this->V13_Ulica()*$this->V14_OporiLicevieEst());
    }
    function V17_DlinnaiChastRamu()
    {
        //если V7 =1,V15=1, S5=1, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->V7_SmallSize_m() == 1 or $this->V15_OporiUlica() == 1 or $this->S5_RoofVisorOut == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V18_KorotkaChastRami()
    {

        //вывод

        return ($this->S5_RoofVisorOut);
    }

    function V20_OporLicevixNet()
    {
        //V14=0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->V14_OporiLicevieEst()==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V21_PeremickyEst()
    {
        //умножение
        //вывод

        return ($this->S5_RoofVisorOut*$this->V20_OporLicevixNet());
    }



    function Y5_LargeSize_m()
    {
        //деление и округление
        //вывод

        return round($this->S12_BigStor/100, 2);
    }

    function Y6_SmallSize_m()
    {
        //деление и округление
        //вывод

        return round($this->S13_SmallStor/100, 2);
    }

    function Y7_GorizontalSize_m()
    {
        //S11=1, то присвоить Y5, иначе вернуть Y6
        //вывод

        if ($this->S11_Orientacia==1)
        {
            return $this->Y5_LargeSize_m();
        }
        else
        {
            return $this->Y6_SmallSize_m();
        }
    }

    function Y8_VerticalSize_m()
    {
        //S11=2, то присвоить Y5, иначе вернуть Y6
        //вывод

        if ($this->S11_Orientacia==2)
        {
            return $this->Y5_LargeSize_m();
        }
        else
        {
            return $this->Y6_SmallSize_m();
        }
    }
    function Y9_PlochadFasada_m2()
    {
        //сложение
        //вывод

        return ($this->Y5_LargeSize_m()*$this->Y6_SmallSize_m());
    }

    function Y10_PerimetrViveski_m()
    {
        //сложение
        //вывод

        return ($this->Y5_LargeSize_m()+$this->Y5_LargeSize_m()+$this->Y6_SmallSize_m()+$this->Y6_SmallSize_m());
    }
    function Y12_UDProfil1mp_grn()
    {

        //вывод

        return L10_AR24_ProfileUD_05mm;
    }
    function Y13_Pererasxod1Profila()
    {

        //вывод

        return L10_BB58_K_PererashCDUD;
    }
    function Y14_Samorez1shtuk_grn()
    {

        //вывод

        return L10_AR42_Samorez19ZnBur;
    }
    function Y15_RasxodSamorezovNa1mp_shtuk()
    {

        //вывод

        return L10_BB61_K_KolSamorezVRamaPVHKorobShtMp;
    }
    function Y18_KolichectvoPeremichek_shtuk()
    {
        //отнимание и округление
        //вывод

        return round($this->Y5_LargeSize_m()-1, 0);
    }
    function Y19_KolichestvoUDElementov_shtuk()
    {
        //умножение и сложение
        //вывод

        return (2*$this->V17_DlinnaiChastRamu()+2*$this->V18_KorotkaChastRami()+$this->Y18_KolichectvoPeremichek_shtuk()*$this->V21_PeremickyEst());
    }
    function Y20_DlinaUDKarkasaItogo_mp()
    {
        //умножение и сложение
        //вывод

        return ($this->Y5_LargeSize_m()*2*$this->V17_DlinnaiChastRamu()+$this->Y6_SmallSize_m()*2*$this->V18_KorotkaChastRami()+$this->Y6_SmallSize_m()*$this->Y18_KolichectvoPeremichek_shtuk()*$this->V21_PeremickyEst());
    }
    function Y21_StoimostUDProfila_grn()
    {
        //умножение
        //вывод

        return ($this->Y20_DlinaUDKarkasaItogo_mp()*$this->Y13_Pererasxod1Profila()*$this->Y12_UDProfil1mp_grn());
    }
    function Y22_KolvoSamorezov_grn()
    {
        //умножение и округление
        //вывод

        return round($this->Y20_DlinaUDKarkasaItogo_mp()*$this->Y15_RasxodSamorezovNa1mp_shtuk(), 0);
    }
    function Y23_StoimostSamorezov_grn()
    {
        //умножение
        //вывод

        return ($this->Y22_KolvoSamorezov_grn()*$this->Y14_Samorez1shtuk_grn());
    }
    function Y24_RamaMaterialu1Storona_grn()
    {
        //сложение
        //вывод

        return ($this->Y21_StoimostUDProfila_grn()+$this->Y23_StoimostSamorezov_grn());
    }
    function Y26_KolichestvoPeremichek_shtuk()
    {
        //деление и округление
        //вывод

        return round($this->Y5_LargeSize_m()/0.24, 0);
    }
    function Y27_DlinnaPeremichek_mp()
    {
        //умножение
        //вывод

        return ($this->Y6_SmallSize_m()*$this->Y26_KolichestvoPeremichek_shtuk());
    }
    function Y28_KolichestvoUDElementov_shtuk()
    {
        //сложение
        //вывод

        return ($this->Y26_KolichestvoPeremichek_shtuk()+1);
    }
    function Y29_DlinaUDKarkasa_mp()
    {
        //сложение
        //вывод

        return ($this->Y5_LargeSize_m()+$this->Y27_DlinnaPeremichek_mp());
    }
    function Y30_StoimostUDProfila()
    {
        //умножение
        //вывод

        return ($this->Y12_UDProfil1mp_grn()*$this->Y13_Pererasxod1Profila()*$this->Y29_DlinaUDKarkasa_mp());
    }
    function Y31_KolvoSamorezovItogo_shtuk()
    {
        //умножение и сложение
        //вывод

        return ($this->Y5_LargeSize_m()*$this->Y15_RasxodSamorezovNa1mp_shtuk()+$this->Y26_KolichestvoPeremichek_shtuk()*2);
    }
    function Y32_StoimostSamorezov_grn()
    {
        //умножение
        //вывод

        return ($this->Y31_KolvoSamorezovItogo_shtuk()*$this->Y14_Samorez1shtuk_grn());
    }
    function Y33_RamaMateriali2Storoni_grn()
    {
        //сложение
        //вывод
        return ($this->Y30_StoimostUDProfila()+$this->Y32_StoimostSamorezov_grn());
    }
    function Y35_DlinaUDKarkasa_mp()
    {
        //умножение
        //вывод
        return ($this->Y7_GorizontalSize_m()*4);
    }
    function Y36_DlinaUDKarkasa()
    {
        //умножение
        //вывод
        return ($this->Y12_UDProfil1mp_grn()*$this->Y13_Pererasxod1Profila()*$this->Y35_DlinaUDKarkasa_mp());
    }
    function Y37_KolvoSamorezovItogo_Shtuk()
    {
        //умножение
        //вывод
        return ($this->Y35_DlinaUDKarkasa_mp()*$this->Y15_RasxodSamorezovNa1mp_shtuk());
    }
    function Y38_StoimostSamorezov_grn()
    {
        //умножение
        //вывод
        return ($this->Y14_Samorez1shtuk_grn()*$this->Y37_KolvoSamorezovItogo_Shtuk());
    }
    function Y39_RamaMateriali4Storoni_grn()
    {
        //сложение
        //вывод
        return ($this->Y36_DlinaUDKarkasa()+$this->Y38_StoimostSamorezov_grn());
    }
    function  Y41_RamaMateriakItogo_grn()
    {
        //умножение и сложение
        //вывод

        return ($this->Y24_RamaMaterialu1Storona_grn()*$this->V9_1Storona()+$this->Y33_RamaMateriali2Storoni_grn()*$this->V10_2Storoni()+$this->Y39_RamaMateriali4Storoni_grn()*$this->V11_4Storoni());
    }

    function Z12_UDProfil1mp_grn_kg()
    {

        //вывод

        return L10_AS24_ProfileUD_05mm;
    }
    function Z20_DlinaUDProfila_grn_kg()
    {
        //умножение
        //вывод

        return $this->Y20_DlinaUDKarkasaItogo_mp()*$this->Z12_UDProfil1mp_grn_kg();
    }
    function Z24_RamaMateriali1Storona_mp_kg()
    {

        //вывод

        return $this->Z20_DlinaUDProfila_grn_kg();
    }
    function Z29_DlinaUDKarkasa_grn_kg()
    {
        //умножение
        //вывод

        return $this->Y29_DlinaUDKarkasa_mp()*$this->Z12_UDProfil1mp_grn_kg();
    }
    function Z33_RamaMateriali2Storona_grn_kg()
    {

        //вывод

        return $this->Z29_DlinaUDKarkasa_grn_kg();
    }
    function Z35_DlinaUDKarkasa_mp_kg()
    {
        //умножение
        //вывод

        return $this->Y35_DlinaUDKarkasa_mp()*$this->Z12_UDProfil1mp_grn_kg();
    }
    function Z39_RamaMateriali2Storona_grn_kg()
    {

        //вывод

        return $this->Z35_DlinaUDKarkasa_mp_kg();
    }
    function  Z41_RamaMateriakItogo_grn()
    {
        //умножение и сложение
        //вывод

        return ($this->Z24_RamaMateriali1Storona_mp_kg()*$this->V9_1Storona()+$this->Z33_RamaMateriali2Storona_grn_kg()*$this->V10_2Storoni()+$this->Z39_RamaMateriali2Storona_grn_kg()*$this->V11_4Storoni());
    }



    function AC5_Virezat1ProfilUD_min()
    {

        //вывод

        return L10_BT21_PriresStalProfCDUDStilk_1sht;
    }
    function AC6_Vkrytit1Samorez_min()
    {

        //вывод

        return L10_BT26_VkruchSeriiSamorezov_1sht;
    }
    function AC8_VirezatProfilz1Storon_min()
    {
        //умножение
        //вывод

        return ($this->AC5_Virezat1ProfilUD_min()*$this->Y19_KolichestvoUDElementov_shtuk());
    }
    function AC9_VkrytitSamorezi1Stor_min()
    {
        //умножение
        //вывод

        return ($this->AC6_Vkrytit1Samorez_min()*$this->Y22_KolvoSamorezov_grn());
    }
    function AC10_Rabota1Storona_min()
    {
        //сложение
        //вывод

        return ($this->AC8_VirezatProfilz1Storon_min()+$this->AC9_VkrytitSamorezi1Stor_min());
    }
    function AC12_VirezatProfilz2Storon_min()
    {
        //умножение
        //вывод

        return ($this->AC5_Virezat1ProfilUD_min()*$this->Y28_KolichestvoUDElementov_shtuk());
    }
    function AC13_VkrytitSamorezi2Stor_min()
    {
        //умножение
        //вывод

        return ($this->AC6_Vkrytit1Samorez_min()*$this->Y31_KolvoSamorezovItogo_shtuk());
    }
    function AC14_Rabota2Storona_min()
    {
        //сложение
        //вывод

        return ($this->AC12_VirezatProfilz2Storon_min()+$this->AC13_VkrytitSamorezi2Stor_min());
    }
    function AC16_VkrytitSamorezi4Stor_min()
    {
        //умножение
        //вывод

        return ($this->AC5_Virezat1ProfilUD_min()*4);
    }
    function AC17_VkrytitSamorezi4Stor_min()
    {
        //умножение
        //вывод

        return ($this->AC6_Vkrytit1Samorez_min()*$this->Y37_KolvoSamorezovItogo_Shtuk());
    }
    function AC18_Rabota4Storona_min()
    {
        //сложение
        //вывод

        return ($this->AC16_VkrytitSamorezi4Stor_min()+$this->AC17_VkrytitSamorezi4Stor_min());
    }
    function AC20_RabotaItogo_min()
    {
        //умножение и сложение
        //вывод

        return ($this->AC10_Rabota1Storona_min()*$this->V9_1Storona()+$this->AC14_Rabota2Storona_min()*$this->V10_2Storoni()+$this->AC18_Rabota4Storona_min()*$this->V11_4Storoni());
    }
    function AF6_StoimostMaterialov_grn()
    {
        //округление
        //вывод

        return round($this->Y41_RamaMateriakItogo_grn(), 0);
    }
    function AF10_TrydoemkostRama_min()
    {
        //округление
        //вывод

        return round($this->AC20_RabotaItogo_min(), 0);
    }
    function AF11_StoimostRaboti_grn()
    {
        //умножение и округление
        //вывод

        return round($this->AF10_TrydoemkostRama_min()*L10_C67_K1, 0);
    }
    function AF22_Ves_kg()
    {
        //округление
        //вывод

        return round($this->Z41_RamaMateriakItogo_grn(), 1);
    }
    function AF24_Itogo_grn()
    {
        //сложение
        //вывод

        return ($this->AF6_StoimostMaterialov_grn()+$this->AF11_StoimostRaboti_grn());
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