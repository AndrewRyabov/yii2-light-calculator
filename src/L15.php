<?php namespace almaz44\light\calculator;

/**
 * L15_1 = борт/тыл пленка; L15_2 = фасад пленка; L15_3 = упаковка в стрейч пленку
 * User: andrii
 * Date: 15.02.18
 * Time: 12:52
 */
class L15_1
{
    // Входные параметры:
    public $B5_RoofVisorOut; // крыша/козырек улица
    public $B6_WallOut; // стена улица
    public $B7_WallIn; // стена помещение
    public $B8_2SideIn; // 2 стороны помещение
    public $B9_4SideIn; // 4 стороны помещение
    //
    public $B11_Orientation; // ориентация
    public $B12_MaxSide_cm; // большая сторона, см
    public $B13_MinSide_cm; // меньшая сторона, см
    //
    public $B14_ColorSide; // цвет бортов
    public $B15_ColorBack; // цвет тыла
    public $B17_IstochnikSveta; // источник света

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

        $this->B11_Orientation = $this->L09->J21_Orientation;   // ориентация
        $this->B12_MaxSide_cm = $this->L09->J22_MaxSide_cm;     // большая сторона, см
        $this->B13_MinSide_cm = $this->L09->J23_MinSide_cm;     // меньшая сторона, см
        //
        $this->B14_ColorSide = $this->L09->J25_ColorSide;       // цвет бортов
        $this->B15_ColorBack = $this->L09->J26_ColorBack;       // цвет тыла
        //
        $this->B17_IstochnikSveta=$this->L09->J41_Light;        // источник света
    }

    // C light - пленка борт/тыл

    function E5_FillSide()
    {
        // пленка борт (1-да/0-нет)
        //вывод
        return ($this->B17_IstochnikSveta == 3) ? 1 : 0;
    }
    function E6_FilmBack()
    {
        // пленка тыл (1-да/0-нет)
        //вывод
        return ($this->E5_FillSide() == 1) ? 0 : 1;
    }
    function E8_PlenkaBort()
    {   // если b14=0 то присвоить 0, иначе вернуть 1
        //вывод
        return ($this->B14_ColorSide == 0) ? 0 : 1;
    }
    function E9_PlenkaTil()
    {   // если b15=0 то присвоить 0, иначе вернуть 1
        //вывод
        return ($this->B15_ColorBack == 0) ? 0 : 1;
    }
    function E11_Flag1Storoni()
    {//если b5+b6+b7>0 то присвоить 1, иначе вернуть 0
        //вывод
        return (($this->B5_RoofVisorOut+$this->B6_WallOut+$this->B7_WallIn) > 0) ? 1 : 0;

    }
    function E12_BolchiiRazmerBolee400sm()
    {
        //если b12>bk11*100 то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->B12_MaxSide_cm > (L10_BK11_GranichDlnSvyazUvelVisBort_m * 100))
        {
            return 1;
        }
        else{
            return 0;
        }
    }
    function E13_MenchiiBolee80sm()
    {
        //если b13>bk10*100 то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->B13_MinSide_cm > (L10_BK10_GranichVicSvyazUzelVisBort_m*100))
        {
            return 1;
        }
        else{
            return 0;
        }
    }
    function E14_FlagYvelecheniaBortaDla1Stor()
    {
        //e11*e12*e13
        //вывод
        return $this->E11_Flag1Storoni()*$this->E12_BolchiiRazmerBolee400sm()*$this->E13_MenchiiBolee80sm();
    }
    function E16_GlubinaBorta1StoronaDioda()
    {

        //вывод
        return L10_BK7_GlubinaBort1StorViveskaLentDiod_m;
    }
    function E17_GlubinaBorta1StoronaLampi()
    {
        //вывод
        return L10_BK6_GlubinaBort1StorVivlamp_m;
    }
    function E18_GlubinaBorta2Storoni_m()
    {
        //вывод
        return L10_BK8_GlubinaBort2StorViveskaLentDiod_m;
    }
    function E19_GlubinaDopolniteLnaa()
    {
        //вывод
        return L10_BK9_GlubinaBortDopDlVivBol4m_m;
    }
    function E20_GlubinaBorta_m()
    {   //сложениеи умножение
        //вывод
        return $this->E16_GlubinaBorta1StoronaDioda()*$this->E6_FilmBack()*$this->E11_Flag1Storoni()
               +$this->E17_GlubinaBorta1StoronaLampi()*$this->E5_FillSide()*$this->E11_Flag1Storoni()
               +$this->E18_GlubinaBorta2Storoni_m()*$this->B8_2SideIn
               +$this->E16_GlubinaBorta1StoronaDioda()*$this->B9_4SideIn
               +$this->E19_GlubinaDopolniteLnaa()*$this->E14_FlagYvelecheniaBortaDla1Stor();
    }
    function E22_FlagZakatkiBorta()
    {
        //если b14>0 то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->B14_ColorSide > 0)
        {
            return 1;
        }
        else{
            return 0;
        }
    }
    function E23_FlagZakatkiTila()
    {
        //если b14>0 то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->B15_ColorBack > 0)
        {
            return 1;
        }
        else{
            return 0;
        }
    }

    function H5_GorisR_cm()
    {
        //горизонтальный размер, см
        //если ориентация = 1, то вернуть большую сторону, см
        //иначе вернуть меньшую сторону, см
        //вывод

        if ($this->B11_Orientation == 1)
        {
            return $this->B12_MaxSide_cm;
        }
        else{
            return $this->B13_MinSide_cm;
        }

    }
    function H6_VerticalR_cm()
    {
        //вертикальный размер, см
        //если ориентация = 2, то вернуть большую сторону, см
        //иначе - вернуть меньшую сторону, см
        //вывод

        if ($this->B11_Orientation == 2){
            return $this->B12_MaxSide_cm;
        }
        else{
            return $this->B13_MinSide_cm;
        }

    }
    function H7_GorisR_m()
    {
        //горизонтальный размер, м
        //деление переменной на 100
        //округление переменной до 2 знаков
        //вывод

        return round($this->H5_GorisR_cm()/100, 2);
    }
    function H8_GorisRTill4Stor_m()
    {
        //округление и деление
        //вывод
        return round($this->H6_VerticalR_cm()/100,2);
    }
    function H9_BortPodPlenkyPolStor_m()
    {
        //ложение
        //вывод

        return ($this->H7_GorisR_m()+$this->H8_GorisRTill4Stor_m()+$this->H8_GorisRTill4Stor_m());
    }
    function H10_BortPodPlenky4Stor_m()
    {
        //умножение
        //вывод

        return ($this->H7_GorisR_m()*4);
    }
    function H11_Til1Storona_m2()
    {
        //умножение
        //вывод

        return $this->H7_GorisR_m()*$this->H8_GorisRTill4Stor_m();
    }
    function H12_Til4Storoni_m2()
    {
        //умножение
        //вывод

        return $this->H11_Til1Storona_m2()*4;
    }
    function H13_Stoimost1m2EkonomPlenki_grn()
    {
        //вывод
        return L10_U12_RitramaM300E;
    }
    function H14_KoefPererasxodaPlenkiBort()
    {
        //вывод
        return L10_BB87_K_PererashPlenkBort;
    }
    function H15_KoefPererasxodaPlenkiTil()
    {
        //вывод
        return L10_BB88_K_PererashPlenkTil;
    }
    function H18_PloshBort1Storoni_m2()
    {
        //вывод
        return $this->E20_GlubinaBorta_m()*$this->H9_BortPodPlenkyPolStor_m()*$this->E11_Flag1Storoni();
    }
    function H19_PloshBort2Storoni_m2()
    {
        //вывод
        return $this->E20_GlubinaBorta_m()*$this->H9_BortPodPlenkyPolStor_m()*$this->B8_2SideIn;
    }
    function H20_PloshBort4Storoni_m2()
    {
        //вывод
        return $this->E20_GlubinaBorta_m()*$this->H10_BortPodPlenky4Stor_m()*$this->B9_4SideIn;
    }
    function H21_PloshBortItogo_m2()
    {
        //сложение
        //вывод
        return $this->H18_PloshBort1Storoni_m2()+$this->H19_PloshBort2Storoni_m2()+$this->H20_PloshBort4Storoni_m2();
    }
    function H22_PlenkaBortPredv_grn()
    {
        //умножение
        //вывод
        return $this->H21_PloshBortItogo_m2()*$this->H13_Stoimost1m2EkonomPlenki_grn()*$this->H14_KoefPererasxodaPlenkiBort();
    }
    function H23_PlenkaBortItogo_grn()
    {
        //умножение
        //вывод
        return round($this->H22_PlenkaBortPredv_grn()*$this->E22_FlagZakatkiBorta(), 0);
    }
    function H25_PloshTil1Storoni_m2()
    {//умножение
        //вывод
        return $this->H11_Til1Storona_m2()*$this->E11_Flag1Storoni();
    }
    function H26_PloshTil4Storoni_m2()
    {//умножение
        //вывод
        return $this->H12_Til4Storoni_m2()*$this->B9_4SideIn;
    }
    function H27_PloshTilItogo_m2()
    {
        //сложение
        //вывод;
        return $this->H25_PloshTil1Storoni_m2()+$this->H26_PloshTil4Storoni_m2();
    }
    function H28_PlenkaTilPredv_grn()
    {
        //умножение
        //вывод
        return $this->H27_PloshTilItogo_m2()*$this->H13_Stoimost1m2EkonomPlenki_grn()*$this->H15_KoefPererasxodaPlenkiTil();
    }
    function H29_PlenkaTilItogo_grn()
    {
        //умножение
        //вывод
        return $this->H28_PlenkaTilPredv_grn()*$this->E23_FlagZakatkiTila();
    }
    function K5_KrishaBort_min()
    {
        //крыша борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H9_BortPodPlenkyPolStor_m()*L10_BT43_SeamingSideInFill_120mm*$this->B5_RoofVisorOut;
    }
    function K6_UlicaBort_min()
    {
        //улица борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H9_BortPodPlenkyPolStor_m()*L10_BT43_SeamingSideInFill_120mm*$this->B6_WallOut;
    }
    function K7_StenaPBort_min()
    {
        //стена помещение борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H9_BortPodPlenkyPolStor_m()*L10_BT43_SeamingSideInFill_120mm*$this->B7_WallIn;
    }
    function K8_2StoroniBort_min()
    {
        //2 стороны борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H9_BortPodPlenkyPolStor_m()*L10_BT44_SeamingSideInFile_240mm*$this->B8_2SideIn;
    }
    function K9_4StoroniBort_min()
    {
        //4 стороны борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H10_BortPodPlenky4Stor_m()*L10_BT43_SeamingSideInFill_120mm*$this->B9_4SideIn;
    }
    function K10_ZakatkaBortPredv_min()
    {
        //сложение
        //вывод

        return $this->K5_KrishaBort_min()+$this->K6_UlicaBort_min()+$this->K7_StenaPBort_min()+$this->K8_2StoroniBort_min()+$this->K9_4StoroniBort_min();
    }
    function K11_ZakatkaBortItogo_min()
    {
//умножение и округление
        //вывод

        return round($this->K10_ZakatkaBortPredv_min()*$this->E22_FlagZakatkiBorta(),0);
    }

    function K13_KrishaTil_min()
    {
        //умножение
        //вывод

        return $this->H11_Til1Storona_m2()*L10_BT33_KnurlFullColor_m2*$this->B5_RoofVisorOut;
    }
    function K14_StenaUlicaTil_min()
    {
        //умножение
        //вывод

        return $this->H11_Til1Storona_m2()*L10_BT43_SeamingSideInFill_120mm*$this->B6_WallOut;
    }
    function K15_StenaPomechenieTil_min()
    {
        //умножение
        //вывод

        return $this->H11_Til1Storona_m2()*L10_BT43_SeamingSideInFill_120mm*$this->B7_WallIn;
    }
    function K16_4StoroniTil_min()
    {
        //умножение
        //вывод

        return $this->H12_Til4Storoni_m2()*L10_BT43_SeamingSideInFill_120mm*$this->B9_4SideIn;
    }
    function K17_ZakatkaTilPredv_min()
    {
        //сложение
        //вывод

        return $this->K13_KrishaTil_min()+$this->K14_StenaUlicaTil_min()+$this->K15_StenaPomechenieTil_min()+$this->K16_4StoroniTil_min();
    }
    function K18_TimeZakatkiRaschMinimal_cm()
    {
        //вертикальный размер, см
        //если ориентация = 2, то вернуть большую сторону, см
        //иначе - вернуть меньшую сторону, см
        //вывод

        if ($this->K17_ZakatkaTilPredv_min() <L10_BT33_KnurlFullColor_m2){
            return L10_BT33_KnurlFullColor_m2;
        }
        else{
            return $this->K17_ZakatkaTilPredv_min();
        }
    }
    function K19_ZakatkaTilItogo_min()
    {
//умножение и округление
        //вывод

        return round($this->K18_TimeZakatkiRaschMinimal_cm()*$this->E23_FlagZakatkiTila(),0);
    }

    function N6_PloshPlenki_grn()
    {
        //сложение
        //вывод

        return $this->H23_PlenkaBortItogo_grn()+$this->H29_PlenkaTilItogo_grn();
    }
    function N10_PloshPlenki_min()
    {
        //сложение
        //вывод

        return $this->K11_ZakatkaBortItogo_min()+$this->K19_ZakatkaTilItogo_min();
    }
    function N11_StoimostRaboti_grn()
    {
//умножение и округление
        //вывод

        return round($this->N10_PloshPlenki_min()*L10_C67_K1,0);
    }
    function N20_GlubinaBorta_sm()
    {
        //вывод
        return $this->E20_GlubinaBorta_m();
    }
    function N24_Itogo_grn()
    {
        //сложение
        //вывод

        return $this->N6_PloshPlenki_grn()+$this->N11_StoimostRaboti_grn();
    }
}

