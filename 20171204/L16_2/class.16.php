<?php

/**
 * Created by PhpStorm.
 * User: Andrii
 * Date: 06.06.2017
 * Time: 23:57
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


    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $MaxSide_cm, $MinSide_cm, $PlastLic)
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
	}
    }
    function V6_FasadAkril()
    { 

	//фасад - акрил
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
	}
    }
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
	}
    }
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
	}
    }
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
	}
    }
    function V12_2Stor()
    { 

	//2 стороны
	//значение
	//вывод

	return $this->S8_2SideIn;
    }
    function V13_4Stor()
    { 

	//4 стороны
	//значение
	//вывод

	return $this->S9_4SideIn;
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
	}
    }
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
	}
    }
    function Y9_Perimrtrm()
    { 

	//периметр, м
	//прибавление
	//вывод

	return $this->Y5_BolshRm()+$this->Y6_MenshRm()+$this->Y5_BolshRm()+$this->Y6_MenshRm();
    }
    function Y10_4Uglam()
    { 

	//4 угла, м
	//прибавление и умножение
	//вывод

	return 0.48 + 0.48*$this->S8_2SideIn;
    }
    function Y11_Perim4Bortm()
    { 

	//периметр 4 бортов, м
	//прибавление и умножение
	//вывод

	return $this->Y9_Perimrtrm()*2+$this->Y10_4Uglam();
    }
    function Y14_Stoim1m2PVH5mmgrn()
    { 

	//стоимость 1 м2 пвх 5 мм, грн
	//значение
	//вывод

	return L10_J25_PVH_5mmS;
    }
    function Z14_Stoim1m2PVH5mmgrn()
    {

        //стоимость 1 м2 пвх 5 мм, грн
        //значение
        //вывод

        return L10_L25_PVH_5mmP;
    }
    function Y15_Stoim1m2PVH4mmgrn()
    { 

	//стоимость 1 м2 пвх 4 мм, грн
	//значение
	//вывод

	return L10_J24_PVH_4mmS;
    }
    function Z15_Stoim1m2PVH4mmgrn()
    {

        //стоимость 1 м2 пвх 4 мм, грн
        //значение
        //вывод

        return L10_L24_PVH_4mmP;
    }
    function Y16_Stoim1m2PVHBortgrn()
    { 

	//стоимость 1 м2 пвх борт, грн
	//арифметические действия
	//вывод

	return $this->Y14_Stoim1m2PVH5mmgrn()*$this->V8_Ulica()+$this->Y15_Stoim1m2PVH4mmgrn()*$this->V9_Pomesh();
    }
    function Z16_Stoim1m2PVHBortgrn()
    {

        //стоимость 1 м2 пвх борт, грн
        //арифметические действия
        //вывод

        return $this->Z14_Stoim1m2PVH5mmgrn()*$this->V8_Ulica()+$this->Z15_Stoim1m2PVH4mmgrn()*$this->V9_Pomesh();
    }
    function Y17_PereeashPVH()
    { 

	//перерасход пвх
	//значение
	//вывод

	return L10_BB6_K_PererashodPVH;
    }
    function Y18_Kley1mpOdnShvgrn()
    { 

	//клей 1 мп одинарного шва, грн
	//значение
	//вывод

	return L10_K117_CosmofenPlusPVH_200mlSmp;
    }
    function Y19_Kley1Perimgrn()
    { 

	//клей 1 периметр, грн
	//умножение
	//вывод

	return $this->Y18_Kley1mpOdnShvgrn()*$this->Y9_Perimrtrm();
    }
    function Y20_Kley4Uglagrn()
    { 

	//клей 4 угла, грн
	//арифметические действия
	//вывод

	return 0.48*$this->Y18_Kley1mpOdnShvgrn()+0.48*$this->Y18_Kley1mpOdnShvgrn()*$this->V12_2Stor();
    }
    function Y22_UlicaBortm2()
    { 

	//улица борт, м2
	//умножение
	//вывод

	return 0.14*$this->Y9_Perimrtrm()*$this->Y17_PereeashPVH();
    }
    function Z22_UlicaBortm2()
    {

        //улица борт, м2
        //умножение
        //вывод

        return 0.14*$this->Y9_Perimrtrm()*$this->Z14_Stoim1m2PVH5mmgrn();
    }
    function Y23_StenaPomeshBortm2()
    { 

	//стена помещение борт, м2
	//умножение
	//вывод

	return 0.16*$this->Y9_Perimrtrm()*$this->Y17_PereeashPVH();
    }
    function Z23_StenaPomeshBortm2()
    {

        //стена помещение борт, м2
        //умножение
        //вывод

        return 0.16*$this->Y9_Perimrtrm()*$this->Z15_Stoim1m2PVH4mmgrn();
    }
    function Y24_2StorPomeshBortm2()
    { 

	//2 стороны помещение борт. м2
	//умножение
	//вывод

	return 0.28*$this->Y9_Perimrtrm()*$this->Y17_PereeashPVH();
    }
    function Z24_2StorPomeshBortm2()
    {

        //2 стороны помещение борт. м2
        //умножение
        //вывод

        return 0.28*$this->Y9_Perimrtrm()*$this->Z15_Stoim1m2PVH4mmgrn();
    }
    function Y25_4StorPomeshBortm2()
    { 

	//4 стороны помещение борт, м2
	//умножение
	//вывод

	return (0.14*$this->Y7_GorisRasm()+0.18*$this->Y8_VerticalRasm())*2*$this->Y17_PereeashPVH()*4;
    }
    function Z25_4StorPomeshBortm2()
    {

        //4 стороны помещение борт, м2
        //умножение
        //вывод

        return (0.14*$this->Y7_GorisRasm()+0.18*$this->Y8_VerticalRasm())*2*4*$this->Z15_Stoim1m2PVH4mmgrn();
    }
    function Y27_KrKozUlicaBortm2()
    { 

	//крыша/козырек улица борт, м2
	//умножение
	//вывод

	return $this->Y22_UlicaBortm2()*$this->S5_RoofVisorOut;
    }
    function Z27_KrKozUlicaBortm2()
    {

        //крыша/козырек улица борт, м2
        //умножение
        //вывод

        return $this->Z22_UlicaBortm2()*$this->S5_RoofVisorOut;
    }
    function Y28_StenaUlicaBortm2()
    { 

	//стена улица борт, м2
	//умножение
	//вывод

	return $this->Y22_UlicaBortm2()*$this->S6_WallOut;
    }
    function Z28_StenaUlicaBortm2()
    {

        //стена улица борт, м2
        //умножение
        //вывод

        return $this->Z22_UlicaBortm2()*$this->S6_WallOut;
    }
    function Y29_StenaPomeshBortm2()
    { 

	//стена помещение борт, м2
	//умножение
	//вывод

	return $this->Y23_StenaPomeshBortm2()*$this->S7_WallIn;
    }
    function Z29_StenaPomeshBortm2()
    {

        //стена помещение борт, м2
        //умножение
        //вывод

        return $this->Z23_StenaPomeshBortm2()*$this->S7_WallIn;
    }
    function Y30_2StorPomeshBortm2()
    { 

	//2 стороны помещение борт, м2
	//умножение
	//вывод

	return $this->Y24_2StorPomeshBortm2()*$this->S8_2SideIn;
    }
    function Z30_2StorPomeshBortm2()
    {

        //2 стороны помещение борт, м2
        //умножение
        //вывод

        return $this->Z24_2StorPomeshBortm2()*$this->S8_2SideIn;
    }
    function Y31_4StorPomeshBortm2()
    { 

	//4 стороны помещение борт, м2
	//умножение
	//вывод

	return $this->Y25_4StorPomeshBortm2()*$this->S9_4SideIn;
    }
    function Z31_4StorPomeshBortm2()
    {

        //4 стороны помещение борт, м2
        //умножение
        //вывод

        return $this->Z25_4StorPomeshBortm2()*$this->S9_4SideIn;
    }
    function Y32_PVHPlastBortm2()
    { 

	//пвх пластик борт, м2
	//прибавление
	//вывод

	return $this->Y27_KrKozUlicaBortm2()+$this->Y28_StenaUlicaBortm2()+$this->Y29_StenaPomeshBortm2()+
        $this->Y30_2StorPomeshBortm2()+$this->Y31_4StorPomeshBortm2();
    }
    function Z32_PVHPlastBortm2()
    {

        //пвх пластик борт, м2
        //прибавление
        //вывод

        return $this->Z27_KrKozUlicaBortm2()+$this->Z28_StenaUlicaBortm2()+$this->Z29_StenaPomeshBortm2()+
            $this->Z30_2StorPomeshBortm2()+$this->Z31_4StorPomeshBortm2();
    }
    function Y34_KrRozUlicaBortgrn()
    { 

	//крыша/козырек улица борт, грн
	//умножение
	//вывод

	return $this->Y22_UlicaBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S5_RoofVisorOut;
    }
    function Y35_StenaUlicaBortgrn()
    { 

	//стена улица борт, грн
	//умножение
	//вывод

	return $this->Y22_UlicaBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S6_WallOut;
    }
    function Y36_StenaPomeshBortgrn()
    { 

	//стена помещение борт, грн
	//умножение
	//вывод

	return $this->Y23_StenaPomeshBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S7_WallIn;
    }
    function Y37_2StorPomeshBortgrn()
    { 

	//2 стороны помещение борт, грн
	//умножение
	//вывод

	return $this->Y24_2StorPomeshBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S8_2SideIn;
    }
    function Y38_4StorPomeshBortgrn()
    { 

	//4 стороны помещение борт, грн
	//умножение
	//вывод

	return $this->Y25_4StorPomeshBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S9_4SideIn;
    }
    function Y39_PVHPlastBortgrn()
    { 

	//пвх пластик борт, грн
	//округление и прибавление
	//вывод

	return round($this->Y34_KrRozUlicaBortgrn()+$this->Y35_StenaUlicaBortgrn()+$this->Y36_StenaPomeshBortgrn()+
        $this->Y37_2StorPomeshBortgrn()+$this->Y38_4StorPomeshBortgrn(), 0);
    }
    function Y41_KleyKrKozgrn()
    { 

	//клей крыша/козырек, грн
	//прибавление и умножение
	//вывод

	return ($this->Y19_Kley1Perimgrn()+$this->Y20_Kley4Uglagrn())*$this->S5_RoofVisorOut;
    }
    function Y42_KleyStenaUlicagrn()
    { 

	//клей стена улица, грн
	//прибавление и умножение
	//вывод

	return ($this->Y19_Kley1Perimgrn()+$this->Y20_Kley4Uglagrn())*$this->S6_WallOut;
    }
    function Y43_KleyStenaPomeshgrn()
    { 

	//клей стена помещение, грн
	//прибавление и умножение
	//вывод

	return ($this->Y19_Kley1Perimgrn()*2+$this->Y20_Kley4Uglagrn())*$this->S7_WallIn;
    }
    function Y44_Kley2StorPomeshgrn()
    { 

	//клей 2 стороны помещение, грн
	//прибавление и умножение
	//вывод

	return ($this->Y19_Kley1Perimgrn()*2+$this->Y20_Kley4Uglagrn())*$this->S8_2SideIn;
    }
    function Y45_Kley4StorPomeshgrn()
    { 

	//клей 4 стороны помещение, грн
	//прибавление и умножение
	//вывод

	return ($this->Y19_Kley1Perimgrn()*2+$this->Y20_Kley4Uglagrn())*4*$this->S9_4SideIn;
    }
    function Y46_Kleygrn()
    { 

	//клей грн
	//прибавление и умножение
	//вывод

	return $this->Y41_KleyKrKozgrn()+$this->Y42_KleyStenaUlicagrn()+$this->Y43_KleyStenaPomeshgrn()+
        $this->Y44_Kley2StorPomeshgrn()+$this->Y45_Kley4StorPomeshgrn();
    }
    function AC5_VirezRust1Permin()
    { 

	//вырезать руст 1 периметр, мин
	//умножение
	//вывод

	return $this->Y9_Perimrtrm()*L10_BT8_PVHPogonaj_1mp;
    }
    function AC6_Virez4PVHBortmin()
    { 

	//вырезать 4 пвх борта, мин
	//умножение
	//вывод

	return $this->Y11_Perim4Bortm()*L10_BT6_RaskrAkrylPryamougl_1mp;
    }
    function AC7_VkleyRust1Permin()
    { 

	//вклеить руст 1 периметр, мин
	//умножение
	//вывод

	return $this->Y9_Perimrtrm()*L10_BT14_SborkaKleyShva_1mp;
    }    
    function AC8_SobrNaKley4Bortmin()
    { 

	//собрать на клею 4 борта, мин
	//умножение
	//вывод

	return $this->Y10_4Uglam()*2*L10_BT14_SborkaKleyShva_1mp;
    }
    function AC10_KrKozUlicaBortmin()
    { 

	//крыша/козырек улица борт, мин
	//прибавление и умножение
	//вывод

	return $this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()+$this->AC5_VirezRust1Permin()*
        $this->V5_FasadPolik()+$this->AC8_SobrNaKley4Bortmin()+$this->AC7_VkleyRust1Permin()+
        $this->AC7_VkleyRust1Permin()*$this->V5_FasadPolik();
    }
    function AC11_StenaUlicaBortmin()
    { 

	//стена улица борт, мин
	//прибавление и умножение
	//вывод

	return $this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()+$this->AC5_VirezRust1Permin()*
        $this->V5_FasadPolik()+$this->AC8_SobrNaKley4Bortmin()+$this->AC7_VkleyRust1Permin()+
        $this->AC7_VkleyRust1Permin()*$this->V5_FasadPolik();
    }
    function AC12_StenaPomeshBortmin()
    { 

	//стена помещение борт, мин
	//прибавление и умножение
	//вывод

	return $this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()*2+$this->AC5_VirezRust1Permin()*2*
        $this->V5_FasadPolik()+$this->AC8_SobrNaKley4Bortmin()+$this->AC7_VkleyRust1Permin()*2+
        $this->AC7_VkleyRust1Permin()*2*$this->V5_FasadPolik();
    }
    function AC13_2StorPomeshBortmin()
    { 

	//2 стороны помещение борт, мин
	//прибавление и умножение
	//вывод

	return $this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()*2+$this->AC5_VirezRust1Permin()*2*
        $this->V5_FasadPolik()+$this->AC8_SobrNaKley4Bortmin()+$this->AC7_VkleyRust1Permin()*2+
        $this->AC7_VkleyRust1Permin()*2*$this->V5_FasadPolik();
    }
    function AC14_4StorPomeshBortmin()
    { 

	//4 стороны помещение борт, мин
	//прибавление и умножение
	//вывод

	return ($this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()*2+$this->AC8_SobrNaKley4Bortmin()+
            $this->AC7_VkleyRust1Permin()*2)*4;
    }
    function AC16_KrKozUlicaBortmin()
    { 

	//крыша/козырек улица борт, мин
	//умножение
	//вывод

	return $this->AC10_KrKozUlicaBortmin()*$this->S5_RoofVisorOut;
    }
    function AC17_StenaUlicaBortmin()
    { 

	//стена улица борт, мин
	//умножение
	//вывод

	return $this->AC11_StenaUlicaBortmin()*$this->S6_WallOut;
    }
    function AC18_StenaPomeshBortmin()
    { 

	//стена помещение борт, мин
	//умножение
	//вывод

	return $this->AC12_StenaPomeshBortmin()*$this->S7_WallIn;
    }
    function AC19_2StorPomeshBortmin()
    { 

	//2 стороны помещение борт, мин
	//умножение
	//вывод

	return $this->AC13_2StorPomeshBortmin()*$this->S8_2SideIn;
    }
    function AC20_4StorPomeshBortmin()
    { 

	//4 стороны помещение борт, мин
	//умножение
	//вывод

	return $this->AC14_4StorPomeshBortmin()*$this->S9_4SideIn;
    }
    function AC21_SobrPVHBortmin()
    { 

	//собрать пвх борт, мин
	//прибавление
	//вывод

	return $this->AC16_KrKozUlicaBortmin()+$this->AC17_StenaUlicaBortmin()+$this->AC18_StenaPomeshBortmin()+
        $this->AC19_2StorPomeshBortmin()+$this->AC20_4StorPomeshBortmin();
    }
    function AF5_PVHPlastm2()
    { 

	//пвх пластик, м2
	//округление
	//вывод

	return round($this->Y32_PVHPlastBortm2(), 1);
    }
    function AF6_StoimMatgrn()
    { 

	//стоимость материалов, грн
	//округление и прибавление
	//вывод

	return round($this->Y39_PVHPlastBortgrn()+$this->Y46_Kleygrn(), 0);
    }
    function AF10_TrudBortgrn()
    { 

	//трудоемкость борт , мин
	//округление
	//вывод

	return round($this->AC21_SobrPVHBortmin(), 0);
    }
    function AF11_StoimRabgrn()
    { 

	//стоимость работы, грн
	//округление и умножение
	//вывод

	return round($this->AF10_TrudBortgrn()*L10_C67_K1, 0);
    }
    function AF22_Veskg()
    {

        //вес, кг
        //округление
        //вывод

        return round($this->Z32_PVHPlastBortm2(), 1);
    }
    function AF24_StoimRabgrn()
    { 

	//итого, грн
	//прибавление
	//вывод

	return $this->AF6_StoimMatgrn()+$this->AF11_StoimRabgrn();
    }




    





}

