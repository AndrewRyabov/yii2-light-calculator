<?php

/**
 * Created by PhpStorm.
 * User: Anrew
 * Date: 27.07.2017
 * Time: 10:48
 */
class L18
{
 // Входные параметры:
	public $B5_BigStor_cm; // большая сторона
	public $B6_SmallStor_cm; // меньшая сторона

    public function __construct($BigStor_cm, $SmallStor_cm)

  {
        // Заполнение входных данных.
        $this->B5_BigStor_cm = $BigStor_cm;
        $this->B6_SmallStor_cm = $SmallStor_cm;
  }

    // C light - пленка борт/тыл

    function B14_BolshProsvmm()
    { 

	//больший просвет, мм
	//умножение и отнимание
	//вывод

	return $this->B5_BigStor_cm*10-10;
    }
    function B15_MenshProsvmm()
    { 

	//меньшый просвет, мм
	//умножение и отнимание
	//вывод

	return $this->B6_SmallStor_cm*10-10;
    }
    function B16_BolshStorm()
    { 

	//большая сторона, м
	//округление и деление
	//вывод

	return round ($this->B5_BigStor_cm/100, 2);
    }
    function B17_MenshStorm()
    { 

	//меньшая сторона, м
	//округление и деление
	//вывод

	return round ($this->B6_SmallStor_cm/100, 2);
    }
    function D8_Flag1()
    { 

	//флаг 1
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=0 and $this->B14_BolshProsvmm()<=399)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D9_Flag2()
    { 

	//флаг 2
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=400 and $this->B14_BolshProsvmm()<=604)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D10_Flag3()
    { 

	//флаг 3
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=605 and $this->B14_BolshProsvmm()<=750)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D11_Flag4()
    { 

	//флаг 4
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=751 and $this->B14_BolshProsvmm()<=914)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D12_Flag5()
    { 

	//флаг 5
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=915 and $this->B14_BolshProsvmm()<=1050)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D13_Flag6()
    { 

	//флаг 6
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=1051 and $this->B14_BolshProsvmm()<=1214)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D14_Flag7()
    { 

	//флаг 7
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=1215 and $this->B14_BolshProsvmm()<=1350)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D15_Flag8()
    { 

	//флаг 8
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=1351 and $this->B14_BolshProsvmm()<=1514)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D16_Flag9()
    { 

	//флаг 9
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=1515 and $this->B14_BolshProsvmm()<=1650)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D17_Flag10()
    { 

	//флаг 10
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=1651 and $this->B14_BolshProsvmm()<=2000)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D18_Flag11()
    { 

	//флаг 11
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=2001 and $this->B14_BolshProsvmm()<=2250)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D19_Flag12()
    { 

	//флаг 12
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=2251 and $this->B14_BolshProsvmm()<=2600)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D20_Flag13()
    { 

	//флаг 13
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=2601 and $this->B14_BolshProsvmm()<=3400)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function D21_Flag14()
    { 

	//флаг 14
	//если условие = true, то вывести 1
	//иначе - вывести 0
	//вывод

       if ($this->B14_BolshProsvmm()>=3401 and $this->B14_BolshProsvmm()<=3900)
	{
	return 1;
	}
	else
	{
	return 0;
	}
    }
    function F8_StoimLin1grn()
    { 

	//стоимость линии 1, грн.
	//умножение
	//вывод

	return $this->D8_Flag1()*L10_AF6_LampMulage0459mmS;
    }
    function F9_StoimLin2grn()
    { 

	//стоимость линии 2, грн.
	//умножение
	//вывод

	return $this->D9_Flag2()*L10_AF7_Lamp_15VTS;
    }
    function F10_StoimLin3grn()
    { 

	//стоимость линии 3, грн.
	//умножение
	//вывод

	return $this->D10_Flag3()*L10_AF8_Lamp_18VTS;
    }
    function F11_StoimLin4grn()
    { 

	//стоимость линии 4, грн.
	//умножение
	//вывод

	return $this->D11_Flag4()*4*L10_AF7_Lamp_15VTS;
    }
    function F12_StoimLin5grn()
    { 

	//стоимость линии 5, грн.
	//умножение
	//вывод

	return $this->D12_Flag5()*L10_AF9_Lamp_30VTS;
    }
    function F13_StoimLin6grn()
    { 

	//стоимость линии 6, грн.
	//умножение
	//вывод

	return $this->D13_Flag6()*2*L10_AF8_Lamp_18VTS;
    }
    function F14_StoimLin7grn()
    { 

	//стоимость линии 7, грн.
	//умножение
	//вывод

	return $this->D14_Flag7()*L10_AF10_Lamp_36VTS;
    }
    function F15_StoimLin8grn()
    { 

	//стоимость линии 8, грн.
	//умножение
	//вывод

	return $this->D15_Flag8()*(L10_AF9_Lamp_30VTS+L10_AF8_Lamp_18VTS);
    }
    function F16_StoimLin9grn()
    { 

	//стоимость линии 9, грн.
	//умножение
	//вывод

	return $this->D16_Flag9()*L10_AF11_Lamp_58VT_S;
    }
    function F17_StoimLin10grn()
    { 

	//стоимость линии 10, грн.
	//умножение и прибавление
	//вывод

	return $this->D17_Flag10()*(L10_AF10_Lamp_36VTS+L10_AF8_Lamp_18VTS);
    }
    function F18_StoimLin11grn()
    { 

	//стоимость линии 11, грн.
	//умножение и прибавление
	//вывод

	return $this->D18_Flag11()*(L10_AF10_Lamp_36VTS+L10_AF9_Lamp_30VTS);
    }
    function F19_StoimLin12grn()
    { 

	//стоимость линии 12, грн.
	//умножение
	//вывод

	return $this->D19_Flag12()*2*L10_AF10_Lamp_36VTS;
    }
    function F20_StoimLin13grn()
    { 

	//стоимость линии 13, грн.
	//умножение и прибавление
	//вывод

	return $this->D20_Flag13()*(2*L10_AF10_Lamp_36VTS+L10_AF8_Lamp_18VTS);
    }
    function F21_StoimLin14grn()
    { 

	//стоимость линии 14, грн.
	//умножение
	//вывод

	return $this->D21_Flag14()*3*L10_AF10_Lamp_36VTS;
    }
    function F23_StoimLinItogogrn()
    { 

	//стоимость линии итого, грн.
	//прибавление
	//вывод

	return $this->F8_StoimLin1grn()+$this->F9_StoimLin2grn()+$this->F10_StoimLin3grn()+$this->F11_StoimLin4grn()+$this->F12_StoimLin5grn()+
	$this->F13_StoimLin6grn()+$this->F14_StoimLin7grn()+$this->F15_StoimLin8grn()+$this->F16_StoimLin9grn()+$this->F17_StoimLin10grn()+
	$this->F18_StoimLin11grn()+$this->F19_StoimLin12grn()+$this->F20_StoimLin13grn()+$this->F21_StoimLin14grn();
    }
    function F24_BolshLinsht()
    { 

	//большие линии, шт.
	//округление и деление
	//вывод

	return round ($this->B17_MenshStorm()/L10_BB73_K_ShagLinLamp1St_m, 0);
    }
    function F25_VseBolshLingrn()
    { 

	//все большие линии, грн.
	//умножение
	//вывод

	return $this->F23_StoimLinItogogrn()*$this->F24_BolshLinsht();
    }
    function G8_EnergoLin1vt()
    {

        //энергопот. линии 1, вт
        //умножение
        //вывод

        return $this->D8_Flag1()*L10_AI6_LampMulage0459mmP;
    }
    function G9_EnergoLin2vt()
    {

        //энергопот. линии 2, вт
        //умножение
        //вывод

        return $this->D9_Flag2()*15;
    }
    function G10_EnergoLin3vt()
    {

        //энергопот. линии 3, вт
        //умножение
        //вывод

        return $this->D10_Flag3()*18;
    }
    function G11_EnergoLin4vt()
    {

        //энергопот. линии 4, вт
        //умножение
        //вывод

        return $this->D11_Flag4()*30;
    }
    function G12_EnergoLin5vt()
    {

        //энергопот. линии 5, вт
        //умножение
        //вывод

        return $this->D12_Flag5()*30;
    }
    function G13_EnergoLin6vt()
    {

        //энергопот. линии 6, вт
        //умножение
        //вывод

        return $this->D13_Flag6()*36;
    }
    function G14_EnergoLin7vt()
    {

        //энергопот. линии 7, вт
        //умножение
        //вывод

        return $this->D14_Flag7()*36;
    }
    function G15_EnergoLin8vt()
    {

    //энергопот. линии 8, вт
    //умножение
    //вывод

    return $this->D15_Flag8()*48;
    }
    function G16_EnergoLin9vt()
    {

        //энергопот. линии 9, вт
        //умножение
        //вывод

        return $this->D16_Flag9()*58;
    }
    function G17_EnergoLin10vt()
    {

        //энергопот. линии 10, вт
        //умножение
        //вывод

        return $this->D17_Flag10()*54;
    }
    function G18_EnergoLin11vt()
    {

        //энергопот. линии 11, вт
        //умножение
        //вывод

        return $this->D18_Flag11()*66;
    }
    function G19_EnergoLin12vt()
    {

        //энергопот. линии 12, вт
        //умножение
        //вывод

        return $this->D19_Flag12()*72;
    }
    function G20_EnergoLin13vt()
    {

        //энергопот. линии 13, вт
        //умножение
        //вывод

        return $this->D20_Flag13()*90;
    }
    function G21_EnergoLin14vt()
    {

        //энергопот. линии 14, вт
        //умножение
        //вывод

        return $this->D21_Flag14()*138;
    }
    function G23_EnergoLinItogovt()
    {

        //энергопот. линии итого, вт
        //прибавление
        //вывод

        return $this->G8_EnergoLin1vt()+$this->G9_EnergoLin2vt()+$this->G10_EnergoLin3vt()+$this->G11_EnergoLin4vt()+
            $this->G12_EnergoLin5vt()+ $this->G13_EnergoLin6vt()+$this->G14_EnergoLin7vt()+$this->G15_EnergoLin8vt()+
            $this->G16_EnergoLin9vt()+$this->G17_EnergoLin10vt()+$this->G18_EnergoLin11vt()+$this->G19_EnergoLin12vt()+
            $this->G20_EnergoLin13vt()+$this->G21_EnergoLin14vt();
    }
    function G25_EnergoVseBolshLinvt()
    {

        //энергопот. все большие линии , вт
        //умножение
        //вывод

        return $this->G23_EnergoLinItogovt()*$this->F24_BolshLinsht();
    }
    function H8_VesLin1kg()
    {

        //вес линии 1, кг
        //умножение
        //вывод

        return $this->D8_Flag1()*L10_AG6_LampMulage0459mmV;
    }
    function H9_VesLin2kg()
    {

        //вес линии 2, кг
        //умножение
        //вывод

        return $this->D9_Flag2()*0.54;
    }
    function H10_VesLin3kg()
    {

        //вес линии 3, кг
        //умножение
        //вывод

        return $this->D10_Flag3()*0.6;
    }
    function H11_VesLin4kg()
    {

        //вес линии 4, кг
        //умножение
        //вывод

        return $this->D11_Flag4()*1.08;
    }
    function H12_VesLin5kg()
    {

        //вес линии 5, кг
        //умножение
        //вывод

        return $this->D12_Flag5()*0.68;
    }
    function H13_VesLin6kg()
    {

        //вес линии 6, кг
        //умножение
        //вывод

        return $this->D13_Flag6()*1.2;
    }
    function H14_VesLin7kg()
    {

        //вес линии 7, кг
        //умножение
        //вывод

        return $this->D14_Flag7()*0.75;
    }
    function H15_VesLin8kg()
    {

        //вес линии 8, кг
        //умножение
        //вывод

        return $this->D15_Flag8()*1.28;
    }
    function H16_VesLin9kg()
    {

        //вес линии 9, кг
        //умножение
        //вывод

        return $this->D16_Flag9()*1.36;
    }
    function H17_VesLin10kg()
    {

        //вес линии 10, кг
        //умножение
        //вывод

        return $this->D17_Flag10()*1.35;
    }
    function H18_VesLin11kg()
    {

        //вес линии 11, кг
        //умножение
        //вывод

        return $this->D18_Flag11()*1.43;
    }
    function H19_VesLin12kg()
    {

    //вес линии 12, кг
    //умножение
    //вывод

    return $this->D19_Flag12()*1.5;
    }
    function H20_VesLin13kg()
    {

        //вес линии 13, кг
        //умножение
        //вывод

        return $this->D20_Flag13()*2.1;
    }
    function H21_VesLin14kg()
    {

        //вес линии 14, кг
        //умножение
        //вывод

        return $this->D21_Flag14()*2.25;
    }
    function H23_VesLinItogokg()
    {

        //вес линии итого, кг
        //прибавление
        //вывод

        return $this->H8_VesLin1kg()+$this->H9_VesLin2kg()+$this->H10_VesLin3kg()+$this->H11_VesLin4kg()+$this->H12_VesLin5kg()+
            $this->H13_VesLin6kg()+$this->H14_VesLin7kg()+$this->H15_VesLin8kg()+$this->H16_VesLin9kg()+$this->H17_VesLin10kg()+
            $this->H18_VesLin11kg()+$this->H19_VesLin12kg()+$this->H20_VesLin13kg()+$this->H21_VesLin14kg();
    }
    function H25_VesBolshLinkg()
    {

        //вес большие линии , кг
        //умножение
        //вывод

        return $this->H23_VesLinItogokg()*$this->F24_BolshLinsht();
    }
    function I8_KolvoLamp1sht()
    {

        //количество ламп 1 , шт
        //умножение
        //вывод

        return $this->D8_Flag1()*1;
    }
    function I9_KolvoLamp2sht()
    {

        //количество ламп 2 , шт
        //умножение
        //вывод

        return $this->D9_Flag2()*1;
    }
    function I10_KolvoLamp3sht()
    {

        //количество ламп 3 , шт
        //умножение
        //вывод

        return $this->D10_Flag3()*1;
    }
    function I11_KolvoLamp4sht()
    {

        //количество ламп 4 , шт
        //умножение
        //вывод

        return $this->D11_Flag4()*2;
    }
    function I12_KolvoLamp5sht()
    {

        //количество ламп 5 , шт
        //умножение
        //вывод

        return $this->D12_Flag5()*1;
    }
    function I13_KolvoLamp6sht()
    {

        //количество ламп 6 , шт
        //умножение
        //вывод

        return $this->D13_Flag6()*2;
    }
    function I14_KolvoLamp7sht()
    {

        //количество ламп 7 , шт
        //умножение
        //вывод

        return $this->D14_Flag7()*1;
    }
    function I15_KolvoLamp8sht()
    {

        //количество ламп 8 , шт
        //умножение
        //вывод

        return $this->D15_Flag8()*2;
    }
    function I16_KolvoLamp9sht()
    {

        //количество ламп 9 , шт
        //умножение
        //вывод

        return $this->D16_Flag9()*1;
    }
    function I17_KolvoLamp10sht()
    {

        //количество ламп 10 , шт
        //умножение
        //вывод

        return $this->D17_Flag10()*2;
    }
    function I18_KolvoLamp11sht()
    {

        //количество ламп 11 , шт
        //умножение
        //вывод

        return $this->D18_Flag11()*2;
    }
    function I19_KolvoLamp12sht()
    {

        //количество ламп 12 , шт
        //умножение
        //вывод

        return $this->D19_Flag12()*2;
    }
    function I20_KolvoLamp13sht()
    {

        //количество ламп 13 , шт
        //умножение
        //вывод

        return $this->D20_Flag13()*3;
    }
    function I21_KolvoLamp14sht()
    {

        //количество ламп 14 , шт
        //умножение
        //вывод

        return $this->D21_Flag14()*3;
    }
    function I23_KolvoLampLinItogosht()
    {

        //количество ламп линия итого , шт
        //прибавление
        //вывод

        return $this->I8_KolvoLamp1sht()+$this->I9_KolvoLamp2sht()+$this->I10_KolvoLamp3sht()+$this->I11_KolvoLamp4sht()+
            $this->I12_KolvoLamp5sht()+$this->I13_KolvoLamp6sht()+$this->I14_KolvoLamp7sht()+$this->I15_KolvoLamp8sht()+
            $this->I16_KolvoLamp9sht()+$this->I17_KolvoLamp10sht()+$this->I18_KolvoLamp11sht()+$this->I19_KolvoLamp12sht()+
            $this->I20_KolvoLamp13sht()+$this->I21_KolvoLamp14sht();
    }
    function I25_KolvoBolshLinsht()
    {

        //количество ламп 14 , шт
        //умножение
        //вывод

        return $this->I23_KolvoLampLinItogosht()*$this->F24_BolshLinsht();
    }
    function J8_DlnLampLin1mm()
    {

        //длина ламп линии 1, mm
        //умножение
        //вывод

        return $this->D8_Flag1()*300;
    }
    function J9_DlnLampLin2mm()
    {

        //длина ламп линии 2, mm
        //умножение
        //вывод

        return $this->D9_Flag2()*455;
    }
    function J10_DlnLampLin3mm()
    {

        //длина ламп линии 3, mm
        //умножение
        //вывод

        return $this->D10_Flag3()*605;
    }
    function J11_DlnLampLin4mm()
    {

        //длина ламп линии 4, mm
        //умножение
        //вывод

        return $this->D11_Flag4()*910;
    }
    function J12_DlnLampLin5mm()
    {

        //длина ламп линии 5, mm
        //умножение
        //вывод

        return $this->D12_Flag5()*915;
    }
    function J13_DlnLampLin6mm()
    {

        //длина ламп линии 6, mm
        //умножение
        //вывод

        return $this->D13_Flag6()*1210;
    }
    function J14_DlnLampLin7mm()
    {

        //длина ламп линии 7, mm
        //умножение
        //вывод

        return $this->D14_Flag7()*1215;
    }
    function J15_DlnLampLin8mm()
    {

        //длина ламп линии 8, mm
        //умножение
        //вывод

        return $this->D15_Flag8()*1920;
    }
    function J16_DlnLampLin9mm()
    {

        //длина ламп линии 9, mm
        //умножение
        //вывод

        return $this->D16_Flag9()*1515;
    }
    function J17_DlnLampLin10mm()
    {

        //длина ламп линии 10, mm
        //умножение
        //вывод

        return $this->D17_Flag10()*1820;
    }
    function J18_DlnLampLin11mm()
    {

        //длина ламп линии 11, mm
        //умножение
        //вывод

        return $this->D18_Flag11()*2130;
    }
    function J19_DlnLampLin12mm()
    {

        //длина ламп линии 12, mm
        //умножение
        //вывод

        return $this->D19_Flag12()*2430;
    }
    function J20_DlnLampLin13mm()
    {

        //длина ламп линии 13, mm
        //умножение
        //вывод

        return $this->D20_Flag13()*3035;
    }
    function J21_DlnLampLin14mm()
    {

        //длина ламп линии 14, mm
        //умножение
        //вывод

        return $this->D21_Flag14()*3645;
    }
    function J23_DlnLampLinItogomm()
    {

        //длина ламп линия итого, mm
        //прибавление
        //вывод

        return $this->J8_DlnLampLin1mm()+$this->J9_DlnLampLin2mm()+$this->J10_DlnLampLin3mm()+$this->J11_DlnLampLin4mm()+
            $this->J12_DlnLampLin5mm()+$this->J13_DlnLampLin6mm()+$this->J14_DlnLampLin7mm()+$this->J15_DlnLampLin8mm()+
            $this->J16_DlnLampLin9mm()+$this->J17_DlnLampLin10mm()+$this->J18_DlnLampLin11mm()+$this->J19_DlnLampLin12mm()+
            $this->J20_DlnLampLin13mm()+$this->J21_DlnLampLin14mm();
    }
    function J25_DlnLampBolshLinmm()
    {

        //длина ламп большие линии, mm
        //умножение
        //вывод

        return $this->J23_DlnLampLinItogomm()*$this->F24_BolshLinsht();
    }
    function D33_Flag1()
    {

        //флаг 1
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=0 and $this->B15_MenshProsvmm()<=399)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D34_Flag2()
    {

        //флаг 2
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=400 and $this->B15_MenshProsvmm()<=604)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D35_Flag3()
    {

        //флаг 3
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=605 and $this->B15_MenshProsvmm()<=750)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D36_Flag4()
    {

        //флаг 4
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=751 and $this->B15_MenshProsvmm()<=914)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D37_Flag5()
    {

        //флаг 5
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=915 and $this->B15_MenshProsvmm()<=1050)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D38_Flag6()
    {

        //флаг 6
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=1051 and $this->B15_MenshProsvmm()<=1214)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D39_Flag7()
    {

        //флаг 7
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=1215 and $this->B15_MenshProsvmm()<=1350)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D40_Flag8()
    {

        //флаг 8
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=1351 and $this->B15_MenshProsvmm()<=1514)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D41_Flag9()
    {

        //флаг 9
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=1515 and $this->B15_MenshProsvmm()<=1650)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D42_Flag10()
    {

        //флаг 10
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=1651 and $this->B15_MenshProsvmm()<=2000)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D43_Flag11()
    {

        //флаг 11
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=2001 and $this->B15_MenshProsvmm()<=2250)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D44_Flag12()
    {

        //флаг 12
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=2251 and $this->B15_MenshProsvmm()<=2600)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D45_Flag13()
    {

        //флаг 13
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=2601 and $this->B15_MenshProsvmm()<=3400)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D46_Flag14()
    {

        //флаг 14
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->B15_MenshProsvmm()>=3401 and $this->B15_MenshProsvmm()<=3900)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function F33_StoimLin1grn()
    {

        //стоимость линии 1, грн.
        //умножение
        //вывод

        return $this->D33_Flag1()*L10_AF6_LampMulage0459mmS;
    }
    function F34_StoimLin2grn()
    {

        //стоимость линии 2, грн.
        //умножение
        //вывод

        return $this->D34_Flag2()*L10_AF7_Lamp_15VTS;
    }
    function F35_StoimLin3grn()
    {

        //стоимость линии 3, грн.
        //умножение
        //вывод

        return $this->D35_Flag3()*L10_AF8_Lamp_18VTS;
    }
    function F36_StoimLin4grn()
    {

        //стоимость линии 4, грн.
        //умножение
        //вывод

        return $this->D36_Flag4()*4*L10_AF7_Lamp_15VTS;
    }
    function F37_StoimLin5grn()
    {

        //стоимость линии 5, грн.
        //умножение
        //вывод

        return $this->D37_Flag5()*L10_AF9_Lamp_30VTS;
    }
    function F38_StoimLin6grn()
    {

        //стоимость линии 6, грн.
        //умножение
        //вывод

        return $this->D38_Flag6()*2*L10_AF8_Lamp_18VTS;
    }
    function F39_StoimLin7grn()
    {

        //стоимость линии 7, грн.
        //умножение
        //вывод

        return $this->D39_Flag7()*L10_AF10_Lamp_36VTS;
    }
    function F40_StoimLin8grn()
    {

        //стоимость линии 8, грн.
        //умножение
        //вывод

        return $this->D40_Flag8()*(L10_AF9_Lamp_30VTS+L10_AF8_Lamp_18VTS);
    }
    function F41_StoimLin9grn()
    {

        //стоимость линии 9, грн.
        //умножение
        //вывод

        return $this->D41_Flag9()*L10_AF11_Lamp_58VT_S;
    }
    function F42_StoimLin10grn()
    {

        //стоимость линии 10, грн.
        //умножение и прибавление
        //вывод

        return $this->D42_Flag10()*(L10_AF10_Lamp_36VTS+L10_AF8_Lamp_18VTS);
    }
    function F43_StoimLin11grn()
    {

        //стоимость линии 11, грн.
        //умножение и прибавление
        //вывод

        return $this->D43_Flag11()*(L10_AF10_Lamp_36VTS+L10_AF9_Lamp_30VTS);
    }
    function F44_StoimLin12grn()
    {

        //стоимость линии 12, грн.
        //умножение
        //вывод

        return $this->D44_Flag12()*2*L10_AF10_Lamp_36VTS;
    }
    function F45_StoimLin13grn()
    {

        //стоимость линии 13, грн.
        //умножение и прибавление
        //вывод

        return $this->D45_Flag13()*(2*L10_AF10_Lamp_36VTS+L10_AF8_Lamp_18VTS);
    }
    function F46_StoimLin14grn()
    {

        //стоимость линии 14, грн.
        //умножение
        //вывод

        return $this->D46_Flag14()*3*L10_AF10_Lamp_36VTS;
    }
    function F48_StoimLinItogogrn()
    {

        //стоимость линии итого, грн.
        //прибавление
        //вывод

        return $this->F33_StoimLin1grn()+$this->F34_StoimLin2grn()+$this->F35_StoimLin3grn()+$this->F36_StoimLin4grn()+$this->F37_StoimLin5grn()+
            $this->F38_StoimLin6grn()+$this->F39_StoimLin7grn()+$this->F40_StoimLin8grn()+$this->F41_StoimLin9grn()+$this->F42_StoimLin10grn()+
            $this->F43_StoimLin11grn()+$this->F44_StoimLin12grn()+$this->F45_StoimLin13grn()+$this->F46_StoimLin14grn();
    }
    function F49_BolshLinsht()
    {

        //большие линии, шт.
        //округление и деление
        //вывод

        return round ($this->B16_BolshStorm()/L10_BB73_K_ShagLinLamp1St_m, 0);
    }
    function F50_VseBolshLingrn()
    {

        //все большие линии, грн.
        //умножение
        //вывод

        return $this->F48_StoimLinItogogrn()*$this->F49_BolshLinsht();
    }
    function G33_EnergoLin1vt()
    {

        //энергопот. линии 1, вт
        //умножение
        //вывод

        return $this->D33_Flag1()*L10_AI6_LampMulage0459mmP;
    }
    function G34_EnergoLin2vt()
    {

        //энергопот. линии 2, вт
        //умножение
        //вывод

        return $this->D34_Flag2()*15;
    }
    function G35_EnergoLin3vt()
    {

        //энергопот. линии 3, вт
        //умножение
        //вывод

        return $this->D35_Flag3()*18;
    }
    function G36_EnergoLin4vt()
    {

        //энергопот. линии 4, вт
        //умножение
        //вывод

        return $this->D36_Flag4()*30;
    }
    function G37_EnergoLin5vt()
    {

        //энергопот. линии 5, вт
        //умножение
        //вывод

        return $this->D37_Flag5()*30;
    }
    function G38_EnergoLin6vt()
    {

        //энергопот. линии 6, вт
        //умножение
        //вывод

        return $this->D38_Flag6()*36;
    }
    function G39_EnergoLin7vt()
    {

        //энергопот. линии 7, вт
        //умножение
        //вывод

        return $this->D39_Flag7()*36;
    }
    function G40_EnergoLin8vt()
    {

        //энергопот. линии 8, вт
        //умножение
        //вывод

        return $this->D40_Flag8()*48;
    }
    function G41_EnergoLin9vt()
    {

        //энергопот. линии 9, вт
        //умножение
        //вывод

        return $this->D41_Flag9()*58;
    }
    function G42_EnergoLin10vt()
    {

        //энергопот. линии 10, вт
        //умножение
        //вывод

        return $this->D42_Flag10()*54;
    }
    function G43_EnergoLin11vt()
    {

        //энергопот. линии 11, вт
        //умножение
        //вывод

        return $this->D43_Flag11()*66;
    }
    function G44_EnergoLin12vt()
    {

        //энергопот. линии 12, вт
        //умножение
        //вывод

        return $this->D44_Flag12()*72;
    }
    function G45_EnergoLin13vt()
    {

        //энергопот. линии 13, вт
        //умножение
        //вывод

        return $this->D45_Flag13()*90;
    }
    function G46_EnergoLin14vt()
    {

        //энергопот. линии 14, вт
        //умножение
        //вывод

        return $this->D46_Flag14()*138;
    }
    function G48_EnergoLinItogovt()
    {

        //энергопот. линии итого, вт
        //прибавление
        //вывод

        return $this->G33_EnergoLin1vt()+$this->G34_EnergoLin2vt()+$this->G35_EnergoLin3vt()+$this->G36_EnergoLin4vt()+
            $this->G37_EnergoLin5vt()+ $this->G38_EnergoLin6vt()+$this->G39_EnergoLin7vt()+$this->G40_EnergoLin8vt()+
            $this->G41_EnergoLin9vt()+$this->G42_EnergoLin10vt()+$this->G43_EnergoLin11vt()+$this->G44_EnergoLin12vt()+
            $this->G45_EnergoLin13vt()+$this->G46_EnergoLin14vt();
    }
    function G50_EnergoVseBolshLinvt()
    {

        //энергопот. все большие линии , вт
        //умножение
        //вывод

        return $this->G48_EnergoLinItogovt()*$this->F49_BolshLinsht();
    }
    function H33_VesLin1kg()
    {

        //вес линии 1, кг
        //умножение
        //вывод

        return $this->D33_Flag1()*L10_AG6_LampMulage0459mmV;
    }
    function H34_VesLin2kg()
    {

        //вес линии 2, кг
        //умножение
        //вывод

        return $this->D34_Flag2()*0.54;
    }
    function H35_VesLin3kg()
    {

        //вес линии 3, кг
        //умножение
        //вывод

        return $this->D35_Flag3()*0.6;
    }
    function H36_VesLin4kg()
    {

        //вес линии 4, кг
        //умножение
        //вывод

        return $this->D36_Flag4()*1.08;
    }
    function H37_VesLin5kg()
    {

        //вес линии 5, кг
        //умножение
        //вывод

        return $this->D37_Flag5()*0.68;
    }
    function H38_VesLin6kg()
    {

        //вес линии 6, кг
        //умножение
        //вывод

        return $this->D38_Flag6()*1.2;
    }
    function H39_VesLin7kg()
    {

        //вес линии 7, кг
        //умножение
        //вывод

        return $this->D39_Flag7()*0.75;
    }
    function H40_VesLin8kg()
    {

        //вес линии 8, кг
        //умножение
        //вывод

        return $this->D40_Flag8()*1.28;
    }
    function H41_VesLin9kg()
    {

        //вес линии 9, кг
        //умножение
        //вывод

        return $this->D41_Flag9()*1.36;
    }
    function H42_VesLin10kg()
    {

        //вес линии 10, кг
        //умножение
        //вывод

        return $this->D42_Flag10()*1.35;
    }
    function H43_VesLin11kg()
    {

        //вес линии 11, кг
        //умножение
        //вывод

        return $this->D43_Flag11()*1.43;
    }
    function H44_VesLin12kg()
    {

        //вес линии 12, кг
        //умножение
        //вывод

        return $this->D44_Flag12()*1.5;
    }
    function H45_VesLin13kg()
    {

        //вес линии 13, кг
        //умножение
        //вывод

        return $this->D45_Flag13()*2.1;
    }
    function H46_VesLin14kg()
    {

        //вес линии 14, кг
        //умножение
        //вывод

        return $this->D46_Flag14()*2.25;
    }
    function H48_VesLinItogokg()
    {

        //вес линии итого, кг
        //прибавление
        //вывод

        return $this->H33_VesLin1kg()+$this->H34_VesLin2kg()+$this->H35_VesLin3kg()+$this->H36_VesLin4kg()+$this->H37_VesLin5kg()+
            $this->H38_VesLin6kg()+$this->H39_VesLin7kg()+$this->H40_VesLin8kg()+$this->H41_VesLin9kg()+$this->H42_VesLin10kg()+
            $this->H43_VesLin11kg()+$this->H44_VesLin12kg()+$this->H45_VesLin13kg()+$this->H46_VesLin14kg();
    }
    function H50_VesBolshLinkg()
    {

        //вес большие линии , кг
        //умножение
        //вывод

        return $this->H48_VesLinItogokg()*$this->F49_BolshLinsht();
    }
    function I33_KolvoLamp1sht()
    {

        //количество ламп 1 , шт
        //умножение
        //вывод

        return $this->D33_Flag1()*1;
    }
    function I34_KolvoLamp2sht()
    {

        //количество ламп 2 , шт
        //умножение
        //вывод

        return $this->D34_Flag2()*1;
    }
    function I35_KolvoLamp3sht()
    {

        //количество ламп 3 , шт
        //умножение
        //вывод

        return $this->D35_Flag3()*1;
    }
    function I36_KolvoLamp4sht()
    {

        //количество ламп 4 , шт
        //умножение
        //вывод

        return $this->D36_Flag4()*2;
    }
    function I37_KolvoLamp5sht()
    {

        //количество ламп 5 , шт
        //умножение
        //вывод

        return $this->D37_Flag5()*1;
    }
    function I38_KolvoLamp6sht()
    {

        //количество ламп 6 , шт
        //умножение
        //вывод

        return $this->D38_Flag6()*2;
    }
    function I39_KolvoLamp7sht()
    {

        //количество ламп 7 , шт
        //умножение
        //вывод

        return $this->D39_Flag7()*1;
    }
    function I40_KolvoLamp8sht()
    {

        //количество ламп 8 , шт
        //умножение
        //вывод

        return $this->D40_Flag8()*2;
    }
    function I41_KolvoLamp9sht()
    {

        //количество ламп 9 , шт
        //умножение
        //вывод

        return $this->D41_Flag9()*1;
    }
    function I42_KolvoLamp10sht()
    {

        //количество ламп 10 , шт
        //умножение
        //вывод

        return $this->D42_Flag10()*2;
    }
    function I43_KolvoLamp11sht()
    {

        //количество ламп 11 , шт
        //умножение
        //вывод

        return $this->D43_Flag11()*2;
    }
    function I44_KolvoLamp12sht()
    {

        //количество ламп 12 , шт
        //умножение
        //вывод

        return $this->D44_Flag12()*2;
    }
    function I45_KolvoLamp13sht()
    {

        //количество ламп 13 , шт
        //умножение
        //вывод

        return $this->D45_Flag13()*3;
    }
    function I46_KolvoLamp14sht()
    {

        //количество ламп 14 , шт
        //умножение
        //вывод

        return $this->D46_Flag14()*3;
    }
    function I48_KolvoLampLinItogosht()
    {

        //количество ламп линия итого , шт
        //прибавление
        //вывод

        return $this->I33_KolvoLamp1sht()+$this->I34_KolvoLamp2sht()+$this->I35_KolvoLamp3sht()+$this->I36_KolvoLamp4sht()+
            $this->I37_KolvoLamp5sht()+$this->I38_KolvoLamp6sht()+$this->I39_KolvoLamp7sht()+$this->I40_KolvoLamp8sht()+
            $this->I41_KolvoLamp9sht()+$this->I42_KolvoLamp10sht()+$this->I43_KolvoLamp11sht()+$this->I44_KolvoLamp12sht()+
            $this->I45_KolvoLamp13sht()+$this->I46_KolvoLamp14sht();
    }
    function I50_KolvoBolshLinsht()
    {

        //количество ламп 14 , шт
        //умножение
        //вывод

        return $this->I48_KolvoLampLinItogosht()*$this->F49_BolshLinsht();
    }
    function J33_DlnLampLin1mm()
    {

        //длина ламп линии 1, mm
        //умножение
        //вывод

        return $this->D33_Flag1()*300;
    }
    function J34_DlnLampLin2mm()
    {

        //длина ламп линии 2, mm
        //умножение
        //вывод

        return $this->D34_Flag2()*455;
    }
    function J35_DlnLampLin3mm()
    {

        //длина ламп линии 3, mm
        //умножение
        //вывод

        return $this->D35_Flag3()*605;
    }
    function J36_DlnLampLin4mm()
    {

        //длина ламп линии 4, mm
        //умножение
        //вывод

        return $this->D36_Flag4()*910;
    }
    function J37_DlnLampLin5mm()
    {

        //длина ламп линии 5, mm
        //умножение
        //вывод

        return $this->D37_Flag5()*915;
    }
    function J38_DlnLampLin6mm()
    {

        //длина ламп линии 6, mm
        //умножение
        //вывод

        return $this->D38_Flag6()*1210;
    }
    function J39_DlnLampLin7mm()
    {

        //длина ламп линии 7, mm
        //умножение
        //вывод

        return $this->D39_Flag7()*1215;
    }
    function J40_DlnLampLin8mm()
    {

        //длина ламп линии 8, mm
        //умножение
        //вывод

        return $this->D40_Flag8()*1920;
    }
    function J41_DlnLampLin9mm()
    {

        //длина ламп линии 9, mm
        //умножение
        //вывод

        return $this->D41_Flag9()*1515;
    }
    function J42_DlnLampLin10mm()
    {

        //длина ламп линии 10, mm
        //умножение
        //вывод

        return $this->D42_Flag10()*1820;
    }
    function J43_DlnLampLin11mm()
    {

        //длина ламп линии 11, mm
        //умножение
        //вывод

        return $this->D43_Flag11()*2130;
    }
    function J44_DlnLampLin12mm()
    {

        //длина ламп линии 12, mm
        //умножение
        //вывод

        return $this->D44_Flag12()*2430;
    }
    function J45_DlnLampLin13mm()
    {

        //длина ламп линии 13, mm
        //умножение
        //вывод

        return $this->D45_Flag13()*3035;
    }
    function J46_DlnLampLin14mm()
    {

        //длина ламп линии 14, mm
        //умножение
        //вывод

        return $this->D46_Flag14()*3645;
    }
    function J48_DlnLampLinItogomm()
    {

        //длина ламп линия итого, mm
        //прибавление
        //вывод

        return $this->J33_DlnLampLin1mm()+$this->J34_DlnLampLin2mm()+$this->J35_DlnLampLin3mm()+$this->J36_DlnLampLin4mm()+
            $this->J37_DlnLampLin5mm()+$this->J38_DlnLampLin6mm()+$this->J39_DlnLampLin7mm()+$this->J40_DlnLampLin8mm()+
            $this->J41_DlnLampLin9mm()+$this->J42_DlnLampLin10mm()+$this->J43_DlnLampLin11mm()+$this->J44_DlnLampLin12mm()+
            $this->J45_DlnLampLin13mm()+$this->J46_DlnLampLin14mm();
    }
    function J50_DlnLampBolshLinmm()
    {

        //длина ламп большие линии, mm
        //умножение
        //вывод

        return $this->J48_DlnLampLinItogomm()*$this->F49_BolshLinsht();
    }
    function H52_PrisutBolshLin()
    {

        //присутсвие большей линии
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->F50_VseBolshLingrn()>=$this->F25_VseBolshLingrn())
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function H53_PrisutmenshLin()
    {

        //присутсвие меньшей линии
        //если условие = true, то вывести 0
        //иначе - вывести 1
        //вывод

        if ($this->H52_PrisutBolshLin()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    function F56_StoimLiniyItogogrn()
    {

        //стоимость линий итого, грн
        //умножение и прибавление
        //вывод

    return $this->F25_VseBolshLingrn()*$this->H52_PrisutBolshLin()+$this->F50_VseBolshLingrn()*$this->H53_PrisutmenshLin();
    }
    function G56_EnergopotLiniyItogovt()
    {

        //энергопотребеление линий итого, вт
        //умножение и прибавление
        //вывод

        return $this->G25_EnergoVseBolshLinvt()*$this->H52_PrisutBolshLin()+$this->G50_EnergoVseBolshLinvt()*$this->H53_PrisutmenshLin();
    }
    function H56_VesLiniyItogokg()
    {

        //вес линий итого, кг
        //умножение и прибавление
        //вывод

        return $this->H25_VesBolshLinkg()*$this->H52_PrisutBolshLin()+$this->H50_VesBolshLinkg()*$this->H53_PrisutmenshLin();
    }
    function I56_KolvoLampItogosht()
    {

        //количество ламп итого, шт
        //умножение и прибавление
        //вывод

        return $this->I25_KolvoBolshLinsht()*$this->H52_PrisutBolshLin()+$this->I50_KolvoBolshLinsht()*$this->H53_PrisutmenshLin();
    }
    function J55_DlnLiniyItogomm()
    {

        //длина линий итого, мм
        //умножение и прибавление
        //вывод

        return $this->J25_DlnLampBolshLinmm()*$this->H52_PrisutBolshLin()+$this->J50_DlnLampBolshLinmm()*$this->H53_PrisutmenshLin();
    }
    function J56_DlnLiniyItogom()
    {

        //длина линий итого, м
        //деление
        //вывод

        return $this->J55_DlnLiniyItogomm()/1000;
    }
    function M5_MontProvodm()
    {

        //монт провод, м
        //умножение
        //вывод

        return $this->J56_DlnLiniyItogom()*L10_BB80_K_DlnLampMontProvodPV1;
    }
    function M6_MontProvodgrn()
    {

        //монт провод, грн
        //умножение
        //вывод

        return $this->M5_MontProvodm()*L10_AF82_ProvodPV1_075mm;
    }
    function M8_SetKabelm()
    {

        //сетевой кабель, м
        //значение
        //вывод

        return L10_BB72_DlnVnesSetKabel_mp;
    }
    function M9_SetKabelgrn()
    {

        //сетевой кабель, грн
        //умножение
        //вывод

        return $this->M8_SetKabelm()*L10_AF79_CabelCu_1mm2_13A;
    }
    function M11_MatItogogrn()
    {

        //материалы итого, грн
        //умножение
        //вывод

        return $this->F56_StoimLiniyItogogrn()+$this->M6_MontProvodgrn()+$this->M9_SetKabelgrn();
    }
    function P6_StoimMatgrn()
    {

        //стоимость материалов, грн
        //значение
        //вывод

        return $this->M11_MatItogogrn();
    }
    function P10_TrudLampmin()
    {

        //трудоемкость лампы , мин
        //умножение
        //вывод

        return $this->I56_KolvoLampItogosht()*L10_BT56_MontajLamp_1sht;
    }
    function P11_StoimRabgrn()
    {

        //стоимость работы, грн
        //округление и умножение
        //вывод

        return round ($this->P10_TrudLampmin()*L10_C67_K1, 0);
    }
    function P21_Energopotvt()
    {

        //энергопотребление, вт
        //значение
        //вывод

        return $this->G56_EnergopotLiniyItogovt();
    }
    function P22_Veskg()
    {

        //вес, кг
        //значение
        //вывод

        return $this->H56_VesLiniyItogokg();
    }
    function P24_Itogogrn()
    {

        //итого, грн
        //прибавление
        //вывод

        return $this->P6_StoimMatgrn()+$this->P11_StoimRabgrn();
    }










}
