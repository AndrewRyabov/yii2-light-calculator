<?php

/**
 * Created by PhpStorm.
 * User: Anrew
 * Date: 27.07.2017
 * Time: 10:48
 */
class L31
{
 // Входные параметры:
    public $B5_RoofVisorOut; // крыша/козырек улица
    public $B6_WallOut; // стена улица
    public $B7_WallIn; // стена помещение
    public $B8_2SideIn; // 2 стороны помещение
    public $B9_4SideIn; // 4 стороны помещение

    public $B11_Orientation; // ориентация
    public $B12_MaxSide_cm; // большая сторона, см
    public $B13_MinSide_cm; // меньшая сторона, см
    public $B14_Konstruct; // конструктив

    public $B16_Stoim_1sht_grn; // стоимость 1 шт, грн
    public $B17_Ves_kg; // вес, кг
    public $B18_Kolvo_sht; // количество вывесок, шт

    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $MaxSide_cm, $MinSide_cm, $Konstruct, $Stoim_1sht_grn,$Ves_kg, $Kolvo_sht)
  {
        // Заполнение входных данных.
      $this->B5_RoofVisorOut = $RoofVisorOut;
      $this->B6_WallOut = $WallOut;
      $this->B7_WallIn = $WallIn;
      $this->B8_2SideIn = $SideIn2;
      $this->B9_4SideIn = $SideIn4;

      $this->B11_Orientation = $Orientation;
      $this->B12_MaxSide_cm = $MaxSide_cm;
      $this->B13_MinSide_cm = $MinSide_cm;
      $this->B14_Konstruct = $Konstruct;

      $this->B16_Stoim_1sht_grn = $Stoim_1sht_grn;
      $this->B17_Ves_kg = $Ves_kg;
      $this->B18_Kolvo_sht = $Kolvo_sht;
  }

    // C light - пленка борт/тыл

    function E5_VivesRazb()
    {
        //вывеска разб (1-да/0-нет)
        //значение
        //вывод

        return $this->B14_Konstruct;

    }
    function E6_VivesNeRazb()
    {
        //вывеска неразб (1-да/0-нет)
        //если условие = true, то вывести 0
        //иначе вывести 1
        //вывод

        if($this->E5_VivesRazb()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }

    }
    function E8_VivesOdin12cm()
    {
        //вывеска одиночная 12 см
        //если условие = true, то вывести 0
        //иначе вывести 1
        //вывод

        if($this->B5_RoofVisorOut+$this->B6_WallOut+$this->B7_WallIn==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function E9_VivesOdin24cm()
    {
        //вывеска одиночная 24 см
        //значение
        //вывод

        return $this->B8_2SideIn;

    }
    function E10_Vives4StorNeRazb()
    {
        //вывеска 4 стор неразб
        //умножение
        //вывод

        return $this->B9_4SideIn*$this->E6_VivesNeRazb();

    }
    function E11_Vives4StorRazb()
    {
        //вывеска 4 стор разб
        //умножение
        //вывод

        return $this->B9_4SideIn*$this->E5_VivesRazb();

    }
    function E13_Vives1Or2Stor()
    {
        //выв 1 или 2 стор (1-да/0-нет)
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if($this->B5_RoofVisorOut+$this->B6_WallOut+$this->B7_WallIn+$this->B8_2SideIn==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function H5_BolshRazmDVPm()
    {
        //больший размер двп, м
        //алгебраические вычисления и округление
        //вывод

        return round(($this->B12_MaxSide_cm+5)/100,2);

    }
    function H6_MenshRazmDVPm()
    {
        //меньший размер двп, м
        //алгебраические вычисления и округление
        //вывод

        return round(($this->B13_MinSide_cm+5)/100,2);

    }
    function H7_FasadPloskoyKrishim2()
    {
        //фасад плоской вывески, м2
        //умножение
        //вывод

        return $this->H5_BolshRazmDVPm()*$this->H6_MenshRazmDVPm();

    }
    function H8_PerimPloskoyKrishimp()
    {
        //периметр плоской вывески, мп
        //прибавление
        //вывод

        return ($this->H5_BolshRazmDVPm()+$this->H6_MenshRazmDVPm())*2;

    }
    function H10_GorRazm()
    {
        //горизонтальный размер, м
        //если условие = true, то вывести H5
        //иначе вывести H6
        //вывод

        if($this->B11_Orientation==1)
        {
            return $this->H5_BolshRazmDVPm();
        }
        else
        {
            return $this->H6_MenshRazmDVPm();
        }

    }
    function H11_VerRazm()
    {
        //вертикальный размер, м
        //если условие = true, то вывести H6
        //иначе вывести H5
        //вывод

        if($this->B11_Orientation==1)
        {
            return $this->H6_MenshRazmDVPm();
        }
        else
        {
            return $this->H5_BolshRazmDVPm();
        }

    }
    function H12_Perim4StorVivesmp()
    {
        //периметр 4 стор вывески, мп
        //умножение
        //вывод

        return $this->H10_GorRazm()*4;

    }
    function H13_BokPlosh4StorVivm2()
    {
        //боковая площ 4 стор выв, м2
        //умножение
        //вывод

        return $this->H12_Perim4StorVivesmp()*$this->H11_VerRazm();

    }
    function H14_Plosh2TorcZagl4StorVivm2()
    {
        //площ 2 торц загл 4 стор выв, м2
        //умножение
        //вывод

        return $this->H10_GorRazm()*$this->H10_GorRazm()*2;

    }
    function H15_DvpUpakDlNeRazbVivm2()
    {
        //двп упак для неразб выв, м2
        //прибавление и округление
        //вывод

        return round($this->H13_BokPlosh4StorVivm2()+$this->H14_Plosh2TorcZagl4StorVivm2(),1);

    }
    function H16_PlankiUpakDlNeRazbVivmp()
    {
        //планки упак для неразб выв, мп
        //прибавление и умножение
        //вывод

        return $this->H12_Perim4StorVivesmp()*2+$this->H11_VerRazm()*4;

    }
    function H17_SamorUpakDlNeRazbVivsht()
    {
        //самор упак для неразб выв, шт
        //умножение и округление
        //вывод

        return round($this->H16_PlankiUpakDlNeRazbVivmp()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp,0);

    }
    function H19_BokPlosh4StorRazbVivm2()
    {
        //боковая площ 4 стор разб выв, м2
        //умножение
        //вывод

        return $this->H8_PerimPloskoyKrishimp()*0.48;

    }
    function H20_DVPUpakDl1RazbVivm2()
    {
        //двп упак для 1 разб выв, м2
        //умножение и прибавление
        //вывод

        return $this->H7_FasadPloskoyKrishim2()*2+$this->H19_BokPlosh4StorRazbVivm2();

    }
    function H21_PlankiUpakDl1RazbVivmp()
    {
        //планки упак для 1 разб выв, мп
        //умножение и прибавление
        //вывод

        return $this->H8_PerimPloskoyKrishimp()*2+0.48*4;

    }
    function H22_SamorUpakDl1RazbVivsht()
    {
        //самор упак для 1 разб выв, шт
        //умножение и округление
        //вывод

        return round($this->H21_PlankiUpakDl1RazbVivmp()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp, 0);

    }
    function H24_VisPak1StorVivm()
    {
        //высота пакета 1 сторон выв, м
        //умножение и прибавление
        //вывод

        return 0.12*$this->B18_Kolvo_sht*$this->E8_VivesOdin12cm()+0.24*$this->B18_Kolvo_sht*$this->E9_VivesOdin24cm()
            +0.12*4*$this->E11_Vives4StorRazb();

    }
    function H25_BokPloshDVP1PakVivm2()
    {
        //бок площ двп 1 пакета вывесок, м2
        //умножение
        //вывод

        return $this->H8_PerimPloskoyKrishimp()*$this->H24_VisPak1StorVivm();

    }
    function H26_DVPUpakDl1PakVivm2()
    {
        //двп упак для 1 пак вывесок, м2
        //умножение и прибавление
        //вывод

        return $this->H7_FasadPloskoyKrishim2()*2+$this->H25_BokPloshDVP1PakVivm2();

    }
    function H27_PlUpakDl1PakVivmp()
    {
        //планки упак для 1 пакета выв, мп
        //умножение и прибавление
        //вывод

        return $this->H8_PerimPloskoyKrishimp()*2+4*$this->H24_VisPak1StorVivm();

    }
    function H28_SamorUpakDl1pakVivsht()
    {
        //самор упак для 1 пакета выв, шт
        //умножение и округление
        //вывод

        return round($this->H27_PlUpakDl1PakVivmp()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp, 0);

    }
    function H31_DVPUpak1m2grn()
    {
        //двп упаковочное 1 м2, грн
        //значение
        //вывод

        return L10_U97_DVPUpak;

    }
    function H32_PererashDVPUpak()
    {
        //перерасход двп упаковочного
        //значение
        //вывод

        return L10_BB10_K_PererashodDVPUpak;

    }
    function H33_PlankaDerevo1mpgrn()
    {
        //планка дерево 1 мп, грн
        //значение
        //вывод

        return L10_U92_PlankaDerevo20x20;

    }
    function H34_PererashPlank()
    {
        //перерасход планки
        //значение
        //вывод

        return L10_BB105_K_PererashDerevPlanok;

    }
    function H35_Stoim1Samorezgrn()
    {
        //стоимость 1 самореза, грн
        //значение
        //вывод

        return L10_AR43_Samorez19BlackWood;

    }
    function H37_PaketVives1StorMatergrn()
    {
        //пакет вывесок 1 сорона матер, грн
        //умножение и прибавление
        //вывод

        return $this->H26_DVPUpakDl1PakVivm2()*$this->H31_DVPUpak1m2grn()*$this->H32_PererashDVPUpak()+$this->H27_PlUpakDl1PakVivmp()
            *$this->H33_PlankaDerevo1mpgrn()*$this->H34_PererashPlank()+$this->H28_SamorUpakDl1pakVivsht()*$this->H35_Stoim1Samorezgrn();

    }
    function H38_1Viv4StorRazbMatergrn()
    {
        //1 вывеска 4 стор разб матер, грн
        //умножение и прибавление
        //вывод

        return $this->H20_DVPUpakDl1RazbVivm2()*$this->H31_DVPUpak1m2grn()*$this->H32_PererashDVPUpak()
            +$this->H21_PlankiUpakDl1RazbVivmp()*$this->H33_PlankaDerevo1mpgrn()*$this->H34_PererashPlank()
            +$this->H22_SamorUpakDl1RazbVivsht()*$this->H35_Stoim1Samorezgrn();

    }
    function H39_1Viv4StorNeRazbMatergrn()
    {
        //1 вывеска 4 стор неразб матер, грн
        //умножение и прибавление
        //вывод

        return $this->H15_DvpUpakDlNeRazbVivm2()*$this->H31_DVPUpak1m2grn()*$this->H32_PererashDVPUpak()
            +$this->H16_PlankiUpakDlNeRazbVivmp()*$this->H33_PlankaDerevo1mpgrn()*$this->H34_PererashPlank()
            +$this->H17_SamorUpakDlNeRazbVivsht()*$this->H35_Stoim1Samorezgrn();

    }
    function H41_PakViv1StorMatgrn()
    {
        //пакет вывесок 1 сорона матер, грн
        //значение
        //вывод

        return $this->H37_PaketVives1StorMatergrn();

    }
    function H42_Vives4StorRazbMatgrn()
    {
        //вывески 4 стор разб матер, грн
        //умножение
        //вывод

        return $this->H38_1Viv4StorRazbMatergrn()*$this->B18_Kolvo_sht;

    }
    function H43_Vives4StorNeRazbMatgrn()
    {
        //вывески 4 стор неразб матер, грн
        //умножение
        //вывод

        return $this->H39_1Viv4StorNeRazbMatergrn()*$this->B18_Kolvo_sht;

    }
    function H45_PakViv1StorMatgrn()
    {
        //пакет вывесок 1 сорона матер, грн
        //умножение
        //вывод

        return $this->H41_PakViv1StorMatgrn()*$this->E13_Vives1Or2Stor();

    }
    function H46_1Viv4StorRazbMatgrn()
    {
        //1 вывеска 4 стор разб матер, грн
        //умножение
        //вывод

        return $this->H42_Vives4StorRazbMatgrn()*$this->E11_Vives4StorRazb();

    }
    function H47_1Viv4StorNeRazbMatgrn()
    {
        //1 вывеска 4 стор неразб матер, грн
        //умножение
        //вывод

        return $this->H43_Vives4StorNeRazbMatgrn()*$this->E10_Vives4StorNeRazb();

    }
    function H48_ItogoMatUpakgrn()
    {
        //итого матер упаковочные, грн
        //прибавление и округление
        //вывод

        return round($this->H45_PakViv1StorMatgrn()+$this->H46_1Viv4StorRazbMatgrn()+
            $this->H47_1Viv4StorNeRazbMatgrn(),0);

    }
    function K5_VisUpakm()
    {
        //высота упаковки, м
        //умножение и прибавление
        //вывод

        return 0.12*$this->B18_Kolvo_sht*$this->E8_VivesOdin12cm()+0.24*$this->B18_Kolvo_sht*$this->E9_VivesOdin24cm()
            +$this->H10_GorRazm()*$this->E10_Vives4StorNeRazb()+0.48*$this->E11_Vives4StorRazb();

    }
    function K6_KolvoUpaksht()
    {
        //кол упаковок, шт
        //умножение и прибавление
        //вывод

        return $this->E13_Vives1Or2Stor()+$this->B9_4SideIn*$this->B18_Kolvo_sht;

    }
    function K7_ObyomUpakm3()
    {
        //объем упаковки, м3
        //умножение
        //вывод

        return $this->H5_BolshRazmDVPm()*$this->H6_MenshRazmDVPm()*$this->K5_VisUpakm();

    }
    function K8_ObyomUpakovokm3()
    {
        //объем упаковок, м3
        //умножение
        //вывод

        return $this->K7_ObyomUpakm3()*$this->K6_KolvoUpaksht();

    }
    function K11_PlotnDVPkgm2()
    {
        //плотность двп, кг/м2
        //значение
        //вывод

        return L10_L28_DVPWhiteP;

    }
    function K12_PloshUpakm2()
    {
        //площадь упаковки, м2
        //умножение и прибавление
        //вывод

        return $this->H7_FasadPloskoyKrishim2()*2+($this->H5_BolshRazmDVPm()+$this->H6_MenshRazmDVPm())
            *2*$this->K5_VisUpakm();

    }
    function K13_VesDVPUpakkg()
    {
        //вес двп упак, кг
        //умножение
        //вывод

        return $this->K11_PlotnDVPkgm2()*$this->K12_PloshUpakm2();

    }
    function N5_DVPPerimNERazbVivmp()
    {
        //двп периметр неразб выв, мп
        //умножение и прибавление
        //вывод

        return $this->H12_Perim4StorVivesmp()*4+$this->H11_VerRazm()*8;

    }
    function N6_DVPPerimVirezmin()
    {
        //двп периметр вырезать, мин
        //умножение
        //вывод

        return $this->N5_DVPPerimNERazbVivmp()*L10_BT9_RaskrDVPUpak_1mp;

    }
    function N7_PrirezPlankDermin()
    {
        //прирезать планки дер, мин
        //умножение
        //вывод

        return 12*L10_BT22_PrirezPlankDerUpak_min;

    }
    function N8_VkrutSamorezmin()
    {
        //вкрутить саморезы, мин
        //умножение
        //вывод

        return $this->H17_SamorUpakDlNeRazbVivsht()*L10_BT26_VkruchSeriiSamorezov_1sht;

    }
    function N9_NeRazbViv4Stormin()
    {
        //неразб вывеска 4 стор, мин
        //прибавление
        //вывод

        return $this->N6_DVPPerimVirezmin()+$this->N7_PrirezPlankDermin()+$this->N8_VkrutSamorezmin();

    }
    function N11_DVPPerimRazbVivmp()
    {
        //двп периметр разб выв, мп
        //умножение и прибавление
        //вывод

        return $this->H8_PerimPloskoyKrishimp()*4+0.48*8;

    }
    function N12_DVPPerimVirezmin()
    {
        //двп периметр вырезать, мин
        //умножение
        //вывод

        return $this->N11_DVPPerimRazbVivmp()*L10_BT9_RaskrDVPUpak_1mp;

    }
    function N13_PrirPlankDermin()
    {
        //прирезать планки дер, мин
        //умножение
        //вывод

        return 12*L10_BT22_PrirezPlankDerUpak_min;

    }
    function N14_VkrutSamorezmin()
    {
        //вкрутить саморезы, мин
        //умножение
        //вывод

        return $this->H22_SamorUpakDl1RazbVivsht()*L10_BT26_VkruchSeriiSamorezov_1sht;

    }
    function N15_RazbViv4Stormin()
    {
        //разб вывеска 4 стор, мин
        //прибавление
        //вывод

        return $this->N12_DVPPerimVirezmin()+$this->N13_PrirPlankDermin()+$this->N14_VkrutSamorezmin();

    }
    function N17_DVPPerimPak1Stormp()
    {
        //двп периметр пакет 1 стор, мп
        //умножение и прибавление
        //вывод

        return $this->H8_PerimPloskoyKrishimp()*4+$this->H24_VisPak1StorVivm()*8;

    }
    function N18_DVPPerimVirezatmin()
    {
        //двп периметр вырезать, мин
        //умножение
        //вывод

        return $this->N17_DVPPerimPak1Stormp()*L10_BT9_RaskrDVPUpak_1mp;

    }
    function N19_PrirPlankDermin()
    {
        //прирезать планки дер, мин
        //умножение
        //вывод

        return 12*L10_BT22_PrirezPlankDerUpak_min;

    }
    function N20_VkrutSamorezmin()
    {
        //вкрутить саморезы, мин
        //умножение
        //вывод

        return $this->H28_SamorUpakDl1pakVivsht()*L10_BT26_VkruchSeriiSamorezov_1sht;

    }
    function N21_Pak1StorVivmin()
    {
        //пакет 1 стор вывесок, мин
        //прибавление
        //вывод

        return $this->N18_DVPPerimVirezatmin()+$this->N19_PrirPlankDermin()+$this->N20_VkrutSamorezmin();

    }
    function N24_PakViv1Stormin()
    {
        //пакет вывесок 1 сорона, мин
        //значение
        //вывод

        return $this->N21_Pak1StorVivmin();

    }
    function N25_Viv4StorRazbmin()
    {
        //вывески 4 стор разб, мин
        //умножение
        //вывод

        return $this->N15_RazbViv4Stormin()*$this->B18_Kolvo_sht;

    }
    function N26_Viv4StorNeRazbmin()
    {
        //вывески 4 стор неразб, мин
        //умножение
        //вывод

        return $this->N9_NeRazbViv4Stormin()*$this->B18_Kolvo_sht;

    }
    function N28_PakViv1Stormin()
    {
        //пакет вывесок 1 сорона, мин
        //умножение
        //вывод

        return $this->E13_Vives1Or2Stor()*$this->N24_PakViv1Stormin();

    }
    function N29_Viv4StorRazbmin()
    {
        //вывески 4 стор разб, мин
        //умножение
        //вывод

        return $this->N15_RazbViv4Stormin()*$this->E11_Vives4StorRazb();

    }
    function N30_Viv4StorNeRazbmin()
    {
        //вывески 4 стор неразб, мин
        //умножение
        //вывод

        return $this->N9_NeRazbViv4Stormin()*$this->E10_Vives4StorNeRazb();

    }
    function N31_ItogoRabmin()
    {
        //итого работа, мин
        //прибавление
        //вывод

        return $this->N28_PakViv1Stormin()+$this->N29_Viv4StorRazbmin()+$this->N30_Viv4StorNeRazbmin();

    }
    function Q6_StorimMatgrn()
    {
        //стоимость материалов, грн
        //значение
        //вывод

        return $this->H48_ItogoMatUpakgrn();

    }
    function Q10_TrudNPUpakmin()
    {
        //трудоемк НП упаковки, мин
        //округление
        //вывод

        return round($this->N31_ItogoRabmin(),0);

    }
    function Q11_StorimRabpoUpakgrn()
    {
        //стоим раб по  упаковке, грн
        //округление и умножение
        //вывод

        return round($this->Q10_TrudNPUpakmin()*L10_C67_K1,0);

    }
    function Q15_BolshRazmm()
    {
        //больший размер, м
        //значение
        //вывод

        return $this->H5_BolshRazmDVPm();

    }
    function Q16_MenshRazmm()
    {
        //меньший размер, м
        //значение
        //вывод

        return $this->H6_MenshRazmDVPm();

    }
    function Q17_Visotam()
    {
        //высота, м
        //значение
        //вывод

        return $this->K5_VisUpakm();

    }
    function Q18_VesVivPlusUpakkg()
    {
        //вес: вывеска + упаковка, кг
        //округление и прибавление
        //вывод

        return round($this->B17_Ves_kg+$this->K13_VesDVPUpakkg(),1);

    }
    function Q19_StoimPosgrn()
    {
        //стоимость посылки, грн
        //умножение и прибавление
        //вывод

        return $this->B16_Stoim_1sht_grn*$this->B18_Kolvo_sht*$this->E13_Vives1Or2Stor()+$this->B16_Stoim_1sht_grn
            *$this->B9_4SideIn;

    }
    function Q20_KolvoPossht()
    {
        //количество посылок, шт
        //значение
        //вывод

        return $this->K6_KolvoUpaksht();

    }
    function Q30_UpakDlNPNalgrn()
    {
        //упаковка для НП нал, грн
        //прибавление
        //вывод

        return $this->Q6_StorimMatgrn()+$this->Q11_StorimRabpoUpakgrn();

    }













}