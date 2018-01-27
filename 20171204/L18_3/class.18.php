<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 03.08.2017
 * Time: 10:08
 */
class L18
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

	

public function __construct($RoofVisorOut, $AOallOut, $AOallIn,
 $SideIn2, $SideIn4, $BigStor, $SmallStor)

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