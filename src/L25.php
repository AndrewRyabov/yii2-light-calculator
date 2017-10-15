<?php namespace almaz44\light\calculator;

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 21.06.2017
 * Time: 14:08
 */
class L25
{
    // Входные параметры:
    public $B5_RoofVisorOut; // крыша/козырек улица
    public $B6_WallOut; // стена улица
    public $B7_WallIn; // стена помещение
    public $B8_2SideIn; // 2 стороны помещение
    public $B9_4SideIn; // 4 стороны помещение

    public $B11_Orientation; // ориентация (1-гор/2-вер)
    public $B12_BolshStorona_cm; // большая сторона, см
    public $B13_MenshStorona_cm; // меньшая сторона, см
    public $B14_CvetBortov; // цвет бортов
    public $B15_CvetTill; // цвет тыла
    public $B16_Konstruct; // конструктив (1-раз/0-нераз)

    public $B18_MaketIzobr; // макет разраб (1-зак/2-L24)
    public $B19_PlenkaLic; // пленка лицевая
    public $B20_FasadAkryl; // фасад акрил
    public $B21_FasadPolikarb; // фасад поликарбонат
    public $B22_IstochnikSveta; // источник света

    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $BolshStorona_cm, $MenshStorona_cm, $CvetBortov, $CvetTill, $Konstruct,
                                $MaketIzobr, $PlenkaLic, $FasadAkryl, $FasadPolikarb, $IstochnikSveta)
    {
        // Заполнение входных данных.
        $this->B5_RoofVisorOut = $RoofVisorOut;
        $this->B6_WallOut = $WallOut;
        $this->B7_WallIn = $WallIn;
        $this->B8_2SideIn = $SideIn2;
        $this->B9_4SideIn = $SideIn4;

        $this->B11_Orientation = $Orientation;
        $this->B12_BolshStorona_cm = $BolshStorona_cm;
        $this->B13_MenshStorona_cm = $MenshStorona_cm;
        $this->B14_CvetBortov = $CvetBortov;
        $this->B15_CvetTill = $CvetTill;
        $this->B16_Konstruct = $Konstruct;

        $this->B18_MaketIzobr = $MaketIzobr;
        $this->B19_PlenkaLic = $PlenkaLic;
        $this->B20_FasadAkryl = $FasadAkryl;
        $this->B21_FasadPolikarb = $FasadPolikarb;
        $this->B22_IstochnikSveta = $IstochnikSveta;
    }

    // C light - фасад пленка

    function K18_ItogoSborka()
    {
        //пленка стрейч упаковка
        //прибавление
        //вывод

        return $this->K5_FasadPlastik() + $this->K6_BortPVH() + $this->K7_Till() + $this->K8_OporiLicPlastik()
            + $this->K9_RamaVnutr() + $this->K10_RamaNaruj() + $this->K11_Podvesi() + $this->K13_Elektrika()
            + $this->K15_PlenkaFasad() + $this->K16_PlenkaBortTill() + $this->K17_PlenkaStreych();
    }

    function K5_FasadPlastik()
    {
        //фасад  пластик
        //значение
        //вывод

        return 216;
    }

    function K6_BortPVH()
    {
        //борт пвх
        //значение
        //вывод

        return 265;
    }

    function K7_Till()
    {
        //тыл
        //значение
        //вывод

        return 0;
    }

    function K8_OporiLicPlastik()
    {
        //опоры лицевого пластика
        //значение
        //вывод

        return 0;
    }

    function K9_RamaVnutr()
    {
        //рама внутренняя
        //значение
        //вывод

        return 94;
    }

    function K10_RamaNaruj()
    {
        //рама наружная
        //значение
        //вывод

        return 0;
    }

    function K11_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 28;
    }

    function K13_Elektrika()
    {
        //электрика
        //значение
        //вывод

        return 238;
    }

    function K15_PlenkaFasad()
    {
        //пленка фасад
        //значение
        //вывод

        return 90;
    }

    function K16_PlenkaBortTill()
    {
        //пленка борт/тыл
        //значение
        //вывод

        return 0;
    }

    function K17_PlenkaStreych()
    {
        //пленка стрейч упаковка
        //значение
        //вывод

        return 10;
    }

    function K19_Snabjeniye()
    {
        //снабжение
        //значение
        //вывод

        return 240;
    }

    function J29_StoimNalichRoznica()
    {
        //стоим наличная розница
        //округление и умножение
        //вывод

        return round($this->J28_StoimNalichSMaxSkidkoy() * L10_C74_K8, 0);
    }

    function J28_StoimNalichSMaxSkidkoy()
    {
        //стоим наличная с мах скидкой
        //значение
        //вывод

        return $this->J26_ZatratiObshiye();
    }

    function J26_ZatratiObshiye()
    {
        //затраты общие
        //прибавление
        //вывод

        return $this->H18_ItogoSborka() + $this->H19_Snabjeniye() + $this->H23_AmorizaciyaOborudovaniya()
            + $this->H24_ArendaPomesh() + $this->I18_ItogoSborka() + $this->I19_Snabjeniye() + $this->I20_Upravl() +
            $this->I21_SoftPlusInternet() + $this->I22_Pribil();
    }

    function H18_ItogoSborka()
    {
        //итого сборка
        //прибавление и округление
        //вывод

        return $this->H5_FasadPlastik() + $this->H6_BortPVH() + $this->H7_Till() + $this->H8_OporiLicPlastik()
            + $this->H9_RamaVnutr() + $this->H10_RamaNaruj() + $this->H11_Podvesi()
            + $this->H13_Elektrika() + $this->H15_PlenkaFasad() + $this->H16_PlenkaBortTill()
            + $this->H17_PlenkaStreych();
    }

    function H5_FasadPlastik()
    {
        //фасад  пластик
        //значение
        //вывод

        return 662;
    }

    function H6_BortPVH()
    {
        //борт пвх
        //значение
        //вывод

        return 449;
    }

    function H7_Till()
    {
        //тыл
        //значение
        //вывод

        return 0;
    }

    function H8_OporiLicPlastik()
    {
        //опоры лицевого пластика
        //значение
        //вывод

        return 0;
    }

    function H9_RamaVnutr()
    {
        //рама внутренняя
        //значение
        //вывод

        return 166;
    }

    function H10_RamaNaruj()
    {
        //рама наружная
        //значение
        //вывод

        return 0;
    }

    function H11_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 56;
    }

    function H13_Elektrika()
    {
        //электрика
        //значение
        //вывод

        return 1726;
    }

    function H15_PlenkaFasad()
    {
        //пленка фасад
        //значение
        //вывод

        return 378;
    }

    function H16_PlenkaBortTill()
    {
        //пленка борт/тыл
        //значение
        //вывод

        return 0;
    }

    function H17_PlenkaStreych()
    {
        //пленка стрейч упаковка
        //значение
        //вывод

        return 12;
    }

    function H19_Snabjeniye()
    {
        //снабжение
        //значение
        //вывод

        return 138;
    }

    function H23_AmorizaciyaOborudovaniya()
    {
        //амортизация оборудования
        //значение
        //вывод

        return 103;
    }

    function H24_ArendaPomesh()
    {
        //аренда помещения
        //значение
        //вывод

        return 172;
    }

    function I18_ItogoSborka()
    {
        //пленка стрейч упаковка
        //прибавление и округление
        //вывод

        return round($this->I5_FasadPlastik() + $this->I6_BortPVH() + $this->I7_Till()
            + $this->I8_OporiLicPlastik() + $this->I9_RamaVnutr() + $this->I10_RamaNaruj()
            + $this->I11_Podvesi() + $this->I13_Elektrika() + $this->I15_PlenkaFasad()
            + $this->I16_PlenkaBortTill() + $this->I17_PlenkaStreych(), 0);
    }

    function I5_FasadPlastik()
    {
        //фасад  пластик
        //значение
        //вывод

        return 151;
    }

    function I6_BortPVH()
    {
        //борт пвх
        //значение
        //вывод

        return 186;
    }

    function I7_Till()
    {
        //тыл
        //значение
        //вывод

        return 0;
    }

    function I8_OporiLicPlastik()
    {
        //опоры лицевого пластика
        //значение
        //вывод

        return 0;
    }

    function I9_RamaVnutr()
    {
        //рама внутренняя
        //значение
        //вывод

        return 66;
    }

    function I10_RamaNaruj()
    {
        //рама наружная
        //значение
        //вывод

        return 0;
    }

    function I11_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 19.6;
    }

    function I13_Elektrika()
    {
        //электрика
        //значение
        //вывод

        return 167;
    }

    function I15_PlenkaFasad()
    {
        //пленка фасад
        //значение
        //вывод

        return 63;
    }

    function I16_PlenkaBortTill()
    {
        //пленка борт/тыл
        //значение
        //вывод

        return 0;
    }

    function I17_PlenkaStreych()
    {
        //пленка стрейч упаковка
        //значение
        //вывод

        return 7;
    }

    function I19_Snabjeniye()
    {
        //снабжение
        //значение
        //вывод

        return 168;
    }

    function I20_Upravl()
    {
        //управляющий
        //значение
        //вывод

        return 198;
    }

    function I21_SoftPlusInternet()
    {
        //софт + интернет
        //значение
        //вывод

        return 66;
    }

    function I22_Pribil()
    {
        //прибыль
        //значение
        //вывод

        return 132;
    }

    function O6_ImiaKonstruktora()
    {
        //имя конструктора
        //значение
        //вывод

        return 'C_light';
    }

    function O9_VarIsp()
    {
        //вариант исполнения
        //значение
        //вывод

        return $this->D10_VPR();
    }

    function D10_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D5_KrishaUlica() == 1) {
            return 'крыша/козырек улица';
        } elseif ($this->D6_StenaUlica() == 1) {
            return 'стена улица';
        } elseif ($this->D7_StenaPomesh() == 1) {
            return 'стена помещение';
        } elseif ($this->D8_2StorPomesh() == 1) {
            return '2 стороны помещение';
        } elseif ($this->D9_4StorPomesh() == 1) {
            return '4 стороны помещение';
        } else {
            return 0;
        }

    }

    function D5_KrishaUlica()
    {
        //крыша/козырек улица
        //значение
        //вывод

        return $this->B5_RoofVisorOut;
    }

    function D6_StenaUlica()
    {
        //стена улица
        //значение
        //вывод

        return $this->B6_WallOut;
    }

    function D7_StenaPomesh()
    {
        //стена помещение
        //значение
        //вывод

        return $this->B7_WallIn;
    }

    function D8_2StorPomesh()
    {
        //2 стороны помещение
        //значение
        //вывод

        return $this->B8_2SideIn;
    }

    function D9_4StorPomesh()
    {
        //4 стороны помещение
        //значение
        //вывод

        return $this->B9_4SideIn;
    }

    function O10_OrientText()
    {
        //ориентация текст
        //значение
        //вывод

        return $this->D14_VPR();
    }

    function D14_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D12_Goriz() == 1) {
            return 'горизонтальная';
        } elseif ($this->D13_Vertikal() == 1) {
            return 'вертикальная';
        } else {
            return 0;
        }

    }

    function D12_Goriz()
    {
        //горизонтальная
        //если B11_Orientation = 1, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B11_Orientation == 1) {
            return 1;
        } else {
            return 0;
        }
    }

    function D13_Vertikal()
    {
        //вертикальная
        //если D12_Goriz() = 1, то вывести 0
        //иначе вывести 1
        //вывод

        if ($this->D12_Goriz() == 1) {
            return 0;
        } else {
            return 1;
        }
    }

    function O11_OrientKod()
    {
        //ориентация код
        //значение
        //вывод

        return $this->B11_Orientation;
    }

    function O12_BolshRazmcm()
    {
        //больший размер, см
        //значение
        //вывод

        return $this->B12_BolshStorona_cm;
    }

    function O13_MenshRazmcm()
    {
        //меньший размер, см
        //значение
        //вывод

        return $this->B13_MenshStorona_cm;
    }

    function O14_Tolshcm()
    {
        //толщина, см
        //если условие = true, то вывести 24
        //иначе вывести 12
        //вывод

        if ($this->B8_2SideIn == 1) {
            return 24;
        } else {
            return 12;
        }
    }

    function O15_CvetBortRitramaNom()
    {
        //цвет бортов,  "Ritrama" №
        //значение
        //вывод

        return $this->B14_CvetBortov;
    }

    function O16_CvetTillRitramaNom()
    {
        //цвет тыла, "Ritrama" №
        //значение
        //вывод

        return $this->B15_CvetTill;
    }

    function O17_MaketRazrab()
    {
        //макет разрабатывает
        //значение
        //вывод

        return $this->D39_VPR();
    }

    function D39_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D37_Zakazchik() == 1) {
            return 'заказчик';
        } elseif ($this->D38_L24() == 1) {
            return 'L24';
        } else {
            return 0;
        }
    }

    function D37_Zakazchik()
    {
        //заказчик
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B18_MaketIzobr == 1) {
            return 1;
        } else {
            return 0;
        }
    }

    function D38_L24()
    {
        //L24
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B18_MaketIzobr == 2) {
            return 1;
        } else {
            return 0;
        }
    }

    function O18_PlenkaLic()
    {
        //пленка лицевая
        //значение
        //вывод

        return $this->D52_VPR();
    }

    function D52_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D42_PolnocvetFoto() == 1) {
            return 'полноцвет фото';
        } elseif ($this->D43_PolnocvetFotoPlusLaminat() == 1) {
            return 'полноцвет фото + ламинат';
        } elseif ($this->D44_Polnocvet720DPI() == 1) {
            return 'полноцвет 720 dpi';
        } elseif ($this->D45_Polnocvet720DPIPlusLamonat() == 1) {
            return 'полноцвет 720 dpi + ламинат';
        } elseif ($this->D46_EconomWhiteFonPlusApp() == 1) {
            return 'эконом, белый фон + аппликация';
        } elseif ($this->D47_EconomCvetnFonPlusProrez() == 1) {
            return 'эконом, цветной фон + прорез';
        } elseif ($this->D48_EconomCvetnFonPlusApp() == 1) {
            return 'эконом, цветной фон + аппликация';
        } elseif ($this->D49_SvetorassWhiteFonPlusApp() == 1) {
            return 'светорассеивающая, белый фон + аппликация';
        } elseif ($this->D50_SvetorassCvetnFonPlusProrez() == 1) {
            return 'светорассеивающая, цветной фон + прорез';
        } elseif ($this->D51_SvetorassCvetnFonPlusApp() == 1) {
            return 'светорассеивающая, цветной фон + аппликация';
        } else {
            return 0;
        }
    }

    function D42_PolnocvetFoto()
    {
        //полноцвет фото
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 1) {
            return 1;
        } else {
            return 0;
        }
    }

    function D43_PolnocvetFotoPlusLaminat()
    {
        //полноцвет фото + ламинат
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 2) {
            return 1;
        } else {
            return 0;
        }
    }

    function D44_Polnocvet720DPI()
    {
        //полноцвет 720 dpi
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 3) {
            return 1;
        } else {
            return 0;
        }
    }

    function D45_Polnocvet720DPIPlusLamonat()
    {
        //полноцвет 720 dpi + ламинат
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 4) {
            return 1;
        } else {
            return 0;
        }
    }

    function D46_EconomWhiteFonPlusApp()
    {
        //эконом, белый фон + аппликация
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 5) {
            return 1;
        } else {
            return 0;
        }
    }

    function D47_EconomCvetnFonPlusProrez()
    {
        //эконом, цветной фон + прорез
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 6) {
            return 1;
        } else {
            return 0;
        }
    }

    function D48_EconomCvetnFonPlusApp()
    {
        //эконом, цветной фон + аппликация
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 7) {
            return 1;
        } else {
            return 0;
        }
    }

    function D49_SvetorassWhiteFonPlusApp()
    {
        //светорассеивающая, белый фон + аппликация
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 8) {
            return 1;
        } else {
            return 0;
        }
    }

    function D50_SvetorassCvetnFonPlusProrez()
    {
        //светорассеивающая, цветной фон + прорез
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 9) {
            return 1;
        } else {
            return 0;
        }
    }

    function D51_SvetorassCvetnFonPlusApp()
    {
        //светорассеивающая, цветной фон + аппликация
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 10) {
            return 1;
        } else {
            return 0;
        }
    }

    function O19_PlastikLic()
    {
        //пластик лицевой
        //значение
        //вывод

        return $this->D35_VPR();
    }

    function D35_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D33_Akryl() == 1) {
            return 'акрил';
        } elseif ($this->D34_Policarb() == 1) {
            return 'поликарбонат';
        } else {
            return 0;
        }
    }

    function D33_Akryl()
    {
        //акрил
        //значение
        //вывод

        return $this->B20_FasadAkryl;
    }

    function D34_Policarb()
    {
        //поликарбонат
        //значение
        //вывод

        return $this->B21_FasadPolikarb;
    }

    function O20_IstochnikSveta()
    {
        //источник света
        //значение
        //вывод

        return $this->B22_IstochnikSveta;
    }

    function O21_KonstruktDl4StorPomesh()
    {
        //конструктив (для 4 стор помещ)
        //значение
        //вывод

        return $this->D23_VPR();
    }

    function D23_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D20_Razb() == 1) {
            return 'разборный';
        } elseif ($this->D21_Nerazb() == 1) {
            return 'неразборный';
        } elseif ($this->D22_Pusto() == 1) {
            return '----------------------';
        } else {
            return 0;
        }
    }

    function D20_Razb()
    {
        //разборный
        //умножение
        //вывод

        return $this->D17_RazbPredvar() * $this->B9_4SideIn;
    }

    function D17_RazbPredvar()
    {
        //разборный предварительно
        //значение
        //вывод

        return $this->B16_Konstruct;
    }

    function D21_Nerazb()
    {
        //неразборный
        //умножение
        //вывод

        return $this->D18_NerazbPredvar() * $this->B9_4SideIn;
    }

    function D18_NerazbPredvar()
    {
        //неразборный предварительно
        //если условие = true, то вывести 0
        //иначе вывести 1
        //вывод

        if ($this->D17_RazbPredvar() == 1) {
            return 0;
        } else {
            return 1;
        }
    }

    function D22_Pusto()
    {
        //пусто
        //если условие = true, то вывести 0
        //иначе вывести 1
        //вывод

        if ($this->B9_4SideIn == 1) {
            return 0;
        } else {
            return 1;
        }
    }

    function O22_CenrOtvDl4StorPomeshcm()
    {
        //центр отв (для 4 стор помещ), см
        //значение
        //вывод

        return $this->D31_VPR();
    }

    function D31_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D29_ZnachD27() == 1) {
            return $this->D27_CentrOtverstiyacm();
        } elseif ($this->D30_Pusto() == 1) {
            return '----------------------';
        } else {
            return 0;
        }
    }

    function D29_ZnachD27()
    {
        //значение D27_CentrOtverstiyacm()
        //отнимание
        //вывод

        return $this->B9_4SideIn;
    }

    function D27_CentrOtverstiyacm()
    {
        //центр отверстие, см
        //отнимание
        //вывод

        return $this->D26_GorRazcm() - 24;
    }

    function D26_GorRazcm()
    {
        //размер горизонтальный, см
        //если условие = true, то вывести B12
        //иначе вывести B13
        //вывод

        if ($this->B11_Orientation == 1) {
            return $this->B12_BolshStorona_cm;
        } else {
            return $this->B13_MenshStorona_cm;
        }
    }

    function D30_Pusto()
    {
        //пусто
        //если условие = true, то вывести 0
        //иначе вывести 1
        //вывод

        if ($this->B9_4SideIn == 1) {
            return 0;
        } else {
            return 1;
        }
    }

    function O30_StoimIzgot1shtgrn()
    {
        //стоим изготов 1шт, грн
        //значение
        //вывод

        return $this->J32_BNStoimPlatNDSSRoznica();
    }

    function J32_BNStoimPlatNDSSRoznica()
    {
        //б/н стоим (плат НДС) розница
        //округление и умножение
        //вывод

        return round($this->J31_BNStoimPlatNDSSMaxSkidkoy() * L10_C74_K8, 0);
    }

    function J31_BNStoimPlatNDSSMaxSkidkoy()
    {
        //б/н стоим (плат НДС) с мах скидкой
        //округление и умножение
        //вывод

        return round($this->J26_ZatratiObshiye() * L10_C73_K7, 0);
    }

    function O31_Energopotrebleniyevt()
    {
        //энергопотребление, вт
        //значение
        //вывод

        return 300;
    }

    function O32_Veskg()
    {
        //вес, кг
        //значение
        //вывод

        return $this->L18_ItogoSborka();
    }

    function L18_ItogoSborka()
    {
        //пленка стрейч упаковка
        //прибавление
        //вывод

        return $this->L5_FasadPlastik() + $this->L6_BortPVH() + $this->L7_Till() + $this->L8_OporiLicPlastik() +
            $this->L9_RamaVnutr() + $this->L10_RamaNaruj() + $this->L11_Podvesi() + $this->L13_Elektrika();
    }

    function L5_FasadPlastik()
    {
        //фасад  пластик
        //значение
        //вывод

        return 3.4;
    }

    function L6_BortPVH()
    {
        //борт пвх
        //значение
        //вывод

        return 4.8;
    }

    function L7_Till()
    {
        //тыл
        //значение
        //вывод

        return 0;
    }

    function L8_OporiLicPlastik()
    {
        //опоры лицевого пластика
        //значение
        //вывод

        return 0;
    }

    function L9_RamaVnutr()
    {
        //рама внутренняя
        //значение
        //вывод

        return 3.8;
    }

    function L10_RamaNaruj()
    {
        //рама наружная
        //значение
        //вывод

        return 0;
    }

    function L11_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 0.6;
    }

    function L13_Elektrika()
    {
        //электрика
        //значение
        //вывод

        return 2.2;
    }
}