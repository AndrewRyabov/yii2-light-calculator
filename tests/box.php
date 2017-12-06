<?php namespace almaz44\light\calculator;
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 05.12.17
 * Time: 0:58
 */
// headers are sent to prevent browsers from caching
header('Expires: Fri, 25 Dec 1980 00:00:00 GMT'); // time in the past
header('Last-Modified: ' . gmdate( 'D, d M Y H:i:s') . 'GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');
header('Content-Type: text/html');
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 04.10.17
 * Time: 19:51
 */
// Загрузка классов
include_once '../src/L09.php';
include_once '../src/L10.php';
include_once '../src/L15.php';
include_once '../src/L16.php';
include_once '../src/L17.php';
include_once '../src/L18.php';
include_once '../src/L19.php';
include_once '../src/L25.php';

// инициализация классов
$L09 = new L09( 0, 1, 0, 0, 0, 1, 0, 1, 300, 60, 1, 0, 0, 1, 3, 1, 2, 2);

$L15 = new L15( 0, 0, 0, 1, 0, 1, 300, 60, 0, 0, 2, 2, 1, 3);

$L16 = new L16(0, 0,0, 1, 0, 300, 60, 1, 1);

$L17 = new L17(0,0,0,1,0,1,300,60,0);

$L18 = new L18(0, 0, 0, 1, 0, 300, 60);

$L19_1 = new L19_1(300, 60, 1, 0, 0);
$L19_2 = new L19_2(0, 0, 0, 1, 0, 1, 300, 60, 2, 3.4, 4.8, 0, 3.8, 0, 2.2, 14.2, 7.1);

$L25 = new L25(0, 0, 0, 1, 0, 1, 300, 60, 0, 0, 1, 1, 3, 0, 1, 'диоды');
// HTML код страницы:
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Корзины C_Light</title>
    <style type="text/css">
        table {
            width: 100%;
            height: 100%;
        }
        tr {
            alignment: center;
        }
        td {
            vertical-align: top;
        }
    </style>
</head>
<body>
<h1 align="center">ТЕСТ КОРЗИНЫ</h1>
<p align="center">
    <a href="index.php">тест калькуляторов</a>
</p>
<!------------------------------------------------------------------------->
<table border="1">
    <tr>
        <td colspan="3" align="center">Class 30 Буфер Корзины</td>
    </tr>
    <tr>
        <td>№ 0</td>
        <td>№ 1</td>
        <td>№ 2</td>
    </tr>
    <tr>
        <td><?php //include_once 'L30_1.php' ?></td>
        <td><?php //include_once 'L30_2.php' ?></td>
        <td><?php //include_once 'L30_3.php' ?></td>
    </tr>
</table>
<br><br>
<table border="1">
    <tr>
        <td colspan="3" align="center">Class 31</td>
    </tr>
    <tr>
        <td>Упаковка для НП 1</td>
        <td>Упаковка для НП 2</td>
        <td>Упаковка для НП 3</td>
    </tr>
    <tr>
        <td><?php //include_once 'L31.php' ?></td>
        <td><?php //include_once 'L31.php' ?></td>
        <td><?php //include_once 'L31.php' ?></td>
    </tr>
</table>
<br><br>
<table border="1">
    <tr>
        <td colspan="2" align="center">Class 32</td>
    </tr>
    <tr>
        <td>доставка к НП</td>
        <td>авто доставка</td>
    </tr>
    <tr>
        <td><?php //include_once 'L31.php' ?></td>
        <td><?php //include_once 'L31.php' ?></td>
    </tr>
</table>
</body>