class L15_2
{
    // Входные параметры:
    public $R5_RoofVisorOut; // крыша/козырек улица
    public $R6_WallOut; // стена улица
    public $R7_WallIn; // стена помещение
    public $R8_2SideIn; // 2 стороны помещение
    public $R9_4SideIn; // 4 стороны помещение

    public $R11_BolshStorona_cm; // большая сторона, см
    public $R12_MenshStorona_cm; // меньшая сторона, см

    public $R14_PlenkaRitramaek1m2_grn; // пленка "Ritrama" эк 1 м2, грн
    public $R15_Porezka1mp_grn; // порезка 1 мп, грн

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1
                                )
    {
        // Заполнение входных данных.
        $this->R5_RoofVisorOut = 0; // крыша/козырек улица
        $this->R6_WallOut = 0;      // стена улица
        $this->R7_WallIn = 0;       // стена помещение
        $this->R8_2SideIn = 0;      // 2 стороны помещение
        $this->R9_4SideIn = 0;      // 4 стороны помещение
        switch ($VarIspoln){
            case 1: $this->R5_RoofVisorOut = 1; break;
            case 2: $this->R6_WallOut = 1; break;
            case 3: $this->R7_WallIn = 1; break;
            case 4: $this->R8_2SideIn = 1; break;
            case 5: $this->R9_4SideIn = 1; break;
            default: $this->R8_2SideIn = 1; break;
        }

        $this->R11_BolshStorona_cm = $MaxSide_cm;
        $this->R12_MenshStorona_cm = $MinSide_cm;

        $this->R14_PlenkaRitramaek1m2_grn = L10_U12_RitramaM300E;
        $this->R15_Porezka1mp_grn = L10_U27_PlotterCutLexx;

    }

    // C light - фасад пленка

    function V6_2Storony()
    {
        //2 стороны (1-да/0-нет)
        //вывод

        return $this->R8_2SideIn;
    }

    function V7_4Storony()
    {
        //4 стороны (1-да/0-нет)
        //вывод

        return $this->R9_4SideIn;
    }

    function V5_1Storona()
    {
        //1 сторона (1-да/0-нет)
        //если 2 стороны = 0 и 4 стороны = 0, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->V6_2Storony() == 0 and $this->V7_4Storony() == 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function V9_BolchaaStorona_m()
    {
        //деление
        //вывод
        return $this->R11_BolshStorona_cm / 100;
    }

    function V10_MenchaaStorona_m()
    {
        //деление
        //вывод
        return $this->R12_MenshStorona_cm / 100;
    }

    function V11_Perimetr_m()
    {//сложение
        //вывод

        return $this->V9_BolchaaStorona_m() + $this->V10_MenchaaStorona_m() + $this->V9_BolchaaStorona_m() + $this->V10_MenchaaStorona_m();
    }

    function V13_VertPolosDla1m_shtuk()
    {
        //округить вверх
        //вывод

        return ceil($this->V9_BolchaaStorona_m() / 1);
    }

    function V14_VertPolosDla122m_shtuk()
    {
        //округить вверх
        //вывод

        return ceil($this->V9_BolchaaStorona_m() / 1.22);
    }

//ШИРИНА ПЛЕНКИ 1 М
    function V18_BolchaaStoronaDo24smFlag()
    {
        //если r11<=24, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm <= 24) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V19_BolchaaStorona25Tire49smFlag()
    {
        //если r11>=25 и r11<=49, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm >= 25 and $this->R11_BolshStorona_cm <= 49) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V20_BolchaaStorona50Tire99smFlag()
    {
        //если r11>=50 и r11<=99, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm >= 50 and $this->R11_BolshStorona_cm <= 99) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V22_MenchaaStoronaDo24smFlag()
    {
        //если r12<=24, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm <= 24) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V23_MenchaaStorona25Tire49smFlag()
    {
        //если r12>=26 и r11<=49, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 26 and $this->R12_MenshStorona_cm <= 49) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V24_MenchaaStorona50Tire99smFlag()
    {
        //если r12>=50 и r12<=99, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 50 and $this->R12_MenshStorona_cm <= 99) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V26_MenchaaStorona100Tire124smFlag()
    {
        //если r12>=100 и r12<=124, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 100 and $this->R12_MenshStorona_cm <= 124) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V27_MenchaaStorona125Tire149smFlag()
    {
        //если r12>=125 и r11<=149, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 125 and $this->R12_MenshStorona_cm <= 149) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V28_MenchaaStorona150Tire154smFlag()
    {
        //если r11>=150 и r11<=154, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 150 and $this->R12_MenshStorona_cm <= 154) {
            return 1;
        } else {
            return 10000;
        }
    }

    function X18_BolchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }

    function X19_BolchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }

    function X20_BolchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }

    function X22_MenchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }

    function X23_MenchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }

    function X24_MenchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }

    function X26_MenchaaStoronaDo24smRez_grn()
    {
        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function X27_MenchaaStorona25Tire49smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }

    function X28_MenchaaStorona50Tire99smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V28_MenchaaStorona150Tire154smFlag();
    }

    function Y18_BolchaaStoronaDo24smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }

    function Y19_BolchaaStorona25Tire49smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }

    function Y20_BolchaaStorona50Tire99smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }

    function Y22_MenchaaStoronaDo24smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }

    function Y23_MenchaaStorona25Tire49smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }

    function Y24_MenchaaStorona50Tire99smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }

    function Y26_MenchaaStoronaDo24smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function Y27_MenchaaStorona25Tire49smPlen_grn()
    {
        // умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }

    function Y28_MenchaaStorona50Tire99smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V28_MenchaaStorona150Tire154smFlag();
    }
    function Z18_Summ_grn()
    {//сумма
        return $this->X18_BolchaaStoronaDo24smRez_grn()+$this->Y18_BolchaaStoronaDo24smPlen_grn();
    }
    function Z19_Summ_grn()
    {//сумма
        return $this->X19_BolchaaStorona25Tire49smRez_grn()+$this->Y19_BolchaaStorona25Tire49smPlen_grn();
    }
    function Z20_Summ_grn()
    {//сумма
        return $this->X20_BolchaaStorona50Tire99smRez_grn()+$this->Y20_BolchaaStorona50Tire99smPlen_grn();
    }

    function Z22_Summ_grn()
    {//сумма
        return $this->X22_MenchaaStoronaDo24smRez_grn()+$this->Y22_MenchaaStoronaDo24smPlen_grn();
    }
    function Z23_Summ_grn()
    {//сумма
        return $this->X23_MenchaaStorona25Tire49smRez_grn()+$this->Y23_MenchaaStorona25Tire49smPlen_grn();
    }
    function Z24_Summ_grn()
    {//сумма
        return $this->X24_MenchaaStorona50Tire99smRez_grn()+$this->Y24_MenchaaStorona50Tire99smPlen_grn();
    }
    function Z26_Summ_grn()
    {//сумма
        return $this->X26_MenchaaStoronaDo24smRez_grn()+$this->Y26_MenchaaStoronaDo24smPlen_grn();
    }
    function Z27_Summ_grn()
    {//сумма
        return $this->X27_MenchaaStorona25Tire49smRez_grn()+$this->Y27_MenchaaStorona25Tire49smPlen_grn();
    }
    function Z28_Summ_grn()
    {//сумма
        return $this->X28_MenchaaStorona50Tire99smRez_grn()+$this->Y28_MenchaaStorona50Tire99smPlen_grn();
    }
    function Z30_Summ1Stor_grn()
    {
        return round (min($this->Z18_Summ_grn(),$this->Z19_Summ_grn(),$this->Z20_Summ_grn(),$this->Z22_Summ_grn(),
                          $this->Z23_Summ_grn(),$this->Z24_Summ_grn(),$this->Z26_Summ_grn(),$this->Z27_Summ_grn(),$this->Z28_Summ_grn()),0);
    }
    function Z31_StoronaItogo_grn()
    {//умножение
        return $this->Z30_Summ1Stor_grn()*$this->V5_1Storona();
    }
    //ШИРИНА ПЛЕНКА 1,22 М
    function V36_BolchaaStoronaDo30smFlag()
    {
        //если r11<=30, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm <= 30) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V37_BolchaaStorona31Tire60smFlag()
    {
        //если r11>=31 и r11<=60, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm >= 31 and $this->R11_BolshStorona_cm <= 60) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V38_BolchaaStorona61Tire120smFlag()
    {
        //если r11>=61 и r11<=120, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm >= 61 and $this->R11_BolshStorona_cm <= 120) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V40_MenchaaStoronaDo30smFlag()
    {
        //если r12<=30, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm <= 30) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V41_MenchaaStorona31Tire60smFlag()
    {
        //если r12>=31 и r11<=60, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 31 and $this->R12_MenshStorona_cm <= 60) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V42_MenchaaStorona61Tire120smFlag()
    {
        //если r12>=61 и r12<=120, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 61 and $this->R12_MenshStorona_cm <= 120) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V44_MenchaaStorona121Tire150smFlag()
    {
        //если r12>=121 и r12<=150, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 121 and $this->R12_MenshStorona_cm <= 150) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V45_MenchaaStorona151Tire154smFlag()
    {
        //если r12>=151 и r11<=154, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 151 and $this->R12_MenshStorona_cm <= 154) {
            return 1;
        } else {
            return 10000;
        }
    }

    function X36_BolStorDo30sm1StorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V36_BolchaaStoronaDo30smFlag();
    }
    function X37_BolStor31Tire60sm1StorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V37_BolchaaStorona31Tire60smFlag();
    }
    function X38_BolStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V38_BolchaaStorona61Tire120smFlag();
    }
    function X40_MenStorDo30sm1StorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V40_MenchaaStoronaDo30smFlag();
    }
    function X41_MenlStor31Tire60sm1StorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V41_MenchaaStorona31Tire60smFlag();
    }
    function X42_MenStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V42_MenchaaStorona61Tire120smFlag();
    }
    function X44_MenchaaStorona121Tire150smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V44_MenchaaStorona121Tire150smFlag();
    }
    function X45_MenchaaStorona151Tire154smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V45_MenchaaStorona151Tire154smFlag();
    }
    function Y36_BolchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V36_BolchaaStoronaDo30smFlag()*1.22;
    }
    function Y37_BolchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V37_BolchaaStorona31Tire60smFlag()*1.22;
    }

    function Y38_BolchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V38_BolchaaStorona61Tire120smFlag()*1.22;
    }

    function Y40_MenchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V40_MenchaaStoronaDo30smFlag()*1.22;
    }

    function Y41_MenchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V41_MenchaaStorona31Tire60smFlag()*1.22;
    }

    function Y42_MenchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }
    function Y44_MenchaaStorona121Tire150smPlen_grn()
    {
        // умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V44_MenchaaStorona121Tire150smFlag()*1.22;
    }

    function Y45_MenchaaStorona151Tire154smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V45_MenchaaStorona151Tire154smFlag()*1.22;
    }

    function Z36_Summ_grn()
    {//сумма
        return $this->X36_BolStorDo30sm1StorRes_grn()+$this->Y36_BolchaaStoronaDo30smPlen_grn();
    }
    function Z37_Summ_grn()
    {//сумма
        return $this->X37_BolStor31Tire60sm1StorRes_grn()+$this->Y37_BolchaaStorona31Tire60smPlen_grn();
    }
    function Z38_Summ_grn()
    {//сумма
        return $this->X38_BolStor61Tire120sm1StorStorRes_grn()+$this->Y38_BolchaaStorona61Tire120smPlen_grn();
    }

    function Z40_Summ_grn()
    {//сумма
        return $this->X40_MenStorDo30sm1StorRes_grn()+$this->Y40_MenchaaStoronaDo30smPlen_grn();
    }
    function Z41_Summ_grn()
    {//сумма
        return $this->X41_MenlStor31Tire60sm1StorRes_grn()+$this->Y41_MenchaaStorona31Tire60smPlen_grn();
    }
    function Z42_Summ_grn()
    {//сумма
        return $this->X42_MenStor61Tire120sm1StorStorRes_grn()+$this->Y42_MenchaaStorona61Tire120smPlen_grn();
    }
    function Z44_Summ_grn()
    {//сумма
        return $this->X44_MenchaaStorona121Tire150smRez_grn()+$this->Y44_MenchaaStorona121Tire150smPlen_grn();
    }
    function Z45_Summ_grn()
    {//сумма
        return $this->X45_MenchaaStorona151Tire154smRez_grn()+$this->Y45_MenchaaStorona151Tire154smPlen_grn();
    }
    function Z47_Summ1Stor_grn()
    {
        return round (min($this->Z36_Summ_grn(),$this->Z37_Summ_grn(),$this->Z38_Summ_grn(), $this->Z40_Summ_grn(),$this->Z41_Summ_grn(),$this->Z42_Summ_grn(),$this->Z44_Summ_grn(),$this->Z45_Summ_grn()),0);
    }
    function Z48_StoronaItogo_grn()
    {//умножение
        return $this->Z47_Summ1Stor_grn()*$this->V5_1Storona();
    }
