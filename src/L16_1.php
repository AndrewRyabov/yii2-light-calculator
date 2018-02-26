<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 16.02.2018
 * Time: 16:01
 */
class L16
{
    // Входные параметры:
    public $B5_RoofVisorOut; // крыша/козырек улица
    public $B6_WallOut; // стена улица
    public $B7_WallIn; // стена помещение
    public $B8_2SideIn; // 2 стороны помещение
    public $B9_4SideIn; // 4 стороны помещение

    public $B11_BigStor; // Большая сторона
    public $B12_SmallStor; // Маленькая сторона

    public $B14_Fasad;//фасад

    public function __construct($RoofVisorOut, $WallOut, $WallIn,
                                $SideIn2, $SideIn4, $BigStor, $SmallStor, $Fasad)

    {
        // Заполнение входных данных.
        $this->B5_RoofVisorOut = $RoofVisorOut;
        $this->B6_WallOut = $WallOut;
        $this->B7_WallIn = $WallIn;
        $this->B8_2SideIn = $SideIn2;
        $this->B9_4SideIn = $SideIn4;

        $this->B11_BigStor = $BigStor;
        $this->B12_SmallStor = $SmallStor;
        $this->B14_Fasad = $Fasad;
    }

    // C-light _ фасад пластик _ 1


