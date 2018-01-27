<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 05.11.2017
 * Time: 17:03
 */
class L32
{
 // Входные параметры:
// Входные параметры:
	public $C5_BolhiiRazm1; // больший размер, м
	public $C6_MenchiiRazm1; //меньший размер, м
	public $C7_Visota1; // высота, м
	public $C8_KolPosilok1; //2 стороны помещение

    public $C10_BolhiiRazm2; // больший размер, м
    public $C11_MenchiiRazm2; //меньший размер, м
    public $C12_Visota2; // высота, м
    public $C13_KolPosilok2; //кол посылок, шт

    public $C15_BolhiiRazm3; // больший размер, м
    public $C16_MenchiiRazm3; //меньший размер, м
    public $C17_Visota3; // высота, м
    public $C18_KolPosilok3; //кол посылок, шт


public function __construct($BolhiiRazm1, $MenchiiRazm1, $Visota1, $KolPosilok1, $BolhiiRazm2,
$MenchiiRazm2, $Visota2, $KolPosilok2, $BolhiiRazm3, $MenchiiRazm3, $Visota3, $KolPosilok3)

  {      // Заполнение входных данных.
	    $this->C5_BolhiiRazm1 = $BolhiiRazm1;
        $this->C6_MenchiiRazm1 = $MenchiiRazm1;
        $this->C7_Visota1= $Visota1;
        $this->C8_KolPosilok1 = $KolPosilok1;

	    $this->C10_BolhiiRazm2 = $BolhiiRazm2;
	    $this->C11_MenchiiRazm2 = $MenchiiRazm2;
        $this->C12_Visota2 = $Visota2;
        $this->C13_KolPosilok2 = $KolPosilok2;

        $this->C15_BolhiiRazm3 = $BolhiiRazm3;
        $this->C16_MenchiiRazm3 = $MenchiiRazm3;
        $this->C17_Visota3= $Visota3;
        $this->C18_KolPosilok3 = $KolPosilok3;
}
    function F5_Poz1Obem_m3()
    {
        //умножение
        //вывод
        return $this->C5_BolhiiRazm1*$this->C6_MenchiiRazm1*$this->C7_Visota1*$this->C8_KolPosilok1;
    }
    function F6_FlagDoblo120sm_poz1()
    {
        //если c6<1.2, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->C6_MenchiiRazm1<1.2)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function F10_Poz2Obem_m3()
    {
        //умножение
        //вывод
        return $this->C10_BolhiiRazm2*$this->C11_MenchiiRazm2*$this->C12_Visota2*$this->C13_KolPosilok2;
    }
    function F11_FlagDoblo120sm_poz2()
{
    //если c6<1.2, то присвоить 1, иначе вернуть 0
    //вывод
    if ($this->C11_MenchiiRazm2<1.2)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
    function F15_Poz3Obem_m3()
    {
        //умножение
        //вывод
        return $this->C15_BolhiiRazm3*$this->C16_MenchiiRazm3*$this->C17_Visota3*$this->C18_KolPosilok3;
    }
    function F16_FlagDoblo120sm_poz3()
    {
        //если c16<1.2, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->C16_MenchiiRazm3<1.2)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function I5_KolichectvoPosilok_sht()
    {
        //сложение
        //вывод
        return $this->C8_KolPosilok1+$this->C13_KolPosilok2+$this->C18_KolPosilok3;
    }
    function I6_ObchiiObemposilok_m3()
    {
        //сложение и округление
        //вывод
        return round($this->F5_Poz1Obem_m3()+$this->F10_Poz2Obem_m3()+$this->F15_Poz3Obem_m3(), 1);
    }

    function I7_Stoim1ReisaDoblo_grn()
    {
        //умножение
        //вывод

        return 0.15*L10_U123_DobloProbeg_grn100km;
    }
    function I8_Stoim1ReisaGazel_grn()
    {

        //вывод
        return L10_U120_GazelDostavkaKNP_grn;
    }
    function I9_PremiaGazel_grn()
    {
        //умножение и отнимание
        //вывод
        return ($this->I5_KolichectvoPosilok_sht() - 1) * L10_C10_Dizel;
    }
    function I11_PremiaGazel_grn()
    {

        //вывод
        return ceil($this->I6_ObchiiObemposilok_m3()/L10_U126_EmkostGazel_m3_grn100km);
    }
    function I12_Stoim1ProbegaDoblo_grn()
    {

        //вывод
        return $this->I7_Stoim1ReisaDoblo_grn();
    }
    function I13_Stoim1ProbegaGazel_grn()
    {
        //умножение
        //вывод
        return $this->I8_Stoim1ReisaGazel_grn()*$this->I11_PremiaGazel_grn();
    }
    function I15_MaterialiDobloItogo_grn()
    {

        //вывод
        return $this->I12_Stoim1ProbegaDoblo_grn();
    }
    function I16_MaterialiGazelItogo_grn()
    {
        //сложение
        //вывод
        return ($this->I13_Stoim1ProbegaGazel_grn()+$this->I9_PremiaGazel_grn());
    }
    function L5_ReisDoblo1_min()
    {
        //умножение
        //вывод
        return L10_U121_DobloDostavkaKNP_km*L10_BT76_EzdPoGorodu_minNAkm;
    }
    function L6_ZagrOformVigZa1Reis_min()
    {
        //умножение и сложение и отнимание
        //вывод
        return L10_BT81_ZagryzkaOformlenieVigryzkaPosilkiDlaNP_min+($this->I5_KolichectvoPosilok_sht()-1)*L10_BT82_ZagrOformVigPosilokNachinaaSo2_min;
    }
    function L8_TrydDoblo1Reis_min()
    {
        //сложение
        //вывод
        return $this->L5_ReisDoblo1_min()+$this->L6_ZagrOformVigZa1Reis_min();
    }
    function L9_TrydDoblo1Reis_grn()
    {
        //умножение
        //вывод
        return $this->L8_TrydDoblo1Reis_min()*L10_C67_K1;
    }
    function O5_ZatratiDobloItogo_grn()
    {
        //сложение
        //вывод
        return $this->I15_MaterialiDobloItogo_grn()+$this->L9_TrydDoblo1Reis_grn();
    }
    function O6_ZatrtiGazelItogo_grn()
    {

        //вывод
        return $this->I16_MaterialiGazelItogo_grn();
    }
    function O8_ObjemZakazaItogo_m3()
    {
        //сложить и округлить
        //вывод
        return round($this->F5_Poz1Obem_m3()+$this->F10_Poz2Obem_m3()+$this->F15_Poz3Obem_m3(),1);
    }
    function O9_FlagDoblo120sm()
    {
        //умножение
        //вывод
        return $this->F6_FlagDoblo120sm_poz1()*$this->F11_FlagDoblo120sm_poz2()*$this->F16_FlagDoblo120sm_poz3();
    }
    function O10_FlagDoblo2tochka5m3()
    {
        //если c8<u127, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->O8_ObjemZakazaItogo_m3()<L10_U127_EmkostDoblo_m3_grn100km)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function O11_FlagDobloItogo()
    {
        //умножение
        //вывод
        return $this->O9_FlagDoblo120sm()*$this->O10_FlagDoblo2tochka5m3();
    }
    function O12_FlagGazel()
    {
        //если c11=1, то присвоить 0, иначе вернуть 1
        //вывод
        if ($this->O11_FlagDobloItogo()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    function O19_ZatratiDobloItogo_grn()
    {
        //умножение
        //вывод
        return $this->O5_ZatratiDobloItogo_grn() * $this->O11_FlagDobloItogo();
    }
    function O20_ZatratiGazelItogo_grn()
    {
        //умножение
        //вывод
        return $this->O6_ZatrtiGazelItogo_grn()*$this->O12_FlagGazel();
    }
    function O21_DostavkaKNPItogo_grn()
    {
        //сложение
        //вывод
        return $this->O19_ZatratiDobloItogo_grn()+$this->O20_ZatratiGazelItogo_grn();
    }

    function R20_ObjemZakazaItogo_m3()
    {

        //вывод
        return $this->O8_ObjemZakazaItogo_m3();
    }

    function R21_FlagDoblo()
    {

        //вывод
        return $this->O11_FlagDobloItogo();
    }
    function R31_DostavkaZakazaKNPNal_grn()
    {
        //округлить
        //вывод
        return round($this->O21_DostavkaKNPItogo_grn(),0);
    }


}