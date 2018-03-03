<?php namespace almaz44\light\calculator;
include_once __DIR__ . '/L10.php';
/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 03.08.2017
 * Time: 10:08
 */
class L18_1
{
    // Входные параметры:
    public $B5_BigStor_cm; // большая сторона
    public $B6_SmallStor_cm; // меньшая сторона

    public function __construct($BigStor_cm = 300, $SmallStor_cm = 60)

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

class L18_2
{
    // Входные параметры:
// Входные параметры:
    public $T5_RoofVisorOut; // крыша/козырек улица
    public $T6_WallOut; // стена улица
    public $T7_WallIn; // стена помещение
    public $T8_2SideIn; // 2 стороны помещение
    public $T9_4SideIn; // 4 стороны помещение

    public $T11_BigStor; // Большая сторона
    public $T12_SmallStor; // Маленькая сторона



    public function __construct($RoofVisorOut = 0, $WallOut = 0, $WallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $BigStor = 300, $SmallStor = 60)

    {
        // Заполнение входных данных.
        $this->T5_RoofVisorOut = $RoofVisorOut;
        $this->T6_WallOut = $WallOut;
        $this->T7_WallIn = $WallIn;
        $this->T8_2SideIn = $SideIn2;
        $this->T9_4SideIn = $SideIn4;
        $this->T11_BigStor = $BigStor;
        $this->T12_SmallStor = $SmallStor;

    }

