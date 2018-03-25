<?php namespace almaz44\light\calculator;
include_once __DIR__ . '/L10.php';
/**
 * Created by PhpStorm.
 * User: Andrii
 * Date: 25.03.2018
 * Time: 13:00
 */
class L18_1
{
    // Входные параметры:
    public $B5_BigSide_cm; // большая сторона
    public $B6_SmallSide_cm; // меньшая сторона

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)

    {
        // Заполнение входных данных с проверкой.
        $this->B5_BigSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MaxSide_cm : $MinSide_cm;
        $this->B6_SmallSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MinSide_cm : $MaxSide_cm;
    }

    // C-light _ лампы дневного света _ 2

    function B14_BolshProsvmm()
    { 	//больший просвет, мм
        //умножение и отнимание
        //вывод
        return $this->B5_BigSide_cm * 10 - 10;
    }
    function B15_MenshProsvmm()
    { 	//меньшый просвет, мм
        //умножение и отнимание
        //вывод
        return $this->B6_SmallSide_cm * 10 - 10;
    }
    function B16_BolshStorm()
    { 	//большая сторона, м
        return round ( $this->B5_BigSide_cm / 100, 2);
    }
    function B17_MenshStorm()
    { //меньшая сторона, м
        //округление и деление
        //вывод
        return round ( $this->B6_SmallSide_cm / 100, 2);
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
        }    }
    function D9_Flag2()
    { 	//флаг 2
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
        }    }
    function D10_Flag3()
    { 	//флаг 3
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
        }    }
    function D11_Flag4()
    { 	//флаг 4
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
        }    }
    function D12_Flag5()
    { 	//флаг 5
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
        }    }
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
        }    }
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
        }    }
    function D15_Flag8()
    { 	//флаг 8
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
        }    }
    function D16_Flag9()
    { 	//флаг 9
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
        }    }
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
        }    }
    function D18_Flag11()
    { 	//флаг 11
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
        }    }
    function D19_Flag12()
    { 	//флаг 12
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
        }    }
    function D20_Flag13()
    { 	//флаг 13
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
        }    }
    function D21_Flag14()
    { 	//флаг 14
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
        }    }
    function D22_Flag15()
    { 	//флаг 14
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->B14_BolshProsvmm()>=3901 and $this->B14_BolshProsvmm()<=4500)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function D23_Flag16()
    { 	//флаг 14
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->B14_BolshProsvmm()>=4501 and $this->B14_BolshProsvmm()<=5000)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function F8_StoimLin1grn()
    {
        //стоимость линии 1, грн.
        //умножение
        //вывод
        return $this->D8_Flag1()*L10_AF6_LampMulage0459mmS;
    }
    function F9_StoimLin2grn()
    { 	//стоимость линии 2, грн.
        //умножение
        //вывод
        return $this->D9_Flag2()*L10_AF7_Lamp_15VTS;
    }
    function F10_StoimLin3grn()
    { 	//стоимость линии 3, грн.
        //умножение
        //вывод
        return $this->D10_Flag3()*L10_AF8_Lamp_18VTS;
    }
    function F11_StoimLin4grn()
    { 	//стоимость линии 4, грн.
        //умножение
        //вывод
        return $this->D11_Flag4()*2*L10_AF7_Lamp_15VTS;
    }
    function F12_StoimLin5grn()
    { 	//стоимость линии 5, грн.
        //умножение
        //вывод
        return $this->D12_Flag5()*L10_AF9_Lamp_30VTS;
    }
    function F13_StoimLin6grn()
    { 	//стоимость линии 6, грн.
        //умножение
        //вывод
        return $this->D13_Flag6()*2*L10_AF8_Lamp_18VTS;
    }
    function F14_StoimLin7grn()
    { 	//стоимость линии 7, грн.
        //умножение
        //вывод
        return $this->D14_Flag7()*L10_AF10_Lamp_36VTS;
    }
    function F15_StoimLin8grn()
    { 	//стоимость линии 8, грн.
        //умножение
        //вывод
        return $this->D15_Flag8()*(L10_AF9_Lamp_30VTS+L10_AF8_Lamp_18VTS);
    }
    function F16_StoimLin9grn()
    { 	//стоимость линии 9, грн.
        //умножение
        //вывод
        return $this->D16_Flag9()*L10_AF11_Lamp_58VT_S;
    }
    function F17_StoimLin10grn()
    { 	//стоимость линии 10, грн.
        //умножение и прибавление
        //вывод
        return $this->D17_Flag10()*(L10_AF10_Lamp_36VTS+L10_AF8_Lamp_18VTS);
    }
    function F18_StoimLin11grn()
    { 	//стоимость линии 11, грн.
        //умножение и прибавление
        //вывод
        return $this->D18_Flag11()*(L10_AF10_Lamp_36VTS+L10_AF9_Lamp_30VTS);
    }
    function F19_StoimLin12grn()
    { 	//стоимость линии 12, грн.
        //умножение
        //вывод
        return $this->D19_Flag12()*2*L10_AF10_Lamp_36VTS;
    }
    function F20_StoimLin13grn()
    { 	//стоимость линии 13, грн.
        //умножение и прибавление
        //вывод
        return $this->D20_Flag13()*(2*L10_AF10_Lamp_36VTS+L10_AF8_Lamp_18VTS);
    }
    function F21_StoimLin14grn()
    { 	//стоимость линии 14, грн.
        //умножение
        //вывод
        return $this->D21_Flag14()*3*L10_AF10_Lamp_36VTS;
    }
    function F22_StoimLin15grn()
    { 	//стоимость линии 13, грн.
        //умножение и прибавление
        //вывод
        return $this->D22_Flag15()*(3*L10_AF10_Lamp_36VTS+L10_AF8_Lamp_18VTS);
    }
    function F23_StoimLin16grn()
    { 	//стоимость линии 14, грн.
        //умножение
        //вывод
        return $this->D23_Flag16()*4*L10_AF10_Lamp_36VTS;
    }
    function F25_StoimLinItogogrn()
    {	//стоимость линии итого, грн.
        //прибавление
        //вывод
        return $this->F8_StoimLin1grn()+$this->F9_StoimLin2grn()+$this->F10_StoimLin3grn()+$this->F11_StoimLin4grn()+$this->F12_StoimLin5grn()+
               $this->F13_StoimLin6grn()+$this->F14_StoimLin7grn()+$this->F15_StoimLin8grn()+$this->F16_StoimLin9grn()+$this->F17_StoimLin10grn()+
               $this->F18_StoimLin11grn()+$this->F19_StoimLin12grn()+$this->F20_StoimLin13grn()+$this->F21_StoimLin14grn()+$this->F22_StoimLin15grn()+$this->F23_StoimLin16grn();
    }
    function F26_BolshLinsht()
    { 	//большие линии, шт.
        //округление и деление
        //вывод
        return round ($this->B17_MenshStorm()/L10_BB73_K_ShagLinLamp1St_m, 0);
    }
    function F27_VseBolshLingrn()
    { 	//все большие линии, грн.
        //умножение
        //вывод
        return $this->F25_StoimLinItogogrn()*$this->F26_BolshLinsht();
    }
    function G8_EnergoLin1vt()
    {        //энергопот. линии 1, вт
        return $this->D8_Flag1()*L10_AI6_LampMulage0459mmP;
    }
    function G9_EnergoLin2vt()
    {        //энергопот. линии 2, вт
        //умножение
        //вывод
        return $this->D9_Flag2()*15;
    }
    function G10_EnergoLin3vt()
    {        //энергопот. линии 3, вт
        //умножение
        //вывод
        return $this->D10_Flag3()*18;
    }
    function G11_EnergoLin4vt()
    {        //энергопот. линии 4, вт
        //умножение
        //вывод
        return $this->D11_Flag4()*30;
    }
    function G12_EnergoLin5vt()
    {        //энергопот. линии 5, вт
        //умножение
        //вывод
        return $this->D12_Flag5()*30;
    }
    function G13_EnergoLin6vt()
    {        //энергопот. линии 6, вт
        //умножение
        //вывод
        return $this->D13_Flag6()*36;
    }
    function G14_EnergoLin7vt()
    {        //энергопот. линии 7, вт
        //умножение
        //вывод
        return $this->D14_Flag7()*36;
    }
    function G15_EnergoLin8vt()
    {    //энергопот. линии 8, вт
        //умножение
        //вывод
        return $this->D15_Flag8()*48;
    }
    function G16_EnergoLin9vt()
    {        //энергопот. линии 9, вт
        //умножение
        //вывод
        return $this->D16_Flag9()*58;
    }
    function G17_EnergoLin10vt()
    {        //энергопот. линии 10, вт
        //умножение
        //вывод
        return $this->D17_Flag10()*54;
    }
    function G18_EnergoLin11vt()
    {        //энергопот. линии 11, вт
        //умножение
        //вывод
        return $this->D18_Flag11()*66;
    }
    function G19_EnergoLin12vt()
    {        //энергопот. линии 12, вт
        //умножение
        //вывод
        return $this->D19_Flag12()*72;
    }
    function G20_EnergoLin13vt()
    {        //энергопот. линии 13, вт
        //умножение
        //вывод
        return $this->D20_Flag13()*90;
    }
    function G21_EnergoLin14vt()
    {        //энергопот. линии 14, вт
        //умножение
        //вывод
        return $this->D21_Flag14()*138;
    }
    function G22_EnergoLin15vt()
    {        //энергопот. линии 14, вт
        //умножение
        //вывод
        return $this->D22_Flag15()*126;
    }
    function G23_EnergoLin16vt()
    {        //энергопот. линии 14, вт
        //умножение
        //вывод
        return $this->D23_Flag16()*144;
    }
    function G25_EnergoLinItogovt()
    {        //энергопот. линии итого, вт
        //прибавление
        //вывод
        return $this->G8_EnergoLin1vt()+$this->G9_EnergoLin2vt()+$this->G10_EnergoLin3vt()+$this->G11_EnergoLin4vt()+
               $this->G12_EnergoLin5vt()+ $this->G13_EnergoLin6vt()+$this->G14_EnergoLin7vt()+$this->G15_EnergoLin8vt()+
               $this->G16_EnergoLin9vt()+$this->G17_EnergoLin10vt()+$this->G18_EnergoLin11vt()+$this->G19_EnergoLin12vt()+
               $this->G20_EnergoLin13vt()+$this->G21_EnergoLin14vt()+$this->G22_EnergoLin15vt()+$this->G23_EnergoLin16vt();
    }
    function G27_EnergoVseBolshLinvt()
    {        //энергопот. все большие линии , вт
        //умножение
        //вывод
        return $this->G25_EnergoLinItogovt()*$this->F26_BolshLinsht();
    }
    function H8_VesLin1kg()
    {        //вес линии 1, кг
        //умножение
        //вывод
        return $this->D8_Flag1()*L10_AG6_LampMulage0459mmV;
    }
    function H9_VesLin2kg()
    {        //вес линии 2, кг
        //умножение
        //вывод
        return $this->D9_Flag2()*0.54;
    }
    function H10_VesLin3kg()
    {        //вес линии 3, кг
        //умножение
        //вывод
        return $this->D10_Flag3()*0.6;
    }
    function H11_VesLin4kg()
    {        //вес линии 4, кг
        //умножение
        //вывод
        return $this->D11_Flag4()*1.08;
    }
    function H12_VesLin5kg()
    {        //вес линии 5, кг
        //умножение
        //вывод
        return $this->D12_Flag5()*0.68;
    }
    function H13_VesLin6kg()
    {        //вес линии 6, кг
        //умножение
        //вывод
        return $this->D13_Flag6()*1.2;
    }
    function H14_VesLin7kg()
    {        //вес линии 7, кг
        //умножение
        //вывод
        return $this->D14_Flag7()*0.75;
    }
    function H15_VesLin8kg()
    {        //вес линии 8, кг
        //умножение
        //вывод
        return $this->D15_Flag8()*1.28;
    }
    function H16_VesLin9kg()
    {        //вес линии 9, кг
        //умножение
        //вывод
        return $this->D16_Flag9()*1.36;
    }
    function H17_VesLin10kg()
    {        //вес линии 10, кг
        //умножение
        //вывод
        return $this->D17_Flag10()*1.35;
    }
    function H18_VesLin11kg()
    {        //вес линии 11, кг
        //умножение
        //вывод
        return $this->D18_Flag11()*1.43;
    }
    function H19_VesLin12kg()
    {    //вес линии 12, кг
        //умножение
        //вывод
        return $this->D19_Flag12()*1.5;
    }
    function H20_VesLin13kg()
    {        //вес линии 13, кг
        //умножение
        //вывод
        return $this->D20_Flag13()*2.1;
    }
    function H21_VesLin14kg()
    {        //вес линии 14, кг
        //умножение
        //вывод
        return $this->D21_Flag14()*2.25;
    }
    function H22_VesLin15kg()
    {        //вес линии 14, кг
        //умножение
        //вывод
        return $this->D22_Flag15()*2.85;
    }
    function H23_VesLin16kg()
    {        //вес линии 14, кг
        //умножение
        //вывод
        return $this->D23_Flag16()*3;
    }
    function H25_VesLinItogokg()
    {        //вес линии итого, кг
        //прибавление
        //вывод
        return $this->H8_VesLin1kg()+$this->H9_VesLin2kg()+$this->H10_VesLin3kg()+$this->H11_VesLin4kg()+$this->H12_VesLin5kg()+
               $this->H13_VesLin6kg()+$this->H14_VesLin7kg()+$this->H15_VesLin8kg()+$this->H16_VesLin9kg()+$this->H17_VesLin10kg()+
               $this->H18_VesLin11kg()+$this->H19_VesLin12kg()+$this->H20_VesLin13kg()+$this->H21_VesLin14kg()+$this->H22_VesLin15kg()+$this->H23_VesLin16kg();
    }
    function H27_VesBolshLinkg()
    {        //вес большие линии , кг
        //умножение
        //вывод
        return $this->H25_VesLinItogokg()*$this->F26_BolshLinsht();
    }
    function I8_KolvoLamp1sht()
    {        //количество ламп 1 , шт
        //умножение
        //вывод
        return $this->D8_Flag1()*1;
    }
    function I9_KolvoLamp2sht()
    {       //количество ламп 2 , шт
        //умножение
        //вывод
        return $this->D9_Flag2()*1;
    }
    function I10_KolvoLamp3sht()
    {        //количество ламп 3 , шт
        //умножение
        //вывод
        return $this->D10_Flag3()*1;
    }
    function I11_KolvoLamp4sht()
    {        //количество ламп 4 , шт
        //умножение
        //вывод
        return $this->D11_Flag4()*2;
    }
    function I12_KolvoLamp5sht()
    {        //количество ламп 5 , шт
        //умножение
        //вывод
        return $this->D12_Flag5()*1;
    }
    function I13_KolvoLamp6sht()
    {        //количество ламп 6 , шт
        //умножение
        //вывод
        return $this->D13_Flag6()*2;
    }
    function I14_KolvoLamp7sht()
    {        //количество ламп 7 , шт
        //умножение
        //вывод
        return $this->D14_Flag7()*1;
    }
    function I15_KolvoLamp8sht()
    {        //количество ламп 8 , шт
        //умножение
        //вывод
        return $this->D15_Flag8()*2;
    }
    function I16_KolvoLamp9sht()
    {        //количество ламп 9 , шт
        //умножение
        //вывод
        return $this->D16_Flag9()*1;
    }
    function I17_KolvoLamp10sht()
    {        //количество ламп 10 , шт
        //умножение
        //вывод
        return $this->D17_Flag10()*2;
    }
    function I18_KolvoLamp11sht()
    {        //количество ламп 11 , шт
        //умножение
        //вывод
        return $this->D18_Flag11()*2;
    }
    function I19_KolvoLamp12sht()
    {        //количество ламп 12 , шт
        //умножение
        //вывод
        return $this->D19_Flag12()*2;
    }
    function I20_KolvoLamp13sht()
    {        //количество ламп 13 , шт
        //умножение
        //вывод
        return $this->D20_Flag13()*3;
    }
    function I21_KolvoLamp14sht()
    {        //количество ламп 14 , шт
        //умножение
        //вывод
        return $this->D21_Flag14()*3;
    }
    function I22_KolvoLamp15sht()
    {        //количество ламп 14 , шт
        //умножение
        //вывод
        return $this->D22_Flag15()*4;
    }
    function I23_KolvoLamp16sht()
    {        //количество ламп 14 , шт
        //умножение
        //вывод
        return $this->D23_Flag16()*4;
    }
    function I25_KolvoLampLinItogosht()
    {        //количество ламп линия итого , шт
        //прибавление
        //вывод
        return $this->I8_KolvoLamp1sht()+$this->I9_KolvoLamp2sht()+$this->I10_KolvoLamp3sht()+$this->I11_KolvoLamp4sht()+
               $this->I12_KolvoLamp5sht()+$this->I13_KolvoLamp6sht()+$this->I14_KolvoLamp7sht()+$this->I15_KolvoLamp8sht()+
               $this->I16_KolvoLamp9sht()+$this->I17_KolvoLamp10sht()+$this->I18_KolvoLamp11sht()+$this->I19_KolvoLamp12sht()+
               $this->I20_KolvoLamp13sht()+$this->I21_KolvoLamp14sht()+$this->I22_KolvoLamp15sht()+$this->I23_KolvoLamp16sht();
    }
    function I27_KolvoBolshLinsht()
    {        //количество ламп 14 , шт
        //умножение
        //вывод
        return $this->I25_KolvoLampLinItogosht()*$this->F26_BolshLinsht();
    }
    function J8_DlnLampLin1mm()
    {        //длина ламп линии 1, mm
        //умножение
        //вывод
        return $this->D8_Flag1()*300;
    }
    function J9_DlnLampLin2mm()
    {        //длина ламп линии 2, mm
        //умножение
        //вывод
        return $this->D9_Flag2()*455;
    }
    function J10_DlnLampLin3mm()
    {        //длина ламп линии 3, mm
        //умножение
        //вывод
        return $this->D10_Flag3()*605;
    }
    function J11_DlnLampLin4mm()
    {        //длина ламп линии 4, mm
        //умножение
        //вывод
        return $this->D11_Flag4()*910;
    }
    function J12_DlnLampLin5mm()
    {        //длина ламп линии 5, mm
        //умножение
        //вывод
        return $this->D12_Flag5()*915;
    }
    function J13_DlnLampLin6mm()
    {        //длина ламп линии 6, mm
        //умножение
        //вывод
        return $this->D13_Flag6()*1210;
    }
    function J14_DlnLampLin7mm()
    {        //длина ламп линии 7, mm
        //умножение
        //вывод
        return $this->D14_Flag7()*1215;
    }
    function J15_DlnLampLin8mm()
    {        //длина ламп линии 8, mm
        //умножение
        //вывод
        return $this->D15_Flag8()*1520;
    }
    function J16_DlnLampLin9mm()
    {        //длина ламп линии 9, mm
        //умножение
        //вывод
        return $this->D16_Flag9()*1515;
    }
    function J17_DlnLampLin10mm()
    {        //длина ламп линии 10, mm
        //умножение
        //вывод
        return $this->D17_Flag10()*1820;
    }
    function J18_DlnLampLin11mm()
    {        //длина ламп линии 11, mm
        //умножение
        //вывод
        return $this->D18_Flag11()*2130;
    }
    function J19_DlnLampLin12mm()
    {        //длина ламп линии 12, mm
        //умножение
        //вывод
        return $this->D19_Flag12()*2430;
    }
    function J20_DlnLampLin13mm()
    {        //длина ламп линии 13, mm
        //умножение
        //вывод
        return $this->D20_Flag13()*3035;
    }
    function J21_DlnLampLin14mm()
    {        //длина ламп линии 14, mm
        //умножение
        //вывод
        return $this->D21_Flag14()*3645;
    }
    function J22_DlnLampLin15m()
    {        //длина ламп линии 14, mm
        //умножение
        //вывод
        return $this->D22_Flag15()*4200;
    }
    function J23_DlnLampLin16mm()
    {        //длина ламп линии 14, mm
        //умножение
        //вывод
        return $this->D23_Flag16()*4800;
    }
    function J25_DlnLampLinItogomm()
    {        //длина ламп линия итого, mm
        //прибавление
        //вывод
        return $this->J8_DlnLampLin1mm()+$this->J9_DlnLampLin2mm()+$this->J10_DlnLampLin3mm()+$this->J11_DlnLampLin4mm()+
               $this->J12_DlnLampLin5mm()+$this->J13_DlnLampLin6mm()+$this->J14_DlnLampLin7mm()+$this->J15_DlnLampLin8mm()+
               $this->J16_DlnLampLin9mm()+$this->J17_DlnLampLin10mm()+$this->J18_DlnLampLin11mm()+$this->J19_DlnLampLin12mm()+
               $this->J20_DlnLampLin13mm()+$this->J21_DlnLampLin14mm()+$this->J22_DlnLampLin15m()+$this->J23_DlnLampLin16mm();
    }
    function J27_DlnLampBolshLinmm()
    {        //длина ламп большие линии, mm
        //умножение
        //вывод
        return $this->J25_DlnLampLinItogomm()*$this->F26_BolshLinsht();
    }
    function D35_Flag1()
    {        //флаг 1
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
        }    }
    function D36_Flag2()
    {        //флаг 2
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
        }    }
    function D37_Flag3()
    {        //флаг 3
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
        }    }
    function D38_Flag4()
    {        //флаг 4
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
        }    }
    function D39_Flag5()
    {        //флаг 5
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
        }    }
    function D40_Flag6()
    {        //флаг 6
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
        }    }
    function D41_Flag7()
    {        //флаг 7
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
        }    }
    function D42_Flag8()
    {        //флаг 8
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
        }    }
    function D43_Flag9()
    {        //флаг 9
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
        }    }
    function D44_Flag10()
    {        //флаг 10
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
        }    }
    function D45_Flag11()
    {        //флаг 11
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
        }    }
    function D46_Flag12()
    {        //флаг 12
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
        }    }
    function D47_Flag13()
    {        //флаг 13
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
        }    }
    function D48_Flag14()
    {        //флаг 14
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
        }    }
    function F35_StoimLin1grn()
    {        //стоимость линии 1, грн.
        //умножение
        //вывод
        return $this->D35_Flag1()*L10_AF6_LampMulage0459mmS;
    }
    function F36_StoimLin2grn()
    {        //стоимость линии 2, грн.
        //умножение
        //вывод
        return $this->D36_Flag2()*L10_AF7_Lamp_15VTS;
    }
    function F37_StoimLin3grn()
    {        //стоимость линии 3, грн.
        //умножение
        //вывод
        return $this->D37_Flag3()*L10_AF8_Lamp_18VTS;
    }
    function F38_StoimLin4grn()
    {        //стоимость линии 4, грн.
        //умножение
        //вывод
        return $this->D38_Flag4()*4*L10_AF7_Lamp_15VTS;
    }
    function F39_StoimLin5grn()
    {        //стоимость линии 5, грн.
        //умножение
        //вывод
        return $this->D39_Flag5()*L10_AF9_Lamp_30VTS;
    }
    function F40_StoimLin6grn()
    {        //стоимость линии 6, грн.
        //умножение
        //вывод
        return $this->D40_Flag6()*2*L10_AF8_Lamp_18VTS;
    }
    function F41_StoimLin7grn()
    {        //стоимость линии 7, грн.
        //умножение
        //вывод
        return $this->D41_Flag7()*L10_AF10_Lamp_36VTS;
    }
    function F42_StoimLin8grn()
    {        //стоимость линии 8, грн.
        //умножение
        //вывод
        return $this->D42_Flag8()*(L10_AF9_Lamp_30VTS+L10_AF8_Lamp_18VTS);
    }
    function F43_StoimLin9grn()
    {        //стоимость линии 9, грн.
        //умножение
        //вывод
        return $this->D43_Flag9()*L10_AF11_Lamp_58VT_S;
    }
    function F44_StoimLin10grn()
    {        //стоимость линии 10, грн.
        //умножение и прибавление
        //вывод
        return $this->D44_Flag10()*(L10_AF10_Lamp_36VTS+L10_AF8_Lamp_18VTS);
    }
    function F45_StoimLin11grn()
    {        //стоимость линии 11, грн.
        //умножение и прибавление
        //вывод
        return $this->D45_Flag11()*(L10_AF10_Lamp_36VTS+L10_AF9_Lamp_30VTS);
    }
    function F46_StoimLin12grn()
    {        //стоимость линии 12, грн.
        //умножение
        //вывод
        return $this->D46_Flag12()*2*L10_AF10_Lamp_36VTS;
    }
    function F47_StoimLin13grn()
    {        //стоимость линии 13, грн.
        //умножение и прибавление
        //вывод
        return $this->D47_Flag13()*(2*L10_AF10_Lamp_36VTS+L10_AF8_Lamp_18VTS);
    }
    function F48_StoimLin14grn()
    {        //стоимость линии 14, грн.
        //умножение
        //вывод
        return $this->D48_Flag14()*3*L10_AF10_Lamp_36VTS;
    }
    function F50_StoimLinItogogrn()
    {        //стоимость линии итого, грн.
        //прибавление
        //вывод
        return $this->F35_StoimLin1grn()+$this->F36_StoimLin2grn()+$this->F37_StoimLin3grn()+$this->F38_StoimLin4grn()+$this->F39_StoimLin5grn()+
               $this->F40_StoimLin6grn()+$this->F41_StoimLin7grn()+$this->F42_StoimLin8grn()+$this->F43_StoimLin9grn()+$this->F44_StoimLin10grn()+
               $this->F45_StoimLin11grn()+$this->F46_StoimLin12grn()+$this->F47_StoimLin13grn()+$this->F48_StoimLin14grn();
    }
    function F51_BolshLinsht()
    {        //большие линии, шт.
        //округление и деление
        //вывод
        return round ($this->B16_BolshStorm()/L10_BB73_K_ShagLinLamp1St_m, 0);
    }
    function F52_VseBolshLingrn()
    {        //все большие линии, грн.
        //умножение
        //вывод
        return $this->F50_StoimLinItogogrn()*$this->F51_BolshLinsht();
    }
    function G35_EnergoLin1vt()
    {        //энергопот. линии 1, вт
        //умножение
        //вывод
        return $this->D35_Flag1()*L10_AI6_LampMulage0459mmP;
    }
    function G36_EnergoLin2vt()
    {        //энергопот. линии 2, вт
        //умножение
        //вывод
        return $this->D36_Flag2()*15;
    }
    function G37_EnergoLin3vt()
    {        //энергопот. линии 3, вт
        //умножение
        //вывод
        return $this->D37_Flag3()*18;
    }
    function G38_EnergoLin4vt()
    {        //энергопот. линии 4, вт
        //умножение
        //вывод
        return $this->D38_Flag4()*30;
    }
    function G39_EnergoLin5vt()
    {        //энергопот. линии 5, вт
        //умножение
        //вывод
        return $this->D39_Flag5()*30;
    }
    function G40_EnergoLin6vt()
    {        //энергопот. линии 6, вт
        //умножение
        //вывод
        return $this->D40_Flag6()*36;
    }
    function G41_EnergoLin7vt()
    {        //энергопот. линии 7, вт
        //умножение
        //вывод
        return $this->D41_Flag7()*36;
    }
    function G42_EnergoLin8vt()
    {        //энергопот. линии 8, вт
        //умножение
        //вывод
        return $this->D42_Flag8()*48;
    }
    function G43_EnergoLin9vt()
    {        //энергопот. линии 9, вт
        //умножение
        //вывод
        return $this->D43_Flag9()*58;
    }
    function G44_EnergoLin10vt()
    {        //энергопот. линии 10, вт
        //умножение
        //вывод
        return $this->D44_Flag10()*54;
    }
    function G45_EnergoLin11vt()
    {        //энергопот. линии 11, вт
        //умножение
        //вывод
        return $this->D45_Flag11()*66;
    }
    function G46_EnergoLin12vt()
    {        //энергопот. линии 12, вт
        //умножение
        //вывод
        return $this->D46_Flag12()*72;
    }
    function G47_EnergoLin13vt()
    {        //энергопот. линии 13, вт
        //умножение
        //вывод
        return $this->D47_Flag13()*90;
    }
    function G48_EnergoLin14vt()
    {        //энергопот. линии 14, вт
        //умножение
        //вывод
        return $this->D48_Flag14()*138;
    }
    function G50_EnergoLinItogovt()
    {        //энергопот. линии итого, вт
        //прибавление
        //вывод
        return $this->G35_EnergoLin1vt()+$this->G36_EnergoLin2vt()+$this->G37_EnergoLin3vt()+$this->G38_EnergoLin4vt()+
               $this->G39_EnergoLin5vt()+ $this->G40_EnergoLin6vt()+$this->G41_EnergoLin7vt()+$this->G42_EnergoLin8vt()+
               $this->G43_EnergoLin9vt()+$this->G44_EnergoLin10vt()+$this->G45_EnergoLin11vt()+$this->G46_EnergoLin12vt()+
               $this->G47_EnergoLin13vt()+$this->G48_EnergoLin14vt();
    }
    function G52_EnergoVseBolshLinvt()
    {        //энергопот. все большие линии , вт
        //умножение
        //вывод
        return $this->G50_EnergoLinItogovt()*$this->F51_BolshLinsht();
    }
    function H35_VesLin1kg()
    {        //вес линии 1, кг
        //умножение
        //вывод
        return $this->D35_Flag1()*L10_AG6_LampMulage0459mmV;
    }
    function H36_VesLin2kg()
    {        //вес линии 2, кг
        //умножение
        //вывод
        return $this->D36_Flag2()*0.54;
    }
    function H37_VesLin3kg()
    {        //вес линии 3, кг
        //умножение
        //вывод
        return $this->D37_Flag3()*0.6;
    }
    function H38_VesLin4kg()
    {        //вес линии 4, кг
        //умножение
        //вывод
        return $this->D38_Flag4()*1.08;
    }
    function H39_VesLin5kg()
    {        //вес линии 5, кг
        //умножение
        //вывод
        return $this->D39_Flag5()*0.68;
    }
    function H40_VesLin6kg()
    {        //вес линии 6, кг
        //умножение
        //вывод
        return $this->D40_Flag6()*1.2;
    }
    function H41_VesLin7kg()
    {        //вес линии 7, кг
        //умножение
        //вывод
        return $this->D41_Flag7()*0.75;
    }
    function H42_VesLin8kg()
    {        //вес линии 8, кг
        //умножение
        //вывод
        return $this->D42_Flag8()*1.28;
    }
    function H43_VesLin9kg()
    {        //вес линии 9, кг
        //умножение
        //вывод
        return $this->D43_Flag9()*1.36;
    }
    function H44_VesLin10kg()
    {        //вес линии 10, кг
        //умножение
        //вывод
        return $this->D44_Flag10()*1.35;
    }
    function H45_VesLin11kg()
    {        //вес линии 11, кг
        //умножение
        //вывод
        return $this->D45_Flag11()*1.43;
    }
    function H46_VesLin12kg()
    {        //вес линии 12, кг
        //умножение
        //вывод
        return $this->D46_Flag12()*1.5;
    }
    function H47_VesLin13kg()
    {        //вес линии 13, кг
        //умножение
        //вывод
        return $this->D47_Flag13()*2.1;
    }
    function H48_VesLin14kg()
    {        //вес линии 14, кг
        //умножение
        //вывод
        return $this->D48_Flag14()*2.25;
    }
    function H50_VesLinItogokg()
    {        //вес линии итого, кг
        //прибавление
        //вывод
        return $this->H35_VesLin1kg()+$this->H36_VesLin2kg()+$this->H37_VesLin3kg()+$this->H38_VesLin4kg()+$this->H39_VesLin5kg()+
               $this->H40_VesLin6kg()+$this->H41_VesLin7kg()+$this->H42_VesLin8kg()+$this->H43_VesLin9kg()+$this->H44_VesLin10kg()+
               $this->H45_VesLin11kg()+$this->H46_VesLin12kg()+$this->H47_VesLin13kg()+$this->H48_VesLin14kg();
    }
    function H52_VesBolshLinkg()
    {        //вес большие линии , кг
        //умножение
        //вывод
        return $this->H50_VesLinItogokg()*$this->F51_BolshLinsht();
    }
    function I35_KolvoLamp1sht()
    {        //количество ламп 1 , шт
        //умножение
        //вывод
        return $this->D35_Flag1()*1;
    }
    function I36_KolvoLamp2sht()
    {        //количество ламп 2 , шт
        //умножение
        //вывод
        return $this->D36_Flag2()*1;
    }
    function I37_KolvoLamp3sht()
    {        //количество ламп 3 , шт
        //умножение
        //вывод
        return $this->D37_Flag3()*1;
    }
    function I38_KolvoLamp4sht()
    {        //количество ламп 4 , шт
        //умножение
        //вывод
        return $this->D38_Flag4()*2;
    }
    function I39_KolvoLamp5sht()
    {        //количество ламп 5 , шт
        //умножение
        //вывод
        return $this->D39_Flag5()*1;
    }
    function I40_KolvoLamp6sht()
    {        //количество ламп 6 , шт
        //умножение
        //вывод
        return $this->D40_Flag6()*2;
    }
    function I41_KolvoLamp7sht()
    {        //количество ламп 7 , шт
        //умножение
        //вывод
        return $this->D41_Flag7()*1;
    }
    function I42_KolvoLamp8sht()
    {        //количество ламп 8 , шт
        //умножение
        //вывод
        return $this->D42_Flag8()*2;
    }
    function I43_KolvoLamp9sht()
    {        //количество ламп 9 , шт
        //умножение
        //вывод
        return $this->D43_Flag9()*1;
    }
    function I44_KolvoLamp10sht()
    {        //количество ламп 10 , шт
        //умножение
        //вывод
        return $this->D44_Flag10()*2;
    }
    function I45_KolvoLamp11sht()
    {        //количество ламп 11 , шт
        //умножение
        //вывод
        return $this->D45_Flag11()*2;
    }
    function I46_KolvoLamp12sht()
    {        //количество ламп 12 , шт
        //умножение
        //вывод
        return $this->D46_Flag12()*2;
    }
    function I47_KolvoLamp13sht()
    {        //количество ламп 13 , шт
        //умножение
        //вывод
        return $this->D47_Flag13()*3;
    }
    function I48_KolvoLamp14sht()
    {        //количество ламп 14 , шт
        //умножение
        //вывод
        return $this->D48_Flag14()*3;
    }
    function I50_KolvoLampLinItogosht()
    {        //количество ламп линия итого , шт
        //прибавление
        //вывод
        return $this->I35_KolvoLamp1sht()+$this->I36_KolvoLamp2sht()+$this->I37_KolvoLamp3sht()+$this->I38_KolvoLamp4sht()+
               $this->I39_KolvoLamp5sht()+$this->I40_KolvoLamp6sht()+$this->I41_KolvoLamp7sht()+$this->I42_KolvoLamp8sht()+
               $this->I43_KolvoLamp9sht()+$this->I44_KolvoLamp10sht()+$this->I45_KolvoLamp11sht()+$this->I46_KolvoLamp12sht()+
               $this->I47_KolvoLamp13sht()+$this->I48_KolvoLamp14sht();
    }
    function I52_KolvoBolshLinsht()
    {        //количество ламп 14 , шт
        //умножение
        //вывод
        return $this->I50_KolvoLampLinItogosht()*$this->F51_BolshLinsht();
    }
    function J35_DlnLampLin1mm()
    {        //длина ламп линии 1, mm
        //умножение
        //вывод
        return $this->D35_Flag1()*300;
    }
    function J36_DlnLampLin2mm()
    {        //длина ламп линии 2, mm
        //умножение
        //вывод
        return $this->D36_Flag2()*455;
    }
    function J37_DlnLampLin3mm()
    {        //длина ламп линии 3, mm
        //умножение
        //вывод
        return $this->D37_Flag3()*605;
    }
    function J38_DlnLampLin4mm()
    {        //длина ламп линии 4, mm
        //умножение
        //вывод
        return $this->D38_Flag4()*910;
    }
    function J39_DlnLampLin5mm()
    {        //длина ламп линии 5, mm
        //умножение
        //вывод
        return $this->D39_Flag5()*915;
    }
    function J40_DlnLampLin6mm()
    {        //длина ламп линии 6, mm
        //умножение
        //вывод
        return $this->D40_Flag6()*1210;
    }
    function J41_DlnLampLin7mm()
    {        //длина ламп линии 7, mm
        //умножение
        //вывод
        return $this->D41_Flag7()*1215;
    }
    function J42_DlnLampLin8mm()
    {        //длина ламп линии 8, mm
        //умножение
        //вывод
        return $this->D42_Flag8()*1920;
    }
    function J43_DlnLampLin9mm()
    {        //длина ламп линии 9, mm
        //умножение
        //вывод
        return $this->D43_Flag9()*1515;
    }
    function J44_DlnLampLin10mm()
    {        //длина ламп линии 10, mm
        //умножение
        //вывод
        return $this->D44_Flag10()*1820;
    }
    function J45_DlnLampLin11mm()
    {        //длина ламп линии 11, mm
        //умножение
        //вывод
        return $this->D45_Flag11()*2130;
    }
    function J46_DlnLampLin12mm()
    {        //длина ламп линии 12, mm
        //умножение
        //вывод
        return $this->D46_Flag12()*2430;
    }
    function J47_DlnLampLin13mm()
    {        //длина ламп линии 13, mm
        //умножение
        //вывод
        return $this->D47_Flag13()*3035;
    }
    function J48_DlnLampLin14mm()
    {        //длина ламп линии 14, mm
        //умножение
        //вывод
        return $this->D48_Flag14()*3645;
    }
    function J50_DlnLampLinItogomm()
    {        //длина ламп линия итого, mm
        //прибавление
        //вывод

        return $this->J35_DlnLampLin1mm()+$this->J36_DlnLampLin2mm()+$this->J37_DlnLampLin3mm()+$this->J38_DlnLampLin4mm()+
               $this->J39_DlnLampLin5mm()+$this->J40_DlnLampLin6mm()+$this->J41_DlnLampLin7mm()+$this->J42_DlnLampLin8mm()+
               $this->J43_DlnLampLin9mm()+$this->J44_DlnLampLin10mm()+$this->J45_DlnLampLin11mm()+$this->J46_DlnLampLin12mm()+
               $this->J47_DlnLampLin13mm()+$this->J48_DlnLampLin14mm();
    }
    function J52_DlnLampBolshLinmm()
    {        //длина ламп большие линии, mm
        //умножение
        //вывод
        return $this->J50_DlnLampLinItogomm()*$this->F51_BolshLinsht();
    }
    function H54_PrisutBolshLin()
    {        //присутсвие большей линии
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод
        if ($this->F52_VseBolshLingrn()>=$this->F27_VseBolshLingrn())
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function H55_PrisutmenshLin()
    {        //присутсвие меньшей линии
        //если условие = true, то вывести 0
        //иначе - вывести 1
        //вывод
        if ($this->H54_PrisutBolshLin()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }    }
    function F58_StoimLiniyItogogrn()
    {        //стоимость линий итого, грн
        //умножение и прибавление
        //вывод
        return $this->F27_VseBolshLingrn()*$this->H54_PrisutBolshLin()+$this->F52_VseBolshLingrn()*$this->H55_PrisutmenshLin();
    }
    function G58_EnergopotLiniyItogovt()
    {        //энергопотребеление линий итого, вт
        //умножение и прибавление
        //вывод
        return $this->G27_EnergoVseBolshLinvt()*$this->H54_PrisutBolshLin()+$this->G52_EnergoVseBolshLinvt()*$this->H55_PrisutmenshLin();
    }
    function H58_VesLiniyItogokg()
    {        //вес линий итого, кг
        //умножение и прибавление
        //вывод
        return $this->H27_VesBolshLinkg()*$this->H54_PrisutBolshLin()+$this->H52_VesBolshLinkg()*$this->H55_PrisutmenshLin();
    }
    function I58_KolvoLampItogosht()
    {        //количество ламп итого, шт
        //умножение и прибавление
        //вывод
        return $this->I27_KolvoBolshLinsht()*$this->H54_PrisutBolshLin()+$this->I52_KolvoBolshLinsht()*$this->H55_PrisutmenshLin();
    }
    function J57_DlnLiniyItogomm()
    {        //длина линий итого, мм
        //умножение и прибавление
        //вывод
        return $this->J27_DlnLampBolshLinmm()*$this->H54_PrisutBolshLin()+$this->J52_DlnLampBolshLinmm()*$this->H55_PrisutmenshLin();
    }
    function J58_DlnLiniyItogom()
    {
        //длина линий итого, м
        //деление
        //вывод
        return $this->J57_DlnLiniyItogomm()/1000;
    }
    function M5_MontProvodm()
    {        //монт провод, м
        //умножение
        //вывод
        return $this->J58_DlnLiniyItogom()*L10_BB80_K_DlnLampMontProvodPV1;
    }
    function M6_MontProvodgrn()
    {        //монт провод, грн
        //умножение
        //вывод
        return $this->M5_MontProvodm()*L10_AF82_ProvodPV1_075mm;
    }
    function M8_SetKabelm()
    {        //сетевой кабель, м
        //значение
        //вывод
        if ($this->B16_BolshStorm()>L10_BB72_K_LenghtOutputKabel_mp)
        {
            return $this->B16_BolshStorm();
        }
        else
        {
            return L10_BB72_K_LenghtOutputKabel_mp;
        }
    }
    function M9_SetKabelgrn()
    {
        //сетевой кабель, грн
        //умножение
        //вывод
        return $this->M8_SetKabelm()*L10_AF79_CabelCu_1mm2_13A;
    }
    function M11_MatItogogrn()
    {        //материалы итого, грн
        //умножение
        //вывод
        return $this->F58_StoimLiniyItogogrn()+$this->M6_MontProvodgrn()+$this->M9_SetKabelgrn();
    }
    function P6_StoimMatgrn()
    {        //стоимость материалов, грн
        //округление
        //вывод
        return round($this->M11_MatItogogrn(),0);
    }
    function P10_TrudLampmin()
    {        //трудоемкость лампы , мин
        //умножение
        //вывод
        return $this->I58_KolvoLampItogosht()*L10_BT56_MontajLamp_1sht;
    }
    function P11_StoimRabgrn()
    {        //стоимость работы, грн
        //округление и умножение
        //вывод
        return round ($this->P10_TrudLampmin()*L10_C67_K1, 0);
    }
    function P21_Energopotvt()
    {        //энергопотребление, вт
        //значение
        //вывод
        return $this->G58_EnergopotLiniyItogovt();
    }
    function P22_Veskg()
    {        //вес, кг
        //значение
        //вывод
        return $this->H58_VesLiniyItogokg();
    }
    function P24_Itogogrn()
    {        //итого, грн
        //прибавление
        //вывод
        return $this->P6_StoimMatgrn()+$this->P11_StoimRabgrn();
    }
}

