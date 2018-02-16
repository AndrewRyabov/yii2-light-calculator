<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 22.07.2017
 * Time: 16:34
 */
class L17
{
 // Входные параметры:
	public $B5_RoofVisorOut; // крыша/козырек улица
	public $B6_WallOut; // стена улица
	public $B7_WallIn; // стена помещение
	public $B8_2SideIn; // 2 стороны помещение
	public $B9_4SideIn; // 4 стороны помещение

	public $B11_BigStor; // Большая сторона
	public $B12_SmallStor; // Маленькая сторона

	public $B14_PlastikLicevoy;//Пластик лицевой

public function __construct($RoofVisorOut, $WallOut, $WallIn,
 $SideIn2, $SideIn4, $BigStor, $SmallStor, $PlastikLicevoy)

  {
        // Заполнение входных данных.
	$this->B5_RoofVisorOut = $RoofVisorOut;
        $this->B6_WallOut = $WallOut;
        $this->B7_WallIn = $WallIn;
        $this->B8_2SideIn = $SideIn2;
        $this->B9_4SideIn = $SideIn4;

	$this->B11_BigStor = $BigStor;
	$this->B12_SmallStor = $SmallStor;
	$this->B14_PlastikLicevoy = $PlastikLicevoy;
  }


function H6_SmallSize_m() 
    {   
 //деление и округление
 //вывод
        
       return round($this->B12_SmallStor/100, 2);
}

function E5_Ulica() 
    {   
 //если B7+B8+B9 =0, то присвоить 1, иначе вернуть 0 
 //вывод
        
      if (($this->B7_WallIn+$this->B8_2SideIn+$this->B9_4SideIn)== 0)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}

function E6_Pomechenie() 
    {   
 //если E5_MaxSize =0, то присвоить 1, иначе вернуть 0 
 //вывод
        
       if ($this->E5_Ulica() == 0) 
	{
	return 1;
	}
	else 
	{
	return 0;

	}

}


function E8_NalichieOporUlica() 
    {   
 //если H6 >V19'10',то присвоить 1, иначе вернуть 0 
 //вывод
        
       if ($this->H6_SmallSize_m()>L10_BB34_K_GranicaPOLicUlica_m) 
	{
	return 1;
	}
	else 
	{
	return 0;

	}

}

function E9_NalichieOporPomech() 
    {   
 //если E8_MaxSize =0, то присвоить 1, иначе вернуть 0  
 //вывод
        
       if ($this->H6_SmallSize_m()>L10_BB35_K_GranicaPOLicPomesh_m) 
	{
	return 1;
	}
	else 
	{
	return 0;

	}

}

function H5_LargeSize_m() 
    {   
 //деление и округление
 //вывод
        
       return round($this->B11_BigStor/100, 2);
}

function H7_PlochadFasada_m2() 
    {   
 //умножение
 //вывод
        
       return ($this->H5_LargeSize_m()*$this->H6_SmallSize_m());
}

function H9_Acril3mm_1m2() 
    {   

 //вывод
        
       return L10_J15_AkrilM3S;
}

function H10_PererashodAcrila() 
    {   
 
 //вывод
        
       return L10_BB7_K_PererashodAkryl;
}

function H11_StoimostRezaAkril1mp_grn() 
   {   
 
 //вывод
        
       return L10_J40_RaskrAkrlLazS;
}


function H12_UDProfil1mp_grn() 
    {   
 
 //вывод
        
    return  L10_AR24_ProfileUD_05mm;

}


function H13_PererashodUDProfil() 
    {   
 
 //вывод
        
    return  L10_BB58_K_PererashCDUD;

}

function H14_Samorez_1shtuk() 
    {   
 
 //вывод
        
    return  L10_AR42_Samorez19ZnBur;

}
function H15_RashodSamorezna1mp_shtuk() 
    {   
 
 //вывод
        
    return  L10_BB61_K_KolSamorezVRamaPVHKorobShtMp;

}

function H18_PAcrilOpora1storona_grn() 
    {   
 //умножение
 //вывод
        
       return (0.12*0.1*$this->H9_Acril3mm_1m2()*$this->H10_PererashodAcrila());
}

function H19_Vurezanie1Opori_grn() 
    {   
 //умножение и сложение
 //вывод
        
       return (0.12+0.12+0.1+0.1)*$this->H11_StoimostRezaAkril1mp_grn();
}

function H20_UDOpora1Storona_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H6_SmallSize_m()*$this->H12_UDProfil1mp_grn()*$this->H13_PererashodUDProfil());
}


