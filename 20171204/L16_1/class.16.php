<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 27.06.2017
 * Time: 16:34
 */
class L16
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

	// C-light _ фасад пластик _ 1


function E5_MaxSize() 
    {   
 //если большая сторона >300, то присвоить 1, иначе вернуть 0
 //иначе - вернуть 0
 //вывод
        
        if ($this->B11_BigStor >300)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
 

function E6_MaxSize2() 
    {   
 //если E5_MaxSize =0, то присвоить 1, иначе вернуть 0
 //вывод
        
       if ($this->E5_MaxSize == 0) 
	{
	return 1;
	}
	else 
	{
	return 0;
	}
	
}

function E8_Akril() 
    {   
 //если B14_PlastikLicevoy =2, то присвоить 1, иначе вернуть 0
 //вывод
        
      if ($this->B14_PlastikLicevoy == 2)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}

function E9_Polik() 
    {   
 //если E8_Akril =0, то присвоить 1, иначе вернуть 0
 //вывод
        
       if ($this->E8_Akril() == 0)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}


function E10_AkrilItogo() 
    {   
 //умножение
 //вывод
        
       return ($this->E8_Akril()*$this->E6_MaxSize2());
}

function E11_PolikItogo() 
    {   
 //если E10_AkrilItogo() =0, то присвоить 1, иначе вернуть 0
 //вывод
        
       if ($this->E10_AkrilItogo() == 0)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}

function E13_Ulica() 
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

function E14_Pomechenie() 
    {   
 //если E13_Ulica()=0, то присвоить 1, иначе вернуть 0
 //вывод
        
      if ($this->E13_Ulica() == 0)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}

function E16_PolikUlicaTolst() 
    {   
 //если H6>'10'!B29,то присвоить 1, иначе вернуть 0
 //вывод
        
       if ($this->H6_SmallSize_m()>L10_BB29_K_PolicarbPerehTolsh46Ulica_m)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}

function E17_PolikUlicaTonk() 
    {   
 //если E16=0, то присвоить 1, иначе вернуть 0
 //вывод
        
       if ($this->E16_PolikUlicaTolst()== 0)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}

function E18_PolikPomecheniaTolst() 
    {   
 //если H6>'10'!B30, то присвоить 1, иначе вернуть 0
 //вывод
        
       if ($this->H6_SmallSize_m()>L10_BB30_K_PolicarbPerehTolsh46Pomesh_m)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}

function E19_PolikPomecheniaTonk() 
    {   
 //если E18=0, то присвоить 1, иначе вернуть 0
 //вывод
        
       if ($this->E18_PolikPomecheniaTolst()== 0)
	{
	return 1;
	}
	else 
	{
	return 0;
	}

}

function E20_AkrilUlicaTolst() 
    {   
 //если H6>'10'!B24, то присвоить 1, иначе вернуть 0
 //вывод
        
       if ($this->H6_SmallSize_m()>L10_BB24_K_AkrylPerehodTolsh23Ulica_m)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}
function E21_AkrilUlicaTonk() 
    {   
 //если E20=0, то присвоить 1, иначе вернуть 0
 //вывод
        
      if ($this->E20_AkrilUlicaTolst()== 0)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}

function E22_AkrilPomecheniaTolst() 
    {   
 //если H6>'10'!B25, то присвоить 1, иначе вернуть 0
 //вывод
        
       if ($this->H6_SmallSize_m()>L10_BB25_K_AkrylPerehodTolsh23Pomesh_m)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}
function E23_AkrilPomecheniaTonk() 
    {   
 //если E22=0, то присвоить 1, иначе вернуть 0
 //вывод
        
      if ($this->E22_AkrilPomecheniaTolst() == 0)
	{
	return 1;
	}
	else 
	{
	return 0;
	}
}

function E25_1Storona()
{
//если или B5=1 B6=1 B7=1 то присвоить 1, иначе вернуть 0
//вывод
	if ($this->B5_RoofVisorOut==1 or $this->B6_WallOut==1 or $this->B7_WallIn==1)
	{
	return 1;
	}
	else 
	{
	return 0;
	}


}
function E26_2Storonu()
    {   
 
 //вывод
        

      return ($this->B8_2SideIn);
}
function E27_4Storonu()
    {   
 
 //вывод
        
       return ($this->B9_4SideIn);
}


function H5_LargeSize_m() 
    {   
 //деление и округление
 //вывод
        
       return round($this->B11_BigStor/100, 2);
}


function H6_SmallSize_m() 
    {   
 //деление и округление
 //вывод
        
       return round($this->B12_SmallStor/100, 2);
}


function H7_PrimetrFasada_mp() 
    {   
 //сложение
 //вывод
        
       return ($this->H5_LargeSize_m()+$this->H6_SmallSize_m()+$this->H5_LargeSize_m()+$this->H6_SmallSize_m());
}

function H8_SmallSize_m() 
    {   
 //умножение
 //вывод
        
       return ($this->H5_LargeSize_m()*$this->H6_SmallSize_m());
}

function H9_PlochadMaterialaFasad_m2() 
    {   
 //умножение
 //вывод
        
       return ($this->H8_SmallSize_m()*L10_BB8_K_PererashodPolicarb);
}



function H10_Cena1mpCleia_grn() 
    {   
 
 //вывод
        
       return L10_K117_CosmofenPlusPVH_200mlSmp;
}

function H12_PolicarbonatKrusha6mm_grn() 
    {   
 //умножение
 //вывод
       
       return $this->H9_PlochadMaterialaFasad_m2()*$this->B5_RoofVisorOut*L10_J7_Plikarb6S;
}

function H13_PolicarbonatUlica6mm_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H9_PlochadMaterialaFasad_m2()*$this->E13_Ulica()*$this->E16_PolikUlicaTolst()*L10_J7_Plikarb6S);
}


