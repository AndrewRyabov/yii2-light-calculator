<?php

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 21.06.2017
 * Time: 14:08
 */
class L15
{
    // Входные параметры:
    public $R5_RoofVisorOut; // крыша/козырек улица
    public $R6_WallOut; // стена улица
    public $R7_WallIn; // стена помещение
    public $R8_2SideIn; // 2 стороны помещение
    public $R9_4SideIn; // 4 стороны помещение

    public $R11_BolshStorona_cm; // большая сторона, см
    public $R12_MenshStorona_cm; // меньшая сторона, см
    public $R13_LicIzobr; // лицевое изображение

    public $R15_MaketIzobr; // макет изображения
    public $R16_PlenkaLic; // пленка лицевая

    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $BolshStorona_cm,
                                $MenshStorona_cm, $LicIzobr, $MaketIzobr, $PlenkaLic)
    {
        // Заполнение входных данных.
        $this->R5_RoofVisorOut = $RoofVisorOut;
        $this->R6_WallOut = $WallOut;
        $this->R7_WallIn = $WallIn;
        $this->R8_2SideIn = $SideIn2;
        $this->R9_4SideIn = $SideIn4;

        $this->R11_BolshStorona_cm = $BolshStorona_cm;
        $this->R12_MenshStorona_cm = $MenshStorona_cm;
        $this->R13_LicIzobr = $LicIzobr;

        $this->R15_MaketIzobr = $MaketIzobr;
        $this->R16_PlenkaLic = $PlenkaLic;

    }

    // C light - фасад пленка

function U6_2Storony()
    {
	//2 стороны (1-да/0-нет)
	//вывод

	return $this->R8_2SideIn;
    }
function U7_4Storony()
    {
	//4 стороны (1-да/0-нет)
	//вывод

	return $this->R9_4SideIn;
    }
