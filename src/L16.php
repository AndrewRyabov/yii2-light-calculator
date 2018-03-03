<?php namespace almaz44\light\calculator;
include_once __DIR__ . '/L10.php';

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 27.06.2017
 * Time: 16:34
 */
class L16_1
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

    public function __construct($RoofVisorOut = 0, $WallOut = 0, $WallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $BigStor = 300, $SmallStor = 60,
                                $PlastikLicevoy = 1)

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

class L16_2
{
    // Входные параметры:
    public $S5_RoofVisorOut; // крыша/козырек улица
    public $S6_WallOut; // стена улица
    public $S7_WallIn; // стена помещение
    public $S8_2SideIn; // 2 стороны помещение
    public $S9_4SideIn; // 4 стороны помещение

    public $S11_Orientation; // ориентация
    public $S12_MaxSide_cm; // большая сторона, см
    public $S13_MinSide_cm; // меньшая сторона, см

    public $S15_PlastLic; // пластик лицевой


    public function __construct($RoofVisorOut = 0, $WallOut = 0, $WallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $Orientation = 1,
                                $MaxSide_cm = 300, $MinSide_cm = 60,
                                $PlastLic = 1)
    {
        // Заполнение входных данных.
        $this->S5_RoofVisorOut = $RoofVisorOut;
        $this->S6_WallOut = $WallOut;
        $this->S7_WallIn = $WallIn;
        $this->S8_2SideIn = $SideIn2;
        $this->S9_4SideIn = $SideIn4;

        $this->S11_Orientation = $Orientation;
        $this->S12_MaxSide_cm = $MaxSide_cm;
        $this->S13_MinSide_cm = $MinSide_cm;

        $this->S15_PlastLic = $PlastLic;

    }

    // C light - пленка борт/тыл

