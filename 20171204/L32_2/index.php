<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 26.11.2017
 * Time: 16:55
 */
// Загрузка классов

include_once 'class.10.php';
include_once 'class.32.php';

// инициализация классов

$L10 = new L10();
$L32 = new L32(1,2,1,3.9,0,60);
// HTML код страницы:
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Калькулятор C_Light</title>

</head>
<body>
<?php
// Вывод переменных:
echo '<br>Z5_ObsheeKolvoVivsht='.$L32->Z5_ObsheeKolvoVivsht();

echo '<br>Z7_ObshiyProbegkm100='.$L32->Z7_ObshiyProbegkm100();
echo '<br>Z8_ProbegZagorodkm100='.$L32->Z8_ProbegZagorodkm100();

echo '<br>Z10_StoimMat1ReysDoblogrn='.$L32->Z10_StoimMat1ReysDoblogrn();
echo '<br>Z11_Stoim1ReysGazegrn='.$L32->Z11_Stoim1ReysGazegrn();

echo '<br>Z13_KolReysGazesht='.$L32->Z13_KolReysGazesht();
echo '<br>Z14_StoimVseReysiGazegrn='.$L32->Z14_StoimVseReysiGazegrn();
echo '<br>Z15_FlagGaze='.$L32->Z15_FlagGaze();

echo '<br>AC5_1ReysDobloGorodmin='.$L32->AC5_1ReysDobloGorodmin();
echo '<br>AC6_1ReysDobloZagorodmin='.$L32->AC6_1ReysDobloZagorodmin();
echo '<br>AC7_1ReysDoblomin='.$L32->AC7_1ReysDoblomin();

echo '<br>AC10_ZagroformVigDoblomin='.$L32->AC10_ZagroformVigDoblomin();
echo '<br>AC11_TrudDobloItogomin='.$L32->AC11_TrudDobloItogomin();
echo '<br>AC12_TrudDobloItogogrn='.$L32->AC12_TrudDobloItogogrn();

echo '<br>AF5_ZatratDobloItogogrn='.$L32->AF5_ZatratDobloItogogrn();
echo '<br>AF6_ZatratGazeItogogrn='.$L32->AF6_ZatratGazeItogogrn();

echo '<br>AF8_ZatratDobloItogogrn='.$L32->AF8_ZatratDobloItogogrn();
echo '<br>AF9_ZatratGazeItogogrn='.$L32->AF9_ZatratGazeItogogrn();
echo '<br>AF10_AvtodostItogogrn='.$L32->AF10_AvtodostItogogrn();

echo '<br>AH30_AvtodostZakazaNalgrn='.$L32->AH30_AvtodostZakazaNalgrn();

?>
</body>
</html>