function U5_1Storona()
    {
	//1 сторона (1-да/0-нет)
	//если 2 стороны = 0 и 4 стороны = 0, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->U6_2Storony() == 0 and $this->U7_4Storony() == 0)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U9_PlenkaFasadEst()
    {
	//пленка фасад есть (1-да/0-нет)
	//если лицевое изображение = 1, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R13_LicIzobr == 1)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U10_DesignCreate()
    {
	//дизайн создать (1-да/0-нет)
	//если лицевое изображение = 1 и макет изображения = 2, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R13_LicIzobr == 1 and $this->R15_MaketIzobr == 2)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U11_DesignCheck()
    {
	//дизайн проверить (1-да/0-нет)
	//если лицевое изображение = 1 и макет изображения = 1, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R13_LicIzobr == 1 and $this->R15_MaketIzobr == 1)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U13_FullColorPhoto()
    {
	//полноцвет фото (1-да/0-нет)
	//пленка лицевая = 1, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 1)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U14_FullColorPhotoPlusLamin()
    {
	//полноцвет фото + ламинат (1-да/0-нет)
	//пленка лицевая = 2, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 2)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U15_FullColor720()
    {
	//полноцвет 720 (1-да/0-нет)
	//пленка лицевая = 3, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 3)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U16_FullColor720PlusLamin()
    {
	//полноцвет 720 + ламинат (1-да/0-нет)
	//пленка лицевая = 4, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 4)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U17_EconWhitePlusApplication()
    {
	//экон, белый + аппликация (1-да/0-нет)
	//пленка лицевая = 5, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 5)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U18_EconWhitePlusProrez()
    {
	//экон, цветной + прорез (1-да/0-нет)
	//пленка лицевая = 6, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 6)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U19_EconColorfullPlusApp()
    {
	//экон, цветной + аппликация (1-да/0-нет)
	//пленка лицевая = 7, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 7)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U20_LWhitePlusApp()
    {
	//свет, белый + аппликация (1-да/0-нет)
	//пленка лицевая = 8, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 8)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U21_LColorfullPlusProrez()
    {
	//свет, цветной + прорез (1-да/0-нет)
	//пленка лицевая = 9, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 9)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U22_LColorfullPlusApp()
    {
	//свет, цветной + аппликация (1-да/0-нет)
	//пленка лицевая = 10, то вернуть 1
	//иначе - вернуть 0
	//вывод

        if ($this->R16_PlenkaLic == 10)
	{
        return 1;
	}
        else
	{
	return 0;
	}
     }
function U24_FasadColorfullPlenka()
    {
	//фасад цветная пленка (1-да/0-нет)
	//прибавление и умножение переменных
	//вывод

	return ($this->U17_EconWhitePlusApplication()+$this->U18_EconWhitePlusProrez()+$this->U19_EconColorfullPlusApp()+$this->U20_LWhitePlusApp()+$this->U21_LColorfullPlusProrez()+$this->U22_LColorfullPlusApp())*$this->U9_PlenkaFasadEst();
     }
function U26_Svetorass()
    {
	//светорассеивающая (1-да/0-нет)
	//прибавление переменных
	//вывод

	return $this->U20_LWhitePlusApp()+$this->U21_LColorfullPlusProrez()+$this->U22_LColorfullPlusApp();
     }
function U27_KUdorojLRitrama()
    {
	//коэф удорожания  свет "Ritrama" (1-да/0-нет)
	//если светорассеивающая = 1, то вывести L10_U13_RitramaTRLSK
	//иначе - вывести 1
	//вывод

	if ($this->U26_Svetorass() == 1)
	{
	return L10_U13_RitramaTRLSK;
	}
	else
	{
	return 1;
	}

    }

function U29_BolshStorNeBol30cm()
    {
	//большая сторона не более 30 см
	//если большая сторона, см <= 30, то вернуть 1
	//иначе - вернуть 0
	//вывод

	if ($this->R11_BolshStorona_cm <= 30)
	{
	return 1;
	}
	else
	{
	return 0;
	}

     }
function U30_BolshStorBol60cm()
    {
	//большая сторона более 60 см
	//если большая сторона, см > 60, то вернуть 1
	//иначе - вернуть 0
	//вывод

	if ($this->R11_BolshStorona_cm > 60)
	{
	return 1;
	}
	else
	{
	return 0;
	}

     }
function U31_BolshStorNeBol60cm()
    {
	//большая сторона не более 60 см
	//если большая сторона, см <= 60, то вернуть 1
	//иначе - вернуть 0
	//вывод

	if ($this->R11_BolshStorona_cm <= 60)
	{
	return 1;
	}
	else
	{
	return 0;
	}

     }
function U33_BolshStorNeBol120cm()
    {
	//большая сторона не более 120 см
	//если большая сторона, см <= 120, то вернуть 1
	//иначе - вернуть 0
	//вывод

	if ($this->R11_BolshStorona_cm <= 120)
	{
	return 1;
	}
	else
	{
	return 0;
	}

     }
function U32_BolshBol60cmAndMen120cm()
    {
	//боль более 60 см и менее 120 см
	//перемножение переменных
	//вывод

        return $this->U30_BolshStorBol60cm()*$this->U33_BolshStorNeBol120cm();
     }
function U34_BolshStorBol120cm()
    {
	//большая сторона более 120 см
	//если большая сторона, см > 120, то вернуть 1
	//иначе - вернуть 0
	//вывод

	if ($this->R11_BolshStorona_cm > 120)
	{
	return 1;
	}
	else
	{
	return 0;
	}

     }
function U35_MenshStorNeBol60cm()
    {
	//меньшая сторона не более 60 см
	//меньшая сторона, см <= 60, то вернуть 1
	//иначе - вернуть 0
	//вывод

	if ($this->R12_MenshStorona_cm <= 60)
	{
	return 1;
	}
	else
	{
	return 0;
	}

     }
function U36_MenshStorBol60cm()
    {
	//меньшая сторона более 60 см
	//меньшая сторона, см > 60, то вернуть 1
	//иначе - вернуть 0
	//вывод

	if ($this->R12_MenshStorona_cm > 60)
	{
	return 1;
	}
	else
	{
	return 0;
	}

     }
function U37_BolshBol120cmMenshMen60cm()
    {
	//боль более 120 см, мень менее 60 см
	//перемножение переменных
	//вывод

        return $this->U34_BolshStorBol120cm()*$this->U35_MenshStorNeBol60cm();
     }
function U38_BolshBol120cmMenshBol60cm()
    {
	//боль более 120 см, мень более 60 см
	//перемножение переменных
	//вывод

        return $this->U34_BolshStorBol120cm()*$this->U36_MenshStorBol60cm();
     }
function X5_BolshStor_m()
    {
	//большая сторона, м
	//деление и округление
	//вывод

        return round($this->R11_BolshStorona_cm/100, 2);
     }
function X5_BolshStorm()
    {
	//большая сторона, м
	//деление и округление
	//вывод

        return round($this->R11_BolshStorona_cm/100, 2);
     }
function X6_MenshStorm()
    {
	//меньшая сторона, м
	//деление и округление
	//вывод

        return round($this->R12_MenshStorona_cm/100, 2);
     }
function X8_KolFasadov()
    {
	//количество фасадов
	//умножение и прибавление
	//вывод

        return 1*$this->U5_1Storona()+2*$this->U6_2Storony()+4*$this->U7_4Storony();
     }
function X9_PloshFasadam2()
    {
	//площадь фасада, м2
	//умножение
	//вывод

        return $this->X5_BolshStorm()*$this->X6_MenshStorm();
     }
function X10_PloshAllFasadovm2()
    {
	//площадь всех фасадов, м2
	//умножение
	//вывод

        return $this->X9_PloshFasadam2()*$this->X8_KolFasadov();
     }
function X11_RaschPFasadDlTrudm2()
    {
	//расчетная площ. фасадов для трудоем., м2
	//если площадь всех фасадов, м2 > L10_BT32_MinCalcSqureFullColor_m2, то вернуть площадь всех фасадов, м2
	//иначе - вернуть L10_BT32_MinCalcSqureFullColor_m2
	//вывод

	if ($this->X10_PloshAllFasadovm2() > L10_BT32_MinCalcSqureFullColor_m2)
	{
	return $this->X10_PloshAllFasadovm2();
	}
	else
	{
	return L10_BT32_MinCalcSqureFullColor_m2;
	}
    }
function X12_PlenkaDlAppm2()
    {
	//пленка для аппликации, м2
	//умножение
	//вывод

        return $this->X8_KolFasadov()*$this->X9_PloshFasadam2()*L10_BB93_K_PloshFasadPloshPlenkDlApp;
     }
function X13_PlenkaDlAppgrn()
    {
	//пленка для аппликации, грн.
	//умножение
	//вывод

        return $this->X12_PlenkaDlAppm2()*L10_U12_RitramaM300E*$this->U27_KUdorojLRitrama();
     }
function X14_PerimetrIzobrmp()
    {
	//периметр изображения, мп
	//прибавление и умножение
	//вывод

        return ($this->X5_BolshStorm()+$this->X6_MenshStorm()+$this->X5_BolshStorm()+$this->X6_MenshStorm())*$this->X8_KolFasadov();
     }
function X15_DlinaResamp()
    {
	//длинна реза, мп
	//умножение
	//вывод

        return $this->X14_PerimetrIzobrmp()*L10_BB95_K_PerimVivesDlinaResaPlot;
     }
function X16_StoimRezamp()
    {
	//стоимость реза, мп
	//умножение
	//вывод

        return $this->X15_DlinaResamp()*L10_U27_PlotterCutLexx;
     }
function X17_PlenkaMontajm2()
    {
	//пленка монтажная, м2
	//умножение
	//вывод

        return $this->X9_PloshFasadam2()*L10_BB94_K_PloshFasadPloshPlenkTransp;
     }
function X18_PlenkaMontajgrn()
    {
	//пленка монтажная, грн
	//умножение
	//вывод

        return $this->X17_PlenkaMontajm2()*L10_U25_AssemblyFilm;
     }
function X21_1StBolshNeBol120cmm2()
    {
	//1 ст. большая, не более 120 см, м2
	//умножение
	//вывод

        return $this->X6_MenshStorm()*1.2;
     }
function X22_1StBolshBol120cmm2()
    {
	//1 ст. большая, более 120 см, м2
	//умножение
	//вывод

        return $this->X5_BolshStorm()*1.2;
     }
function X23_Plenka1Storm2()
    {
	//пленка 1 сторона, м2
	//алгебраические выражения
	//вывод

        return $this->X21_1StBolshNeBol120cmm2()*$this->U33_BolshStorNeBol120cm()+$this->X22_1StBolshBol120cmm2()*$this->U34_BolshStorBol120cm();
     }
function X24_Plenka1Storgrn()
    {
	//пленка 1 сторона, грн.
	//умножение
	//вывод

        return $this->X23_Plenka1Storm2()*L10_BB85_K_PererashPlenkFasad*L10_U12_RitramaM300E*$this->U27_KUdorojLRitrama();
     }
function X26_2StorBolshNeBol60cmm2()
    {
	//2 стор. большая, не более 60 см, м2
	//умножение
	//вывод

        return $this->X6_MenshStorm()*1.2;
     }
function X27_2StorBolshBol60cmAndMen120cmm2()
    {
	//2 ст. боль. более 60 см и менее 120 см, м2
	//умножение
	//вывод

        return $this->X6_MenshStorm()*1.2*2;
     }
function X28_2StorBolshBol120cmMenshMen60cmm2()
    {
	//2 ст. боль более 120 см, мень менее 60 см, м2
	//умножение
	//вывод

        return $this->X5_BolshStor_m()*1.2;
     }
function X29_2StorBolshBol120cmMenBol60cmm2()
    {
	//2 ст. боль более 120 см, мень более 60 см, м2
	//умножение
	//вывод

        return $this->X5_BolshStor_m()*1.2*2;
     }
function X30_Plenka2Storm2()
    {
	//пленка 2 стороны, м2
	//алгебраические выражения
	//вывод

        return $this->X26_2StorBolshNeBol60cmm2()*$this->U31_BolshStorNeBol60cm()+$this->X27_2StorBolshBol60cmAndMen120cmm2()*$this->U32_BolshBol60cmAndMen120cm()+$this->X28_2StorBolshBol120cmMenshMen60cmm2()*$this->U37_BolshBol120cmMenshMen60cm()+$this->X29_2StorBolshBol120cmMenBol60cmm2()*$this->U38_BolshBol120cmMenshBol60cm();
     }
function X31_Plenka2Storgrn()
    {
	//пленка 2 стороны, грн.
	//умножение
	//вывод

        return $this->X30_Plenka2Storm2()*L10_BB85_K_PererashPlenkFasad*L10_U12_RitramaM300E*$this->U27_KUdorojLRitrama();
     }
function X33_4StorBolshNeBol30cmm2()
    {
	//4 стор. большая, не более 30 см, м2
	//умножение
	//вывод

        return $this->X6_MenshStorm()*1.2;
     }
function X34_4StorBolshBol60cmAndMen120cmm2()
    {
	//4 ст. боль. более 60 см и менее 120 см, м2
	//умножение
	//вывод

        return $this->X6_MenshStorm()*1.2*2;
     }
function X35_4StorBolshBol120cmMenshMen60cmm2()
    {
	//4 ст. боль более 120 см, мень менее 60 см, м2
	//умножение
	//вывод

        return $this->X5_BolshStorm()*1.2*2;
     }
function X36_4StorBolshBol120cmMenshBol60cmm2()
    {
	//4 ст. боль более 120 см, мень более 60 см, м2
	//умножение
	//вывод

        return $this->X5_BolshStorm()*1.2*4;
     }
function X37_Plemka4Storm2()
    {
	//пленка 4 стороны, м2
	//арифметичиские вычисления
	//вывод

        return $this->X33_4StorBolshNeBol30cmm2()*$this->U29_BolshStorNeBol30cm()+$this->X34_4StorBolshBol60cmAndMen120cmm2()*$this->U32_BolshBol60cmAndMen120cm()+$this->X35_4StorBolshBol120cmMenshMen60cmm2()*$this->U37_BolshBol120cmMenshMen60cm()+$this->X36_4StorBolshBol120cmMenshBol60cmm2()*$this->U38_BolshBol120cmMenshBol60cm();
     }
function X38_Plemka4Storgrn()
    {
	//пленка 4 стороны, грн.
	//арифметичиские вычисления
	//вывод

        return $this->X37_Plemka4Storm2()*L10_BB85_K_PererashPlenkFasad*L10_U12_RitramaM300E*$this->U27_KUdorojLRitrama();
     }
function X39_CvetnPlenkaFasadItogm2()
    {
	//цветная пленка фасад итого, м2
	//арифметичиские вычисления
	//вывод

        return $this->X23_Plenka1Storm2()*$this->U5_1Storona()+$this->X30_Plenka2Storm2()*$this->U6_2Storony()+$this->X37_Plemka4Storm2()*$this->U7_4Storony();
     }
function X40_CvetnPlenkaFasadItoggrn()
    {
	//цветная пленка фасад итого, грн
	//арифметичиские вычисления
	//вывод

        return $this->X24_Plenka1Storgrn()*$this->U5_1Storona()+$this->X31_Plenka2Storgrn()*$this->U6_2Storony()+$this->X38_Plemka4Storgrn()*$this->U7_4Storony();
     }
function X43_PolnCvetFotogrn()
    {
	//полноцвет фото, грн.
	//умножение
	//вывод

        return $this->X10_PloshAllFasadovm2()*L10_U7_RitramaPhoto*L10_BB86_K_PererashPolnocvet;
     }
function X44_PolnCvetFotoPlusLamingrn()
    {
	//полноцвет фото + ламинат, грн.
	//арифметичиские вычисления
	//вывод

        return $this->X10_PloshAllFasadovm2()*(L10_U7_RitramaPhoto+L10_U8_RitramaLaminat)*L10_BB86_K_PererashPolnocvet;
     }
function X45_PolnCvet720grn()
    {
	//полноцвет 720, грн.
	//умножение
	//вывод

        return $this->X10_PloshAllFasadovm2()*L10_U6_Ritrama_720dpi*L10_BB86_K_PererashPolnocvet;
     }
function X46_PolnCvet720PlusLamingrn()
    {
	//полноцвет 720 + ламинат, грн.
	//арифметичиские вычисления
	//вывод

        return $this->X10_PloshAllFasadovm2()*(L10_U6_Ritrama_720dpi+L10_U8_RitramaLaminat)*L10_BB86_K_PererashPolnocvet;
     }
function X47_RWhitePlusAppgrn()
    {
	//R, белый + аппликация , грн.
	//прибавление
	//вывод

        return $this->X13_PlenkaDlAppgrn()+$this->X16_StoimRezamp()+$this->X18_PlenkaMontajgrn();
     }
function X48_RCvetnPlusProrezgrn()
    {
	//R, цветной + прорез, грн.
	//прибавление
	//вывод

        return $this->X40_CvetnPlenkaFasadItoggrn()+$this->X16_StoimRezamp();
     }
function X49_RCvetnPlusAppgrn()
    {
	//R, цветной + аппликация, грн.
	//прибавление
	//вывод

        return $this->X40_CvetnPlenkaFasadItoggrn()+$this->X13_PlenkaDlAppgrn()+$this->X16_StoimRezamp()+$this->X18_PlenkaMontajgrn();
     }
function X51_FullColorFotoItoggrn()
    {
	//полноцвет фото, итого грн.
	//умножение
	//вывод

        return $this->X43_PolnCvetFotogrn()*$this->U13_FullColorPhoto();
     }
function X52_FullColorFotoPlusLaminItoggrn()
    {
	//полноцвет фото + ламинат, итого грн.
	//умножение
	//вывод

        return $this->X44_PolnCvetFotoPlusLamingrn()*$this->U14_FullColorPhotoPlusLamin();
     }
function X53_FullColor720Itoggrn()
    {
	//полноцвет 720, итого грн.
	//умножение
	//вывод

        return $this->X45_PolnCvet720grn()*$this->U15_FullColor720();
     }
function X54_FullColor720PlusLaminItoggrn()
    {
	//полноцвет 720 + ламинат, итого грн.
	//умножение
	//вывод

        return $this->X46_PolnCvet720PlusLamingrn()*$this->U16_FullColor720PlusLamin();
     }
function X55_REconWhitePlusAppItoggrn()
    {
	//R экон, белый + аппликация итого, грн.
	//умножение
	//вывод

        return $this->X47_RWhitePlusAppgrn()*$this->U17_EconWhitePlusApplication();
     }
function X56_REconCvetnPlusProrezItoggrn()
    {
	//R экон, цветной + прорез итого, грн.
	//умножение
	//вывод

        return $this->X48_RCvetnPlusProrezgrn()*$this->U18_EconWhitePlusProrez();
     }
function X57_REconCvetnPlusAppItoggrn()
    {
	//R экон, цветной + аппликация итого, грн.
	//умножение
	//вывод

        return $this->X49_RCvetnPlusAppgrn()*$this->U19_EconColorfullPlusApp();
     }
function X58_RSvetWhitePlusAppItoggrn()
    {
	//R, свет белый + аппликация итого, грн.
	//умножение
	//вывод

        return $this->X47_RWhitePlusAppgrn()*$this->U20_LWhitePlusApp();
     }
function X59_RSvetCvetnPlusProrezItoggrn()
    {
	//R свет, цветной + прорез итого, грн.
	//умножение
	//вывод

        return $this->X48_RCvetnPlusProrezgrn()*$this->U21_LColorfullPlusProrez();
     }
function X60_RSvetCvetnPlusAppItoggrn()
    {
	//R свет, цветной + аппликация итого, грн.
	//умножение
	//вывод

        return $this->X49_RCvetnPlusAppgrn()*$this->U22_LColorfullPlusApp();
     }
function X61_FasadMatItoggrn()
    {
	//фасад материалы итого, грн
	//прибавление
	//вывод

        return $this->X51_FullColorFotoItoggrn()+$this->X52_FullColorFotoPlusLaminItoggrn()+$this->X53_FullColor720Itoggrn()+$this->X54_FullColor720PlusLaminItoggrn()+$this->X55_REconWhitePlusAppItoggrn()+$this->X56_REconCvetnPlusProrezItoggrn()+$this->X57_REconCvetnPlusAppItoggrn()+$this->X58_RSvetWhitePlusAppItoggrn()+$this->X59_RSvetCvetnPlusProrezItoggrn()+$this->X60_RSvetCvetnPlusAppItoggrn();
     }
function AA5_FullColormin()
    {
	//полноцвет, мин
	//умножение
	//вывод

        return $this->X11_RaschPFasadDlTrudm2()*L10_BT33_KnurlFullColor_m2;
     }
function AA6_ColorPolPrmin()
    {
	//цветная полупрорез, мин
	//умножение
	//вывод

        return $this->X11_RaschPFasadDlTrudm2()*L10_BT34_KnurlRitramaHalfCat_m2;
     }
function AA7_Appmin()
    {
	//аппликация, мин
	//умножение
	//вывод

        return $this->X12_PlenkaDlAppm2()*L10_BT35_SampleAplication_m2;
     }
function AA9_FullColorFotomin()
    {
	//полноцвет фото, мин
	//вывод

        return $this->AA5_FullColormin();
     }
function AA10_FullColorFotoPluslammin()
    {
	//полноцвет фото + лам, мин
	//вывод

        return $this->AA5_FullColormin();
     }
function AA11_FullColor720min()
    {
	//полноцвет 720, мин
	//вывод

        return $this->AA5_FullColormin();
     }
function AA12_FullColor720PlusLammin()
    {
	//полн 720 + лам, мин
	//вывод

        return $this->AA5_FullColormin();
     }
function AA13_REconWhitePlusAppmin()
    {
	//R экон, белый + аппл, мин
	//вывод

        return $this->AA7_Appmin();
     }
function AA14_REconCvetPlusPrmin()
    {
	//R экон, цвет + прорез, мин
	//вывод

        return $this->AA6_ColorPolPrmin();
     }
function AA15_REconCvetPlusAppmin()
    {
	//R экон, цвет + аппл, мин
	//прибавление
	//вывод

        return $this->AA6_ColorPolPrmin()+$this->AA7_Appmin();
     }
function AA16_RSvetWhitePlusAppmin()
    {
	//R, свет белый + аппл, мин
	//вывод

        return $this->AA7_Appmin();
     }
function AA17_RSvetCvetPlusPrmin()
    {
	//R свет, цвет + прорез, мин
	//вывод

        return $this->AA6_ColorPolPrmin();
     }
function AA18_RCvetFullColorPlusAppmin()
    {
	//R свет, цветной + аппл, мин
	//вывод

        return $this->AA6_ColorPolPrmin()+$this->AA7_Appmin();
     }
function AA20_PolnCvetFotomin()
    {
	//полноцвет фото, мин
	//умножение
	//вывод

        return $this->AA9_FullColorFotomin()*$this->U13_FullColorPhoto();
     }
function AA21_PolnCvetFotoPlusLammin()
    {
	//полноцвет фото + лам, мин
	//умножение
	//вывод

        return $this->AA10_FullColorFotoPluslammin()*$this->U14_FullColorPhotoPlusLamin();
     }
function AA22_PolnCvet720min()
    {
	//полноцвет 720, мин
	//умножение
	//вывод

        return $this->AA11_FullColor720min()*$this->U15_FullColor720();
     }
function AA23_Poln720PlusLammin()
    {
	//полн 720 + лам, мин
	//умножение
	//вывод

        return $this->AA12_FullColor720PlusLammin()*$this->U16_FullColor720PlusLamin();
     }
function AA24_REconWhitePlusAppmin()
    {
	//R экон, белый + аппл, мин
	//умножение
	//вывод

        return $this->AA13_REconWhitePlusAppmin()*$this->U17_EconWhitePlusApplication();
     }
function AA25_REconCvetPlusPrmin()
    {
	//R экон, цвет + прорез, мин
	//умножение
	//вывод

        return $this->AA14_REconCvetPlusPrmin()*$this->U18_EconWhitePlusProrez();
     }
function AA26_REconCvetPlusAppmin()
    {
	//R экон, цвет + аппл, мин
	//умножение
	//вывод

        return $this->AA15_REconCvetPlusAppmin()*$this->U19_EconColorfullPlusApp();
     }
function AA27_RSvetWhitePlusAppmin()
    {
	//R, свет белый + аппл, мин
	//умножение
	//вывод

        return $this->AA16_RSvetWhitePlusAppmin()*$this->U20_LWhitePlusApp();
     }
function AA28_RSvetCvetPlusPrmin()
    {
	//R свет, цвет + прорез, мин
	//умножение
	//вывод

        return $this->AA17_RSvetCvetPlusPrmin()*$this->U21_LColorfullPlusProrez();
     }
function AA29_RSvetFullColorPlusAppmin()
    {
	//R свет, цветной + аппл, мин
	//умножение
	//вывод

        return $this->AA18_RCvetFullColorPlusAppmin()*$this->U22_LColorfullPlusApp();
     }
function AA30_TrudItogomin()
    {
	//трудоемкость итого, мин
	//прибавление
	//вывод

        return $this->AA20_PolnCvetFotomin()+$this->AA21_PolnCvetFotoPlusLammin()+$this->AA22_PolnCvet720min()+$this->AA23_Poln720PlusLammin()+$this->AA24_REconWhitePlusAppmin()+$this->AA25_REconCvetPlusPrmin()+$this->AA26_REconCvetPlusAppmin()+$this->AA27_RSvetWhitePlusAppmin()+$this->AA28_RSvetCvetPlusPrmin()+$this->AA29_RSvetFullColorPlusAppmin();
     }
function AA32_Designmin()
    {
	//дизайн, мин
	//арифметические вычисления
	//вывод

        return L10_BT49_MaketL24_1sht*$this->U10_DesignCreate()+L10_BT50_MaketZakazch_1sht*$this->U11_DesignCheck();
     }
function AD6_CvetPlFasad12mmp()
    {
	//цветная пленка фасад (1,2м), мп
	//арифметические вычисления
	//вывод

        return round($this->X39_CvetnPlenkaFasadItogm2()/1.2, 2)*$this->U24_FasadColorfullPlenka()*$this->U9_PlenkaFasadEst();
     }
function AD7_FasadMatItogogrn()
    {
	//фасад материалы итого, грн.
	//арифметические вычисления
	//вывод

        return round($this->X61_FasadMatItoggrn()*$this->U9_PlenkaFasadEst(), 0);
     }
function AD10_Trudmin()
    {
	//трудоемкость, мин
	//арифметические вычисления
	//вывод

        return round($this->AA30_TrudItogomin()*$this->U9_PlenkaFasadEst(), 0);
     }
function AD11_StoimRabotigrn()
    {
	//стоимость работы, грн.
	//арифметические вычисления
	//вывод

        return round($this->AD10_Trudmin()*L10_C67_K1, 0);
     }
function AD13_Designgrn()
    {
	//дизайн, грн
	//арифметические вычисления
	//вывод

        return $this->AA32_Designmin()*$this->U9_PlenkaFasadEst()*L10_C67_K1;
     }
function AD24_Itigogrn()
    {
	//итого, грн.
	//арифметические вычисления
	//вывод

        return $this->AD7_FasadMatItogogrn()+$this->AD11_StoimRabotigrn()+$this->AD13_Designgrn();
     }



}