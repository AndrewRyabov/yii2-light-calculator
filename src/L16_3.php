<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 25.02.2018
 *
 * Time: 09:20
 */
class L16
{
    // Входные параметры:
    public $AJ5_RoofVisorOut; // крыша/козырек улица
    public $AJ6_WallOut; // стена улица
    public $AJ7_WallIn; // стена помещение
    public $AJ8_2SideIn; // 2 стороны помещение
    public $AJ9_4SideIn; // 4 стороны помещение

    public $AJ11_MaxSide_cm; // большая сторона, см
    public $AJ12_MinSide_cm; // меньшая сторона, см


    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $MaxSide_cm, $MinSide_cm)

    {
        // Заполнение входных данных.
	$this->AJ5_RoofVisorOut = $RoofVisorOut;
	$this->AJ6_WallOut = $WallOut;
	$this->AJ7_WallIn = $WallIn;
	$this->AJ8_2SideIn = $SideIn2;
	$this->AJ9_4SideIn = $SideIn4;

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
	return $this->AT6_Virez1Till_min()+$this->AT17_TillPomesh_min();
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

