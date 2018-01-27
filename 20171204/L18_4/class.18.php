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
	public $BD5_RoofVisorOut; // крыша/козырек улица
	public $BD6_AOallOut; // стена улица
	public $BD7_AOallIn; // стена помещение
	public $BD8_2SideIn; // 2 стороны помещение
	public $BD9_4SideIn; // 4 стороны помещение

	public $BD11_istochniksveta; // источник света (1- диоды/2-лампы
	

	

public function __construct($RoofVisorOut, $AOallOut, $AOallIn,
 $SideIn2, $SideIn4, $Istochniksveta)

  {
        // Заполнение входных данных.
	$this->BD5_RoofVisorOut = $RoofVisorOut;
        $this->BD6_AOallOut = $AOallOut;
        $this->BD7_AOallIn = $AOallIn;
        $this->BD8_2SideIn = $SideIn2;
        $this->BD9_4SideIn = $SideIn4;
	$this->BD11_Istochniksveta = $Istochniksveta;
	
	
  }

function BG5_TrebovanieDiodov() 
    {   
 //если bd11=1, то присвоить 1, иначе вернуть 0 
 //иначе - вернуть 0
 //вывод
        
        if ($this->BD11_Istochniksveta==1)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
function BG6_TrebovanieLamp() 
    {   
 //если bg5=1, то присвоить 0, иначе вернуть 1 
 //иначе - вернуть 0
 //вывод
        
        if ($this->BG5_TrebovanieDiodov()==1)
	{
	 return 0;
	}
	else 
	{
	return 1;
	}
 }
function BG8_DopystimostLamp() 
    {   
 //если BD5+BD6+BD7=1, то присвоить 1, иначе вернуть 0 
 //иначе - вернуть 0
 //вывод
        
        if (($this->BD5_RoofVisorOut+$this->BD6_AOallOut+$this->BD7_AOallIn)>=1)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
function BG9_DopystimostKlasterov() 
    {   
 //если BD5+BD6>=0, то присвоить 1, иначе вернуть 0 
 //иначе - вернуть 0
 //вывод
        
        if (($this->BD5_RoofVisorOut+$this->BD6_AOallOut)>=1)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
function BG10_DopystimostLent() 
    {   
 //если BD5+BD6+BD7>=0, то присвоить 1, иначе вернуть 0 
 //иначе - вернуть 0
 //вывод
        
        if (($this->BD5_RoofVisorOut+$this->BD6_AOallOut+$this->BD7_AOallIn)>=0)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
function BG11_ObazatelnostLent() 
    {   
 //если BD8+BD9>=1, то присвоить 1, иначе вернуть 0 
 //иначе - вернуть 0
 //вывод
        
        if (($this->BD8_2SideIn+$this->BD9_4SideIn)>=1)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
function BG13_Lampi() 
    {   
 //умножение
 //вывод
        
       return ($this->BG6_TrebovanieLamp()*$this->BG8_DopystimostLamp());
}
function BG14_Klasteri() 
    {   
 //умножение
 //вывод
        
       return ($this->BG5_TrebovanieDiodov()*$this->BG9_DopystimostKlasterov());
}
function BG15_Lenti() 
    {   
 //если BG5*BG10+BG11>=1, то присвоить 1, иначе вернуть 0 
 //иначе - вернуть 0
 //вывод
        
        if (($this->BG5_TrebovanieDiodov()*$this->BG10_DopystimostLent()+$this->BG11_ObazatelnostLent())>=1)
	{
	 return 1;
	}
	else 
	{
	return 0;
	}
 }
function P6_StoimostMaterialov_grn() 
    {   

 //вывод
        
       return 1244;
}
function BJ5_LampiMat_grn() 
    {   

 //вывод
        
       return ($this->P6_StoimostMaterialov_grn());

}
function AH6_StoimostMaterialov_grn() 
    {   

 //вывод
        
       return 1009;
}
function BJ6_KlasteriMat_grn() 
    {   

 //вывод
        
       return ($this->AH6_StoimostMaterialov_grn());

}
function AZ6_StoimostMaterialov_grn() 
    {   

 //вывод
        
       return 1726;
}
function BJ7_StoimostMat_grn() 
    {   

 //вывод
        
       return ($this->AZ6_StoimostMaterialov_grn());

}

function BJ9_ElektrikaItogo() 
    {   
 //сложение и умножение
 //вывод
        
       return ($this->BJ5_LampiMat_grn()*$this->BG13_Lampi()+$this->BJ6_KlasteriMat_grn()*$this->BG14_Klasteri()+$this->BJ7_StoimostMat_grn()*$this->BG15_Lenti());

}
function P22_Ves_kg() 
    {   

 //вывод
        
       return 4.2;
}
function BK5_LampiVes_kg() 
    {   

 //вывод
        
       return ($this->P22_Ves_kg());

}
function AH22_Ves_kg() 
    {   

 //вывод
        
       return 2.3;
}
function BK6_KlasteriVes_kg() 
    {   

 //вывод
        
       return ($this->AH22_Ves_kg());

}
function AZ22_Ves_kg() 
    {   

 //вывод
        
       return 2.2;
}
function BK7_LentiVes_kg() 
    {   

 //вывод
        
       return ($this->AZ22_Ves_kg());

}
function BK9_ElektrikaItogo() 
    {   
 //сложение и умножение
 //вывод
        
       return ($this->BK5_LampiVes_kg()*$this->BG13_Lampi()+$this->BK6_KlasteriVes_kg()*$this->BG14_Klasteri()+$this->BK7_LentiVes_kg()*$this->BG15_Lenti());

}

function P21_EnergoPotreblenie_Vt() 
    {   

 //вывод
        
       return 180;
}
function AH21_EnergoPotreblenie_Vt() 
    {   

 //вывод
        
       return 126;
}
function AZ21_EnergoPotreblenie_Vt() 
    {   

 //вывод
        
       return 300;
}
function BL5_Lampi_Vt() 
    {   

 //вывод
        
       return ($this->P21_EnergoPotreblenie_Vt());

}
function BL6_Klasteri_Vt() 
    {   

 //вывод
        
       return ($this->AH21_EnergoPotreblenie_Vt());

}
function BL7_Lenti_Vt() 
    {   

 //вывод
        
       return ($this->AZ21_EnergoPotreblenie_Vt());

}
function BL9_ElektrikaItogo() 
    {   
 //сложение и умножение
 //вывод
        
       return ($this->BL5_Lampi_Vt()*$this->BG13_Lampi()+$this->BL6_Klasteri_Vt()*$this->BG14_Klasteri()+$this->BL7_Lenti_Vt()*$this->BG15_Lenti());

}
   
function P10_TrydoemkostLenta_min() 
    {   

 //вывод
        
       return 120;
}
function AH10_TrydoemkostLenta_min() 
    {   

 //вывод
        
       return 123;
}
function AZ10_TrydoemkostLenta_min() 
    {   

 //вывод
        
       return 238;
}
function BM5_Lampi_min() 
    {   

 //вывод
        
       return ($this->P10_TrydoemkostLenta_min());

}
function BM6_Klasteri_min() 
    {   

 //вывод
        
       return ($this->AH10_TrydoemkostLenta_min());

}
function BM7_Lenti_min() 
    {   

 //вывод
        
       return ($this->AZ10_TrydoemkostLenta_min());

}
function BM9_ElektrikaItogo() 
    {   
 //сложение и умножение
 //вывод
        
       return ($this->BM5_Lampi_min()*$this->BG13_Lampi()+$this->BM6_Klasteri_min()*$this->BG14_Klasteri()+$this->BM7_Lenti_min()*$this->BG15_Lenti());

}
function BO7_BPR() 
    {   

 //вывод
        
       return ($this->BG13_Lampi());

}
function BO8_BPR() 
    {   
 //если BO7=1, то присвоить 0, иначе вернуть 1 
 //иначе - вернуть 0
 //вывод
        
        if ($this->BO7_BPR()==1)
	{
	 return 0;
	}
	else 
	{
	return 1;
	}
 }
function BO9_BPR() 
    {   

 //вывод
    
       return 1;
}
function BP8_Diodi() 
    {   

 //вывод
        
       return ($this->BP8_Diodi());

}
function BP9_Diodi() 
    {   
   	//ВПР
        //сравнение c 1
        //вывод

       if ($this->BO7_BPR() == 1)
        {
            return 'лампы';
        }
        elseif ($this->BO8_BPR() == 1)
        {
            return 'диоды';
        }
        else
        {
            return 0;
        } 

}


   
    function BS6_StoimostMaterialov_grn()
    {
        //вывод
        return ($this->BJ9_ElektrikaItogo());
    }
    function BS10_TrydoemkostElektrika_min()
    {
        
        //вывод
        return ($this->BM9_ElektrikaItogo());
    }
    function BS11_StoimostRaboty_grn()
    {
        //умножение и округление
        //вывод
        return round($this->BS10_TrydoemkostElektrika_min()*L10_C67_K1,0);
    }
 function BS20_IstochnikSSveta()
    {
        
        //вывод
        return ($this->BP9_Diodi());
    }
    function BS21_Energopotreblenie_Vt()
    {
        
        //вывод
        return ($this->BL9_ElektrikaItogo());
    }
    function BS22_Ves_kg()
    {
        
        //вывод
        return ($this->BK9_ElektrikaItogo());
    }
    function BS24_Itogo_grn()
    {
        //сложение
        //вывод
        return ($this->BS6_StoimostMaterialov_grn()+$this->BS11_StoimostRaboty_grn());
    }

}