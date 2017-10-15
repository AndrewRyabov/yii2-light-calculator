<?php
namespace almaz44\light\calculator;
header("!doctype html");
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
include_once '../src/L25.php';

// инициализация классов
$L09 = new L09(0, 1, 0, 0, 0, 1, 0, 1, 300, 60, 1, 0, 0, 1, 3, 1, 2, 2);
$L15 = new L15();
$L16 = new L16();
$L17 = new L17(0, 1, 0, 0, 0, 300, 60, 1, 0);
$L18 = new L18(0, 1, 0, 0, 0, 300, 60);

// HTML код страницы:
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Калькулятор C_Light</title>
</head>
<body>

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

<table border="1">
    <tr>
        <td colspan="3" align="center">Class 15</td>
        <td></td>
        <td colspan="2" align="center">Class 16</td>
    </tr>
    <tr>
        <td>Борт/тыл плёнка</td>
        <td>фасад плёнка</td>
        <td>Упаковка в Стрейяч плёнку</td>
        <td></td>
        <td>Фасад пластик</td>
        <td>Борт ПВХ</td>
    </tr>
    <tr>
        <td><?php include_once 'L15_A.php' ?></td>
        <td><?php include_once 'L15_Q.php' ?></td>
        <td><?php include_once 'L15_AG.php' ?></td>
        <td></td>
        <td><?php include_once 'L16_A.php' ?></td>
        <td><?php //include_once 'L16_R.php'
            ?></td>
    </tr>
</table>


<br>
<table border="1">
    <tr>
        <td colspan="2" align="center">Class 17</td>
        <td></td>
        <td align="center">Class 18</td>
        <td></td>
        <td>Class 19</td>
    </tr>
    <tr>
        <td>Опоры лицевого пластика</td>
        <td>Рама внутренняя</td>
        <td></td>
        <td>Электрика</td>
        <td></td>
        <td>Подвесы</td>
    </tr>
    <tr>
        <td><?php //include_once 'L17_A.php'
            ?></td>
        <td><?php include_once 'L17_R.php' ?></td>
        <td></td>
        <td><?php include_once 'L18_A.php' ?></td>
        <td></td>
        <td><?php include_once 'L19_A.php' ?></td>
    </tr>
</table>


<br>
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

</body>
</html>