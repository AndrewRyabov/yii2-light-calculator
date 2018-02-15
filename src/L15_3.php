<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 13.02.2018
 * Time: 15:08
 */
class L15
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
    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $BolshStorona_cm,
                                $MenshStorona_cm, $LicIzobr, $MaketIzobr, $PlenkaLic,$PlenkZatazkEkon_grn)
    {
        // Заполнение входных данных.
        $this->AQ5_RoofVisorOut = $RoofVisorOut;
        $this->AQ6_WallOut = $WallOut;
        $this->AQ7_WallIn = $WallIn;
        $this->AQ8_SideIn2 = $SideIn2;
        $this->AQ9_SideIn4 = $SideIn4;

        $this->AQ11_BolshStorona_cm = $BolshStorona_cm;
        $this->AQ12_MenshStorona_cm = $MenshStorona_cm;
        $this->AQ13_LicIzobr = $LicIzobr;

        $this->AQ15_MaketIzobr = $MaketIzobr;
        $this->AQ16_PlenkaLic = $PlenkaLic;

        $this->AQ18_PlenkZatazkEkon_grn=$PlenkZatazkEkon_grn;

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