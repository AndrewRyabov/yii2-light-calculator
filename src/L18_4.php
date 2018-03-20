<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 10.03.2018
 * Time: 12:32
 */
class L18
{
 // Входные параметры:
// Входные параметры:
	public $BD5_RoofVisorOut; // крыша/козырек улица
	public $BD6_AOallOut; // стена улица
	public $BD7_AOallIn; // стена помещение
	public $BD8_SideIn2; // 2 стороны помещение
	public $BD9_SideIn4; // 4 стороны помещение

	public $BD12_istochniksveta; // источник света (1- диоды/2-лампы
    public $BD17_FlagZameni2;//флаг замены 2
    public $BD18_FlagZameni4;//флаг замены 4
	

public function __construct($RoofVisorOut, $AOallOut, $AOallIn,
 $SideIn2, $SideIn4, $Istochniksveta, $FlagZameni2,$FlagZameni4)

  {
        // Заполнение входных данных.
	$this->BD5_RoofVisorOut = $RoofVisorOut;
        $this->BD6_AOallOut = $AOallOut;
        $this->BD7_AOallIn = $AOallIn;
        $this->BD8_2SideIn = $SideIn2;
        $this->BD9_4SideIn = $SideIn4;
	$this->BD12_Istochniksveta = $Istochniksveta;
	$this->BD17_FlagZameni2=$FlagZameni2;
	$this->BD18_FlagZameni4=$FlagZameni4;
  }
    function BE24_DiodiPlusVnechInver()
    {//если bd12=1, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 1) ? 1 : 0;
    }
    function BE25_DiodiPlusVstroenInver()
    {//если bd12=2, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 2) ? 1 : 0;
    }
    function BE26_LampiDnevnogoSveta()
    {//если bd12=3, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 3) ? 1 : 0;
    }
    function BE27_DiodiPlusVnechInver()
    {//вывод
        return 1;
    }
    function BF27_DiodiPlusVnechInver()
    {
        //ВПР
        //сравнение c 1
        //вывод
        if ($this->BE24_DiodiPlusVnechInver()==$this->BE27_DiodiPlusVnechInver() or $this->BE25_DiodiPlusVstroenInver()==$this->BE27_DiodiPlusVnechInver() or $this->BE26_LampiDnevnogoSveta()==$this->BE27_DiodiPlusVnechInver() )
        {
            return  'диоды + внеш инвер';
        }
        else
        {
            return 0;
        }
    }
    function BG5_LentaPlusVnechniiBP()
{//если bd12=1, то присвоить 1, иначе присвоить 0
    return ($this->BD12_Istochniksveta == 1) ? 1 : 0;
}
    function BG6_LentaPlusVstroeniiBP()
    {//если bd12=2, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 2) ? 1 : 0;
    }
    function BG7_LampiDnevnogoSveta()
    {//если bd12=3, то присвоить 1, иначе присвоить 0
        return ($this->BD12_Istochniksveta == 3) ? 1 : 0;
    }
    function BG9_Storona1()
    {//если bd8+bd9=0, о присвоить 1, иначе присвоить 0
        return ($this->BD8_2SideIn+$this->BD9_4SideIn == 0) ? 1 : 0;
    }
function BG12_LentaPlusVstroeniiBP1Stor()
{//умножение
return $this->BG6_LentaPlusVstroeniiBP()*$this->BG9_Storona1();
}
    function BG13_LentaPlusVnechniiBP1Stor()
    {//умножение
        return $this->BG5_LentaPlusVnechniiBP()*$this->BG9_Storona1();
    }
    function BG14_LentaPlusVnechniiBP2Stor()
    {//умножение
        return $this->BD8_2SideIn*$this->BG5_LentaPlusVnechniiBP();
    }
    function BG15_LentaPlusVnechniiBP4Stor()
    {//умножение
        return $this->BD9_4SideIn*$this->BG5_LentaPlusVnechniiBP();
    }
    function BG17_FlagNeZameni2()
    {//если bd17=0, о присвоить 1, иначе присвоить 0
        return ($this->BD17_FlagZameni2 == 0) ? 1 : 0;
    }
    function BG18_FlagNeZameni4()
    {//если bd18=0, о присвоить 1, иначе присвоить 0
        return ($this->BD18_FlagZameni4 == 0) ? 1 : 0;
    }
    function P6_StoimosMaterialov()
    {
        return 1421;
    }
function AZ6_StoimostMaterialov_grn()
    {   //вывод
            return 902;
}

