<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 19.01.2018
 * Time: 19:43
 */
class L15
{
    // Входные параметры:
    public $B5_RoofVisorOut; // крыша/козырек улица
    public $B6_WallOut; // стена улица
    public $B7_WallIn; // стена помещение
    public $B8_2SideIn; // 2 стороны помещение
    public $B9_4SideIn; // 4 стороны помещение

    public $B11_Orientation; // ориентация
    public $B12_MaxSide_cm; // большая сторона, см
    public $B13_MinSide_cm; // меньшая сторона, см
    public $B14_ColorSide; // цвет бортов
    public $B15_ColorBack; // цвет тыла
    public $B17_IstochnikSveta; // источник света
    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $MaxSide_cm, $MinSide_cm, $ColorSide, $ColorBack, $IstochnikSveta)
    {
        // Заполнение входных данных.
        $this->B5_RoofVisorOut = $RoofVisorOut;
        $this->B6_WallOut = $WallOut;
        $this->B7_WallIn = $WallIn;
        $this->B8_2SideIn = $SideIn2;
        $this->B9_4SideIn = $SideIn4;

        $this->B11_Orientation = $Orientation;
        $this->B12_MaxSide_cm = $MaxSide_cm;
        $this->B13_MinSide_cm = $MinSide_cm;
        $this->B14_ColorSide = $ColorSide;
        $this->B15_ColorBack = $ColorBack;
        $this->B17_IstochnikSveta=&$IstochnikSveta;
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

        if ($this->B5_RoofVisorOut+$this->B6_WallOut+$this->B7_WallIn > 0)
        {
            return 1;
        }
        else{
            return 0;
        }

    }
    function E12_BolchiiRazmerBolee400sm()
    {
        //если b12>bk11*100 то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->B12_MaxSide_cm > L10_BK11_GranichnaaDlinaSvazUvelVisotiBorta*100)
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
        if ($this->B13_MinSide_cm > L10_BK10_GranichnaaVisotaSvazUvelVisotiBorta*100)
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
    return L10_BK7_GlubinaBort1StorViveskaLentiDiod_m;
}
    function E17_GlubinaBorta1StoronaLampi()
{
    //вывод
    return L10_BK6_GlubinaBort1StorViveskaLampi_m;
}
    function E18_GlubinaBorta2Storoni_m()
    {
        //вывод
        return L10_BK8_GlubinaBort2StorViveskaLentiDiod_m;
    }
    function E19_GlubinaDopolniteLnaa()
    {
        //вывод
        return L10_BK9_GlubinaDopDlaVivesokBolee4m;
    }
    function E20_GlubinaBorta_m()
    {   //сложениеи умеожение
        //вывод
        return $this->E16_GlubinaBorta1StoronaDioda()*$this->E6_FilmBack()*$this->E11_Flag1Storoni()+$this->E17_GlubinaBorta1StoronaLampi()*$this->E5_FillSide()*$this->E11_Flag1Storoni()+$this->E18_GlubinaBorta2Storoni_m()*$this->B8_2SideIn+$this->E16_GlubinaBorta1StoronaDioda()*$this->B9_4SideIn+$this->E19_GlubinaDopolniteLnaa()*$this->E14_FlagYvelecheniaBortaDla1Stor();
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

