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

$L10 = new L10();

$L15_1 = new L15_1();
$L15_2 = new L15_2();
$L15_3 = new L15_3();
$L15_4 = new L15_4();
//
//
$L16_1 = new L16_1();
$L16_2 = new L16_2();
$L16_3 = new L16_3();
//
//
$L17_1 = new L17_1();
$L17_2 = new L17_2();
$L17_3 = new L17_3();
$L17_4 = new L17_4();
//
$L18_1 = new L18_1();
$L18_22 = new L18_22();
$L18_21 = new L18_21();
$L18_31 = new L18_31();
$L18_32 = new L18_32();
$L18_33 = new L18_33();
$L18_4 = new L18_4();
//
$L19_1 = new L19_1();
$L19_2 = new L19_2();
//
//
//$L25 = new L25();

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
            text-align: center;
            white-space:nowrap; /* Не переносить слова */
        }
    </style>
</head>
<body>
<h1 align="center">ТЕСТ КАЛЬКУЛЯТОРОВ</h1>
<p align="center">
    <a href="box.php">тест корзины</a>
</p>
<!------------------------------------------------------------------------->
<?php include_once 'L09.php' ?>
<!------------------------------------------------------------------------->
<br><br>
<?php include_once 'L10.php' ?>
<!------------------------------------------------------------------------->
<br><br>
<?php include_once 'L15.php' ?>
<!------------------------------------------------------------------------->
<br><br>
<?php include_once 'L16.php' ?>
<!------------------------------------------------------------------------->
<br><br>
<?php include_once 'L17.php' ?>
<!------------------------------------------------------------------------->
<br><br>
<?php include_once 'L18.php' ?>
<!------------------------------------------------------------------------->
<br><br>
<?php include_once 'L19.php' ?>
<!------------------------------------------------------------------------->
<br><br>
<?php include_once 'L25.php' ?>
<!------------------------------------------------------------------------->
<hr size="5" color="red">
</body>
</html>