    function E5_MaxSizeNeBol400sm()
    {
        //если большая сторона >l10_bb28*100, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->B11_BigStor >L10_BB28_K_PolicarbPerehTolsh46UlicaB_m*100)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E6_MinSizeBol80sm()
    {
        //если b12 >l10_bb29*100, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->B12_SmallStor >L10_BB29_K_PolicarbPerehTolsh46UlicaM_m*100)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E7_PolikarbonatUlica6mm()
    {
        //если e5+e6 >0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->E5_MaxSizeNeBol400sm()+$this->E6_MinSizeBol80sm()>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E8_PolikarbonatUlica4mm()
    {
        //если e7 =0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->E7_PolikarbonatUlica6mm() == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E9_MinRazmerBolee120sm()
    {
        //если b12 >l10_bb30*100, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->B12_SmallStor>L10_BB30_K_PolicarbPerehTolsh46Pomesh_m*100)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E10_MinRazmerNeBolee120sm()
    {
        //если e9 =0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->E9_MinRazmerBolee120sm() == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E12_MinRazmerBolee61sm()
    {
        //если b12() >L10_bb24*100, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->B12_SmallStor >L10_BB24_K_AkrylPerehodTolsh23Ulica_m*100)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E13_MinRazmerNeBolee61sm()
    {
        //если e12=0, то присвоить 1, иначе вернуть 0
        //вывод
        return ($this->E12_MinRazmerBolee61sm() == 0) ? 1 : 0;
    }
    function E14_MinRazmerBolee90sm()
    {
        //если b12() >L10_bb25*100, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->B12_SmallStor >L10_BB25_K_AkrylPerehodTolsh23Pomesh_m*100)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E15_MinRazmerNeBolee90sm()
    {
        //если e14=0, то присвоить 1, иначе вернуть 0
        //вывод
        return ($this->E14_MinRazmerBolee90sm() == 0) ? 1 : 0;
    }
    function E17_Ulica()
    {
        //если b7+b8+b9=0, то присвоить 1, иначе вернуть 0
        //вывод
        return ($this->B7_WallIn+$this->B8_2SideIn+$this->B9_4SideIn)==0 ? 1 : 0;
    }
    function E18_Pomechenie()
    {
        //если e17=0, то присвоить 1, иначе вернуть 0
        //вывод
        return ($this->E17_Ulica() == 0) ? 1 : 0;
    }
    function E20_Storona1()
    {
        //если b5=1 или b6=1 или b7=1, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->B5_RoofVisorOut==1 or $this->B6_WallOut==1 or $this->B7_WallIn==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E21_Storoni2()
    {
       //вывод
        return $this->B8_2SideIn;
    }
    function E22_Storoni4()
    {
        //вывод
        return $this->B9_4SideIn;
    }
    function E24_Pomechenie()
    {
        //если B14=1, то присвоить 1, иначе вернуть 0
        //вывод
        return ($this->B14_Fasad == 1) ? 1 : 0;
    }
    function E25_Akril()
    {
        //если E24=0, то присвоить 1, иначе вернуть 0
        //вывод
        return ($this->E24_Pomechenie() == 0) ? 1 : 0;
    }
    function H5_BolRazmer_m()
    {
        //округлить b11/100, 2
        //вывод
        return round($this->B11_BigStor /100,2);
    }
    function H6_MenchRazmer_m()
    {
        //округлить b11/100, 2
        //вывод
        return round($this->B12_SmallStor /100,2);
    }
    function H7_PerimetrFasada_mp()
    {
        //сложение
        //вывод
        return $this->H5_BolRazmer_m()+$this->H6_MenchRazmer_m()+$this->H5_BolRazmer_m()+$this->H6_MenchRazmer_m();
    }
    function H8_PlochadFasada_m2()
    {
        //умножение
        //вывод
        return $this->H5_BolRazmer_m()*$this->H6_MenchRazmer_m();
    }
    function H9_MaterialFasadaPlusPerarasxoda_m2()
    {
        //умножение
        //вывод
        return $this->H8_PlochadFasada_m2()*L10_BB8_K_PererashodPolicarb;
    }
    function H10_Stoimos1mpKlea_grn()
    {
        //вывод
        return L10_K117_CosmofenPlusPVH_200mlSmp;
    }
    function H12_PolikarbonatUlica6mm_grn()
    {
        //умножение
        //вывод
        return $this->E7_PolikarbonatUlica6mm()*$this->E17_Ulica()*$this->H9_MaterialFasadaPlusPerarasxoda_m2()*L10_J7_Plikarb6S;
    }
    function H13_PolikarbonatUlica4mm_grn()
    {
        //умножение
        //вывод
        return $this->E8_PolikarbonatUlica4mm()*$this->E17_Ulica()*$this->H9_MaterialFasadaPlusPerarasxoda_m2()*L10_J6_Plikarb4S;
    }
    function H14_PolikarbonatPomechenie6mm_grn()
    {
        //умножение
        //вывод
        return $this->E9_MinRazmerBolee120sm()*$this->E17_Ulica()*$this->H9_MaterialFasadaPlusPerarasxoda_m2()*L10_J7_Plikarb6S;
    }
    function H15_PolikarbonatPomechenie4mm_grn()
    {
        //умножение
        //вывод
        return $this->E10_MinRazmerNeBolee120sm()*$this->E18_Pomechenie()*$this->H9_MaterialFasadaPlusPerarasxoda_m2()*L10_J6_Plikarb4S;
    }
    function H16_PolikarbonatFasadPredvar_grn()
    {
        //сложение и округление
        //вывод
        return round($this->H12_PolikarbonatUlica6mm_grn()+$this->H13_PolikarbonatUlica4mm_grn()+$this->H14_PolikarbonatPomechenie6mm_grn()+$this->H15_PolikarbonatPomechenie4mm_grn(),0);
    }
    function H17_PoliKarbonatFasadItogo_grn()
    {
        //умножение
        //вывод
        return $this->H16_PolikarbonatFasadPredvar_grn()*$this->E24_Pomechenie();
    }

    function H19_AkrilUlica3mm_grn()
    {
        //умножение
        //вывод
        return $this->E12_MinRazmerBolee61sm()*$this->E17_Ulica()*$this->H9_MaterialFasadaPlusPerarasxoda_m2()*L10_J15_AkrilM3S;
    }
    function H20_AkrilUlica2mm_grn()
    {
        //умножение
        //вывод
        return $this->E13_MinRazmerNeBolee61sm()*$this->E17_Ulica()*$this->H9_MaterialFasadaPlusPerarasxoda_m2()*L10_J14_AkrilM2S;
    }
    function H21_AkrilPomechenie3mm_grn()
    {
        //умножение
        //вывод
        return $this->E14_MinRazmerBolee90sm()*$this->E18_Pomechenie()*$this->H9_MaterialFasadaPlusPerarasxoda_m2()*L10_J15_AkrilM3S;
    }
    function H22_AkrilPomechenie2mm_grn()
    {
        //умножение
        //вывод
        return $this->E15_MinRazmerNeBolee90sm()*$this->E17_Ulica()*$this->H9_MaterialFasadaPlusPerarasxoda_m2()*L10_J14_AkrilM2S;
    }
    function H23_AkrilFasadPredvar_grn()
    {
        //сложение и округление
        //вывод
        return round($this->H19_AkrilUlica3mm_grn()+$this->H20_AkrilUlica2mm_grn()+$this->H21_AkrilPomechenie3mm_grn()+$this->H22_AkrilPomechenie2mm_grn(),0);
    }
    function H24_AkrilFasadItogo_grn()
    {
        //умножение
        //вывод
        return $this->H23_AkrilFasadPredvar_grn()*$this->E25_Akril();
    }
    function H26_Plastik1Fasad_grn()
    {
        //сложение
        //вывод
        return $this->H17_PoliKarbonatFasadItogo_grn()+$this->H24_AkrilFasadItogo_grn();
    }
    function H27_PlastikVseFasadi_grn()
    {
        //сложение
        //вывод
        return $this->H26_Plastik1Fasad_grn()*$this->E20_Storona1()+$this->H26_Plastik1Fasad_grn()*2*$this->E21_Storoni2()+$this->H26_Plastik1Fasad_grn()*4*$this->E22_Storoni4();
    }
    function H29_Klei1Fasad_grn()
    {
        //умножение
        //вывод
        return $this->H7_PerimetrFasada_mp()*$this->H10_Stoimos1mpKlea_grn();
    }
    function H30_KleiVseFasadi_grn()
    {
        //сложение и округление
        //вывод
        return round($this->H29_Klei1Fasad_grn()*$this->E20_Storona1()+$this->H29_Klei1Fasad_grn()*2*$this->E21_Storoni2()+$this->H29_Klei1Fasad_grn()*4*$this->E22_Storoni4(),0);
    }

    function I12_PolikarbonatUlica6mm_kg()
    {
        //умножение
        //вывод
        return $this->E7_PolikarbonatUlica6mm()*$this->E17_Ulica()*$this->H8_PlochadFasada_m2()*L10_L7_Plikarb6P;
    }
    function I13_PolikarbonatUlica4mm_kg()
    {
        //умножение
        //вывод
        return $this->E8_PolikarbonatUlica4mm()*$this->E17_Ulica()*$this->H8_PlochadFasada_m2()*L10_L6_Plikarb4P;
    }
    function I14_PolikarbonatPomechenie6mm_kg()
    {
        //умножение
        //вывод
        return $this->E9_MinRazmerBolee120sm()*$this->E18_Pomechenie()*$this->H8_PlochadFasada_m2()*L10_L7_Plikarb6P;
    }
    function I15_PolikarbonatPomechenie4mm_kg()
    {
        //умножение
        //вывод
        return $this->E10_MinRazmerNeBolee120sm()*$this->E18_Pomechenie()*$this->H8_PlochadFasada_m2()*L10_JL6;
    }
    function I16_PolikarbonatFasadPredvar_kg()
    {
        //сложение и округление
        //вывод
        return round($this->I12_PolikarbonatUlica6mm_kg()+$this->I13_PolikarbonatUlica4mm_kg()+$this->I14_PolikarbonatPomechenie6mm_kg()+$this->I15_PolikarbonatPomechenie4mm_kg(),1);
    }
    function I17_PoliKarbonatFasadItogo_kg()
    {
        //умножение
        //вывод
        return $this->I16_PolikarbonatFasadPredvar_kg()*$this->E24_Pomechenie();
    }

    function I19_AkrilUlica3mm_grn()
    {
        //умножение
        //вывод
        return $this->E12_MinRazmerBolee61sm()*$this->E17_Ulica()*$this->H8_PlochadFasada_m2()*L10_L15_AkrilM3P;
    }
    function I20_AkrilUlica2mm_grn()
    {
        //умножение
        //вывод
        return $this->E13_MinRazmerNeBolee61sm()*$this->E17_Ulica()*$this->H8_PlochadFasada_m2()*L10_L14_AkrilM2P;
    }
    function I21_AkrilPomechenie3mm_grn()
    {
        //умножение
        //вывод
        return $this->E14_MinRazmerBolee90sm()*$this->E18_Pomechenie()*$this->H8_PlochadFasada_m2()*L10_L15_AkrilM3P;
    }
    function I22_AkrilPomechenie2mm_grn()
    {
        //умножение
        //вывод
        return $this->E15_MinRazmerNeBolee90sm()*$this->E18_Pomechenie()*$this->H8_PlochadFasada_m2()*L10_L14_AkrilM2P;
    }
    function I23_AkrilFasadPredvar_grn()
    {
        //сложение и округление
        //вывод
        return round($this->I19_AkrilUlica3mm_grn()+$this->I20_AkrilUlica2mm_grn()+$this->I21_AkrilPomechenie3mm_grn()+$this->I22_AkrilPomechenie2mm_grn(),1);
    }
    function I24_AkrilFasadItogo_grn()
    {
        //умножение
        //вывод
        return $this->I23_AkrilFasadPredvar_grn()*$this->E25_Akril();
    }
    function I26_Plastik1Fasad_kg()
    {
        //сложение
        //вывод
        return $this->I17_PoliKarbonatFasadItogo_kg()+$this->I24_AkrilFasadItogo_grn();
    }
    function I27_PlastikVseFasadi_kg()
    {
        //сложение
        //вывод
        return $this->I26_Plastik1Fasad_KG()*$this->E20_Storona1()+$this->I26_Plastik1Fasad_KG()*2*$this->E21_Storoni2()+$this->I26_Plastik1Fasad_KG()*4*$this->E22_Storoni4();
    }
    function L5_Virezat1AkrilFasad_min()
    {
        //умножение
        //вывод
        return $this->H7_PerimetrFasada_mp()*L10_BT6_RaskrAkrylPryamougl_1mp;
    }
    function L6_Virezat1PolikFasad_min()
    {
        //умножение
        //вывод
        return $this->H7_PerimetrFasada_mp()*L10_BT7_RaskrPVHPolykPryamougl_1mp;
    }
    function L7_Virezat1Fasad_min()
    {
        //умножение, сложение и округление
        //вывод
        return round($this->L5_Virezat1AkrilFasad_min()*$this->E25_Akril()+$this->L6_Virezat1PolikFasad_min()*$this->E24_Pomechenie(),0);
    }
    function L9_Vkleit1mp_grn()
    {
    //вывод
    return L10_BT14_SborkaKleyShva_1mp;
    }
    function L10_Vkleit1Fasad_min()
    {
        //умножение и округление
        //вывод
        return round($this->L9_Vkleit1mp_grn()*$this->H7_PerimetrFasada_mp(),0);
    }
    function L12_ObkatatPvxminDelitNa1mp()
    {
        //вывод
        return L10_BT16_ObkatkaKleyShvaPVH_1mp;
    }
    function L13_ObkatatAkrilminDelitNa1mp()
    {
        //вывод
        return L10_BT15_ObkatkaSkleyShavaAkryl_1mp;
    }
    function L14_Obkatat1mp()
    {
        //умножение и сложение
        //вывод
        return $this->L12_ObkatatPvxminDelitNa1mp()*$this->E24_Pomechenie()+$this->L13_ObkatatAkrilminDelitNa1mp()*$this->E25_Akril();
    }
    function L15_Obkatat1Fasad_min()
    {
        //умножение и округление
        //вывод
        return round($this->L14_Obkatat1mp()*$this->H7_PerimetrFasada_mp(),0);
    }
    function L17_Obrabotka1Fasad_min()
    {
        //сложение
        //вывод
        return $this->L7_Virezat1Fasad_min()+$this->L10_Vkleit1Fasad_min()+$this->L15_Obkatat1Fasad_min();
    }
    function L18_ObrabotkaVseFasadi_min()
    {
        //умножение, сложение и округление
        //вывод
        return round($this->L17_Obrabotka1Fasad_min()*$this->E20_Storona1()+$this->L17_Obrabotka1Fasad_min()*2*$this->E21_Storoni2()+$this->L17_Obrabotka1Fasad_min()*4*$this->E22_Storoni4(),0);
    }
    function O6_StoimostMaterialov_grn()
    {
        //сложение и округление
        //вывод
        return round($this->H27_PlastikVseFasadi_grn()+$this->H30_KleiVseFasadi_grn(),0);
    }
    function O7_FasadPolikarbonat()
    {
        //вывод
        return $this->E24_Pomechenie();
    }
    function O8_FasadAkril()
    {
        //вывод
        return $this->E25_Akril();
    }
    function O10_FasadPolikarbonat()
    {//округление
        //вывод
        return round($this->L18_ObrabotkaVseFasadi_min(),0);
    }
    function O11_StoimostRaboti_grn()
    {//округление и умножение
        //вывод
        return round($this->O10_FasadPolikarbonat()*L10_C67_K1,0);
    }
    function O22_Ves_kg()
    {
        //вывод
        return $this->I27_PlastikVseFasadi_kg();
    }
    function O24_Itogo_grn()
    {
        //сложение
        //вывод
        return $this->O6_StoimostMaterialov_grn()+$this->O11_StoimostRaboti_grn();
    }
}