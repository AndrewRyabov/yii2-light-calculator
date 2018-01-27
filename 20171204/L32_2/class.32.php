<?php

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 26.11.2017
 * Time: 17:03
 */
class L32
{
 // Входные параметры:
// Входные параметры:
	public $W5_KolVivessht1pos; //кол вывесок, шт
	public $W6_KolVivessht2pos; //кол вывесок, шт
	public $W7_KolVivessht3pos; //кол вывесок, шт

	public $W9_ObyemZakaza; //объем заказа, м3
    public $W10_FlagDoblo; //флаг "Doblo"
    public $W11_RasstDostKorzkm; //расст доставки ("Корзина"), км

public function __construct($KolVivessht1pos, $KolVivessht2pos, $KolVivessht3pos, $ObyemZakaza, $FlagDoblo,
                $RasstDostKorzkm)

  {      // Заполнение входных данных.
	    $this->W5_KolVivessht1pos = $KolVivessht1pos;
        $this->W6_KolVivessht2pos = $KolVivessht2pos;
        $this->W7_KolVivessht3pos= $KolVivessht3pos;

        $this->W9_ObyemZakaza = $ObyemZakaza;
	    $this->W10_FlagDoblo = $FlagDoblo;
	    $this->W11_RasstDostKorzkm = $RasstDostKorzkm;

}
    // C light - пленка борт/тыл

    function Z5_ObsheeKolvoVivsht()
    {
        //общее количество вывесок, шт
        //прибавление
        //вывод

        return $this->W5_KolVivessht1pos+$this->W6_KolVivessht2pos+$this->W7_KolVivessht3pos;

    }
    function Z7_ObshiyProbegkm100()
    {
        //общий пробег км/100
        //округление и деление
        //вывод

        return round($this->W11_RasstDostKorzkm/100,1)*2;

    }
    function Z8_ProbegZagorodkm100()
    {
        //пробег загород км/100
        //отнимание
        //вывод

        return $this->Z7_ObshiyProbegkm100()-0.4;

    }
    function Z10_StoimMat1ReysDoblogrn()
    {
        //стоим матер 1 рейс "Doblo", грн
        //умножение
        //вывод

        return $this->Z7_ObshiyProbegkm100()*L10_U123_DobloProbeg_grn100km;

    }
    function Z11_Stoim1ReysGazegrn()
    {
        //стоимость 1 рейс "Газель", грн
        //умножение
        //вывод

        return $this->Z7_ObshiyProbegkm100()*L10_U122_GazeProbeg_grn100km;

    }
    function Z13_KolReysGazesht()
    {
        //кол рейсов "Газель", шт
        //округление и умножение
        //вывод

        return ceil($this->W9_ObyemZakaza/L10_U126_EmkostGazel_m3_grn100km);

    }
    function Z14_StoimVseReysiGazegrn()
    {
        //стоимость все рейсы "Газель", грн
        //умножение
        //вывод

        return $this->Z11_Stoim1ReysGazegrn()*$this->Z13_KolReysGazesht();

    }
    function Z15_FlagGaze()
    {
        //флаг "Газель"
        //если условие = true, то выводит 0
        //иначе - 1
        //вывод

        if($this->W10_FlagDoblo==1)
        {
            return 0;
        }
        else{
            return 1;
        }

    }
    function AC5_1ReysDobloGorodmin()
    {
        //1 рейс "Doblo" город, мин
        //умножение
        //вывод

        return 40*L10_BT76_EzdPoGorodu_minNAkm;

    }
    function AC6_1ReysDobloZagorodmin()
    {
        //1 рейс "Doblo" загород, мин
        //умножение
        //вывод

        return $this->Z8_ProbegZagorodkm100()*100*L10_BT77_EzdZaGorodom_minNAkm;

    }
    function AC7_1ReysDoblomin()
    {
        //1 рейс "Doblo", мин
        //прибавление
        //вывод

        return $this->AC5_1ReysDobloGorodmin()+$this->AC6_1ReysDobloZagorodmin();

    }
    function AC10_ZagroformVigDoblomin()
    {
        //загр/оформ/выг "Doblo", мин
        //арифметические вычисления
        //вывод

        return L10_BT80_ZagrOformVigruzkaPosAvtodostmin+($this->Z5_ObsheeKolvoVivsht()-1)*L10_BT82_ZagrOformVigPosilokNachinaaSo2_min;

    }
    function AC11_TrudDobloItogomin()
    {
        //труд "Doblo" итого, мин
        //прибавление
        //вывод

        return $this->AC7_1ReysDoblomin()+$this->AC10_ZagroformVigDoblomin();

    }
    function AC12_TrudDobloItogogrn()
    {
        //труд "Doblo" итого, грн
        //умножение
        //вывод

        return $this->AC11_TrudDobloItogomin()*L10_C67_K1;

    }
    function AF5_ZatratDobloItogogrn()
    {
        //затраты "Doblo" итого, грн
        //прибавление
        //вывод

        return $this->Z10_StoimMat1ReysDoblogrn()+$this->AC12_TrudDobloItogogrn();

    }
    function AF6_ZatratGazeItogogrn()
    {
        //затраты "Газель" итого, грн
        //значение
        //вывод

        return $this->Z14_StoimVseReysiGazegrn();

    }
    function AF8_ZatratDobloItogogrn()
    {
        //затраты "Doblo" итого, грн
        //умножение
        //вывод

        return $this->AF5_ZatratDobloItogogrn()*$this->W10_FlagDoblo;

    }
    function AF9_ZatratGazeItogogrn()
    {
        //затраты "Газель" итого, грн
        //умножение
        //вывод

        return $this->AF6_ZatratGazeItogogrn()*$this->Z15_FlagGaze();

    }
    function AF10_AvtodostItogogrn()
    {
        //автодоставка итого, грн
        //прибавление
        //вывод

        return $this->AF8_ZatratDobloItogogrn()+$this->AF9_ZatratGazeItogogrn();

    }
    function AH30_AvtodostZakazaNalgrn()
    {
        //авто доставка заказа нал, грн
        //Округление
        //вывод

        return round($this->AF10_AvtodostItogogrn(),0);

    }







}