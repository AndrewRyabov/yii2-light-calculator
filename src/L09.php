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
    public $B4_C_light; // C_light = 0
    public $B5_S_Light; // S_light = 1

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

    public function __construct($SCLight = 1, $VarIspoln = 4,
                                $Orientacia = 1, $MaxSide = 150, $MinSide = 100,
                                $FrontImg = 1, $ColorSide = 1, $ColorBack = 0, $Ugol = [0, 0, 0, 0],
                                $MaketImg = 1, $PlenkLic = 3, $PlastLic = 2, $Light = 1
                                )

    {
        // Заполнение входных данных.
        $this->B4_C_light = 0;
        $this->B5_S_Light = 0;
        switch ($SCLight) {
            case 0: $this->B4_C_light = 1; break;
            case 1: $this->B5_S_Light = 1; break;
            default: $this->B5_S_Light = 1; break;
        }

        // C_light_2
        // шаг 0
        $this->J4_VarIspoln = $VarIspoln;

        // шаг  1
        $this->J21_Orientation = $Orientacia;
        $this->J22_MaxSide_cm = $MaxSide;
        $this->J23_MinSide_cm = $MinSide;
        $this->J24_FrontImg = $FrontImg;
        $this->J25_ColorSide = $ColorSide;
        $this->J26_ColorBack = $ColorBack;

        $this->J29_LevVerhUgolRad = $Ugol[0];
        $this->J30_PravVerhUgolRad = $Ugol[1];
        $this->J31_PravNijnUgolRad = $Ugol[2];
        $this->J32_LevNijnUgolRad = $Ugol[3];

        // шаг  2
        $this->J38_MaketImg = $MaketImg;
        $this->J39_PlenkLic = $PlenkLic;
        $this->J40_PlasticLic = $PlastLic;
        $this->J41_Light = $Light;

        // шаг  3
    }
    // S_light

}