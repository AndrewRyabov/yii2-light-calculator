<?php namespace almaz44\light\calculator;
//
/**
 * ИСХОДНЫЕ ДАННЫЕ.
 * Created by PhpStorm.
 * User: Andrii
 * Date: 06.06.2017
 * Time: 23:55
 *
 */

class L09
{
    // Cloud Calculators
    public $B4_C_light; // C_light
    public $B5_S_Light; // S_light

    // C_light
    public $J4_RoofVisorOut; // крыша/козырек улица
    public $J5_WallOut; // стена улица
    public $J6_WallIn; // стена помещение
    public $J7_2SideIn; // 2 стороны помещение
    public $J8_4SideIn; // 4 стороны помещение

    // шаг  1
    public $J21_Orientation; // ориентация
    public $J22_MaxSide_cm; // большая сторона, см
    public $J23_MinSide_cm; // меньшая сторона, см
    public $J24_FrontImg; // лицевое изображение
    public $J25_ColorSide; // цвет бортов
    public $J26_ColorBack; // цвет тыла

    // шаг  2
    public $J38_MaketImg; // макет изображения
    public $J39_FilmFront; // пленка лицевая
    public $J40_PlasticFront; // пластик лицевой
    public $J41_Light; // источник света
    public $J42_Konstruktiv; // конструктив

    // шаг  3

    public function __construct($C_light = 0, $S_Light = 1,
                                $RoofVisorOut = 0, $WallOut = 0, $WallIn = 0, $SideIn2 = 1, $SideIn4 = 0,
                                $Orientacia = 1, $BigStor = 300, $SmallStor = 60, $FrontImg = 1, $ColorSide = 0, $ColorBack = 0,
                                $MaketImg = 1, $FilmFront = 3, $PlasticFront = 1, $Light = 2, $Konstruktiv = 2)

    {
        // Заполнение входных данных.
        $this->B4_C_light = $C_light;
        $this->B5_S_Light = $S_Light;
        // C_light
        $this->J4_RoofVisorOut = $RoofVisorOut;
        $this->J5_WallOut = $WallOut;
        $this->J6_WallIn = $WallIn;
        $this->J7_2SideIn = $SideIn2;
        $this->J8_4SideIn = $SideIn4;
        // шаг  1
        $this->J21_Orientation = $Orientacia;
        $this->J22_MaxSide_cm = $BigStor;
        $this->J23_MinSide_cm = $SmallStor;
        $this->J24_FrontImg = $FrontImg;
        $this->J25_ColorSide = $ColorSide;
        $this->J26_ColorBack = $ColorBack;
        // шаг  2
        $this->J38_MaketImg = $MaketImg;
        $this->J39_FilmFront = $FilmFront;
        $this->J40_PlasticFront = $PlasticFront;
        $this->J41_Light = $Light;
        $this->J42_Konstruktiv = $Konstruktiv;
        // шаг  3
    }
    // S_light

}