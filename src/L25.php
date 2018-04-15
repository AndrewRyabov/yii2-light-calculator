<?php
namespace almaz44\light\calculator;
include_once __DIR__ . '/L10.php';
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 21.06.2017
 * Time: 14:08
 */
class L25
    // C-light интегратор лайтбокс 1
{
    // Входные параметры:
    public $VarIspoln; // Вариант исполнения
    public $B5_RoofVisorOut; // крыша/козырек улица
    public $B6_WallOut; // стена улица
    public $B7_WallIn; // стена помещение
    public $B8_2SideIn; // 2 стороны помещение
    public $B9_4SideIn; // 4 стороны помещение

    public $B11_Orientation; // ориентация (1-гор/2-вер)
    public $B12_BolshStorona_cm; // большая сторона, см
    public $B13_MenshStorona_cm; // меньшая сторона, см
    public $B14_CvetBortov; // цвет бортов
    public $B15_CvetTill; // цвет тыла
    public $B16_Tolchina; // конструктив (1-раз/0-нераз)

    public $B18_MaketRazrab; // макет разраб (1-зак/2-L24)
    public $B19_PlenkaLic; // пленка лицевая
    public $B20_FasadAkryl; // фасад акрил
    public $B21_FasadPolikarb; // фасад поликарбонат
    public $B22_IstochnikSveta; // источник света

    private $L09;
    private $L15_1, $L15_2, $L15_3, $L15_4;
    private $L16_1, $L16_2, $L16_3, $L18_4;
    private $L17_1, $L17_2, $L17_3, $L17_4;
    private $L19_1, $L19_2;

    public function __construct($SCLight, $VarIspoln,
                                $Orientation, $MaxSide_cm, $MinSide_cm,
                                $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta)
    {
        // Заполнение входных данных.
        $this->VarIspoln = $VarIspoln; // Вариант исполнения
        $this->B5_RoofVisorOut = 0; // крыша/козырек улица
        $this->B6_WallOut = 0;      // стена улица
        $this->B7_WallIn = 0;       // стена помещение
        $this->B8_2SideIn = 0;      // 2 стороны помещение
        $this->B9_4SideIn = 0;      // 4 стороны помещение
        switch ($VarIspoln){
            case 1: $this->B5_RoofVisorOut = 1; break;
            case 2: $this->B6_WallOut = 1; break;
            case 3: $this->B7_WallIn = 1; break;
            case 4: $this->B8_2SideIn = 1; break;
            case 5: $this->B9_4SideIn = 1; break;
            default: $this->B8_2SideIn = 1; break;
        }

        $this->B11_Orientation = $Orientation;
        $this->B12_BolshStorona_cm = $MaxSide_cm;
        $this->B13_MenshStorona_cm = $MinSide_cm;
        $this->B14_CvetBortov = $FrontImg;
        $this->B15_CvetTill = $ColorBack;

        $this->L16_2 = new L16_2( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->B16_Tolchina = $this->L16_2->AF7_GlubinaBorta_m();

        $this->L09 = new L09( $SCLight, $VarIspoln,
                              $Orientation, $MaxSide_cm, $MinSide_cm,
                              $FrontImg, $ColorSide, $ColorBack, $Ugol,
                              $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->B18_MaketRazrab = $this->L09->J38_MaketImg;
        $this->B19_PlenkaLic = $this->L09->J39_PlenkLic;

        $this->L16_1 = new L16_1( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->B20_FasadAkryl = $this->L16_1->O8_FasadAkril();
        $this->B21_FasadPolikarb = $this->L16_1->O7_FasadPolikarbonat();

        $this->L18_4 = new L18_4( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->B22_IstochnikSveta = $this->L18_4->BV20_IstochnikSSveta();

        $this->L15_1 = new L15_1( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->L15_2 = new L15_2( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->L15_3 = new L15_3( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->L15_4 = new L15_4( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);

        $this->L16_3 = new L16_3( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);

        $this->L17_1 = new L17_1( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->L17_2 = new L17_2( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->L17_3 = new L17_3( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->L17_4 = new L17_4( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);

        $this->L19_1 = new L19_1( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
        $this->L19_2 = new L19_2( $SCLight, $VarIspoln,
                                  $Orientation, $MaxSide_cm, $MinSide_cm,
                                  $FrontImg, $ColorSide, $ColorBack, $Ugol,
                                  $MaketImg, $PlenkLic, $PlastLic, $IstochnikSveta);
    }

    // C light - фасад пленка
    function D5_KrishaUlica()
    {
        return $this->B5_RoofVisorOut;
    }
    function D6_StenaUlica()
    {
        return $this->B6_WallOut;
    }
    function D7_StenaPomesh()
    {
        return $this->B7_WallIn;
    }
    function D8_2StorPomesh()
    {
        return $this->B8_2SideIn;
    }
    function D9_4StorPomesh()
    {
        return $this->B9_4SideIn;
    }
    function D10_2StorPomesh()
    {
        return 1;
    }
    function E10_VPR()
    {
        switch ($this->VarIspoln){
            case 1: $temp = 'крыша/козырек улица'; break;
            case 2: $temp = 'стена улица'; break;
            case 3: $temp = 'стена помещение'; break;
            case 4: $temp = '2 стороны помещение'; break;
            case 5: $temp = '4 стороны помещение'; break;
            default: $temp = 0; break;
        }
        return $temp;

    }
    function D12_Goriz()
    {
        return ($this->B11_Orientation == 1)? 1 : 0;

    }
    function D13_Vertikal()
    {
        return ($this->B12_BolshStorona_cm == 1)? 1 : 0;
    }
    function D14_Goriz()
    {
        return 1;
    }
    function E14_VPR()
    {
        return ($this->D12_Goriz() == 1)? 'горизонтальная' : 'вертикальная';
    }

    function D26_GorRazcm()
    {
        if ($this->B11_Orientation == 1)
        {
            return $this->B12_BolshStorona_cm;
        }
        else
        {
            return $this->B13_MenshStorona_cm;
        }
    }
    function D27_CentrOtverstiyacm()
    {
        return $this->D26_GorRazcm() - 24;
    }
    function D29_ZnachD27()
    {
        return $this->B9_4SideIn;
    }
    function E29_ZnachD27()
    {
        return $this->D27_CentrOtverstiyacm();
    }
    function D30_Pusto()
    {
        return ($this->B9_4SideIn == 1) ? 1 : 0;
    }
    function D31_VPR()
    {
        return 1;
    }
    function E31_VPR()
    {
        if ($this->D31_VPR() == 1)
        {
            return '--------';
        }
        elseif ($this->D29_ZnachD27() == 1)
        {
            return 'Пусто';
        }
        else
        {
            return 0;
        }

    }
    function D33_Akryl()
    {
        return $this->B20_FasadAkryl;
    }
    function D34_Policarb()
    {
        return $this->B21_FasadPolikarb;
    }
    function D35_Akril()
    {
        return 1;
    }
    function E35_VPR()
    {
        if ($this->D35_Akril() == 1)
        {
            return 'акрил';
        }
        elseif ($this->D34_Policarb() == 1)
        {
            return 'поликарбонат';
        }
        else
        {
            return 0;
        }
    }
    function D37_Zakazchik()
    {
        if ($this->B18_MaketRazrab == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D38_L24()
    {
        if ($this->B18_MaketRazrab == 2)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function D39_VPR()
    {
        return 1;
    }
    function E39_VPR()
    {
        switch ($this->B18_MaketRazrab){
            case 1: $temp = 'заказчик'; break;
            case 2: $temp = 'L24'; break;
            default: $temp = 'заказчик'; break;
        }
        return $temp;
    }

    function D52_VPR()
    {
        return 1;
    }
    function E52_VPR()
    {
        switch ($this->B19_PlenkaLic){
            case 1: $temp = 'полноцвет фото'; break;
            case 2: $temp = 'полноцвет фото + ламинат'; break;
            case 3: $temp = 'полноцвет 720 dpi'; break;
            case 4: $temp = 'полноцвет 720 dpi + ламинат'; break;
            case 5: $temp = 'эконом, белый фон + аппликация'; break;
            case 6: $temp = 'эконом, цветной фон + прорез'; break;
            case 7: $temp = 'эконом, цветной фон + аппликация'; break;
            case 8: $temp = 'светорассеивающая, белый фон + аппликация'; break;
            case 9: $temp = 'светорассеивающая, цветной фон + прорез'; break;
            case 10: $temp = 'светорассеивающая, цветной фон + аппликация'; break;
            default: $temp = 0; break;
        }
        return $temp;
    }
    function O6_Class16StoimosMaterialov_grn()
    {
        return 'C Light';
    }
    function H5_FasadPlastik()
    {
        return $this->L16_1->O6_StoimostMaterialov_grn();
    }
    function I5_FasadPlastik()
    {
        return $this->L16_1->O11_StoimostRaboti_grn();
    }
    function K5_FasadPlastik()
    {
        return $this->L16_1->O10_FasadPolikarbonat();
    }
    function L5_FasadPlastik()
    {
        return $this->L16_1->O22_Ves_kg();
    }
    function H6_BortPVH()
    {
        return $this->L16_2->AF6_StoimosMaterialov_grn();
    }
    function I6_BortPVH()
    {
        return $this->L16_2->AF11_StoimRaboti_grn();
    }
    function K6_BortPVH()
    {
        return $this->L16_2->AF10_Trudoemkost1Bort_min();
    }
    function L6_BortPVH()
    {
        return $this->L16_2->AF22_Veskg();
    }
    function H7_Till()
    {
        return $this->L16_3->AW6_StoimMat_grn();
    }
    function I7_Till()
    {
        return $this->L16_3->AW11_StoimRab_grn();
    }
    function K7_Till()
    {
        return $this->L16_3->AW10_TrudTill_min();
    }
    function L7_Till()
    {
        return $this->L16_3->AW22_Ves_kg();
    }
    function H8_OporiLicPlastik()
    {
        return $this->L17_1->O6_CostMaterials_grn();
    }
    function I8_OporiLicPlastik()
    {
        return $this->L17_1->O11_CostWork_grn();
    }
    function K8_OporiLicPlastik()
    {
        return $this->L17_1->O10_TrydoemkostSupport_min();
    }
    function L8_OporiLicPlastik()
    {
        return $this->L17_1->O22_Massa_kg();
    }
    function H9_RamaVnutr()
    {
        return $this->L17_2->AF6_CostMaterial_grn();
    }
    function I9_RamaVnutr()
    {
        return $this->L17_2->AF11_CostWork_grn();
    }
    function K9_RamaVnutr()
    {
        return $this->L17_2->AF10_WorkBox_min();
    }
    function L9_RamaVnutr()
    {
        return $this->L17_2->AF22_Massa_kg();
    }
    function H10_RamaNaruj()
    {
        return $this->L17_4->BN6_CostMaterial_grn();
    }
    function I10_RamaNaruj()
    {
        return $this->L17_4->BN11_CostWork_grn();
    }
    function K10_RamaNaruj()
    {
        return $this->L17_4->BN10_WorkElectroBox_min();
    }
    function L10_RamaNaruj()
    {
        return $this->L17_4->BN22_Massa_kg();
    }
    function H11_Podvesi()
    {
        return $this->L17_3->AW6_CostMaterial_grn();
    }
    function I11_Podvesi()
    {
        return $this->L17_3->AW11_CostWork_grn();
    }
    function K11_Podvesi()
    {
        return $this->L17_3->AW10_WorkBoxOut_min();
    }
    function L11_Podvesi()
    {
        return $this->L17_3->AW22_Massa_kg();
    }
    function H12_Podvesi()
    {
        return $this->L19_2->AE6_MaterialiPodvesi_grn();
    }
    function I12_Podvesi()
    {
        return $this->L19_2->AE11_StoimostRabot_grn();
    }
    function K12_Podvesi()
    {
        return $this->L19_2->AE10_TrydoemkostPodvesi_min();
    }
    function L12_Podvesi()
    {
        return $this->L19_2->AE22_VesPodvesov_kg();
    }
    function H14_Elektrika()
    {
        return $this->L18_4->BV6_StoimostMaterialov_grn();
    }
    function I14_Elektrika()
    {
        return $this->L18_4->BV11_StoimostRaboty_grn();
    }
    function K14_Elektrika()
    {
        return $this->L18_4->BV10_TrydElektrika_min();
    }
    function L14_Elektrika()
    {
        return $this->L18_4->BV22_Ves_kg();
    }
    function H16_PlenkaFasad()
    {
        return $this->L15_3->BC6_FasadMatItogo_grn();
    }
    function I16_PlenkaFasad()
    {
        return $this->L15_3->BC12_StoimostRaboti_grn();
    }
    function K16_PlenkaFasad()
    {
        return $this->L15_3->BC10_TrudoemkostNanesenia_min();
    }
    function H17_PlenkaBortTill()
    {
        return $this->L15_1->N6_PloshPlenki_grn();
    }
    function I17_PlenkaBortTill()
    {
        return $this->L15_1->N11_StoimostRaboti_grn();
    }
    function K17_PlenkaBortTill()
    {
        return $this->L15_1->N10_PloshPlenki_min();
    }
    function H18_PlenkaStreych()
    {
        return $this->L15_4->BS7_StoimostMaterialov_grn();
    }
    function I18_PlenkaStreych()
    {
        return $this->L15_4->BS12_StoimostRaboti_grn();
    }
    function K18_PlenkaStreych()
    {
        return $this->L15_4->BS11_TrydoemkostYpakovki_min();
    }
    function H19_ItogoSborka()
    {
        $temp = $this->H5_FasadPlastik() + $this->H6_BortPVH() +
                $this->H7_Till() + $this->H8_OporiLicPlastik() +
                $this->H9_RamaVnutr() + $this->H10_RamaNaruj() +
                $this->H11_Podvesi() + $this->H12_Podvesi() +
                $this->H14_Elektrika() + $this->H16_PlenkaFasad() +
                $this->H17_PlenkaBortTill() + $this->H18_PlenkaStreych();
        return round($temp,0);
    }
    function I19_ItogoSborka()
    {
        $temp = $this->I5_FasadPlastik() + $this->I6_BortPVH() + $this->I7_Till() +
                $this->I8_OporiLicPlastik() + $this->I9_RamaVnutr() + $this->I10_RamaNaruj() +
                $this->I11_Podvesi() + $this->I12_Podvesi() + $this->I14_Elektrika() +
                $this->I16_PlenkaFasad() + $this->I17_PlenkaBortTill() + $this->I18_PlenkaStreych();
        return round($temp,0);
    }
    function K19_ItogoSborka()
    {
        $temp = $this->K5_FasadPlastik() + $this->K6_BortPVH() + $this->K7_Till() +
                $this->K8_OporiLicPlastik() + $this->K9_RamaVnutr() + $this->K10_RamaNaruj() +
                $this->K11_Podvesi() + $this->K12_Podvesi() + $this->K14_Elektrika() +
                $this->K16_PlenkaFasad() + $this->K17_PlenkaBortTill() + $this->K18_PlenkaStreych();
        return $temp;
    }
    function L19_ItogoSborka()
    {
        return $this->L5_FasadPlastik() + $this->L6_BortPVH() +
               $this->L7_Till() + $this->L8_OporiLicPlastik() +
               $this->L9_RamaVnutr() + $this->L10_RamaNaruj() +
               $this->L11_Podvesi() + $this->L12_Podvesi() +
               $this->L14_Elektrika();
    }
    function H20_Snabjeniye()
    {
        return $this->L19_1->N6_RashodiNaTransport_grn();
    }
    function I20_Snabjeniye()
    {
        return $this->L19_1->N11_StoimostRabot_grn();
    }
    function K20_Snabjeniye()
    {
        return $this->L19_1->N10_TrydoemkostSnabjenia_min();
    }
    function I21_Koef2()
    {
        return round($this->I19_ItogoSborka() * L10_C68_K2 / 100);
    }
    function I22_Koef3()
    {
        return round($this->I19_ItogoSborka() * L10_C69_K3 / 100);
    }
    function I23_Koef4()
    {
        return round($this->I19_ItogoSborka() * L10_C70_K4 / 100);

    }
    function H24_Koef5()
    {
        return round($this->H19_ItogoSborka() * L10_C72_K6 / 100);

    }
    function H25_Koef6()
    {
        return round($this->H19_ItogoSborka() * L10_C71_K5 / 100);

    }
    function H26_StoimosBazovay()
    {
        $temp = $this->H19_ItogoSborka() + $this->H20_Snabjeniye() +
                $this->H24_Koef5() + $this->H25_Koef6();
        return $temp;
    }
    function I26_StoimosBazovay()
    {   // I19:I23
        $temp = $this->I19_ItogoSborka() + $this->I20_Snabjeniye() +
                $this->I21_Koef2() + $this->I22_Koef3()+$this->I23_Koef4();
        return $temp;
    }
    function K26_StoimosBazovay()
    {
        return round($this->K19_ItogoSborka() / 480, 1);

    }
    function J5_FasadPlastik_grn()
    {
        return $this->H5_FasadPlastik() + $this->I5_FasadPlastik();
    }
    function J6_BortPVX_grn()
    {
        return $this->H6_BortPVH() + $this->I6_BortPVH();
    }
    function J7_Till_grn()
    {
        return $this->H7_Till() + $this->I7_Till();
    }
    function J8_OporiLiucevogoPlastika_grn()
    {
        return $this->H8_OporiLicPlastik() + $this->I8_OporiLicPlastik();
    }
    function J9_RamaVnytrenia_grn()
    {
        return $this->H9_RamaVnutr() + $this->I9_RamaVnutr();
    }
    function J10_RamaElektro_grn()
    {
        return $this->H10_RamaNaruj() + $this->I10_RamaNaruj();
    }
    function J11_RamaNaryshnaa_grn()
    {
        return $this->H11_Podvesi() + $this->I11_Podvesi();
    }
    function J12_Podvesi_grn()
    {
        return $this->H12_Podvesi() + $this->I12_Podvesi();
    }
    function J14_Elektrika_grn()
    {
        return $this->H14_Elektrika() + $this->I14_Elektrika();
    }
    function J16_FasadPlenka_grn()
    {
        return $this->H16_PlenkaFasad() + $this->I16_PlenkaFasad();
    }
    function J17_BortTilPlenka_grn()
    {
        return $this->H17_PlenkaBortTill() + $this->I17_PlenkaBortTill();
    }
    function J18_PlenkaStreichUpak_grn()
    {
        return $this->H18_PlenkaStreych() + $this->I18_PlenkaStreych();
    }
    function J26_ZatratiObshiye()
    {
        return $this->H26_StoimosBazovay() + $this->I26_StoimosBazovay();
    }
    function O6_ImiaKonstruktora()
    {
        return 'C_light';
    }
    function O9_VarIsp()
    {
        return $this->E10_VPR();
    }
    function O10_OrientText()
    {
        return $this->E14_VPR();
    }
    function O11_OrientKod()
    {
        return $this->B11_Orientation;
    }
    function O12_BolshRazmcm()
    {
        return $this->B12_BolshStorona_cm;
    }
    function O13_MenshRazmcm()
    {
        return $this->B13_MenshStorona_cm;
    }
    function O14_Tolshcm()
    {
        return $this->B16_Tolchina;
    }
    function O15_CvetBortRitramaNom()
    {
        return $this->B14_CvetBortov;
    }
    function O16_CvetTillRitramaNom()
    {
         return $this->B15_CvetTill;
    }
    function O17_MaketRazrab()
    {
        return $this->E39_VPR();
    }
    function O18_PlenkaLic()
    {
        return $this->E52_VPR();
    }
    function O19_PlastikLic()
    {
        return $this->E35_VPR();
    }
    function O20_IstochnikSveta()
    {
        return $this->B22_IstochnikSveta;
    }

    function O22_CenrOtvDl4StorPomeshcm()
    {
        return $this->E31_VPR();
    }
    function O28_Snabzhenie_grn()
    {
        return $this->H20_Snabjeniye() + $this->I20_Snabjeniye();
    }
    function O29_StoimostBazovya_grn()
    {
        return $this->J26_ZatratiObshiye();
    }
    function O31_Energopotrebleniyevt()
    {

        return $this->L18_4->BV21_Energopotreblenie_Vt();
    }
    function O32_Veskg()
    {
        return round($this->L19_ItogoSborka(),1);
    }
}