    function W5_Ulica()
    {
        //если (T7+T8+T9)=0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->T7_WallIn+$this->T8_2SideIn+$this->T9_4SideIn)==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function W11_LargeSize_m()
    {
        //деление и округление
        //вывод

        return round($this->T11_BigStor/100, 2);
    }
    function W12_SmallSize_m()
    {
        //деление и округление
        //вывод

        return round($this->T12_SmallStor/100, 2);
    }
    function W13_PlochadFasada_m2()
    {
        //умножение
        //вывод

        return ($this->W11_LargeSize_m()*$this->W12_SmallSize_m());
    }
    function W15_KolichestvoKlasterov_shtuk()
    {
        //деление и округление
        //вывод

        return round($this->W13_PlochadFasada_m2()/L10_BB77_PloshOsvKlast3750and3krandIP65_m2, 0);
    }
    function W16_StoimostKlasterov_grn()
    {
        //умножение
        //вывод

        return ($this->W15_KolichestvoKlasterov_shtuk()*L10_AF57_Claster3750_3kr_IP65S);
    }

    function W17_MochostKlasterov_Vt()
    {
        //умножение
        //вывод

        return ($this->W15_KolichestvoKlasterov_shtuk()*L10_AI57_Claster3750_3kr_IP65P);
    }
    function W18_PotreblTok_A()
    {
        //деление
        //вывод

        return ($this->W17_MochostKlasterov_Vt()/12);
    }
    function W19_MinMoshonostBP_Vt()
    {
        //умножение
        //вывод

        return ($this->W17_MochostKlasterov_Vt()*L10_BB78_K_ZapasPoTokuDlBP);
    }
    function W21_VesKlasterov_kg()
    {
        //умножение
        //вывод

        return ($this->W15_KolichestvoKlasterov_shtuk()*L10_AG57_Claster3750_3kr_IP65V);
    }
    function W23_KabelSegment_mp()
    {
        //деление и округление
        //вывод

        return round($this->W15_KolichestvoKlasterov_shtuk()/50, 0);
    }
    function W24_KabelSegment_grn()
    {
        //умножение
        //вывод

        return ($this->W23_KabelSegment_mp()*L10_AF79_CabelCu_1mm2_13A);
    }
    function W26_KabelBlochni_mp()
    {
        //деление и округление
        //вывод

        return round($this->W18_PotreblTok_A()/20, 0)*4.5;
    }
    function W27_KabelBlochni_grn()
    {
        //умножение
        //вывод

        return ($this->W26_KabelBlochni_mp()*L10_AF80_CabelCu_15mm2_20A);
    }
    function W29_KabelItogo_grn()
    {
        //умножение
        //вывод

        return $this->W24_KabelSegment_grn()+$this->W27_KabelBlochni_grn();
    }
    function Y6_1PodborBPIP20()
    {
        //W19>0 и W19<=24, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>0 and $this->W19_MinMoshonostBP_Vt()<=24)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y7_2PodborBPIP20()
    {
        //W19>24 и W19<=36, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>24 and $this->W19_MinMoshonostBP_Vt()<=36)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y8_3PodborBPIP20()
    {
        //W19>36 и W19<=48, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>36 and $this->W19_MinMoshonostBP_Vt()<=48)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y9_4PodborBPIP20()
    {
        //W19>48 и W19<=60, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>48 and $this->W19_MinMoshonostBP_Vt()<=60)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y10_5PodborBPIP20()
    {
        //W19>60 и W19<=80, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>60 and $this->W19_MinMoshonostBP_Vt()<=80)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y11_6PodborBPIP20()
    {
        //W19>80 и W19<=100, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>80 and $this->W19_MinMoshonostBP_Vt()<=100)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y12_7PodborBPIP20()
    {
        //W19>100 и W19<=120, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>100 and $this->W19_MinMoshonostBP_Vt()<=120)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y13_8PodborBPIP20()
    {
        //W19>120 и W19<=180, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>120 and $this->W19_MinMoshonostBP_Vt()<=180)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y14_9PodborBPIP20()
    {
        //W19>180 и W19<=240, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>180 and $this->W19_MinMoshonostBP_Vt()<=240)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y15_10PodborBPIP20()
    {
        //W19>240 и W19<=360, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>240 and $this->W19_MinMoshonostBP_Vt()<=360)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y16_11PodborBPIP20()
    {
        //W19>360 и W19<=504, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->W19_MinMoshonostBP_Vt()>360 and $this->W19_MinMoshonostBP_Vt()<=504)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AA6_1Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y6_1PodborBPIP20()*L10_AF20_PowerSupply_24VT_IP20S);
    }
    function AA7_2Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y7_2PodborBPIP20()*L10_AF21_PowerSupply_36VT_IP20S);
    }
    function AA8_3Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y8_3PodborBPIP20()*L10_AF22_PowerSupply_48VT_IP20S);
    }
    function AA9_4Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y9_4PodborBPIP20()*L10_AF23_PowerSupply_60VT_IP20S);
    }
    function AA10_5Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y10_5PodborBPIP20()*L10_AF24_PowerSupply_80VT_IP20S);
    }
    function AA11_6Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y11_6PodborBPIP20()*L10_AF25_PowerSupply_100VT_IP20S);
    }
    function AA12_7Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y12_7PodborBPIP20()*L10_AF26_PowerSupply_120VT_IP20S);
    }
    function AA13_8Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y13_8PodborBPIP20()*L10_AF27_PowerSupply_180VT_IP20S);
    }
    function AA14_9Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y14_9PodborBPIP20()*L10_AF28_PowerSupply_240VT_IP20S);
    }
    function AA15_10Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y15_10PodborBPIP20()*L10_AF29_PowerSupply_360VT_IP20S);
    }
    function AA16_11Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y16_11PodborBPIP20()*L10_AF30_PowerSupply_504BT_IP20S);
    }
    function AB6_1Ves()
    {
        //умножение
        //вывод
        return ($this->Y6_1PodborBPIP20()*L10_AG20_PowerSupply_24VT_IP20V);
    }
    function AB7_2Ves()
    {
        //умножение
        //вывод
        return ($this->Y7_2PodborBPIP20()*L10_AG21_PowerSupply_36VT_IP20V);
    }
    function AB8_3Ves()
    {
        //умножение
        //вывод
        return ($this->Y8_3PodborBPIP20()*L10_AG22_PowerSupply_48VT_IP20V);
    }
    function AB9_4Ves()
    {
        //умножение
        //вывод
        return ($this->Y9_4PodborBPIP20()*L10_AG23_PowerSupply_60VT_IP20V);
    }
    function AB10_5Ves()
    {
        //умножение
        //вывод
        return ($this->Y10_5PodborBPIP20()*L10_AG24_PowerSupply_80VT_IP20V);
    }
    function AB11_6Ves()
    {
        //умножение
        //вывод
        return ($this->Y11_6PodborBPIP20()*L10_AG25_PowerSupply_100VT_IP20V);
    }
    function AB12_7Ves()
    {
        //умножение
        //вывод
        return ($this->Y12_7PodborBPIP20()*L10_AG26_PowerSupply_120VT_IP20V);
    }
    function AB13_8Ves()
    {
        //умножение
        //вывод
        return ($this->Y13_8PodborBPIP20()*L10_AG27_PowerSupply_180VT_IP20V);
    }
    function AB14_9Ves()
    {
        //умножение
        //вывод
        return ($this->Y14_9PodborBPIP20()*L10_AG28_PowerSupply_240VT_IP20V);
    }
    function AB15_10Ves()
    {
        //умножение
        //вывод
        return ($this->Y15_10PodborBPIP20()*L10_AG29_PowerSupply_360VT_IP20V);
    }
    function AB16_11Ves()
    {
        //умножение
        //вывод
        return ($this->Y16_11PodborBPIP20()*L10_AG30_PowerSupply_504BT_IP20V);
    }
    function AA18_KabelItogo_grn()
    {
        //сложение
        //вывод

        return $this->AA6_1Stoimost()+$this->AA7_2Stoimost()+$this->AA8_3Stoimost()+$this->AA9_4Stoimost()+$this->AA10_5Stoimost()+$this->AA11_6Stoimost()+$this->AA12_7Stoimost()+$this->AA13_8Stoimost()+$this->AA14_9Stoimost()+$this->AA15_10Stoimost()+$this->AA16_11Stoimost();
    }

    function AB18_2ItogoBPBezGarantii()
    {
        //сложение
        //вывод

        return ($this->AB6_1Ves()+$this->AB7_2Ves()+$this->AB8_3Ves()+$this->AB9_4Ves()+$this->AB10_5Ves()+$this->AB11_6Ves()+$this->AB12_7Ves()+$this->AB13_8Ves()+$this->AB14_9Ves()+$this->AB15_10Ves()+$this->AB16_11Ves());
    }
    function AA19_BPSGarantiei_grn()
    {
        //умножение
        //вывод
        return ($this->AA18_KabelItogo_grn()*L10_BB79_GarantKoefNaBP);
    }

    function AE5_MontagKlasterov_min()
    {
        //умножение
        //вывод
        return ($this->W15_KolichestvoKlasterov_shtuk()*L10_BT57_MontajKlast_1sht);
    }
    function AE6_MontagBP_min()
    {

        //вывод
        return L10_BT55_MontajBlockPit_1sht;
    }
    function AH6_StoimostMaterialov_grn()
    {
        //сложение, умножение и округление
        //вывод
        return round(($this->W16_StoimostKlasterov_grn()+$this->W29_KabelItogo_grn()+$this->AA19_BPSGarantiei_grn())*$this->W5_Ulica(), 0);
    }
    function AH10_TrydoemkostKlaster_min()
    {
        //сложение, умножение и округление
        //вывод
        return ($this->AE5_MontagKlasterov_min()+$this->AE6_MontagBP_min())*$this->W5_Ulica();
    }
    function AH11_StoimostMaterialov_grn()
    {
        //умножение и округление
        //вывод
        return round($this->AH10_TrydoemkostKlaster_min()*L10_C67_K1,0);
    }
    function AH21_Energopotreblenie_Vt()
    {
        //умножение и округление
        //вывод
        return round($this->W17_MochostKlasterov_Vt()*$this->W5_Ulica(),0);
    }
    function AH22_Ves_kg()
    {
        //сложение, умножение и округление
        //вывод
        return round(($this->W21_VesKlasterov_kg()+$this->AB18_2ItogoBPBezGarantii())*$this->W5_Ulica(),1);
    }
    function AH24_Itogo_grn()
    {
        //сложение
        //вывод
        return ($this->AH6_StoimostMaterialov_grn()+$this->AH11_StoimostMaterialov_grn());
    }

}

