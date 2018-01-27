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
    public $U5_RoofVisorOut; // крыша/козырек улица
    public $U6_WallOut; // стена улица
    public $U7_WallIn; // стена помещение
    public $U8_2SideIn; // 2 стороны помещение
    public $U9_4SideIn; // 4 стороны помещение

    public $U11_Orientation; // ориентация
    public $U12_MaxSide_cm; // большая сторона, см
    public $U13_MinSide_cm; // меньшая сторона, см
    public $U14_Konstruct; // конструктив

    public $U16_Stoim_1sht_grn; // стоимость 1 шт, грн
    public $U17_Ves_kg; // вес, кг
    public $U18_Kolvo_sht; // количество вывесок, шт

    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $MaxSide_cm, $MinSide_cm, $Konstruct, $Stoim_1sht_grn,$Ves_kg, $Kolvo_sht)
  {
        // Заполнение входных данных.
      $this->U5_RoofVisorOut = $RoofVisorOut;
      $this->U6_WallOut = $WallOut;
      $this->U7_WallIn = $WallIn;
      $this->U8_2SideIn = $SideIn2;
      $this->U9_4SideIn = $SideIn4;

      $this->U11_Orientation = $Orientation;
      $this->U12_MaxSide_cm = $MaxSide_cm;
      $this->U13_MinSide_cm = $MinSide_cm;
      $this->U14_Konstruct = $Konstruct;

      $this->U16_Stoim_1sht_grn = $Stoim_1sht_grn;
      $this->U17_Ves_kg = $Ves_kg;
      $this->U18_Kolvo_sht = $Kolvo_sht;
  }

    // C light - пленка борт/тыл

    function X5_VivesRazb()
    {
        //вывеска разб (1-да/0-нет)
        //значение
        //вывод

        return $this->U14_Konstruct;

    }
    function X6_VivesNeRazb()
    {
        //вывеска неразб (1-да/0-нет)
        //если условие = true, то вывести 0
        //иначе вывести 1
        //вывод

        if($this->X5_VivesRazb()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }

    }
    function X8_VivesOdin12cm()
    {
        //вывеска одиночная 12 см
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if($this->U5_RoofVisorOut+$this->U6_WallOut=$this->U7_WallIn==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function X9_VivesOdino24cm()
    {
        //вывеска одиночная 24 см
        //значение
        //вывод

        return $this->U8_2SideIn;

    }
    function X10_Vives4StorNeRazb()
    {
        //вывеска 4 стор неразб
        //умножение
        //вывод

        return $this->U9_4SideIn*$this->X6_VivesNeRazb();

    }
    function X11_Vives4StorRazb()
    {
        //вывеска 4 стор разб
        //умножение
        //вывод

        return $this->U9_4SideIn*$this->X5_VivesRazb();

    }
    function X13_Vives1Ili2Stor()
    {
        //выв 1 или 2 стор (1-да/0-нет)
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if($this->U5_RoofVisorOut+$this->U6_WallOut+$this->U7_WallIn+$this->U8_2SideIn==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function AA5_BolshRazmDVPm()
    {
        //больший размер двп, м
        //прибавление, деление и округление
        //вывод

        return round(($this->U12_MaxSide_cm+5)/100,2);

    }
    function AA6_MenshRazmDVPm()
    {
        //меньший размер двп, м
        //прибавление, деление и округление
        //вывод

        return round(($this->U13_MinSide_cm+5)/100,2);

    }
    function AA7_FasadPloskViveskim2()
    {
        //фасад плоской вывески, м2
        //умножение
        //вывод

        return $this->AA5_BolshRazmDVPm()*$this->AA6_MenshRazmDVPm();

    }
    function AA8_PerimPloskVivesmp()
    {
        //периметр плоской вывески, мп
        //прибавление
        //вывод

        return ($this->AA5_BolshRazmDVPm()+$this->AA6_MenshRazmDVPm())*2;

    }
    function AA10_GorRazm()
    {
        //горизонтальный размер, м
        //если условие = true, то вывести AA5
        //иначе вывести AA6
        //вывод

        if($this->U11_Orientation==1)
        {
            return $this->AA5_BolshRazmDVPm();
        }
        else
        {
            return $this->AA6_MenshRazmDVPm();
        }

    }
    function AA11_VerRazm()
    {
        //вертикальный размер, м
        //если условие = true, то вывести AA6
        //иначе вывести AA5
        //вывод

        if($this->U11_Orientation==1)
        {
            return $this->AA6_MenshRazmDVPm();
        }
        else
        {
            return $this->AA5_BolshRazmDVPm();
        }

    }
    function AA12_Perim4StorVivmp()
    {
        //периметр 4 стор вывески, мп
        //умножение
        //вывод

        return $this->AA10_GorRazm()*4;

    }
    function AA13_BokPlosh4StorVivm2()
    {
        //боковая площ 4 стор выв, м2
        //умножение
        //вывод

        return $this->AA12_Perim4StorVivmp()*$this->AA11_VerRazm();

    }
    function AA14_Plosh2TorcZagl4StorVivesm2()
    {
        //площ 2 торц загл 4 стор выв, м2
        //умножение
        //вывод

        return $this->AA10_GorRazm()*$this->AA10_GorRazm()*2;

    }
    function AA15_DVPUpakDlNeRazbVivm2()
    {
        //двп упак для неразб выв, м2
        //прибавлние и округление
        //вывод

        return round($this->AA13_BokPlosh4StorVivm2()+$this->AA14_Plosh2TorcZagl4StorVivesm2(),1);

    }
    function AA16_PlankUpakDlNeRazbVivmp()
    {
        //планки упак для неразб выв, мп
        //умножение и прибавление
        //вывод

        return $this->AA12_Perim4StorVivmp()*2+$this->AA11_VerRazm()*4;

    }
    function AA17_CamorezUpakDlNeRazbVivsht()
    {
        //самор упак для неразб выв, шт
        //умножение и округление
        //вывод

        return round($this->AA16_PlankUpakDlNeRazbVivmp()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp,0);

    }
    function AA19_BokPlosh4StorPazbVivm2()
    {
        //боковая площ 4 стор разб выв, м2
        //умножение
        //вывод

        return $this->AA8_PerimPloskVivesmp()*0.48;

    }
    function AA20_DVPUpakDl1RazbVivm2()
    {
        //двп упак для 1 разб выв, м2
        //умножение и прибавление
        //вывод

        return $this->AA7_FasadPloskViveskim2()*2+$this->AA19_BokPlosh4StorPazbVivm2();

    }
    function AA21_PlankUpakDl1RazbVivmp()
    {
        //планки упак для 1 разб выв, мп
        //умножение и прибавление
        //вывод

        return $this->AA8_PerimPloskVivesmp()*2+0.48*4;

    }
    function AA22_CamorezUpakDl1RazbVivsht()
    {
        //самор упак для 1 разб выв, шт
        //умножение и округление
        //вывод

        return round($this->AA21_PlankUpakDl1RazbVivmp()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp,0);

    }
    function AA24_VisPak1StorVivm()
    {
        //высота пакета 1 сторон выв, м
        //умножение и прибавление
        //вывод

        return 0.12*$this->U18_Kolvo_sht*$this->X8_VivesOdin12cm()+0.24*$this->U18_Kolvo_sht*$this->X9_VivesOdino24cm()+0.12*
            4*$this->X13_Vives1Ili2Stor();

    }
    function AA25_BokPloshDVP1PakVivm2()
    {
        //бок площ двп 1 пакета вывесок, м2
        //умножение
        //вывод

        return $this->AA8_PerimPloskVivesmp()*$this->AA24_VisPak1StorVivm();

    }
    function AA26_DVPUpakDl1PakVivm2()
    {
        //двп упак для 1 пак вывесок, м2
        //умножение и прибавление
        //вывод

        return $this->AA7_FasadPloskViveskim2()*2+$this->AA25_BokPloshDVP1PakVivm2();

    }
    function AA27_DVPUpakDl1PakVivmp()
    {
        //планки упак для 1 пакета выв, мп
        //умножение и прибавление
        //вывод

        return $this->AA8_PerimPloskVivesmp()*2+4*$this->AA24_VisPak1StorVivm();

    }
    function AA28_CamorezUpakDl1PakVivsht()
    {
        //самор упак для 1 пакета выв, шт
        //умножение и округление
        //вывод

        return round($this->AA27_DVPUpakDl1PakVivmp()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp,0);

    }
    function AA31_DVPUpak1m2grn()
    {
        //двп упаковочное 1 м2, грн
        //значение
        //вывод

        return L10_U97_DVPUpak;

    }
    function AA32_PererashDVPUpak()
    {
        //перерасход двп упаковочного
        //значение
        //вывод

        return L10_BB10_K_PererashodDVPUpak;

    }
    function AA33_PlankDer1mpgrn()
    {
        //планка дерево 1 мп, грн
        //значение
        //вывод

        return L10_U92_PlankaDerevo20x20;

    }
    function AA34_PererashPlank()
    {
        //перерасход планки
        //значение
        //вывод

        return L10_BB105_K_PererashDerevPlanok;

    }
    function AA35_Stoim1Samgrn()
    {
        //стоимость 1 самореза, грн
        //значение
        //вывод

        return L10_AR43_Samorez19BlackWood;

    }
    function AA37_PakViv1StorMatgrn()
    {
        //пакет вывесок 1 сорона матер, грн
        //умножение и прибавление
        //вывод

        return $this->AA26_DVPUpakDl1PakVivm2()*$this->AA31_DVPUpak1m2grn()*$this->AA32_PererashDVPUpak()+
            $this->AA27_DVPUpakDl1PakVivmp()*$this->AA33_PlankDer1mpgrn()*$this->AA34_PererashPlank()+
            $this->AA28_CamorezUpakDl1PakVivsht()*$this->AA35_Stoim1Samgrn();

    }
    function AA38_1Viv4StorRazbMatgrn()
    {
        //1 вывеска 4 стор разб матер, грн
        //умножение и прибавление
        //вывод

        return $this->AA20_DVPUpakDl1RazbVivm2()*$this->AA31_DVPUpak1m2grn()*$this->AA32_PererashDVPUpak()+
            $this->AA21_PlankUpakDl1RazbVivmp()*$this->AA33_PlankDer1mpgrn()*$this->AA34_PererashPlank()+
            $this->AA22_CamorezUpakDl1RazbVivsht()*$this->AA35_Stoim1Samgrn();

    }
    function AA39_1Viv4StorNeRazbMatgrn()
    {
        //1 вывеска 4 стор неразб матер, грн
        //умножение и прибавление
        //вывод

        return $this->AA15_DVPUpakDlNeRazbVivm2()*$this->AA31_DVPUpak1m2grn()*$this->AA32_PererashDVPUpak()+
            $this->AA16_PlankUpakDlNeRazbVivmp()*$this->AA33_PlankDer1mpgrn()*$this->AA34_PererashPlank()+
            $this->AA17_CamorezUpakDlNeRazbVivsht()*$this->AA35_Stoim1Samgrn();

    }
    function AA41_PakViv1StorMatgrn()
    {
        //пакет вывесок 1 сорона матер, грн
        //значение
        //вывод

        return $this->AA37_PakViv1StorMatgrn();

    }
    function AA42_Viv4StorrazbMatgrn()
    {
        //вывески 4 стор разб матер, грн
        //умножение
        //вывод

        return $this->AA38_1Viv4StorRazbMatgrn()*$this->U18_Kolvo_sht;

    }
    function AA43_Viv4StorNeRazbMatgrn()
    {
        //вывески 4 стор неразб матер, грн
        //умножение
        //вывод

        return $this->AA39_1Viv4StorNeRazbMatgrn()*$this->U18_Kolvo_sht;

    }
    function AA45_PakViv1StorMatgrn()
    {
        //пакет вывесок 1 сорона матер, грн
        //умножение
        //вывод

        return $this->AA41_PakViv1StorMatgrn()*$this->X13_Vives1Ili2Stor();

    }
    function AA46_1Viv4StorrazbMatgrn()
    {
        //1 вывеска 4 стор разб матер, грн
        //умножение
        //вывод

        return $this->AA42_Viv4StorrazbMatgrn()*$this->X11_Vives4StorRazb();

    }
    function AA47_1Viv4StorNeRazbMatgrn()
    {
        //1 вывеска 4 стор неразб матер, грн
        //умножение
        //вывод

        return $this->AA43_Viv4StorNeRazbMatgrn()*$this->X10_Vives4StorNeRazb();

    }
    function AA48_ItogoMatUpakgrn()
    {
        //итого матер упаковочные, грн
        //прибавление и округление
        //вывод

        return round($this->AA45_PakViv1StorMatgrn()+$this->AA46_1Viv4StorrazbMatgrn()+$this->AA47_1Viv4StorNeRazbMatgrn(),0);

    }
    function AD5_VisotaUpakm()
    {
        //высота упаковки, м
        //умножение и прибавление
        //вывод

        return 0.12*$this->U18_Kolvo_sht*$this->X8_VivesOdin12cm()+0.24*$this->U18_Kolvo_sht*$this->X9_VivesOdino24cm()+
            $this->AA10_GorRazm()*$this->X10_Vives4StorNeRazb()+0.48*$this->X11_Vives4StorRazb();

    }
    function AD6_KolvoUpaksht()
    {
        //кол упаковок, шт
        //умножение и прибавление
        //вывод

        return $this->X13_Vives1Ili2Stor()+$this->U9_4SideIn*$this->U18_Kolvo_sht;

    }
    function AD7_ObyemUpakm3()
    {
        //объем упаковки, м3
        //умножение
        //вывод

        return $this->AA5_BolshRazmDVPm()*$this->AA6_MenshRazmDVPm()*$this->AD5_VisotaUpakm();

    }
    function AD8_ObyemUpakm3()
    {
        //объем упаковок, м3
        //умножение
        //вывод

        return $this->AD7_ObyemUpakm3()*$this->AD6_KolvoUpaksht();

    }
    function AD11_PlotnostDVPkgm2()
    {
        //плотность двп, кг/м2
        //значение
        //вывод

        return L10_L28_DVPWhiteP;

    }
    function AD12_PloshUpakm2()
    {
        //площадь упаковки, м2
        //умножение и прибавление
        //вывод

        return $this->AA7_FasadPloskViveskim2()*2+($this->AA5_BolshRazmDVPm()+$this->AA6_MenshRazmDVPm())*2*
            $this->AD5_VisotaUpakm();

    }
    function AD13_VesDVPUpakkg()
    {
        //вес двп упак, кг
        //умножение
        //вывод

        return $this->AD11_PlotnostDVPkgm2()*$this->AD12_PloshUpakm2();

    }
    function AG5_DVPPerimetrNeRazbVivmp()
    {
        //двп периметр неразб выв, мп
        //умножение и прибавление
        //вывод

        return $this->AA12_Perim4StorVivmp()*4+$this->AA11_VerRazm()*8;

    }
    function AG6_DVPPerimetrVirezmin()
    {
        //двп периметр вырезать, мин
        //умножение
        //вывод

        return $this->AG5_DVPPerimetrNeRazbVivmp()*L10_BT9_RaskrDVPUpak_1mp;

    }
    function AG7_PrirezPlankDermin()
    {
        //прирезать планки дер, мин
        //умножение
        //вывод

        return 12*L10_BT22_PrirezPlankDerUpak_min;

    }
    function AG8_VkrutSamorezmin()
    {
        //вкрутить саморезы, мин
        //умножение
        //вывод

        return $this->AA17_CamorezUpakDlNeRazbVivsht()*L10_BT26_VkruchSeriiSamorezov_1sht;

    }
    function AG9_NeRazb4Stormin()
    {
        //неразб вывеска 4 стор, мин
        //прибавление
        //вывод

        return $this->AG6_DVPPerimetrVirezmin()+$this->AG7_PrirezPlankDermin()+$this->AG8_VkrutSamorezmin();

    }
    function AG11_DVPPerimrazbVivmp()
    {
        //двп периметр разб выв, мп
        //умножение и прибавление
        //вывод

        return $this->AA8_PerimPloskVivesmp()*4+0.48*8;

    }
    function AG12_DVPPerimVirmin()
    {
        //двп периметр вырезать, мин
        //умножение
        //вывод

        return $this->AG11_DVPPerimrazbVivmp()*L10_BT9_RaskrDVPUpak_1mp;

    }
    function AG13_PrirPlankDermin()
    {
        //прирезать планки дер, мин
        //умножение
        //вывод

        return 12*L10_BT22_PrirezPlankDerUpak_min;

    }
    function AG14_VkrutSamorezmin()
    {
        //вкрутить саморезы, мин
        //умножение
        //вывод

        return $this->AA22_CamorezUpakDl1RazbVivsht()*L10_BT26_VkruchSeriiSamorezov_1sht;

    }
    function AG15_RazbViv4Stormin()
    {
        //разб вывеска 4 стор, мин
        //прибавление
        //вывод

        return $this->AG12_DVPPerimVirmin()+$this->AG13_PrirPlankDermin()+$this->AG14_VkrutSamorezmin();

    }
    function AG17_DVPPerimPak1Stormp()
    {
        //двп периметр пакет 1 стор, мп
        //умножение и прибавление
        //вывод

        return $this->AA8_PerimPloskVivesmp()*4+$this->AA24_VisPak1StorVivm()*8;

    }
    function AG18_DVPPerimVirmin()
    {
        //двп периметр вырезать, мин
        //умножение
        //вывод

        return $this->AG17_DVPPerimPak1Stormp()*L10_BT9_RaskrDVPUpak_1mp;

    }
    function AG19_PrirplankDermin()
    {
        //прирезать планки дер, мин
        //умножение
        //вывод

        return 12*L10_BT22_PrirezPlankDerUpak_min;

    }
    function AG20_VkrutSmin()
    {
        //вкрутить саморезы, мин
        //умножение
        //вывод

        return $this->AA28_CamorezUpakDl1PakVivsht()*L10_BT26_VkruchSeriiSamorezov_1sht;

    }
    function AG21_Pak1StorVivmin()
    {
        //пакет 1 стор вывесок, мин
        //прибавление
        //вывод

        return $this->AG18_DVPPerimVirmin()+$this->AG19_PrirplankDermin()+$this->AG20_VkrutSmin();

    }
    function AG24_PakViv1Stormin()
    {
        //пакет вывесок 1 сторона, мин
        //значение
        //вывод

        return $this->AG21_Pak1StorVivmin();

    }
    function AG25_Viv4StorRazbmin()
    {
        //вывески 4 стор разб, мин
        //умножение
        //вывод

        return $this->AG15_RazbViv4Stormin()*$this->U18_Kolvo_sht;

    }
    function AG26_Viv4StorNeRazbmin()
    {
        //вывески 4 стор неразб, мин
        //умножение
        //вывод

        return $this->AG9_NeRazb4Stormin()*$this->U18_Kolvo_sht;

    }
    function AG28_PakViv1Stormin()
    {
        //пакет вывесок 1 сорона, мин
        //умножение
        //вывод

        return $this->X13_Vives1Ili2Stor()*$this->AG24_PakViv1Stormin();

    }
    function AG29_Viv4StorRazbmin()
    {
        //вывески 4 стор разб, мин
        //умножение
        //вывод

        return $this->AG15_RazbViv4Stormin()*$this->X11_Vives4StorRazb();

    }
    function AG30_Viv4StorNeRazbmin()
    {
        //вывески 4 стор неразб, мин
        //умножение
        //вывод

        return $this->AG9_NeRazb4Stormin()*$this->X10_Vives4StorNeRazb();

    }
    function AG31_ItogoRabmin()
    {
        //итого работа, мин
        //прибавление
        //вывод

        return $this->AG28_PakViv1Stormin()+$this->AG29_Viv4StorRazbmin()+$this->AG30_Viv4StorNeRazbmin();

    }
    function AJ6_Stoimmatgrn()
    {
        //стоимость материалов, грн
        //значение
        //вывод

        return $this->AA48_ItogoMatUpakgrn();

    }
    function AJ10_TrudNPUpakmin()
    {
        //трудоемк НП упаковки, мин
        //округление
        //вывод

        return round($this->AG31_ItogoRabmin(),0);

    }
    function AJ11_StoimRabPoUpakgrn()
    {
        //стоим раб по  упаковке, грн
        //округление и умножение
        //вывод

        return round($this->AJ10_TrudNPUpakmin()*L10_C67_K1,0);

    }
    function AJ15_BolshRazm()
    {
        //больший размер, м
        //значение
        //вывод

        return $this->AA5_BolshRazmDVPm();

    }
    function AJ16_MenshRazm()
    {
        //меньший размер, м
        //значение
        //вывод

        return $this->AA6_MenshRazmDVPm();

    }
    function AJ17_Vism()
    {
        //высота, м
        //значение
        //вывод

        return $this->AD5_VisotaUpakm();

    }
    function AJ18_VesVivPlusUpakkg()
    {
        //вес: вывеска + упаковка, кг
        //округление и прибавление
        //вывод

        return round($this->U17_Ves_kg+$this->AD13_VesDVPUpakkg(),1);

    }
    function AJ19_StoimPosgrn()
    {
        //стоимость посылки, грн
        //умножение и прибавление
        //вывод

        return $this->U16_Stoim_1sht_grn*$this->U18_Kolvo_sht*$this->X13_Vives1Ili2Stor()+$this->U16_Stoim_1sht_grn*$this->U9_4SideIn;

    }
    function AJ20_KolvoPossht()
    {
        //количество посылок, шт
        //значение
        //вывод

        return $this->AD6_KolvoUpaksht();

    }
    function AJ30_UpakDlNPNalgrn()
    {
        //упаковка для НП нал, грн
        //прибавление
        //вывод

        return $this->AJ6_Stoimmatgrn()+$this->AJ11_StoimRabPoUpakgrn();

    }














}