function H21_SamorezOpora1Storona_shtuk() 
    {   
 //умножение и округление
 //вывод
        
       return round($this->H6_SmallSize_m()*$this->H15_RashodSamorezna1mp_shtuk(), 0);
}

function H22_SamorezOpora1Storona_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H21_SamorezOpora1Storona_shtuk()*$this->H14_Samorez_1shtuk());
}

function H23_Opora1storona_grn()

{
//сложение
//вывод
	return ($this->H18_PAcrilOpora1storona_grn()+$this->H19_Vurezanie1Opori_grn() +$this->H20_UDOpora1Storona_grn()+$this->H22_SamorezOpora1Storona_grn());
}


function H24_opora2Storoni_grn() 
    {   
 //умножение и сложение
 //вывод
        
       return ($this->H18_PAcrilOpora1storona_grn()+$this->H19_Vurezanie1Opori_grn()+$this->H14_Samorez_1shtuk())*2;
}

function H26_KolichestvoOporKrusha_shtuk() 
    {   
 //умножение, деление и округление
 //вывод
        
       return round($this->H7_PlochadFasada_m2()/L10_BB38_K_OpirPloshK_m2, 0)*$this->E8_NalichieOporUlica()*$this->B5_RoofVisorOut;
}


function H27_KolichestvoOporStenaUlica_shtuk() 
    {   
 //умножение, деление и округление
 //вывод
        
       return round($this->H7_PlochadFasada_m2()/L10_BB39_K_OpirPloshS_m2, 0)*$this->E8_NalichieOporUlica()*$this->B6_WallOut;
}

function H28_KolichestvoOporPomechenie1_shtuk() 
    {   
 //умножение, деление и округление
 //вывод
        
       return round($this->H7_PlochadFasada_m2()/L10_BB40_K_OpirPloshP_m2, 0)*$this->E9_NalichieOporPomech()*$this->B7_WallIn;
}

function H29_KolichestvoOporPomechenie2_shtuk() 
    {   
 //умножение, деление и округление
 //вывод
        
       return round($this->H7_PlochadFasada_m2()/L10_BB40_K_OpirPloshP_m2, 0)*$this->E9_NalichieOporPomech()*$this->B8_2SideIn;
}
function H30_KolichestvoOporPomechenie4_shtuk() 
    {   
 //умножение
 //вывод
        
       return $this->H29_KolichestvoOporPomechenie2_shtuk()*4*$this->E9_NalichieOporPomech()*$this->B9_4SideIn;
}
function H32_OporuKrushaItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->H23_Opora1storona_grn()*$this->H26_KolichestvoOporKrusha_shtuk();
}
function H33_OporuKrushaItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->H23_Opora1storona_grn()*$this->H27_KolichestvoOporStenaUlica_shtuk();
}

function H34_OporuStenaPomecheniaItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->H23_Opora1storona_grn()*$this->H28_KolichestvoOporPomechenie1_shtuk();
}
function H35_Oporu2StoroniItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->H24_opora2Storoni_grn()*$this->H29_KolichestvoOporPomechenie2_shtuk();
}
function H36_Oporu4StoroniItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->H23_Opora1storona_grn()*$this->H30_KolichestvoOporPomechenie4_shtuk()*$this->E9_NalichieOporPomech();
}
function H37_MaterialOporItogo_grn()

{
//сложение
//вывод
	return ($this->H32_OporuKrushaItogo_grn()+$this->H33_OporuKrushaItogo_grn() +$this->H34_OporuStenaPomecheniaItogo_grn()+$this->H35_Oporu2StoroniItogo_grn()+$this->H36_Oporu4StoroniItogo_grn());
}

function I9_Akril3mm1m2_kg() 
    {   

 //вывод
        
       return L10_L15_AkrilM3P;
}
function I12_UDprofil1mp_grn_kg() 
    {   

 //вывод
        
       return L10_AS24_ProfileUD_05mmV;
}
function I18_AkrilOpora1Storona_grn_kg() 
    {   
 //умножение
 //вывод
        
       return 0.12*0.1*$this->I9_Akril3mm1m2_kg();
}
function I20_UDOpora1Storona_grn_kg() 
    {   
 //умножение
 //вывод
        
       return $this->H6_SmallSize_m()*$this->I12_UDprofil1mp_grn_kg();
}

function I23_Opora1storona_grn()

