<?php

/**
 * Created by PhpStorm.
 * User: Andrii
 * Date: 06.06.2017
 * Time: 23:55
 */
class L09
{
    // Cloud Calculator
    public $B4_C_light = 0; // C_light
    public $B5_S_Light = 1; // S_light

    // C_light
    public $J4_RoofVisorOut = 0; // крыша/козырек улица
    public $J5_WallOut = 1; // стена улица
    public $J6_WallIn = 0; // стена помещение
    public $J7_2SideIn = 0; // 2 стороны помещение
    public $J8_4SideIn = 0; // 4 стороны помещение

    // шаг  1
    public $J21_Orientation = 1; // ориентация
    public $J22_MaxSide_cm = 300; // большая сторона, см
    public $J23_MinSide_cm = 60; // меньшая сторона, см
    public $J24_FrontImg = 1; // лицевое изображение
    public $J25_ColorSide = 0; // цвет бортов
    public $J26_ColorBack = 0; // цвет тыла

    // шаг  2
    public $J38_MaketImg = 1; // макет изображения
    public $J39_FilmFront = 3; // пленка лицевая
    public $J40_PlasticFront = 1; // пластик лицевой
    public $J41_Light = 3; // источник света
    public $J42_Konstruktiv = 2; // конструктив

    // шаг  3

    // S_light

}