    function V5_FasadPolik()
    {

        //фасад - полик
        //если S15_PlastLic = 1, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->S15_PlastLic == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V6_FasadAkril()
    {

        //фасад - акрил
        //если S15_PlastLic = 2, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->S15_PlastLic == 2)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V8_Ulica()
    {

        //улица
        //если условие = 0, то вывести 1
        //иначе - вывести 0
        //вывод

        if (($this->S7_WallIn + $this->S8_2SideIn + $this->S9_4SideIn) == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V9_Pomesh()
    {

        //помещение
        //если $this->V8_Ulica() = 0, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->V8_Ulica() == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V11_1Stor()
    {

        //1 сторона
        //если условие true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->S5_RoofVisorOut == 1 or $this->S6_WallOut == 1 or $this->S7_WallIn == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function V12_2Stor()
    {

        //2 стороны
        //значение
        //вывод

        return $this->S8_2SideIn;
    }
    function V13_4Stor()
    {

        //4 стороны
        //значение
        //вывод

        return $this->S9_4SideIn;
    }
    function Y5_BolshRm()
    {

        //больший размер, м
        //деление и округление
        //вывод

        return round ($this->S12_MaxSide_cm/100, 2);
    }
    function Y6_MenshRm()
    {

        //меньший размер, м
        //деление и округление
        //вывод

        return round ($this->S13_MinSide_cm/100, 2);
    }
    function Y7_GorisRasm()
    {

        //горизонтальный размер, м
        //если условие true, то вывести $this->y5_BolshRm()
        //иначе - вывести $this->y6_MenshRm()
        //вывод

        if ($this->S11_Orientation == 1)
        {
            return $this->Y5_BolshRm();
        }
        else
        {
            return $this->Y6_MenshRm();
        }
    }
    function Y8_VerticalRasm()
    {

        //вертикальный размер, м
        //если условие true, то вывести $this->Y5_BolshRm()
        //иначе - вывести $this->Y6_MenshRm()
        //вывод

        if ($this->S11_Orientation == 2)
        {
            return $this->Y5_BolshRm();
        }
        else
        {
            return $this->Y6_MenshRm();
        }
    }
    function Y9_Perimrtrm()
    {

        //периметр, м
        //прибавление
        //вывод

        return $this->Y5_BolshRm()+$this->Y6_MenshRm()+$this->Y5_BolshRm()+$this->Y6_MenshRm();
    }
    function Y10_4Uglam()
    {

        //4 угла, м
        //прибавление и умножение
        //вывод

        return 0.48 + 0.48*$this->S8_2SideIn;
    }
    function Y11_Perim4Bortm()
    {

        //периметр 4 бортов, м
        //прибавление и умножение
        //вывод

        return $this->Y9_Perimrtrm()*2+$this->Y10_4Uglam();
    }
    function Y14_Stoim1m2PVH5mmgrn()
    {

        //стоимость 1 м2 пвх 5 мм, грн
        //значение
        //вывод

        return L10_J25_PVH_5mmS;
    }
    function Z14_Stoim1m2PVH5mmgrn()
    {

        //стоимость 1 м2 пвх 5 мм, грн
        //значение
        //вывод

        return L10_L25_PVH_5mmP;
    }
    function Y15_Stoim1m2PVH4mmgrn()
    {

        //стоимость 1 м2 пвх 4 мм, грн
        //значение
        //вывод

        return L10_J24_PVH_4mmS;
    }
    function Z15_Stoim1m2PVH4mmgrn()
    {

        //стоимость 1 м2 пвх 4 мм, грн
        //значение
        //вывод

        return L10_L24_PVH_4mmP;
    }
    function Y16_Stoim1m2PVHBortgrn()
    {

        //стоимость 1 м2 пвх борт, грн
        //арифметические действия
        //вывод

        return $this->Y14_Stoim1m2PVH5mmgrn()*$this->V8_Ulica()+$this->Y15_Stoim1m2PVH4mmgrn()*$this->V9_Pomesh();
    }
    function Z16_Stoim1m2PVHBortgrn()
    {

        //стоимость 1 м2 пвх борт, грн
        //арифметические действия
        //вывод

        return $this->Z14_Stoim1m2PVH5mmgrn()*$this->V8_Ulica()+$this->Z15_Stoim1m2PVH4mmgrn()*$this->V9_Pomesh();
    }
    function Y17_PereeashPVH()
    {

        //перерасход пвх
        //значение
        //вывод

        return L10_BB6_K_PererashodPVH;
    }
    function Y18_Kley1mpOdnShvgrn()
    {

        //клей 1 мп одинарного шва, грн
        //значение
        //вывод

        return L10_K117_CosmofenPlusPVH_200mlSmp;
    }
    function Y19_Kley1Perimgrn()
    {

        //клей 1 периметр, грн
        //умножение
        //вывод

        return $this->Y18_Kley1mpOdnShvgrn()*$this->Y9_Perimrtrm();
    }
    function Y20_Kley4Uglagrn()
    {

        //клей 4 угла, грн
        //арифметические действия
        //вывод

        return 0.48*$this->Y18_Kley1mpOdnShvgrn()+0.48*$this->Y18_Kley1mpOdnShvgrn()*$this->V12_2Stor();
    }
    function Y22_UlicaBortm2()
    {

        //улица борт, м2
        //умножение
        //вывод

        return 0.14*$this->Y9_Perimrtrm()*$this->Y17_PereeashPVH();
    }
    function Z22_UlicaBortm2()
    {

        //улица борт, м2
        //умножение
        //вывод

        return 0.14*$this->Y9_Perimrtrm()*$this->Z14_Stoim1m2PVH5mmgrn();
    }
    function Y23_StenaPomeshBortm2()
    {

        //стена помещение борт, м2
        //умножение
        //вывод

        return 0.16*$this->Y9_Perimrtrm()*$this->Y17_PereeashPVH();
    }
    function Z23_StenaPomeshBortm2()
    {

        //стена помещение борт, м2
        //умножение
        //вывод

        return 0.16*$this->Y9_Perimrtrm()*$this->Z15_Stoim1m2PVH4mmgrn();
    }
    function Y24_2StorPomeshBortm2()
    {

        //2 стороны помещение борт. м2
        //умножение
        //вывод

        return 0.28*$this->Y9_Perimrtrm()*$this->Y17_PereeashPVH();
    }
    function Z24_2StorPomeshBortm2()
    {

        //2 стороны помещение борт. м2
        //умножение
        //вывод

        return 0.28*$this->Y9_Perimrtrm()*$this->Z15_Stoim1m2PVH4mmgrn();
    }
    function Y25_4StorPomeshBortm2()
    {

        //4 стороны помещение борт, м2
        //умножение
        //вывод

        return (0.14*$this->Y7_GorisRasm()+0.18*$this->Y8_VerticalRasm())*2*$this->Y17_PereeashPVH()*4;
    }
    function Z25_4StorPomeshBortm2()
    {

        //4 стороны помещение борт, м2
        //умножение
        //вывод

        return (0.14*$this->Y7_GorisRasm()+0.18*$this->Y8_VerticalRasm())*2*4*$this->Z15_Stoim1m2PVH4mmgrn();
    }
    function Y27_KrKozUlicaBortm2()
    {

        //крыша/козырек улица борт, м2
        //умножение
        //вывод

        return $this->Y22_UlicaBortm2()*$this->S5_RoofVisorOut;
    }
    function Z27_KrKozUlicaBortm2()
    {

        //крыша/козырек улица борт, м2
        //умножение
        //вывод

        return $this->Z22_UlicaBortm2()*$this->S5_RoofVisorOut;
    }
    function Y28_StenaUlicaBortm2()
    {

        //стена улица борт, м2
        //умножение
        //вывод

        return $this->Y22_UlicaBortm2()*$this->S6_WallOut;
    }
    function Z28_StenaUlicaBortm2()
    {

        //стена улица борт, м2
        //умножение
        //вывод

        return $this->Z22_UlicaBortm2()*$this->S6_WallOut;
    }
    function Y29_StenaPomeshBortm2()
    {

        //стена помещение борт, м2
        //умножение
        //вывод

        return $this->Y23_StenaPomeshBortm2()*$this->S7_WallIn;
    }
    function Z29_StenaPomeshBortm2()
    {

        //стена помещение борт, м2
        //умножение
        //вывод

        return $this->Z23_StenaPomeshBortm2()*$this->S7_WallIn;
    }
    function Y30_2StorPomeshBortm2()
    {

        //2 стороны помещение борт, м2
        //умножение
        //вывод

        return $this->Y24_2StorPomeshBortm2()*$this->S8_2SideIn;
    }
    function Z30_2StorPomeshBortm2()
    {

        //2 стороны помещение борт, м2
        //умножение
        //вывод

        return $this->Z24_2StorPomeshBortm2()*$this->S8_2SideIn;
    }
    function Y31_4StorPomeshBortm2()
    {

        //4 стороны помещение борт, м2
        //умножение
        //вывод

        return $this->Y25_4StorPomeshBortm2()*$this->S9_4SideIn;
    }
    function Z31_4StorPomeshBortm2()
    {

        //4 стороны помещение борт, м2
        //умножение
        //вывод

        return $this->Z25_4StorPomeshBortm2()*$this->S9_4SideIn;
    }
    function Y32_PVHPlastBortm2()
    {

        //пвх пластик борт, м2
        //прибавление
        //вывод

        return $this->Y27_KrKozUlicaBortm2()+$this->Y28_StenaUlicaBortm2()+$this->Y29_StenaPomeshBortm2()+
               $this->Y30_2StorPomeshBortm2()+$this->Y31_4StorPomeshBortm2();
    }
    function Z32_PVHPlastBortm2()
    {

        //пвх пластик борт, м2
        //прибавление
        //вывод

        return $this->Z27_KrKozUlicaBortm2()+$this->Z28_StenaUlicaBortm2()+$this->Z29_StenaPomeshBortm2()+
               $this->Z30_2StorPomeshBortm2()+$this->Z31_4StorPomeshBortm2();
    }
    function Y34_KrRozUlicaBortgrn()
    {

        //крыша/козырек улица борт, грн
        //умножение
        //вывод

        return $this->Y22_UlicaBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S5_RoofVisorOut;
    }
    function Y35_StenaUlicaBortgrn()
    {

        //стена улица борт, грн
        //умножение
        //вывод

        return $this->Y22_UlicaBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S6_WallOut;
    }
    function Y36_StenaPomeshBortgrn()
    {

        //стена помещение борт, грн
        //умножение
        //вывод

        return $this->Y23_StenaPomeshBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S7_WallIn;
    }
    function Y37_2StorPomeshBortgrn()
    {

        //2 стороны помещение борт, грн
        //умножение
        //вывод

        return $this->Y24_2StorPomeshBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S8_2SideIn;
    }
    function Y38_4StorPomeshBortgrn()
    {

        //4 стороны помещение борт, грн
        //умножение
        //вывод

        return $this->Y25_4StorPomeshBortm2()*$this->Y16_Stoim1m2PVHBortgrn()*$this->S9_4SideIn;
    }
    function Y39_PVHPlastBortgrn()
    {

        //пвх пластик борт, грн
        //округление и прибавление
        //вывод

        return round($this->Y34_KrRozUlicaBortgrn()+$this->Y35_StenaUlicaBortgrn()+$this->Y36_StenaPomeshBortgrn()+
                     $this->Y37_2StorPomeshBortgrn()+$this->Y38_4StorPomeshBortgrn(), 0);
    }
    function Y41_KleyKrKozgrn()
    {

        //клей крыша/козырек, грн
        //прибавление и умножение
        //вывод

        return ($this->Y19_Kley1Perimgrn()+$this->Y20_Kley4Uglagrn())*$this->S5_RoofVisorOut;
    }
    function Y42_KleyStenaUlicagrn()
    {

        //клей стена улица, грн
        //прибавление и умножение
        //вывод

        return ($this->Y19_Kley1Perimgrn()+$this->Y20_Kley4Uglagrn())*$this->S6_WallOut;
    }
    function Y43_KleyStenaPomeshgrn()
    {

        //клей стена помещение, грн
        //прибавление и умножение
        //вывод

        return ($this->Y19_Kley1Perimgrn()*2+$this->Y20_Kley4Uglagrn())*$this->S7_WallIn;
    }
    function Y44_Kley2StorPomeshgrn()
    {

        //клей 2 стороны помещение, грн
        //прибавление и умножение
        //вывод

        return ($this->Y19_Kley1Perimgrn()*2+$this->Y20_Kley4Uglagrn())*$this->S8_2SideIn;
    }
    function Y45_Kley4StorPomeshgrn()
    {

        //клей 4 стороны помещение, грн
        //прибавление и умножение
        //вывод

        return ($this->Y19_Kley1Perimgrn()*2+$this->Y20_Kley4Uglagrn())*4*$this->S9_4SideIn;
    }
    function Y46_Kleygrn()
    {

        //клей грн
        //прибавление и умножение
        //вывод

        return $this->Y41_KleyKrKozgrn()+$this->Y42_KleyStenaUlicagrn()+$this->Y43_KleyStenaPomeshgrn()+
               $this->Y44_Kley2StorPomeshgrn()+$this->Y45_Kley4StorPomeshgrn();
    }
    function AC5_VirezRust1Permin()
    {

        //вырезать руст 1 периметр, мин
        //умножение
        //вывод

        return $this->Y9_Perimrtrm()*L10_BT8_PVHPogonaj_1mp;
    }
    function AC6_Virez4PVHBortmin()
    {

        //вырезать 4 пвх борта, мин
        //умножение
        //вывод

        return $this->Y11_Perim4Bortm()*L10_BT6_RaskrAkrylPryamougl_1mp;
    }
    function AC7_VkleyRust1Permin()
    {

        //вклеить руст 1 периметр, мин
        //умножение
        //вывод

        return $this->Y9_Perimrtrm()*L10_BT14_SborkaKleyShva_1mp;
    }
    function AC8_SobrNaKley4Bortmin()
    {

        //собрать на клею 4 борта, мин
        //умножение
        //вывод

        return $this->Y10_4Uglam()*2*L10_BT14_SborkaKleyShva_1mp;
    }
    function AC10_KrKozUlicaBortmin()
    {

        //крыша/козырек улица борт, мин
        //прибавление и умножение
        //вывод

        return $this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()+$this->AC5_VirezRust1Permin()*
                                                                           $this->V5_FasadPolik()+$this->AC8_SobrNaKley4Bortmin()+$this->AC7_VkleyRust1Permin()+
               $this->AC7_VkleyRust1Permin()*$this->V5_FasadPolik();
    }
    function AC11_StenaUlicaBortmin()
    {

        //стена улица борт, мин
        //прибавление и умножение
        //вывод

        return $this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()+$this->AC5_VirezRust1Permin()*
                                                                           $this->V5_FasadPolik()+$this->AC8_SobrNaKley4Bortmin()+$this->AC7_VkleyRust1Permin()+
               $this->AC7_VkleyRust1Permin()*$this->V5_FasadPolik();
    }
    function AC12_StenaPomeshBortmin()
    {

        //стена помещение борт, мин
        //прибавление и умножение
        //вывод

        return $this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()*2+$this->AC5_VirezRust1Permin()*2*
                                                                             $this->V5_FasadPolik()+$this->AC8_SobrNaKley4Bortmin()+$this->AC7_VkleyRust1Permin()*2+
               $this->AC7_VkleyRust1Permin()*2*$this->V5_FasadPolik();
    }
    function AC13_2StorPomeshBortmin()
    {

        //2 стороны помещение борт, мин
        //прибавление и умножение
        //вывод

        return $this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()*2+$this->AC5_VirezRust1Permin()*2*
                                                                             $this->V5_FasadPolik()+$this->AC8_SobrNaKley4Bortmin()+$this->AC7_VkleyRust1Permin()*2+
               $this->AC7_VkleyRust1Permin()*2*$this->V5_FasadPolik();
    }
    function AC14_4StorPomeshBortmin()
    {

        //4 стороны помещение борт, мин
        //прибавление и умножение
        //вывод

        return ($this->AC6_Virez4PVHBortmin()+$this->AC5_VirezRust1Permin()*2+$this->AC8_SobrNaKley4Bortmin()+
                $this->AC7_VkleyRust1Permin()*2)*4;
    }
    function AC16_KrKozUlicaBortmin()
    {

        //крыша/козырек улица борт, мин
        //умножение
        //вывод

        return $this->AC10_KrKozUlicaBortmin()*$this->S5_RoofVisorOut;
    }
    function AC17_StenaUlicaBortmin()
    {

        //стена улица борт, мин
        //умножение
        //вывод

        return $this->AC11_StenaUlicaBortmin()*$this->S6_WallOut;
    }
    function AC18_StenaPomeshBortmin()
    {

        //стена помещение борт, мин
        //умножение
        //вывод

        return $this->AC12_StenaPomeshBortmin()*$this->S7_WallIn;
    }
    function AC19_2StorPomeshBortmin()
    {

        //2 стороны помещение борт, мин
        //умножение
        //вывод

        return $this->AC13_2StorPomeshBortmin()*$this->S8_2SideIn;
    }
    function AC20_4StorPomeshBortmin()
    {

        //4 стороны помещение борт, мин
        //умножение
        //вывод

        return $this->AC14_4StorPomeshBortmin()*$this->S9_4SideIn;
    }
    function AC21_SobrPVHBortmin()
    {

        //собрать пвх борт, мин
        //прибавление
        //вывод

        return $this->AC16_KrKozUlicaBortmin()+$this->AC17_StenaUlicaBortmin()+$this->AC18_StenaPomeshBortmin()+
               $this->AC19_2StorPomeshBortmin()+$this->AC20_4StorPomeshBortmin();
    }
    function AF5_PVHPlastm2()
    {

        //пвх пластик, м2
        //округление
        //вывод

        return round($this->Y32_PVHPlastBortm2(), 1);
    }
    function AF6_StoimMatgrn()
    {

        //стоимость материалов, грн
        //округление и прибавление
        //вывод

        return round($this->Y39_PVHPlastBortgrn()+$this->Y46_Kleygrn(), 0);
    }
    function AF10_TrudBortgrn()
    {

        //трудоемкость борт , мин
        //округление
        //вывод

        return round($this->AC21_SobrPVHBortmin(), 0);
    }
    function AF11_StoimRabgrn()
    {

        //стоимость работы, грн
        //округление и умножение
        //вывод

        return round($this->AF10_TrudBortgrn()*L10_C67_K1, 0);
    }
    function AF22_Veskg()
    {

        //вес, кг
        //округление
        //вывод

        return round($this->Z32_PVHPlastBortm2(), 1);
    }
    function AF24_StoimRabgrn()
    {

        //итого, грн
        //прибавление
        //вывод

        return $this->AF6_StoimMatgrn()+$this->AF11_StoimRabgrn();
    }
}

class L16_3
{
    // Входные параметры:
    public $AJ5_RoofVisorOut; // крыша/козырек улица
    public $AJ6_WallOut; // стена улица
    public $AJ7_WallIn; // стена помещение
    public $AJ8_2SideIn; // 2 стороны помещение
    public $AJ9_4SideIn; // 4 стороны помещение

    public $AJ11_MaxSide_cm; // большая сторона, см
    public $AJ12_MinSide_cm; // меньшая сторона, см


    public function __construct($RoofVisorOut= 0, $WallOut = 0, $WallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $MaxSide_cm = 300, $MinSide_cm = 60)

    {
        // Заполнение входных данных.
        $this->AJ5_RoofVisorOut = $RoofVisorOut;
        $this->AJ6_WallOut = $WallOut;
        $this->AJ7_WallIn = $WallIn;
        $this->AJ8_2SideIn = $SideIn2;
        $this->AJ9_4SideIn = $SideIn4;

        $this->AJ11_MaxSide_cm = $MaxSide_cm;
        $this->AJ12_MinSide_cm = $MinSide_cm;

    }

    // C light - пленка борт/тыл

    function AM5_Ulica()
    {

        //улица
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if (($this->AJ7_WallIn+$this->AJ8_2SideIn+$this->AJ9_4SideIn)==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM6_Pomesh()
    {

        //помещение
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AM5_Ulica()==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AP6_MenshRazm()
    {

        //меньший размер, м
        //деление и округление
        //вывод

        return round($this->AJ12_MinSide_cm/100, 2);
    }
    function AM8_PVHKrisha5mm()
    {

        //пвх крыша 5 мм
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AP6_MenshRazm()>L10_BB19_K_PVHPerehTolsh45KK_m)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM9_PVHKrisha4mm()
    {

        //пвх крыша 4 мм
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AM8_PVHKrisha5mm()==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM10_PVHUlica4mm()
    {

        //пвх улица 4 мм
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AP6_MenshRazm()>L10_BB17_K_PVHPerehTolsh34Ulica_m)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM11_PVHUlica3mm()
    {

        //пвх улица 3 мм
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AM10_PVHUlica4mm()==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM13_TillPVH()
    {

        //тыл - пвх
        //если условие = true, то вывести 0
        //иначе - вывести 1
        //вывод

        if ($this->AJ5_RoofVisorOut+$this->AJ6_WallOut>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM14_PVHBort()
    {

        //пвх бортик
        //если условие = true, то вывести 1
        //иначе - вывести 0
        //вывод

        if ($this->AJ7_WallIn+$this->AJ9_4SideIn>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AM16_TillPVH5mm()
    {

        //тыл пвх 5 мм
        //умножение
        //вывод

        return $this->AJ5_RoofVisorOut*$this->AM8_PVHKrisha5mm();
    }
    function AM17_TillPVH4mm()
    {

        //тыл пвх 4 мм
        //умножение и прибавление
        //вывод

        return $this->AJ5_RoofVisorOut*$this->AM9_PVHKrisha4mm()+$this->AJ6_WallOut*$this->AM10_PVHUlica4mm();
    }
    function AM18_TillPVH3mm()
    {

        //тыл пвх 3 мм
        //умножение и прибавление
        //вывод

        return $this->AJ6_WallOut*$this->AM11_PVHUlica3mm();
    }
    function AP5_BolshRasm()
    {

        //больший размер, м
        //деление и округление
        //вывод

        return round($this->AJ11_MaxSide_cm/100, 2);
    }
    function AP6_MenshRasm()
    {

        //меньший размер, м
        //деление и округление
        //вывод

        return round($this->AJ12_MinSide_cm/100, 2);
    }
    function AP7_PerimTillmp()
    {

        //периметр тыла, мп
        //прибавление
        //вывод

        return $this->AP5_BolshRasm()+$this->AP6_MenshRasm()+$this->AP5_BolshRasm()+$this->AP6_MenshRasm();
    }
    function AP8_PloshTillm2()
    {

        //площадь тыла, м2
        //умножение
        //вывод

        return $this->AP5_BolshRasm()*$this->AP6_MenshRasm();
    }
    function AP9_PVH5mm1m2grn()
    {

        //пвх 5 мм 1 м2, грн
        //значение
        //вывод

        return L10_J25_PVH_5mmS;
    }
    function AQ9_PVH5mm1m2grn()
    {

        //пвх 5 мм 1 м2, грн
        //значение
        //вывод

        return L10_L25_PVH_5mmP;
    }
    function AP10_PVH4mm1m2grn()
    {

        //пвх 4 мм 1 м2, грн
        //значение
        //вывод

        return L10_J24_PVH_4mmS;
    }
    function AQ10_PVH4mm1m2grn()
    {

        //пвх 4 мм 1 м2, грн
        //значение
        //вывод

        return L10_L24_PVH_4mmP;
    }
    function AP11_PVH3mm1m2grn()
    {

        //пвх 3 мм 1 м2, грн
        //значение
        //вывод

        return L10_J23_PVH_3mmS;
    }
    function AQ11_PVH3mm1m2grn()
    {

        //пвх 3 мм 1 м2, грн
        //значение
        //вывод

        return L10_L23_PVH_3mmP;
    }
    function AP12_DVP3mm1m2grn()
    {

        //двп 3 мм 1 м2, грн
        //значение
        //вывод

        return round (L10_J28_DVPWhiteS, 0);
    }
    function AQ12_DVP3mm1m2grn()
    {

        //двп 3 мм 1 м2, грн
        //значение
        //вывод

        return round (L10_L28_DVPWhiteP, 0);
    }
    function AP13_PererashPVH()
    {

        //перерасход пвх
        //значение
        //вывод

        return L10_BB6_K_PererashodPVH;
    }
    function AP14_PererashDVP()
    {

        //перерасход двп
        //значение
        //вывод

        return L10_BB9_K_PererashodDVP;
    }
    function AP16_Stoim1mpKleygrn()
    {

        //стоимость 1 мп клея, грн
        //значение
        //вывод

        return L10_K117_CosmofenPlusPVH_200mlSmp;
    }
    function AP17_Kley1Perimgrn()
    {

        //клей 1 периметр, грн
        //умножение
        //вывод

        return $this->AP16_Stoim1mpKleygrn()*$this->AP7_PerimTillmp();
    }
    function AP18_Stoim1Samorez()
    {

        //стоимость 1 самореза
        //значение
        //вывод

        return L10_AR42_Samorez19ZnBur;
    }
    function AP19_KolvoSamorezNa1mpsht()
    {

        //количество саморезов на 1 мп, шт
        //значение
        //вывод

        return L10_BB60_K_KolSamorezVZadStShtMp;
    }
    function AP20_KolvoSamorezV1Perimsht()
    {

        //кол саморезов в 1 периметре, шт
        //умножение и округление
        //вывод

        return round ($this->AP7_PerimTillmp()*$this->AP19_KolvoSamorezNa1mpsht(), 0);
    }
    function AP21_StoimSamorez1Perimgrn()
    {

        //стоимость саморезов 1 перим., грн
        //умножение
        //вывод

        return $this->AP20_KolvoSamorezV1Perimsht()*$this->AP18_Stoim1Samorez();
    }
    function AP23_PVHBort5mmPlusRustm2()
    {

        //пвх бортик (5 мм) + руст, м2
        //умножение
        //вывод

        return 0.04*$this->AP13_PererashPVH()*$this->AP7_PerimTillmp();
    }
    function AQ23_PVHBort5mmPlusRustm2()
    {

        //пвх бортик (5 мм) + руст, м2
        //умножение
        //вывод

        return 0.04*$this->AQ9_PVH5mm1m2grn()*$this->AP7_PerimTillmp();
    }
    function AP24_PVHBort5mmPlusRustgrn()
    {

        //пвх бортик (5 мм) + руст, грн
        //умножение
        //вывод

        return $this->AP23_PVHBort5mmPlusRustm2()*$this->AP9_PVH5mm1m2grn();
    }
    function AP26_PVHTillKrishagrn()
    {

        //пвх тыл крыша, грн
        //умножение и прибавление
        //вывод

        return ($this->AP9_PVH5mm1m2grn()*$this->AM8_PVHKrisha5mm()+$this->AP10_PVH4mm1m2grn()*$this->AM9_PVHKrisha4mm())
               *$this->AP8_PloshTillm2()*$this->AP13_PererashPVH();
    }
    function AQ26_PVHTillKrishagrn()
    {

        //пвх тыл крыша, грн
        //умножение и прибавление
        //вывод

        return ($this->AQ9_PVH5mm1m2grn()*$this->AM8_PVHKrisha5mm()+$this->AQ10_PVH4mm1m2grn()*$this->AM9_PVHKrisha4mm())
               *$this->AP8_PloshTillm2();
    }
    function AP27_PVHTillUlicagrn()
    {

        //пвх тыл улица, грн
        //умножение и прибавление
        //вывод

        return ($this->AP10_PVH4mm1m2grn()*$this->AM10_PVHUlica4mm()+$this->AP11_PVH3mm1m2grn()*$this->AM11_PVHUlica3mm())*$this->AP8_PloshTillm2()*$this->AP13_PererashPVH();
    }
    function AQ27_PVHTillUlicagrn()
    {

        //пвх тыл улица, грн
        //умножение и прибавление
        //вывод

        return ($this->AQ10_PVH4mm1m2grn()*$this->AM10_PVHUlica4mm()+$this->AQ11_PVH3mm1m2grn()*$this->AM11_PVHUlica3mm())*$this->AP8_PloshTillm2();
    }
    function AP28_PVH4TillPomeshgrn()
    {

        //пвх 4 тыла помещение, грн
        //умножение и прибавление
        //вывод

        return $this->AP12_DVP3mm1m2grn()*$this->AP8_PloshTillm2()*$this->AP14_PererashDVP()*4;
    }
    function AQ28_PVH4TillPomeshgrn()
    {

        //пвх 4 тыла помещение, грн
        //умножение и прибавление
        //вывод

        return $this->AQ12_DVP3mm1m2grn()*$this->AP8_PloshTillm2()*4;
    }
    function AP29_DVPTillPomeshgrn()
    {

        //двп тыл помещение, грн
        //умножение
        //вывод

        return $this->AP12_DVP3mm1m2grn()*$this->AP8_PloshTillm2()*$this->AP14_PererashDVP();
    }
    function AQ29_DVPTillPomeshgrn()
    {

        //двп тыл помещение, грн
        //умножение
        //вывод

        return $this->AQ12_DVP3mm1m2grn()*$this->AP8_PloshTillm2();
    }
    function AP31_TillBezBortgrn()
    {

        //тыл без борта, грн
        //умножение и прибавление
        //вывод

        return $this->AP26_PVHTillKrishagrn()*$this->AJ5_RoofVisorOut+$this->AP27_PVHTillUlicagrn()*$this->AJ6_WallOut+$this->AP29_DVPTillPomeshgrn()*$this->AJ7_WallIn+$this->AP28_PVH4TillPomeshgrn()*$this->AJ9_4SideIn;
    }
    function AQ31_TillBezBortgrn()
    {

        //тыл без борта, грн
        //умножение и прибавление
        //вывод

        return $this->AQ26_PVHTillKrishagrn()*$this->AJ5_RoofVisorOut+$this->AQ27_PVHTillUlicagrn()*$this->AJ6_WallOut+$this->AQ29_DVPTillPomeshgrn()*$this->AJ7_WallIn+$this->AQ28_PVH4TillPomeshgrn()*$this->AJ9_4SideIn;
    }
    function AP32_TillPlusPVHBortEEgrn()
    {

        //тыл + пвх борт (если есть), грн
        //умножение и прибавление
        //вывод

        return $this->AP31_TillBezBortgrn()+$this->AP24_PVHBort5mmPlusRustgrn()*$this->AM14_PVHBort();
    }
    function AQ32_TillPlusPVHBortEEgrn()
    {

        //тыл + пвх борт (если есть), грн
        //умножение и прибавление
        //вывод

        return $this->AQ31_TillBezBortgrn()+$this->AQ23_PVHBort5mmPlusRustm2()*$this->AM14_PVHBort();
    }
    function AP34_KleyKrishagrn()
    {

        //клей крыша, грн
        //умножение и прибавление
        //вывод

        return $this->AP17_Kley1Perimgrn()*2*$this->AJ5_RoofVisorOut;
    }
    function AP35_KleyUlicagrn()
    {

        //клей улица, грн
        //умножение и прибавление
        //вывод

        return $this->AP17_Kley1Perimgrn()*2*$this->AJ6_WallOut;
    }
    function AP36_Kley4StorPomeshgrn()
    {

        //клей 4 стороны помещение, грн
        //умножение и прибавление
        //вывод

        return $this->AP17_Kley1Perimgrn()*4*$this->AJ9_4SideIn;
    }
    function AP37_Kleygrn()
    {

        //клей, грн
        //прибавление
        //вывод

        return $this->AP34_KleyKrishagrn()+$this->AP35_KleyUlicagrn()+$this->AP36_Kley4StorPomeshgrn();
    }
    function AP39_SamorezKrishagrn()
    {

        //саморезы крыша, грн
        //умножение
        //вывод

        return $this->AP21_StoimSamorez1Perimgrn()*$this->AJ5_RoofVisorOut;
    }
    function AP40_SamorezUlicagrn()
    {

        //саморезы улица, грн
        //умножение
        //вывод

        return $this->AP21_StoimSamorez1Perimgrn()*$this->AJ6_WallOut;
    }
    function AP41_SamorezPomeshgrn()
    {

        //саморезы помещение, грн
        //умножение
        //вывод

        return $this->AP21_StoimSamorez1Perimgrn()*$this->AJ7_WallIn;
    }
    function AP42_Samorezgrn()
    {

        //саморезы, грн
        //прибавление
        //вывод

        return $this->AP39_SamorezKrishagrn()+$this->AP40_SamorezUlicagrn()+$this->AP41_SamorezPomeshgrn();
    }
    function AT5_Virez1mpTillmin()
    {

        //вырезать 1 мп тыла, мин
        //значение
        //вывод

        return L10_BT7_RaskrPVHPolykPryamougl_1mp;
    }
    function AT6_Virez1Tillmin()
    {

        //вырезать 1 тыл, мин
        //умножение
        //вывод

        return $this->AT5_Virez1mpTillmin()*$this->AP7_PerimTillmp();
    }
    function AT7_PogonRez1mpmin()
    {

        //погонаж резать 1 мп, мин
        //значение
        //вывод

        return L10_BT8_PVHPogonaj_1mp;
    }
    function AT8_Pogon1Perimmin()
    {

        //погонаж 1 периметр, мин
        //умножение
        //вывод

        return $this->AT7_PogonRez1mpmin()*$this->AP7_PerimTillmp();
    }
    function AT10_1mpKleyShvamin()
    {

        //1 мп клеевого шва, мин
        //значение
        //вывод

        return L10_BT14_SborkaKleyShva_1mp;
    }
    function AT11_1PerimKleyShvamin()
    {

        //1 периметр клеевого шва, мин
        //умножение
        //вывод

        return $this->AT10_1mpKleyShvamin()*$this->AP7_PerimTillmp();
    }
    function AT13_ObkatPVH1mpmin()
    {

        //обкатать пвх 1 мп, мин
        //значение
        //вывод

        return L10_BT16_ObkatkaKleyShvaPVH_1mp;
    }
    function AT14_ObkatPerimmin()
    {

        //обкатать периметр, мин
        //умножение
        //вывод

        return $this->AT13_ObkatPVH1mpmin()*$this->AP7_PerimTillmp();
    }
    function AT16_Vkrut1SamorezSermin()
    {

        //вкрутить 1 саморез (серия), мин
        //значение
        //вывод

        return L10_BT26_VkruchSeriiSamorezov_1sht;
    }
    function AT17_Vkrut1Perimmin()
    {

        //вкрутить 1 периметр, мин
        //умножение
        //вывод

        return $this->AT16_Vkrut1SamorezSermin()*$this->AP20_KolvoSamorezV1Perimsht();
    }
    function AT19_TillKrUlicamin()
    {

        //тыл крыша/улица, мин
        //умножение и прибавление
        //вывод

        return $this->AT6_Virez1Tillmin()+$this->AT8_Pogon1Perimmin()*2+$this->AT11_1PerimKleyShvamin()*2+$this->AT14_ObkatPerimmin()+$this->AT17_Vkrut1Perimmin();
    }
    function AT20_TillPomeshmin()
    {

        //тыл помещение, мин
        //прибавление
        //вывод

        return $this->AT6_Virez1Tillmin()+$this->AT17_Vkrut1Perimmin();
    }
    function AT21_PVH4TillPomeshmin()
    {

        //пвх 4 тыла помещение, мин
        //прибавление и умножение
        //вывод

        return ($this->AT6_Virez1Tillmin()+$this->AT11_1PerimKleyShvamin()+$this->AT14_ObkatPerimmin())*4;
    }
    function AT23_TillKrmin()
    {

        //тыл крыша, мин
        //умножение
        //вывод

        return $this->AT19_TillKrUlicamin()*$this->AJ5_RoofVisorOut;
    }
    function AT24_TillUlicamin()
    {

        //тыл улица, мин
        //умножение
        //вывод

        return $this->AT19_TillKrUlicamin()*$this->AJ6_WallOut;
    }
    function AT25_TillPomeshmin()
    {

        //тыл помещение, мин
        //умножение
        //вывод

        return $this->AT20_TillPomeshmin()*$this->AJ7_WallIn;
    }
    function AT26_PVH4TillPomeshmin()
    {

        //пвх 4 тыла помещение, мин
        //умножение
        //вывод

        return $this->AT21_PVH4TillPomeshmin()*$this->AJ9_4SideIn;
    }
    function AT27_SobrTillmin()
    {

        //собрать тыл, мин
        //прибавление
        //вывод

        return $this->AT23_TillKrmin()+$this->AT24_TillUlicamin()+$this->AT25_TillPomeshmin()+$this->AT26_PVH4TillPomeshmin();
    }
    function AW6_StoimMatgrn()
    {

        //стоимость материалов, грн
        //прибавление и округление
        //вывод

        return round ($this->AP32_TillPlusPVHBortEEgrn()+$this->AP37_Kleygrn()+$this->AP42_Samorezgrn(), 0);
    }
    function AW10_TrudTillgrn()
    {

        //трудоемкость тыл , мин
        //округление
        //вывод

        return round ($this->AT27_SobrTillmin(), 0);
    }
    function AW11_StoimRabgrn()
    {

        //стоимость работы, грн
        //округление и умножение
        //вывод

        return round ($this->AW10_TrudTillgrn()*L10_C67_K1, 0);
    }
    function AW15_TillPVH5mm()
    {

        //тыл пвх 5 мм
        //умножение
        //вывод

        return $this->AM16_TillPVH5mm();
    }
    function AW16_TillPVH4mm()
    {

        //тыл пвх 4 мм
        //умножение и прибавление
        //вывод

        return $this->AM17_TillPVH4mm();
    }
    function AW17_TillPVH3mm()
    {

        //тыл пвх 3 мм
        //умножение и прибавление
        //вывод

        return $this->AM18_TillPVH3mm();
    }
    function AW18_TillDVP()
    {

        //тыл двп
        //умножение и прибавление
        //вывод

        return $this->AM6_Pomesh();
    }
    function AW22_Veskg()
    {

        //вес, кг
        //округление
        //вывод

        return round($this->AQ32_TillPlusPVHBortEEgrn(),1);
    }
    function AW24_Itogogrn()
    {

        //итого, грн
        //округление и умножение
        //вывод

        return $this->AW6_StoimMatgrn()+$this->AW11_StoimRabgrn();
    }








}