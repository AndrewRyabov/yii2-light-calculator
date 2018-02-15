<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 19.01.2018
 * Time: 12:28
 */
class L15
{
    // Входные параметры:
    public $R5_RoofVisorOut; // крыша/козырек улица
    public $R6_WallOut; // стена улица
    public $R7_WallIn; // стена помещение
    public $R8_2SideIn; // 2 стороны помещение
    public $R9_4SideIn; // 4 стороны помещение

    public $R11_BolshStorona_cm; // большая сторона, см
    public $R12_MenshStorona_cm; // меньшая сторона, см


    public $R14_PlenkaRitramaek1m2_grn; // пленка "Ritrama" эк 1 м2, грн
    public $R15_Porezka1mp_grn; // порезка 1 мп, грн

    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $BolshStorona_cm,
                                $MenshStorona_cm, $PlenkaRitramaek1m2_grn, $Porezka1mp_grn)
    {
        // Заполнение входных данных.
        $this->R5_RoofVisorOut = $RoofVisorOut;
        $this->R6_WallOut = $WallOut;
        $this->R7_WallIn = $WallIn;
        $this->R8_2SideIn = $SideIn2;
        $this->R9_4SideIn = $SideIn4;

        $this->R11_BolshStorona_cm = $BolshStorona_cm;
        $this->R12_MenshStorona_cm = $MenshStorona_cm;

        $this->R14_PlenkaRitramaek1m2_grn = $PlenkaRitramaek1m2_grn;
        $this->R15_Porezka1mp_grn = $Porezka1mp_grn;

    }

    // C light - фасад пленка

    function V6_2Storony()
    {
        //2 стороны (1-да/0-нет)
        //вывод

        return $this->R8_2SideIn;
    }

    function V7_4Storony()
    {
        //4 стороны (1-да/0-нет)
        //вывод

        return $this->R9_4SideIn;
    }

    function V5_1Storona()
    {
        //1 сторона (1-да/0-нет)
        //если 2 стороны = 0 и 4 стороны = 0, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->V6_2Storony() == 0 and $this->V7_4Storony() == 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function V9_BolchaaStorona_m()
    {
        //деление
        //вывод
        return $this->R11_BolshStorona_cm / 100;
    }

    function V10_MenchaaStorona_m()
    {
        //деление
        //вывод
        return $this->R12_MenshStorona_cm / 100;
    }

    function V11_Perimetr_m()
    {//сложение
        //вывод

        return $this->V9_BolchaaStorona_m() + $this->V10_MenchaaStorona_m() + $this->V9_BolchaaStorona_m() + $this->V10_MenchaaStorona_m();
    }

    function V13_VertPolosDla1m_shtuk()
    {
        //округить вверх
        //вывод

        return ceil($this->V9_BolchaaStorona_m() / 1);
    }

    function V14_VertPolosDla122m_shtuk()
    {
        //округить вверх
        //вывод

        return ceil($this->V9_BolchaaStorona_m() / 1.22);
    }

//ШИРИНА ПЛЕНКИ 1 М
    function V18_BolchaaStoronaDo24smFlag()
    {
        //если r11<=24, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm <= 24) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V19_BolchaaStorona25Tire49smFlag()
    {
        //если r11>=25 и r11<=49, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm >= 25 and $this->R11_BolshStorona_cm <= 49) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V20_BolchaaStorona50Tire99smFlag()
    {
        //если r11>=50 и r11<=99, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm >= 50 and $this->R11_BolshStorona_cm <= 99) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V22_MenchaaStoronaDo24smFlag()
    {
        //если r12<=24, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm <= 24) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V23_MenchaaStorona25Tire49smFlag()
    {
        //если r12>=26 и r11<=49, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 26 and $this->R12_MenshStorona_cm <= 49) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V24_MenchaaStorona50Tire99smFlag()
    {
        //если r12>=50 и r12<=99, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 50 and $this->R12_MenshStorona_cm <= 99) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V26_MenchaaStorona100Tire124smFlag()
    {
        //если r12>=100 и r12<=124, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 100 and $this->R12_MenshStorona_cm <= 124) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V27_MenchaaStorona125Tire149smFlag()
    {
        //если r12>=125 и r11<=149, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 125 and $this->R12_MenshStorona_cm <= 149) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V28_MenchaaStorona150Tire154smFlag()
    {
        //если r11>=150 и r11<=154, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 150 and $this->R12_MenshStorona_cm <= 154) {
            return 1;
        } else {
            return 10000;
        }
    }

    function X18_BolchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }

    function X19_BolchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }

    function X20_BolchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }

    function X22_MenchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }

    function X23_MenchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }

    function X24_MenchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }

    function X26_MenchaaStoronaDo24smRez_grn()
    {
        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function X27_MenchaaStorona25Tire49smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }

    function X28_MenchaaStorona50Tire99smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V28_MenchaaStorona150Tire154smFlag();
    }

    function Y18_BolchaaStoronaDo24smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }

    function Y19_BolchaaStorona25Tire49smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }

    function Y20_BolchaaStorona50Tire99smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }

    function Y22_MenchaaStoronaDo24smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }

    function Y23_MenchaaStorona25Tire49smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }

    function Y24_MenchaaStorona50Tire99smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }

    function Y26_MenchaaStoronaDo24smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function Y27_MenchaaStorona25Tire49smPlen_grn()
    {
        // умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }

    function Y28_MenchaaStorona50Tire99smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V28_MenchaaStorona150Tire154smFlag();
    }
