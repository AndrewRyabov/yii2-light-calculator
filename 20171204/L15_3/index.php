<?php
header("!doctype html");
/**
 * Created by PhpStorm.
 * User: Anrew
 * Date: 27.07.2017
 * Time: 10:48
 */
// Загрузка классов
include_once 'class.09.php';
include_once 'class.10.php';
include_once 'class.15.php';

// инициализация классов
$L09 = new L09();
$L10 = new L10();
$L15 = new L15(0, 0, 0, 1, 0, 1, 300, 60, 2);

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
echo '<br>AK5_TrebNerazb='.$L15->AK5_TrebNerazb();
echo '<br>AK6_DopustNerazb='.$L15->AK6_DopustNerazb();
echo '<br>AK7_NerazbItogo='.$L15->AK7_NerazbItogo();
echo '<br>AK8_RazbItogo='.$L15->AK8_RazbItogo();
echo '<br>AK10_1Stor='.$L15->AK10_1Stor();
echo '<br>AK11_2Stor='.$L15->AK11_2Stor();
echo '<br>AK12_4Nerazb='.$L15->AK12_4Nerazb();
echo '<br>AK13_4Razb='.$L15->AK13_4Razb();

echo '<br>AN5_GorRazmcm='.$L15->AN5_GorRazmcm();
echo '<br>AN6_VerRazmcm='.$L15->AN6_VerRazmcm();
echo '<br>AN7_GorRazmm='.$L15->AN7_GorRazmm();
echo '<br>AN8_VerRazmm='.$L15->AN8_VerRazmm();
echo '<br>AN9_Streych1m2grn='.$L15->AN9_Streych1m2grn();
echo '<br>AN10_Skotch1mpgrn='.$L15->AN10_Skotch1mpgrn();
echo '<br>AN12_Perimmp='.$L15->AN12_Perimmp();
echo '<br>AN13_Plosh1Storm2='.$L15->AN13_Plosh1Storm2();
echo '<br>AN14_Plosh2Storm2='.$L15->AN14_Plosh2Storm2();
echo '<br>AN15_Plosh4StorNerazbm2='.$L15->AN15_Plosh4StorNerazbm2();
echo '<br>AN16_Plosh4StorRazbm2='.$L15->AN16_Plosh4StorRazbm2();
echo '<br>AN18_Streych1Storgrn='.$L15->AN18_Streych1Storgrn();
echo '<br>AN19_Streych2Storgrn='.$L15->AN19_Streych2Storgrn();
echo '<br>AN20_Streych4StorNerazbgrn='.$L15->AN20_Streych4StorNerazbgrn();
echo '<br>AN21_Streych4StorRazbgrn='.$L15->AN21_Streych4StorRazbgrn();
echo '<br>AN23_Streych1Storgrn='.$L15->AN23_Streych1Storgrn();
echo '<br>AN24_Streych2Storgrn='.$L15->AN24_Streych2Storgrn();
echo '<br>AN25_Streych4StorNerazbgrn='.$L15->AN25_Streych4StorNerazbgrn();
echo '<br>AN26_Streych4StorRazbgrn='.$L15->AN26_Streych4StorRazbgrn();
echo '<br>AN27_Streychgrn='.$L15->AN27_Streychgrn();
echo '<br>AN28_Streychmp='.$L15->AN28_Streychmp();
echo '<br>AN29_Skotchmp='.$L15->AN29_Skotchmp();
echo '<br>AN30_Skotchgrn='.$L15->AN30_Skotchgrn();

echo '<br>AQ5_TrudUpak1m2min='.$L15->AQ5_TrudUpak1m2min();
echo '<br>AQ7_1Stormin='.$L15->AQ7_1Stormin();
echo '<br>AQ8_2Stormin='.$L15->AQ8_2Stormin();
echo '<br>AQ9_4StorNerazbmin='.$L15->AQ9_4StorNerazbmin();
echo '<br>AQ10_4StorRazbmin='.$L15->AQ10_4StorRazbmin();
echo '<br>AQ12_1Stormin='.$L15->AQ12_1Stormin();
echo '<br>AQ13_2Stormin='.$L15->AQ13_2Stormin();
echo '<br>AQ14_4StorNerazbmin='.$L15->AQ14_4StorNerazbmin();
echo '<br>AQ15_4StorRazbmin='.$L15->AQ15_4StorRazbmin();
echo '<br>AQ16_Upakmin='.$L15->AQ16_Upakmin();

echo '<br>AT6_PlenkaStreych500mmItogomp='.$L15->AT6_PlenkaStreych500mmItogomp();
echo '<br>AT7_StoimPlgrn='.$L15->AT7_StoimPlgrn();
echo '<br>AT11_TrudUpakmin='.$L15->AT11_TrudUpakmin();
echo '<br>AT12_StoimRabgrn='.$L15->AT12_StoimRabgrn();
echo '<br>AT24_Itogogrn='.$L15->AT24_Itogogrn();

?>
</body>
</html>