//2 СТОРОНЫ
//ШИРИНА ПЛЕНКИ 1 М
    function AB18_BolchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }
    function AB19_BolchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }
    function AB20_BolchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }
    function AB22_MenchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }
    function AB23_MenchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }
    function AB24_MenchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * 2*$this->R15_Porezka1mp_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }

    function AB26_MenchaaStoronaDo24smRez_grn()
    {
        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) *2* $this->R15_Porezka1mp_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function AB27_MenchaaStorona25Tire49smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) *2* $this->R15_Porezka1mp_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }

    function AB28_MenchaaStorona50Tire99smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 4) *2* $this->R15_Porezka1mp_grn * $this->V28_MenchaaStorona150Tire154smFlag();
    }

    function AC18_BolchaaStoronaDo24smPlen_grn()
    {       //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }

    function AC19_BolchaaStorona25Tire49smPlen_grn()
    {        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }

    function AC20_BolchaaStorona50Tire99smPlen_grn()
    {        //умножение
        //вывод
        return 2 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }

    function AC22_MenchaaStoronaDo24smPlen_grn()
    {        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }

    function AC23_MenchaaStorona25Tire49smPlen_grn()
    {        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }

    function AC24_MenchaaStorona50Tire99smPlen_grn()
    {        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }

    function AC26_MenchaaStoronaDo24smPlen_grn()
    {        //умножение
        //вывод
        return 3 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function AC27_MenchaaStorona25Tire49smPlen_grn()
    {        // умножение
        //вывод
        return 3 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }

    function AC28_MenchaaStorona50Tire99smPlen_grn()
    {        //умножение и сложение
        //вывод
        return (3*$this->V9_BolchaaStorona_m()*$this->R14_PlenkaRitramaek1m2_grn+$this->V13_VertPolosDla1m_shtuk()*(1.54-$this->V10_MenchaaStorona_m())*2)*$this->V28_MenchaaStorona150Tire154smFlag();
    }
    function AD18_Summ_grn()
    {//сумма
        return $this->AB18_BolchaaStoronaDo24smRez_grn()+$this->AC18_BolchaaStoronaDo24smPlen_grn();
    }
    function AD19_Summ_grn()
    {//сумма
        return $this->AB19_BolchaaStorona25Tire49smRez_grn()+$this->AC19_BolchaaStorona25Tire49smPlen_grn();
    }
    function AD20_Summ_grn()
    {//сумма
        return $this->AB20_BolchaaStorona50Tire99smRez_grn()+$this->AC20_BolchaaStorona50Tire99smPlen_grn();
    }
    function AD22_Summ_grn()
    {//сумма
        return $this->AB22_MenchaaStoronaDo24smRez_grn()+$this->AC22_MenchaaStoronaDo24smPlen_grn();
    }
    function AD23_Summ_grn()
    {//сумма
        return $this->AB23_MenchaaStorona25Tire49smRez_grn()+$this->AC23_MenchaaStorona25Tire49smPlen_grn();
    }
    function AD24_Summ_grn()
    {//сумма
        return $this->AB24_MenchaaStorona50Tire99smRez_grn()+$this->AC24_MenchaaStorona50Tire99smPlen_grn();
    }
    function AD26_Summ_grn()
    {//сумма
        return $this->AB26_MenchaaStoronaDo24smRez_grn()+$this->AC26_MenchaaStoronaDo24smPlen_grn();
    }
    function AD27_Summ_grn()
    {//сумма
        return $this->AB27_MenchaaStorona25Tire49smRez_grn()+$this->AC27_MenchaaStorona25Tire49smPlen_grn();
    }
    function AD28_Summ_grn()
    {//сумма
        return $this->AB28_MenchaaStorona50Tire99smRez_grn()+$this->AC28_MenchaaStorona50Tire99smPlen_grn();
    }
    function AD30_Summ2Stor_grn()
    {
        return round (min($this->AD18_Summ_grn(),$this->AD19_Summ_grn(),$this->AD20_Summ_grn(), $this->AD22_Summ_grn(),$this->AD23_Summ_grn(),$this->AD24_Summ_grn(),$this->AD26_Summ_grn(),$this->AD27_Summ_grn(),$this->AD28_Summ_grn()),0);
    }
    function AD31_StoroniItogo_grn()
    {//умножение
        return $this->AD30_Summ2Stor_grn()*$this->V6_2Storony();
    }
//ШИРИНА ПЛНЕКИ 1,22 М
    function AB36_BolStorDo30sm1StorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V36_BolchaaStoronaDo30smFlag();
    }
    function AB37_BolStor31Tire60sm1StorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V37_BolchaaStorona31Tire60smFlag();
    }
    function AB38_BolStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V38_BolchaaStorona61Tire120smFlag();
    }
    function AB40_MenStorDo30sm1StorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V40_MenchaaStoronaDo30smFlag();
    }
    function AB41_MenlStor31Tire60sm1StorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V41_MenchaaStorona31Tire60smFlag();
    }
    function AB42_MenStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V42_MenchaaStorona61Tire120smFlag();
    }
    function AB44_MenchaaStorona121Tire150smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2)*2 * $this->R15_Porezka1mp_grn * $this->V44_MenchaaStorona121Tire150smFlag();
    }
    function AB45_MenchaaStorona151Tire154smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 4)*2 * $this->R15_Porezka1mp_grn * $this->V45_MenchaaStorona151Tire154smFlag();
    }
    function AC36_BolchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V36_BolchaaStoronaDo30smFlag()*1.22;
    }
    function AC37_BolchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V37_BolchaaStorona31Tire60smFlag()*1.22;
    }

    function AC38_BolchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V38_BolchaaStorona61Tire120smFlag()*1.22;
    }

    function AC40_MenchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V40_MenchaaStoronaDo30smFlag()*1.22;
    }

    function AC41_MenchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V41_MenchaaStorona31Tire60smFlag()*1.22;
    }

    function AC42_MenchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }
    function AC44_MenchaaStorona121Tire150smPlen_grn()
    {
        // умножение
        //вывод
        return 3 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }

    function AC45_MenchaaStorona151Tire154smPlen_grn()
    {
        //умножение
        //вывод
        return 3 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }
    function AD36_Summ_grn()
    {//сумма
        return $this->AB36_BolStorDo30sm1StorRes_grn()+$this->AC36_BolchaaStoronaDo30smPlen_grn();
    }
    function AD37_Summ_grn()
    {//сумма
        return $this->AB37_BolStor31Tire60sm1StorRes_grn()+$this->AC37_BolchaaStorona31Tire60smPlen_grn();
    }
    function AD38_Summ_grn()
    {//сумма
        return $this->AB38_BolStor61Tire120sm1StorStorRes_grn()+$this->AC38_BolchaaStorona61Tire120smPlen_grn();
    }

    function AD40_Summ_grn()
    {//сумма
        return $this->AB40_MenStorDo30sm1StorRes_grn()+$this->AC40_MenchaaStoronaDo30smPlen_grn();
    }
    function AD41_Summ_grn()
    {//сумма
        return $this->AB41_MenlStor31Tire60sm1StorRes_grn()+$this->AC41_MenchaaStorona31Tire60smPlen_grn();
    }
    function AD42_Summ_grn()
    {//сумма
        return $this->AB42_MenStor61Tire120sm1StorStorRes_grn()+$this->AC42_MenchaaStorona61Tire120smPlen_grn();
    }
    function AD44_Summ_grn()
    {//сумма
        return $this->AB44_MenchaaStorona121Tire150smRez_grn()+$this->AC44_MenchaaStorona121Tire150smPlen_grn();
    }
    function AD45_Summ_grn()
    {//сумма
        return $this->AB45_MenchaaStorona151Tire154smRez_grn()+$this->AC45_MenchaaStorona151Tire154smPlen_grn();
    }
    function AD47_Summ2Stor_grn()
    {
        return round ( 0.5 + min($this->AD36_Summ_grn(),$this->AD37_Summ_grn(),$this->AD38_Summ_grn(), $this->AD40_Summ_grn(),$this->AD41_Summ_grn(),$this->AD42_Summ_grn(),$this->AD44_Summ_grn(),$this->AD45_Summ_grn()),0);
    }
    function AD48_StoroniItogo_grn()
    {//умножение
        return $this->AD47_Summ2Stor_grn()*$this->V6_2Storony();
    }