{
//сложение
//вывод
	return ($this->I18_AkrilOpora1Storona_grn_kg()+$this->I20_UDOpora1Storona_grn_kg());
}
function I24_opora2Storoni_grn() 
    {   
 //умножение
 //вывод
        
       return $this->I18_AkrilOpora1Storona_grn_kg()*2;
}
function I32_OporiKrushaItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->I23_Opora1storona_grn()*$this->H26_KolichestvoOporKrusha_shtuk();
}
function I33_OporiUlicaItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->I23_Opora1storona_grn()*$this->H27_KolichestvoOporStenaUlica_shtuk();
}
function I34_OporiStenaPomechenieItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->I23_Opora1storona_grn()*$this->H28_KolichestvoOporPomechenie1_shtuk();
}
function I35_Opori2StoroniItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->I24_opora2Storoni_grn()*$this->H29_KolichestvoOporPomechenie2_shtuk();
}
function I36_Opori4StoroniItogo_grn() 
    {   
 //умножение
 //вывод
        
       return $this->I23_Opora1storona_grn()*$this->H30_KolichestvoOporPomechenie4_shtuk()*$this->E9_NalichieOporPomech();
}
function I37_MaterialOporItogo_grn()

{
//сложение
//вывод
	return ($this->I32_OporiKrushaItogo_grn()+$this->I33_OporiUlicaItogo_grn()+$this->I34_OporiStenaPomechenieItogo_grn()+$this->I35_Opori2StoroniItogo_grn()+$this->I36_Opori4StoroniItogo_grn());
}

function L5_Virezat1ProfilUD_min() 
    {   

 //вывод
        
       return L10_BT21_PriresStalProfCDUDStilk_1sht;
}
function L6_Virezat1Samorez_min() 
    {   

 //вывод
        
       return L10_BT25_VkruchSamorez_1sht;
}
function L8_SobratOpory1Storona_min() 
    {   
 //умножение и сложение
 //вывод
        
       return ($this->L5_Virezat1ProfilUD_min()+$this->L6_Virezat1Samorez_min()*$this->H21_SamorezOpora1Storona_shtuk());
}
function L10_OporaIzgotovit1Storona_min() 
    {   
 //умножение и сложение
 //вывод
        
       return $this->L5_Virezat1ProfilUD_min()+($this->H21_SamorezOpora1Storona_shtuk()+2)*$this->L6_Virezat1Samorez_min();
}
function L11_OporaIzgotovit2Storona_min() 
    {   
 //умножение
 //вывод
        
       return 2*$this->L6_Virezat1Samorez_min();
}
function L13_OporaKrushaItogo_min() 
    {   
 //умножение
 //вывод
        
       return $this->H26_KolichestvoOporKrusha_shtuk()*$this->L10_OporaIzgotovit1Storona_min();
}
function L14_OporaulicaItogo_min() 
    {   
 //умножение
 //вывод
        
       return $this->H27_KolichestvoOporStenaUlica_shtuk()*$this->L10_OporaIzgotovit1Storona_min();
}
function L15_OporaStenaPomech1Itogo_min() 
    {   
 //умножение
 //вывод
        
       return $this->H28_KolichestvoOporPomechenie1_shtuk()*$this->L10_OporaIzgotovit1Storona_min();
}

function L16_OporaStenaPomech2Itogo_min() 
    {   
 //умножение
 //вывод
        
       return $this->H29_KolichestvoOporPomechenie2_shtuk()*$this->L11_OporaIzgotovit2Storona_min();
}
function L17_OporaStenaPomech4Itogo_min() 
    {   
 //умножение
 //вывод
        
       return $this->H30_KolichestvoOporPomechenie4_shtuk()*$this->L10_OporaIzgotovit1Storona_min();
}
function L18_OporiItogo_min() 
    {   
 //умножение, деление и округление
 //вывод
        
       return round($this->L13_OporaKrushaItogo_min()+$this->L14_OporaulicaItogo_min()+$this->L15_OporaStenaPomech1Itogo_min()+$this->L16_OporaStenaPomech2Itogo_min()+$this->L17_OporaStenaPomech4Itogo_min(), 0);
}
function O6_StoimostMaterialov_grn() 
    {   
 //умножение
 //вывод
        
       return round($this->H37_MaterialOporItogo_grn(), 0);
}

function O10_TrydoemkostRobotu_min() 
    {   
 
 //вывод
        
       return $this->L18_OporiItogo_min();
}
function O11_StoimostRabotu_grn() 
    {   
 //умножение и округление
 //вывод
        
       return round($this->O10_TrydoemkostRobotu_min()*L10_C67_K1, 0);
}
function O22_Ves_kg() 
    {   
 //умножение и округление
 //вывод
        
       return round($this->I37_MaterialOporItogo_grn(), 1);
}



function O24_Itogo_grn() 
    {   
 //сложение
 //вывод
        
       return $this->O6_StoimostMaterialov_grn()+$this->O11_StoimostRabotu_grn();
}





}