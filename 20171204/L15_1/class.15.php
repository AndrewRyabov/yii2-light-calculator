<?php

/**
 * Created by PhpStorm.
 * User: Andrii
 * Date: 06.06.2017
 * Time: 23:57
 */
class L15
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

    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $MaxSide_cm, $MinSide_cm, $ColorSide, $ColorBack)
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
        $this->B14_ColorSide = $ColorSide;
        $this->B15_ColorBack = $ColorBack;

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

