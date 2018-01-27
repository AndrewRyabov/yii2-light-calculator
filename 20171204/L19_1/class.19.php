<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 06.10.2017
 * Time: 20:27
 */
class L19
{
 // Входные параметры:
// Входные параметры:
	public $B5_BigStor; // большая сторона, см
	public $B6_SmallStor; //меньшая сторона, см
	public $B8_LicevoeIzobragenie; // лицевое изображение
	public $B9_CvetBortov; //цвет бортов
	public $B10_CvetTila; //цвет тыла

	

	

public function __construct($BigStor, $SmallStor, $LicevoeIzobragenie,
 $CvetBortov, $CvetTila)

  {
        // Заполнение входных данных.
	$this->B5_BigStor = $BigStor;
        $this->B6_SmallStor = $SmallStor;
        $this->B8_LicevoeIzobragenie = $LicevoeIzobragenie;
        $this->B9_CvetBortov = $CvetBortov;
	$this->B10_CvetTila = $CvetTila;
	
	
  }


function E5_TrebovanieLamp() 
    {   
 //если b8=1, то присвоить 1, иначе вернуть 0 
 //вывод
        
        if ($this->B8_LicevoeIzobragenie==1)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
function E6_PlenkaBort() 
    {   
 //если b9>=1, то присвоить 1, иначе вернуть 0 
 //вывод
        
        if ($this->B9_CvetBortov>=1)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
function E7_PlenkaTil() 
    {   
 //если b10>=1, то присвоить 1, иначе вернуть 0 
 //иначе - вернуть 0
 //вывод
        
        if ($this->B10_CvetTila>0)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
function E8_PlenkaVizdelii() 
    {   
 //если b8+b9+b10>=0, то присвоить 1, иначе вернуть 0 
 //иначе - вернуть 0
 //вывод
        
        if (($this->B8_LicevoeIzobragenie+$this->B9_CvetBortov+$this->B10_CvetTila)>=0)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }


function H5_BigStor_m() 
    {   
 
 //округление и деление
 //вывод
        
        return round($this->B5_BigStor/100,2);

	}
function H6_SmallStor_m() 
    {  
 //округление и деление
 //вывод
        
        return round($this->B6_SmallStor/100,2);

	}
function H8_Stoimost1StandarntoiPoezdki_grn() 
    {   
 //умножение
 //вывод
    
       return L10_BB113_K_ProbegDobloZa1PoezdkySnabjenca*L10_BB114_K_ProbAvtSnabj100kmVivesStandart*L10_C10_Dizel;
}
function H11_PlochadStandart_m2() 
    {   

 //вывод
        
       return L10_BB109_K_PloshStandartVives;

}
function H12_PlochadViveski_m2() 
    {   
 //умножение
 //вывод
    
       return $this->H5_BigStor_m()*$this->H6_SmallStor_m();
}
function H13_PlochadEkvivalentna_m2() 
    {   
 //сложение, умножение и отнимание
 //вывод
    
       return $this->H11_PlochadStandart_m2()+($this->H12_PlochadViveski_m2()-$this->H11_PlochadStandart_m2())*L10_BB110_K_PopravPloshSnabj;
}
function H14_KoefPloshadnoj() 
    {  
 //деление
 //вывод
    
       return $this->H13_PlochadEkvivalentna_m2()/$this->H11_PlochadStandart_m2();
}

function H16_RashodiNaMashStand_grn() 
    {   
 //умножение
 //вывод
    
       return $this->H8_Stoimost1StandarntoiPoezdki_grn()*L10_BB111_K_KolichestvoPoezdokSnabjencaBezPlenkiStandart;
}
function H17_RashodiNaMashPlenka_grn() 
    {   
 //умножение
 //вывод
    
       return $this->H8_Stoimost1StandarntoiPoezdki_grn()*L10_BB112_K_KolichestvoPoezdokSnabjencaPlenkaStandart*$this->E8_PlenkaVizdelii();
}

function H18_RashodiNaMashEkv_grn() 
    {   
 //сложение и умножение
 //вывод
    
       return ($this->H16_RashodiNaMashStand_grn()+$this->H17_RashodiNaMashPlenka_grn())*$this->H14_KoefPloshadnoj();
}
function H20_DostavkaListovixMater_grn() 
    {   
 //умножение
 //вывод
    
       return L10_BB115_K_NaDostavkyListovixMaterialov_LDizel*L10_C10_Dizel;
}

function K5_TrydoemkostStandart_min() 
    {   
 //умножение
 //вывод
    
       return L10_BB111_K_KolichestvoPoezdokSnabjencaBezPlenkiStandart*L10_BT75_SnabjStandartVives1i8m2;
}
function K6_TrydoemkostPlenka_min() 
    {   
 //умножение
 //вывод
    
       return L10_BB112_K_KolichestvoPoezdokSnabjencaPlenkaStandart* L10_BT75_SnabjStandartVives1i8m2*$this->E8_PlenkaVizdelii();
}
function K7_RashodiNaMashEkv_grn() 
    {   
 //сложение и умножение
 //вывод
    
       return ($this->K5_TrydoemkostStandart_min()+$this->K6_TrydoemkostPlenka_min())*$this->H14_KoefPloshadnoj();
}

function N6_RashodiNaTransport_grn() 
    {   
 
 //округление и сложение
 //вывод
        
        return round($this->H18_RashodiNaMashEkv_grn()+$this->H20_DostavkaListovixMater_grn(), 0);

	}
function N10_TrydoemkostSnabjenia_min() 
    { 
 //округление
 //вывод
      return round($this->K7_RashodiNaMashEkv_grn(), 0);

	}
function N11_StoimostRabot_grn() 
    {   
 //округление и умножение
 //вывод
      return round($this->N10_TrydoemkostSnabjenia_min()*L10_C67_K1, 0);
	}

function N24_Itogo_grn() 
    {   
 //сложение и умножение
 //вывод
    
       return $this->N6_RashodiNaTransport_grn()+$this->N11_StoimostRabot_grn();
}



}