    function AZ43_StoimostMater2Stor_grn()
    {   //вывод
        return 1769;
    }
    function AZ52_StoimostMater4Stor_grn()
    {   //вывод
        return 3257;
    }
    function AZ84_StoimostMaterialov_grn()
    {   //вывод
        return 885;
    }
    function AZ22_Ves_kg()
    {   //вывод
        return 0.9;
    }
    function AZ100_Ves_kg()
    {   //вывод
        return 0.9;
    }
    function AZ45_VesObjed2Stor_kg()
    {   //вывод
        return 1.7;
    }
    function AZ54_VesObjed4Stor_kg()
    {   //вывод
        return 3.3;
    }
    function P22_Ves_kg()
    {   //вывод
        return 3.4;
    }
function BJ5_LentaPlusVnechniiBP()
    { //вывод
        return ($this->AZ6_StoimostMaterialov_grn());
}
function BJ6_LentaPlusVstroeniiBPStor()
    {  //вывод
       return $this->AZ84_StoimostMaterialov_grn();
}
    function BJ8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->AZ6_StoimostMaterialov_grn()*2;
    }
    function BJ9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->AZ43_StoimostMater2Stor_grn();
    }
    function BJ11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->AZ6_StoimostMaterialov_grn()*4;
    }
    function BJ12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->AZ52_StoimostMater4Stor_grn();
    }
    function BJ14_LampiDnevnogoSveta()
    {  //вывод
        return $this->P6_StoimosMaterialov();
    }
    function BK5_LentaPlusVnechniiBP()
    { //вывод
        return $this->AZ22_Ves_kg();
    }
    function BK6_LentaPlusVstroeniiBPStor()
    {  //вывод
        return $this->AZ100_Ves_kg();
    }
    function BK8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->AZ22_Ves_kg()*2;
    }
    function BK9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->AZ45_VesObjed2Stor_kg();
    }
    function BK11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->AZ22_Ves_kg()*4;
    }
    function BK12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->AZ54_VesObjed4Stor_kg();
    }
    function BK14_LampiDnevnogoSveta()
    {  //вывод
        return $this->P22_Ves_kg();
    }

function AZ21_EnergoPotreblenie_Vt()
    {    //вывод
           return 69;
}
    function AZ99_EnergoPotreblenie_Vt()
    {   //вывод
        return 69;
    }
    function P21_EnergoPotreblenie_Vt()
    {   //вывод
        return 150;
    }
    function BL5_LentaPlusVnechniiBP()
    { //вывод
        return $this->AZ21_EnergoPotreblenie_Vt();
    }
    function BL6_LentaPlusVstroeniiBPStor()
    {  //вывод
        return $this->AZ99_EnergoPotreblenie_Vt();
    }
    function BL8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->AZ21_EnergoPotreblenie_Vt()*2;
    }
    function Bl9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->AZ21_EnergoPotreblenie_Vt()*2;
    }
    function BL11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->AZ21_EnergoPotreblenie_Vt()*4;
    }
    function BL12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->AZ21_EnergoPotreblenie_Vt()*4;
    }
    function BL14_LampiDnevnogoSveta()
    {  //вывод
        return $this->P21_EnergoPotreblenie_Vt();
    }

function P10_TrydoemkostLenta_min() 
    {    //вывод
              return 120;
}
    function P10_TrydoemkostLampi_min()
    {   //вывод
        return 100;
    }