class L18_3
{
    // Входные параметры:
// Входные параметры:
    public $AL5_RoofVisorOut; // крыша/козырек улица
    public $AL6_AOallOut; // стена улица
    public $AL7_AOallIn; // стена помещение
    public $AL8_2SideIn; // 2 стороны помещение
    public $AL9_4SideIn; // 4 стороны помещение

    public $AL11_BigStor; // Большая сторона
    public $AL12_SmallStor; // Маленькая сторона



    public function __construct($RoofVisorOut = 0, $AOallOut = 0, $AOallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $BigStor = 300, $SmallStor = 60)

    {
        // Заполнение входных данных.
        $this->AL5_RoofVisorOut = $RoofVisorOut;
        $this->AL6_AOallOut = $AOallOut;
        $this->AL7_AOallIn = $AOallIn;
        $this->AL8_2SideIn = $SideIn2;
        $this->AL9_4SideIn = $SideIn4;
        $this->AL11_BigStor = $BigStor;
        $this->AL12_SmallStor = $SmallStor;

    }

    function AO5_Ulica()
    {
        //если (AL7+AL8+AL9)=0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->AL7_AOallIn+$this->AL8_2SideIn+$this->AL9_4SideIn)==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AO6_Pomechenie()
    {
        //если AO5=0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->AO5_Ulica()==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AO7_2Storoni()
    {
        //деление и округление
        //вывод

        return round($this->AL8_2SideIn);
    }
    function AO8_4Storoni()
    {
        //деление и округление
        //вывод

        return round($this->AL9_4SideIn);
    }
    function AO9_1Storona()
    {
        //если (AO7+AO8)=0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->AO7_2Storoni()+$this->AO8_4Storoni())==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AO10_KoeficientYmnogenia()
    {
        //умножение и сложение
        //вывод
        return ($this->AO7_2Storoni()*2+$this->AO8_4Storoni()*4+$this->AO9_1Storona()*1);
    }

    function AO13_LargeSize_m()
    {
        //деление и округление
        //вывод

        return round($this->AL11_BigStor/100, 2);
    }
    function AO14_SmallSize_m()
    {
        //деление и округление
        //вывод

        return round($this->AL12_SmallStor/100, 2);
    }
    function AO15_PlochadFasada_m2()
    {
        //умножение
        //вывод

        return ($this->AO13_LargeSize_m()*$this->AO14_SmallSize_m());
    }
    function AO17_DlinaPolosi_m()
    {
        //деление, умножение и сложение
        //вывод

        return ($this->AO13_LargeSize_m()/L10_BB76_K_ShagLinGibkPolos_m*$this->AO14_SmallSize_m()+$this->AO13_LargeSize_m())*L10_BB66_K_KoefPererashGibkDiodPolos;
    }
    function AO18_StoimostPolosi_grn()
    {
        //умножение
        //вывод

        return ($this->AO17_DlinaPolosi_m()*L10_AF59_LentaPlastik3750_IP20S);
    }

    function AO19_MochostPolosi_Vt()
    {
        //умножение
        //вывод

        return ($this->AO17_DlinaPolosi_m()*L10_AI59_LentaPlastik3750_IP65P);
    }
    function AO20_PotreblTok_A()
    {
        //деление
        //вывод

        return ($this->AO19_MochostPolosi_Vt()/12);
    }
    function AO21_MinMoshonostBP_Vt()
    {
        //умножение
        //вывод

        return ($this->AO19_MochostPolosi_Vt()*L10_BB78_K_ZapasPoTokuDlBP);
    }
    function AO23_VesPolosi_kg()
    {
        //умножение
        //вывод

        return ($this->AO17_DlinaPolosi_m()*L10_AG59_LentaPlastik3750_IP20V);
    }
    function AO25_KabelSegment_mp()
    {
        //деление и округление
        //вывод

        return ceil($this->AO17_DlinaPolosi_m()/5);
    }
    function AO26_KabelSegment_grn()
    {
        //умножение
        //вывод

        return ($this->AO25_KabelSegment_mp()*L10_AF79_CabelCu_1mm2_13A);
    }
    function AO28_KabelBlochni_mp()
    {
        //деление и округление
        //вывод

        return ceil($this->AO20_PotreblTok_A()/20)*4.5;
    }
    function AO29_KabelBlochni_grn()
    {
        //умножение
        //вывод

        return ($this->AO28_KabelBlochni_mp()*L10_AF80_CabelCu_15mm2_20A);
    }
    function AO30_KabelItogo_grn()
    {
        //умножение
        //вывод

        return $this->AO26_KabelSegment_grn()+$this->AO29_KabelBlochni_grn();
    }

    function AQ6_1PodborBPIP20()
    {
        //AO21>0 и AO21<=24, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>0 and $this->AO21_MinMoshonostBP_Vt()<=24)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ7_2PodborBPIP20()
    {
        //AO21>24 и AO21<=36, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>24 and $this->AO21_MinMoshonostBP_Vt()<=36)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ8_3PodborBPIP20()
    {
        //AO21>36 и AO21<=48, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>36 and $this->AO21_MinMoshonostBP_Vt()<=48)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ9_4PodborBPIP20()
    {
        //AO21>48 и AO21<=60, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>48 and $this->AO21_MinMoshonostBP_Vt()<=60)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ10_5PodborBPIP20()
    {
        //AO21>60 и AO21<=80, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>60 and $this->AO21_MinMoshonostBP_Vt()<=80)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ11_6PodborBPIP20()
    {
        //AO21>80 и AO21<=100, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>80 and $this->AO21_MinMoshonostBP_Vt()<=100)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ12_7PodborBPIP20()
    {
        //AO21>100 и AO21<=120, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>100 and $this->AO21_MinMoshonostBP_Vt()<=120)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ13_8PodborBPIP20()
    {
        //AO21>120 и AO21<=180, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>120 and $this->AO21_MinMoshonostBP_Vt()<=180)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ14_9PodborBPIP20()
    {
        //AO21>180 и AO21<=240, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>180 and $this->AO21_MinMoshonostBP_Vt()<=240)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ15_10PodborBPIP20()
    {
        //AO21>240 и AO21<=360, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>240 and $this->AO21_MinMoshonostBP_Vt()<=360)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ16_11PodborBPIP20()
    {
        //AO21>360 и AO21<=504, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO21_MinMoshonostBP_Vt()>360 and $this->AO21_MinMoshonostBP_Vt()<=504)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AS6_1Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ6_1PodborBPIP20()*L10_AF20_PowerSupply_24VT_IP20S);
    }
    function AS7_2Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ7_2PodborBPIP20()*L10_AF21_PowerSupply_36VT_IP20S);
    }
    function AS8_3Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ8_3PodborBPIP20()*L10_AF22_PowerSupply_48VT_IP20S);
    }
    function AS9_4Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ9_4PodborBPIP20()*L10_AF23_PowerSupply_60VT_IP20S);
    }
    function AS10_5Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ10_5PodborBPIP20()*L10_AF24_PowerSupply_80VT_IP20S);
    }
    function AS11_6Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ11_6PodborBPIP20()*L10_AF25_PowerSupply_100VT_IP20S);
    }
    function AS12_7Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ12_7PodborBPIP20()*L10_AF26_PowerSupply_120VT_IP20S);
    }
    function AS13_8Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ13_8PodborBPIP20()*L10_AF27_PowerSupply_180VT_IP20S);
    }
    function AS14_9Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ14_9PodborBPIP20()*L10_AF28_PowerSupply_240VT_IP20S);
    }
    function AS15_10Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ15_10PodborBPIP20()*L10_AF29_PowerSupply_360VT_IP20S);
    }
    function AS16_11Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ16_11PodborBPIP20()*L10_AF30_PowerSupply_504BT_IP20S);
    }
    function AT6_1Ves()
    {
        //умножение
        //вывод
        return ($this->AQ6_1PodborBPIP20()*L10_AG20_PowerSupply_24VT_IP20V);
    }
    function AT7_2Ves()
    {
        //умножение
        //вывод
        return ($this->AQ7_2PodborBPIP20()*L10_AG21_PowerSupply_36VT_IP20V);
    }
    function AT8_3Ves()
    {
        //умножение
        //вывод
        return ($this->AQ8_3PodborBPIP20()*L10_AG22_PowerSupply_48VT_IP20V);
    }
    function AT9_4Ves()
    {
        //умножение
        //вывод
        return ($this->AQ9_4PodborBPIP20()*L10_AG23_PowerSupply_60VT_IP20V);
    }
    function AT10_5Ves()
    {
        //умножение
        //вывод
        return ($this->AQ10_5PodborBPIP20()*L10_AG24_PowerSupply_80VT_IP20V);
    }
    function AT11_6Ves()
    {
        //умножение
        //вывод
        return ($this->AQ11_6PodborBPIP20()*L10_AG25_PowerSupply_100VT_IP20V);
    }
    function AT12_7Ves()
    {
        //умножение
        //вывод
        return ($this->AQ12_7PodborBPIP20()*L10_AG26_PowerSupply_120VT_IP20V);
    }
    function AT13_8Ves()
    {
        //умножение
        //вывод
        return ($this->AQ13_8PodborBPIP20()*L10_AG27_PowerSupply_180VT_IP20V);
    }
    function AT14_9Ves()
    {
        //умножение
        //вывод
        return ($this->AQ14_9PodborBPIP20()*L10_AG28_PowerSupply_240VT_IP20V);
    }
    function AT15_10Ves()
    {
        //умножение
        //вывод
        return ($this->AQ15_10PodborBPIP20()*L10_AG29_PowerSupply_360VT_IP20V);
    }
    function AT16_11Ves()
    {
        //умножение
        //вывод
        return ($this->AQ16_11PodborBPIP20()*L10_AG30_PowerSupply_504BT_IP20V);
    }
    function AS18_KabelItogo_grn()
    {
        //сложение
        //вывод

        return $this->AS6_1Stoimost()+$this->AS7_2Stoimost()+$this->AS8_3Stoimost()+$this->AS9_4Stoimost()+$this->AS10_5Stoimost()+$this->AS11_6Stoimost()+$this->AS12_7Stoimost()+$this->AS13_8Stoimost()+$this->AS14_9Stoimost()+$this->AS15_10Stoimost()+$this->AS16_11Stoimost();
    }

    function AT18_2ItogoBPBezGarantii()
    {
        //сложение
        //вывод

        return ($this->AT6_1Ves()+$this->AT7_2Ves()+$this->AT8_3Ves()+$this->AT9_4Ves()+$this->AT10_5Ves()+$this->AT11_6Ves()+$this->AT12_7Ves()+$this->AT13_8Ves()+$this->AT14_9Ves()+$this->AT15_10Ves()+$this->AT16_11Ves());
    }
    function AS19_BPSGarantiei_grn()
    {
        //умножение
        //вывод
        return ($this->AS18_KabelItogo_grn()*L10_BB78_K_ZapasPoTokuDlBP);
    }
    function AS21_MaterialiItogo_grn()
    {
        //умножение и сложение
        //вывод
        return ($this->AO18_StoimostPolosi_grn()+$this->AO30_KabelItogo_grn()+$this->AS19_BPSGarantiei_grn())*$this->AO10_KoeficientYmnogenia();
    }

    function AW5_MontagKlasterov_min()
    {
        //умножение
        //вывод
        return ($this->AO17_DlinaPolosi_m()*L10_BT59_MontajGibkDiodPolos_1mp);
    }
    function AW6_MontagBP_min()
    {

        //вывод
        return L10_BT55_MontajBlockPit_1sht;
    }
    function AW8_MontagElektriki_min()
    {
        //сложение, умножение и округление
        //вывод
        return ($this->AW5_MontagKlasterov_min()+$this->AW6_MontagBP_min())*$this->AO10_KoeficientYmnogenia();
    }
    function AZ6_StoimostMaterialov_grn()
    {
        //округление
        //вывод
        return round($this->AS21_MaterialiItogo_grn(), 0);
    }
    function AZ10_TrydoemkostKlaster_min()
    {
        //округление
        //вывод
        return round($this->AW8_MontagElektriki_min(), 0);
    }
    function AZ11_StoimostMaterialov_grn()
    {
        //умножение и округление
        //вывод
        return round($this->AZ10_TrydoemkostKlaster_min()*L10_C67_K1,0);
    }
    function AZ21_Energopotreblenie_Vt()
    {
        //умножение и округление
        //вывод
        return round($this->AO19_MochostPolosi_Vt()*$this->AO10_KoeficientYmnogenia(),0);
    }
    function AZ22_Ves_kg()
    {
        //сложение, умножение и округление
        //вывод
        return round(($this->AO23_VesPolosi_kg()+$this->AT18_2ItogoBPBezGarantii())*$this->AO10_KoeficientYmnogenia(),1);
    }
    function AZ24_Itogo_grn()
    {
        //сложение
        //вывод
        return ($this->AZ6_StoimostMaterialov_grn()+$this->AZ11_StoimostMaterialov_grn());
    }

}