class L18_22
{
    // Входные параметры:
    public $T11_BigSide_cm; // Большая сторона
    public $T12_SmallSide_cm; // Маленькая сторона

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)

    {
        // Заполнение входных данных с проверкой.
        $this->T11_BigSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MaxSide_cm : $MinSide_cm;
        $this->T12_SmallSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MinSide_cm : $MaxSide_cm;
    }

    // C-light _ кластеры 3750*3*1,3 внешний БП_ 2

    function W5_BigStor()
    {
        //t11/100, округлить
        //вывод
        return round( $this->T11_BigSide_cm / 100, 2);
    }
    function W6_SmallStor()
    {        //t12/100, округлить
        //вывод
        return round( $this->T12_SmallSide_cm / 100, 2);
    }
    function W7_PlochadFasada_m2()
    { //умножение
        //вывод
        return ($this->W5_BigStor()*$this->W6_SmallStor());
    }
    function W9_KolichestvoKlasterov_shtuk()
    {//деление и округление
        //вывод

        return round($this->W7_PlochadFasada_m2()/L10_BB77_PloshOsvKlast3750and3krandIP65_m2, 0);
    }
    function W10_StoimostKlasterov_grn()
    {//умножение
        //вывод
        return ($this->W9_KolichestvoKlasterov_shtuk()*L10_AF57_Claster3750_3kr_IP65S);
    }
    function W11_MochostKlasterovTeor_Vt()
    {//умножение
        //вывод
        return ($this->W9_KolichestvoKlasterov_shtuk()*L10_AI57_Claster3750_3kr_IP65P);
    }
    function W12_MochostKlasterovReal_Vt()
    { //умножение
        //вывод

        return ($this->W9_KolichestvoKlasterov_shtuk()*L10_AJ57_Claster3750_3kr_IP65M);
    }
    function W13_TokTeor_A()
    {//деление
        //вывод
        return ($this->W11_MochostKlasterovTeor_Vt()/12);
    }
    function W14_TokReal_A()
    {//умножение  деление
        //вывод
        return ($this->W9_KolichestvoKlasterov_shtuk()*L10_AJ57_Claster3750_3kr_IP65M/12);
    }
    function W15_MinMochnostBP_Vt()
    {   //умножение
        //вывод
        return ($this->W11_MochostKlasterovTeor_Vt()*L10_BB78_K_ZapasPoTokuDlBP);
    }
    function W17_VesKlasterov_kg()
    {//умножение
        //вывод
        return $this->W9_KolichestvoKlasterov_shtuk()*L10_AG57_Claster3750_3kr_IP65V;
    }
    function W19_KabelSegment_mp()
    {   //округлвверх, деление и умножение
        //вывод
        return (ceil($this->W9_KolichestvoKlasterov_shtuk()/L10_BB70_K_PredkolKlast37503KrVSegmsht))*$this->W5_BigStor()/3;
    }
    function W20_KabelSegment_grn()
    {  //множение
        //вывод
        return $this->W19_KabelSegment_mp()*L10_AF79_CabelCu_1mm2_13A;
    }
    function W22_KabelBlochnii_mp()
    {   //округлвверх, деление и умножение
        //вывод
        return ceil($this->W14_TokReal_A()/L10_AJ80_CabelCu_15mm2_20A)*L10_BB72_K_LenghtOutputKabel_mp;
    }
    function W23_KabelBlochni_grn()
    {  //множение
        //вывод
        return $this->W22_KabelBlochnii_mp()*L10_AF80_CabelCu_15mm2_20A;
    }
    function W25_KabelItogo_grn()
    {   //умножение
        //вывод
        return $this->W20_KabelSegment_grn()+$this->W23_KabelBlochni_grn();
    }
    function W27_Samorezi_sht()
    {  //умножение
        //вывод
        return $this->W9_KolichestvoKlasterov_shtuk()*2;
    }
    function W28_Samorezi_grn()
    {  //множение
        //вывод
        return $this->W27_Samorezi_sht()*L10_AR43_Samorez19BlackWood;
    }
    function Y6_1PodborBPIP20()
    {  //W15>0 и W15<=60, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W15_MinMochnostBP_Vt()>0 and $this->W15_MinMochnostBP_Vt()<=60)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function Y7_2PodborBPIP20()
    {      //W15>60 и W15<=100, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W15_MinMochnostBP_Vt()>60 and $this->W15_MinMochnostBP_Vt()<=100)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function Y8_3PodborBPIP20()
    {      //W15>100 и W15<=150, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W15_MinMochnostBP_Vt()>100 and $this->W15_MinMochnostBP_Vt()<=150)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function Y9_4PodborBPIP20()
    {        //W15>150 и W15<=200, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W15_MinMochnostBP_Vt()>150 and $this->W15_MinMochnostBP_Vt()<=200)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function Y10_5PodborBPIP20()
    {        //W15>200 и W15<=240, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W15_MinMochnostBP_Vt()>200 and $this->W15_MinMochnostBP_Vt()<=240)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function Y12_6PodborBPIP20()
    {        //W15>240 и W15<=360, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W15_MinMochnostBP_Vt()>240 and $this->W15_MinMochnostBP_Vt()<=360)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function Y13_7PodborBPIP20()
    {
        //W15>360 и W15<=500, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W15_MinMochnostBP_Vt()>360 and $this->W15_MinMochnostBP_Vt()<=500)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function Y14_8PodborBPIP20()
    {        //W15>500 и W15<=600, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W15_MinMochnostBP_Vt()>500 and $this->W15_MinMochnostBP_Vt()<=600)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AA6_1Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y6_1PodborBPIP20()*L10_AF23_PowerSupply_60VT_IP20S);
    }
    function AA7_2Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y7_2PodborBPIP20()*L10_AF24_PowerSupply_80VT_IP20S);
    }
    function AA8_3Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y8_3PodborBPIP20()*L10_AF25_PowerSupply_100VT_IP20S);
    }
    function AA9_4Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y9_4PodborBPIP20()*L10_AF26_PowerSupply_120VT_IP20S);
    }
    function AA10_5Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y10_5PodborBPIP20()*L10_AF27_PowerSupply_180VT_IP20S);
    }

    function AA12_6Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y12_6PodborBPIP20()*L10_AF29_PowerSupply_360VT_IP20S);
    }
    function AA13_7Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y13_7PodborBPIP20()*L10_AF30_PowerSupply_500VT_IP20S);
    }
    function AA14_8Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y14_8PodborBPIP20()*L10_AF31_PowerSupply_600VT_IP20S);
    }
    function AB6_1Ves()
    {
        return ($this->Y6_1PodborBPIP20()*L10_AG23_PowerSupply_60VT_IP20V);
    }
    function AB7_2Ves()
    {
        //умножение
        //вывод
        return ($this->Y7_2PodborBPIP20()*L10_AG24_PowerSupply_80VT_IP20V);
    }
    function AB8_3Ves()
    {
        //умножение
        //вывод
        return ($this->Y8_3PodborBPIP20()*L10_AG25_PowerSupply_100VT_IP20V);
    }
    function AB9_4Ves()
    {        //умножение
        //вывод
        return ($this->Y9_4PodborBPIP20()*L10_AG26_PowerSupply_120VT_IP20V);
    }
    function AB10_5Ves()
    {
        //умножение
        //вывод
        return ($this->Y10_5PodborBPIP20()*L10_AG27_PowerSupply_180VT_IP20V);
    }
    function AB12_6Ves()
    {
        //умножение
        //вывод
        return ($this->Y12_6PodborBPIP20()*L10_AG29_PowerSupply_360VT_IP20V);
    }
    function AB13_7Ves()
    {        //умножение
        //вывод
        return ($this->Y13_7PodborBPIP20()*L10_AG30_PowerSupply_500VT_IP20V);
    }
    function AB14_8Ves()
    {        //умножение
        //вывод
        return ($this->Y14_8PodborBPIP20()*L10_AG31_PowerSupply_600VT_IP20V);
    }
    function AA16_KabelItogo_grn()
    {        //сложение
        //вывод
        return $this->AA6_1Stoimost()+$this->AA7_2Stoimost()+$this->AA8_3Stoimost()+$this->AA9_4Stoimost()+$this->AA10_5Stoimost()+$this->AA12_6Stoimost()+$this->AA13_7Stoimost()+$this->AA14_8Stoimost();
    }
    function AB16_2ItogoBPBezGarantii()
    {    //сложение
        //вывод
        return ($this->AB6_1Ves()+$this->AB7_2Ves()+$this->AB8_3Ves()+$this->AB9_4Ves()+$this->AB10_5Ves()+$this->AB12_6Ves()+$this->AB13_7Ves()+$this->AB14_8Ves());
    }
    function AA17_BPSGarantiei_grn()
    {
        //умножение
        //вывод
        return ($this->AA16_KabelItogo_grn()*L10_BB79_K_GarantFinansNaBP);
    }

    function AE5_MontagKlasterov_min()
    {        //умножение
        //вывод
        return ($this->W9_KolichestvoKlasterov_shtuk()*L10_BT57_MontajKlast_1sht);
    }
    function AE6_MontagBP_min()
    {        //вывод
        return L10_BT55_MontajBlockPit_1sht;
    }
    function AH6_StoimostMaterialov_grn()
    {
        //сложение, умножение и округление
        //вывод
        return round(($this->W10_StoimostKlasterov_grn()+$this->W25_KabelItogo_grn()+$this->W28_Samorezi_grn()+$this->AA17_BPSGarantiei_grn()), 0);
    }
    function AH10_TrydoemkostKlaster_min()
    {        //сложение
        //вывод
        return $this->AE5_MontagKlasterov_min()+$this->AE6_MontagBP_min();
    }
    function AH11_StoimostMaterialov_grn()
    {        //умножение и округление
        //вывод
        return round($this->AH10_TrydoemkostKlaster_min()*L10_C67_K1,0);
    }
    function AH21_Energopotreblenie_Vt()
    {
        //округление
        //вывод
        return round($this->W12_MochostKlasterovReal_Vt(),0);
    }
    function AH22_Ves_kg()
    {        //сложение и округление
        //вывод
        return round($this->W17_VesKlasterov_kg()+$this->AB16_2ItogoBPBezGarantii(),1);
    }
    function AH24_Itogo_grn()
    {        //сложение
        //вывод
        return ($this->AH6_StoimostMaterialov_grn()+$this->AH11_StoimostMaterialov_grn());
    }
}

