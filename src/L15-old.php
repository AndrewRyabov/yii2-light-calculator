<?php namespace almaz44\light\calculator;
include_once __DIR__ . '/L10.php';

/**
 * борт/тыл пленка_!_фасад пленка_!_упаковка в стрейч пленку
 * Created by PhpStorm.
 * User: Andrew
 * Date: 21.06.2017
 * Time: 14:08
 */
class L15_1
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
    public $B14_ColorSide; // цвет бортов
    public $B15_ColorBack; // цвет тыла

    // Промежуточные данные.
    public $VarIspoln;

    // классы.
    private $L09;

    public function __construct($C_light = 0, $S_light = 1,
                                $RoofVisorOut = 0, $WallOut = 0, $WallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $Orientation = 1,
                                $MaxSide_cm = 300, $MinSide_cm = 60,
                                $ColorSide = 0, $ColorBack = 0,
        // Дополнительные параметры для L15.
                                $LicIzobr = 1, $CvetBort =1, $CvetTil = 0,
                                $LevVerhUgol = 0, $PravVerhUgol = 0, $PravNijnUgol = 0, $LevNijnUgol = 0,
                                $MaketImg = 1, $PlenkLic = 3, $PlastLic = 2, $Light = 1
    )
    {
        // вариант исполнения для формирования исходных данных.
        $VarIspoln = 1 * $RoofVisorOut + 2 * $WallOut + 3 * $WallIn + 4 * $SideIn2 + 5 * $SideIn4;
        $this->VarIspoln = $VarIspoln;

        // Формируем исходные данные.
        $this->L09 = new L09($C_light, $S_light, $VarIspoln,
                            $Orientation,$MaxSide_cm, $MinSide_cm, $LicIzobr, $CvetBort, $CvetTil,
                            $LevVerhUgol, $PravVerhUgol, $PravNijnUgol, $LevNijnUgol,
                            $MaketImg, $PlenkLic, $PlastLic, $Light );

        // Заполнение входных данных.
        $this->B5_RoofVisorOut = $RoofVisorOut;
        $this->B6_WallOut = $WallOut;
        $this->B7_WallIn = $WallIn;
        $this->B8_2SideIn = $SideIn2;
        $this->B9_4SideIn = $SideIn4;

        $this->B11_Orientation = $this->L09->J21_Orientation;
        $this->B12_MaxSide_cm = $this->L09->J22_MaxSide_cm;
        $this->B13_MinSide_cm = $this->L09->J23_MinSide_cm;
        $this->B14_ColorSide = $this->L09->J25_ColorSide;
        $this->B15_ColorBack = $this->L09->J26_ColorBack;

    }

    // C light - пленка борт/тыл

    function E5_FillSide()
    {
        // пленка борт (1-да/0-нет)
        //вывод

        return ($this->B14_ColorSide == 1) ? 1 : 0;
    }
    function E6_FilmBack()
    {
        // пленка тыл (1-да/0-нет)
        //вывод

        return ($this->B15_ColorBack == 1) ? 1 : 0;
    }
    function H5_GorisR_cm()
    {
        //горизонтальный размер, см
        //если ориентация = 1, то вернуть большую сторону, см
        //иначе вернуть меньшую сторону, см
        //вывод

        if ($this->B11_Orientation == 1){
            return $this->B12_MaxSide_cm;
        }
        else{
            return $this->B13_MinSide_cm;
        }

    }
    function H6_VerticalR_cm()
    {
        //вертикальный размер, см
        //если ориентация = 2, то вернуть большую сторону, см
        //иначе - вернуть меньшую сторону, см
        //вывод

        if ($this->B11_Orientation == 2){
            return $this->B12_MaxSide_cm;
        }
        else{
            return $this->B13_MinSide_cm;
        }

    }
    function H7_GorisR_m()
    {
        //горизонтальный размер, м
        //деление переменной на 100
        //округление переменной до 2 знаков
        //вывод

        return round($this->H5_GorisR_cm()/100, 2);
    }
    function H8_GorisRTill4Stor_m()
    {
        //горизонтальный размер тыл 4 стор., м
        //отнимание от перменной числа
        //вывод
        return ($this->H7_GorisR_m()-0.24);
    }
    function H9_VerticalR_m()
    {
        //вертикальный размер размер, м
        //деление переменной на 100
        //округление переменной до 2 знаков
        //вывод

        return round($this->H6_VerticalR_cm()/100, 2);
    }
    function H11_PerimeKrisha_mp()
    {
        //периметр крыша, мп
        //прибавление 3 переменных
        //вывод

        return $this->H9_VerticalR_m()+$this->H7_GorisR_m()+$this->H9_VerticalR_m();
    }
    function H12_PerimeUlica_mp()
    {
        //периметр улица, мп
        //прибавление 3 переменных
        //вывод

        return $this->H9_VerticalR_m()+$this->H7_GorisR_m()+$this->H9_VerticalR_m();
    }
    function H13_PerimeStenaPomesh_mp()
    {
        //периметр стена помещение, мп
        //прибавление 3 переменных
        //вывод

        return $this->H9_VerticalR_m()+$this->H7_GorisR_m()+$this->H9_VerticalR_m();
    }
    function H14_Perime2StorPomesh_mp()
    {
        //периметр 2 стор. помещение, мп
        //прибавление 3 переменных
        //вывод

        return $this->H9_VerticalR_m()+$this->H7_GorisR_m()+$this->H9_VerticalR_m();
    }
    function H15_Perime4StorPomesh_mp()
    {
        //периметр 4 стор. помещение, мп
        //умножение в 4 раза
        //вывод

        return ($this->H7_GorisR_m())*4;
    }
    function H19_PloshBKrisha_m2()
    {
        //площадь борт крыша, м2
        //умножение в 0.12 раза
        //вывод

        return ($this->H11_PerimeKrisha_mp())*0.12;
    }
    function H20_PloshBUlica_m2()
    {
        //площадь борт улица, м2
        //умножение в 0.12 раза
        //вывод

        return ($this->H12_PerimeUlica_mp())*0.12;
    }
    function H21_PloshBSPomesh_m2()
    {
        //площадь борт стена помещение, м2
        //умножение в 0.12 раза
        //вывод

        return ($this->H13_PerimeStenaPomesh_mp())*0.12;
    }
    function H22_PloshB2StorPomesh_m2()
    {
        //площадь борт 2 стороны помещение, м2
        //умножение в 0.24 раза
        //вывод

        return ($this->H14_Perime2StorPomesh_mp())*0.24;
    }
    function H23_PloshB4StorPomesh_m2()
    {
        //площадь борт 4 стороны помещение, м2
        //умножение в 0.12 раза
        //вывод

        return ($this->H15_Perime4StorPomesh_mp())*0.12;
    }
    function H25_PloshTKrisha_m2()
    {
        //площадь тыл крыша, м2
        //перемножение переменных
        //вывод

        return ($this->H7_GorisR_m())*($this->H9_VerticalR_m());
    }
    function H26_PloshTUlica_m2()
    {
        //площадь тыл улица, м2
        //перемножение переменных
        //вывод

        return ($this->H7_GorisR_m())*($this->H9_VerticalR_m());
    }
    function H27_PloshTSPomesh_m2()
    {
        //площадь тыл стена помещение, м2
        //перемножение переменных
        //вывод

        return ($this->H7_GorisR_m())*($this->H9_VerticalR_m());
    }
    function H28_Plosh4SPomesh_m2()
    {
        //площадь 4 стор. помещение, м2
        //перемножение переменных и умножение на 4
        //вывод

        return ($this->H8_GorisRTill4Stor_m())*($this->H9_VerticalR_m())*4;
    }
    function H30_PloshBPredvar_m2()
    {
        //площадь борт предварительно, м2
        //арифметические вычисления
        //вывод

        return $this->H19_PloshBKrisha_m2()*$this->B5_RoofVisorOut+$this->H20_PloshBUlica_m2()*$this->B6_WallOut+$this->H21_PloshBSPomesh_m2()*$this->B7_WallIn+$this->H22_PloshB2StorPomesh_m2()*$this->B8_2SideIn+$this->H23_PloshB4StorPomesh_m2()*$this->B9_4SideIn;
    }
    function H31_PloshB_m2()
    {
        //площадь борт, м2
        //перемножение переменных
        //вывод

        return $this->H30_PloshBPredvar_m2()*$this->E5_FillSide();
    }
    function H32_PloshTPredvar_m2()
    {
        //площадь тыл предварительно, м2
        //арифметические вычисления
        //вывод

        return $this->H25_PloshTKrisha_m2()*$this->B5_RoofVisorOut+$this->H26_PloshTUlica_m2()*$this->B6_WallOut+$this->H27_PloshTSPomesh_m2()*$this->B7_WallIn+$this->H28_Plosh4SPomesh_m2()*$this->B9_4SideIn;
    }
    function H33_PloshTill_m2()
    {
        //площадь тыл, м2
        //перемножение переменных
        //вывод

        return $this->H32_PloshTPredvar_m2()*$this->E6_FilmBack();
    }
    function K5_KrishaBort_min()
    {
        //крыша борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H11_PerimeKrisha_mp()*L10_BT43_SeamingSideInFill_120mm;
    }
    function K6_UlicaBort_min()
    {
        //улица борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H12_PerimeUlica_mp()*L10_BT43_SeamingSideInFill_120mm;
    }
    function K7_StenaPBort_min()
    {
        //стена помещение борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H13_PerimeStenaPomesh_mp()*L10_BT43_SeamingSideInFill_120mm;
    }
    function K8_2StoroniBort_min()
    {
        //2 стороны борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H14_Perime2StorPomesh_mp()*L10_BT44_SeamingSideInFile_240mm;
    }
    function K9_4StoroniBort_min()
    {
        //4 стороны борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->H15_Perime4StorPomesh_mp()*L10_BT43_SeamingSideInFill_120mm;
    }
    function K11_KrishaTil_min()
    {
        //крыша тыл, мин
        //перемножение переменной и константы
        //вывод

        return $this->H25_PloshTKrisha_m2()*L10_BT33_KnurlFullColor_m2;
    }
    function K12_UlicaTil_min()
    {
        //улица тыл, мин
        //перемножение переменной и константы
        //вывод

        return $this->H26_PloshTUlica_m2()*L10_BT33_KnurlFullColor_m2;
    }
    function K13_StenaPTil_min()
    {
        //стена помещение тыл, мин
        //перемножение переменной и константы
        //вывод

        return $this->H27_PloshTSPomesh_m2()*L10_BT33_KnurlFullColor_m2;
    }
    function K14_4StoroniTil_min()
    {
        //4 стороны тыл, мин
        //перемножение переменной и константы
        //вывод

        return $this->H28_Plosh4SPomesh_m2()*L10_BT33_KnurlFullColor_m2;
    }
    function K16_BortPredvar_min()
    {
        //борт предварительно, мин
        //арифметические вычисления
        //вывод

        return $this->K5_KrishaBort_min()*$this->B5_RoofVisorOut+$this->K6_UlicaBort_min()*$this->B6_WallOut+$this->K7_StenaPBort_min()*$this->B7_WallIn+$this->K8_2StoroniBort_min()*$this->B8_2SideIn+$this->K9_4StoroniBort_min()*$this->B9_4SideIn;
    }
    function K17_Bort_min()
    {
        //борт, мин
        //перемножение переменной и константы
        //вывод

        return $this->K16_BortPredvar_min()*$this->E5_FillSide();
    }
    function K18_TilPredvar_min()
    {
        //тыл предварительно, мин
        //арифметические вычисления
        //вывод

        return $this->K11_KrishaTil_min()*$this->B5_RoofVisorOut+$this->K12_UlicaTil_min()*$this->B6_WallOut+$this->K13_StenaPTil_min()*$this->B7_WallIn+$this->K14_4StoroniTil_min()*$this->B9_4SideIn;
    }
    function K19_Til_min()
    {
        //тыл, мин
        //перемножение переменной и константы
        //вывод

        return $this->K18_TilPredvar_min()*$this->E6_FilmBack();
    }
    function N5_PloshPlenki_m2()
    {
        //площадь пленки, м2
        //арифметические вычисления
        //округление
        //вывод

        return round($this->H31_PloshB_m2()*L10_BB87_K_PererashPlenkBort+$this->H33_PloshTill_m2()*L10_BB88_K_PererashPlenkTil, 2);
    }
    function N6_PlenkaItogo_mp()
    {
        //пленка (1,2 м) итого, мп
        //перемножение
        //округление
        //вывод

        return round($this->N5_PloshPlenki_m2()/1.2, 2);
    }
    function N7_StoimPlenki_grn()
    {
        //стоимость пленки, грн
        //перемножение
        //округление
        //вывод

        return round($this->N5_PloshPlenki_m2()*L10_U12_RitramaM300E, 0);
    }
    function N11_TrudNanes_min()
    {
        //трудоемкость нанесения , мин
        //прибавление
        //округление
        //вывод

        return round($this->K17_Bort_min()+$this->K19_Til_min(), 0);
    }
    function N12_StoimRaboti_grn()
    {
        //стоимость работы, грн
        //перемножение
        //округление
        //вывод

        return round($this->N11_TrudNanes_min()*L10_C67_K1, 0);
    }
    function N24_Itogo_grn()
    {
        //итого, грн
        //прибавление
        //вывод

        return $this->N7_StoimPlenki_grn()+$this->N12_StoimRaboti_grn();
    }
}