function H14_PolicarbonatUlica4mm_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H9_PlochadMaterialaFasad_m2()*$this->E13_Ulica()*$this->E17_PolikUlicaTonk()*L10_J6_Plikarb4S);
}

function H15_PolicarbonatPomechenia6mm_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H9_PlochadMaterialaFasad_m2()*$this->E14_Pomechenie()*$this->E18_PolikPomecheniaTolst()*L10_J7_Plikarb6S);
}

function H16_PolicarbonatPomechenia4mm_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H9_PlochadMaterialaFasad_m2()*$this->E14_Pomechenie()*$this->E19_PolikPomecheniaTonk()*L10_J6_Plikarb4S);
}


function H17_PolicarbonatFasad_grn()

{
//сложение
//вывод
	return ($this->H12_PolicarbonatKrusha6mm_grn()+$this->H13_PolicarbonatUlica6mm_grn()+$this->H14_PolicarbonatUlica4mm_grn()+$this->H15_PolicarbonatPomechenia6mm_grn()+$this->H16_PolicarbonatPomechenia4mm_grn());
}


function H19_AkrilUlica3mm_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H9_PlochadMaterialaFasad_m2()*$this->E13_Ulica()*$this->E20_AkrilUlicaTolst()*L10_J15_AkrilM3S);
}

function H20_AkrilUlica2mm_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H9_PlochadMaterialaFasad_m2()*$this->E13_Ulica()*$this->E21_AkrilUlicaTonk()*L10_J14_AkrilM2S);
}


function H21_AkrilPomechenia3mm_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H9_PlochadMaterialaFasad_m2()*$this->E14_Pomechenie()*$this->E22_AkrilPomecheniaTolst()*L10_J15_AkrilM3S);
}


function H22_AkrilPomechenia2mm_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H9_PlochadMaterialaFasad_m2()*$this->E14_Pomechenie()*$this->E23_AkrilPomecheniaTonk()*L10_J14_AkrilM2S);
}


function H23_AkrilFasad_grn()

{
//сложение
//вывод
	return ($this->H19_AkrilUlica3mm_grn()+$this->H20_AkrilUlica2mm_grn()+$this->H21_AkrilPomechenia3mm_grn()+$this->H22_AkrilPomechenia2mm_grn());
}




function H25_FasadPlastik1Side_grn()

{
//сложение и умножение
//вывод
	return round($this->H17_PolicarbonatFasad_grn()*$this->E11_PolikItogo()+$this->H23_AkrilFasad_grn()*$this->E10_AkrilItogo(), 0);
}


function H26_FasadPlastik_grn()

{
//сложение и умножение
//вывод
	return round($this->H25_FasadPlastik1Side_grn()*$this->E25_1Storona()+$this->H25_FasadPlastik1Side_grn()*2*$this->E26_2Storonu()+$this->H25_FasadPlastik1Side_grn()*4*$this->E27_4Storonu(), 0);
}




function H28_Klei1FasadPolik_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H7_PrimetrFasada_mp()*$this->H10_Cena1mpCleia_grn()*2);
}