//4 СТОРОНЫ
//ШИРИНА ПЛЕНКИ 1 М
    function AF18_BolchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }
    function AF19_BolchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }
    function AF20_BolchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }
    function AF22_MenchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }
    function AF23_MenchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }
    function AF24_MenchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4*$this->R15_Porezka1mp_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }
    function AF26_MenchaaStoronaDo24smRez_grn()
    {
        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) *4* $this->R15_Porezka1mp_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }
    function AF27_MenchaaStorona25Tire49smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) *4* $this->R15_Porezka1mp_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }
    function AF28_MenchaaStorona50Tire99smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 4) *4* $this->R15_Porezka1mp_grn * $this->V28_MenchaaStorona150Tire154smFlag();
    }
    function AG18_BolchaaStoronaDo24smPlen_grn()
    {       //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }

    function AG19_BolchaaStorona25Tire49smPlen_grn()
    {        //умножение
        //вывод
        return 2 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }
    function AG20_BolchaaStorona50Tire99smPlen_grn()
    {        //умножение
        //вывод
        return 4 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }
    function AG22_MenchaaStoronaDo24smPlen_grn()
    {        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }
    function AG23_MenchaaStorona25Tire49smPlen_grn()
    {        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }
    function AG24_MenchaaStorona50Tire99smPlen_grn()
    {        //умножение
        //вывод
        return 4 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }
    function AG26_MenchaaStoronaDo24smPlen_grn()
    {        //умножение
        //вывод
        return 5 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }
    function AG27_MenchaaStorona25Tire49smPlen_grn()
    {        // умножение
        //вывод
        return 6 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function AG28_MenchaaStorona50Tire99smPlen_grn()
    {        //умножение и сложение
        //вывод
        return (6*$this->V9_BolchaaStorona_m()*$this->R14_PlenkaRitramaek1m2_grn+$this->V13_VertPolosDla1m_shtuk()*(1.54-$this->V10_MenchaaStorona_m())*4)*$this->V28_MenchaaStorona150Tire154smFlag();
    }
    function AH18_Summ_grn()
    {//сумма
        return $this->AF18_BolchaaStoronaDo24smRez_grn()+$this->AG18_BolchaaStoronaDo24smPlen_grn();
    }
    function AH19_Summ_grn()
    {//сумма
        return $this->AF19_BolchaaStorona25Tire49smRez_grn()+$this->AG19_BolchaaStorona25Tire49smPlen_grn();
    }
    function AH20_Summ_grn()
    {//сумма
        return $this->AF20_BolchaaStorona50Tire99smRez_grn() + $this->AG20_BolchaaStorona50Tire99smPlen_grn();
    }
    function AH22_Summ_grn()
    {//сумма
        return $this->AF22_MenchaaStoronaDo24smRez_grn() + $this->AG22_MenchaaStoronaDo24smPlen_grn();
    }

    function AH23_Summ_grn()
    {//сумма
        return $this->AF23_MenchaaStorona25Tire49smRez_grn() + $this->AG23_MenchaaStorona25Tire49smPlen_grn();
    }

    function AH24_Summ_grn()
    {//сумма
        return $this->AF24_MenchaaStorona50Tire99smRez_grn() + $this->AG24_MenchaaStorona50Tire99smPlen_grn();
    }

    function AH26_Summ_grn()
    {//сумма
        return $this->AF26_MenchaaStoronaDo24smRez_grn() + $this->AG26_MenchaaStoronaDo24smPlen_grn();
    }

    function AH27_Summ_grn()
    {//сумма
        return $this->AF27_MenchaaStorona25Tire49smRez_grn() + $this->AG27_MenchaaStorona25Tire49smPlen_grn();
    }

    function AH28_Summ_grn()
    {//сумма
        return $this->AF28_MenchaaStorona50Tire99smRez_grn() + $this->AG28_MenchaaStorona50Tire99smPlen_grn();
    }
    function AH30_Summ4Stor_grn()
    {
        return round (min($this->AH18_Summ_grn(),$this->AH19_Summ_grn(),$this->AH20_Summ_grn(), $this->AH22_Summ_grn(),$this->AH23_Summ_grn(),$this->AH24_Summ_grn(),$this->AH26_Summ_grn(),$this->AH27_Summ_grn(),$this->AH28_Summ_grn()),0);
    }
    function AH31_StoroniItogo_grn()
    {//умножение
        return $this->AH30_Summ4Stor_grn()*$this->V7_4Storony();
    }
//ШИРИНА ПЛЕНКИ 1,22 М
    function AF36_BolStorDo30sm1StorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V36_BolchaaStoronaDo30smFlag();
    }
    function AF37_BolStor31Tire60sm1StorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V37_BolchaaStorona31Tire60smFlag();
    }
    function AF38_BolStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V38_BolchaaStorona61Tire120smFlag();
    }
    function AF40_MenStorDo30sm1StorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V40_MenchaaStoronaDo30smFlag();
    }
    function AF41_MenlStor31Tire60sm1StorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V41_MenchaaStorona31Tire60smFlag();
    }
    function AF42_MenStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V42_MenchaaStorona61Tire120smFlag();
    }
    function AF44_MenchaaStorona121Tire150smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2)*4 * $this->R15_Porezka1mp_grn * $this->V44_MenchaaStorona121Tire150smFlag();
    }
    function AF45_MenchaaStorona151Tire154smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2)*4 * $this->R15_Porezka1mp_grn * $this->V45_MenchaaStorona151Tire154smFlag();
    }
    function AG36_BolchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V36_BolchaaStoronaDo30smFlag()*1.22;
    }
    function AG37_BolchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V37_BolchaaStorona31Tire60smFlag()*1.22;
    }
    function AG38_BolchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 4 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V38_BolchaaStorona61Tire120smFlag()*1.22;
    }
    function AG40_MenchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V40_MenchaaStoronaDo30smFlag()*1.22;
    }
    function AG41_MenchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V41_MenchaaStorona31Tire60smFlag()*1.22;
    }
    function AG42_MenchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 4 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }
    function AG44_MenchaaStorona121Tire150smPlen_grn()
    {
        // умножение
        //вывод
        return 5 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V44_MenchaaStorona121Tire150smFlag()*1.22;
    }
    function AG45_MenchaaStorona151Tire154smPlen_grn()
    {
        //умножение
        //вывод
        return 6 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V45_MenchaaStorona151Tire154smFlag()*1.22;
    }
    function AH36_Summ_grn()
    {//сумма
        return $this->AF36_BolStorDo30sm1StorRes_grn()+$this->AG36_BolchaaStoronaDo30smPlen_grn();
    }
    function AH37_Summ_grn()
    {//сумма
        return $this->AF37_BolStor31Tire60sm1StorRes_grn()+$this->AG37_BolchaaStorona31Tire60smPlen_grn();
    }
    function AH38_Summ_grn()
    {//сумма
        return $this->AF38_BolStor61Tire120sm1StorStorRes_grn()+$this->AG38_BolchaaStorona61Tire120smPlen_grn();
    }
    function AH40_Summ_grn()
    {//сумма
        return $this->AF40_MenStorDo30sm1StorRes_grn()+$this->AG40_MenchaaStoronaDo30smPlen_grn();
    }
    function AH41_Summ_grn()
    {//сумма
        return $this->AF41_MenlStor31Tire60sm1StorRes_grn()+$this->AG41_MenchaaStorona31Tire60smPlen_grn();
    }
    function AH42_Summ_grn()
    {//сумма
        return $this->AF42_MenStor61Tire120sm1StorStorRes_grn()+$this->AG42_MenchaaStorona61Tire120smPlen_grn();
    }
    function AH44_Summ_grn()
    {//сумма
        return $this->AF44_MenchaaStorona121Tire150smRez_grn()+$this->AG44_MenchaaStorona121Tire150smPlen_grn();
    }
    function AH45_Summ_grn()
    {//сумма
        return $this->AF45_MenchaaStorona151Tire154smRez_grn()+$this->AG45_MenchaaStorona151Tire154smPlen_grn();
    }
    function AH47_Summ4Stor_grn()
    {
        return round (min($this->AH36_Summ_grn(),$this->AH37_Summ_grn(),$this->AH38_Summ_grn(), $this->AH40_Summ_grn(),$this->AH41_Summ_grn(),$this->AH42_Summ_grn(),$this->AH44_Summ_grn(),$this->AH45_Summ_grn()),0);
    }
    function AH48_StoroniItogo_grn()
    {//умножение
        return $this->AH47_Summ4Stor_grn()*$this->V7_4Storony();
    }
    function AJ31_Itogo1m_grn()
    {//сумма
        return $this->Z31_StoronaItogo_grn()+$this->AD31_StoroniItogo_grn()+$this->AH31_StoroniItogo_grn();
    }
    function AJ48_Itogo1Tochka22m_grn()
    {//сумма
        return $this->Z48_StoronaItogo_grn()+$this->AD48_StoroniItogo_grn()+$this->AH48_StoroniItogo_grn();
    }
    function AJ50_ItogoPlenkaPlusPorezkaPlusPerarasxod()
    {
        return  round (min($this->AJ31_Itogo1m_grn(),$this->AJ48_Itogo1Tochka22m_grn())*L10_BB85_K_PererashPlenkFasad,0);
    }
    function AM24_Itogo_grn()
    {
        return $this->AJ50_ItogoPlenkaPlusPorezkaPlusPerarasxod();
    }


}