class L15_2
{
    // Входные параметры:
    public $R5_RoofVisorOut; // крыша/козырек улица
    private $R6_WallOut; // стена улица
    private $R7_WallIn; // стена помещение
    private $R8_2SideIn; // 2 стороны помещение
    private $R9_4SideIn; // 4 стороны помещение

    private $R11_BolshStorona_cm; // большая сторона, см
    private $R12_MenshStorona_cm; // меньшая сторона, см
    private $R13_LicIzobr; // лицевое изображение

    private $R15_MaketIzobr; // макет изображения
    private $R16_PlenkaLic; // пленка лицевая

    public function __construct($RoofVisorOut = 0, $WallOut = 0, $WallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $BolshStorona_cm = 300, $MenshStorona_cm = 60,
                                $LicIzobr = 1,
                                $MaketIzobr = 1, $PlenkaLic = 3)
    {
        // Заполнение входных данных.
        $this->R5_RoofVisorOut = $RoofVisorOut;
        $this->R6_WallOut = $WallOut;
        $this->R7_WallIn = $WallIn;
        $this->R8_2SideIn = $SideIn2;
        $this->R9_4SideIn = $SideIn4;

        $this->R11_BolshStorona_cm = $BolshStorona_cm;
        $this->R12_MenshStorona_cm = $MenshStorona_cm;
        $this->R13_LicIzobr = $LicIzobr;

        $this->R15_MaketIzobr = $MaketIzobr;
        $this->R16_PlenkaLic = $PlenkaLic;

    }

