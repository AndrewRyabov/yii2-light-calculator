<?php


namespace almaz44\light\calculator;
//header("!doctype html");
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
 * Time: 19:52
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
$L09 = new L09();


$L15_1 = new L15_1();
$L15_2 = new L15_2();
$L15_3 = new L15_3();


$L16_1 = new L16_1();
$L16_3 = new L16_2();
$L16_3 = new L16_3();


$L17_1 = new L17_1();
$L17_2 = new L17_2();
$L17_3 = new L17_3();

$L18_1 = new L18_1();
$L18_2 = new L18_2();
$L18_3 = new L18_3();
$L18_4 = new L18_4();

$L19_1 = new L19_1();
$L19_2 = new L19_2();


$L25 = new L25();


// HTML код страницы:
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Калькулятор C_Light</title>
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
<h1 align="center">ТЕСТ КАЛЬКУЛЯТОРОВ</h1>
<p align="center">
    <a href="box.php">тест корзины</a>
</p>
<!------------------------------------------------------------------------->
<table border="1">
    <tr>
        <td colspan="4" align="center">Class 09</td>
        <td></td>
        <td align="center">Class 25 - Итого</td>
    </tr>
    <tr>
        <td>Cloud Calculator</td>
        <td>Шаг 0</td>
        <td>Шаг 1</td>
        <td>Шаг 2</td>
        <td></td>
        <td>Итого</td>
    </tr>
    <tr>
        <td><?php include_once 'L09.php' ?></td>
        <td><?php include_once 'L09_0.php' ?></td>
        <td><?php include_once 'L09_1.php' ?></td>
        <td><?php include_once 'L09_2.php' ?></td>
        <td></td>
        <td><?php include_once 'L25_Itogo.php' ?></td>
    </tr>
</table>
<!------------------------------------------------------------------------->
<br><br>
<table border="1">
    <tr>
        <td colspan="3" align="center">Class 15</td>
    </tr>
    <tr>
        <td>Борт/тыл плёнка</td>
        <td>фасад плёнка</td>
        <td>Упаковка в Стрейяч плёнку</td>
    </tr>
    <tr>
        <td><?php include_once 'L15_A.php' ?></td>
        <td><?php include_once 'L15_Q.php' ?></td>
        <td><?php include_once 'L15_AG.php' ?></td>
    </tr>
</table>
<!------------------------------------------------------------------------->
<br><br>
<table border="1">
    <tr>
        <td colspan="3" align="center">Class 16</td>
    </tr>
    <tr>
        <td>Фасад пластик</td>
        <td>Борт ПВХ</td>
        <td>Тыл ПВХ/ДВП</td>
    </tr>
    <tr>
        <td><?php include_once 'L16_A.php' ?></td>
        <td><?php include_once 'L16_R.php' ?></td>
        <td><?php include_once 'L16_AI.php'?></td>
    </tr>
</table>
<!------------------------------------------------------------------------->
<br><br>
<table border="1">
    <tr>
        <td colspan="3" align="center">Class 17</td>
    </tr>
    <tr>
        <td>Опоры лицевого пластика</td>
        <td>Рама внутренняя</td>
        <td>Рама внешняя</td>
    </tr>
    <tr>
        <td><?php include_once 'L17_A.php' ?></td>
        <td><?php include_once 'L17_R.php' ?></td>
        <td><?php include_once 'L17_AP.php'?></td>
    </tr>
</table>
<!------------------------------------------------------------------------->
<br><br>
<table border="1">
    <tr>
        <td colspan="4" align="center">Class 18</td>
    </tr>
    <tr>
        <td>Лампы дневного света</td>
        <td>Кластеры 3750</td>
        <td>Диодная лента 3750</td>
        <td>Электрика Итого</td>
    </tr>
    <tr>
        <td><?php include_once 'L18_A.php' ?></td>
        <td><?php include_once 'L18_S.php' ?></td>
        <td><?php include_once 'L18_AK.php'?></td>
        <td><?php include_once 'L18_BC.php'?></td>
    </tr>
</table>
<!------------------------------------------------------------------------->
<br><br>
<table border="1">
    <tr>
        <td colspan="2" align="center">Class 19</td>
    </tr>
    <tr>
        <td>Снабжение</td>
        <td>Подвесы</td>
    </tr>
    <tr>
        <td><?php include_once 'L19_A.php' ?></td>
        <td><?php include_once 'L19_Q.php' ?></td>
    </tr>
</table>
<!------------------------------------------------------------------------->
<br><hr size="5" color="red"><br>
<table border="1">
    <tr>
        <td>Class 25</td>
    </tr>
    <tr>
        <td>Интегратор</td>
    </tr>
    <tr>
        <td><?php include_once 'L25_Integrator.php' ?></td>
    </tr>
</table>
<!------------------------------------------------------------------------->
</body>
</html>