function Z18_Summ_grn()
{//сумма
    return $this->X18_BolchaaStoronaDo24smRez_grn()+$this->Y18_BolchaaStoronaDo24smPlen_grn();
}
    function Z19_Summ_grn()
    {//сумма
        return $this->X19_BolchaaStorona25Tire49smRez_grn()+$this->Y19_BolchaaStorona25Tire49smPlen_grn();
    }
    function Z20_Summ_grn()
    {//сумма
        return $this->X20_BolchaaStorona50Tire99smRez_grn()+$this->Y20_BolchaaStorona50Tire99smPlen_grn();
    }

    function Z22_Summ_grn()
    {//сумма
        return $this->X22_MenchaaStoronaDo24smRez_grn()+$this->Y22_MenchaaStoronaDo24smPlen_grn();
    }
    function Z23_Summ_grn()
    {//сумма
        return $this->X23_MenchaaStorona25Tire49smRez_grn()+$this->Y23_MenchaaStorona25Tire49smPlen_grn();
    }
    function Z24_Summ_grn()
    {//сумма
        return $this->X24_MenchaaStorona50Tire99smRez_grn()+$this->Y24_MenchaaStorona50Tire99smPlen_grn();
    }
    function Z26_Summ_grn()
    {//сумма
        return $this->X26_MenchaaStoronaDo24smRez_grn()+$this->Y26_MenchaaStoronaDo24smPlen_grn();
    }
    function Z27_Summ_grn()
    {//сумма
        return $this->X27_MenchaaStorona25Tire49smRez_grn()+$this->Y27_MenchaaStorona25Tire49smPlen_grn();
    }
    function Z28_Summ_grn()
    {//сумма
        return $this->X28_MenchaaStorona50Tire99smRez_grn()+$this->Y28_MenchaaStorona50Tire99smPlen_grn();
    }
    function Z30_Summ1Stor_grn()
    {
return round (min($this->Z18_Summ_grn(),$this->Z19_Summ_grn(),$this->Z20_Summ_grn(),$this->Z22_Summ_grn(),
    $this->Z23_Summ_grn(),$this->Z24_Summ_grn(),$this->Z26_Summ_grn(),$this->Z27_Summ_grn(),$this->Z28_Summ_grn()),0);
    }
    function Z31_StoronaItogo_grn()
    {//умножение
        return $this->Z30_Summ1Stor_grn()*$this->V5_1Storona();
    }
    //ШИРИНА ПЛЕНКА 1,22 М
    function V36_BolchaaStoronaDo30smFlag()
    {
        //если r11<=30, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm <= 30) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V37_BolchaaStorona31Tire60smFlag()
    {
        //если r11>=31 и r11<=60, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm >= 31 and $this->R11_BolshStorona_cm <= 60) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V38_BolchaaStorona61Tire120smFlag()
    {
        //если r11>=61 и r11<=120, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R11_BolshStorona_cm >= 61 and $this->R11_BolshStorona_cm <= 120) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V40_MenchaaStoronaDo30smFlag()
    {
        //если r12<=30, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm <= 30) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V41_MenchaaStorona31Tire60smFlag()
    {
        //если r12>=31 и r11<=60, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 31 and $this->R12_MenshStorona_cm <= 60) {
            return 1;
        } else {
            return 10000;
        }
    }
    function V42_MenchaaStorona61Tire120smFlag()
    {
        //если r12>=61 и r12<=120, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 61 and $this->R12_MenshStorona_cm <= 120) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V44_MenchaaStorona121Tire150smFlag()
    {
        //если r12>=121 и r12<=150, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 121 and $this->R12_MenshStorona_cm <= 150) {
            return 1;
        } else {
            return 10000;
        }
    }

    function V45_MenchaaStorona151Tire154smFlag()
    {
        //если r12>=151 и r11<=154, то присвоить 1, иначе присвоить 10000
        //вывод

        if ($this->R12_MenshStorona_cm >= 151 and $this->R12_MenshStorona_cm <= 154) {
            return 1;
        } else {
            return 10000;
        }
    }

    function X36_BolStorDo30sm1StorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V36_BolchaaStoronaDo30smFlag();
    }
    function X37_BolStor31Tire60sm1StorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V37_BolchaaStorona31Tire60smFlag();
    }
    function X38_BolStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V38_BolchaaStorona61Tire120smFlag();
    }
    function X40_MenStorDo30sm1StorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V40_MenchaaStoronaDo30smFlag();
    }
    function X41_MenlStor31Tire60sm1StorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V41_MenchaaStorona31Tire60smFlag();
    }
    function X42_MenStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return $this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V42_MenchaaStorona61Tire120smFlag();
    }
    function X44_MenchaaStorona121Tire150smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V44_MenchaaStorona121Tire150smFlag();
    }
    function X45_MenchaaStorona151Tire154smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) * $this->R15_Porezka1mp_grn * $this->V45_MenchaaStorona151Tire154smFlag();
    }
    function Y36_BolchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V36_BolchaaStoronaDo30smFlag()*1.22;
    }
    function Y37_BolchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V37_BolchaaStorona31Tire60smFlag()*1.22;
    }

    function Y38_BolchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V38_BolchaaStorona61Tire120smFlag()*1.22;
    }

    function Y40_MenchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V40_MenchaaStoronaDo30smFlag()*1.22;
    }

    function Y41_MenchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V41_MenchaaStorona31Tire60smFlag()*1.22;
    }

    function Y42_MenchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }
      function Y44_MenchaaStorona121Tire150smPlen_grn()
    {
        // умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V44_MenchaaStorona121Tire150smFlag()*1.22;
    }

    function Y45_MenchaaStorona151Tire154smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V45_MenchaaStorona151Tire154smFlag()*1.22;
    }

    function Z36_Summ_grn()
    {//сумма
        return $this->X36_BolStorDo30sm1StorRes_grn()+$this->Y36_BolchaaStoronaDo30smPlen_grn();
    }
    function Z37_Summ_grn()
    {//сумма
        return $this->X37_BolStor31Tire60sm1StorRes_grn()+$this->Y37_BolchaaStorona31Tire60smPlen_grn();
    }
    function Z38_Summ_grn()
    {//сумма
        return $this->X38_BolStor61Tire120sm1StorStorRes_grn()+$this->Y38_BolchaaStorona61Tire120smPlen_grn();
    }

    function Z40_Summ_grn()
    {//сумма
        return $this->X40_MenStorDo30sm1StorRes_grn()+$this->Y40_MenchaaStoronaDo30smPlen_grn();
    }
    function Z41_Summ_grn()
    {//сумма
        return $this->X41_MenlStor31Tire60sm1StorRes_grn()+$this->Y41_MenchaaStorona31Tire60smPlen_grn();
    }
    function Z42_Summ_grn()
    {//сумма
        return $this->X42_MenStor61Tire120sm1StorStorRes_grn()+$this->Y42_MenchaaStorona61Tire120smPlen_grn();
    }
    function Z44_Summ_grn()
    {//сумма
        return $this->X44_MenchaaStorona121Tire150smRez_grn()+$this->Y44_MenchaaStorona121Tire150smPlen_grn();
    }
    function Z45_Summ_grn()
    {//сумма
        return $this->X45_MenchaaStorona151Tire154smRez_grn()+$this->Y45_MenchaaStorona151Tire154smPlen_grn();
    }
    function Z47_Summ1Stor_grn()
    {
        return round (min($this->Z36_Summ_grn(),$this->Z37_Summ_grn(),$this->Z38_Summ_grn(), $this->Z40_Summ_grn(),$this->Z41_Summ_grn(),$this->Z42_Summ_grn(),$this->Z44_Summ_grn(),$this->Z45_Summ_grn()),0);
    }
    function Z48_StoronaItogo_grn()
    {//умножение
        return $this->Z47_Summ1Stor_grn()*$this->V5_1Storona();
    }
