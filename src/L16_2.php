<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 22.02.2018
 * Time: 17:08
 */
class L16
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

    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $MaxSide_cm, $MinSide_cm, $PlastLic,
                                $IstocknikSveta,$LeviiVerxUgol,
                                $PraviiVerxUgol,$LeviiNizhniiUgol,
                                $PraviiNizhniiUgol)
    {
        // Заполнение входных данных.
	$this->S5_RoofVisorOut = $RoofVisorOut;
	$this->S6_WallOut = $WallOut;
	$this->S7_WallIn = $WallIn;
	$this->S8_2SideIn = $SideIn2;
	$this->S9_4SideIn = $SideIn4;

	$this->S11_Orientation = $Orientation;
	$this->S12_MaxSide_cm = $MaxSide_cm;
	$this->S13_MinSide_cm = $MinSide_cm;

	$this->S15_PlastLic = $PlastLic;
    $this->S16_IstocknikSveta=$IstocknikSveta;
    $this->S19_LeviiVerxUgol=$LeviiVerxUgol;
    $this->S20_PraviiVerxUgol=$PraviiVerxUgol;
    $this->S21_LeviiNizhniiUgol=$LeviiNizhniiUgol;
    $this->S22_PraviiNizhniiUgol=$PraviiNizhniiUgol;
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

