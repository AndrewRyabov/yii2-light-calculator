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
		public $AL42_MochLenti_VT; // мощность ленты, Вт
	public $AL43_StorTrudLenta_min; // 1 стор труд лента, мин
public $AL45_Storoni2Pomechenia;//2 стороны помещение
    public $AL46_Storoni4Pomechenia;//4 стороны помещение
    public $AL49_Storoni2MaterBezBP;//2 стор вес без БП, кг
    public $AL50_Storoni4MaterBezBP;//4 стор вес без БП, кг
public $AL53_Stor2VesBezBP_kg;//2 стор вес без БП, кг
    public $AL54_Stor4VesBezBP_kg;//4 стор вес без БП, кг
public function __construct($MochLenti_VT, $StorTrudLenta_min,
                            $Storoni2Pomechenia,$Storoni4Pomechenia,
                            $Storoni2MaterBezBP,$Storoni4MaterBezBP,
                            $Stor2VesBezBP_kg,$Stor4VesBezBP_kg)

  {
        // Заполнение входных данных.
	$this->AL42_MochLenti_VT=$MochLenti_VT;
$this->AL43_StorTrudLenta_min=$StorTrudLenta_min;
$this->AL45_Storoni2Pomechenia=$Storoni2Pomechenia;
$this->AL46_Storoni4Pomechenia=$Storoni4Pomechenia;
$this->AL49_Storoni2MaterBezBP=$Storoni2MaterBezBP;
$this->AL50_Storoni4MaterBezBP=$Storoni4MaterBezBP;
$this->AL53_Stor2VesBezBP_kg=$Stor2VesBezBP_kg;
$this->AL54_Stor4VesBezBP_kg=$Stor4VesBezBP_kg;
  }

      function AO42_MochLenti2Stor_Vt()
    { //умножение
        //вывод
        return $this->AL42_MochLenti_VT*2;
    }
    function AO43_MinMochLentiBP2Stor_Vt()
    { //умножение
        //вывод
        return $this->AO42_MochLenti2Stor_Vt()*L10_BB78_K_ZapasPoTokuDlBP;
    }
    function AO45_MochLenti4Stor_Vt()
    { //умножение
        //вывод
        return $this->AL42_MochLenti_VT*4;
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