class L18_21
{
    // Входные параметры:
    public $T52_BigSide_cm; // Большая сторона
    public $T53_SmallSide_cm; // Маленькая сторона

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)

    {
        // Заполнение входных данных с проверкой.
        $this->T52_BigSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MaxSide_cm : $MinSide_cm;
        $this->T53_SmallSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MinSide_cm : $MaxSide_cm;
    }
    function W46_BigStor()
    {
        //t11/100, округлить
        //вывод
        return round($this->T52_BigSide_cm/100,2);
    }
    function W47_SmallStor()
    {        //t12/100, округлить
        //вывод
        return round($this->T53_SmallSide_cm/100,2);
    }
    function W48_PlochadFasada_m2()
    { //умножение
        //вывод
        return ($this->W46_BigStor()*$this->W47_SmallStor());
    }
    function W50_KolichestvoKlasterov_shtuk()
    {//деление и округление
        //вывод

        return round($this->W48_PlochadFasada_m2()/L10_BB77_PloshOsvKlast3750and3krandIP65_m2, 0);
    }
    function W51_StoimostKlasterov_grn()
    {//умножение
        //вывод
        return ($this->W50_KolichestvoKlasterov_shtuk()*L10_AF57_Claster3750_3kr_IP65S);
    }
    function W52_MochostKlasterovTeor_Vt()
    {//умножение
        //вывод
        return ($this->W50_KolichestvoKlasterov_shtuk()*L10_AI57_Claster3750_3kr_IP65P);
    }
    function W53_MochostKlasterovReal_Vt()
    { //умножение
        //вывод

        return ($this->W50_KolichestvoKlasterov_shtuk()*L10_AJ57_Claster3750_3kr_IP65M);
    }
    function W54_TokTeor_A()
    {//деление
        //вывод
        return ($this->W52_MochostKlasterovTeor_Vt()/12);
    }
    function W55_TokReal_A()
    {//умножение  деление
        //вывод
        return ($this->W50_KolichestvoKlasterov_shtuk()*L10_AJ57_Claster3750_3kr_IP65M/12);
    }
    function W56_MinMochnostBP_Vt()
    {   //умножение
        //вывод
        return ($this->W52_MochostKlasterovTeor_Vt()*L10_BB78_K_ZapasPoTokuDlBP);
    }
    function W58_VesKlasterov_kg()
    {//умножение
        //вывод
        return $this->W50_KolichestvoKlasterov_shtuk()*L10_AG57_Claster3750_3kr_IP65V;
    }
    function W60_KabelSegment_mp()
    {   //округлвверх, деление и умножение
        //вывод
        return (ceil($this->W50_KolichestvoKlasterov_shtuk()/L10_BB70_K_PredkolKlast37503KrVSegmsht))*$this->W46_BigStor()/3;
    }
    function W61_KabelSegment_grn()
    {  //множение
        //вывод
        return $this->W60_KabelSegment_mp()*L10_AF79_CabelCu_1mm2_13A;
    }
    function W63_KabelSetevoi_mp()
    {  //вывод
        return L10_BB72_K_LenghtOutputKabel_mp;
    }
    function W64_KabelSetevoi_grn()
    {  //множение
        //вывод
        return $this->W63_KabelSetevoi_mp()*L10_AF79_CabelCu_1mm2_13A;
    }
    function W66_KabelItogo_grn()
    {   //умножение
        //вывод
        return $this->W61_KabelSegment_grn()+$this->W64_KabelSetevoi_grn();
    }
    function W68_Samorezi_sht()
    {  //умножение
        //вывод
        return $this->W50_KolichestvoKlasterov_shtuk()*2;
    }
    function W69_Samorezi_grn()
    {  //множение
        //вывод
        return $this->W68_Samorezi_sht()*L10_AR43_Samorez19BlackWood;
    }
    function Y47_1PodborBPIP20()
    {  //W56>0 и W56<=60, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W56_MinMochnostBP_Vt()>0 and $this->W56_MinMochnostBP_Vt()<=60)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function Y48_2PodborBPIP20()
    {      //W56>60 и W56<=100, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W56_MinMochnostBP_Vt()>60 and $this->W56_MinMochnostBP_Vt()<=100)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function Y49_3PodborBPIP20()
    {      //W56>100 и W56<=150, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W56_MinMochnostBP_Vt()>100 and $this->W56_MinMochnostBP_Vt()<=150)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function Y50_4PodborBPIP20()
    {        //W56>150 и W56<=200, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W56_MinMochnostBP_Vt()>150 and $this->W56_MinMochnostBP_Vt()<=200)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function Y51_5PodborBPIP20()
    {        //W56>200 и W56<=240, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W56_MinMochnostBP_Vt()>200 and $this->W56_MinMochnostBP_Vt()<=240)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function Y52_6PodborBPIP20()
    {        //W56>240 и W56<=360, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->W56_MinMochnostBP_Vt()>240 and $this->W56_MinMochnostBP_Vt()<=360)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AA47_1Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y47_1PodborBPIP20()*L10_AF23_PowerSupply_60VT_IP20S);
    }
    function AA48_2Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y48_2PodborBPIP20()*L10_AF24_PowerSupply_80VT_IP20S);
    }
    function AA49_3Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y49_3PodborBPIP20()*L10_AF25_PowerSupply_100VT_IP20S);
    }
    function AA50_4Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y50_4PodborBPIP20()*L10_AF26_PowerSupply_120VT_IP20S);
    }
    function AA51_5Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y51_5PodborBPIP20()*L10_AF27_PowerSupply_180VT_IP20S);
    }

    function AA52_6Stoimost()
    {
        //умножение
        //вывод
        return ($this->Y52_6PodborBPIP20()*L10_AF29_PowerSupply_360VT_IP20S);
    }
    function AB47_1Ves()
    {
        //умножение
        //вывод
        return ($this->Y47_1PodborBPIP20()*L10_AG23_PowerSupply_60VT_IP20V);
    }
    function AB48_2Ves()
    {
        //умножение
        //вывод
        return ($this->Y48_2PodborBPIP20()*L10_AG24_PowerSupply_80VT_IP20V);
    }
    function AB49_3Ves()
    {
        //умножение
        //вывод
        return ($this->Y49_3PodborBPIP20()*L10_AG25_PowerSupply_100VT_IP20V);
    }
    function AB50_4Ves()
    {        //умножение
        //вывод
        return ($this->Y50_4PodborBPIP20()*L10_AG26_PowerSupply_120VT_IP20V);
    }
    function AB51_5Ves()
    {
        //умножение
        //вывод
        return ($this->Y51_5PodborBPIP20()*L10_AG27_PowerSupply_180VT_IP20V);
    }
    function AB52_6Ves()
    {
        //умножение
        //вывод
        return ($this->Y52_6PodborBPIP20()*L10_AG29_PowerSupply_360VT_IP20V);
    }
    function AA57_ItogoBPBezGarantii()
    {        //сложение
        //вывод
        return $this->AA47_1Stoimost()+$this->AA48_2Stoimost()+$this->AA49_3Stoimost()+$this->AA50_4Stoimost()+$this->AA51_5Stoimost()+$this->AA52_6Stoimost();
    }
    function AB57_2ItogoBPBezGarantii()
    {    //сложение
        //вывод
        return $this->AB47_1Ves()+$this->AB48_2Ves()+$this->AB49_3Ves()+$this->AB50_4Ves()+$this->AB51_5Ves()+$this->AB52_6Ves();
    }
    function AA58_BPSGarantiei_grn()
    {
        //умножение
        //вывод
        return ($this->AA57_ItogoBPBezGarantii()*L10_BB79_K_GarantFinansNaBP);
    }

    function AE46_MontagKlasterov_min()
    {        //умножение
        //вывод
        return ($this->W50_KolichestvoKlasterov_shtuk()*L10_BT57_MontajKlast_1sht);
    }
    function AE47_MontagBP_min()
    {     //сложение и умножение
        //вывод
        return (1+$this->Y52_6PodborBPIP20())*L10_BT55_MontajBlockPit_1sht;
    }
    function AH47_StoimostMaterialov_grn()
    {
        //сложение, умножение и округление
        //вывод
        return round(($this->W51_StoimostKlasterov_grn()+$this->W66_KabelItogo_grn()+$this->W69_Samorezi_grn()+$this->AA58_BPSGarantiei_grn()), 0);
    }
    function AH51_TrydoemkostKlaster_min()
    {        //сложение
        //вывод
        return $this->AE46_MontagKlasterov_min()+$this->AE47_MontagBP_min();
    }
    function AH52_StoimostMaterialov_grn()
    {        //умножение и округление
        //вывод
        return round($this->AH51_TrydoemkostKlaster_min()*L10_C67_K1,0);
    }
    function AH62_Energopotreblenie_Vt()
    {
        //округление
        //вывод
        return round($this->W53_MochostKlasterovReal_Vt(),0);
    }
    function AH63_Ves_kg()
    {        //сложение и округление
        //вывод
        return round($this->W58_VesKlasterov_kg()+$this->AB57_2ItogoBPBezGarantii(),1);
    }
    function AH65_Itogo_grn()
    {        //сложение
        //вывод
        return ($this->AH47_StoimostMaterialov_grn()+$this->AH52_StoimostMaterialov_grn());
    }

}