function H29_Klei1FasadAkril_grn() 
    {   
 //умножение
 //вывод
        
       return ($this->H7_PrimetrFasada_mp()*$this->H10_Cena1mpCleia_grn());
}


function H30_Klei1Fasad_grn() 
    {   
 //умножение и сложение
 //вывод
        
       return $this->H28_Klei1FasadPolik_grn()*$this->E11_PolikItogo()+$this->H29_Klei1FasadAkril_grn()*$this->E10_AkrilItogo();
}



function H31_Klei_grn() 
    {   
 //умножение и сложение
 //вывод
        
       return ($this->H30_Klei1Fasad_grn()*$this->E25_1Storona()+$this->H30_Klei1Fasad_grn()*2*$this->E26_2Storonu()+$this->H30_Klei1Fasad_grn()*4*$this->E27_4Storonu());
}

function I12_PolicarbonatKrusha6mm_grn_kg()
    {
        //умножение
        //вывод

        return ($this->H9_PlochadMaterialaFasad_m2()*$this->B5_RoofVisorOut*L10_L7_Plikarb6P);
    }

 function I13_PolicarbonatUlica6mm_grn_kg()
    {
        //умножение
        //вывод

        return ($this->H9_PlochadMaterialaFasad_m2()*$this->E13_Ulica()*$this->E16_PolikUlicaTolst()*L10_L7_Plikarb6P);
    }
 function I14_PolicarbonatUlica4mm_grn_kg()
    {
        //умножение
        //вывод

        return ($this->H9_PlochadMaterialaFasad_m2()*$this->E13_Ulica()*$this->E17_PolikUlicaTonk()*L10_L6_Plikarb4P);
    }
 function I15_PolicarbonatPomechenie6mm_grn_kg()
    {
        //умножение
        //вывод

        return ($this->H9_PlochadMaterialaFasad_m2()*$this->E14_Pomechenie()*$this->E18_PolikPomecheniaTolst()*L10_L7_Plikarb6P);
    }
 function I16_PolicarbonatPomechenie4mm_grn_kg()
    {
        //умножение
        //вывод

        return ($this->H9_PlochadMaterialaFasad_m2()*$this->E14_Pomechenie()*$this->E19_PolikPomecheniaTonk()*L10_L6_Plikarb4P);
    }
    function I17_PolikarbonatFasad_grn_kg()

    {
//сложение
//вывод
        return ($this->I12_PolicarbonatKrusha6mm_grn_kg()+$this->I13_PolicarbonatUlica6mm_grn_kg()+$this->I14_PolicarbonatUlica4mm_grn_kg()+$this->I15_PolicarbonatPomechenie6mm_grn_kg()+$this->I16_PolicarbonatPomechenie4mm_grn_kg());
    }
    function I19_AkrilUlica3mm_grn_kg()
    {
        //умножение
        //вывод

        return ($this->H9_PlochadMaterialaFasad_m2()*$this->E13_Ulica()*$this->E20_AkrilUlicaTolst()*L10_L15_AkrilM3P);
    }
    function I20_AkrilUlica2mm_grn_kg()
    {
        //умножение
        //вывод

        return ($this->H9_PlochadMaterialaFasad_m2()*$this->E13_Ulica()*$this->E21_AkrilUlicaTonk()*L10_L14_AkrilM2P);
    }
    function I21_AkrilPomechenie3mm_grn_kg()
    {
        //умножение
        //вывод

        return ($this->H9_PlochadMaterialaFasad_m2()*$this->E14_Pomechenie()*$this->E22_AkrilPomecheniaTolst()*L10_L15_AkrilM3P);
    }
    function I22_AkrilPomechenie2mm_grn_kg()
    {
        //умножение
        //вывод

        return ($this->H9_PlochadMaterialaFasad_m2()*$this->E14_Pomechenie()*$this->E23_AkrilPomecheniaTonk()*L10_L14_AkrilM2P);
    }
    function I23_AkrilFasad_grn_kg()

    {
//сложение
//вывод
        return ($this->I19_AkrilUlica3mm_grn_kg()+$this->I20_AkrilUlica2mm_grn_kg()+$this->I21_AkrilPomechenie3mm_grn_kg()+$this->I22_AkrilPomechenie2mm_grn_kg());
    }

    function I25_FasadPlastik1Storona_grn_kg()
    {
        //умножение и сложение
        //вывод

        return ($this->I17_PolikarbonatFasad_grn_kg()*$this->E11_PolikItogo()+$this->I23_AkrilFasad_grn_kg()*$this->E10_AkrilItogo());
    }
    function I26_FasadPlastikVseStoroni_grn_kg()
    {
        //умножение и сложение
        //вывод

        return $this->I25_FasadPlastik1Storona_grn_kg()*$this->E25_1Storona()+$this->I25_FasadPlastik1Storona_grn_kg()*2*$this->E26_2Storonu()+$this->I25_FasadPlastik1Storona_grn_kg()*4*$this->E27_4Storonu();
    }

