<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.03.18
 * Time: 17:05
 */

echo '<b>Входные_параметры:</b>';
echo '<br>Большая сторона =' . $L19_1->B5_BigStor;
echo '<br>Меньшая сторона =' . $L19_1->B6_SmallStor;
echo '<br>';
echo '<br>Лицевое изображение =' . $L19_1->B8_LicevoeIzobragenie;
echo '<br>Цвет бортов =' . $L19_1->B9_CvetBortov;
echo '<br>Цвет тыла =' . $L19_1->B10_CvetTila;
//
echo '<hr><b>Выходная величина:</b>';
echo '<br>Расходы на транспорт,_грн=' . $L19_1->N6_RashodiNaTransport_grn();
echo '<br>';
echo '<br>Трудоёмкость снабжения, мин =' . $L19_1->N10_TrydoemkostSnabjenia_min();
echo '<br>Стоимость работы, грн =' . $L19_1->N11_StoimostRabot_grn();
echo '<br>';
echo '<br><b>Итого, грн =' . $L19_1->N24_Itogo_grn();