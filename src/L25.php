<?php
namespace almaz44\light\calculator;
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 21.06.2017
 * Time: 14:08
 */
class L25
    // C-light интегратор лайтбокс 1
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
    public $B16_Tolchina; // конструктив (1-раз/0-нераз)

    public $B18_MaketRazrab; // макет разраб (1-зак/2-L24)
    public $B19_PlenkaLic; // пленка лицевая
    public $B20_FasadAkryl; // фасад акрил
    public $B21_FasadPolikarb; // фасад поликарбонат
    public $B22_IstochnikSveta; // источник света

    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $BolshStorona_cm, $MenshStorona_cm, $CvetBortov, $CvetTill, $Tolchina,
                                $MaketRazrab, $PlenkaLic, $FasadAkryl, $FasadPolikarb, $IstochnikSveta)
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
        $this->B16_Tolchina = $Tolchina;

        $this->B18_MaketRazrab = $MaketRazrab;
        $this->B19_PlenkaLic = $PlenkaLic;
        $this->B20_FasadAkryl = $FasadAkryl;
        $this->B21_FasadPolikarb = $FasadPolikarb;
        $this->B22_IstochnikSveta = $IstochnikSveta;
    }

    // C light - фасад пленка
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
    function D10_2StorPomesh()
    {
        //4 стороны помещение
        //значение
        //вывод
        return 1;
    }
    function E10_VPR()
    {        //ВПР
        //сравнение c 1
        //вывод
        if ($this->D5_KrishaUlica() == 1)
        {
            return 'крыша/козырек улица';
        }
        elseif ($this->D6_StenaUlica() == 1)
        {
            return 'стена улица';
        }
        elseif ($this->D7_StenaPomesh() == 1)
        {
            return 'стена помещение';
        }
        elseif ($this->D8_2StorPomesh() == 1)
        {
            return '2 стороны помещение';
        }
        elseif ($this->D9_4StorPomesh() == 1)
        {
            return '4 стороны помещение';
        }
        else
        {
            return 0;
        }

    }
    function D12_Goriz()
    {
        //горизонтальная
        //если B11_Orientation = 1, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B11_Orientation == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D13_Vertikal()
    {
        //вертикальная
        //если D12_Goriz() = 1, то вывести 0
        //иначе вывести 1
        //вывод

        if ($this->D12_Goriz() == 1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    function D14_Goriz()
    {//значение
        //вывод
        return 1;
    }
    function E14_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D12_Goriz() == 1)
        {
            return 'горизонтальная';
        }
        elseif ($this->D13_Vertikal() == 1)
        {
            return 'вертикальная';
        }
        else
        {
            return 0;
        }

    }

    function D26_GorRazcm()
    {
        //размер горизонтальный, см
        //если условие = true, то вывести B12
        //иначе вывести B13
        //вывод

        if ($this->B11_Orientation == 1)
        {
            return $this->B12_BolshStorona_cm;
        }
        else
        {
            return $this->B13_MenshStorona_cm;
        }
    }
    function D27_CentrOtverstiyacm()
    {
        //центр отверстие, см
        //отнимание
        //вывод

        return $this->D26_GorRazcm() - 24;
    }
    function D29_ZnachD27()
    {
        //значение b9
        //отнимание
        //вывод

        return $this->B9_4SideIn;
    }
    function E29_ZnachD27()
    {
        //значение D27_CentrOtverstiyacm()
        //вывод

        return $this->D27_CentrOtverstiyacm();
    }
    function D30_Pusto()
    {
        //пусто
        //если условие = true, то вывести 0
        //иначе вывести 1
        //вывод

        if ($this->B9_4SideIn == 1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    function D31_VPR()
    {              //вывод
        return 1;
    }
    function E31_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D31_VPR() == 1)
        {
            return '--------';
        }
        elseif ($this->D29_ZnachD27() == 1)
        {
            return 'Пусто';
        }
        else
        {
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
    function D35_Akril()
    {              //вывод
        return 1;
    }
    function E35_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D35_Akril() == 1)
        {
            return 'акрил';
        }
        elseif ($this->D34_Policarb() == 1)
        {
            return 'поликарбонат';
        }
        else
        {
            return 0;
        }
    }
    function D37_Zakazchik()
    {
        //заказчик
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B18_MaketRazrab == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D38_L24()
    {
        //L24
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B18_MaketRazrab == 2)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D39_VPR()
    {              //вывод
        return 1;
    }
    function E39_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D39_VPR() == 1)
        {
            return 'заказчик';
        }
        elseif ($this->D37_Zakazchik() == 1)
        {
            return 'L24';
        }
        else
        {
            return 0;
        }
    }
    function D42_PolnocvetFoto()
    {
        //полноцвет фото
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D43_PolnocvetFotoPlusLaminat()
    {
        //полноцвет фото + ламинат
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 2)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D44_Polnocvet720DPI()
    {
        //полноцвет 720 dpi
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 3)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D45_Polnocvet720DPIPlusLamonat()
    {
        //полноцвет 720 dpi + ламинат
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 4)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D46_EconomWhiteFonPlusApp()
    {
        //эконом, белый фон + аппликация
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 5)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D47_EconomCvetnFonPlusProrez()
    {
        //эконом, цветной фон + прорез
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 6)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D48_EconomCvetnFonPlusApp()
    {
        //эконом, цветной фон + аппликация
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 7)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D49_SvetorassWhiteFonPlusApp()
    {
        //светорассеивающая, белый фон + аппликация
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 8)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D50_SvetorassCvetnFonPlusProrez()
    {
        //светорассеивающая, цветной фон + прорез
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 9)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D51_SvetorassCvetnFonPlusApp()
    {
        //светорассеивающая, цветной фон + аппликация
        //если условие = true, то вывести 1
        //иначе вывести 0
        //вывод

        if ($this->B19_PlenkaLic == 10)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D52_VPR()
    {              //вывод
        return 1;
    }
    function E52_VPR()
    {
        //ВПР
        //сравнение c 1
        //вывод

        if ($this->D52_VPR() == 1)
        {
            return 'полноцвет фото';
        }
        elseif ($this->D43_PolnocvetFotoPlusLaminat() == 1)
        {
            return 'полноцвет фото + ламинат';
        }
        elseif ($this->D44_Polnocvet720DPI() == 1)
        {
            return 'полноцвет 720 dpi';
        }
        elseif ($this->D45_Polnocvet720DPIPlusLamonat() == 1)
        {
            return 'полноцвет 720 dpi + ламинат';
        }
        elseif ($this->D46_EconomWhiteFonPlusApp() == 1)
        {
            return 'эконом, белый фон + аппликация';
        }
        elseif ($this->D47_EconomCvetnFonPlusProrez() == 1)
        {
            return 'эконом, цветной фон + прорез';
        }
        elseif ($this->D48_EconomCvetnFonPlusApp() == 1)
        {
            return 'эконом, цветной фон + аппликация';
        }
        elseif ($this->D49_SvetorassWhiteFonPlusApp() == 1)
        {
            return 'светорассеивающая, белый фон + аппликация';
        }
        elseif ($this->D50_SvetorassCvetnFonPlusProrez() == 1)
        {
            return 'светорассеивающая, цветной фон + прорез';
        }
        elseif ($this->D51_SvetorassCvetnFonPlusApp() == 1)
        {
            return 'светорассеивающая, цветной фон + аппликация';
        }
        else
        {
            return 0;
        }
    }
    function O6_Class16StoimosMaterialov_grn()
    {        //имя конструктора
        //значение
        //вывод
        return 2078;
    }
    function AF6_Class16StoimosMaterialov_grn()
    {        //имя конструктора
        //значение
        //вывод
        return 260;
    }
    function H5_FasadPlastik()
    {
        //фасад  пластик
        //значение
        //вывод

        return $this->O6_Class16StoimosMaterialov_grn();
    }
    function I5_FasadPlastik()
    {
        //фасад  пластик
        //значение
        //вывод

        return 102;
    }
    function K5_FasadPlastik()
    {
        //фасад  пластик
        //значение
        //вывод

        return 128;
    }
    function L5_FasadPlastik()
    {
        //фасад  пластик
        //значение
        //вывод

        return 11;
    }
    function H6_BortPVH()
    {
        //борт пвх
        //значение
        //вывод

        return $this->AF6_Class16StoimosMaterialov_grn();
    }
    function I6_BortPVH()
    {
        //борт пвх
        //значение
        //вывод

        return 86;
    }
    function K6_BortPVH()
    {
        //борт пвх
        //значение
        //вывод

        return 108;
    }
    function L6_BortPVH()
    {
        //борт пвх
        //значение
        //вывод

        return 2.5;
    }
    function H7_Till()
    {
        //тыл
        //значение
        //вывод

        return 0;
    }
    function I7_Till()
    {
        //тыл
        //значение
        //вывод

        return 0;
    }
    function K7_Till()
    {
        //тыл
        //значение
        //вывод

        return 0;
    }
    function L7_Till()
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
    function I8_OporiLicPlastik()
    {
        //опоры лицевого пластика
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
    function L8_OporiLicPlastik()
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

        return 40;
    }
    function I9_RamaVnutr()
    {
        //рама внутренняя
        //значение
        //вывод

        return 26;
    }
    function K9_RamaVnutr()
    {
        //рама внутренняя
        //значение
        //вывод

        return 32;
    }
    function L9_RamaVnutr()
    {
        //рама внутренняя
        //значение
        //вывод

        return 0.8;
    }
    function H10_RamaNaruj()
    {
        //рама наружная
        //значение
        //вывод

        return 44;
    }
    function I10_RamaNaruj()
    {
        //рама наружная
        //значение
        //вывод

        return 46;
    }
    function K10_RamaNaruj()
    {
        //рама наружная
        //значение
        //вывод

        return 57;
    }
    function L10_RamaNaruj()
    {
        //рама наружная
        //значение
        //вывод

        return 1;
    }
    function H11_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 0;
    }
    function I11_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 0;
    }
    function K11_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 0;
    }
    function L11_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 0;
    }
    function H12_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 56;
    }
    function I12_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 21;
    }
    function K12_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 26;
    }
    function L12_Podvesi()
    {
        //подвесы
        //значение
        //вывод

        return 0.6;
    }
    function H14_Elektrika()
    {
        //электрика
        //значение
        //вывод

        return 1769;
    }
    function I14_Elektrika()
    {
        //электрика
        //значение
        //вывод

        return 160;
    }
    function K14_Elektrika()
    {
        //электрика
        //значение
        //вывод

        return 200;
    }
    function L14_Elektrika()
    {
        //электрика
        //значение
        //вывод

        return 1.7;
    }
    function H16_PlenkaFasad()
    {
        //пленка фасад
        //значение
        //вывод

        return 315;
    }
    function I16_PlenkaFasad()
    {
        //пленка фасад
        //значение
        //вывод

        return 108;
    }
    function K16_PlenkaFasad()
    {
        //пленка фасад
        //значение
        //вывод

        return 75;
    }
    function H17_PlenkaBortTill()
    {
        //пленка борт/тыл
        //значение
        //вывод

        return 52;
    }
    function I17_PlenkaBortTill()
    {
        //пленка борт/тыл
        //значение
        //вывод

        return 42;
    }
    function K17_PlenkaBortTill()
    {
        //пленка борт/тыл
        //значение
        //вывод

        return 53;
    }
    function H18_PlenkaStreych()
    {
        //пленка стрейч упаковка
        //значение
        //вывод

        return 12;
    }
    function I18_PlenkaStreych()
    {
        //пленка стрейч упаковка
        //значение
        //вывод

        return 8;
    }
    function K18_PlenkaStreych()
    {
        //пленка стрейч упаковка
        //значение
        //вывод

        return 10;
    }
    function H19_ItogoSborka()
    {
        //итого сборка
        //прибавление и округление
        //вывод

        return round($this->H5_FasadPlastik()+$this->H6_BortPVH()+$this->H7_Till()+$this->H8_OporiLicPlastik()
            +$this->H9_RamaVnutr()+$this->H10_RamaNaruj()+$this->H11_Podvesi()+$this->H12_Podvesi()
            +$this->H14_Elektrika()+$this->H16_PlenkaFasad()+$this->H17_PlenkaBortTill()
            +$this->H18_PlenkaStreych(),0);
    }
    function I19_ItogoSborka()
    {
        //пленка стрейч упаковка
        //прибавление и округление
        //вывод

        return round($this->I5_FasadPlastik()+$this->I6_BortPVH()+$this->I7_Till()
            +$this->I8_OporiLicPlastik()+$this->I9_RamaVnutr()+$this->I10_RamaNaruj()
            +$this->I11_Podvesi()+$this->I12_Podvesi()+$this->I14_Elektrika()+$this->I16_PlenkaFasad()
            +$this->I17_PlenkaBortTill()+$this->I18_PlenkaStreych(),0);
    }
    function K19_ItogoSborka()
    {
        //пленка стрейч упаковка
        //прибавление
        //вывод

        return $this->K5_FasadPlastik()+$this->K6_BortPVH()+$this->K7_Till()+$this->K8_OporiLicPlastik()
            +$this->K9_RamaVnutr()+$this->K10_RamaNaruj()+$this->K11_Podvesi()+$this->K12_Podvesi()+$this->K14_Elektrika()
            +$this->K16_PlenkaFasad()+$this->K17_PlenkaBortTill()+$this->K18_PlenkaStreych();
    }
    function L19_ItogoSborka()
    {
        //пленка стрейч упаковка
        //прибавление
        //вывод

        return $this->L5_FasadPlastik()+$this->L6_BortPVH()+$this->L7_Till()+$this->L8_OporiLicPlastik()+
            $this->L9_RamaVnutr()+$this->L10_RamaNaruj()+$this->L11_Podvesi()+$this->L14_Elektrika();
    }
    function H20_Snabjeniye()
    {
        //снабжение
        //значение
        //вывод

        return 182;
    }
    function I20_Snabjeniye()
    {
        //снабжение
        //значение
        //вывод

        return 198;
    }
    function K20_Snabjeniye()
    {
        //снабжение
        //значение
        //вывод

        return 248;
    }
    function I21_Koef2()
    {
        //управляющий
        //значение
        //вывод

        return 180;
    }
    function I22_Koef3()
    {//умножение, деление и округление
        //вывод

        return round($this->I19_ItogoSborka()*L10_C69_K3/100, 0);
    }
    function I23_Koef4()
    {
        //прибыль
        //значение
        //вывод

        return round($this->I19_ItogoSborka()*L10_C70_K4/100, 0);

    }
    function H24_Koef5()
    {
        //значение
        //вывод

        return round($this->H19_ItogoSborka()*L10_C72_K6/100, 0);

    }
    function H25_Koef6()
    {

        //значение
        //вывод

        return round($this->H19_ItogoSborka()*L10_C71_K5/100, 0);

    }
    function H26_StoimosBazovay()
    {
        //пленка стрейч упаковка
        //прибавление
        //вывод

        return $this->H19_ItogoSborka()+$this->H20_Snabjeniye()+$this->H24_Koef5()+$this->H25_Koef6();
    }
    function I26_StoimosBazovay()
    {
        //пленка стрейч упаковка
        //прибавление
        //вывод

        return $this->I19_ItogoSborka()+$this->I20_Snabjeniye()+$this->I21_Koef2()+$this->I22_Koef3()+$this->I23_Koef4();
    }
    function K26_StoimosBazovay()
    {
        //значение
        //вывод

        return round($this->K19_ItogoSborka()/480, 1);

    }
    function J5_FasadPlastik_grn()
    {//сложение
        //вывод
        return $this->H5_FasadPlastik()+$this->I5_FasadPlastik();
    }
    function J6_BortPVX_grn()
    {//сложение
        //вывод
        return $this->H6_BortPVH()+$this->I6_BortPVH();
    }
    function J7_Till_grn()
    {//сложение
        //вывод
        return $this->H7_Till()+$this->I7_Till();
    }
    function J8_OporiLiucevogoPlastika_grn()
    {//сложение
        //вывод
        return $this->H8_OporiLicPlastik()+$this->I8_OporiLicPlastik();
    }
    function J9_RamaVnytrenia_grn()
    {//сложение
        //вывод
        return $this->H9_RamaVnutr()+$this->I9_RamaVnutr();
    }
    function J10_RamaElektro_grn()
    {//сложение
        //вывод
        return $this->H10_RamaNaruj()+$this->I10_RamaNaruj();
    }
    function J11_RamaNaryshnaa_grn()
    {//сложение
        //вывод
        return $this->H11_Podvesi()+$this->I11_Podvesi();
    }
    function J12_Podvesi_grn()
    {//сложение
        //вывод
        return $this->H12_Podvesi()+$this->I12_Podvesi();
    }
    function J14_Elektrika_grn()
    {//сложение
        //вывод
        return $this->H14_Elektrika()+$this->I14_Elektrika();
    }
    function J16_FasadPlenka_grn()
    {//сложение
        //вывод
        return $this->H16_PlenkaFasad()+$this->I16_PlenkaFasad();
    }
    function J17_BortTilPlenka_grn()
    {//сложение
        //вывод
        return $this->H17_PlenkaBortTill()+$this->I17_PlenkaBortTill();
    }
    function J18_PlenkaStreichUpak_grn()
    {//сложение
        //вывод
        return $this->H18_PlenkaStreych()+$this->I18_PlenkaStreych();
    }
    function J26_ZatratiObshiye()
    {
        //затраты общие
        //прибавление
        //вывод

        return $this->H26_StoimosBazovay()+$this->I26_StoimosBazovay();
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

        return $this->E10_VPR();
    }
    function O10_OrientText()
    {
        //ориентация текст
        //значение
        //вывод

        return $this->E14_VPR();
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

        return $this->B16_Tolchina;
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

        return $this->E39_VPR();
    }
    function O18_PlenkaLic()
    {
        //пленка лицевая
        //значение
        //вывод

        return $this->E52_VPR();
    }
    function O19_PlastikLic()
    {
        //пластик лицевой
        //значение
        //вывод

        return $this->E35_VPR();
    }
    function O20_IstochnikSveta()
    {
        //источник света
        //значение
        //вывод

        return $this->B22_IstochnikSveta;
    }

    function O22_CenrOtvDl4StorPomeshcm()
    {
        //центр отв (для 4 стор помещ), см
        //значение
        //вывод

        return $this->E31_VPR();
    }
    function O28_Snabzhenie_grn()
    {
        //значение
        //вывод

        return $this->H20_Snabjeniye()+$this->I20_Snabjeniye();
    }
    function O29_StoimostBazovya_grn()
    {        //значение
        //вывод
        return $this->J26_ZatratiObshiye();
    }
    function O31_Energopotrebleniyevt()
    {
        //энергопотребление, вт
        //значение
        //вывод

        return 138;
    }
    function O32_Veskg()
    {
        //вес, кг
        //значение
        //вывод

        return round($this->L19_ItogoSborka(),1);
    }
}