function L5_Virezat1AkrilFasada_min()
    {   
 //умножение
 //вывод
        
       return ($this->H7_PrimetrFasada_mp()*L10_BT6_RaskrAkrylPryamougl_1mp);
}

function L6_Virezat1PolikFasada_min()
    {   
 //умножение
 //вывод
        
       return ($this->H7_PrimetrFasada_mp()*L10_BT7_RaskrPVHPolykPryamougl_1mp);
}


function L7_Virezat1Fasad_min()
    {   
 //умножение и сложение
 //вывод
        
       return ($this->L5_Virezat1AkrilFasada_min()*$this->E10_AkrilItogo()+$this->L6_Virezat1PolikFasada_min()*$this->E11_PolikItogo());
}


function L9_Vkleit1mp_min()
    {   
 
 //вывод
        
       return L10_BT14_SborkaKleyShva_1mp;
}


function L10_Vkleit1FasadPolik_min()
    {   
 //умножение
 //вывод
        
       return ($this->L9_Vkleit1mp_min()*$this->H7_PrimetrFasada_mp()*2);
}


function L11_Vkleit1FasadAcril_min()
    {   
 //умножение
 //вывод
        
       return ($this->H7_PrimetrFasada_mp()*$this->L9_Vkleit1mp_min());
}

function L12_Vkleit1Fasad_min()
    {   
 //умножение и сложение
 //вывод
        
       return ($this->L10_Vkleit1FasadPolik_min()*$this->E11_PolikItogo()+$this->L11_Vkleit1FasadAcril_min()*$this->E10_AkrilItogo());
}

function L14_Obkatatpvx_min1mp()
    {   
 
 //вывод
        
       return L10_BT16_ObkatkaKleyShvaPVH_1mp;
}

function L15_ObkatatAcril_min1mp()
    {   
 
 //вывод
        
       return L10_BT15_ObkatkaSkleyShavaAkryl_1mp;
}

function L16_Obkatat1mp()
    {   
 //умножение и сложение
 //вывод
        
       return ($this->L14_Obkatatpvx_min1mp()*$this->E11_PolikItogo()+$this->L15_ObkatatAcril_min1mp()*$this->E10_AkrilItogo());
}


function L17_Obkatat1Fasad_min()
    {   
 //умножение
 //вывод
        
       return ($this->L16_Obkatat1mp()*$this->H7_PrimetrFasada_mp());
}


function L19_FasadObrabotka1Storona_min()
    {   
 //сложение
 //вывод
        
       return ($this->L7_Virezat1Fasad_min()+$this->L12_Vkleit1Fasad_min()+$this->L17_Obkatat1Fasad_min());
}


function L20_FasadObrabotka_min()
    {   
 //умножение и сложение
 //вывод
        
       return ($this->L19_FasadObrabotka1Storona_min()*$this->E25_1Storona()+$this->L19_FasadObrabotka1Storona_min()*2*$this->E26_2Storonu()+$this->L19_FasadObrabotka1Storona_min()*4*$this->E27_4Storonu());
}

function O6_StoimostMaterialov_grn()
    {   
 //сложение
 //вывод
        
       return round($this->H26_FasadPlastik_grn()+$this->H31_Klei_grn(), 0);
}
    function O7_FasadAkril()
    {

        //вывод

        return ($this->E10_AkrilItogo());
    }
    function O8_FasadPolikarbonat()
    {

        //вывод

        return ($this->E11_PolikItogo());
    }

function O10_TrydoemkostFasad_min()
    {   
 
 //вывод
        
       return round($this->L20_FasadObrabotka_min(), 0);
}

function O11_StoimostRabot_grn()
    {   
 //умножение и округление
 //вывод
        
       return round($this->O10_TrydoemkostFasad_min()*L10_C67_K1, 0);
}
    function O22_Ves_kg()
    {

        //вывод

        return ($this->I26_FasadPlastikVseStoroni_grn_kg());
    }


function O24_Itogo_grn()
    {   
 //сложение
 //вывод
        
       return ($this->O6_StoimostMaterialov_grn()+$this->O11_StoimostRabot_grn());
}

}