//2 СТОРОНЫ
//ШИРИНА ПЛЕНКИ 1 М
    function AB18_BolchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }
    function AB19_BolchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }
    function AB20_BolchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }
    function AB22_MenchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }
    function AB23_MenchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *2* $this->R15_Porezka1mp_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }
    function AB24_MenchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() * 2*$this->R15_Porezka1mp_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }

    function AB26_MenchaaStoronaDo24smRez_grn()
    {
        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) *2* $this->R15_Porezka1mp_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function AB27_MenchaaStorona25Tire49smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) *2* $this->R15_Porezka1mp_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }

    function AB28_MenchaaStorona50Tire99smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 4) *2* $this->R15_Porezka1mp_grn * $this->V28_MenchaaStorona150Tire154smFlag();
    }

    function AC18_BolchaaStoronaDo24smPlen_grn()
    {       //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }

    function AC19_BolchaaStorona25Tire49smPlen_grn()
    {        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }

    function AC20_BolchaaStorona50Tire99smPlen_grn()
    {        //умножение
        //вывод
        return 2 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }

    function AC22_MenchaaStoronaDo24smPlen_grn()
    {        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }

    function AC23_MenchaaStorona25Tire49smPlen_grn()
    {        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }

    function AC24_MenchaaStorona50Tire99smPlen_grn()
    {        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }

    function AC26_MenchaaStoronaDo24smPlen_grn()
    {        //умножение
        //вывод
        return 3 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function AC27_MenchaaStorona25Tire49smPlen_grn()
    {        // умножение
        //вывод
        return 3 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }

    function AC28_MenchaaStorona50Tire99smPlen_grn()
    {        //умножение и сложение
        //вывод
        return (3*$this->V9_BolchaaStorona_m()*$this->R14_PlenkaRitramaek1m2_grn+$this->V13_VertPolosDla1m_shtuk()*(1.54-$this->V10_MenchaaStorona_m())*2)*$this->V28_MenchaaStorona150Tire154smFlag();
    }
    function AD18_Summ_grn()
    {//сумма
        return $this->AB18_BolchaaStoronaDo24smRez_grn()+$this->AC18_BolchaaStoronaDo24smPlen_grn();
    }
    function AD19_Summ_grn()
    {//сумма
        return $this->AB19_BolchaaStorona25Tire49smRez_grn()+$this->AC19_BolchaaStorona25Tire49smPlen_grn();
    }
    function AD20_Summ_grn()
    {//сумма
        return $this->AB20_BolchaaStorona50Tire99smRez_grn()+$this->AC20_BolchaaStorona50Tire99smPlen_grn();
    }
    function AD22_Summ_grn()
    {//сумма
        return $this->AB22_MenchaaStoronaDo24smRez_grn()+$this->AC22_MenchaaStoronaDo24smPlen_grn();
    }
    function AD23_Summ_grn()
    {//сумма
        return $this->AB23_MenchaaStorona25Tire49smRez_grn()+$this->AC23_MenchaaStorona25Tire49smPlen_grn();
    }
    function AD24_Summ_grn()
    {//сумма
        return $this->AB24_MenchaaStorona50Tire99smRez_grn()+$this->AC24_MenchaaStorona50Tire99smPlen_grn();
    }
    function AD26_Summ_grn()
    {//сумма
        return $this->AB26_MenchaaStoronaDo24smRez_grn()+$this->AC26_MenchaaStoronaDo24smPlen_grn();
    }
    function AD27_Summ_grn()
    {//сумма
        return $this->AB27_MenchaaStorona25Tire49smRez_grn()+$this->AC27_MenchaaStorona25Tire49smPlen_grn();
    }
    function AD28_Summ_grn()
    {//сумма
        return $this->AB28_MenchaaStorona50Tire99smRez_grn()+$this->AC28_MenchaaStorona50Tire99smPlen_grn();
    }
    function AD30_Summ2Stor_grn()
    {
        return round (min($this->AD18_Summ_grn(),$this->AD19_Summ_grn(),$this->AD20_Summ_grn(), $this->AD22_Summ_grn(),$this->AD23_Summ_grn(),$this->AD24_Summ_grn(),$this->AD26_Summ_grn(),$this->AD27_Summ_grn(),$this->AD28_Summ_grn()),0);
    }
    function AD31_StoroniItogo_grn()
    {//умножение
        return $this->AD30_Summ2Stor_grn()*$this->V6_2Storony();
    }
//ШИРИНА ПЛНЕКИ 1,22 М
    function AB36_BolStorDo30sm1StorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V36_BolchaaStoronaDo30smFlag();
    }
    function AB37_BolStor31Tire60sm1StorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V37_BolchaaStorona31Tire60smFlag();
    }
    function AB38_BolStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V38_BolchaaStorona61Tire120smFlag();
    }
    function AB40_MenStorDo30sm1StorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V40_MenchaaStoronaDo30smFlag();
    }
    function AB41_MenlStor31Tire60sm1StorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V41_MenchaaStorona31Tire60smFlag();
    }
    function AB42_MenStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return 2*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V42_MenchaaStorona61Tire120smFlag();
    }
    function AB44_MenchaaStorona121Tire150smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2)*2 * $this->R15_Porezka1mp_grn * $this->V44_MenchaaStorona121Tire150smFlag();
    }
    function AB45_MenchaaStorona151Tire154smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 4)*2 * $this->R15_Porezka1mp_grn * $this->V45_MenchaaStorona151Tire154smFlag();
    }
    function AC36_BolchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V36_BolchaaStoronaDo30smFlag()*1.22;
    }
    function AC37_BolchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V37_BolchaaStorona31Tire60smFlag()*1.22;
    }

    function AC38_BolchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V38_BolchaaStorona61Tire120smFlag()*1.22;
    }

    function AC40_MenchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V40_MenchaaStoronaDo30smFlag()*1.22;
    }

    function AC41_MenchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V41_MenchaaStorona31Tire60smFlag()*1.22;
    }

    function AC42_MenchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }
    function AC44_MenchaaStorona121Tire150smPlen_grn()
    {
        // умножение
        //вывод
        return 3 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }

    function AC45_MenchaaStorona151Tire154smPlen_grn()
    {
        //умножение
        //вывод
        return 3 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }
    function AD36_Summ_grn()
    {//сумма
        return $this->AB36_BolStorDo30sm1StorRes_grn()+$this->AC36_BolchaaStoronaDo30smPlen_grn();
    }
    function AD37_Summ_grn()
    {//сумма
        return $this->AB37_BolStor31Tire60sm1StorRes_grn()+$this->AC37_BolchaaStorona31Tire60smPlen_grn();
    }
    function AD38_Summ_grn()
    {//сумма
        return $this->AB38_BolStor61Tire120sm1StorStorRes_grn()+$this->AC38_BolchaaStorona61Tire120smPlen_grn();
    }

    function AD40_Summ_grn()
    {//сумма
        return $this->AB40_MenStorDo30sm1StorRes_grn()+$this->AC40_MenchaaStoronaDo30smPlen_grn();
    }
    function AD41_Summ_grn()
    {//сумма
        return $this->AB41_MenlStor31Tire60sm1StorRes_grn()+$this->AC41_MenchaaStorona31Tire60smPlen_grn();
    }
    function AD42_Summ_grn()
    {//сумма
        return $this->AB42_MenStor61Tire120sm1StorStorRes_grn()+$this->AC42_MenchaaStorona61Tire120smPlen_grn();
    }
    function AD44_Summ_grn()
    {//сумма
        return $this->AB44_MenchaaStorona121Tire150smRez_grn()+$this->AC44_MenchaaStorona121Tire150smPlen_grn();
    }
    function AD45_Summ_grn()
    {//сумма
        return $this->AB45_MenchaaStorona151Tire154smRez_grn()+$this->AC45_MenchaaStorona151Tire154smPlen_grn();
    }
    function AD47_Summ2Stor_grn()
    {
        return round (min($this->AD36_Summ_grn(),$this->AD37_Summ_grn(),$this->AD38_Summ_grn(), $this->AD40_Summ_grn(),$this->AD41_Summ_grn(),$this->AD42_Summ_grn(),$this->AD44_Summ_grn(),$this->AD45_Summ_grn()),0);
    }
    function AD48_StoroniItogo_grn()
    {//умножение
        return $this->AD47_Summ2Stor_grn()*$this->V6_2Storony();
    }
