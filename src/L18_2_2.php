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
	public $T52_BigStor; // Большая сторона
	public $T53_SmallStor; // Маленькая сторона

public function __construct($BigStor, $SmallStor)
  {        // Заполнение входных данных.
		$this->T52_BigStor = $BigStor;
	$this->T53_SmallStor = $SmallStor;
	  }

function W46_BigStor()
    {   
 //t11/100, округлить
 //вывод
      return round($this->T52_BigStor/100,2);
 }
function W47_SmallStor()
    {        //t12/100, округлить
        //вывод
        return round($this->T53_SmallStor/100,2);
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