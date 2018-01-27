<?php

/**
 * Created by PhpStorm.
 * User: Anrew
 * Date: 27.07.2017
 * Time: 10:48
 */
class L15
{
 // Входные параметры:
    public $AH5_RoofVisorOut; // крыша/козырек улица
    public $AH6_WallOut; // стена улица
    public $AH7_WallIn; // стена помещение
    public $AH8_2SideIn; // 2 стороны помещение
    public $AH9_4SideIn; // 4 стороны помещение

    public $AH11_Orientation; // ориентация
    public $AH12_MaxSide_cm; // большая сторона, см
    public $AH13_MinSide_cm; // меньшая сторона, см

    public $AH15_Konstruct; // конструктив

    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $MaxSide_cm, $MinSide_cm, $Konstruct)
  {
        // Заполнение входных данных.
      $this->AH5_RoofVisorOut = $RoofVisorOut;
      $this->AH6_WallOut = $WallOut;
      $this->AH7_WallIn = $WallIn;
      $this->AH8_2SideIn = $SideIn2;
      $this->AH9_4SideIn = $SideIn4;

      $this->AH11_Orientation = $Orientation;
      $this->AH12_MaxSide_cm = $MaxSide_cm;
      $this->AH13_MinSide_cm = $MinSide_cm;

      $this->AH15_Konstruct = $Konstruct;
  }

    // C light - пленка борт/тыл

    function AK5_TrebNerazb()
    {
        //требование неразборности
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->AH15_Konstruct == 1)
        {
            return  1;
        }
        else
        {
            return 0;
        }

    }
    function AN5_GorRazmcm()
    {
        //горизонтальный размер, см
        //если условие = true, то вывести AH12
        //иначе вывести AH13
        //вывод

        if ($this->AH11_Orientation == 1)
        {
            return  $this->AH12_MaxSide_cm;
        }
        else
        {
            return $this->AH13_MinSide_cm;
        }

    }
    function AN6_VerRazmcm()
    {
        //вертикальный размер, см
        //если условие = true, то вывести AH12
        //иначе вывести AH13
        //вывод

        if ($this->AH11_Orientation == 2)
        {
            return  $this->AH12_MaxSide_cm;
        }
        else
        {
            return $this->AH13_MinSide_cm;
        }

    }
    function AN7_GorRazmm()
    {
        //горизонтальный размер, м
        //округление и деление
        //вывод

        return round($this->AN5_GorRazmcm()/100, 2);

    }
    function AN8_VerRazmm()
    {
        //вертикальный размер, м
        //округление и деление
        //вывод

        return round($this->AN6_VerRazmcm()/100, 2);

    }
    function AK6_DopustNerazb()
    {
        //допустимость неразборности
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->AN7_GorRazmm() <= L10_BB122_PredGorRazmNeRazb4StorVivesm)
        {
            return  1;
        }
        else
        {
            return 0;
        }

    }
    function AK7_NerazbItogo()
    {
        //неразборность, итого
        //умножение
        //вывод

        return $this->AK5_TrebNerazb() * $this->AK6_DopustNerazb();

    }
    function AK8_RazbItogo()
    {
        //разборность, итого
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->AK7_NerazbItogo() == 0)
        {
            return  1;
        }
        else
        {
            return 0;
        }

    }
    function AK10_1Stor()
    {
        //1 сторона
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->AH5_RoofVisorOut+$this->AH6_WallOut+$this->AH7_WallIn > 0)
        {
            return  1;
        }
        else
        {
            return 0;
        }

    }
    function AK11_2Stor()
    {
        //2 стороны
        //значение
        //вывод

        return $this->AH8_2SideIn;

    }
    function AK12_4Nerazb()
    {
        //4 неразборный
        //умножение
        //вывод

        return $this->AH9_4SideIn*$this->AK7_NerazbItogo();

    }
    function AK13_4Razb()
    {
        //4 разборный
        //умножение
        //вывод

        return $this->AH9_4SideIn*$this->AK8_RazbItogo();

    }
    function AN9_Streych1m2grn()
    {
        //стрейч 1 м2, грн
        //значение
        //вывод

        return round(L10_U77_PlenkaStrech_20mkm_1m2, 1);

    }
    function AN10_Skotch1mpgrn()
    {
        //скотч 1 мп, грн
        //значение
        //вывод

        return round(L10_U81_SkotchChinese_1mp,1);

    }
    function AN12_Perimmp()
    {
        //периметр, мп
        //прибавление
        //вывод

        return $this->AN7_GorRazmm()+$this->AN8_VerRazmm()+$this->AN7_GorRazmm()+$this->AN8_VerRazmm();

    }
    function AN13_Plosh1Storm2()
    {
        //площадь 1 сторона, м2
        //прибавление и умножение
        //вывод

        return $this->AN7_GorRazmm()*$this->AN8_VerRazmm()*2+$this->AN12_Perimmp()*0.12;

    }
    function AN14_Plosh2Storm2()
    {
        //площадь 2 стороны, м2
        //прибавление и умножение
        //вывод

        return $this->AN7_GorRazmm()*$this->AN8_VerRazmm()*2+$this->AN12_Perimmp()*0.24;

    }
    function AN15_Plosh4StorNerazbm2()
    {
        //площадь 4 стороны неразб, м2
        //прибавление и умножение
        //вывод

        return $this->AN7_GorRazmm()*$this->AN8_VerRazmm()*4+$this->AN7_GorRazmm()*$this->AN7_GorRazmm()*2;

    }
    function AN16_Plosh4StorRazbm2()
    {
        //площадь 4 стороны разб, м2
        //прибавление и умножение
        //вывод

        return $this->AN13_Plosh1Storm2()*4;

    }
    function AN18_Streych1Storgrn()
    {
        //стрейч 1 сторона, грн
        //умножение
        //вывод

        return $this->AN13_Plosh1Storm2()*$this->AN9_Streych1m2grn()*L10_BB101_K_PererashStrchObshPlVives;

    }
    function AN19_Streych2Storgrn()
    {
        //стрейч 2 стороны, грн
        //умножение
        //вывод

        return $this->AN14_Plosh2Storm2()*$this->AN9_Streych1m2grn()*L10_BB101_K_PererashStrchObshPlVives;

    }
    function AN20_Streych4StorNerazbgrn()
    {
        //стрейч 4 стороны неразб, грн
        //умножение
        //вывод

        return $this->AN15_Plosh4StorNerazbm2()*$this->AN9_Streych1m2grn()*L10_BB101_K_PererashStrchObshPlVives;

    }
    function AN21_Streych4StorRazbgrn()
    {
        //стрейч 4 стороны разб, грн
        //умножение
        //вывод

        return $this->AN16_Plosh4StorRazbm2()*$this->AN9_Streych1m2grn()*L10_BB101_K_PererashStrchObshPlVives;

    }
    function AN23_Streych1Storgrn()
    {
        //стрейч 1 сторона, грн
        //умножение
        //вывод

        return $this->AN18_Streych1Storgrn()*$this->AK10_1Stor();

    }
    function AN24_Streych2Storgrn()
    {
        //стрейч 2 стороны, грн
        //умножение
        //вывод

        return $this->AN19_Streych2Storgrn()*$this->AK11_2Stor();

    }
    function AN25_Streych4StorNerazbgrn()
    {
        //стрейч 4 стороны неразб, грн
        //умножение
        //вывод

        return $this->AN20_Streych4StorNerazbgrn()*$this->AK12_4Nerazb();

    }
    function AN26_Streych4StorRazbgrn()
    {
        //стрейч 4 стороны разб, грн
        //умножение
        //вывод

        return $this->AN21_Streych4StorRazbgrn()*$this->AK13_4Razb();

    }
    function AN27_Streychgrn()
    {
        //стрейч, грн
        //прибавление
        //вывод

        return $this->AN23_Streych1Storgrn()+$this->AN24_Streych2Storgrn()+$this->AN25_Streych4StorNerazbgrn()+
            $this->AN26_Streych4StorRazbgrn();

    }
    function AN28_Streychmp()
    {
        //стрейч, мп
        //деление и умножение
        //вывод

        return $this->AN27_Streychgrn()/$this->AN9_Streych1m2grn()*2;

    }
    function AN29_Skotchmp()
    {
        //скотч, мп
        //умножение
        //вывод

        return $this->AN28_Streychmp()*L10_BB100_K_RashSkotchStreych;

    }
    function AN30_Skotchgrn()
    {
        //скотч, грн
        //умножение
        //вывод

        return $this->AN29_Skotchmp()*$this->AN10_Skotch1mpgrn();

    }
    function AQ5_TrudUpak1m2min()
    {
        //трудоемкость упаковки 1 м2, мин
        //значение
        //вывод

        return L10_BT66_UpakVStrech_1m2;

    }
    function AQ7_1Stormin()
    {
        //1 сторона, мин
        //умножение
        //вывод

        return $this->AN13_Plosh1Storm2()*$this->AQ5_TrudUpak1m2min();

    }
    function AQ8_2Stormin()
    {
        //2 стороны, мин
        //умножение
        //вывод

        return $this->AN14_Plosh2Storm2()*$this->AQ5_TrudUpak1m2min();

    }
    function AQ9_4StorNerazbmin()
    {
        //4 стороны неразб, мин
        //умножение
        //вывод

        return $this->AN15_Plosh4StorNerazbm2()*$this->AQ5_TrudUpak1m2min();

    }
    function AQ10_4StorRazbmin()
    {
        //4 стороны разб, мин
        //умножение
        //вывод

        return $this->AN16_Plosh4StorRazbm2()*$this->AQ5_TrudUpak1m2min();

    }
    function AQ12_1Stormin()
    {
        //1 сторона, мин
        //умножение
        //вывод

        return $this->AQ7_1Stormin()*$this->AK10_1Stor();

    }
    function AQ13_2Stormin()
    {
        //2 стороны, мин
        //умножение
        //вывод

        return $this->AQ8_2Stormin()*$this->AK11_2Stor();

    }
    function AQ14_4StorNerazbmin()
    {
        //4 стороны неразб, мин
        //умножение
        //вывод

        return $this->AQ9_4StorNerazbmin()*$this->AK12_4Nerazb();

    }
    function AQ15_4StorRazbmin()
    {
        //4 стороны разб, мин
        //умножение
        //вывод

        return $this->AQ10_4StorRazbmin()*$this->AK13_4Razb();

    }
    function AQ16_Upakmin()
    {
        //упаковка, мин
        //прибавление
        //вывод

        return $this->AQ12_1Stormin()+$this->AQ13_2Stormin()+$this->AQ14_4StorNerazbmin()+$this->AQ15_4StorRazbmin();

    }
    function AT6_PlenkaStreych500mmItogomp()
    {
        //пленка стрейч (500 мм) итого, мп
        //округление
        //вывод

        return round($this->AN28_Streychmp(), 0);

    }
    function AT7_StoimPlgrn()
    {
        //стоимость пленки, грн
        //округление
        //вывод

        return round($this->AN27_Streychgrn(), 0);

    }
    function AT11_TrudUpakmin()
    {
        //трудоемкость упаковки , мин
        //округление
        //вывод

        return round($this->AQ16_Upakmin(), 0);

    }
    function AT12_StoimRabgrn()
    {
        //стоимость работы, грн
        //умножение
        //вывод

        return $this->AT11_TrudUpakmin()*L10_C67_K1;

    }
    function AT24_Itogogrn()
    {
        //итого, грн
        //умножение
        //вывод

        return $this->AT7_StoimPlgrn()+$this->AT12_StoimRabgrn();

    }











}