    // C light - фасад пленка

    function U6_2Storony()
    {
        //2 стороны (1-да/0-нет)
        //вывод

        return $this->R8_2SideIn;
    }
    function U7_4Storony()
    {
        //4 стороны (1-да/0-нет)
        //вывод

        return $this->R9_4SideIn;
    }
    function U5_1Storona()
    {
        //1 сторона (1-да/0-нет)
        //если 2 стороны = 0 и 4 стороны = 0, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->U6_2Storony() == 0 and $this->U7_4Storony() == 0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U9_PlenkaFasadEst()
    {
        //пленка фасад есть (1-да/0-нет)
        //если лицевое изображение = 1, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R13_LicIzobr == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U10_DesignCreate()
    {
        //дизайн создать (1-да/0-нет)
        //если лицевое изображение = 1 и макет изображения = 2, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R13_LicIzobr == 1 and $this->R15_MaketIzobr == 2)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U11_DesignCheck()
    {
        //дизайн проверить (1-да/0-нет)
        //если лицевое изображение = 1 и макет изображения = 1, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R13_LicIzobr == 1 and $this->R15_MaketIzobr == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U13_FullColorPhoto()
    {
        //полноцвет фото (1-да/0-нет)
        //пленка лицевая = 1, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U14_FullColorPhotoPlusLamin()
    {
        //полноцвет фото + ламинат (1-да/0-нет)
        //пленка лицевая = 2, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 2)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U15_FullColor720()
    {
        //полноцвет 720 (1-да/0-нет)
        //пленка лицевая = 3, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 3)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U16_FullColor720PlusLamin()
    {
        //полноцвет 720 + ламинат (1-да/0-нет)
        //пленка лицевая = 4, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 4)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U17_EconWhitePlusApplication()
    {
        //экон, белый + аппликация (1-да/0-нет)
        //пленка лицевая = 5, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 5)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U18_EconWhitePlusProrez()
    {
        //экон, цветной + прорез (1-да/0-нет)
        //пленка лицевая = 6, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 6)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U19_EconColorfullPlusApp()
    {
        //экон, цветной + аппликация (1-да/0-нет)
        //пленка лицевая = 7, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 7)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U20_LWhitePlusApp()
    {
        //свет, белый + аппликация (1-да/0-нет)
        //пленка лицевая = 8, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 8)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U21_LColorfullPlusProrez()
    {
        //свет, цветной + прорез (1-да/0-нет)
        //пленка лицевая = 9, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 9)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U22_LColorfullPlusApp()
    {
        //свет, цветной + аппликация (1-да/0-нет)
        //пленка лицевая = 10, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R16_PlenkaLic == 10)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U24_FasadColorfullPlenka()
    {
        //фасад цветная пленка (1-да/0-нет)
        //прибавление и умножение переменных
        //вывод

        return ($this->U17_EconWhitePlusApplication()+$this->U18_EconWhitePlusProrez()+$this->U19_EconColorfullPlusApp()+$this->U20_LWhitePlusApp()+$this->U21_LColorfullPlusProrez()+$this->U22_LColorfullPlusApp())*$this->U9_PlenkaFasadEst();
    }
    function U26_Svetorass()
    {
        //светорассеивающая (1-да/0-нет)
        //прибавление переменных
        //вывод

        return $this->U20_LWhitePlusApp()+$this->U21_LColorfullPlusProrez()+$this->U22_LColorfullPlusApp();
    }
    function U27_KUdorojLRitrama()
    {
        //коэф удорожания  свет "Ritrama" (1-да/0-нет)
        //если светорассеивающая = 1, то вывести L10_U13_RitramaTRLSK
        //иначе - вывести 1
        //вывод

        if ($this->U26_Svetorass() == 1)
        {
            return L10_U13_RitramaTRLSK;
        }
        else
        {
            return 1;
        }

    }

    function U29_BolshStorNeBol30cm()
    {
        //большая сторона не более 30 см
        //если большая сторона, см <= 30, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R11_BolshStorona_cm <= 30)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function U30_BolshStorBol60cm()
    {
        //большая сторона более 60 см
        //если большая сторона, см > 60, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R11_BolshStorona_cm > 60)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function U31_BolshStorNeBol60cm()
    {
        //большая сторона не более 60 см
        //если большая сторона, см <= 60, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R11_BolshStorona_cm <= 60)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function U33_BolshStorNeBol120cm()
    {
        //большая сторона не более 120 см
        //если большая сторона, см <= 120, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R11_BolshStorona_cm <= 120)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function U32_BolshBol60cmAndMen120cm()
    {
        //боль более 60 см и менее 120 см
        //перемножение переменных
        //вывод

        return $this->U30_BolshStorBol60cm()*$this->U33_BolshStorNeBol120cm();
    }
    function U34_BolshStorBol120cm()
    {
        //большая сторона более 120 см
        //если большая сторона, см > 120, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R11_BolshStorona_cm > 120)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function U35_MenshStorNeBol60cm()
    {
        //меньшая сторона не более 60 см
        //меньшая сторона, см <= 60, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R12_MenshStorona_cm <= 60)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function U36_MenshStorBol60cm()
    {
        //меньшая сторона более 60 см
        //меньшая сторона, см > 60, то вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->R12_MenshStorona_cm > 60)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }
    function U37_BolshBol120cmMenshMen60cm()
    {
        //боль более 120 см, мень менее 60 см
        //перемножение переменных
        //вывод

        return $this->U34_BolshStorBol120cm()*$this->U35_MenshStorNeBol60cm();
    }
    function U38_BolshBol120cmMenshBol60cm()
    {
        //боль более 120 см, мень более 60 см
        //перемножение переменных
        //вывод

        return $this->U34_BolshStorBol120cm()*$this->U36_MenshStorBol60cm();
    }
    function X5_BolshStor_m()
    {
        //большая сторона, м
        //деление и округление
        //вывод

        return round($this->R11_BolshStorona_cm/100, 2);
    }
    function X5_BolshStorm()
    {
        //большая сторона, м
        //деление и округление
        //вывод

        return round($this->R11_BolshStorona_cm/100, 2);
    }
    function X6_MenshStorm()
    {
        //меньшая сторона, м
        //деление и округление
        //вывод

        return round($this->R12_MenshStorona_cm/100, 2);
    }
    function X8_KolFasadov()
    {
        //количество фасадов
        //умножение и прибавление
        //вывод

        return 1*$this->U5_1Storona()+2*$this->U6_2Storony()+4*$this->U7_4Storony();
    }
    function X9_PloshFasadam2()
    {
        //площадь фасада, м2
        //умножение
        //вывод

        return $this->X5_BolshStorm()*$this->X6_MenshStorm();
    }
    function X10_PloshAllFasadovm2()
    {
        //площадь всех фасадов, м2
        //умножение
        //вывод

        return $this->X9_PloshFasadam2()*$this->X8_KolFasadov();
    }
    function X11_RaschPFasadDlTrudm2()
    {
        //расчетная площ. фасадов для трудоем., м2
        //если площадь всех фасадов, м2 > L10_BT32_MinCalcSqureFullColor_m2, то вернуть площадь всех фасадов, м2
        //иначе - вернуть L10_BT32_MinCalcSqureFullColor_m2
        //вывод

        if ($this->X10_PloshAllFasadovm2() > L10_BT32_MinCalcSqureFullColor_m2)
        {
            return $this->X10_PloshAllFasadovm2();
        }
        else
        {
            return L10_BT32_MinCalcSqureFullColor_m2;
        }
    }
    function X12_PlenkaDlAppm2()
    {
        //пленка для аппликации, м2
        //умножение
        //вывод

        return $this->X8_KolFasadov()*$this->X9_PloshFasadam2()*L10_BB93_K_PloshFasadPloshPlenkDlApp;
    }
    function X13_PlenkaDlAppgrn()
    {
        //пленка для аппликации, грн.
        //умножение
        //вывод

        return $this->X12_PlenkaDlAppm2()*L10_U12_RitramaM300E*$this->U27_KUdorojLRitrama();
    }
    function X14_PerimetrIzobrmp()
    {
        //периметр изображения, мп
        //прибавление и умножение
        //вывод

        return ($this->X5_BolshStorm()+$this->X6_MenshStorm()+$this->X5_BolshStorm()+$this->X6_MenshStorm())*$this->X8_KolFasadov();
    }
    function X15_DlinaResamp()
    {
        //длинна реза, мп
        //умножение
        //вывод

        return $this->X14_PerimetrIzobrmp()*L10_BB95_K_PerimVivesDlinaResaPlot;
    }
    function X16_StoimRezamp()
    {
        //стоимость реза, мп
        //умножение
        //вывод

        return $this->X15_DlinaResamp()*L10_U27_PlotterCutLexx;
    }
    function X17_PlenkaMontajm2()
    {
        //пленка монтажная, м2
        //умножение
        //вывод

        return $this->X9_PloshFasadam2()*L10_BB94_K_PloshFasadPloshPlenkTransp;
    }
    function X18_PlenkaMontajgrn()
    {
        //пленка монтажная, грн
        //умножение
        //вывод

        return $this->X17_PlenkaMontajm2()*L10_U25_AssemblyFilm;
    }
    function X21_1StBolshNeBol120cmm2()
    {
        //1 ст. большая, не более 120 см, м2
        //умножение
        //вывод

        return $this->X6_MenshStorm()*1.2;
    }
    function X22_1StBolshBol120cmm2()
    {
        //1 ст. большая, более 120 см, м2
        //умножение
        //вывод

        return $this->X5_BolshStorm()*1.2;
    }
    function X23_Plenka1Storm2()
    {
        //пленка 1 сторона, м2
        //алгебраические выражения
        //вывод

        return $this->X21_1StBolshNeBol120cmm2()*$this->U33_BolshStorNeBol120cm()+$this->X22_1StBolshBol120cmm2()*$this->U34_BolshStorBol120cm();
    }
    function X24_Plenka1Storgrn()
    {
        //пленка 1 сторона, грн.
        //умножение
        //вывод

        return $this->X23_Plenka1Storm2()*L10_BB85_K_PererashPlenkFasad*L10_U12_RitramaM300E*$this->U27_KUdorojLRitrama();
    }
    function X26_2StorBolshNeBol60cmm2()
    {
        //2 стор. большая, не более 60 см, м2
        //умножение
        //вывод

        return $this->X6_MenshStorm()*1.2;
    }
    function X27_2StorBolshBol60cmAndMen120cmm2()
    {
        //2 ст. боль. более 60 см и менее 120 см, м2
        //умножение
        //вывод

        return $this->X6_MenshStorm()*1.2*2;
    }
    function X28_2StorBolshBol120cmMenshMen60cmm2()
    {
        //2 ст. боль более 120 см, мень менее 60 см, м2
        //умножение
        //вывод

        return $this->X5_BolshStor_m()*1.2;
    }
    function X29_2StorBolshBol120cmMenBol60cmm2()
    {
        //2 ст. боль более 120 см, мень более 60 см, м2
        //умножение
        //вывод

        return $this->X5_BolshStor_m()*1.2*2;
    }
    function X30_Plenka2Storm2()
    {
        //пленка 2 стороны, м2
        //алгебраические выражения
        //вывод

        return $this->X26_2StorBolshNeBol60cmm2()*$this->U31_BolshStorNeBol60cm()+$this->X27_2StorBolshBol60cmAndMen120cmm2()*$this->U32_BolshBol60cmAndMen120cm()+$this->X28_2StorBolshBol120cmMenshMen60cmm2()*$this->U37_BolshBol120cmMenshMen60cm()+$this->X29_2StorBolshBol120cmMenBol60cmm2()*$this->U38_BolshBol120cmMenshBol60cm();
    }
    function X31_Plenka2Storgrn()
    {
        //пленка 2 стороны, грн.
        //умножение
        //вывод

        return $this->X30_Plenka2Storm2()*L10_BB85_K_PererashPlenkFasad*L10_U12_RitramaM300E*$this->U27_KUdorojLRitrama();
    }
    function X33_4StorBolshNeBol30cmm2()
    {
        //4 стор. большая, не более 30 см, м2
        //умножение
        //вывод

        return $this->X6_MenshStorm()*1.2;
    }
    function X34_4StorBolshBol60cmAndMen120cmm2()
    {
        //4 ст. боль. более 60 см и менее 120 см, м2
        //умножение
        //вывод

        return $this->X6_MenshStorm()*1.2*2;
    }
    function X35_4StorBolshBol120cmMenshMen60cmm2()
    {
        //4 ст. боль более 120 см, мень менее 60 см, м2
        //умножение
        //вывод

        return $this->X5_BolshStorm()*1.2*2;
    }
    function X36_4StorBolshBol120cmMenshBol60cmm2()
    {
        //4 ст. боль более 120 см, мень более 60 см, м2
        //умножение
        //вывод

        return $this->X5_BolshStorm()*1.2*4;
    }
    function X37_Plemka4Storm2()
    {
        //пленка 4 стороны, м2
        //арифметичиские вычисления
        //вывод

        return $this->X33_4StorBolshNeBol30cmm2()*$this->U29_BolshStorNeBol30cm()+$this->X34_4StorBolshBol60cmAndMen120cmm2()*$this->U32_BolshBol60cmAndMen120cm()+$this->X35_4StorBolshBol120cmMenshMen60cmm2()*$this->U37_BolshBol120cmMenshMen60cm()+$this->X36_4StorBolshBol120cmMenshBol60cmm2()*$this->U38_BolshBol120cmMenshBol60cm();
    }
    function X38_Plemka4Storgrn()
    {
        //пленка 4 стороны, грн.
        //арифметичиские вычисления
        //вывод

        return $this->X37_Plemka4Storm2()*L10_BB85_K_PererashPlenkFasad*L10_U12_RitramaM300E*$this->U27_KUdorojLRitrama();
    }
    function X39_CvetnPlenkaFasadItogm2()
    {
        //цветная пленка фасад итого, м2
        //арифметичиские вычисления
        //вывод

        return $this->X23_Plenka1Storm2()*$this->U5_1Storona()+$this->X30_Plenka2Storm2()*$this->U6_2Storony()+$this->X37_Plemka4Storm2()*$this->U7_4Storony();
    }
    function X40_CvetnPlenkaFasadItoggrn()
    {
        //цветная пленка фасад итого, грн
        //арифметичиские вычисления
        //вывод

        return $this->X24_Plenka1Storgrn()*$this->U5_1Storona()+$this->X31_Plenka2Storgrn()*$this->U6_2Storony()+$this->X38_Plemka4Storgrn()*$this->U7_4Storony();
    }
    function X43_PolnCvetFotogrn()
    {
        //полноцвет фото, грн.
        //умножение
        //вывод

        return $this->X10_PloshAllFasadovm2()*L10_U7_RitramaPhoto*L10_BB86_K_PererashPolnocvet;
    }
    function X44_PolnCvetFotoPlusLamingrn()
    {
        //полноцвет фото + ламинат, грн.
        //арифметичиские вычисления
        //вывод

        return $this->X10_PloshAllFasadovm2()*(L10_U7_RitramaPhoto+L10_U8_RitramaLaminat)*L10_BB86_K_PererashPolnocvet;
    }
    function X45_PolnCvet720grn()
    {
        //полноцвет 720, грн.
        //умножение
        //вывод

        return $this->X10_PloshAllFasadovm2()*L10_U6_Ritrama_720dpi*L10_BB86_K_PererashPolnocvet;
    }
    function X46_PolnCvet720PlusLamingrn()
    {
        //полноцвет 720 + ламинат, грн.
        //арифметичиские вычисления
        //вывод

        return $this->X10_PloshAllFasadovm2()*(L10_U6_Ritrama_720dpi+L10_U8_RitramaLaminat)*L10_BB86_K_PererashPolnocvet;
    }
    function X47_RWhitePlusAppgrn()
    {
        //R, белый + аппликация , грн.
        //прибавление
        //вывод

        return $this->X13_PlenkaDlAppgrn()+$this->X16_StoimRezamp()+$this->X18_PlenkaMontajgrn();
    }
    function X48_RCvetnPlusProrezgrn()
    {
        //R, цветной + прорез, грн.
        //прибавление
        //вывод

        return $this->X40_CvetnPlenkaFasadItoggrn()+$this->X16_StoimRezamp();
    }
    function X49_RCvetnPlusAppgrn()
    {
        //R, цветной + аппликация, грн.
        //прибавление
        //вывод

        return $this->X40_CvetnPlenkaFasadItoggrn()+$this->X13_PlenkaDlAppgrn()+$this->X16_StoimRezamp()+$this->X18_PlenkaMontajgrn();
    }
    function X51_FullColorFotoItoggrn()
    {
        //полноцвет фото, итого грн.
        //умножение
        //вывод

        return $this->X43_PolnCvetFotogrn()*$this->U13_FullColorPhoto();
    }
    function X52_FullColorFotoPlusLaminItoggrn()
    {
        //полноцвет фото + ламинат, итого грн.
        //умножение
        //вывод

        return $this->X44_PolnCvetFotoPlusLamingrn()*$this->U14_FullColorPhotoPlusLamin();
    }
    function X53_FullColor720Itoggrn()
    {
        //полноцвет 720, итого грн.
        //умножение
        //вывод

        return $this->X45_PolnCvet720grn()*$this->U15_FullColor720();
    }
    function X54_FullColor720PlusLaminItoggrn()
    {
        //полноцвет 720 + ламинат, итого грн.
        //умножение
        //вывод

        return $this->X46_PolnCvet720PlusLamingrn()*$this->U16_FullColor720PlusLamin();
    }
    function X55_REconWhitePlusAppItoggrn()
    {
        //R экон, белый + аппликация итого, грн.
        //умножение
        //вывод

        return $this->X47_RWhitePlusAppgrn()*$this->U17_EconWhitePlusApplication();
    }
    function X56_REconCvetnPlusProrezItoggrn()
    {
        //R экон, цветной + прорез итого, грн.
        //умножение
        //вывод

        return $this->X48_RCvetnPlusProrezgrn()*$this->U18_EconWhitePlusProrez();
    }
    function X57_REconCvetnPlusAppItoggrn()
    {
        //R экон, цветной + аппликация итого, грн.
        //умножение
        //вывод

        return $this->X49_RCvetnPlusAppgrn()*$this->U19_EconColorfullPlusApp();
    }
    function X58_RSvetWhitePlusAppItoggrn()
    {
        //R, свет белый + аппликация итого, грн.
        //умножение
        //вывод

        return $this->X47_RWhitePlusAppgrn()*$this->U20_LWhitePlusApp();
    }
    function X59_RSvetCvetnPlusProrezItoggrn()
    {
        //R свет, цветной + прорез итого, грн.
        //умножение
        //вывод

        return $this->X48_RCvetnPlusProrezgrn()*$this->U21_LColorfullPlusProrez();
    }
    function X60_RSvetCvetnPlusAppItoggrn()
    {
        //R свет, цветной + аппликация итого, грн.
        //умножение
        //вывод

        return $this->X49_RCvetnPlusAppgrn()*$this->U22_LColorfullPlusApp();
    }
    function X61_FasadMatItoggrn()
    {
        //фасад материалы итого, грн
        //прибавление
        //вывод

        return $this->X51_FullColorFotoItoggrn()+$this->X52_FullColorFotoPlusLaminItoggrn()+$this->X53_FullColor720Itoggrn()+$this->X54_FullColor720PlusLaminItoggrn()+$this->X55_REconWhitePlusAppItoggrn()+$this->X56_REconCvetnPlusProrezItoggrn()+$this->X57_REconCvetnPlusAppItoggrn()+$this->X58_RSvetWhitePlusAppItoggrn()+$this->X59_RSvetCvetnPlusProrezItoggrn()+$this->X60_RSvetCvetnPlusAppItoggrn();
    }
    function AA5_FullColormin()
    {
        //полноцвет, мин
        //умножение
        //вывод

        return $this->X11_RaschPFasadDlTrudm2()*L10_BT33_KnurlFullColor_m2;
    }
    function AA6_ColorPolPrmin()
    {
        //цветная полупрорез, мин
        //умножение
        //вывод

        return $this->X11_RaschPFasadDlTrudm2()*L10_BT34_KnurlRitramaHalfCat_m2;
    }
    function AA7_Appmin()
    {
        //аппликация, мин
        //умножение
        //вывод

        return $this->X12_PlenkaDlAppm2()*L10_BT35_SampleAplication_m2;
    }
    function AA9_FullColorFotomin()
    {
        //полноцвет фото, мин
        //вывод

        return $this->AA5_FullColormin();
    }
    function AA10_FullColorFotoPluslammin()
    {
        //полноцвет фото + лам, мин
        //вывод

        return $this->AA5_FullColormin();
    }
    function AA11_FullColor720min()
    {
        //полноцвет 720, мин
        //вывод

        return $this->AA5_FullColormin();
    }
    function AA12_FullColor720PlusLammin()
    {
        //полн 720 + лам, мин
        //вывод

        return $this->AA5_FullColormin();
    }
    function AA13_REconWhitePlusAppmin()
    {
        //R экон, белый + аппл, мин
        //вывод

        return $this->AA7_Appmin();
    }
    function AA14_REconCvetPlusPrmin()
    {
        //R экон, цвет + прорез, мин
        //вывод

        return $this->AA6_ColorPolPrmin();
    }
    function AA15_REconCvetPlusAppmin()
    {
        //R экон, цвет + аппл, мин
        //прибавление
        //вывод

        return $this->AA6_ColorPolPrmin()+$this->AA7_Appmin();
    }
    function AA16_RSvetWhitePlusAppmin()
    {
        //R, свет белый + аппл, мин
        //вывод

        return $this->AA7_Appmin();
    }
    function AA17_RSvetCvetPlusPrmin()
    {
        //R свет, цвет + прорез, мин
        //вывод

        return $this->AA6_ColorPolPrmin();
    }
    function AA18_RCvetFullColorPlusAppmin()
    {
        //R свет, цветной + аппл, мин
        //вывод

        return $this->AA6_ColorPolPrmin()+$this->AA7_Appmin();
    }
    function AA20_PolnCvetFotomin()
    {
        //полноцвет фото, мин
        //умножение
        //вывод

        return $this->AA9_FullColorFotomin()*$this->U13_FullColorPhoto();
    }
    function AA21_PolnCvetFotoPlusLammin()
    {
        //полноцвет фото + лам, мин
        //умножение
        //вывод

        return $this->AA10_FullColorFotoPluslammin()*$this->U14_FullColorPhotoPlusLamin();
    }
    function AA22_PolnCvet720min()
    {
        //полноцвет 720, мин
        //умножение
        //вывод

        return $this->AA11_FullColor720min()*$this->U15_FullColor720();
    }
    function AA23_Poln720PlusLammin()
    {
        //полн 720 + лам, мин
        //умножение
        //вывод

        return $this->AA12_FullColor720PlusLammin()*$this->U16_FullColor720PlusLamin();
    }
    function AA24_REconWhitePlusAppmin()
    {
        //R экон, белый + аппл, мин
        //умножение
        //вывод

        return $this->AA13_REconWhitePlusAppmin()*$this->U17_EconWhitePlusApplication();
    }
    function AA25_REconCvetPlusPrmin()
    {
        //R экон, цвет + прорез, мин
        //умножение
        //вывод

        return $this->AA14_REconCvetPlusPrmin()*$this->U18_EconWhitePlusProrez();
    }
    function AA26_REconCvetPlusAppmin()
    {
        //R экон, цвет + аппл, мин
        //умножение
        //вывод

        return $this->AA15_REconCvetPlusAppmin()*$this->U19_EconColorfullPlusApp();
    }
    function AA27_RSvetWhitePlusAppmin()
    {
        //R, свет белый + аппл, мин
        //умножение
        //вывод

        return $this->AA16_RSvetWhitePlusAppmin()*$this->U20_LWhitePlusApp();
    }
    function AA28_RSvetCvetPlusPrmin()
    {
        //R свет, цвет + прорез, мин
        //умножение
        //вывод

        return $this->AA17_RSvetCvetPlusPrmin()*$this->U21_LColorfullPlusProrez();
    }
    function AA29_RSvetFullColorPlusAppmin()
    {
        //R свет, цветной + аппл, мин
        //умножение
        //вывод

        return $this->AA18_RCvetFullColorPlusAppmin()*$this->U22_LColorfullPlusApp();
    }
    function AA30_TrudItogomin()
    {
        //трудоемкость итого, мин
        //прибавление
        //вывод

        return $this->AA20_PolnCvetFotomin()+$this->AA21_PolnCvetFotoPlusLammin()+$this->AA22_PolnCvet720min()+$this->AA23_Poln720PlusLammin()+$this->AA24_REconWhitePlusAppmin()+$this->AA25_REconCvetPlusPrmin()+$this->AA26_REconCvetPlusAppmin()+$this->AA27_RSvetWhitePlusAppmin()+$this->AA28_RSvetCvetPlusPrmin()+$this->AA29_RSvetFullColorPlusAppmin();
    }
    function AA32_Designmin()
    {
        //дизайн, мин
        //арифметические вычисления
        //вывод

        return L10_BT49_MaketL24_1sht*$this->U10_DesignCreate()+L10_BT50_MaketZakazch_1sht*$this->U11_DesignCheck();
    }
    function AD6_CvetPlFasad12mmp()
    {
        //цветная пленка фасад (1,2м), мп
        //арифметические вычисления
        //вывод

        return round($this->X39_CvetnPlenkaFasadItogm2()/1.2, 2)*$this->U24_FasadColorfullPlenka()*$this->U9_PlenkaFasadEst();
    }
    function AD7_FasadMatItogogrn()
    {
        //фасад материалы итого, грн.
        //арифметические вычисления
        //вывод

        return round($this->X61_FasadMatItoggrn()*$this->U9_PlenkaFasadEst(), 0);
    }
    function AD10_Trudmin()
    {
        //трудоемкость, мин
        //арифметические вычисления
        //вывод

        return round($this->AA30_TrudItogomin()*$this->U9_PlenkaFasadEst(), 0);
    }
    function AD11_StoimRabotigrn()
    {
        //стоимость работы, грн.
        //арифметические вычисления
        //вывод

        return round($this->AD10_Trudmin()*L10_C67_K1, 0);
    }
    function AD13_Designgrn()
    {
        //дизайн, грн
        //арифметические вычисления
        //вывод

        return $this->AA32_Designmin()*$this->U9_PlenkaFasadEst()*L10_C67_K1;
    }
    function AD24_Itigogrn()
    {
        //итого, грн.
        //арифметические вычисления
        //вывод

        return $this->AD7_FasadMatItogogrn()+$this->AD11_StoimRabotigrn()+$this->AD13_Designgrn();
    }
}

class L15_3
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

    public function __construct($RoofVisorOut = 0, $WallOut = 0, $WallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $Orientation = 1,
                                $MaxSide_cm = 300, $MinSide_cm = 60,
                                $Konstruct = 2)
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