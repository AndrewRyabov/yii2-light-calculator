<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 10.03.2018
 * Time: 11:30
 */
class L18
{
 // Входные параметры:
// Входные параметры:
		public $AL11_BigStor; // Большая сторона
	public $AL12_SmallStor; // Маленькая сторона


public function __construct($BigStor, $SmallStor)

  {
        // Заполнение входных данных.
	$this->AL11_BigStor = $BigStor;
	$this->AL12_SmallStor = $SmallStor;
	
  }

    function AO5_BigStor()
{
    //t11/100, округлить
    //вывод
    return round($this->AL11_BigStor/100,2);
}
    function AO6_SmallStor()
    {        //t12/100, округлить
        //вывод
        return round($this->AL12_SmallStor/100,2);
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
           return $this->AO9_DlinaLenti_m()*L10_AJ60_LentaDeod4Tochka6Aleks_IP20Vt;
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