//4 СТОРОНЫ
//ШИРИНА ПЛЕНКИ 1 М
    function AF18_BolchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }
    function AF19_BolchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }
    function AF20_BolchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }
    function AF22_MenchaaStoronaDo24smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }
    function AF23_MenchaaStorona25Tire49smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4* $this->R15_Porezka1mp_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }
    function AF24_MenchaaStorona50Tire99smRez_grn()
    {
        //умножение
        //вывод
        return $this->V11_Perimetr_m() *4*$this->R15_Porezka1mp_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }
    function AF26_MenchaaStoronaDo24smRez_grn()
    {
        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) *4* $this->R15_Porezka1mp_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }
    function AF27_MenchaaStorona25Tire49smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2) *4* $this->R15_Porezka1mp_grn * $this->V27_MenchaaStorona125Tire149smFlag();
    }
    function AF28_MenchaaStorona50Tire99smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 4) *4* $this->R15_Porezka1mp_grn * $this->V28_MenchaaStorona150Tire154smFlag();
    }
    function AG18_BolchaaStoronaDo24smPlen_grn()
    {       //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V18_BolchaaStoronaDo24smFlag();
    }

    function AG19_BolchaaStorona25Tire49smPlen_grn()
    {        //умножение
        //вывод
        return 2 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V19_BolchaaStorona25Tire49smFlag();
    }
    function AG20_BolchaaStorona50Tire99smPlen_grn()
    {        //умножение
        //вывод
        return 4 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V20_BolchaaStorona50Tire99smFlag();
    }
    function AG22_MenchaaStoronaDo24smPlen_grn()
    {        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V22_MenchaaStoronaDo24smFlag();
    }
    function AG23_MenchaaStorona25Tire49smPlen_grn()
    {        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V23_MenchaaStorona25Tire49smFlag();
    }
    function AG24_MenchaaStorona50Tire99smPlen_grn()
    {        //умножение
        //вывод
        return 4 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V24_MenchaaStorona50Tire99smFlag();
    }
    function AG26_MenchaaStoronaDo24smPlen_grn()
    {        //умножение
        //вывод
        return 5 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }
    function AG27_MenchaaStorona25Tire49smPlen_grn()
    {        // умножение
        //вывод
        return 6 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V26_MenchaaStorona100Tire124smFlag();
    }

    function AG28_MenchaaStorona50Tire99smPlen_grn()
    {        //умножение и сложение
        //вывод
        return (6*$this->V9_BolchaaStorona_m()*$this->R14_PlenkaRitramaek1m2_grn+$this->V13_VertPolosDla1m_shtuk()*(1.54-$this->V10_MenchaaStorona_m())*4)*$this->V28_MenchaaStorona150Tire154smFlag();
    }
    function AH18_Summ_grn()
    {//сумма
        return $this->AF18_BolchaaStoronaDo24smRez_grn()+$this->AG18_BolchaaStoronaDo24smPlen_grn();
    }
    function AH19_Summ_grn()
    {//сумма
        return $this->AF19_BolchaaStorona25Tire49smRez_grn()+$this->AG19_BolchaaStorona25Tire49smPlen_grn();
    }
    function AH20_Summ_grn()
    {//сумма
        return $this->AF20_BolchaaStorona50Tire99smRez_grn() + $this->AG20_BolchaaStorona50Tire99smPlen_grn();
    }
   function AH22_Summ_grn()
        {//сумма
            return $this->AF22_MenchaaStoronaDo24smRez_grn() + $this->AG22_MenchaaStoronaDo24smPlen_grn();
        }

        function AH23_Summ_grn()
        {//сумма
            return $this->AF23_MenchaaStorona25Tire49smRez_grn() + $this->AG23_MenchaaStorona25Tire49smPlen_grn();
        }

        function AH24_Summ_grn()
        {//сумма
            return $this->AF24_MenchaaStorona50Tire99smRez_grn() + $this->AG24_MenchaaStorona50Tire99smPlen_grn();
        }

        function AH26_Summ_grn()
        {//сумма
            return $this->AF26_MenchaaStoronaDo24smRez_grn() + $this->AG26_MenchaaStoronaDo24smPlen_grn();
        }

        function AH27_Summ_grn()
        {//сумма
            return $this->AF27_MenchaaStorona25Tire49smRez_grn() + $this->AG27_MenchaaStorona25Tire49smPlen_grn();
        }

        function AH28_Summ_grn()
        {//сумма
            return $this->AF28_MenchaaStorona50Tire99smRez_grn() + $this->AG28_MenchaaStorona50Tire99smPlen_grn();
        }
    function AH30_Summ4Stor_grn()
    {
        return round (min($this->AH18_Summ_grn(),$this->AH19_Summ_grn(),$this->AH20_Summ_grn(), $this->AH22_Summ_grn(),$this->AH23_Summ_grn(),$this->AH24_Summ_grn(),$this->AH26_Summ_grn(),$this->AH27_Summ_grn(),$this->AH28_Summ_grn()),0);
    }
    function AH31_StoroniItogo_grn()
    {//умножение
        return $this->AH30_Summ4Stor_grn()*$this->V7_4Storony();
    }
