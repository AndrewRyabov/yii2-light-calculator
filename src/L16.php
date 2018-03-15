<?php namespace almaz44\light\calculator;
include_once __DIR__ . '/L10.php';

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 27.06.2017
 * Time: 16:34
 */
class L16_1
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

        $this->B11_BigStor = $MaxSide_cm;
        $this->B12_SmallStor = $MinSide_cm;

        // Запрос исходных данных
        $this->L09 = new L09($SCLight, $VarIspoln,
                             $Orientation, $MaxSide_cm, $MinSide_cm,
                             $FrontImg, $ColorSide, $ColorBack, $Ugol,
                             $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);

        $this->B14_Fasad = $this->L09->J40_PlasticLic;
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
        return $this->E10_MinRazmerNeBolee120sm() *
               $this->E18_Pomechenie() *
               $this->H8_PlochadFasada_m2() *
               L10_L6_Plikarb4P;
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

class L16_2
{
    // Входные параметры:
    public $S5_RoofVisorOut; // крыша/козырек улица
    public $S6_WallOut; // стена улица
    public $S7_WallIn; // стена помещение
    public $S8_2SideIn; // 2 стороны помещение
    public $S9_4SideIn; // 4 стороны помещение

    public $S11_Orientation; // ориентация
    public $S12_MaxSide_cm; // большая сторона, см
    public $S13_MinSide_cm; // меньшая сторона, см

    public $S15_PlastLic; // пластик лицевой
    public $S16_IstocknikSveta; //источник света
    public $S19_LeviiVerxUgol;//левый верх угол (0/6/12) , см
    public $S20_PraviiVerxUgol;//правый верх угол (0/6/12) , см
    public $S21_LeviiNizhniiUgol;//правый ниж угол (0/6/12) , см
    public $S22_PraviiNizhniiUgol;//левый ниж угол  (0/6/12), см

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

        $this->S11_Orientation = $Orientation;
        $this->S12_MaxSide_cm = $MaxSide_cm;
        $this->S13_MinSide_cm = $MinSide_cm;