class L15_3
{
    // Входные параметры:
    public $AQ5_RoofVisorOut; // крыша/козырек улица
    public $AQ6_WallOut; // стена улица
    public $AQ7_WallIn; // стена помещение
    public $AQ8_SideIn2; // 2 стороны помещение
    public $AQ9_SideIn4; // 4 стороны помещение

    public $AQ11_BolshStorona_cm; // большая сторона, см
    public $AQ12_MenshStorona_cm; // меньшая сторона, см
    public $AQ13_LicIzobr; // лицевое изображение

    public $AQ15_MaketIzobr; // макет изображения
    public $AQ16_PlenkaLic; // пленка лицевая
    public $AQ18_PlenkZatazkEkon_grn;//пленка затяжка экон грн

    private $L9, $L15_2;

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)
    {
        // Заполнение входных данных.
        $this->AQ5_RoofVisorOut = 0;
        $this->AQ6_WallOut = 0;
        $this->AQ7_WallIn = 0;
        $this->AQ8_SideIn2 = 0;
        $this->AQ9_SideIn4 = 0;
        switch ($VarIspoln){
            case 1: $this->AQ5_RoofVisorOut = 1; break;
            case 2: $this->AQ6_WallOut = 1; break;
            case 3: $this->AQ7_WallIn = 1; break;
            case 4: $this->AQ8_SideIn2 = 1; break;
            case 5: $this->AQ9_SideIn4 = 1; break;
            default: $this->AQ8_SideIn2 = 1; break;
        }

        $this->L9 = new L09($SCLight, $VarIspoln,
                            $Orientation, $MaxSide_cm, $MinSide_cm,
                            $FrontImg, $ColorSide, $ColorBack, $Ugol,
                            $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->AQ11_BolshStorona_cm = $this->L9->J22_MaxSide_cm;
        $this->AQ12_MenshStorona_cm = $this->L9->J23_MinSide_cm;
        $this->AQ13_LicIzobr = $this->L9->J24_FrontImg;

        $this->AQ15_MaketIzobr = ($this->L9->J38_MaketImg == 1) ? 0 : 1;
        $this->AQ16_PlenkaLic = $this->L9->J39_PlenkLic;

        $this->L15_2 = new L15_2($SCLight, $VarIspoln,
                                 $Orientation, $MaxSide_cm, $MinSide_cm,
                                 $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                 $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->AQ18_PlenkZatazkEkon_grn=$this->L15_2->AM24_Itogo_grn();

    }

    // C light - фасад пленка

    function AT5_2Storony()
    {
        //2 стороны (1-да/0-нет)
        //вывод

        return $this->AQ8_SideIn2;
    }
    function AT6_4Storony()
    {
        //4 стороны (1-да/0-нет)
        //вывод

        return $this->AQ9_SideIn4;
    }
    function AT7_1Storona()
    {
        //1 сторона (1-да/0-нет)
        //если 2 стороны = 0 и 4 стороны = 0, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->AT5_2Storony() == 0 and $this->AT6_4Storony() == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT10_PolnocvetFoto()
    {
        //если aq16= 1, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT11_PolnocvetFotoPlusLaminat()
    {
        //если aq16= 2, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 2)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT12_Polnocvet720()
    {
        //если aq16= 3, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 3)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT13_Polnocvet720PlusLaminat()
    {
        //если aq16= 4, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 4)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT14_REkonBeliiPlusAplikaciaa()
    {
        //если aq16= 5, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 5)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT15_REkonCvetnoiiPlusProrez()
    {
        //если aq16= 6, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 6)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT16_REkonCvetnoiiPlusAplicacia()
    {
        //если aq16= 7, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 7)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT17_RSvetBeliiPlusAplikaciaa()
    {
        //если aq16= 8, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 8)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT18_RSvetCvetnoiiPlusProrez()
    {
        //если aq16= 9, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 9)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT19_RSvetCvetnoiiPlusAplicacia()
    {
        //если aq16= 10, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AQ16_PlenkaLic == 10)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT21_FasadCvetnayaPlenka()
    {
        //если at14+at15+at16+at17+at18+at19>0, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AT14_REkonBeliiPlusAplikaciaa()+$this->AT15_REkonCvetnoiiPlusProrez()+$this->AT16_REkonCvetnoiiPlusAplicacia()+$this->AT17_RSvetBeliiPlusAplikaciaa()+$this->AT18_RSvetCvetnoiiPlusProrez()+$this->AT19_RSvetCvetnoiiPlusAplicacia() >0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT22_Svetorasseivauchaa()
    {
        //если at17+at18+at19>0, то вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->AT17_RSvetBeliiPlusAplikaciaa()+$this->AT18_RSvetCvetnoiiPlusProrez()+$this->AT19_RSvetCvetnoiiPlusAplicacia() >0 )
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT23_KoefUdoroganiesvetRitrama()
    {
        //если at22= 1, то вернуть u13
        //иначе - вернуть 1
        //вывод
        if ($this->AT22_Svetorasseivauchaa() == 1)
        {
            return L10_U13_RitramaTRLSK;
        }
        else
        {
            return 1;
        }
    }
    function AW5_BolshStor_m()
    {
        //большая сторона, м
        //деление и округление
        //вывод

        return round($this->AQ11_BolshStorona_cm/100, 2);
    }
    function AW6_MenshStorm()
    {
        //меньшая сторона, м
        //деление и округление
        //вывод

        return round($this->AQ12_MenshStorona_cm/100, 2);
    }
    function AW8_KolFasadov()
    {
        //количество фасадов
        //умножение и прибавление
        //вывод
        return 1*$this->AT7_1Storona()+2*$this->AT5_2Storony()+4*$this->AT6_4Storony();
    }
    function AW9_PloshFasadam2()
    {
        //площадь фасада, м2
        //умножение
        //вывод

        return $this->AW5_BolshStor_m()*$this->AW6_MenshStorm();
    }
    function AW10_PloshAllFasadovm2()
    {
        //площадь всех фасадов, м2
        //умножение
        //вывод

        return $this->AW9_PloshFasadam2()*$this->AW8_KolFasadov();
    }
    function AW11_RaschPFasadDlTrudm2()
    {
        //расчетная площ. фасадов для трудоем., м2
        //если площадь всех фасадов, м2 > L10_BT32_MinCalcSqureFullColor_m2, то вернуть площадь всех фасадов, м2
        //иначе - вернуть L10_BT32_MinCalcSqureFullColor_m2
        //вывод

        if ($this->AW10_PloshAllFasadovm2() > L10_BT32_MinCalcSqureFullColor_m2)
        {
            return $this->AW10_PloshAllFasadovm2();
        }
        else
        {
            return L10_BT32_MinCalcSqureFullColor_m2;
        }
    }
    function AW12_PlenkaDlApp_m2()
    {
        //пленка для аппликации, м2
        //умножение
        //вывод
        return $this->AW9_PloshFasadam2()*L10_BB93_K_PloshFasadPloshPlenkDlApp;
    }
    function AW13_PlenkaDlApp_grn()
    {
        //пленка для аппликации, грн.
        //умножение
        //вывод
        return $this->AW12_PlenkaDlApp_m2()*L10_U12_RitramaM300E*$this->AT23_KoefUdoroganiesvetRitrama();
    }
    function AW14_Perimetr1Fasada_mp()
    {
        //периметр изображения, мп
        //прибавление
        //вывод
        return $this->AW5_BolshStor_m()+$this->AW6_MenshStorm()+$this->AW5_BolshStor_m()+$this->AW6_MenshStorm();
    }
    function AW15_DlinaResaDla1Fasada_mp()
    {
        //длинна реза, мп
        //умножение
        //вывод
        return $this->AW14_Perimetr1Fasada_mp()*L10_BB95_K_PerimVivesDlinaResaPlot;
    }
    function AW16_StoimRezamp()
    {
        //стоимость реза, мп
        //умножение
        //вывод
        return $this->AW15_DlinaResaDla1Fasada_mp()*L10_U27_PlotterCutLexx;
    }
    function AW17_PlenkaMontajm2()
    {
        //пленка монтажная, м2
        //умножение
        //вывод
        return $this->AW9_PloshFasadam2()*L10_BB94_K_PloshFasadPloshPlenkTransp;
    }
    function AW18_PlenkaMontajgrn()
    {
        //пленка монтажная, грн
        //умножение
        //вывод
        return $this->AW17_PlenkaMontajm2()*L10_U25_AssemblyFilm;
    }

    function AW19_KoefPerasxodaPolnocveta()
    {//коэф перерасхода полноцвета
        //вывод
        return L10_BB86_K_PererashPolnocvet;
    }
    function AW21_AplicaciiaMaterial1Fasad_grn()
    {
        //сложение
        //вывод
        return $this->AW13_PlenkaDlApp_grn()+$this->AW16_StoimRezamp()+$this->AW18_PlenkaMontajgrn();
    }
    function AW22_ZatazkaFonaPlusProrezEkon1Fasad_grn()
    {
        //умножение
        //вывод
        return $this->AQ18_PlenkZatazkEkon_grn*$this->AT23_KoefUdoroganiesvetRitrama();
    }
    function AW25_PolnocverFoto1Fasad_grn()
    {
        //умножение
        //вывод
        return $this->AW9_PloshFasadam2()*L10_U7_RitramaPhoto*$this->AW19_KoefPerasxodaPolnocveta();
    }
    function AW26_PolnocverFotoPlusLaminat1Fasa_grn()
    {
        //умножение и сложение
        //вывод
        return $this->AW9_PloshFasadam2()*(L10_U7_RitramaPhoto+L10_U8_RitramaLaminat)*$this->AW19_KoefPerasxodaPolnocveta();
    }
    function AW27_Polnocvet720_1Fasad_grn()
    {
        //умножение
        //вывод
        return $this->AW9_PloshFasadam2()*L10_U6_Ritrama_720dpi*$this->AW19_KoefPerasxodaPolnocveta();
    }
    function AW28_PolnocverFotoPlusLaminat1Fasa_grn()
    {
        //умножение и сложение
        //вывод
        return $this->AW9_PloshFasadam2()*(L10_U6_Ritrama_720dpi+L10_U8_RitramaLaminat)*$this->AW19_KoefPerasxodaPolnocveta();
    }
    function AW29_RBeliiPlusAplikaciaa1Fasad_grn()
    {//вывод
        return $this->AW21_AplicaciiaMaterial1Fasad_grn();
    }
    function AW30_RCvetnoiiPlusProrez1Fasad_grn()
    {//вывод
        return $this->AW22_ZatazkaFonaPlusProrezEkon1Fasad_grn();
    }
    function AW31_RCvetnoiiPlusAplikacia1Fasad_grn()
    {//сложение
        //вывод
        return $this->AW29_RBeliiPlusAplikaciaa1Fasad_grn()+$this->AW30_RCvetnoiiPlusProrez1Fasad_grn();
    }
    function AW33_PolnocvetFotoItogo_grn()
    {
        //умножение
        //вывод
        return $this->AW25_PolnocverFoto1Fasad_grn()*$this->AW8_KolFasadov()*$this->AT10_PolnocvetFoto();
    }
    function AW34_PolnocvetFotoPlusLaminatItogo()
    {
        //умножение
        //вывод
        return $this->AW26_PolnocverFotoPlusLaminat1Fasa_grn()*$this->AW8_KolFasadov()*$this->AT11_PolnocvetFotoPlusLaminat();
    }
    function AW35_Polnocvet720Itogo_grn()
    {
        //умножение
        //вывод
        return $this->AW27_Polnocvet720_1Fasad_grn()*$this->AW8_KolFasadov()*$this->AT12_Polnocvet720();
    }
    function AW36_Polnocvet720PlusLaminatItogo_grn()
    {
        //умножение
        //вывод
        return $this->AW28_PolnocverFotoPlusLaminat1Fasa_grn()*$this->AW8_KolFasadov()*$this->AT13_Polnocvet720PlusLaminat();
    }
    function AW37_REkonBeliiPlusApplicaciaItogo_grn()
    {
        //умножение
        //вывод
        return $this->AW29_RBeliiPlusAplikaciaa1Fasad_grn()*$this->AW8_KolFasadov()*$this->AT14_REkonBeliiPlusAplikaciaa();
    }
    function AW38_REkonCvetnoiiPlusProrezItogo_grn()
    {
        //умножение
        //вывод
        return $this->AW30_RCvetnoiiPlusProrez1Fasad_grn()*$this->AW8_KolFasadov()*$this->AT15_REkonCvetnoiiPlusProrez();
    }
    function AW39_REkonCvetnoiiPlusApplicaciaItogo_grn()
    {
        //умножение
        //вывод
        return $this->AW31_RCvetnoiiPlusAplikacia1Fasad_grn()*$this->AW8_KolFasadov()*$this->AT16_REkonCvetnoiiPlusAplicacia();
    }
    function AW40_RSvetBeliiPlusAplicaciaItogo_grn()
    {
        //умножение
        //вывод
        return $this->AW29_RBeliiPlusAplikaciaa1Fasad_grn()*$this->AW8_KolFasadov()*$this->AT17_RSvetBeliiPlusAplikaciaa();
    }
    function AW41_RSvetCvetnoiiPlusProrezItogo_grn()
    {
        //умножение
        //вывод
        return $this->AW30_RCvetnoiiPlusProrez1Fasad_grn()*$this->AW8_KolFasadov()*$this->AT18_RSvetCvetnoiiPlusProrez();
    }
    function AW42_RSvetCvetnoiiPlusAplicaciaItogo_grn()
    {
        //умножение
        //вывод
        return $this->AW31_RCvetnoiiPlusAplikacia1Fasad_grn()*$this->AW8_KolFasadov()*$this->AT19_RSvetCvetnoiiPlusAplicacia();
    }
    function AW43_VseFasadiMaterialiItogo_grn()
    {//сложение и округление
        return round($this->AW33_PolnocvetFotoItogo_grn()+$this->AW34_PolnocvetFotoPlusLaminatItogo()+$this->AW35_Polnocvet720Itogo_grn()+$this->AW36_Polnocvet720PlusLaminatItogo_grn()+$this->AW37_REkonBeliiPlusApplicaciaItogo_grn()+$this->AW38_REkonCvetnoiiPlusProrezItogo_grn()+$this->AW39_REkonCvetnoiiPlusApplicaciaItogo_grn()+$this->AW40_RSvetBeliiPlusAplicaciaItogo_grn()+$this->AW41_RSvetCvetnoiiPlusProrezItogo_grn()+$this->AW42_RSvetCvetnoiiPlusAplicaciaItogo_grn(),0);
    }
    function AZ5_Polnocvet1m2_min()
    {
        //вывод
        return L10_BT33_KnurlFullColor_m2;
    }
    function AZ6_ZatazhPolyprPlusVub1m2_min()
    {
        //вывод
        return L10_BT34_KnurlRitramaHalfCat_m2;
    }
    function AZ7_Aplicacia1m2_min()
    {//вывод
        return L10_BT35_SampleAplication_m2;
    }
    function AZ8_ZatazhPlusAplicacia1m2_min()
    {
        return $this->AZ6_ZatazhPolyprPlusVub1m2_min()+$this->AZ7_Aplicacia1m2_min();
    }
    function AZ10_Polnocvet_min()
    {  //умножение
        //вывод
        return $this->AZ5_Polnocvet1m2_min()*$this->AW11_RaschPFasadDlTrudm2();
    }
    function AZ11_BeliiFonPlusApll_min()
    {  //умножение
        //вывод
        return $this->AZ7_Aplicacia1m2_min()*$this->AW11_RaschPFasadDlTrudm2();
    }
    function AZ12_CvetnaaPlusProrez_min()
    {  //умножение
        //вывод
        return $this->AZ6_ZatazhPolyprPlusVub1m2_min()*$this->AW11_RaschPFasadDlTrudm2();
    }
    function AZ13_CvetnaaPlusProrezPlusApll_min()
    {  //умножение и сложение
        //вывод
        return ($this->AZ6_ZatazhPolyprPlusVub1m2_min()+$this->AZ7_Aplicacia1m2_min())*$this->AW11_RaschPFasadDlTrudm2();
    }
    function AZ15_PolnocvetFoto_min()
    {  //умножение
        //вывод
        return $this->AZ10_Polnocvet_min()*$this->AT10_PolnocvetFoto();
    }
    function AZ16_PolnocvetFotoPlusLam_min()
    {  //умножение
        //вывод
        return $this->AZ10_Polnocvet_min()*$this->AT11_PolnocvetFotoPlusLaminat();
    }
    function AZ17_Polnocvet720_min()
    {  //умножение
        //вывод
        return $this->AZ10_Polnocvet_min()*$this->AT12_Polnocvet720();
    }
    function AZ18_Polnocvet720PlusLam_min()
    {  //умножение
        //вывод
        return $this->AZ10_Polnocvet_min()*$this->AT13_Polnocvet720PlusLaminat();
    }
    function AZ19_REkonBeliiPlusApll_min()
    {  //умножение
        //вывод
        return $this->AZ11_BeliiFonPlusApll_min()*$this->AT21_FasadCvetnayaPlenka();
    }
    function AZ20_REkonCvetPlusProrez_min()
    {  //умножение
        //вывод
        return $this->AZ12_CvetnaaPlusProrez_min()*$this->AT15_REkonCvetnoiiPlusProrez();
    }
    function AZ21_REkonCvetPlusApll_min()
    {  //умножение
        //вывод
        return $this->AZ13_CvetnaaPlusProrezPlusApll_min()*$this->AT16_REkonCvetnoiiPlusAplicacia();
    }
    function AZ22_RSvetBeliiPlusApll_min()
    {  //умножение
        //вывод
        return $this->AZ11_BeliiFonPlusApll_min()*$this->AT17_RSvetBeliiPlusAplikaciaa();
    }
    function AZ23_RSvetCvetPlusProrez_min()
    {
        //умножение
        //вывод
        return $this->AZ12_cvetnaaPlusProrez_min()*$this->AT18_RSvetCvetnoiiPlusProrez();
    }
    function AZ24_RSvetCvetnoiiPlusApll_min()
    {
        //умножение
        //вывод
        return $this->AZ13_CvetnaaPlusProrezPlusApll_min()*$this->AT19_RSvetCvetnoiiPlusAplicacia();
    }
    function AZ25_VseFasadiTrudPlenkaItogo_grn()
    {
        return round($this->AZ15_PolnocvetFoto_min()+$this->AZ16_PolnocvetFotoPlusLam_min()+$this->AZ17_Polnocvet720_min()+$this->AZ18_Polnocvet720PlusLam_min()+$this->AZ19_REkonBeliiPlusApll_min()+$this->AZ20_REkonCvetPlusProrez_min()+$this->AZ21_REkonCvetPlusApll_min()+$this->AZ22_RSvetBeliiPlusApll_min()+$this->AZ23_RSvetCvetPlusProrez_min()+$this->AZ24_RSvetCvetnoiiPlusApll_min());
    }
    function AZ27_DizainRazrabotka_min()
    {
        //умножение
        //вывод
        return L10_BT49_MaketL24_1sht*$this->AQ15_MaketIzobr;
    }
    function AZ28_Dizainproverka_min()
    {
        //R свет, цвет + прорез, мин
        //умножение
        //вывод

        return L10_BT50_MaketZakazch_1sht*$this->AQ13_LicIzobr;
    }
    function AZ29_DizainItogo_min()
    {
        //сложение
        //вывод
        return $this->AZ27_DizainRazrabotka_min()+$this->AZ28_Dizainproverka_min();
    }
    function BC6_FasadMatItogo_grn()
    {
        //вывод
        return $this->AW43_VseFasadiMaterialiItogo_grn();
    }
    function BC10_TrudoemkostNanesenia_min()
    {
        //вывод
        return $this->AZ25_VseFasadiTrudPlenkaItogo_grn();
    }
    function BC11_Dizain_min()
    {
        //вывод
        return $this->AZ29_DizainItogo_min();
    }
    function BC12_StoimostRaboti_grn()
    {

        //арифметические вычисления
        //вывод

        return round(($this->BC10_TrudoemkostNanesenia_min()+$this->BC11_Dizain_min())*L10_C67_K1,0);
    }
    function BC24_Itigo_grn()
    {
        //сложение
        //вывод

        return $this->BC6_FasadMatItogo_grn()+$this->BC12_StoimostRaboti_grn();
    }

}

class L15_4
{
    // Входные параметры:
    public $BG5_RoofVisorOut; // крыша/козырек улица
    public $BG6_WallOut; // стена улица
    public $BG7_WallIn; // стена помещение
    public $BG8_2SideIn; // 2 стороны помещение
    public $BG9_4SideIn; // 4 стороны помещение
    //
    public $BG11_Orientation; // ориентация
    public $BG12_MaxSide_cm; // большая сторона, см
    public $BG13_MinSide_cm; // меньшая сторона, см
    public $BG14_GlubinaBorta_sm; // Глубина борта, см

    private $L09, $L15_1, $L15_2, $L15_3; // Временные классы.

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)
    {
        // Заполнение входных данных.
        $this->BG5_RoofVisorOut = 0; // крыша/козырек улица
        $this->BG6_WallOut = 0;      // стена улица
        $this->BG7_WallIn = 0;       // стена помещение
        $this->BG8_2SideIn = 0;      // 2 стороны помещение
        $this->BG9_4SideIn = 0;      // 4 стороны помещение
        switch ($VarIspoln) {
            case 1: $this->BG5_RoofVisorOut = 1; break;
            case 2: $this->BG6_WallOut = 1; break;
            case 3: $this->BG7_WallIn = 1; break;
            case 4: $this->BG8_2SideIn = 1; break;
            case 5: $this->BG9_4SideIn = 1; break;
            default: $this->BG8_2SideIn = 1; break;
        }

        // Запрос исходных данных
        $this->L09 = new L09(
            $SCLight , $VarIspoln , $Orientation , $MaxSide_cm , $MinSide_cm , $FrontImg , $ColorSide , $ColorBack , $Ugol , $MaketImg , $PlenkLic , $PlastLic , $IstochnikSveta);
        //
        $this->BG11_Orientation = $this->L09->J21_Orientation;   // ориентация
        $this->BG12_MaxSide_cm = $this->L09->J22_MaxSide_cm;     // большая сторона, см
        $this->BG13_MinSide_cm = $this->L09->J23_MinSide_cm;     // меньшая сторона, см
        //
        $this->L15_1 = new L15_1($SCLight , $VarIspoln , $Orientation , $MaxSide_cm , $MinSide_cm , $FrontImg , $ColorSide , $ColorBack , $Ugol , $MaketImg , $PlenkLic , $PlastLic , $IstochnikSveta);
        $this->L15_2 = new L15_2($SCLight , $VarIspoln , $Orientation , $MaxSide_cm , $MinSide_cm , $FrontImg , $ColorSide , $ColorBack , $Ugol , $MaketImg , $PlenkLic , $PlastLic , $IstochnikSveta);
        $this->L15_3 = new L15_3($SCLight , $VarIspoln , $Orientation , $MaxSide_cm , $MinSide_cm , $FrontImg , $ColorSide , $ColorBack , $Ugol , $MaketImg , $PlenkLic , $PlastLic , $IstochnikSveta);
        //
        $this->BG14_GlubinaBorta_sm = $this->L15_1->N20_GlubinaBorta_sm(); // Глубина борта, см
    }

    // C light - пленка борт/тыл
    function BJ5_GorizontalRazmer_sm()
    {        //если bg11=1, то bg12, иначе ип13
        return ($this->BG11_Orientation == 1) ? $this->BG12_MaxSide_cm : $this->BG13_MinSide_cm;
    }
    function BJ6_VertikalniiRazmer_sm()
    {        //если bg11=2, то bg12, иначе bg13
        return ($this->BG11_Orientation==2) ? $this->BG12_MaxSide_cm : $this->BG13_MinSide_cm;
    }
    function BJ7_GorizontalRazmer_m()
    {
        return round ($this->BJ5_GorizontalRazmer_sm()/100, 2);
    }
    function BJ8_VertikalniiRazmer_m()
    {
        return round ($this->BJ6_VertikalniiRazmer_sm()/100, 2);
    }
    function BJ10_Razbor4Storoni()
    {        //если bj7=L10_BK55, то 1, иначе 0
        return ($this->BJ7_GorizontalRazmer_m() > L10_BK55_PredGorRazmRamMin_m) ? 1 : 0;
    }
    function BJ11_Razbor4Storoni()
    {        //если bj10=1, то 0, иначе 1
        return ($this->BJ10_Razbor4Storoni() == 1) ? 0 : 1;
    }
    function BJ13_Storona1()
    {        //если bg5+bg6+bg7>0, то 1, иначе 0
        return (($this->BG5_RoofVisorOut+$this->BG6_WallOut+$this->BG7_WallIn) > 0) ? 1 : 0;
    }
    function BJ14_Storoni2()
    {
        return $this->BG8_2SideIn;
    }
    function BJ15_Nerazbor4()
    {
        return $this->BG9_4SideIn*$this->BJ11_Razbor4Storoni();
    }
    function BJ16_Razbor4()
    {
        return $this->BG9_4SideIn*$this->BJ10_Razbor4Storoni();
    }
    function BM5_Streich1m2_grn()
    {
        return L10_U77_PlenkaStrech_20mkm_1m2;
    }
    function BM6_KoefPererasxodaStreicha()
    {
        return L10_BB101_K_PererashStrchObshPlVives;
    }
    function BM7_Skotch1mp_grn()
    {
        return L10_U81_SkotchChinese_1mp;
    }
    function BM9_Perimetr_mp()
    {
        return $this->BJ7_GorizontalRazmer_m() +
               $this->BJ8_VertikalniiRazmer_m() +
               $this->BJ7_GorizontalRazmer_m() +
               $this->BJ8_VertikalniiRazmer_m();
    }
    function BM10_ObchaaPlochad1Storona_m2()
    {
        return $this->BJ7_GorizontalRazmer_m() *
               $this->BJ8_VertikalniiRazmer_m() * 2 +
               $this->BM9_Perimetr_mp() *
               $this->BG14_GlubinaBorta_sm;
    }
    function BM11_ObchaaPlochad2Storoni_m2()
    {
        return $this->BJ7_GorizontalRazmer_m() *
               $this->BJ8_VertikalniiRazmer_m() * 2 +
               $this->BM9_Perimetr_mp() *
               $this->BG14_GlubinaBorta_sm;
    }
    function BM12_ObchaaPlochad4StoroniNerazb_m2()
    {
        return $this->BJ7_GorizontalRazmer_m() *
               $this->BJ8_VertikalniiRazmer_m() * 2 +
               $this->BJ7_GorizontalRazmer_m() *
               $this->BM9_Perimetr_mp();
    }
    function BM13_ObchaaPlochad4StoroniRazb_m2()
    {
        return $this->BJ7_GorizontalRazmer_m() *
               $this->BJ8_VertikalniiRazmer_m() * 2 +
               $this->BM9_Perimetr_mp() *
               $this->BG14_GlubinaBorta_sm * 4;
    }
    function BM15_Streich1Storona_grn()
    {
        return $this->BM10_ObchaaPlochad1Storona_m2() *
               $this->BM5_Streich1m2_grn() *
               $this->BM6_KoefPererasxodaStreicha();
    }
    function BM16_Streich2Storoni_grn()
    {
        return $this->BM11_ObchaaPlochad2Storoni_m2() *
               $this->BM5_Streich1m2_grn() *
               $this->BM6_KoefPererasxodaStreicha();
    }
    function BM17_Streich4StoroniNerazb_grn()
    {
        return $this->BM12_ObchaaPlochad4StoroniNerazb_m2() *
               $this->BM5_Streich1m2_grn() *
               $this->BM6_KoefPererasxodaStreicha();
    }
    function BM18_Streich4StoroniRazb_grn()
    {
        return $this->BM13_ObchaaPlochad4StoroniRazb_m2() *
               $this->BM5_Streich1m2_grn() *
               $this->BM6_KoefPererasxodaStreicha();
    }
    function BM20_Streich1Storona_grn()
    {
        return $this->BM15_Streich1Storona_grn() *
               $this->BJ13_Storona1();
    }
    function BM21_Streich2Storoni_grn()
    {
        return $this->BM16_Streich2Storoni_grn() *
               $this->BJ14_Storoni2();
    }
    function BM22_Streich4StoroniNerazb_grn()
    {
        return $this->BM17_Streich4StoroniNerazb_grn() *
               $this->BJ15_Nerazbor4();
    }
    function BM23_Streich4StoroniRazb_grn()
    {
        return $this->BM18_Streich4StoroniRazb_grn() *
               $this->BJ16_Razbor4();
    }
    function BM24_Streich_grn()
    {
        return $this->BM20_Streich1Storona_grn() +
               $this->BM21_Streich2Storoni_grn() +
               $this->BM22_Streich4StoroniNerazb_grn() +
               $this->BM23_Streich4StoroniRazb_grn();
    }
    function BM25_Streich_mp()
    {
        return $this->BM24_Streich_grn() / $this->BM5_Streich1m2_grn() * 2;
    }
    function BM26_Scotch_mp()
    {
        return $this->BM25_Streich_mp() * L10_BB100_K_RashSkotchStreych;
    }
    function BM27_Scotch_grn()
    {
        return $this->BM26_Scotch_mp() * $this->BM7_Skotch1mp_grn();
    }
    function BP5_TrydoemkostYpakovki1m2_m()
    {
        return L10_BT66_UpakVStrech_1m2;
    }
    function BP7_Storona1_min()
    {
        return $this->BM10_ObchaaPlochad1Storona_m2() * $this->BP5_TrydoemkostYpakovki1m2_m();
    }
    function BP8_Storoni2_min()
    {
        return $this->BM11_ObchaaPlochad2Storoni_m2() * $this->BP5_TrydoemkostYpakovki1m2_m();
    }
    function BP9_Storoni4Nerazb_min()
    {
        return $this->BM12_ObchaaPlochad4StoroniNerazb_m2() * $this->BP5_TrydoemkostYpakovki1m2_m();
    }
    function BP10_Storoni4Razb_min()
    {
        return $this->BM13_ObchaaPlochad4StoroniRazb_m2() * $this->BP5_TrydoemkostYpakovki1m2_m();
    }
    function BP12_Storona1_min()
    {
        return $this->BP7_Storona1_min() * $this->BJ13_Storona1();
    }
    function BP13_Storoni2_min()
    {
        return $this->BP8_Storoni2_min() * $this->BJ14_Storoni2();
    }
    function BP14_Storoni4Nerazb_min()
    {
        return $this->BP9_Storoni4Nerazb_min() * $this->BJ15_Nerazbor4();
    }
    function BP15_Storoni4Razb_min()
    {
        return $this->BP10_Storoni4Razb_min() * $this->BJ16_Razbor4();
    }
    function BP16_Ypakovka_min()
    {
        return $this->BP12_Storona1_min() +
               $this->BP13_Storoni2_min() +
               $this->BP14_Storoni4Nerazb_min() +
               $this->BP15_Storoni4Razb_min();
    }
    function BP17_YpakovkaItogo_grn()
    {        //если bp16<L10_bt65, то L10_bt65, иначе bp16
        return ($this->BP16_Ypakovka_min() < L10_BT65_MinTrudUpakVStreych_min) ?
            L10_BT65_MinTrudUpakVStreych_min : $this->BP16_Ypakovka_min();
    }
    function BS6_PlenkaStreich500mmItogo_mp()
    {
        return round($this->BM25_Streich_mp(), 0);
    }
    function BS7_StoimostMaterialov_grn()
    {
        return round($this->BM24_Streich_grn() + $this->BM27_Scotch_grn(), 0);
    }
    function BS11_TrydoemkostYpakovki_min()
    {
        return round($this->BP17_YpakovkaItogo_grn(), 0);
    }
    function BS12_StoimostRaboti_grn()
    {
        return round($this->BS11_TrydoemkostYpakovki_min() * L10_C67_K1, 0);
    }
    function BS24_Itogo_grn()
    {
        return $this->BS7_StoimostMaterialov_grn() + $this->BS12_StoimostRaboti_grn();
    }
}