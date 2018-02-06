<?php namespace almaz44\light\calculator;
//
/**
 * ИСХОДНЫЕ ДАННЫЕ.
 * Created by PhpStorm.
 * User: Andrew
 * Date: 06.02.2018
 * Time: 22:03
 *
 */

class L09
{
    // Cloud Calculators
    public $B4_C_light; // C_light
    public $B5_S_Light; // S_light

    // C_light_2
    // шаг  0
    public $J4_VarIspoln; // вариант исполнения (1-крыша/2-улица/3-помещ/4-2 стор/5-4 стор)

    // шаг  1
    public $J21_Orientation; // ориентация (1-гор/2-верт)
    public $J22_MaxSide_cm; // большая сторона, см
    public $J23_MinSide_cm; // меньшая сторона, см
    public $J24_FrontImg; // лицевое изображение (1-есть/2-нет)
    public $J25_ColorSide; // цвет бортов
    public $J26_ColorBack; // цвет тыла

    public $J29_LevVerhUgolRad; // левый верхний угол радиус (0/6/12), см
    public $J30_PravVerhUgolRad; // правый верхний угол радиус (0/6/12), см
    public $J31_PravNijnUgolRad; // правый нижний угол радиус (0/6/12), см
    public $J32_LevNijnUgolRad; // левый нижний угол радиус (0/6/12), см

    // шаг  2
    public $J38_MaketImg; // макет изображения (1-зак/2-L24)
    public $J39_PlenkLic; // пленка лицевая
    public $J40_PlasticLic; // пластик лицевой (1-полик/2-акрил)
    public $J41_Light; // источник света (1-диоды внеш / 2-диоды встроен / 3-лампы)

    // шаг  3

    public function __construct($C_light = 0, $S_Light = 1,
                                $VarIspoln = 4,
                                $Orientacia = 1, $MaxSide = 150, $MinSide = 100, $LicIzobr = 1, $CvetBort =1, $CvetTil = 0,
                                $LevVerhUgol = 0, $PravVerhUgol = 0, $PravNijnUgol = 0, $LevNijnUgol = 0,
                                $MaketImg = 1, $PlenkLic = 3, $PlastLic = 2, $Light = 1
                                )

    {
        // Заполнение входных данных.
        $this->B4_C_light = $C_light;
        $this->B5_S_Light = $S_Light;

        // C_light_2
        // шаг 0
        $this->J4_VarIspoln = $VarIspoln;

        // шаг  1
        $this->J21_Orientation = $Orientacia;
        $this->J22_MaxSide_cm = $MaxSide;
        $this->J23_MinSide_cm = $MinSide;
        $this->J24_FrontImg = $LicIzobr;
        $this->J25_ColorSide = $CvetBort;
        $this->J26_ColorBack = $CvetTil;

        $this->J29_LevVerhUgolRad = $LevVerhUgol;
        $this->J30_PravVerhUgolRad = $PravVerhUgol;
        $this->J31_PravNijnUgolRad = $PravNijnUgol;
        $this->J32_LevNijnUgolRad = $LevNijnUgol;

        // шаг  2
        $this->J38_MaketImg = $MaketImg;
        $this->J39_PlenkLic = $PlenkLic;
        $this->J40_PlasticLic = $PlastLic;
        $this->J41_Light = $Light;

        // шаг  3
    }
    // S_light

}