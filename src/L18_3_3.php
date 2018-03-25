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
		public $AL89_BigStor; // Большая сторона
	public $AL90_SmallStor; // Маленькая сторона


public function __construct($BigStor, $SmallStor)

  {
        // Заполнение входных данных.
	$this->AL89_BigStor = $BigStor;
	$this->AL90_SmallStor = $SmallStor;
	
  }

    function AO83_BigStor()
{
    //t11/100, округлить
    //вывод
    return round($this->AL89_BigStor/100,2);
}
    function AO84_SmallStor()
    {        //t12/100, округлить
        //вывод
        return round($this->AL90_SmallStor/100,2);
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
    {  //умножение
 //вывод
           return $this->AO87_DlinaLenti_m()*L10_AJ60_LentaDeod4Tochka6Aleks_IP20Vt;
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