class L18_31
{
// Входные параметры:
    public $AL11_BigSide_cm; // Большая сторона
    public $AL12_SmallSide_cm; // Маленькая сторона

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)
    {
        // Заполнение входных данных с проверкой.
        $this->AL11_BigSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MaxSide_cm : $MinSide_cm;
        $this->AL12_SmallSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MinSide_cm : $MaxSide_cm;
    }

    // C-light _ лента диодная 4,6 Вт "Алексей" внешний БП_ 3

    function AO5_BigStor()
    {
        //t11/100, округлить
        //вывод
        return round( $this->AL11_BigSide_cm / 100, 2);
    }
    function AO6_SmallStor()
    {        //t12/100, округлить
        //вывод
        return round( $this->AL12_SmallSide_cm / 100, 2);
    }
    function AO7_PlochadFasada_m2()
    { //умножение
        //вывод
        return $this->AO5_BigStor()*$this->AO6_SmallStor();
    }
    function AO9_DlinaLenti_m()
    {    //деление
        //вывод
        return $this->AO7_PlochadFasada_m2()/L10_BK68_ShagLinLentDiod46vtAleks_m;
    }
    function AO10_StoimostLenti_grn()
    {    //умножение и округление
        //вывод
        return round($this->AO9_DlinaLenti_m()*L10_AF60_LentaDeodAleks_IP20S,0);
    }
    function AO11_MochostLenti_Vt()
    {  //умножение
        //вывод
        return $this->AO9_DlinaLenti_m()*L10_AJ60_LentaDiodAleks_IP20M;
    }
    function AO13_PotreblaimiiTok_A()
    {//деление
        return $this->AO11_MochostLenti_Vt()/12;
    }
    function AO15_MinMochnostBP_Vt()
    {        //умножение
        //вывод
        return $this->AO11_MochostLenti_Vt()*L10_BB78_K_ZapasPoTokuDlBP;
    }
    function AO17_VesLenti_kg()
    { //умножение
        //вывод
        return $this->AO9_DlinaLenti_m()*L10_AG60_LentaDeodAleks_IP20V;
    }
    function AO19_KabelSegment_mp()
    {   //округлвверх, деление и умножение
        //вывод
        return ceil($this->AO9_DlinaLenti_m()/L10_BB71_K_PredDlnLentDiod3750144VtVSegmm);
    }
    function AO20_KabelSegment_grn()
    {  //множение
        //вывод
        return $this->AO19_KabelSegment_mp()*L10_AF79_CabelCu_1mm2_13A;
    }
    function AO22_KabelBlochnii_mp()
    {   //округлвверх, деление и умножение
        //вывод
        return ceil($this->AO13_PotreblaimiiTok_A()/L10_AJ80_CabelCu_15mm2_20A)*L10_BB72_K_LenghtOutputKabel_mp;
    }
    function AO23_KabelBlochni_grn()
    {  //множение
        //вывод
        return $this->AO22_KabelBlochnii_mp()*L10_AF80_CabelCu_15mm2_20A;
    }
    function AO24_KabelItogo_grn()
    {   //умножение
        //вывод
        return $this->AO20_KabelSegment_grn()+$this->AO23_KabelBlochni_grn();
    }
    function AO26_Samorezi_sht()
    {  //умножение
        //вывод
        return round($this->AO9_DlinaLenti_m()*10,0);
    }
    function AO27_Samorezi_grn()
    {  //умножение
        //вывод
        return $this->AO26_Samorezi_sht()*L10_AR43_Samorez19BlackWood;
    }
    function AQ6_1PodborBPIP20()
    {
        //AO15>0 и AO15<=60, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO15_MinMochnostBP_Vt()>0 and $this->AO15_MinMochnostBP_Vt()<=60)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function AQ7_2PodborBPIP20()
    {
        //AO15>60 и AO15<=100, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO15_MinMochnostBP_Vt()>60 and $this->AO15_MinMochnostBP_Vt()<=100)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ8_3PodborBPIP20()
    {
        //AO15>100 и AO15<=150, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO15_MinMochnostBP_Vt()>100 and $this->AO15_MinMochnostBP_Vt()<=150)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ9_4PodborBPIP20()
    {
        //AO15>150 и AO15<=200, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO15_MinMochnostBP_Vt()>150 and $this->AO15_MinMochnostBP_Vt()<=200)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ10_5PodborBPIP20()
    {       //AO15>200 и AO21<=240, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO15_MinMochnostBP_Vt()>200 and $this->AO15_MinMochnostBP_Vt()<=240)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ12_6PodborBPIP20()
    {        //AO15>240 и AO15<=360, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO15_MinMochnostBP_Vt()>240 and $this->AO15_MinMochnostBP_Vt()<=360)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ13_7PodborBPIP20()
    {        //AO15>360 и AO15<=500, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO15_MinMochnostBP_Vt()>360 and $this->AO15_MinMochnostBP_Vt()<=500)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ14_8PodborBPIP20()
    {
        //AO15>500 и AO15<=600, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO15_MinMochnostBP_Vt()>500 and $this->AO15_MinMochnostBP_Vt()<=600)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AS6_1Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ6_1PodborBPIP20()*L10_AF23_PowerSupply_60VT_IP20S);
    }
    function AS7_2Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ7_2PodborBPIP20()*L10_AF24_PowerSupply_80VT_IP20S);
    }
    function AS8_3Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ8_3PodborBPIP20()*L10_AF25_PowerSupply_100VT_IP20S);
    }
    function AS9_4Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ9_4PodborBPIP20()*L10_AF26_PowerSupply_120VT_IP20S);
    }
    function AS10_5Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ10_5PodborBPIP20()*L10_AF27_PowerSupply_180VT_IP20S);
    }
    function AS12_6Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ12_6PodborBPIP20()*L10_AF29_PowerSupply_360VT_IP20S);
    }
    function AS13_7Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ13_7PodborBPIP20()*L10_AF30_PowerSupply_500VT_IP20S);
    }
    function AS14_8Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ14_8PodborBPIP20()*L10_AF31_PowerSupply_600VT_IP20S);
    }
    function AT6_1Ves()
    {
        //умножение
        //вывод
        return ($this->AQ6_1PodborBPIP20()*L10_AG23_PowerSupply_60VT_IP20V);
    }
    function AT7_2Ves()
    {
        //умножение
        //вывод
        return ($this->AQ7_2PodborBPIP20()*L10_AG24_PowerSupply_80VT_IP20V);
    }
    function AT8_3Ves()
    {
        //умножение
        //вывод
        return ($this->AQ8_3PodborBPIP20()*L10_AG25_PowerSupply_100VT_IP20V);
    }
    function AT9_4Ves()
    {
        //умножение
        //вывод
        return ($this->AQ9_4PodborBPIP20()*L10_AG26_PowerSupply_120VT_IP20V);
    }
    function AT10_5Ves()
    {
        //умножение
        //вывод
        return ($this->AQ10_5PodborBPIP20()*L10_AG27_PowerSupply_180VT_IP20V);
    }
    function AT12_6Ves()
    {
        //умножение
        //вывод
        return ($this->AQ12_6PodborBPIP20()*L10_AG29_PowerSupply_360VT_IP20V);
    }
    function AT13_7Ves()
    {
        //умножение
        //вывод
        return ($this->AQ13_7PodborBPIP20()*L10_AG30_PowerSupply_500VT_IP20V);
    }
    function AT14_8Ves()
    {
        //умножение
        //вывод
        return ($this->AQ14_8PodborBPIP20()*L10_AG31_PowerSupply_600VT_IP20V);
    }
    function AS16_ItogoBPBezGarantii()
    {        //сложение
        //вывод
        return $this->AS6_1Stoimost()+$this->AS7_2Stoimost()+$this->AS8_3Stoimost()+$this->AS9_4Stoimost()+$this->AS10_5Stoimost()+$this->AS12_6Stoimost()+$this->AS13_7Stoimost()+$this->AS14_8Stoimost();
    }
    function AT16_2ItogoBPBezGarantii()
    {    //сложение
        //вывод
        return $this->AT6_1Ves()+$this->AT7_2Ves()+$this->AT8_3Ves()+$this->AT9_4Ves()+$this->AT10_5Ves()+$this->AT12_6Ves()+$this->AT13_7Ves()+$this->AT14_8Ves();
    }
    function AS17_BPSGarantiei_grn()
    {
        //умножение
        //вывод
        return ($this->AS16_ItogoBPBezGarantii()*L10_BB79_K_GarantFinansNaBP);
    }
    function AW5_MontagLentiDiod_min()
    {        //умножение
        //вывод
        return $this->AO9_DlinaLenti_m()*L10_BT59_MontajGibkDiodPolos_1mp;
    }
    function AW6_MontagBP_min()
    {        //вывод
        return L10_BT55_MontajBlockPit_1sht;
    }
    function AZ6_StoimostMaterialov_grn()
    {
        //округление и сложение
        //вывод
        return round($this->AO10_StoimostLenti_grn()+$this->AO24_KabelItogo_grn()+$this->AO27_Samorezi_grn()+$this->AS17_BPSGarantiei_grn(), 0);
    }
    function AZ7_StoimostBPSGarantiei_grn()
    {
        //округление и сложение
        //вывод
        return round($this->AS17_BPSGarantiei_grn(), 0);
    }
    function AZ8_Ves1BP_kg()
    {        //вывод
        return $this->AT16_2ItogoBPBezGarantii();
    }
    function AZ10_TrydoemkostKlaster_min()
    {
        //округление и сложение
        //вывод
        return round($this->AW5_MontagLentiDiod_min()+$this->AW6_MontagBP_min(), 0);
    }
    function AZ11_StoimostMaterialov_grn()
    {        //умножение и округление
        //вывод
        return round($this->AZ10_TrydoemkostKlaster_min()*L10_C67_K1,0);
    }
    function AZ21_Energopotreblenie_Vt()
    {
        //округление
        //вывод
        return round($this->AO11_MochostLenti_Vt(),0);
    }
    function AZ22_Ves_kg()
    {
        //сложение, умножение и округление
        //вывод
        return round($this->AO17_VesLenti_kg()+$this->AT16_2ItogoBPBezGarantii(),1);
    }
    function AZ24_Itogo_grn()
    {        //сложение и округление
        //вывод
        return round($this->AZ6_StoimostMaterialov_grn()+$this->AZ11_StoimostMaterialov_grn(),0);
    }

}

