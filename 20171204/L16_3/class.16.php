<?php

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 20.07.2017
 * Time: 13:05
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
    { 

	//улица
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
	}
    }
    function AM6_Pomesh()
    { 

	//помещение
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->AM5_Ulica()==0)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function AP6_MenshRazm()
    { 

	//меньший размер, м
	//деление и округление
	//вывод

	return round($this->AJ12_MinSide_cm/100, 2);
    }
    function AM8_PVHKrisha5mm()
    { 

	//пвх крыша 5 мм
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
	}
    }
    function AM9_PVHKrisha4mm()
    { 

	//пвх крыша 4 мм
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
	}
    }
    function AM10_PVHUlica4mm()
    { 

	//пвх улица 4 мм
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
	}
    }
    function AM11_PVHUlica3mm()
    { 

	//пвх улица 3 мм
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
	}
    }
    function AM13_TillPVH()
    { 

	//тыл - пвх
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
	}
    }    
    function AM14_PVHBort()
    { 

	//пвх бортик
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->AJ7_WallIn+$this->AJ9_4SideIn>0)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function AM16_TillPVH5mm()
    {

        //тыл пвх 5 мм
        //умножение
        //вывод

        return $this->AJ5_RoofVisorOut*$this->AM8_PVHKrisha5mm();
    }
    function AM17_TillPVH4mm()
    {

        //тыл пвх 4 мм
        //умножение и прибавление
        //вывод

        return $this->AJ5_RoofVisorOut*$this->AM9_PVHKrisha4mm()+$this->AJ6_WallOut*$this->AM10_PVHUlica4mm();
    }
    function AM18_TillPVH3mm()
    {

        //тыл пвх 3 мм
        //умножение и прибавление
        //вывод

        return $this->AJ6_WallOut*$this->AM11_PVHUlica3mm();
    }
    function AP5_BolshRasm()
    { 

	//больший размер, м
	//деление и округление
	//вывод

	return round($this->AJ11_MaxSide_cm/100, 2);
    }
    function AP6_MenshRasm()
    { 

	//меньший размер, м
	//деление и округление
	//вывод

	return round($this->AJ12_MinSide_cm/100, 2);
    }
    function AP7_PerimTillmp()
    { 

	//периметр тыла, мп
	//прибавление
	//вывод

	return $this->AP5_BolshRasm()+$this->AP6_MenshRasm()+$this->AP5_BolshRasm()+$this->AP6_MenshRasm();
    }
    function AP8_PloshTillm2()
    { 

	//площадь тыла, м2
	//умножение
	//вывод

	return $this->AP5_BolshRasm()*$this->AP6_MenshRasm();
    }
    function AP9_PVH5mm1m2grn()
    { 

	//пвх 5 мм 1 м2, грн
	//значение
	//вывод

	return L10_J25_PVH_5mmS;
    }
    function AQ9_PVH5mm1m2grn()
    {

        //пвх 5 мм 1 м2, грн
        //значение
        //вывод

        return L10_L25_PVH_5mmP;
    }
    function AP10_PVH4mm1m2grn()
    { 

	//пвх 4 мм 1 м2, грн
	//значение
	//вывод

	return L10_J24_PVH_4mmS;
    }
    function AQ10_PVH4mm1m2grn()
    {

        //пвх 4 мм 1 м2, грн
        //значение
        //вывод

        return L10_L24_PVH_4mmP;
    }
    function AP11_PVH3mm1m2grn()
    { 

	//пвх 3 мм 1 м2, грн
	//значение
	//вывод

	return L10_J23_PVH_3mmS;
    }
    function AQ11_PVH3mm1m2grn()
    {

        //пвх 3 мм 1 м2, грн
        //значение
        //вывод

        return L10_L23_PVH_3mmP;
    }
    function AP12_DVP3mm1m2grn()
    { 

	//двп 3 мм 1 м2, грн
	//значение
	//вывод

	return round (L10_J28_DVPWhiteS, 0);
    }
    function AQ12_DVP3mm1m2grn()
    {

        //двп 3 мм 1 м2, грн
        //значение
        //вывод

        return round (L10_L28_DVPWhiteP, 0);
    }
    function AP13_PererashPVH()
    { 

	//перерасход пвх
	//значение
	//вывод

	return L10_BB6_K_PererashodPVH;
    }
    function AP14_PererashDVP()
    { 

	//перерасход двп
	//значение
	//вывод

	return L10_BB9_K_PererashodDVP;
    }
    function AP16_Stoim1mpKleygrn()
    { 

	//стоимость 1 мп клея, грн
	//значение
	//вывод

	return L10_K117_CosmofenPlusPVH_200mlSmp;
    }
    function AP17_Kley1Perimgrn()
    { 

	//клей 1 периметр, грн
	//умножение
	//вывод

	return $this->AP16_Stoim1mpKleygrn()*$this->AP7_PerimTillmp();
    }
    function AP18_Stoim1Samorez()
    { 

	//стоимость 1 самореза
	//значение
	//вывод

	return L10_AR42_Samorez19ZnBur;
    }
    function AP19_KolvoSamorezNa1mpsht()
    { 

	//количество саморезов на 1 мп, шт
	//значение
	//вывод

	return L10_BB60_K_KolSamorezVZadStShtMp;
    }
    function AP20_KolvoSamorezV1Perimsht()
    { 

	//кол саморезов в 1 периметре, шт
	//умножение и округление
	//вывод

	return round ($this->AP7_PerimTillmp()*$this->AP19_KolvoSamorezNa1mpsht(), 0);
    }
    function AP21_StoimSamorez1Perimgrn()
    { 

	//стоимость саморезов 1 перим., грн
	//умножение
	//вывод

	return $this->AP20_KolvoSamorezV1Perimsht()*$this->AP18_Stoim1Samorez();
    }
    function AP23_PVHBort5mmPlusRustm2()
    { 

	//пвх бортик (5 мм) + руст, м2
	//умножение
	//вывод

	return 0.04*$this->AP13_PererashPVH()*$this->AP7_PerimTillmp();
    }
    function AQ23_PVHBort5mmPlusRustm2()
    {

        //пвх бортик (5 мм) + руст, м2
        //умножение
        //вывод

        return 0.04*$this->AQ9_PVH5mm1m2grn()*$this->AP7_PerimTillmp();
    }
    function AP24_PVHBort5mmPlusRustgrn()
    { 

	//пвх бортик (5 мм) + руст, грн
	//умножение
	//вывод

	return $this->AP23_PVHBort5mmPlusRustm2()*$this->AP9_PVH5mm1m2grn();
    }
    function AP26_PVHTillKrishagrn()
    { 

	//пвх тыл крыша, грн
	//умножение и прибавление
	//вывод

	return ($this->AP9_PVH5mm1m2grn()*$this->AM8_PVHKrisha5mm()+$this->AP10_PVH4mm1m2grn()*$this->AM9_PVHKrisha4mm())
        *$this->AP8_PloshTillm2()*$this->AP13_PererashPVH();
    }
    function AQ26_PVHTillKrishagrn()
    {

        //пвх тыл крыша, грн
        //умножение и прибавление
        //вывод

        return ($this->AQ9_PVH5mm1m2grn()*$this->AM8_PVHKrisha5mm()+$this->AQ10_PVH4mm1m2grn()*$this->AM9_PVHKrisha4mm())
            *$this->AP8_PloshTillm2();
    }
    function AP27_PVHTillUlicagrn()
    { 

	//пвх тыл улица, грн
	//умножение и прибавление
	//вывод

	return ($this->AP10_PVH4mm1m2grn()*$this->AM10_PVHUlica4mm()+$this->AP11_PVH3mm1m2grn()*$this->AM11_PVHUlica3mm())*$this->AP8_PloshTillm2()*$this->AP13_PererashPVH();
    }
    function AQ27_PVHTillUlicagrn()
    {

        //пвх тыл улица, грн
        //умножение и прибавление
        //вывод

        return ($this->AQ10_PVH4mm1m2grn()*$this->AM10_PVHUlica4mm()+$this->AQ11_PVH3mm1m2grn()*$this->AM11_PVHUlica3mm())*$this->AP8_PloshTillm2();
    }
    function AP28_PVH4TillPomeshgrn()
    { 

	//пвх 4 тыла помещение, грн
	//умножение и прибавление
	//вывод

	return $this->AP12_DVP3mm1m2grn()*$this->AP8_PloshTillm2()*$this->AP14_PererashDVP()*4;
    }
    function AQ28_PVH4TillPomeshgrn()
    {

        //пвх 4 тыла помещение, грн
        //умножение и прибавление
        //вывод

        return $this->AQ12_DVP3mm1m2grn()*$this->AP8_PloshTillm2()*4;
    }
    function AP29_DVPTillPomeshgrn()
    { 

	//двп тыл помещение, грн
	//умножение
	//вывод

	return $this->AP12_DVP3mm1m2grn()*$this->AP8_PloshTillm2()*$this->AP14_PererashDVP();
    }
    function AQ29_DVPTillPomeshgrn()
    {

        //двп тыл помещение, грн
        //умножение
        //вывод

        return $this->AQ12_DVP3mm1m2grn()*$this->AP8_PloshTillm2();
    }
    function AP31_TillBezBortgrn()
    { 

	//тыл без борта, грн
	//умножение и прибавление
	//вывод

	return $this->AP26_PVHTillKrishagrn()*$this->AJ5_RoofVisorOut+$this->AP27_PVHTillUlicagrn()*$this->AJ6_WallOut+$this->AP29_DVPTillPomeshgrn()*$this->AJ7_WallIn+$this->AP28_PVH4TillPomeshgrn()*$this->AJ9_4SideIn;
    }
    function AQ31_TillBezBortgrn()
    {

        //тыл без борта, грн
        //умножение и прибавление
        //вывод

        return $this->AQ26_PVHTillKrishagrn()*$this->AJ5_RoofVisorOut+$this->AQ27_PVHTillUlicagrn()*$this->AJ6_WallOut+$this->AQ29_DVPTillPomeshgrn()*$this->AJ7_WallIn+$this->AQ28_PVH4TillPomeshgrn()*$this->AJ9_4SideIn;
    }
    function AP32_TillPlusPVHBortEEgrn()
    { 

	//тыл + пвх борт (если есть), грн
	//умножение и прибавление
	//вывод

	return $this->AP31_TillBezBortgrn()+$this->AP24_PVHBort5mmPlusRustgrn()*$this->AM14_PVHBort();
    }
    function AQ32_TillPlusPVHBortEEgrn()
    {

        //тыл + пвх борт (если есть), грн
        //умножение и прибавление
        //вывод

        return $this->AQ31_TillBezBortgrn()+$this->AQ23_PVHBort5mmPlusRustm2()*$this->AM14_PVHBort();
    }
    function AP34_KleyKrishagrn()
    { 

	//клей крыша, грн
	//умножение и прибавление
	//вывод

	return $this->AP17_Kley1Perimgrn()*2*$this->AJ5_RoofVisorOut;
    }
    function AP35_KleyUlicagrn()
    { 

	//клей улица, грн
	//умножение и прибавление
	//вывод

	return $this->AP17_Kley1Perimgrn()*2*$this->AJ6_WallOut;
    }
    function AP36_Kley4StorPomeshgrn()
    { 

	//клей 4 стороны помещение, грн
	//умножение и прибавление
	//вывод

	return $this->AP17_Kley1Perimgrn()*4*$this->AJ9_4SideIn;
    }
    function AP37_Kleygrn()
    { 

	//клей, грн
	//прибавление
	//вывод

	return $this->AP34_KleyKrishagrn()+$this->AP35_KleyUlicagrn()+$this->AP36_Kley4StorPomeshgrn();
    }
    function AP39_SamorezKrishagrn()
    { 

	//саморезы крыша, грн
	//умножение
	//вывод

	return $this->AP21_StoimSamorez1Perimgrn()*$this->AJ5_RoofVisorOut;
    }
    function AP40_SamorezUlicagrn()
    { 

	//саморезы улица, грн
	//умножение
	//вывод

	return $this->AP21_StoimSamorez1Perimgrn()*$this->AJ6_WallOut;
    }
    function AP41_SamorezPomeshgrn()
    { 

	//саморезы помещение, грн
	//умножение
	//вывод

	return $this->AP21_StoimSamorez1Perimgrn()*$this->AJ7_WallIn;
    }
    function AP42_Samorezgrn()
    { 

	//саморезы, грн
	//прибавление
	//вывод

	return $this->AP39_SamorezKrishagrn()+$this->AP40_SamorezUlicagrn()+$this->AP41_SamorezPomeshgrn();
    }
    function AT5_Virez1mpTillmin()
    { 

	//вырезать 1 мп тыла, мин
	//значение
	//вывод

	return L10_BT7_RaskrPVHPolykPryamougl_1mp;
    }
    function AT6_Virez1Tillmin()
    { 

	//вырезать 1 тыл, мин
	//умножение
	//вывод

	return $this->AT5_Virez1mpTillmin()*$this->AP7_PerimTillmp();
    }
    function AT7_PogonRez1mpmin()
    { 

	//погонаж резать 1 мп, мин
	//значение
	//вывод

	return L10_BT8_PVHPogonaj_1mp;
    }
    function AT8_Pogon1Perimmin()
    { 

	//погонаж 1 периметр, мин
	//умножение
	//вывод

	return $this->AT7_PogonRez1mpmin()*$this->AP7_PerimTillmp();
    }
    function AT10_1mpKleyShvamin()
    { 

	//1 мп клеевого шва, мин
	//значение
	//вывод

	return L10_BT14_SborkaKleyShva_1mp;
    }
    function AT11_1PerimKleyShvamin()
    { 

	//1 периметр клеевого шва, мин
	//умножение
	//вывод

	return $this->AT10_1mpKleyShvamin()*$this->AP7_PerimTillmp();
    }
    function AT13_ObkatPVH1mpmin()
    { 

	//обкатать пвх 1 мп, мин
	//значение
	//вывод

	return L10_BT16_ObkatkaKleyShvaPVH_1mp;
    }
    function AT14_ObkatPerimmin()
    { 

	//обкатать периметр, мин
	//умножение
	//вывод

	return $this->AT13_ObkatPVH1mpmin()*$this->AP7_PerimTillmp();
    }
    function AT16_Vkrut1SamorezSermin()
    { 

	//вкрутить 1 саморез (серия), мин
	//значение
	//вывод

	return L10_BT26_VkruchSeriiSamorezov_1sht;
    }
    function AT17_Vkrut1Perimmin()
    { 

	//вкрутить 1 периметр, мин
	//умножение
	//вывод

	return $this->AT16_Vkrut1SamorezSermin()*$this->AP20_KolvoSamorezV1Perimsht();
    }
    function AT19_TillKrUlicamin()
    { 

	//тыл крыша/улица, мин
	//умножение и прибавление
	//вывод

	return $this->AT6_Virez1Tillmin()+$this->AT8_Pogon1Perimmin()*2+$this->AT11_1PerimKleyShvamin()*2+$this->AT14_ObkatPerimmin()+$this->AT17_Vkrut1Perimmin();
    }
    function AT20_TillPomeshmin()
    { 

	//тыл помещение, мин
	//прибавление
	//вывод

	return $this->AT6_Virez1Tillmin()+$this->AT17_Vkrut1Perimmin();
    }
    function AT21_PVH4TillPomeshmin()
    { 

	//пвх 4 тыла помещение, мин
	//прибавление и умножение
	//вывод

	return ($this->AT6_Virez1Tillmin()+$this->AT11_1PerimKleyShvamin()+$this->AT14_ObkatPerimmin())*4;
    }
    function AT23_TillKrmin()
    { 

	//тыл крыша, мин
	//умножение
	//вывод

	return $this->AT19_TillKrUlicamin()*$this->AJ5_RoofVisorOut;
    }
    function AT24_TillUlicamin()
    { 

	//тыл улица, мин
	//умножение
	//вывод

	return $this->AT19_TillKrUlicamin()*$this->AJ6_WallOut;
    }
    function AT25_TillPomeshmin()
    { 

	//тыл помещение, мин
	//умножение
	//вывод

	return $this->AT20_TillPomeshmin()*$this->AJ7_WallIn;
    }
    function AT26_PVH4TillPomeshmin()
    { 

	//пвх 4 тыла помещение, мин
	//умножение
	//вывод

	return $this->AT21_PVH4TillPomeshmin()*$this->AJ9_4SideIn;
    }
    function AT27_SobrTillmin()
    { 

	//собрать тыл, мин
	//прибавление
	//вывод

	return $this->AT23_TillKrmin()+$this->AT24_TillUlicamin()+$this->AT25_TillPomeshmin()+$this->AT26_PVH4TillPomeshmin();
    }
    function AW6_StoimMatgrn()
    { 

	//стоимость материалов, грн
	//прибавление и округление
	//вывод

	return round ($this->AP32_TillPlusPVHBortEEgrn()+$this->AP37_Kleygrn()+$this->AP42_Samorezgrn(), 0);
    }
    function AW10_TrudTillgrn()
    { 

	//трудоемкость тыл , мин
	//округление
	//вывод

	return round ($this->AT27_SobrTillmin(), 0);
    }
    function AW11_StoimRabgrn()
    { 

	//стоимость работы, грн
	//округление и умножение
	//вывод

	return round ($this->AW10_TrudTillgrn()*L10_C67_K1, 0);
    }
    function AW15_TillPVH5mm()
    {

        //тыл пвх 5 мм
        //умножение
        //вывод

        return $this->AM16_TillPVH5mm();
    }
    function AW16_TillPVH4mm()
    {

        //тыл пвх 4 мм
        //умножение и прибавление
        //вывод

        return $this->AM17_TillPVH4mm();
    }
    function AW17_TillPVH3mm()
    {

        //тыл пвх 3 мм
        //умножение и прибавление
        //вывод

        return $this->AM18_TillPVH3mm();
    }
    function AW18_TillDVP()
    {

        //тыл двп
        //умножение и прибавление
        //вывод

        return $this->AM6_Pomesh();
    }
    function AW22_Veskg()
    {

        //вес, кг
        //округление
        //вывод

        return round($this->AQ32_TillPlusPVHBortEEgrn(),1);
    }
    function AW24_Itogogrn()
    { 

	//итого, грн
	//округление и умножение
	//вывод

	return $this->AW6_StoimMatgrn()+$this->AW11_StoimRabgrn();
    }








}

