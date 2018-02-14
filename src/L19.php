<?php namespace almaz44\light\calculator;
include_once __DIR__ . '/L10.php';

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 06.10.2017
 * Time: 20:27
 */
class L19_1
{
    // Снабжение!

    // Входные параметры:
    private $B5_BigStor; // большая сторона, см
    private $B6_SmallStor; //меньшая сторона, см
    private $B8_LicevoeIzobragenie; // лицевое изображение
    private $B9_CvetBortov; //цвет бортов
    private $B10_CvetTila; //цвет тыла

    public function __construct($BigStor = 300, $SmallStor = 60,
                                $LicevoeIzobragenie = 1,
                                $CvetBortov = 0, $CvetTila = 0
    )

    {
        // Заполнение входных данных.
        $this->B5_BigStor = $BigStor;
        $this->B6_SmallStor = $SmallStor;
        $this->B8_LicevoeIzobragenie = $LicevoeIzobragenie;
        $this->B9_CvetBortov = $CvetBortov;
        $this->B10_CvetTila = $CvetTila;
    }

    function E5_TrebovanieLamp()
    {
        //если b8=1, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->B8_LicevoeIzobragenie==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E6_PlenkaBort()
    {
        //если b9>=1, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->B9_CvetBortov>=1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E7_PlenkaTil()
    {
        //если b10>=1, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->B10_CvetTila>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function E8_PlenkaVizdelii()
    {
        //если b8+b9+b10>=0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->B8_LicevoeIzobragenie+$this->B9_CvetBortov+$this->B10_CvetTila)>=0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }


    function H5_BigStor_m()
    {

        //округление и деление
        //вывод

        return round($this->B5_BigStor/100,2);

    }
    function H6_SmallStor_m()
    {
        //округление и деление
        //вывод

        return round($this->B6_SmallStor/100,2);

    }
    function H8_Stoimost1StandarntoiPoezdki_grn()
    {
        //умножение
        //вывод

        return L10_BB113_K_ProbegDobloZa1PoezdkySnabjenca*L10_BB114_K_ProbAvtSnabj100kmVivesStandart*L10_C10_Dizel;
    }
    function H11_PlochadStandart_m2()
    {

        //вывод

        return L10_BB109_K_PloshStandartVives;

    }
    function H12_PlochadViveski_m2()
    {
        //умножение
        //вывод

        return $this->H5_BigStor_m()*$this->H6_SmallStor_m();
    }
    function H13_PlochadEkvivalentna_m2()
    {
        //сложение, умножение и отнимание
        //вывод

        return $this->H11_PlochadStandart_m2()+($this->H12_PlochadViveski_m2()-$this->H11_PlochadStandart_m2())*L10_BB110_K_PopravPloshSnabj;
    }
    function H14_KoefPloshadnoj()
    {
        //деление
        //вывод

        return $this->H13_PlochadEkvivalentna_m2()/$this->H11_PlochadStandart_m2();
    }

    function H16_RashodiNaMashStand_grn()
    {
        //умножение
        //вывод

        return $this->H8_Stoimost1StandarntoiPoezdki_grn()*L10_BB111_K_KolichestvoPoezdokSnabjencaBezPlenkiStandart;
    }
    function H17_RashodiNaMashPlenka_grn()
    {
        //умножение
        //вывод

        return $this->H8_Stoimost1StandarntoiPoezdki_grn()*L10_BB112_K_KolichestvoPoezdokSnabjencaPlenkaStandart*$this->E8_PlenkaVizdelii();
    }

    function H18_RashodiNaMashEkv_grn()
    {
        //сложение и умножение
        //вывод

        return ($this->H16_RashodiNaMashStand_grn()+$this->H17_RashodiNaMashPlenka_grn())*$this->H14_KoefPloshadnoj();
    }
    function H20_DostavkaListovixMater_grn()
    {
        //умножение
        //вывод

        return L10_BB115_K_NaDostavkyListovixMaterialov_LDizel*L10_C10_Dizel;
    }

    function K5_TrydoemkostStandart_min()
    {
        //умножение
        //вывод

        return L10_BB111_K_KolichestvoPoezdokSnabjencaBezPlenkiStandart*L10_BT75_SnabjStandartVives1i8m2;
    }
    function K6_TrydoemkostPlenka_min()
    {
        //умножение
        //вывод

        return L10_BB112_K_KolichestvoPoezdokSnabjencaPlenkaStandart* L10_BT75_SnabjStandartVives1i8m2*$this->E8_PlenkaVizdelii();
    }
    function K7_RashodiNaMashEkv_grn()
    {
        //сложение и умножение
        //вывод

        return ($this->K5_TrydoemkostStandart_min()+$this->K6_TrydoemkostPlenka_min())*$this->H14_KoefPloshadnoj();
    }

    function N6_RashodiNaTransport_grn()
    {

        //округление и сложение
        //вывод

        return round($this->H18_RashodiNaMashEkv_grn()+$this->H20_DostavkaListovixMater_grn(), 0);

    }
    function N10_TrydoemkostSnabjenia_min()
    {
        //округление
        //вывод
        return round($this->K7_RashodiNaMashEkv_grn(), 0);

    }
    function N11_StoimostRabot_grn()
    {
        //округление и умножение
        //вывод
        return round($this->N10_TrydoemkostSnabjenia_min()*L10_C67_K1, 0);
    }

    function N24_Itogo_grn()
    {
        //сложение и умножение
        //вывод

        return $this->N6_RashodiNaTransport_grn()+$this->N11_StoimostRabot_grn();
    }

}

class L19_2
{
    // Входные параметры:
// Входные параметры:
    private $R5_RoofViserOut; // крыша/козырек улица
    private $R6_RoofOut; //стена улица
    private $R7_RoofIn; // стена помещение
    private $R8_2RoofIn; //2 стороны помещение
    private $R9_4RoofIn; //4 стороны помещение

    private $R11_Orient; // ориент (1-гор/2-верт)
    private $R12_BigStor; //большая сторона, см
    private $R13_SmallStor; // меньшая сторона, см
    private $R14_IstochnikSveta; //источник света (1-диод/2-лам)

    private $R21_Fasad; // фасад, кг
    private $R22_Bort; // борт, кг
    private $R23_Til; // тыл, кг
    private $R24_RamaVnytrenia; // рама внутренная, кг
    private $R25_OporiLicevPlast; // опоры лицев пласт, кг
    private $R26_Electrika; // електрика, кг
    private $R27_ItogoPredvVes; // итого предв вес, кг
    private $R28_ItogoPredvVes1Linia; // итог предв вес 1 линия, кг

    private $L16_1_fasad;
    private $L16_2_bort;
    private $L16_3_back;

    private $L17_1_opora;
    private $L17_2_rama;

    private $L18_4_electro;


    public function __construct($RoofViserOut = 0, $RoofOut = 0, $RoofIn = 0, $RoofIn2 = 1, $RoofIn4 = 0,
                                $Orient = 1,
                                $BigStor = 300, $SmallStor = 60,
                                $IstochnikSveta = 2)

//$Fasad = 3.4, $Bort = 4.8, $Til = 0, $RamaVnytrenia = 3.8, $OporiLicevPlast = 0, $Electrika = 2.2,
//$ItogoPredvVes = 14.2, $ItogoPredvVes1Linia = 7.1

    {

        $this->L16_1_fasad = new L16_1($RoofViserOut, $RoofOut,$RoofIn,$RoofIn2,$RoofIn4,
                                       $BigStor,$SmallStor,
                                       $PlastikLicevoy = 1);
        $this->L16_2_bort = new L16_2($RoofViserOut, $RoofOut,$RoofIn,$RoofIn2,$RoofIn4,
                                      $Orientation = 1,
                                      $BigStor,$SmallStor,
                                      $PlastLic = 1);
        $this->L16_3_back = new L16_3($RoofViserOut, $RoofOut,$RoofIn,$RoofIn2,$RoofIn4,
                                      $BigStor,$SmallStor);

        $this->L17_1_opora = new L17_1($RoofViserOut, $RoofOut,$RoofIn,$RoofIn2,$RoofIn4,
                                       $BigStor,$SmallStor,
                                       $PlastikLicevoy = 1);
        $this->L17_2_rama = new L17_2($RoofViserOut, $RoofOut,$RoofIn,$RoofIn2,$RoofIn4,
                                      $Orientacia = 1,
                                      $BigStor,$SmallStor,
                                      $PlastikLicevoy = 1);

        $this->L18_4_electro = new L18_4($RoofViserOut, $RoofOut,$RoofIn,$RoofIn2,$RoofIn4,
                                         $BigStor,$SmallStor,
                                         $IstochnikSveta);

        // Заполнение входных данных.
        $this->R5_RoofViserOut = $RoofViserOut;
        $this->R6_RoofOut = $RoofOut;
        $this->R7_RoofIn = $RoofIn;
        $this->R8_2RoofIn = $RoofIn2;
        $this->R9_4RoofIn = $RoofIn4;

        $this->R11_Orient = $Orient;
        $this->R12_BigStor = $BigStor;
        $this->R13_SmallStor = $SmallStor;
        $this->R14_IstochnikSveta = $IstochnikSveta;

        $this->R21_Fasad = $this->L16_1_fasad->O22_Ves_kg();
        $this->R22_Bort= $this->L16_2_bort->AF22_Veskg();
        $this->R23_Til = $this->L16_3_back->AW22_Veskg();
        $this->R24_RamaVnytrenia = $this->L17_2_rama->AF22_Ves_kg();
        $this->R25_OporiLicevPlast = $this->L17_1_opora->O22_Ves_kg();
        $this->R26_Electrika = $this->L18_4_electro->BS22_Ves_kg();

        $this->R27_ItogoPredvVes = $this->R21_Fasad + $this->R22_Bort + $this->R23_Til + $this->R24_RamaVnytrenia + $this->R25_OporiLicevPlast + $this->R26_Electrika;
        $this-> R28_ItogoPredvVes1Linia= round($this->R27_ItogoPredvVes / 2, 1);


    }
    function X5_BigStor_m()
    {

        //округление и деление
        //вывод

        return round($this->R12_BigStor/100,2);

    }
    function X6_SmallStor_m()
    {

        //округление и деление
        //вывод

        return round($this->R13_SmallStor/100,2);

    }
    function X7_GorizontalnyaStorona_m()
    {
        //если r11=1, то присвоить x5, иначе вернуть x6
        //иначе - вернуть 0
        //вывод

        if ($this->R11_Orient=1)
        {
            return $this->X5_BigStor_m();
        }
        else
        {
            return $this->X6_SmallStor_m();
        }
    }
    function X8_VertykalnyaStorona_m()
    {
        //если r11=1, то присвоить x6, иначе вернуть x5
        //иначе - вернуть 0
        //вывод

        if ($this->R11_Orient=1)
        {
            return $this->X6_SmallStor_m();
        }
        else
        {
            return $this->X5_BigStor_m();
        }
    }



    function U5_PodvesiTros2Tochki()
    {

        //вывод

        return $this->R8_2RoofIn;

    }
    function U6_PodvesiTros4Tochki()
    {

        //вывод
        return $this->R9_4RoofIn;
    }
    function U7_PodvesiDla1Storoni()
    {
        //если u5+u6=0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->U5_PodvesiTros2Tochki()+$this->U6_PodvesiTros4Tochki()==0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U9_IzpolsyetsTilPVX4mm()
    {

        //вывод
        return 0;
    }

    function U10_IzpolsyetsTilPVX3mm()
    {

        //вывод
        return 0;
    }
    function U11_IzpolsyetsTilDVP()
    {

        //вывод
        return 1;
    }
    function U13_PVX4mmUsilenii()
    {
        //если r28>bb46, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->R28_ItogoPredvVes1Linia>L10_BB46_K_PVH4mmMaxNagrNaPodv_kg)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U14_PVX3mmUsilenii()
    {
        //если r28>bb45, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->R28_ItogoPredvVes1Linia > L10_BB45_K_PVH3mmMaxNagrNaPodv_kg)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }function U15_DVPUsilenii()
{
    //если r28>bb48, то присвоить 1, иначе вернуть 0
    //иначе - вернуть 0
    //вывод

    if ($this->R28_ItogoPredvVes1Linia>L10_BB48_K_DVP3mmMaxNagrNaPodv_kg)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
    function U17_PodvesUsileniiVes()
    {
        //сложение, умножение
        //вывод

        return $this->U9_IzpolsyetsTilPVX4mm()*$this->U13_PVX4mmUsilenii()+$this->U10_IzpolsyetsTilPVX3mm()*$this->U14_PVX3mmUsilenii()+$this->U11_IzpolsyetsTilDVP()*$this->U15_DVPUsilenii();
    }


    function U18_PodvesLegkiiVes()
    {
        //если u17=1, то присвоить 0, иначе вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->U17_PodvesUsileniiVes()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }

    function U20_VertRazmerBoleeGraniciLegkUsil()
    {
        //если x8>bb49, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->X8_VertykalnyaStorona_m()>L10_BB49_K_GranPrimPodvOD_m)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U21_VertRazmerMeneeGraniciLegkUsil()
    {
        //если u20=1, то присвоить 0, иначе вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->U20_VertRazmerBoleeGraniciLegkUsil()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }

    function U23_PodvwsYsilenniUlica()
    {
        //если u17+u20>0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if ($this->U17_PodvesUsileniiVes()+$this->U20_VertRazmerBoleeGraniciLegkUsil()>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function U24_PodvwsLegkiiUlica()
    {
        //если u23=1, то присвоить 0, иначе вернуть 1
        //иначе - вернуть 0
        //вывод

        if ($this->U23_PodvwsYsilenniUlica()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }


    function X10_Profil123012_1mp_grn()
    {

        //вывод
        return L10_AR32_StilcoProfil_12301214mm;

    }
    function X11_PerarsxodProfil1a23012()
    {

        //вывод
        return L10_BB59_K_PererashStilkoProf;

    }
    function X12_Samorez_1shtuka_grn()
    {

        //вывод
        return L10_AR42_Samorez19ZnBur;

    }
    function X13_PVX5mm_1m2_grn()
    {

        //вывод
        return L10_J25_PVH_5mmS;

    }
    function X14_KleiPVX5mm_1mp_grn()
    {

        //вывод
        return L10_K117_CosmofenPlusPVH_200mlSmp;

    }
    function X15_Uxo_1shtuka_grn()
    {

        //вывод
        return L10_AR51_kronshteynUho;

    }
    function X16_Koush_1shtuka_grn()
    {

        //вывод
        return L10_AR52_Koush;
    }
    function X17_ZachimDlaTrosa_1shtuka_grn()
    {

        //вывод
        return L10_AR50_ZagimForTrosStal;
    }
    function X18_TrosStalnoi1mp_grn()
    {

        //вывод
        return L10_AR49_TrosStal;
    }
    function X19_BoltKruk_grn()
    {

        //вывод
        return L10_AR53_BoltKruk;
    }

    function X21_PVXYsiletelPlusKlei_grn()
    {
        //умножение и сложение
        //вывод
        return 0.01*$this->X13_PVX5mm_1m2_grn()+0.4*$this->X14_KleiPVX5mm_1mp_grn();
    }
    function X22_12na13na12Dla1Podvesa_grn()
    {
        //умножение и сложение
        //вывод
        return $this->X10_Profil123012_1mp_grn()*($this->X8_VertykalnyaStorona_m()+0.1)*$this->X11_PerarsxodProfil1a23012();
    }

    function X23_KolCamorVYsilPodvese_shtuk()
    {
        //ВПР
        //сравнение c 1
        //вывод
            return round(0.5 + $this->X8_VertykalnyaStorona_m()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp, 0);

    }
    function X25_2LegkixPodvesa_grn()
    {
        //умножение и сложение
        //вывод
        return ($this->X21_PVXYsiletelPlusKlei_grn()+$this->X15_Uxo_1shtuka_grn()+$this->X12_Samorez_1shtuka_grn()*4)*2;
    }
    function X26_2YsilenixPodvesa_grn()
    {
        //умножение и сложение
        //вывод
        return ($this->X22_12na13na12Dla1Podvesa_grn()+$this->X23_KolCamorVYsilPodvese_shtuk()*$this->X12_Samorez_1shtuka_grn())*2;
    }
    function X27_Tros2Tochki_grn()
    {
        //умножение и сложение
        //вывод
        return ($this->X19_BoltKruk_grn()+$this->X17_ZachimDlaTrosa_1shtuka_grn()*4+$this->X18_TrosStalnoi1mp_grn()*6)*2;
    }
    function X28_Tros4Tochki_grn()
    {
        //умножение и сложение
        //вывод
        return ($this->X16_Koush_1shtuka_grn()+$this->X17_ZachimDlaTrosa_1shtuka_grn()*4+$this->X18_TrosStalnoi1mp_grn()*6)*4;
    }
    function X30_TrosStalnoi1mp_grn()
    {
        //умножение
        //вывод
        return $this->X25_2LegkixPodvesa_grn()*$this->R5_RoofViserOut;
    }
    function X31_StenaUlica_grn()
    {
        //умножение и сложение
        //вывод
        return ($this->X25_2LegkixPodvesa_grn()*$this->U24_PodvwsLegkiiUlica()+$this->X26_2YsilenixPodvesa_grn()*$this->U23_PodvwsYsilenniUlica())*$this->R6_RoofOut;
    }
    function X32_StenaPomechenie_grn()
    {
        //умножение и сложение
        //вывод
        return ($this->X25_2LegkixPodvesa_grn()*$this->U18_PodvesLegkiiVes()+$this->X26_2YsilenixPodvesa_grn()*$this->U17_PodvesUsileniiVes())*$this->R7_RoofIn;
    }
    function X33_2StoroniPomechenia_grn()
    {
        //умножение
        //вывод
        return $this->X27_Tros2Tochki_grn()*$this->R8_2RoofIn;
    }
    function X34_4StoroniPomechenia_grn()
    {
        //умножение
        //вывод
        return $this->X28_Tros4Tochki_grn()*$this->R9_4RoofIn;
    }
    function X35_4StoroniPomechenia_grn()
    {
        //сложение
        //вывод
        return $this->X30_TrosStalnoi1mp_grn()+$this->X31_StenaUlica_grn()+$this->X32_StenaPomechenie_grn()+$this->X33_2StoroniPomechenia_grn()+$this->X34_4StoroniPomechenia_grn();
    }
    function Y10_Profil123012_1mp_grn()
    {

        //вывод
        return L10_AS32_StilcoProfil_12301214mmV;

    }
    function Y13_PVX5mm1m2_grn()
    {

        //вывод
        return L10_L25_PVH_5mmP;

    }
    function Y15_BoltKruk_grn()
    {

        //вывод
        return L10_AS51_kronshteynUhoV;

    }
    function Y19_Yxo1shtuk_grn()
    {

        //вывод
        return L10_AS53_BoltKruk;

    }
    function Y25_2LegkixPodvesa_grn()
    {
        //умножение
        //вывод
        return $this->Y15_BoltKruk_grn()*2;
    }
    function Y26_2YsilennixPodvesa_grn()
    {
        //сложение и умножение
        //вывод
        return ($this->X8_VertykalnyaStorona_m()+0.1)*$this->Y10_Profil123012_1mp_grn();
    }
    function Y27_Tros2Tochki_grn()
    {
        //умножение
        //вывод
        return $this->Y19_Yxo1shtuk_grn()*6;
    }
    function Y28_Tros4Tochki_grn()
    {
        //умножение
        //вывод
        return $this->Y19_Yxo1shtuk_grn()*12;
    }
    function Y30_RoofViserOut_grn()
    {
        //умножение
        //вывод
        return $this->Y25_2LegkixPodvesa_grn()*$this->R5_RoofViserOut;
    }
    function Y31_RoofOut_grn()
    {
        //сложение и умножение
        //вывод
        return ($this->Y25_2LegkixPodvesa_grn()*$this->U24_PodvwsLegkiiUlica()+$this->Y26_2YsilennixPodvesa_grn()*$this->U23_PodvwsYsilenniUlica())*$this->R6_RoofOut;
    }
    function Y32_RoofIn_grn()
    {
        //сложение и умножение
        //вывод
        return ($this->Y25_2LegkixPodvesa_grn()*$this->U18_PodvesLegkiiVes()+$this->Y26_2YsilennixPodvesa_grn()*$this->U17_PodvesUsileniiVes())*$this->R7_RoofIn;
    }
    function Y33_2RoofIn_grn()
    {
        //умножение
        //вывод
        return $this->Y27_Tros2Tochki_grn()*$this->R8_2RoofIn;
    }
    function Y34_4RoofIn_grn()
    {
        //умножение
        //вывод
        return $this->Y28_Tros4Tochki_grn()*$this->R9_4RoofIn;
    }
    function Y35_PodvesiMaterialiItogo_grn()
    {
        //сложение
        //вывод
        return $this->Y30_RoofViserOut_grn()+$this->Y31_RoofOut_grn()+$this->Y32_RoofIn_grn()+$this->Y33_2RoofIn_grn()+$this->Y34_4RoofIn_grn();
    }

    function AB5_PrirezatProfil_min()
    {

        //вывод
        return L10_BT21_PriresStalProfCDUDStilk_1sht;

    }
    function AB6_PrirezatTros_min()
    {

        //вывод
        return $this->AB5_PrirezatProfil_min();

    }
    function AB7_ZakrytitSamorez_min()
    {

        //вывод
        return L10_BT25_VkruchSamorez_1sht;

    }
    function AB8_ZakrytitSamorez_min()
    {

        //вывод
        return L10_BT13_Montag1LegkogoPodvesa_min;

    }
    function AB9_Montag1PodvesaYsilenogo_min()
    {
        //умножение и сложение
        //вывод
        return $this->AB5_PrirezatProfil_min()+$this->AB7_ZakrytitSamorez_min()*($this->X23_KolCamorVYsilPodvese_shtuk()+1);

    }
    function AB10_Montag1BoltKrukI2Zagima_min()
    {

        //вывод
        return L10_BT12_Montag1BoltKrukI2Zagima_min;

    }
    function AB11_Montag2Zagimov_min()
    {

        //вывод
        return L10_BT11_Montag2Zagimov_min;

    }
    function AB15_2PodvesaLegkix_grn()
    {
        //умножение
        //вывод
        return $this->AB8_ZakrytitSamorez_min()*2;
    }
    function AB16_2PodvesaYsilennix_grn()
    {
        //умножение
        //вывод
        return $this->AB9_Montag1PodvesaYsilenogo_min()*2;
    }
    function AB17_2Trosa_min()
    {
        //умножение и сложение
        //вывод
        return ($this->AB6_PrirezatTros_min()+$this->AB10_Montag1BoltKrukI2Zagima_min())*2;
    }
    function AB18_4Trosa_min()
    {
        //умножение и сложение
        //вывод
        return ($this->AB6_PrirezatTros_min()+$this->AB11_Montag2Zagimov_min())*4;
    }
    function AB20_RoofViser_grn()
    {
        //умножение
        //вывод
        return $this->AB15_2PodvesaLegkix_grn()*$this->R5_RoofViserOut;
    }
    function AB21_RoofOut_min()
    {
        //умножение и сложение
        //вывод
        return ($this->AB15_2PodvesaLegkix_grn()*$this->U24_PodvwsLegkiiUlica()+$this->AB16_2PodvesaYsilennix_grn()*$this->U23_PodvwsYsilenniUlica())*$this->R6_RoofOut;
    }
    function AB22_RoofIn_min()
    {
        //умножение и сложение
        //вывод
        return ($this->AB15_2PodvesaLegkix_grn()*$this->U18_PodvesLegkiiVes()+$this->AB16_2PodvesaYsilennix_grn()*$this->U17_PodvesUsileniiVes())*$this->R7_RoofIn;
    }
    function AB23_2RoofIn_grn()
    {
        //умножение
        //вывод
        return $this->AB17_2Trosa_min()*$this->R8_2RoofIn;
    }
    function AB24_4RoofIn_grn()
    {
        //умножение
        //вывод
        return $this->AB18_4Trosa_min()*$this->R9_4RoofIn;
    }

    function AB25_PodvesiRabotaItogo_grn()
    {
        //сложение
        //вывод
        return $this->AB20_RoofViser_grn()+$this->AB21_RoofOut_min()+$this->AB22_RoofIn_min()+$this->AB23_2RoofIn_grn()+$this->AB24_4RoofIn_grn();
    }

    function AE6_RashodiNaTransport_grn()
    {

        //округление
        //вывод

        return round($this->X35_4StoroniPomechenia_grn(), 0);

    }
    function AE10_TrydoemkostPodvesa_min()
    {
        //округление
        //вывод
        return round($this->AB25_PodvesiRabotaItogo_grn(), 0);

    }
    function AE11_StoimostRabot_grn()
    {
        //округление и умножение
        //вывод
        return ($this->AE10_TrydoemkostPodvesa_min()*L10_C67_K1);
    }
    function AE22_VesPodvesov_kg()
    {

        //вывод
        return $this->Y35_PodvesiMaterialiItogo_grn();

    }

    function AE24_Itogo_grn()
    {
        //сложение и округление
        //вывод

        return round($this->AE6_RashodiNaTransport_grn()+$this->AE11_StoimostRabot_grn(),0);
    }

}