class L18_32
{
    // Входные параметры:
    public $AL42PowerLenti_VT; // мощность ленты, Вт
    public $AL43_StorTrudLenta_min; // 1 стор труд лента, мин
    public $AL45_Storoni2Pomechenia;//2 стороны помещение
    public $AL46_Storoni4Pomechenia;//4 стороны помещение
    public $AL49_Storoni2MaterBezBP;//2 стор вес без БП, кг
    public $AL50_Storoni4MaterBezBP;//4 стор вес без БП, кг
    public $AL53_Stor2VesBezBP_kg;//2 стор вес без БП, кг
    public $AL54_Stor4VesBezBP_kg;//4 стор вес без БП, кг

    private $L18_31_temp; // Расчёты в классе L18_31.

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)
{
    $this->L18_31_temp = new L18_31( $SCLight, $VarIspoln,
                                     $Orientation, $MaxSide_cm, $MinSide_cm,
                                     $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                     $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
    // Заполнение входных данных.
    $this->AL42PowerLenti_VT = $this->L18_31_temp->AZ21_Energopotreblenie_Vt();
    $this->AL43_StorTrudLenta_min = $this->L18_31_temp->AW5_MontagLentiDiod_min();
    $this->AL45_Storoni2Pomechenia = ($VarIspoln == 4) ? 1 : 0;
    $this->AL46_Storoni4Pomechenia = ($VarIspoln == 5) ? 1 : 0;

    $temp = $this->L18_31_temp->AZ6_StoimostMaterialov_grn() -
            $this->L18_31_temp->AZ7_StoimostBPSGarantiei_grn();
    $this->AL49_Storoni2MaterBezBP = $temp * 2;
    $this->AL50_Storoni4MaterBezBP = $temp * 4;

    $temp = $this->L18_31_temp->AZ22_Ves_kg() -
            $this->L18_31_temp->AZ8_Ves1BP_kg();
    $this->AL53_Stor2VesBezBP_kg = $temp * 2;
    $this->AL54_Stor4VesBezBP_kg = $temp * 4;
}

    function AO42_MochLenti2Stor_Vt()
    { //умножение
        //вывод
        return $this->AL42PowerLenti_VT * 2;
    }
    function AO43_MinMochLentiBP2Stor_Vt()
    { //умножение
        //вывод
        return $this->AO42_MochLenti2Stor_Vt()*L10_BB78_K_ZapasPoTokuDlBP;
    }
    function AO45_MochLenti4Stor_Vt()
    { //умножение
        //вывод
        return $this->AL42PowerLenti_VT * 4;
    }
    function AO46_MinMochLentiBP4Stor_Vt()
    { //умножение
        //вывод
        return $this->AO45_MochLenti4Stor_Vt()*L10_BB78_K_ZapasPoTokuDlBP;
    }
    function AQ43_1PodborBPIP20()
    {
        //AO15>0 и AO15<=60, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO43_MinMochLentiBP2Stor_Vt()>0 and $this->AO43_MinMochLentiBP2Stor_Vt()<=60)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function AQ44_2PodborBPIP20()
    {
        //AO15>60 и AO15<=100, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO43_MinMochLentiBP2Stor_Vt()>60 and $this->AO43_MinMochLentiBP2Stor_Vt()<=100)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ45_3PodborBPIP20()
    {
        //AO15>100 и AO15<=150, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO43_MinMochLentiBP2Stor_Vt()>100 and $this->AO43_MinMochLentiBP2Stor_Vt()<=150)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ46_4PodborBPIP20()
    {
        //AO15>150 и AO15<=200, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO43_MinMochLentiBP2Stor_Vt()>150 and $this->AO43_MinMochLentiBP2Stor_Vt()<=200)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ47_5PodborBPIP20()
    {       //AO15>200 и AO21<=240, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO43_MinMochLentiBP2Stor_Vt()>200 and $this->AO43_MinMochLentiBP2Stor_Vt()<=240)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ49_6PodborBPIP20()
    {        //AO15>240 и AO15<=360, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO43_MinMochLentiBP2Stor_Vt()>240 and $this->AO43_MinMochLentiBP2Stor_Vt()<=360)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ50_7PodborBPIP20()
    {        //AO15>360 и AO15<=500, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO43_MinMochLentiBP2Stor_Vt()>360 and $this->AO43_MinMochLentiBP2Stor_Vt()<=500)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ51_8PodborBPIP20()
    {
        //AO15>500 и AO15<=600, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO43_MinMochLentiBP2Stor_Vt()>500 and $this->AO43_MinMochLentiBP2Stor_Vt()<=600)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AS43_1Stoimost()
    {        //умножение
        //вывод
        return $this->AQ43_1PodborBPIP20()*L10_AF23_PowerSupply_60VT_IP20S;
    }
    function AS44_2Stoimost()
    {
        //умножение
        //вывод
        return $this->AQ44_2PodborBPIP20()*L10_AF24_PowerSupply_80VT_IP20S;
    }
    function AS45_3Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ45_3PodborBPIP20()*L10_AF25_PowerSupply_100VT_IP20S);
    }
    function AS46_4Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ46_4PodborBPIP20()*L10_AF26_PowerSupply_120VT_IP20S);
    }
    function AS47_5Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ47_5PodborBPIP20()*L10_AF27_PowerSupply_180VT_IP20S);
    }
    function AS49_6Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ49_6PodborBPIP20()*L10_AF29_PowerSupply_360VT_IP20S);
    }
    function AS50_7Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ50_7PodborBPIP20()*L10_AF30_PowerSupply_500VT_IP20S);
    }
    function AS51_8Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ51_8PodborBPIP20()*L10_AF31_PowerSupply_600VT_IP20S);
    }
    function AT43_1Ves()
    {
        //умножение
        //вывод
        return ($this->AQ43_1PodborBPIP20()*L10_AG23_PowerSupply_60VT_IP20V);
    }
    function AT44_2Ves()
    {
        //умножение
        //вывод
        return ($this->AQ44_2PodborBPIP20()*L10_AG24_PowerSupply_80VT_IP20V);
    }
    function AT45_3Ves()
    {
        //умножение
        //вывод
        return ($this->AQ45_3PodborBPIP20()*L10_AG25_PowerSupply_100VT_IP20V);
    }
    function AT46_4Ves()
    {
        //умножение
        //вывод
        return ($this->AQ46_4PodborBPIP20()*L10_AG26_PowerSupply_120VT_IP20V);
    }
    function AT47_5Ves()
    {
        //умножение
        //вывод
        return ($this->AQ47_5PodborBPIP20()*L10_AG27_PowerSupply_180VT_IP20V);
    }
    function AT49_6Ves()
    {
        //умножение
        //вывод
        return ($this->AQ49_6PodborBPIP20()*L10_AG29_PowerSupply_360VT_IP20V);
    }
    function AT50_7Ves()
    {
        //умножение
        //вывод
        return ($this->AQ50_7PodborBPIP20()*L10_AG30_PowerSupply_500VT_IP20V);
    }
    function AT51_8Ves()
    {
        //умножение
        //вывод
        return ($this->AQ51_8PodborBPIP20()*L10_AG31_PowerSupply_600VT_IP20V);
    }
    function AS53_ItogoBPBezGarantii()
    {        //сложение
        //вывод
        return $this->AS43_1Stoimost()+$this->AS44_2Stoimost()+$this->AS45_3Stoimost()+$this->AS46_4Stoimost()+$this->AS47_5Stoimost()+$this->AS49_6Stoimost()+$this->AS50_7Stoimost()+$this->AS51_8Stoimost();
    }
    function AT53_2ItogoBPBezGarantii()
    {    //сложение
        //вывод
        return $this->AT43_1Ves()+$this->AT44_2Ves()+$this->AT45_3Ves()+$this->AT46_4Ves()+$this->AT47_5Ves()+$this->AT49_6Ves()+$this->AT50_7Ves()+$this->AT51_8Ves();
    }
    function AS54_BPSGarantiei_grn()
    {
        //умножение
        //вывод
        return ($this->AS53_ItogoBPBezGarantii()*L10_BB78_K_ZapasPoTokuDlBP);
    }
    //ОБЪЕДИНЕНИЕ БП 4 СТОРОНЫ!!!
    function AQ59_1PodborBPIP20()
    {        //AO15>0 и AO15<=60, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO46_MinMochLentiBP4Stor_Vt()>0 and $this->AO46_MinMochLentiBP4Stor_Vt()<=60)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function AQ60_2PodborBPIP20()
    {        //AO15>60 и AO15<=100, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO46_MinMochLentiBP4Stor_Vt()>60 and $this->AO46_MinMochLentiBP4Stor_Vt()<=100)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ61_3PodborBPIP20()
    {
        //AO15>100 и AO15<=150, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO46_MinMochLentiBP4Stor_Vt()>100 and $this->AO46_MinMochLentiBP4Stor_Vt()<=150)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ62_4PodborBPIP20()
    {
        //AO15>150 и AO15<=200, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO46_MinMochLentiBP4Stor_Vt()>150 and $this->AO46_MinMochLentiBP4Stor_Vt()<=200)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ63_5PodborBPIP20()
    {       //AO15>200 и AO21<=240, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO46_MinMochLentiBP4Stor_Vt()>200 and $this->AO46_MinMochLentiBP4Stor_Vt()<=240)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ65_6PodborBPIP20()
    {        //AO15>240 и AO15<=360, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO46_MinMochLentiBP4Stor_Vt()>240 and $this->AO46_MinMochLentiBP4Stor_Vt()<=360)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ66_7PodborBPIP20()
    {        //AO15>360 и AO15<=500, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO46_MinMochLentiBP4Stor_Vt()>360 and $this->AO46_MinMochLentiBP4Stor_Vt()<=500)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ67_8PodborBPIP20()
    {
        //AO15>500 и AO15<=600, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO46_MinMochLentiBP4Stor_Vt()>500 and $this->AO46_MinMochLentiBP4Stor_Vt()<=600)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AS59_1Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ59_1PodborBPIP20()*L10_AF23_PowerSupply_60VT_IP20S);
    }
    function AS60_2Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ60_2PodborBPIP20()*L10_AF24_PowerSupply_80VT_IP20S);
    }
    function AS61_3Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ61_3PodborBPIP20()*L10_AF25_PowerSupply_100VT_IP20S);
    }
    function AS62_4Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ62_4PodborBPIP20()*L10_AF26_PowerSupply_120VT_IP20S);
    }
    function AS63_5Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ63_5PodborBPIP20()*L10_AF27_PowerSupply_180VT_IP20S);
    }
    function AS65_6Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ65_6PodborBPIP20()*L10_AF29_PowerSupply_360VT_IP20S);
    }
    function AS66_7Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ66_7PodborBPIP20()*L10_AF30_PowerSupply_500VT_IP20S);
    }
    function AS67_8Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ67_8PodborBPIP20()*L10_AF31_PowerSupply_600VT_IP20S);
    }
    function AT59_1Ves()
    {
        //умножение
        //вывод
        return ($this->AQ59_1PodborBPIP20()*L10_AG23_PowerSupply_60VT_IP20V);
    }
    function AT60_2Ves()
    {
        //умножение
        //вывод
        return ($this->AQ60_2PodborBPIP20()*L10_AG24_PowerSupply_80VT_IP20V);
    }
    function AT61_3Ves()
    {
        //умножение
        //вывод
        return ($this->AQ61_3PodborBPIP20()*L10_AG25_PowerSupply_100VT_IP20V);
    }
    function AT62_4Ves()
    {
        //умножение
        //вывод
        return ($this->AQ62_4PodborBPIP20()*L10_AG26_PowerSupply_120VT_IP20V);
    }
    function AT63_5Ves()
    {
        //умножение
        //вывод
        return ($this->AQ63_5PodborBPIP20()*L10_AG27_PowerSupply_180VT_IP20V);
    }
    function AT65_6Ves()
    {
        //умножение
        //вывод
        return ($this->AQ65_6PodborBPIP20()*L10_AG29_PowerSupply_360VT_IP20V);
    }
    function AT66_7Ves()
    {
        //умножение
        //вывод
        return ($this->AQ66_7PodborBPIP20()*L10_AG30_PowerSupply_500VT_IP20V);
    }
    function AT67_8Ves()
    {
        //умножение
        //вывод
        return ($this->AQ67_8PodborBPIP20()*L10_AG31_PowerSupply_600VT_IP20V);
    }
    function AS69_ItogoBPBezGarantii()
    {        //сложение
        //вывод
        return $this->AS59_1Stoimost()+$this->AS60_2Stoimost()+$this->AS61_3Stoimost()+$this->AS62_4Stoimost()+$this->AS63_5Stoimost()+$this->AS65_6Stoimost()+$this->AS66_7Stoimost()+$this->AS67_8Stoimost();
    }
    function AT69_2ItogoBPBezGarantii()
    {    //сложение
        //вывод
        return $this->AT59_1Ves()+$this->AT60_2Ves()+$this->AT61_3Ves()+$this->AT62_4Ves()+$this->AT63_5Ves()+$this->AT65_6Ves()+$this->AT66_7Ves()+$this->AT67_8Ves();
    }
    function AS70_BPSGarantiei_grn()
    {
        //умножение
        //вывод
        return ($this->AS69_ItogoBPBezGarantii()*L10_BB78_K_ZapasPoTokuDlBP);
    }
    function AW42_Stor2Pomechenia()
    {        //сложение
        //вывод
        return $this->AL53_Stor2VesBezBP_kg+$this->AT53_2ItogoBPBezGarantii();
    }
    function AW43_MontagBP_min()
    {        //вывод
        return $this->AL54_Stor4VesBezBP_kg+$this->AT69_2ItogoBPBezGarantii();
    }
    function AZ43_StoimostMaterialov2Stor_grn()
    {
        //округление и сложение
        //вывод
        return round($this->AL49_Storoni2MaterBezBP+$this->AS54_BPSGarantiei_grn(), 0);
    }
    function AZ45_VesObedunenia2Stor_kg()
    {      //вывод
        return $this->AW42_Stor2Pomechenia();
    }
    function AW6_MontagBP_min()
    {
        return L10_BT55_MontajBlockPit_1sht;
    }
    function AZ47_Trydoemkost2Stor_min()
    {    //округление, умножение и сложение
        //вывод
        return round($this->AL43_StorTrudLenta_min*2+$this->AW6_MontagBP_min(),0);
    }
    function AZ48_FlagZameni2()
    {
        //если As53=0, то присвоить 0, иначе присвоить 1
        //вывод
        if ($this->AS53_ItogoBPBezGarantii()==0)
        {
            return 0;
        }
        else{
            return 1;
        }    }
    function AZ52_StoimostMaterialov4Stor_grn()
    {
        //округление и сложение
        //вывод
        return round($this->AL50_Storoni4MaterBezBP+$this->AS70_BPSGarantiei_grn(), 0);
    }
    function AZ54_VesObedunenia4Stor_kg()
    {      //вывод
        return $this->AW43_MontagBP_min();
    }
    function AZ56_StoimostMaterialov_grn()
    {        //умножение и сложение
        //вывод
        return $this->AL43_StorTrudLenta_min*4+$this->AW6_MontagBP_min();
    }
    function AZ57_FlagZameni4()
    {
        //если As53=0, то присвоить 0, иначе присвоить 1
        //вывод
        if ($this->AS69_ItogoBPBezGarantii()==0)
        {
            return 0;
        }
        else{
            return 1;
        }    }

}