//ШИРИНА ПЛЕНКИ 1,22 М
    function AF36_BolStorDo30sm1StorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V36_BolchaaStoronaDo30smFlag();
    }
    function AF37_BolStor31Tire60sm1StorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V37_BolchaaStorona31Tire60smFlag();
    }
    function AF38_BolStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V38_BolchaaStorona61Tire120smFlag();
    }
    function AF40_MenStorDo30sm1StorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V40_MenchaaStoronaDo30smFlag();
    }
    function AF41_MenlStor31Tire60sm1StorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V41_MenchaaStorona31Tire60smFlag();
    }
    function AF42_MenStor61Tire120sm1StorStorRes_grn()
    {//умножение
        return 4*$this->V11_Perimetr_m() * $this->R15_Porezka1mp_grn*$this->V42_MenchaaStorona61Tire120smFlag();
    }
    function AF44_MenchaaStorona121Tire150smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2)*4 * $this->R15_Porezka1mp_grn * $this->V44_MenchaaStorona121Tire150smFlag();
    }
    function AF45_MenchaaStorona151Tire154smRez_grn()
    {        //сложение и умножение
        //вывод
        return ($this->V11_Perimetr_m() + $this->V9_BolchaaStorona_m() * 2)*4 * $this->R15_Porezka1mp_grn * $this->V45_MenchaaStorona151Tire154smFlag();
    }
    function AG36_BolchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V36_BolchaaStoronaDo30smFlag()*1.22;
    }
    function AG37_BolchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V37_BolchaaStorona31Tire60smFlag()*1.22;
    }
    function AG38_BolchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 4 * $this->V10_MenchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V38_BolchaaStorona61Tire120smFlag()*1.22;
    }
    function AG40_MenchaaStoronaDo30smPlen_grn()
    {
        //умножение
        //вывод
        return 1 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V40_MenchaaStoronaDo30smFlag()*1.22;
    }
    function AG41_MenchaaStorona31Tire60smPlen_grn()
    {
        //умножение
        //вывод
        return 2 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V41_MenchaaStorona31Tire60smFlag()*1.22;
    }
    function AG42_MenchaaStorona61Tire120smPlen_grn()
    {
        //умножение
        //вывод
        return 4 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V42_MenchaaStorona61Tire120smFlag()*1.22;
    }
    function AG44_MenchaaStorona121Tire150smPlen_grn()
    {
        // умножение
        //вывод
        return 5 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V44_MenchaaStorona121Tire150smFlag()*1.22;
    }
    function AG45_MenchaaStorona151Tire154smPlen_grn()
    {
        //умножение
        //вывод
        return 6 * $this->V9_BolchaaStorona_m() * $this->R14_PlenkaRitramaek1m2_grn * $this->V45_MenchaaStorona151Tire154smFlag()*1.22;
    }
    function AH36_Summ_grn()
    {//сумма
        return $this->AF36_BolStorDo30sm1StorRes_grn()+$this->AG36_BolchaaStoronaDo30smPlen_grn();
    }
    function AH37_Summ_grn()
    {//сумма
        return $this->AF37_BolStor31Tire60sm1StorRes_grn()+$this->AG37_BolchaaStorona31Tire60smPlen_grn();
    }
    function AH38_Summ_grn()
    {//сумма
        return $this->AF38_BolStor61Tire120sm1StorStorRes_grn()+$this->AG38_BolchaaStorona61Tire120smPlen_grn();
    }
    function AH40_Summ_grn()
    {//сумма
        return $this->AF40_MenStorDo30sm1StorRes_grn()+$this->AG40_MenchaaStoronaDo30smPlen_grn();
    }
    function AH41_Summ_grn()
    {//сумма
        return $this->AF41_MenlStor31Tire60sm1StorRes_grn()+$this->AG41_MenchaaStorona31Tire60smPlen_grn();
    }
    function AH42_Summ_grn()
    {//сумма
        return $this->AF42_MenStor61Tire120sm1StorStorRes_grn()+$this->AG42_MenchaaStorona61Tire120smPlen_grn();
    }
    function AH44_Summ_grn()
    {//сумма
        return $this->AF44_MenchaaStorona121Tire150smRez_grn()+$this->AG44_MenchaaStorona121Tire150smPlen_grn();
    }
    function AH45_Summ_grn()
    {//сумма
        return $this->AF45_MenchaaStorona151Tire154smRez_grn()+$this->AG45_MenchaaStorona151Tire154smPlen_grn();
    }
    function AH47_Summ4Stor_grn()
    {
        return round (min($this->AH36_Summ_grn(),$this->AH37_Summ_grn(),$this->AH38_Summ_grn(), $this->AH40_Summ_grn(),$this->AH41_Summ_grn(),$this->AH42_Summ_grn(),$this->AH44_Summ_grn(),$this->AH45_Summ_grn()),0);
    }
    function AH48_StoroniItogo_grn()
    {//умножение
        return $this->AH47_Summ4Stor_grn()*$this->V7_4Storony();
    }
    function AJ31_Itogo1m_grn()
    {//сумма
        return $this->Z31_StoronaItogo_grn()+$this->AD31_StoroniItogo_grn()+$this->AH31_StoroniItogo_grn();
    }
    function AJ48_Itogo1Tochka22m_grn()
    {//сумма
        return $this->Z48_StoronaItogo_grn()+$this->AD48_StoroniItogo_grn()+$this->AH48_StoroniItogo_grn();
    }
function AJ50_ItogoPlenkaPlusPorezkaPlusPerarasxod()
{
    return  round (min($this->AJ31_Itogo1m_grn(),$this->AJ48_Itogo1Tochka22m_grn())*L10_BB85_K_PererashPlenkFasad,0);
}
function AM24_Itogo_grn()
{
    return $this->AJ50_ItogoPlenkaPlusPorezkaPlusPerarasxod();
}


}