        $this->S15_PlastLic = $PlastLic;
        $this->S16_IstocknikSveta=$IstochnikSveta;
        $this->S19_LeviiVerxUgol=$Ugol[0];
        $this->S20_PraviiVerxUgol=$Ugol[1];
        $this->S21_LeviiNizhniiUgol=$Ugol[2];
        $this->S22_PraviiNizhniiUgol=$Ugol[3];
    }

    // C light - пленка борт/тыл

    function V5_FasadPolik()
    {
        //фасад - полик
        //если S15_PlastLic = 1, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->S15_PlastLic == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function V6_FasadAkril()
    { 	//фасад - акрил
        //если S15_PlastLic = 2, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->S15_PlastLic == 2)
        {
            return 1;
        }
        else
        {
            return 0;
        }   }
    function V8_Ulica()
    {
        //улица
        //если условие = 0, то вывести 1
        //иначе - вывести 0
        //вывод
        if (($this->S7_WallIn + $this->S8_2SideIn + $this->S9_4SideIn) == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }   }
    function V9_Pomesh()
    {
        //помещение
        //если $this->V8_Ulica() = 0, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->V8_Ulica() == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function V11_1Stor()
    {
        //1 сторона
        //если условие true, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->S5_RoofVisorOut == 1 or $this->S6_WallOut == 1 or $this->S7_WallIn == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function V12_2Stor()
    { 	//2 стороны
        //значение
        //вывод
        return $this->S8_2SideIn;
    }
    function V13_4Stor()
    { 	//4 стороны
        //значение
        //вывод
        return $this->S9_4SideIn;
    }
    function V14_Ne2Storoni()
    {//если v12=1, то присвоить 0, иначе присвоить 1
        return ($this->V12_2Stor() == 1) ? 0 : 1;
    }
    function V15_Ne4Storoni()
    {//если s9=1, то присвоить 0, иначе присвоить 0
        return ($this->S9_4SideIn == 1) ? 0 : 1;
    }
    function V18_KolichestvoRystikov_sht()
    {//сложение и умножение
        return (1+1*$this->V5_FasadPolik())+(1+$this->V5_FasadPolik())*$this->V12_2Stor()+$this->V9_Pomesh()*$this->V14_Ne2Storoni();
    }
    function V19_KolichestvoOporDvpDlaTila_sht()
    {//умножение
        return $this->V14_Ne2Storoni()*$this->V9_Pomesh();
    }
    function V21_IstSvetaLampi()
    {//если s16=3, то присвоить 1, иначе присвоить 0
        return ($this->S16_IstocknikSveta == 3) ? 1 : 0;
    }
    function V22_IstSvetaDiodi()
    {//если v21=1, то присвоить 0, иначе присвоить 0
        return ($this->V21_IstSvetaLampi() == 1) ? 0 : 1;
    }
    function V26_BolchiiRazmerBolee400sm()
    {//если s12>L10_BK11*100, то присвоить 1, иначе присвоить 0
        return ($this->S12_MaxSide_cm > L10_BK11_GranichDlnSvyazUvelVisBort_m*100) ? 1 : 0;
    }
    function V27_MenchiiBolee80sm()
    {//если s13>L10_BK10*100, то присвоить 1, иначе присвоить 0
        return ($this->S13_MinSide_cm > L10_BK10_GranichVicSvyazUzelVisBort_m*100) ? 1 : 0;
    }
    function V28_FlagYvelichBortaDla1Stor()
    {//умножение
        return $this->V26_BolchiiRazmerBolee400sm()*$this->V27_MenchiiBolee80sm()*$this->V11_1Stor();
    }

    function Y5_BolshRm()
    {
        //больший размер, м
        //деление и округление
        //вывод
        return round ($this->S12_MaxSide_cm/100, 2);
    }
    function Y6_MenshRm()
    {
        //меньший размер, м
        //деление и округление
        //вывод
        return round ($this->S13_MinSide_cm/100, 2);
    }
    function Y7_GorisRasm()
    {
        //горизонтальный размер, м
        //если условие true, то вывести $this->y5_BolshRm()
        //иначе - вывести $this->y6_MenshRm()
        //вывод
        if ($this->S11_Orientation == 1)
        {
            return $this->Y5_BolshRm();
        }
        else
        {
            return $this->Y6_MenshRm();
        }    }
    function Y8_VerticalRasm()
    {
        //вертикальный размер, м
        //если условие true, то вывести $this->Y5_BolshRm()
        //иначе - вывести $this->Y6_MenshRm()
        //вывод
        if ($this->S11_Orientation == 2)
        {
            return $this->Y5_BolshRm();
        }
        else
        {
            return $this->Y6_MenshRm();
        }    }
    function Y9_Perimrtrm()
    {
        //периметр, м
        //прибавление
        //вывод
        return $this->Y5_BolshRm()+$this->Y6_MenshRm()+$this->Y5_BolshRm()+$this->Y6_MenshRm();
    }
    function Y11_GlybinaBorta1StorDiodi_m()
    { //вывод
        return L10_BK7_GlubinaBort1StorViveskaLentDiod_m;
    }
    function Y12_GlybinaBorta1StorLampi_m()
    { //вывод
        return L10_BK6_GlubinaBort1StorVivlamp_m;
    }
    function Y13_GlybinaBorta2Stor_m()
    { //вывод
        return L10_BK8_GlubinaBort2StorViveskaLentDiod_m;
    }
    function Y14_GlybinaDopolnitelnia()
    { //вывод
        return L10_BK9_GlubinaBortDopDlVivBol4m_m;
    }
    function Y15_GlubinaBorta_m()
    { 	//умножение и сложение
        //вывод
        return $this->Y11_GlybinaBorta1StorDiodi_m()*$this->V11_1Stor()*$this->V22_IstSvetaDiodi()+$this->Y12_GlybinaBorta1StorLampi_m()*$this->V11_1Stor()*$this->V21_IstSvetaLampi()+$this->Y13_GlybinaBorta2Stor_m()*$this->V12_2Stor()+$this->Y11_GlybinaBorta1StorDiodi_m()*$this->V13_4Stor()+$this->Y14_GlybinaDopolnitelnia()*$this->V28_FlagYvelichBortaDla1Stor();
    }
    function Y17_Dlina4YglovixChvov_m()
    { 	//умножение
        //вывод
        return 4*$this->Y15_GlubinaBorta_m();
    }
    function Y18_Perimet4Bortov_m()
    { 	//умножение и сложение
        //вывод
        return $this->Y9_Perimrtrm()*2+$this->Y17_Dlina4YglovixChvov_m()*4;
    }
    function Y20_PlochadGorizontalBortov_m2()
    { 	//умножение
        //вывод
        return $this->Y7_GorisRasm()*2*$this->Y15_GlubinaBorta_m();
    }
    function Y21_PlochadVertikalBortov_m2()
    { 	//умножение и сложение
        //вывод
        return $this->Y8_VerticalRasm()*($this->Y15_GlubinaBorta_m()*$this->V15_Ne4Storoni()+$this->Y15_GlubinaBorta_m()*$this->S9_4SideIn*1.5)*2;
    }
    function Y22_PlochadBortov_m2()
    { 	//сложение
        //вывод
        return $this->Y20_PlochadGorizontalBortov_m2()+$this->Y21_PlochadVertikalBortov_m2();
    }
    function Y23_PlochadRustikovPlusOporTila_m2()
    { 	//умножение и сложение
        //вывод
        return $this->Y9_Perimrtrm()*($this->V18_KolichestvoRystikov_sht()*L10_BK15_RustPVH5mmShir_m+$this->V19_KolichestvoOporDvpDlaTila_sht()*L10_BK16_OporDVPTilPVH5mm_m);
    }
    function Y25_Stoimost1m2Pvx4mm_grn()
    { 	//вывод
        return L10_J24_PVH_4mmS;
    }
    function Z25_Stoimost1m2Pvx4mm_grn()
    { 	//вывод
        return L10_L24_PVH_4mmP;
    }
    function Y26_Stoimost1m2Pvx5mm_grn()
    { 	//вывод
        return L10_J25_PVH_5mmS;
    }
    function Z26_Stoimost1m2Pvx5mm_grn()
    { 	//вывод
        return L10_L25_PVH_5mmP;
    }
    function Y27_KoefPererasxodaPvx()
    { 	//вывод
        return L10_BB6_K_PererashodPVH;
    }
    function Y29_StoimostPvxBortov_grn()
    { 	//умножение и сложение, округление
        //вывод
        return round($this->Y22_PlochadBortov_m2()*($this->Y26_Stoimost1m2Pvx5mm_grn()*$this->V8_Ulica()+$this->Y25_Stoimost1m2Pvx4mm_grn()*$this->V9_Pomesh())*$this->Y27_KoefPererasxodaPvx(),0);
    }
    function Z29_StoimostPvxBortov_grn()
    { 	//умножение и сложение, округление
        //вывод
        return round($this->Y22_PlochadBortov_m2()*($this->Z26_Stoimost1m2Pvx5mm_grn()*$this->V8_Ulica()+$this->Z25_Stoimost1m2Pvx4mm_grn()*$this->V9_Pomesh()),1);
    }
    function Y30_StoimostPvxRustPlusOporTila_grn()
    { 	//умножение и округление
        //вывод
        return round($this->Y23_PlochadRustikovPlusOporTila_m2()*$this->Y27_KoefPererasxodaPvx()*$this->Y26_Stoimost1m2Pvx5mm_grn(),0);
    }
    function Z30_StoimostPvxRustPlusOporTila_grn()
    { 	//умножение и округление
        //вывод
        return round($this->Y23_PlochadRustikovPlusOporTila_m2()*$this->Z26_Stoimost1m2Pvx5mm_grn(),1);
    }
    function Y31_StoimostPvx_grn()
    { 	//сложение
        //вывод
        return $this->Y29_StoimostPvxBortov_grn()+$this->Y30_StoimostPvxRustPlusOporTila_grn();
    }
    function Z31_StoimostPvx_grn()
    { 	//сложение
        //вывод
        return $this->Z29_StoimostPvxBortov_grn()+$this->Z30_StoimostPvxRustPlusOporTila_grn();
    }
    function Y33_DlinaRustikovPlusOporTila_m()
    {    //умножение и сложение
        //вывод
        return $this->Y9_Perimrtrm() * ($this->V18_KolichestvoRystikov_sht() + $this->V19_KolichestvoOporDvpDlaTila_sht());
    }
    function Y34_DlinaKleevogoShva_m()
    { 	//сложение
        //вывод
        return $this->Y33_DlinaRustikovPlusOporTila_m()+$this->Y17_Dlina4YglovixChvov_m();
    }
    function Y35_Stoimos1mpKleevogoShva_grn()
    { 	//округление
        //вывод
        return round(L10_K117_CosmofenPlusPVH_200mlSmp,2);
    }
    function Y36_StoimostKlea_grn()
    { 	//умножение и округление
        //вывод
        return round($this->Y34_DlinaKleevogoShva_m()*$this->Y35_Stoimos1mpKleevogoShva_grn(),0);
    }
    function Y38_PvxPlastikPlusKleiiBort1Stor_grn()
    { 	//сложение
        //вывод
        return $this->Y31_StoimostPvx_grn()+$this->Y36_StoimostKlea_grn();
    }
    function Z38_PvxPlastikPlusKleiiBort1Stor_grn()
    { 	//вывод
        return $this->Z31_StoimostPvx_grn();
    }
    function Y39_PvxPlastikPlusKleiiBortVseStor_grn()
    {    //умножение и сложение
        //вывод
        return $this->Y38_PvxPlastikPlusKleiiBort1Stor_grn()*$this->S9_4SideIn*4+$this->Y38_PvxPlastikPlusKleiiBort1Stor_grn()*$this->V15_Ne4Storoni();
    }
    function Z39_PvxPlastikPlusKleiiBortVseStor_grn()
    {    //умножение и сложение
        //вывод
        return $this->Z38_PvxPlastikPlusKleiiBort1Stor_grn()*$this->S9_4SideIn*4+$this->Z38_PvxPlastikPlusKleiiBort1Stor_grn()*$this->V15_Ne4Storoni();
    }
    function AC5_RaskroiPvxPramougol1mp_min()
    { 	//вывод
        return L10_BT7_RaskrPVHPolykPryamougl_1mp;
    }
    function AC6_RaskroiPvxPogonag1mp_min()
    { 	//вывод
        return L10_BT8_RaskrPVHPogon_1mp;
    }
    function AC7_SborkaKleevogoShva1Mp_min()
    { 	//вывод
        return L10_BT14_SborkaKleyShva_1mp;
    }
    function AC8_Formirovanie1Radiusa1Mp_min()
    { 	//вывод
        return L10_BT17_Skl1mp1Ugol4StorViv_min;
    }
    function AC10_RaskroiRustPlusOporTila_min()
    {    //умножение и сложение
        //вывод
        return $this->Y9_Perimrtrm()*($this->V18_KolichestvoRystikov_sht()+$this->V19_KolichestvoOporDvpDlaTila_sht())*$this->AC6_RaskroiPvxPogonag1mp_min();
    }
    function AC11_Virezat4PvxBorta_min()
    {    //умножение
        //вывод
        return $this->Y18_Perimet4Bortov_m()*$this->AC5_RaskroiPvxPramougol1mp_min();
    }
    function AC12_VkleitRustPlusOporuTila_min()
    {    //умножение и сложение
        //вывод
        return $this->Y9_Perimrtrm()*($this->V18_KolichestvoRystikov_sht()+$this->V19_KolichestvoOporDvpDlaTila_sht())*$this->AC7_SborkaKleevogoShva1Mp_min();
    }
    function AC13_SobratNaKleu4Borta_min()
    {    //умножение
        //вывод
        return $this->Y17_Dlina4YglovixChvov_m()*$this->AC7_SborkaKleevogoShva1Mp_min();
    }
    function AC14_FormirovanieRadiusUglov_min()
    {    //умножение и сложение
        //вывод
        return $this->AC8_Formirovanie1Radiusa1Mp_min()*($this->S19_LeviiVerxUgol+$this->S20_PraviiVerxUgol+$this->S21_LeviiNizhniiUgol+$this->S22_PraviiNizhniiUgol);
    }
    function AC16_SobratPvxBort1StorPramoi_min()
    { 	//сложение
        //вывод
        return $this->AC10_RaskroiRustPlusOporTila_min()+$this->AC11_Virezat4PvxBorta_min()+$this->AC12_VkleitRustPlusOporuTila_min()+$this->AC13_SobratNaKleu4Borta_min()+$this->AC14_FormirovanieRadiusUglov_min();
    }
    function AC17_SformirovanieRadiusi_min()
    {    //умножение и сложение
        //вывод
        return ($this->S19_LeviiVerxUgol+$this->S20_PraviiVerxUgol+$this->S21_LeviiNizhniiUgol+$this->S22_PraviiNizhniiUgol)*$this->AC8_Formirovanie1Radiusa1Mp_min();
    }
    function AC18_SobratPvxBort1StorPramoi_min()
    { 	//сложение
        //вывод
        return $this->AC16_SobratPvxBort1StorPramoi_min()+$this->AC17_SformirovanieRadiusi_min();
    }
    function AC19_SobratPvxBortVseStoroni_min()
    { 	//умножение и сложение, округление
        //вывод
        return round($this->AC18_SobratPvxBort1StorPramoi_min()*$this->V15_Ne4Storoni()+$this->AC18_SobratPvxBort1StorPramoi_min()*$this->S9_4SideIn*4,0);
    }
    function AF6_StoimosMaterialov_grn()
    { //вывод
        return $this->Y39_PvxPlastikPlusKleiiBortVseStor_grn();
    }
    function AF7_GlubinaBorta_m()
    { //умножение
        //вывод
        return $this->Y15_GlubinaBorta_m()*100;
    }
    function AF10_Trudoemkost1Bort_min()
    { 	//вывод
        return $this->AC19_SobratPvxBortVseStoroni_min();
    }
    function AF11_StoimRaboti_grn()
    { 	//стоимость работы, грн
        //округление и умножение
        //вывод
        return round($this->AF10_Trudoemkost1Bort_min()*L10_C67_K1, 0);
    }
    function AF22_Veskg()
    {     //вес, кг
        //вывод
        return $this->Z39_PvxPlastikPlusKleiiBortVseStor_grn();
    }
    function AF24_Itogo_grn()
    { 	//итого, грн
        //прибавление
        //вывод
        return $this->AF6_StoimosMaterialov_grn()+$this->AF11_StoimRaboti_grn();
    }










}

class L16_3
{
    // Входные параметры:
    public $AJ5_RoofVisorOut; // крыша/козырек улица
    public $AJ6_WallOut; // стена улица
    public $AJ7_WallIn; // стена помещение
    public $AJ8_2SideIn; // 2 стороны помещение
    public $AJ9_4SideIn; // 4 стороны помещение

    public $AJ11_MaxSide_cm; // большая сторона, см
    public $AJ12_MinSide_cm; // меньшая сторона, см


//    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $MaxSide_cm, $MinSide_cm)
    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)
    {
        // Заполнение входных данных
        $this->AJ5_RoofVisorOut = 0; // крыша/козырек улица
        $this->AJ6_WallOut = 0;      // стена улица
        $this->AJ7_WallIn = 0;       // стена помещение
        $this->AJ8_2SideIn = 0;      // 2 стороны помещение
        $this->AJ9_4SideIn = 0;      // 4 стороны помещение
        switch ($VarIspoln){
            case 1: $this->AJ5_RoofVisorOut = 1; break;
            case 2: $this->AJ6_WallOut = 1; break;
            case 3: $this->AJ7_WallIn = 1; break;
            case 4: $this->AJ8_2SideIn = 1; break;
            case 5: $this->AJ9_4SideIn = 1; break;
            default: $this->AJ8_2SideIn = 1; break;
        }

        $this->AJ11_MaxSide_cm = $MaxSide_cm;
        $this->AJ12_MinSide_cm = $MinSide_cm;

    }

    // C light - пленка борт/тыл

    function AM5_Ulica()
    {	//улица
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод
        if (($this->AJ7_WallIn+$this->AJ8_2SideIn+$this->AJ9_4SideIn)==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AM6_Pomesh()
    { 	//помещение
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->AJ5_RoofVisorOut+$this->AJ6_WallOut+$this->AJ8_2SideIn==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AP6_MenshRazm()
    { 	//меньший размер, м
        //деление и округление
        //вывод
        return round($this->AJ12_MinSide_cm/100, 2);
    }
    function AM8_PVHKrisha5mm()
    { 	//пвх крыша 5 мм
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->AP6_MenshRazm()>L10_BB19_K_PVHPerehTolsh45KK_m)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AM9_PVHKrisha4mm()
    { 	//пвх крыша 4 мм
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->AM8_PVHKrisha5mm()==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AM10_PVHUlica4mm()
    { 	//пвх улица 4 мм
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->AP6_MenshRazm()>L10_BB17_K_PVHPerehTolsh34Ulica_m)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AM11_PVHUlica3mm()
    { 	//пвх улица 3 мм
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->AM10_PVHUlica4mm()==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AM13_TillPVH()
    { 	//тыл - пвх
        //если условие = true, то вывести 0
        //иначе - вывести 1
        //вывод
        if ($this->AJ5_RoofVisorOut+$this->AJ6_WallOut>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AM15_TilPVH5mm()
    { //умножение
        //вывод
        return $this->AJ5_RoofVisorOut*$this->AM8_PVHKrisha5mm();
    }
    function AM16_TillPVH4mm()
    {        //тыл пвх 4 мм
        //умножение и прибавление
        //вывод
        return $this->AJ5_RoofVisorOut*$this->AM9_PVHKrisha4mm()+$this->AJ6_WallOut*$this->AM10_PVHUlica4mm();
    }
    function AM17_TillPVH3mm()
    {        //тыл пвх 3 мм
        //умножение и прибавление
        //вывод
        return $this->AJ6_WallOut*$this->AM11_PVHUlica3mm();
    }
    function AP5_BolshRazm_m()
    { 	//больший размер, м
        //деление и округление
        //вывод
        return round($this->AJ11_MaxSide_cm/100, 2);
    }

    function AP7_PerimTillmp()
    { 	//периметр тыла, мп
        //прибавление
        //вывод
        return $this->AP5_BolshRazm_m()+$this->AP6_MenshRazm()+$this->AP5_BolshRazm_m()+$this->AP6_MenshRazm();
    }
    function AP8_PloshTillm2()
    { 	//площадь тыла, м2
        //умножение
        //вывод
        return $this->AP5_BolshRazm_m()*$this->AP6_MenshRazm();
    }
    function AP9_PVH5mm1m2_grn()
    { 	//пвх 5 мм 1 м2, грн
        //значение
        //вывод
        return L10_J25_PVH_5mmS;
    }
    function AQ9_PVH5mm1m2_grn()
    {        //пвх 5 мм 1 м2, грн
        //значение
        //вывод
        return L10_L25_PVH_5mmP;
    }
    function AP10_PVH4mm1m2_grn()
    { 	//пвх 4 мм 1 м2, грн
        //значение
        //вывод
        return L10_J24_PVH_4mmS;
    }
    function AQ10_PVH4mm1m2_grn()
    {        //пвх 4 мм 1 м2, грн
        //значение
        //вывод
        return L10_L24_PVH_4mmP;
    }
    function AP11_PVH3mm1m2_grn()
    { 	//пвх 3 мм 1 м2, грн
        //значение
        //вывод
        return L10_J23_PVH_3mmS;
    }
    function AQ11_PVH3mm1m2_grn()
    {        //пвх 3 мм 1 м2, грн
        //значение
        //вывод
        return L10_L23_PVH_3mmP;
    }
    function AP12_DVP3mm1m2_grn()
    { 	//вывод
        return L10_J28_DVPWhiteS;
    }
    function AQ12_DVP3mm1m2_grn()
    {        //вывод
        return L10_L28_DVPWhiteP;
    }
    function AP13_PererashPVH()
    { 	//перерасход пвх
        //значение
        //вывод
        return L10_BB6_K_PererashodPVH;
    }
    function AP14_PererashDVP()
    { 	//перерасход двп
        //значение
        //вывод
        return L10_BB9_K_PererashodDVPWhite;
    }
    function AP16_Stoim1mpKley_grn()
    { 	//стоимость 1 мп клея, грн
        //значение
        //вывод
        return L10_K117_CosmofenPlusPVH_200mlSmp;
    }
    function AP17_Kley1Perim_grn()
    {
        //клей 1 периметр, грн
        //умножение
        //вывод

        return $this->AP16_Stoim1mpKley_grn()*$this->AP7_PerimTillmp();
    }
    function AP18_Stoim1Samorez()
    { 	//стоимость 1 самореза
        //значение
        //вывод
        return L10_AR42_Samorez19ZnBur;
    }
    function AP19_KolvoSamorezNa1mp_sht()
    {
        //количество саморезов на 1 мп, шт
        //значение
        //вывод
        return L10_BB60_K_KolSamorezVZadStShtMp;
    }
    function AP20_KolvoSamorezV1Perim_sht()
    {
        //кол саморезов в 1 периметре, шт
        //умножение и округление
        //вывод
        return round ($this->AP7_PerimTillmp()*$this->AP19_KolvoSamorezNa1mp_sht(), 0);
    }
    function AP21_StoimSamorez1Perim_grn()
    { 	//стоимость саморезов 1 перим., грн
        //умножение
        //вывод
        return $this->AP20_KolvoSamorezV1Perim_sht()*$this->AP18_Stoim1Samorez();
    }
    function AP23_PVHBort5mmPlusRust_m2()
    {
        //пвх бортик (5 мм) + руст, м2
        //умножение и сложение
        //вывод
        return (L10_BK15_RustPVH5mmShir_m+L10_BK16_OporDVPTilPVH5mm_m)*$this->AP7_PerimTillmp();
    }
    function AQ23_PVHBort5mmPlusRust_m2()
    {        //пвх бортик (5 мм) + руст, м2
        //умножение
        //вывод
        return 0.04*$this->AP7_PerimTillmp()*$this->AQ9_PVH5mm1m2_grn();
    }
    function AP24_PVHBort5mmPlusRust_grn()
    { 	//пвх бортик (5 мм) + руст, грн
        //умножение
        //вывод
        return $this->AP23_PVHBort5mmPlusRust_m2()*$this->AP9_PVH5mm1m2_grn()*$this->AP13_PererashPVH();
    }
    function AP26_PVHTillKrisha_grn()
    { 	//пвх тыл крыша, грн
        //умножение и прибавление
        //вывод
        return ($this->AP9_PVH5mm1m2_grn()*$this->AM8_PVHKrisha5mm()+$this->AP10_PVH4mm1m2_grn()*$this->AM9_PVHKrisha4mm())
               *$this->AP8_PloshTillm2()*$this->AP13_PererashPVH();
    }
    function AQ26_PVHTillKrisha_grn()
    {        //пвх тыл крыша, грн
        //умножение и прибавление
        //вывод
        return ($this->AQ9_PVH5mm1m2_grn()*$this->AM8_PVHKrisha5mm()+$this->AQ10_PVH4mm1m2_grn()*$this->AM9_PVHKrisha4mm())
               *$this->AP8_PloshTillm2();
    }
    function AP27_PVHTillUlica_grn()
    { 	//пвх тыл улица, грн
        //умножение и прибавление
        //вывод
        return ($this->AP10_PVH4mm1m2_grn()*$this->AM10_PVHUlica4mm()+$this->AP11_PVH3mm1m2_grn()*$this->AM11_PVHUlica3mm())*$this->AP8_PloshTillm2()*$this->AP13_PererashPVH();
    }
    function AQ27_PVHTillUlica_grn()
    {        //пвх тыл улица, грн
        //умножение и прибавление
        //вывод
        return ($this->AQ10_PVH4mm1m2_grn()*$this->AM10_PVHUlica4mm()+$this->AQ11_PVH3mm1m2_grn()*$this->AM11_PVHUlica3mm())*$this->AP8_PloshTillm2();
    }
    function AP28_DVP4TillPomesh_grn()
    { 	//пвх 4 тыла помещение, грн
        //умножение и прибавление
        //вывод
        return $this->AP12_DVP3mm1m2_grn()*$this->AP8_PloshTillm2()*$this->AP14_PererashDVP()*4;
    }
    function AQ28_PVH4TillPomeshgrn()
    {       //пвх 4 тыла помещение, грн
        //умножение и прибавление
        //вывод
        return $this->AQ12_DVP3mm1m2_grn()*$this->AP8_PloshTillm2()*4;
    }
    function AP29_DVPTillPomeshgrn()
    { 	//двп тыл помещение, грн
        //умножение
        //вывод
        return $this->AP12_DVP3mm1m2_grn()*$this->AP8_PloshTillm2()*$this->AP14_PererashDVP();
    }
    function AQ29_DVPTillPomeshgrn()
    {        //двп тыл помещение, грн
        //умножение
        //вывод
        return $this->AQ12_DVP3mm1m2_grn()*$this->AP8_PloshTillm2();
    }
    function AP31_TillBezBort_grn()
    {
        //тыл без борта, грн
        //умножение и прибавление
        //вывод
        return $this->AP26_PVHTillKrisha_grn()*$this->AJ5_RoofVisorOut+$this->AP27_PVHTillUlica_grn()*$this->AJ6_WallOut+$this->AP29_DVPTillPomeshgrn()*$this->AJ7_WallIn+$this->AP28_DVP4TillPomesh_grn()*$this->AJ9_4SideIn;
    }
    function AQ31_TillBezBort_grn()
    {        //тыл без борта, грн
        //умножение и прибавление
        //вывод
        return $this->AQ26_PVHTillKrisha_grn()*$this->AJ5_RoofVisorOut+$this->AQ27_PVHTillUlica_grn()*$this->AJ6_WallOut+$this->AQ29_DVPTillPomeshgrn()*$this->AJ7_WallIn+$this->AQ28_PVH4TillPomeshgrn()*$this->AJ9_4SideIn;
    }
    function AP32_TillPlusPVHBortEE_grn()
    { 	//тыл + пвх борт (если есть), грн
        //умножение и прибавление
        //вывод
        return $this->AP31_TillBezBort_grn()+$this->AP24_PVHBort5mmPlusRust_grn()*$this->AM13_TillPVH();
    }
    function AQ32_TillPlusPVHBortEEgrn()
    {        //тыл + пвх борт (если есть), грн
        //умножение и прибавление
        //вывод
        return $this->AQ31_TillBezBort_grn()+$this->AQ23_PVHBort5mmPlusRust_m2()*$this->AM13_TillPVH();
    }
    function AP34_KleyKrisha_grn()
    { 	//клей крыша, грн
        //умножение и прибавление
        //вывод
        return $this->AP17_Kley1Perim_grn()*2*$this->AJ5_RoofVisorOut;
    }
    function AP35_KleyUlica_grn()
    { 	//клей улица, грн
        //умножение и прибавление
        //вывод
        return $this->AP17_Kley1Perim_grn()*2*$this->AJ6_WallOut;
    }
    function AP36_Kley_grn()
    { 	//прибавление
        //вывод
        return $this->AP34_KleyKrisha_grn()+$this->AP35_KleyUlica_grn();
    }
    function AP38_SamorezKrisha_grn()
    { 	//саморезы крыша, грн
        //умножение
        //вывод
        return $this->AP21_StoimSamorez1Perim_grn()*$this->AJ5_RoofVisorOut;
    }
    function AP39_SamorezUlica_grn()
    { 	//саморезы улица, грн
        //умножение
        //вывод
        return $this->AP21_StoimSamorez1Perim_grn()*$this->AJ6_WallOut;
    }
    function AP40_SamorezPomesh_grn()
    { 	//саморезы помещение, грн
        //умножение
        //вывод
        return $this->AP21_StoimSamorez1Perim_grn()*$this->AJ7_WallIn;
    }
    function AP41_Samorez4Pomesh_grn()
    { 	//саморезы помещение, грн
        //умножение
        //вывод
        return $this->AP21_StoimSamorez1Perim_grn()*$this->AJ9_4SideIn*4;
    }
    function AP42_Samorez_grn()
    { 	//саморезы, грн
        //прибавление
        //вывод
        return $this->AP38_SamorezKrisha_grn()+$this->AP39_SamorezUlica_grn()+$this->AP40_SamorezPomesh_grn()+$this->AP41_Samorez4Pomesh_grn();
    }
    function AT5_Virez1mpTill_min()
    { 	//вырезать 1 мп тыла, мин
        //значение
        //вывод
        return L10_BT7_RaskrPVHPolykPryamougl_1mp;
    }
    function AT6_Virez1Till_min()
    { 	//вырезать 1 тыл, мин
        //умножение
        //вывод
        return $this->AT5_Virez1mpTill_min()*$this->AP7_PerimTillmp();
    }
    function AT7_PogonRez1mp_min()
    {	//погонаж резать 1 мп, мин
        //значение
        //вывод
        return L10_BT8_RaskrPVHPogon_1mp;
    }
    function AT8_Pogon2Perim_min()
    { 	//погонаж 1 периметр, мин
        //умножение
        //вывод
        return $this->AT7_PogonRez1mp_min()*$this->AP7_PerimTillmp()*2;
    }
    function AT10_1mpKleyShva_min()
    { 	//1 мп клеевого шва, мин
        //значение
        //вывод
        return L10_BT14_SborkaKleyShva_1mp;
    }
    function AT11_2PerimKleyShvamin()
    { 	//1 периметр клеевого шва, мин
        //умножение
        //вывод
        return $this->AT10_1mpKleyShva_min()*$this->AP7_PerimTillmp()*2;
    }
    function AT13_Vkrytit1SamorezS_min()
    { 	//обкатать пвх 1 мп, мин
        //значение
        //вывод
        return L10_BT26_VkruchSeriiSamorezov_1sht;
    }
    function AT14_Vkrytit1Perimetr_min()
    { 	//обкатать периметр, мин
        //умножение
        //вывод
        return $this->AT13_Vkrytit1SamorezS_min()*$this->AP20_KolvoSamorezV1Perim_sht();
    }
    function AT16_TillKrUlica_min()
    { 	//тыл крыша/улица, мин
        //умножение и прибавление
        //вывод
        return $this->AT6_Virez1Till_min()+$this->AT8_Pogon2Perim_min()*2+$this->AT11_2PerimKleyShvamin()*2+$this->AT14_Vkrytit1Perimetr_min();
    }
    function AT17_TillPomesh_min()
    { 	//тыл помещение, мин
        //прибавление
        //вывод
        return $this->AT6_Virez1Till_min()+$this->AT14_Vkrytit1Perimetr_min();
    }
    function AT18_PVH4TillPomeshmin()
    { 	//пвх 4 тыла помещение, мин
        //прибавление и умножение
        //вывод
        return ($this->AT6_Virez1Till_min()+$this->AT14_Vkrytit1Perimetr_min())*4;
    }
    function AT20_TillKrmin()
    { 	//тыл крыша, мин
        //умножение
        //вывод
        return $this->AT16_TillKrUlica_min()*$this->AJ5_RoofVisorOut;
    }
    function AT21_TillUlica_min()
    { 	//тыл улица, мин
        //умножение
        //вывод
        return $this->AT16_TillKrUlica_min()*$this->AJ6_WallOut;
    }
    function AT22_TillPomesh_min()
    { 	//тыл помещение, мин
        //умножение
        //вывод
        return $this->AT17_TillPomesh_min()*$this->AJ7_WallIn;
    }
    function AT23_PVH4TillPomesh_min()
    { 	//пвх 4 тыла помещение, мин
        //умножение
        //вывод
        return $this->AT18_PVH4TillPomeshmin()*$this->AJ9_4SideIn;
    }
    function AT24_SobrTill_min()
    { 	//собрать тыл, мин
        //прибавление
        //вывод
        return $this->AT20_TillKrmin()+$this->AT21_TillUlica_min()+$this->AT22_TillPomesh_min()+$this->AT23_PVH4TillPomesh_min();
    }
    function AW6_StoimMat_grn()
    { 	//стоимость материалов, грн
        //прибавление и округление
        //вывод
        return round ($this->AP32_TillPlusPVHBortEE_grn()+$this->AP36_Kley_grn()+$this->AP42_Samorez_grn(), 0);
    }
    function AW10_TrudTill_min()
    { 	//трудоемкость тыл , мин
        //округление
        //вывод
        return round ($this->AT24_SobrTill_min(), 0);
    }
    function AW11_StoimRab_grn()
    { 	//стоимость работы, грн
        //округление и умножение
        //вывод
        return round ($this->AW10_TrudTill_min()*L10_C67_K1, 0);
    }
    function AW15_TillPVH5mm()
    {        //тыл пвх 5 мм
        //умножение
        //вывод
        return $this->AM15_TilPVH5mm();
    }
    function AW16_TillPVH4mm()
    {        //тыл пвх 4 мм
        //умножение и прибавление
        //вывод
        return $this->AM16_TillPVH4mm();
    }
    function AW17_TillPVH3mm()
    {        //тыл пвх 3 мм
        //умножение и прибавление
        //вывод
        return $this->AM17_TillPVH3mm();
    }
    function AW18_TillDVP()
    {        //тыл двп
        //умножение и прибавление
        //вывод
        return $this->AM6_Pomesh();
    }
    function AW22_Ves_kg()
    {        //вес, кг
        //округление
        //вывод
        return round($this->AQ32_TillPlusPVHBortEEgrn(),1);
    }
    function AW24_Itogo_grn()
    { 	//итого, грн
        //округление и умножение
        //вывод
        return $this->AW6_StoimMat_grn()+$this->AW11_StoimRab_grn();
    }
}