class L18_33{
// Входные параметры:
    public $AL89_BigSide_cm; // Большая сторона
    public $AL90_SmallSide_cm; // Маленькая сторона

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)
    {
        // Заполнение входных данных с проверкой.
        $this->AL89_BigSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MaxSide_cm : $MinSide_cm;
        $this->AL90_SmallSide_cm = ( $MaxSide_cm>$MinSide_cm) ? $MinSide_cm : $MaxSide_cm;
    }

    // C-light _ лента диодная 4,6 Вт "Алексей" встроенный БП_ 3

    function AO83_BigStor()
    {
        //t11/100, округлить
        //вывод
        return round( $this->AL89_BigSide_cm / 100, 2);
    }
    function AO84_SmallStor()
    {        //t12/100, округлить
        //вывод
        return round( $this->AL90_SmallSide_cm / 100, 2);
    }
    function AO85_PlochadFasada_m2()
    { //умножение
        //вывод
        return $this->AO83_BigStor()*$this->AO84_SmallStor();
    }
    function AO87_DlinaLenti_m()
    {    //деление
        //вывод
        return $this->AO85_PlochadFasada_m2()/L10_BK68_ShagLinLentDiod46vtAleks_m;
    }
    function AO88_StoimostLenti_grn()
    {    //умножение и округление
        //вывод
        return round($this->AO87_DlinaLenti_m()*L10_AF60_LentaDeodAleks_IP20S,0);
    }
    function AO89_MochostLenti_Vt()
    {
        return $this->AO87_DlinaLenti_m()*L10_AJ60_LentaDiodAleks_IP20M;
    }
    function AO91_PotreblaimiiTok_A()
    {//деление
        return $this->AO89_MochostLenti_Vt()/12;
    }
    function AO93_MinMochnostBP_Vt()
    {        //умножение
        //вывод
        return $this->AO89_MochostLenti_Vt()*L10_BB78_K_ZapasPoTokuDlBP;
    }
    function AO95_VesLenti_kg()
    { //умножение
        //вывод
        return $this->AO87_DlinaLenti_m()*L10_AG60_LentaDeodAleks_IP20V;
    }
    function AO97_KabelSegment_mp()
    {   //округлвверх, деление и умножение
        //вывод
        return ceil($this->AO87_DlinaLenti_m()/L10_BB71_K_PredDlnLentDiod3750144VtVSegmm);
    }
    function AO98_KabelSegment_grn()
    {  //множение
        //вывод
        return $this->AO97_KabelSegment_mp()*L10_AF79_CabelCu_1mm2_13A;
    }
    function AO100_KabelSetevoii_mp()
    {
        //вывод
        return L10_BB72_K_LenghtOutputKabel_mp;
    }
    function AO101_KabelSetevoii_grn()
    {  //множение
        //вывод
        return $this->AO100_KabelSetevoii_mp()*L10_AF79_CabelCu_1mm2_13A;
    }
    function AO102_KabelItogo_grn()
    {   //умножение
        //вывод
        return $this->AO98_KabelSegment_grn()+$this->AO101_KabelSetevoii_grn();
    }
    function AO104_Samorezi_sht()
    {  //умножение
        //вывод
        return round($this->AO87_DlinaLenti_m()*10,0);
    }
    function AO105_Samorezi_grn()
    {  //умножение
        //вывод
        return $this->AO104_Samorezi_sht()*L10_AR43_Samorez19BlackWood;
    }
    function AQ84_1PodborBPIP20()
    {
        //AO93>0 и AO15<=60, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO93_MinMochnostBP_Vt()>0 and $this->AO93_MinMochnostBP_Vt()<=60)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function AQ85_2PodborBPIP20()
    {
        //AO93>60 и AO93<=100, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO93_MinMochnostBP_Vt()>60 and $this->AO93_MinMochnostBP_Vt()<=100)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ86_3PodborBPIP20()
    {
        //AO93>100 и AO93<=150, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO93_MinMochnostBP_Vt()>100 and $this->AO93_MinMochnostBP_Vt()<=150)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ87_4PodborBPIP20()
    {
        //AO93>150 и AO93<=200, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AO93_MinMochnostBP_Vt()>150 and $this->AO93_MinMochnostBP_Vt()<=200)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ88_5PodborBPIP20()
    {       //AO93>200 и AO93=240, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO93_MinMochnostBP_Vt()>200 and $this->AO93_MinMochnostBP_Vt()<=240)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ89_6PodborBPIP20()
    {        //AO93>240 и AO93<=360, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO93_MinMochnostBP_Vt()>240 and $this->AO93_MinMochnostBP_Vt()<=360)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }
    function AQ90_7PodborBPIP20()
    {        //AO93>360 и AO93<=500, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->AO93_MinMochnostBP_Vt()>360 and $this->AO93_MinMochnostBP_Vt()<=500)
        {
            return 1;
        }
        else
        {
            return 0;
        }    }

    function AS84_1Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ84_1PodborBPIP20()*L10_AF23_PowerSupply_60VT_IP20S);
    }
    function AS85_2Stoimost()
    {
        //умножение
        //вывод
        return ($this->AQ85_2PodborBPIP20()*L10_AF24_PowerSupply_80VT_IP20S);
    }
    function AS86_3Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ86_3PodborBPIP20()*L10_AF25_PowerSupply_100VT_IP20S);
    }
    function AS87_4Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ87_4PodborBPIP20()*L10_AF26_PowerSupply_120VT_IP20S);
    }
    function AS88_5Stoimost()
    {        //умножение
        //вывод
        return ($this->AQ88_5PodborBPIP20()*L10_AF27_PowerSupply_180VT_IP20S);
    }
    function AS89_6Stoimost()
    {        //умножение
        //вывод
        return $this->AQ89_6PodborBPIP20()*L10_AF27_PowerSupply_180VT_IP20S*2;
    }
    function AS90_7Stoimost()
    {        //умножение
        //вывод
        return $this->AQ90_7PodborBPIP20()*L10_AF26_PowerSupply_120VT_IP20S*3;
    }
    function AT84_1Ves()
    {
        //умножение
        //вывод
        return ($this->AQ84_1PodborBPIP20()*L10_AG23_PowerSupply_60VT_IP20V);
    }
    function AT85_2Ves()
    {
        //умножение
        //вывод
        return ($this->AQ85_2PodborBPIP20()*L10_AG24_PowerSupply_80VT_IP20V);
    }
    function AT86_3Ves()
    {
        //умножение
        //вывод
        return ($this->AQ86_3PodborBPIP20()*L10_AG25_PowerSupply_100VT_IP20V);
    }
    function AT87_4Ves()
    {
        //умножение
        //вывод
        return ($this->AQ87_4PodborBPIP20()*L10_AG26_PowerSupply_120VT_IP20V);
    }
    function AT88_5Ves()
    {
        //умножение
        //вывод
        return ($this->AQ88_5PodborBPIP20()*L10_AG27_PowerSupply_180VT_IP20V);
    }
    function AT89_6Ves()
    {
        //умножение
        //вывод
        return $this->AQ88_5PodborBPIP20()*L10_AG27_PowerSupply_180VT_IP20V*2;
    }
    function AT90_7Ves()
    {
        //умножение
        //вывод
        return $this->AQ88_5PodborBPIP20()*L10_AG26_PowerSupply_120VT_IP20V*3;
    }
    function AS94_ItogoBPBezGarantii()
    {        //сложение
        //вывод
        return $this->AS84_1Stoimost()+$this->AS85_2Stoimost()+$this->AS86_3Stoimost()+$this->AS87_4Stoimost()+$this->AS88_5Stoimost()+$this->AS89_6Stoimost()+$this->AS90_7Stoimost();
    }
    function AT94_2ItogoBPBezGarantii()
    {    //сложение
        //вывод
        return $this->AT84_1Ves()+$this->AT85_2Ves()+$this->AT86_3Ves()+$this->AT87_4Ves()+$this->AT88_5Ves()+$this->AT89_6Ves()+$this->AT90_7Ves();
    }
    function AS95_BPSGarantiei_grn()
    {
        //умножение
        //вывод
        return ($this->AS94_ItogoBPBezGarantii()*L10_BB79_K_GarantFinansNaBP);
    }
    function AW83_MontagLentiDiod_min()
    {        //умножение
        //вывод
        return $this->AO87_DlinaLenti_m()*L10_BT59_MontajGibkDiodPolos_1mp;
    }
    function AW84_MontagBP_min()
    {   //умножение и сложение
        //вывод
        return L10_BT55_MontajBlockPit_1sht*(1+$this->AQ89_6PodborBPIP20()+$this->AQ90_7PodborBPIP20()*2);
    }
    function AZ84_StoimostMaterialov_grn()
    {
        //округление и сложение
        //вывод
        return round($this->AO88_StoimostLenti_grn()+$this->AO102_KabelItogo_grn()+$this->AO105_Samorezi_grn()+$this->AS95_BPSGarantiei_grn(), 0);
    }
    function AZ88_TrydoemkostLenta_min()
    {
        //округление и сложение
        //вывод
        return round($this->AW83_MontagLentiDiod_min()+$this->AW84_MontagBP_min(), 0);
    }
    function AZ89_StoimosRaboti_grn()
    {        //умножение
        //вывод
        return $this->AZ88_TrydoemkostLenta_min()*L10_C67_K1;
    }
    function AZ99_Energopotreblenie_Vt()
    {
        //округление
        //вывод
        return round($this->AO89_MochostLenti_Vt(),0);
    }
    function AZ100_Ves_kg()
    {
        //сложение, умножение и округление
        //вывод
        return round($this->AO95_VesLenti_kg()+$this->AT94_2ItogoBPBezGarantii(),1);
    }
    function AZ102_Itogo_grn()
    {        //сложение и округление
        //вывод
        return round($this->AZ84_StoimostMaterialov_grn()+$this->AZ89_StoimosRaboti_grn(),0);
    }

}