class L18_4
{
    // Входные параметры:
// Входные параметры:
    public $BD5_RoofVisorOut; // крыша/козырек улица
    public $BD6_AOallOut; // стена улица
    public $BD7_AOallIn; // стена помещение
    public $BD8_2SideIn; // 2 стороны помещение
    public $BD9_4SideIn; // 4 стороны помещение

    public $BD11_istochniksveta; // источник света (1- диоды/2-лампы

    private $L18_1_lamp;
    private $L18_2_klaster;
    private $L18_3_line;




    public function __construct($RoofVisorOut = 0, $AOallOut = 0, $AOallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $BigStor = 300, $SmallStor = 60,
                                $Istochniksveta = 2)

    {
        $this->L18_1_lamp = new L18_1($BigStor, $SmallStor);
        $this->L18_2_klaster = new L18_2($RoofVisorOut,$AOallOut,$AOallIn,$SideIn2,$SideIn4,$BigStor,$SmallStor);
        $this->L18_3_line = new L18_3($RoofVisorOut,$AOallOut,$AOallIn,$SideIn2,$SideIn4,$BigStor,$SmallStor);

        // Заполнение входных данных.
        $this->BD5_RoofVisorOut = $RoofVisorOut;
        $this->BD6_AOallOut = $AOallOut;
        $this->BD7_AOallIn = $AOallIn;
        $this->BD8_2SideIn = $SideIn2;
        $this->BD9_4SideIn = $SideIn4;
        $this->BD11_Istochniksveta = $Istochniksveta;


    }

