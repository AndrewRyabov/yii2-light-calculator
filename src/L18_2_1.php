<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 09.03.2018
 * Time: 10:08
 */
class L18
{
 // Входные параметры:
	public $T11_BigStor; // Большая сторона
	public $T12_SmallStor; // Маленькая сторона

public function __construct($BigStor, $SmallStor)
  {        // Заполнение входных данных.
		$this->T11_BigStor = $BigStor;
	$this->T12_SmallStor = $SmallStor;
	  }

function W5_BigStor()
    {   
 //t11/100, округлить
 //вывод
      return round($this->T11_BigStor/100,2);
 }
function W6_SmallStor()
    {        //t12/100, округлить
        //вывод
        return round($this->T12_SmallStor/100,2);
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
        //умножение
        //вывод
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