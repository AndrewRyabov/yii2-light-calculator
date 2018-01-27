<?php

/**
 * Created by PhpStorm.
 * User: Anrew
 * Date: 27.07.2017
 * Time: 10:48
 */
class L17
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
	//значение
	//вывод

	return L10_AR48_Kronsht_4x4;
    }
    function AQ19_Kronsht4x41shtgrn()
    {

        //кронштейн 4*4    1 шт, грн
        //значение
        //вывод

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