    function BG5_TrebovanieDiodov()
    {
        //если bd11=1, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->BD11_Istochniksveta==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function BG6_TrebovanieLamp()
    {
        //если bg5=1, то присвоить 0, иначе вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->BG5_TrebovanieDiodov()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    function BG8_DopystimostLamp()
    {
        //если BD5+BD6+BD7=1, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->BD5_RoofVisorOut+$this->BD6_AOallOut+$this->BD7_AOallIn)>=1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function BG9_DopystimostKlasterov()
    {
        //если BD5+BD6>=0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->BD5_RoofVisorOut+$this->BD6_AOallOut)>=1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function BG10_DopystimostLent()
    {
        //если BD5+BD6+BD7>=0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->BD5_RoofVisorOut+$this->BD6_AOallOut+$this->BD7_AOallIn)>=0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function BG11_ObazatelnostLent()
    {
        //если BD8+BD9>=1, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->BD8_2SideIn+$this->BD9_4SideIn)>=1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function BG13_Lampi()
    {
        //умножение
        //вывод

        return ($this->BG6_TrebovanieLamp()*$this->BG8_DopystimostLamp());
    }
    function BG14_Klasteri()
    {
        //умножение
        //вывод

        return ($this->BG5_TrebovanieDiodov()*$this->BG9_DopystimostKlasterov());
    }
    function BG15_Lenti()
    {
        //если BG5*BG10+BG11>=1, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->BG5_TrebovanieDiodov()*$this->BG10_DopystimostLent()+$this->BG11_ObazatelnostLent())>=1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function BJ5_LampiMat_grn()
    {
        // Лампы - материал.
        return ($this->L18_1_lamp->P6_StoimMatgrn());
    }
    function BJ6_KlasteriMat_grn()
    {
        // Кластеры - материал.
        return ($this->L18_2_klaster->AH6_StoimostMaterialov_grn());
    }
    function BJ7_StoimostMat_grn()
    {
        // Ленты - материал.
        return ($this->L18_3_line->AZ6_StoimostMaterialov_grn());
    }
    function BJ9_ElektrikaItogo()
    {
        //сложение и умножение
        //вывод

        return ($this->BJ5_LampiMat_grn()*$this->BG13_Lampi()+$this->BJ6_KlasteriMat_grn()*$this->BG14_Klasteri()+$this->BJ7_StoimostMat_grn()*$this->BG15_Lenti());

    }

    function BK5_LampiVes_kg()
    {
        return ($this->L18_1_lamp->P22_Veskg());
    }
    function BK6_KlasteriVes_kg()
    {
        return ($this->L18_2_klaster->AH22_Ves_kg());
    }
    function BK7_LentiVes_kg()
    {
        return ($this->L18_3_line->AZ22_Ves_kg());
    }
    function BK9_ElektrikaItogo()
    {
        //сложение и умножение
        //вывод

        return ($this->BK5_LampiVes_kg()*$this->BG13_Lampi()+$this->BK6_KlasteriVes_kg()*$this->BG14_Klasteri()+$this->BK7_LentiVes_kg()*$this->BG15_Lenti());

    }

    function BL5_Lampi_Vt()
    {
        return ($this->L18_1_lamp->P21_Energopotvt());
    }
    function BL6_Klasteri_Vt()
    {
        return ($this->L18_2_klaster->AH21_Energopotreblenie_Vt());
    }
    function BL7_Lenti_Vt()
    {
        return ($this->L18_3_line->AZ21_Energopotreblenie_Vt());
    }
    function BL9_ElektrikaItogo()
    {
        //сложение и умножение
        //вывод

        return ($this->BL5_Lampi_Vt()*$this->BG13_Lampi()+$this->BL6_Klasteri_Vt()*$this->BG14_Klasteri()+$this->BL7_Lenti_Vt()*$this->BG15_Lenti());

    }

    function BM5_Lampi_min()
    {
        return ($this->L18_1_lamp->P10_TrudLampmin());
    }
    function BM6_Klasteri_min()
    {
        return ($this->L18_2_klaster->AH10_TrydoemkostKlaster_min());
    }
    function BM7_Lenti_min()
    {
        return ($this->L18_3_line->AZ10_TrydoemkostKlaster_min());
    }
    function BM9_ElektrikaItogo()
    {
        //сложение и умножение
        //вывод

        return ($this->BM5_Lampi_min()*$this->BG13_Lampi()+$this->BM6_Klasteri_min()*$this->BG14_Klasteri()+$this->BM7_Lenti_min()*$this->BG15_Lenti());

    }

    function BO7_BPR()
    {
        return ($this->BG13_Lampi());
    }
    function BO8_BPR()
    {
        //если BO7=1, то присвоить 0, иначе вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->BO7_BPR()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    function BO9_BPR()
    {
        return 1;
    }
    function BP8_Diodi()
    {

        //вывод

        return ($this->BP8_Diodi());

    }
    function BP9_Diodi()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->BO7_BPR() == 1)
        {
            return 'лампы';
        }
        elseif ($this->BO8_BPR() == 1)
        {
            return 'диоды';
        }
        else
        {
            return 0;
        }

    }

    function BS6_StoimostMaterialov_grn()
    {
        //вывод
        return ($this->BJ9_ElektrikaItogo());
    }
    function BS10_TrydoemkostElektrika_min()
    {

        //вывод
        return ($this->BM9_ElektrikaItogo());
    }
    function BS11_StoimostRaboty_grn()
    {
        //умножение и округление
        //вывод
        return round($this->BS10_TrydoemkostElektrika_min()*L10_C67_K1,0);
    }
    function BS20_IstochnikSSveta()
    {

        //вывод
        return ($this->BP9_Diodi());
    }
    function BS21_Energopotreblenie_Vt()
    {

        //вывод
        return ($this->BL9_ElektrikaItogo());
    }
    function BS22_Ves_kg()
    {

        //вывод
        return ($this->BK9_ElektrikaItogo());
    }
    function BS24_Itogo_grn()
    {
        //сложение
        //вывод
        return ($this->BS6_StoimostMaterialov_grn()+$this->BS11_StoimostRaboty_grn());
    }

}