function AZ10_TrydoemkostLenta_min() 
    {    //вывод
             return 110;
}
    function AZ88_TrydoemkostLenta_min()
    {    //вывод
        return 110;
    }
    function AZ47_Trydoemkost2Storoni_min()
    {    //вывод
        return 200;
    }
    function AZ56_Trydoemkost4Storoni_min()
    {    //вывод
        return 380;
    }
    function BM5_LentaPlusVnechniiBP()
    { //вывод
        return $this->AZ10_TrydoemkostLenta_min();
    }
    function BM6_LentaPlusVstroeniiBPStor()
    {  //вывод
        return $this->AZ88_TrydoemkostLenta_min();
    }
    function BM8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->AZ10_TrydoemkostLenta_min()*2;
    }
    function BM9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->AZ47_Trydoemkost2Storoni_min();
    }
    function BM11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->AZ10_TrydoemkostLenta_min()*4;
    }
    function BM12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->AZ56_Trydoemkost4Storoni_min();
    }
    function BM14_LampiDnevnogoSveta()
    {  //вывод
        return $this->P10_TrydoemkostLampi_min();
    }
    function BO5_LentaPlusVnechniiBP()
    { //вывод
        return $this->BG13_LentaPlusVnechniiBP1Stor();
    }
    function BO6_LentaPlusVstroeniiBPStor()
    {  //вывод
        return $this->BG12_LentaPlusVstroeniiBP1Stor();
    }
    function BO8_LentaPlusVnechniiBP2Stor()
    { //вывод
        return $this->BG14_LentaPlusVnechniiBP2Stor()*$this->BG17_FlagNeZameni2();
    }
    function BO9_LentaPlusVstroeniiBP2StorObjed()
    {  //вывод
        return $this->BG14_LentaPlusVnechniiBP2Stor()*$this->BD17_FlagZameni2;
    }
    function BO11_LentaPlusVnechniiBP4Stor()
    { //вывод
        return $this->BG15_LentaPlusVnechniiBP4Stor()*$this->BG18_FlagNeZameni4();
    }
    function BO12_LentaPlusVstroeniiBP4StorObjed()
    {  //вывод
        return $this->BG15_LentaPlusVnechniiBP4Stor()*$this->BD18_FlagZameni4;
    }
    function BO14_LampiDnevnogoSveta()
    {  //вывод
        return $this->BG7_LampiDnevnogoSveta();
    }
    function BP5_LentaPlusVnechniiBP()
    { //умножение
        //вывод
        return $this->BJ5_LentaPlusVnechniiBP()*$this->BO5_LentaPlusVnechniiBP();
    }
    function BP6_LentaPlusVstroeniiBPStor()
    {  //умножение
        //вывод
        return $this->BJ6_LentaPlusVstroeniiBPStor()*$this->BO6_LentaPlusVstroeniiBPStor();
    }
    function BP8_LentaPlusVnechniiBP2Stor()
    { //умножение
        //вывод
        return $this->BJ8_LentaPlusVnechniiBP2Stor()*$this->BO8_LentaPlusVnechniiBP2Stor();
    }
    function BP9_LentaPlusVstroeniiBP2StorObjed()
    { //умножение
        //вывод
        return $this->BJ9_LentaPlusVstroeniiBP2StorObjed()*$this->BO9_LentaPlusVstroeniiBP2StorObjed();
    }
    function BP11_LentaPlusVnechniiBP4Stor()
    { //умножение
        //вывод
        return $this->BJ11_LentaPlusVnechniiBP4Stor()*$this->BO11_LentaPlusVnechniiBP4Stor();
    }
    function BP12_LentaPlusVstroeniiBP4StorObjed()
    {  //умножение
        //вывод
        return $this->BJ12_LentaPlusVstroeniiBP4StorObjed()*$this->BO12_LentaPlusVstroeniiBP4StorObjed();
    }
    function BP14_LampiDnevnogoSveta()
    { //умножение
        //вывод
        return $this->BJ14_LampiDnevnogoSveta()*$this->BO14_LampiDnevnogoSveta();
    }
    function BP15_Itogo()
    {  //сложение
        //вывод
        return $this->BP5_LentaPlusVnechniiBP()+$this->BP6_LentaPlusVstroeniiBPStor()+$this->BP8_LentaPlusVnechniiBP2Stor()+$this->BP9_LentaPlusVstroeniiBP2StorObjed()+$this->BP11_LentaPlusVnechniiBP4Stor()+$this->BP12_LentaPlusVstroeniiBP4StorObjed()+$this->BP14_LampiDnevnogoSveta();
    }
    function BQ5_LentaPlusVnechniiBP()
    { //умножение
        //вывод
        return $this->BK5_LentaPlusVnechniiBP()*$this->BO5_LentaPlusVnechniiBP();
    }
    function BQ6_LentaPlusVstroeniiBPStor()
    {  //умножение
        //вывод
        return $this->BK6_LentaPlusVstroeniiBPStor()*$this->BO6_LentaPlusVstroeniiBPStor();
    }
    function BQ8_LentaPlusVnechniiBP2Stor()
    { //умножение
        //вывод
        return $this->BK8_LentaPlusVnechniiBP2Stor()*$this->BO8_LentaPlusVnechniiBP2Stor();
    }
    function BQ9_LentaPlusVstroeniiBP2StorObjed()
    { //умножение
        //вывод
        return $this->BK9_LentaPlusVstroeniiBP2StorObjed()*$this->BO9_LentaPlusVstroeniiBP2StorObjed();
    }
    function BQ11_LentaPlusVnechniiBP4Stor()
    { //умножение
        //вывод
        return $this->BK11_LentaPlusVnechniiBP4Stor()*$this->BO11_LentaPlusVnechniiBP4Stor();
    }
    function BQ12_LentaPlusVstroeniiBP4StorObjed()
    {  //умножение
        //вывод
        return $this->BK12_LentaPlusVstroeniiBP4StorObjed()*$this->BO12_LentaPlusVstroeniiBP4StorObjed();
    }
    function BQ14_LampiDnevnogoSveta()
    { //умножение
        //вывод
        return $this->BK14_LampiDnevnogoSveta()*$this->BO14_LampiDnevnogoSveta();
    }
    function BQ15_Itogo()
    {  //сложение
        //вывод
        return $this->BQ5_LentaPlusVnechniiBP()+$this->BQ6_LentaPlusVstroeniiBPStor()+$this->BQ8_LentaPlusVnechniiBP2Stor()+$this->BQ9_LentaPlusVstroeniiBP2StorObjed()+$this->BQ11_LentaPlusVnechniiBP4Stor()+$this->BQ12_LentaPlusVstroeniiBP4StorObjed()+$this->BQ14_LampiDnevnogoSveta();
    }
    function BR5_LentaPlusVnechniiBP()
    { //умножение
        //вывод
        return $this->BL5_LentaPlusVnechniiBP()*$this->BO5_LentaPlusVnechniiBP();
    }
    function BR6_LentaPlusVstroeniiBPStor()
    {  //умножение
        //вывод
        return $this->BL6_LentaPlusVstroeniiBPStor()*$this->BO6_LentaPlusVstroeniiBPStor();
    }
    function BR8_LentaPlusVnechniiBP2Stor()
    { //умножение
        //вывод
        return $this->BL8_LentaPlusVnechniiBP2Stor()*$this->BO8_LentaPlusVnechniiBP2Stor();
    }
    function BR9_LentaPlusVstroeniiBP2StorObjed()
    { //умножение
        //вывод
        return $this->BL9_LentaPlusVstroeniiBP2StorObjed()*$this->BO9_LentaPlusVstroeniiBP2StorObjed();
    }
    function BR11_LentaPlusVnechniiBP4Stor()
    { //умножение
        //вывод
        return $this->BL11_LentaPlusVnechniiBP4Stor()*$this->BO11_LentaPlusVnechniiBP4Stor();
    }
    function BR12_LentaPlusVstroeniiBP4StorObjed()
    {  //умножение
        //вывод
        return $this->BL12_LentaPlusVstroeniiBP4StorObjed()*$this->BO12_LentaPlusVstroeniiBP4StorObjed();
    }
    function BR14_LampiDnevnogoSveta()
    { //умножение
        //вывод
        return $this->BL14_LampiDnevnogoSveta()*$this->BO14_LampiDnevnogoSveta();
    }
    function BR15_Itogo()
    {  //сложение
        //вывод
        return $this->BR5_LentaPlusVnechniiBP()+$this->BR6_LentaPlusVstroeniiBPStor()+$this->BR8_LentaPlusVnechniiBP2Stor()+$this->BR9_LentaPlusVstroeniiBP2StorObjed()+$this->BR11_LentaPlusVnechniiBP4Stor()+$this->BR12_LentaPlusVstroeniiBP4StorObjed()+$this->BR14_LampiDnevnogoSveta();
    }
    function BS5_LentaPlusVnechniiBP()
    { //умножение
        //вывод
        return $this->BM5_LentaPlusVnechniiBP()*$this->BO5_LentaPlusVnechniiBP();
    }
    function BS6_LentaPlusVstroeniiBPStor()
    {  //умножение
        //вывод
        return $this->BM6_LentaPlusVstroeniiBPStor()*$this->BO6_LentaPlusVstroeniiBPStor();
    }
    function BS8_LentaPlusVnechniiBP2Stor()
    { //умножение
        //вывод
        return $this->BM8_LentaPlusVnechniiBP2Stor()*$this->BO8_LentaPlusVnechniiBP2Stor();
    }
    function BS9_LentaPlusVstroeniiBP2StorObjed()
    { //умножение
        //вывод
        return $this->BM9_LentaPlusVstroeniiBP2StorObjed()*$this->BO9_LentaPlusVstroeniiBP2StorObjed();
    }
    function BS11_LentaPlusVnechniiBP4Stor()
    { //умножение
        //вывод
        return $this->BM11_LentaPlusVnechniiBP4Stor()*$this->BO11_LentaPlusVnechniiBP4Stor();
    }
    function BS12_LentaPlusVstroeniiBP4StorObjed()
    {  //умножение
        //вывод
        return $this->BM12_LentaPlusVstroeniiBP4StorObjed()*$this->BO12_LentaPlusVstroeniiBP4StorObjed();
    }
    function BS14_LampiDnevnogoSveta()
    { //умножение
        //вывод
        return $this->BM14_LampiDnevnogoSveta()*$this->BO14_LampiDnevnogoSveta();
    }
    function BS15_Itogo()
    {  //сложение
        //вывод
        return $this->BS5_LentaPlusVnechniiBP()+$this->BS6_LentaPlusVstroeniiBPStor()+$this->BS8_LentaPlusVnechniiBP2Stor()+
            $this->BS9_LentaPlusVstroeniiBP2StorObjed()+$this->BS11_LentaPlusVnechniiBP4Stor()+$this->BS12_LentaPlusVstroeniiBP4StorObjed()+$this->BS14_LampiDnevnogoSveta();
    }
       function BV6_StoimostMaterialov_grn()
    {        //вывод
        return $this->BP15_Itogo();
    }
    function BV10_TrydElektrika_min()
    {        //вывод
        return $this->BS15_Itogo();
    }
    function BV11_StoimostRaboty_grn()
    {        //умножение и округление
        //вывод
        return round($this->BV10_TrydElektrika_min()*L10_C67_K1,0);
    }
 function BV20_IstochnikSSveta()
    {       //вывод
        return $this->BF27_DiodiPlusVnechInver();
    }
    function BV21_Energopotreblenie_Vt()
    {
        //вывод
        return $this->BR15_Itogo();
    }
    function BV22_Ves_kg()
    {       //вывод
        return $this->BQ15_Itogo();
    }
    function BV24_Itogo_grn()
    {
        //сложение
        //вывод
        return $this->BV6_StoimostMaterialov_grn()+$this->BV11_StoimostRaboty_grn();
    }

}