class L18_4{

    // Входные параметры:
    public $BD5_RoofVisorOut; // крыша/козырек улица
    public $BD6_AOallOut; // стена улица
    public $BD7_AOallIn; // стена помещение
    public $BD8_SideIn2; // 2 стороны помещение
    public $BD9_SideIn4; // 4 стороны помещение

    public $BD12_Istochniksveta; // источник света (1- диоды/2-лампы
    public $BD17_FlagZameni2;//флаг замены 2
    public $BD18_FlagZameni4;//флаг замены 4

    private $L18_32_temp; // Расчёты в классе L18_32.

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientation = 1, $MaxSide_cm = 150, $MinSide_cm = 100,
                                $FrontImg=1, $ColorSide=1, $ColorBack=0, $Ugol=[0,0,0,0],
                                $MaketImg=1, $PlenkLic=3, $PlastLic=2, $IstochnikSveta = 1)

    {
        $this->L18_32_temp = new L18_32( $SCLight, $VarIspoln,
                                         $Orientation, $MaxSide_cm, $MinSide_cm,
                                         $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                         $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);

        // Заполнение входных данных.
        $this->BD5_RoofVisorOut = ($VarIspoln == 4) ? 1 : 0;
        $this->BD6_AOallOut = ($VarIspoln == 2) ? 1 : 0;
        $this->BD7_AOallIn = ($VarIspoln == 3) ? 1 : 0;
        $this->BD8_SideIn2 = ($VarIspoln == 4) ? 1 : 0;
        $this->BD9_SideIn4 = ($VarIspoln == 5) ? 1 : 0;

        $this->BD12_Istochniksveta = $IstochnikSveta;

        $this->BD17_FlagZameni2=$this->L18_32_temp->AZ48_FlagZameni2();
        $this->BD18_FlagZameni4=$this->L18_32_temp->AZ57_FlagZameni4();
    }

    // C-light _ электрика итого _ 3

    function BE24_DiodiPlusVnechInver()
    {//если bd12=1, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 1) ? 1 : 0;
    }
    function BE25_DiodiPlusVstroenInver()
    {//если bd12=2, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 2) ? 1 : 0;
    }
    function BE26_LampiDnevnogoSveta()
    {//если bd12=3, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 3) ? 1 : 0;
    }
    function BE27_DiodiPlusVnechInver()
    {//вывод
        return 1;
    }
    function BF27_DiodiPlusVnechInver()
    {
        //ВПР
        //сравнение c 1
        //вывод
        if ($this->BE24_DiodiPlusVnechInver()==$this->BE27_DiodiPlusVnechInver() or $this->BE25_DiodiPlusVstroenInver()==$this->BE27_DiodiPlusVnechInver() or $this->BE26_LampiDnevnogoSveta()==$this->BE27_DiodiPlusVnechInver() )
        {
            return  'диоды + внеш инвер';
        }
        else
        {
            return 0;
        }
    }
    function BG5_LentaPlusVnechniiBP()
    {//если bd12=1, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 1) ? 1 : 0;
    }
    function BG6_LentaPlusVstroeniiBP()
    {//если bd12=2, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 2) ? 1 : 0;
    }
    function BG7_LampiDnevnogoSveta()
    {//если bd12=3, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 3) ? 1 : 0;
    }
    function BG9_Storona1()
    {//если bd8+bd9=0, о присвоить 1, иначе присвоить 0
        return ($this->BD8_SideIn2+$this->BD9_SideIn4 == 0) ? 1 : 0;
    }
    function BG12_LentaPlusVstroeniiBP1Stor()
    {//умножение
        return $this->BG6_LentaPlusVstroeniiBP()*$this->BG9_Storona1();
    }
    function BG13_LentaPlusVnechniiBP1Stor()
    {//умножение
        return $this->BG5_LentaPlusVnechniiBP()*$this->BG9_Storona1();
    }
    function BG14_LentaPlusVnechniiBP2Stor()
    {//умножение
        return $this->BD8_SideIn2 * $this->BG5_LentaPlusVnechniiBP();
    }
    function BG15_LentaPlusVnechniiBP4Stor()
    {//умножение
        return $this->BD9_SideIn4 * $this->BG5_LentaPlusVnechniiBP();
    }
    function BG17_FlagNeZameni2()
    {//если bd17=0, о присвоить 1, иначе присвоить 0
        return ($this->BD17_FlagZameni2 == 0) ? 1 : 0;
    }
    function BG18_FlagNeZameni4()
    {//если bd18=0, о присвоить 1, иначе присвоить 0
        return ($this->BD18_FlagZameni4 == 0) ? 1 : 0;
    }
    function P6_StoimosMaterialov()
    {
        return 1421;
    }
    function AZ6_StoimostMaterialov_grn()
    {   //вывод
        return 902;
    }

    function AZ43_StoimostMater2Stor_grn()
    {   //вывод
        return 1769;
    }
    function AZ52_StoimostMater4Stor_grn()
    {   //вывод
        return 3257;
    }
    function AZ84_StoimostMaterialov_grn()
    {   //вывод
        return 885;
    }
    function AZ22_Ves_kg()
    {   //вывод
        return 0.9;
    }
    function AZ100_Ves_kg()
    {   //вывод
        return 0.9;
    }
    function AZ45_VesObjed2Stor_kg()
    {   //вывод
        return 1.7;
    }
    function AZ54_VesObjed4Stor_kg()
    {   //вывод
        return 3.3;
    }
    function P22_Ves_kg()
    {   //вывод
        return 3.4;
    }
    function BJ5_LentaPlusVnechniiBP()
    { //вывод
        return ($this->AZ6_StoimostMaterialov_grn());
    }
    function BJ6_LentaPlusVstroeniiBPStor()
    {  //вывод
        return $this->AZ84_StoimostMaterialov_grn();
    }
    function BJ8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->AZ6_StoimostMaterialov_grn()*2;
    }
    function BJ9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->AZ43_StoimostMater2Stor_grn();
    }
    function BJ11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->AZ6_StoimostMaterialov_grn()*4;
    }
    function BJ12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->AZ52_StoimostMater4Stor_grn();
    }
    function BJ14_LampiDnevnogoSveta()
    {  //вывод
        return $this->P6_StoimosMaterialov();
    }
    function BK5_LentaPlusVnechniiBP()
    { //вывод
        return $this->AZ22_Ves_kg();
    }
    function BK6_LentaPlusVstroeniiBPStor()
    {  //вывод
        return $this->AZ100_Ves_kg();
    }
    function BK8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->AZ22_Ves_kg()*2;
    }
    function BK9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->AZ45_VesObjed2Stor_kg();
    }
    function BK11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->AZ22_Ves_kg()*4;
    }
    function BK12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->AZ54_VesObjed4Stor_kg();
    }
    function BK14_LampiDnevnogoSveta()
    {  //вывод
        return $this->P22_Ves_kg();
    }

    function AZ21_EnergoPotreblenie_Vt()
    {    //вывод
        return 69;
    }
    function AZ99_EnergoPotreblenie_Vt()
    {   //вывод
        return 69;
    }
    function P21_EnergoPotreblenie_Vt()
    {   //вывод
        return 150;
    }
    function BL5_LentaPlusVnechniiBP()
    { //вывод
        return $this->AZ21_EnergoPotreblenie_Vt();
    }
    function BL6_LentaPlusVstroeniiBPStor()
    {  //вывод
        return $this->AZ99_EnergoPotreblenie_Vt();
    }
    function BL8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->AZ21_EnergoPotreblenie_Vt()*2;
    }
    function Bl9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->AZ21_EnergoPotreblenie_Vt()*2;
    }
    function BL11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->AZ21_EnergoPotreblenie_Vt()*4;
    }
    function BL12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->AZ21_EnergoPotreblenie_Vt()*4;
    }
    function BL14_LampiDnevnogoSveta()
    {  //вывод
        return $this->P21_EnergoPotreblenie_Vt();
    }

    function P10_TrydoemkostLenta_min()
    {    //вывод
        return 120;
    }
    function P10_TrydoemkostLampi_min()
    {   //вывод
        return 100;
    }
    function AZ10_TrydoemkostLenta_min()
    {    //вывод
        return 110;
    }
    function AZ88_TrydoemkostLenta_min()
    {    //вывод
        return 110;
    }
    function AZ47_Trydoemkost2Storoni_min()
    {    //вывод
        return 200;
    }
    function AZ56_Trydoemkost4Storoni_min()
    {    //вывод
        return 380;
    }
    function BM5_LentaPlusVnechniiBP()
    { //вывод
        return $this->AZ10_TrydoemkostLenta_min();
    }
    function BM6_LentaPlusVstroeniiBPStor()
    {  //вывод
        return $this->AZ88_TrydoemkostLenta_min();
    }
    function BM8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->AZ10_TrydoemkostLenta_min()*2;
    }
    function BM9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->AZ47_Trydoemkost2Storoni_min();
    }
    function BM11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->AZ10_TrydoemkostLenta_min()*4;
    }
    function BM12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->AZ56_Trydoemkost4Storoni_min();
    }
    function BM14_LampiDnevnogoSveta()
    {  //вывод
        return $this->P10_TrydoemkostLampi_min();
    }
    function BO5_LentaPlusVnechniiBP()
    { //вывод
        return $this->BG13_LentaPlusVnechniiBP1Stor();
    }
    function BO6_LentaPlusVstroeniiBPStor()
    {  //вывод
        return $this->BG12_LentaPlusVstroeniiBP1Stor();
    }
    function BO8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->BG14_LentaPlusVnechniiBP2Stor()*$this->BG17_FlagNeZameni2();
    }
    function BO9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->BG14_LentaPlusVnechniiBP2Stor()*$this->BD17_FlagZameni2;
    }
    function BO11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->BG15_LentaPlusVnechniiBP4Stor()*$this->BG18_FlagNeZameni4();
    }
    function BO12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->BG15_LentaPlusVnechniiBP4Stor()*$this->BD18_FlagZameni4;
    }
    function BO14_LampiDnevnogoSveta()
    {  //вывод
        return $this->BG7_LampiDnevnogoSveta();
    }
    function BP5_LentaPlusVnechniiBP()
    { //умножение
        //вывод
        return $this->BJ5_LentaPlusVnechniiBP()*$this->BO5_LentaPlusVnechniiBP();
    }
    function BP6_LentaPlusVstroeniiBPStor()
    {  //умножение
        //вывод
        return $this->BJ6_LentaPlusVstroeniiBPStor()*$this->BO6_LentaPlusVstroeniiBPStor();
    }
    function BP8_LentaPlusVnechniiBP2Stor()
    { //умножение
        //вывод
        return $this->BJ8_LentaPlusVnechniiBP2Stor()*$this->BO8_LentaPlusVnechniiBP2Stor();
    }
    function BP9_LentaPlusVstroeniiBP2StorObjed()
    { //умножение
        //вывод
        return $this->BJ9_LentaPlusVstroeniiBP2StorObjed()*$this->BO9_LentaPlusVstroeniiBP2StorObjed();
    }
    function BP11_LentaPlusVnechniiBP4Stor()
    { //умножение
        //вывод
        return $this->BJ11_LentaPlusVnechniiBP4Stor()*$this->BO11_LentaPlusVnechniiBP4Stor();
    }
    function BP12_LentaPlusVstroeniiBP4StorObjed()
    {  //умножение
        //вывод
        return $this->BJ12_LentaPlusVstroeniiBP4StorObjed()*$this->BO12_LentaPlusVstroeniiBP4StorObjed();
    }
    function BP14_LampiDnevnogoSveta()
    { //умножение
        //вывод
        return $this->BJ14_LampiDnevnogoSveta()*$this->BO14_LampiDnevnogoSveta();
    }
    function BP15_Itogo()
    {  //сложение
        //вывод
        return $this->BP5_LentaPlusVnechniiBP()+$this->BP6_LentaPlusVstroeniiBPStor()+$this->BP8_LentaPlusVnechniiBP2Stor()+$this->BP9_LentaPlusVstroeniiBP2StorObjed()+$this->BP11_LentaPlusVnechniiBP4Stor()+$this->BP12_LentaPlusVstroeniiBP4StorObjed()+$this->BP14_LampiDnevnogoSveta();
    }
    function BQ5_LentaPlusVnechniiBP()
    { //умножение
        //вывод
        return $this->BK5_LentaPlusVnechniiBP()*$this->BO5_LentaPlusVnechniiBP();
    }
    function BQ6_LentaPlusVstroeniiBPStor()
    {  //умножение
        //вывод
        return $this->BK6_LentaPlusVstroeniiBPStor()*$this->BO6_LentaPlusVstroeniiBPStor();
    }
    function BQ8_LentaPlusVnechniiBP2Stor()
    { //умножение
        //вывод
        return $this->BK8_LentaPlusVnechniiBP2Stor()*$this->BO8_LentaPlusVnechniiBP2Stor();
    }
    function BQ9_LentaPlusVstroeniiBP2StorObjed()
    { //умножение
        //вывод
        return $this->BK9_LentaPlusVstroeniiBP2StorObjed()*$this->BO9_LentaPlusVstroeniiBP2StorObjed();
    }
    function BQ11_LentaPlusVnechniiBP4Stor()
    { //умножение
        //вывод
        return $this->BK11_LentaPlusVnechniiBP4Stor()*$this->BO11_LentaPlusVnechniiBP4Stor();
    }
    function BQ12_LentaPlusVstroeniiBP4StorObjed()
    {  //умножение
        //вывод
        return $this->BK12_LentaPlusVstroeniiBP4StorObjed()*$this->BO12_LentaPlusVstroeniiBP4StorObjed();
    }
    function BQ14_LampiDnevnogoSveta()
    { //умножение
        //вывод
        return $this->BK14_LampiDnevnogoSveta()*$this->BO14_LampiDnevnogoSveta();
    }
    function BQ15_Itogo()
    {  //сложение
        //вывод
        return $this->BQ5_LentaPlusVnechniiBP()+$this->BQ6_LentaPlusVstroeniiBPStor()+$this->BQ8_LentaPlusVnechniiBP2Stor()+$this->BQ9_LentaPlusVstroeniiBP2StorObjed()+$this->BQ11_LentaPlusVnechniiBP4Stor()+$this->BQ12_LentaPlusVstroeniiBP4StorObjed()+$this->BQ14_LampiDnevnogoSveta();
    }
    function BR5_LentaPlusVnechniiBP()
    { //умножение
        //вывод
        return $this->BL5_LentaPlusVnechniiBP()*$this->BO5_LentaPlusVnechniiBP();
    }
    function BR6_LentaPlusVstroeniiBPStor()
    {  //умножение
        //вывод
        return $this->BL6_LentaPlusVstroeniiBPStor()*$this->BO6_LentaPlusVstroeniiBPStor();
    }
    function BR8_LentaPlusVnechniiBP2Stor()
    { //умножение
        //вывод
        return $this->BL8_LentaPlusVnechniiBP2Stor()*$this->BO8_LentaPlusVnechniiBP2Stor();
    }
    function BR9_LentaPlusVstroeniiBP2StorObjed()
    { //умножение
        //вывод
        return $this->BL9_LentaPlusVstroeniiBP2StorObjed()*$this->BO9_LentaPlusVstroeniiBP2StorObjed();
    }
    function BR11_LentaPlusVnechniiBP4Stor()
    { //умножение
        //вывод
        return $this->BL11_LentaPlusVnechniiBP4Stor()*$this->BO11_LentaPlusVnechniiBP4Stor();
    }
    function BR12_LentaPlusVstroeniiBP4StorObjed()
    {  //умножение
        //вывод
        return $this->BL12_LentaPlusVstroeniiBP4StorObjed()*$this->BO12_LentaPlusVstroeniiBP4StorObjed();
    }
    function BR14_LampiDnevnogoSveta()
    { //умножение
        //вывод
        return $this->BL14_LampiDnevnogoSveta()*$this->BO14_LampiDnevnogoSveta();
    }
    function BR15_Itogo()
    {  //сложение
        //вывод
        return $this->BR5_LentaPlusVnechniiBP()+$this->BR6_LentaPlusVstroeniiBPStor()+$this->BR8_LentaPlusVnechniiBP2Stor()+$this->BR9_LentaPlusVstroeniiBP2StorObjed()+$this->BR11_LentaPlusVnechniiBP4Stor()+$this->BR12_LentaPlusVstroeniiBP4StorObjed()+$this->BR14_LampiDnevnogoSveta();
    }
    function BS5_LentaPlusVnechniiBP()
    { //умножение
        //вывод
        return $this->BM5_LentaPlusVnechniiBP()*$this->BO5_LentaPlusVnechniiBP();
    }
    function BS6_LentaPlusVstroeniiBPStor()
    {  //умножение
        //вывод
        return $this->BM6_LentaPlusVstroeniiBPStor()*$this->BO6_LentaPlusVstroeniiBPStor();
    }
    function BS8_LentaPlusVnechniiBP2Stor()
    { //умножение
        //вывод
        return $this->BM8_LentaPlusVnechniiBP2Stor()*$this->BO8_LentaPlusVnechniiBP2Stor();
    }
    function BS9_LentaPlusVstroeniiBP2StorObjed()
    { //умножение
        //вывод
        return $this->BM9_LentaPlusVstroeniiBP2StorObjed()*$this->BO9_LentaPlusVstroeniiBP2StorObjed();
    }
    function BS11_LentaPlusVnechniiBP4Stor()
    { //умножение
        //вывод
        return $this->BM11_LentaPlusVnechniiBP4Stor()*$this->BO11_LentaPlusVnechniiBP4Stor();
    }
    function BS12_LentaPlusVstroeniiBP4StorObjed()
    {  //умножение
        //вывод
        return $this->BM12_LentaPlusVstroeniiBP4StorObjed()*$this->BO12_LentaPlusVstroeniiBP4StorObjed();
    }
    function BS14_LampiDnevnogoSveta()
    { //умножение
        //вывод
        return $this->BM14_LampiDnevnogoSveta()*$this->BO14_LampiDnevnogoSveta();
    }
    function BS15_Itogo()
    {  //сложение
        //вывод
        return $this->BS5_LentaPlusVnechniiBP()+$this->BS6_LentaPlusVstroeniiBPStor()+$this->BS8_LentaPlusVnechniiBP2Stor()+
               $this->BS9_LentaPlusVstroeniiBP2StorObjed()+$this->BS11_LentaPlusVnechniiBP4Stor()+$this->BS12_LentaPlusVstroeniiBP4StorObjed()+$this->BS14_LampiDnevnogoSveta();
    }
    function BV6_StoimostMaterialov_grn()
    {        //вывод
        return $this->BP15_Itogo();
    }
    function BV10_TrydElektrika_min()
    {        //вывод
        return $this->BS15_Itogo();
    }
    function BV11_StoimostRaboty_grn()
    {        //умножение и округление
        //вывод
        return round($this->BV10_TrydElektrika_min()*L10_C67_K1,0);
    }
    function BV20_IstochnikSSveta()
    {       //вывод
        return $this->BF27_DiodiPlusVnechInver();
    }
    function BV21_Energopotreblenie_Vt()
    {
        //вывод
        return $this->BR15_Itogo();
    }
    function BV22_Ves_kg()
    {       //вывод
        return $this->BQ15_Itogo();
    }
    function BV24_Itogo_grn()
    {
        //сложение
        //вывод
        return $this->BV6_StoimostMaterialov_grn()+$this->BV11_StoimostRaboty_grn();
    }
}
