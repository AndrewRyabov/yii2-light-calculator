<?php
namespace almaz44\light\calculator;
include_once __DIR__ . '/L10.php';

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 06.10.2017
 * Time: 20:27
 */
class L19_1
{
    // C-light Снабжение 1
    // Входные параметры:
// Входные параметры:
    public $B5_BigStor; // большая сторона, см
    public $B6_SmallStor; //меньшая сторона, см
    public $B8_LicevoeIzobragenie; // лицевое изображение
    public $B9_CvetBortov; //цвет бортов
    public $B10_CvetTila; //цвет тыла

    public function __construct($BigStor, $SmallStor, $LicevoeIzobragenie,
                                $CvetBortov, $CvetTila)
    {
        // Заполнение входных данных.
        $this->B5_BigStor = $BigStor;
        $this->B6_SmallStor = $SmallStor;
        $this->B8_LicevoeIzobragenie = $LicevoeIzobragenie;
        $this->B9_CvetBortov = $CvetBortov;
        $this->B10_CvetTila = $CvetTila;

    }


    function E5_LicevoeIzobr()
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
        //если b9>0, то присвоить 1, иначе вернуть 0
        //вывод
        if ($this->B9_CvetBortov>0)
        {
            return 1;
        }
        else
        {
            return 0;
        } }
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
        } }
    function E9_PlenkaVizdelii()
    {
        //если b8+b9+b10>0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод

        if (($this->B8_LicevoeIzobragenie+$this->B9_CvetBortov+$this->B10_CvetTila)>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }}

    function H5_BigStor_m()
    {  //округление и деление
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
    {   //умножение
        //вывод
        return L10_U123DobloProbeg*L10_BB113_K_ProbegDobloZa1PoezdSnabj100km;
    }
    function H11_PlochadStandart_m2()
    {  //вывод
        return L10_BB109_K_PloshStandartVives;
    }
    function H12_PlochadViveski_m2()
    {//умножение
        //вывод
        return $this->H5_BigStor_m()*$this->H6_SmallStor_m();
    }
    function H13_PlochadEkvivalentna_m2()
    {    //сложение, умножение и отнимание
        //вывод
        return $this->H11_PlochadStandart_m2()+($this->H12_PlochadViveski_m2()-$this->H11_PlochadStandart_m2())*L10_BB110_K_PopravPloshSnabj;
    }
    function H14_KoefPloshadnoj()
    {   //деление
        //вывод
        return $this->H13_PlochadEkvivalentna_m2()/$this->H11_PlochadStandart_m2();
    }

    function H16_RashodiNaMashStand_grn()
    {  //умножение
        //вывод
        return $this->H8_Stoimost1StandarntoiPoezdki_grn()*L10_BB111_K_KolPoezdSnabjBezPlankStandartsht;
    }
    function H17_RashodiNaMashPlenka_grn()
    {
        //умножение
        //вывод
        return $this->H8_Stoimost1StandarntoiPoezdki_grn()*L10_BB112_K_KolPoezdSnabjPlenkStandartsht*$this->E9_PlenkaVizdelii();
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

        return L10_BB115_K_ZatratnaDostListMatlDis*L10_C10_Dizel;
    }

    function K5_TrydoemkostStandart_min()
    {
        //умножение
        //вывод

        return L10_BB111_K_KolPoezdSnabjBezPlankStandartsht*L10_BT75_SnabjStandartVives1i8m2;
    }
    function K6_TrydoemkostPlenka_min()
    {
        //умножение
        //вывод
        return L10_BB112_K_KolPoezdSnabjPlenkStandartsht* L10_BT75_SnabjStandartVives1i8m2*$this->E9_PlenkaVizdelii();
    }
    function K7_RashodiNaMashEkv_grn()
    {   //сложение и умножение
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
    // C-light подвесы 1
    // Входные параметры:
// Входные параметры:
    public $R5_RoofViserOut; // крыша/козырек улица
    public $R6_RoofOut; //стена улица
    public $R7_RoofIn; // стена помещение
    public $R8_2RoofIn; //2 стороны помещение
    public $R9_4RoofIn; //4 стороны помещение

    public $R11_Orient; // ориент (1-гор/2-верт)
    public $R12_BigStor; //большая сторона, см
    public $R13_SmallStor; // меньшая сторона, см
    public $R14_IstochnikSveta; //источник света (1-диод/2-лам)

    public $R21_Fasad; // фасад, кг
    public $R22_Bort; // борт, кг
    public $R23_Til; // тыл, кг
    public $R24_RamaVnytrenia; // рама внутренная, кг
    public $R25_OporiLicevPlast; // опоры лицев пласт, кг
    public $R26_Electrika; // електрика, кг
    public $R27_ItogoPredvVes; // итого предв вес, кг
    public $R28_ItogoPredvVes1Linia; // итог предв вес 1 линия, кг




    public function __construct($RoofViserOut, $RoofOut, $RoofIn, $RoofIn2, $RoofIn4, $Orient,
                                $BigStor, $SmallStor, $IstochnikSveta, $Fasad, $Bort, $Til, $RamaVnytrenia, $OporiLicevPlast, $Electrika, $ItogoPredvVes, $ItogoPredvVes1Linia)

    {
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

        $this->R21_Fasad_kg = $Fasad;
        $this->R22_Bort_kg= $Bort;
        $this->R23_Til_kg = $Til;
        $this->R24_RamaVnytrennay_kg = $RamaVnytrenia;
        $this->R25_OporiLicevPlast = $OporiLicevPlast;
        $this->R26_Electrika = $Electrika;
        $this->R27_ItogoPredvVes = $ItogoPredvVes;
        $this-> R28_ItogoPredvVes1Linia=$ItogoPredvVes1Linia;


    }
    function X5_BigStor_m()
    { //округление и деление
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
        if ($this->R11_Orient==1)
        {
            return $this->X5_BigStor_m();
        }
        else
        {
            return $this->X6_SmallStor_m();
        }}
    function X8_VertykalnyaStorona_m()
    {
        //если r11=1, то присвоить x6, иначе вернуть x5
        //иначе - вернуть 0
        //вывод
        if ($this->R11_Orient==1)
        {
            return $this->X6_SmallStor_m();
        }
        else
        {
            return $this->X5_BigStor_m();
        }}
    function U5_PodvesiTros2Tochki()
    {   //вывод
        return $this->R8_2RoofIn;
    }
    function U6_PodvesiTros4Tochki()
    {//вывод
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
        } }
    function U9_IzpolsyetsTilPVX4mm()
    {//вывод
        return 0;
    }

    function U10_IzpolsyetsTilPVX3mm()
    {   //вывод
        return 0;
    }
    function U11_IzpolsyetsTilDVP()
    {    //вывод
        return 0;
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
        } }
    function U14_PVX3mmUsilenii()
    {    //если r28>bb45, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод
        if ($this->R28_ItogoPredvVes1Linia>L10_BB45_K_PVH3mmMaxNagrNaPodv_kg)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function U15_DVPUsilenii()
    { //если r28>bb48, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод
        if ($this->R28_ItogoPredvVes1Linia>L10_BB48_K_DVP3mmMaxNagrNaPodv_kg)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function U17_PodvesUsileniiVes()
    {    //сложение, умножение
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
        }}

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
        }}
    function U21_VertRazmerMeneeGraniciLegkUsil()
    {    //если u20=1, то присвоить 0, иначе вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->U20_VertRazmerBoleeGraniciLegkUsil()==1)
        {
            return 0;
        }
        else
        {
            return 1;
        }}

    function U23_PodvwsYsilenniUlica()
    {   //если u17+u20>0, то присвоить 1, иначе вернуть 0
        //иначе - вернуть 0
        //вывод
        if ($this->U17_PodvesUsileniiVes()+$this->U20_VertRazmerBoleeGraniciLegkUsil()>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }}
    function U24_PodvwsLegkiiUlica()
    {
        //если u23=1, то присвоить 0, иначе вернуть 1
        //иначе - вернуть 0
        //вывод
        if ($this->U23_PodvwsYsilenniUlica() == 1)
        {
            return 0;
        } else
        {
            return 1;
        }}
    function X10_Profil123012_1mp_grn()
    {   //вывод
        return L10_AR32_StilcoUgol_123012mm;
    }
    function X11_PerarsxodProfil1a23012()
    {    //вывод
        return L10_BB59_K_PererashStilkoProf;
    }
    function X12_Samorez_1shtuka_grn()
    {  //вывод
        return L10_AR42_Samorez19ZnBur;
    }
    function X13_PVX5mm_1m2_grn()
    {//вывод
        return L10_J25_PVH_5mmS;
    }
    function X14_KleiPVX5mm_1mp_grn()
    {   //вывод
        return L10_K117_CosmofenPlusPVH_200mlSmp;
    }
    function X15_Uxo_1shtuka_grn()
    {   //вывод
        return L10_AR51_kronshteynUho;
    }
    function X16_Koush_1shtuka_grn()
    {    //вывод
        return L10_AR52_Koush;
    }
    function X17_ZachimDlaTrosa_1shtuka_grn()
    {    //вывод
        return L10_AR50_ZagimForTrosStal;
    }
    function X18_TrosStalnoi1mp_grn()
    {    //вывод
        return L10_AR49_TrosStal;
    }
    function X19_BoltKruk_grn()
    {    //вывод
        return L10_AR53_BoltKruk;
    }
    function X21_PVXYsiletelPlusKlei_grn()
    {   //умножение и сложение
        //вывод
        return 0.01*$this->X13_PVX5mm_1m2_grn()+0.4*$this->X14_KleiPVX5mm_1mp_grn();
    }
    function X22_12na13na12Dla1Podvesa_grn()
    {    //умножение и сложение
        //вывод
        return $this->X10_Profil123012_1mp_grn()*($this->X8_VertykalnyaStorona_m()+0.1)*$this->X11_PerarsxodProfil1a23012();
    }
    function X23_KolCamorVYsilPodvese_shtuk()
    {      	//ВПР
        //сравнение c 1
        //вывод
        if ($this->X8_VertykalnyaStorona_m()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp+1)
        {
            return 6;
        } }
    function X25_2LegkixPodvesa_grn()
    {
        //умножение и сложение
        //вывод
        return ($this->X21_PVXYsiletelPlusKlei_grn()+$this->X15_Uxo_1shtuka_grn()+$this->X12_Samorez_1shtuka_grn()*4)*2;
    }
    function X26_2YsilenixPodvesa_grn()
    {    //умножение и сложение
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
    function X35_PodvesiMaterItogo_grn()
    {
        //сложение
        //вывод
        return $this->X30_TrosStalnoi1mp_grn()+$this->X31_StenaUlica_grn()+$this->X32_StenaPomechenie_grn()+$this->X33_2StoroniPomechenia_grn()+$this->X34_4StoroniPomechenia_grn();
    }
    function Y10_Profil123012_1mp_grn()
    {   //вывод
        return L10_AS32_StilcoUgol_123012mm;
    }
    function Y13_PVX5mm1m2_grn()
    {   //вывод
        return L10_L25_PVH_5mmP;
    }
    function Y15_BoltKruk_grn()
    {   //вывод
        return L10_AS51_kronshteynUho;

    }
    function Y19_Yxo1shtuk_grn()
    {  //вывод
        return L10_AS53_BoltKruk;
    }
    function Y25_2LegkixPodvesa_grn()
    {
        //умножение
        //вывод
        return $this->Y15_BoltKruk_grn()*3;
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
    function AB5_SverlOtverstBolee5mm1sht_min_min()
    {
        //вывод
        return L10_BT28_SverlOtvBol5mm_1sht;
    }
    function AB6_PrirezatProfil_min()
    {
        //вывод
        return L10_BT21_PriresStalProfCDUDStilk_1sht;
    }
    function AB7_PrirezatTros_min()
    {//вывод
        return L10_BT10_PrirezTrosStal_1mp;
    }
    function AB8_ZakrytitSamorez_min()
    { //вывод
        return L10_BT25_VkruchSamorez_1sht;
    }
    function AB9_Montag1BoltKrukI2Zagima_min()
    {   //вывод
        return L10_CC14_Montaj1LegkPodves_min;
    }
    function AB10_Montag1PodvesaYsilenogo_min()
    {
        //умножение и сложение
        //вывод
        return $this->AB6_PrirezatProfil_min()+$this->AB5_SverlOtverstBolee5mm1sht_min_min()+$this->AB8_ZakrytitSamorez_min()*$this->X23_KolCamorVYsilPodvese_shtuk();
    }
    function AB11_Montag1BoltKrukPlus2Zagima_min()
    {
        //вывод
        return L10_CC13_Montaj1BoltKryukPlus2Zajim_min;

    }
    function AB12_Montag2Zagimov_min()
    {
        //вывод
        return L10_CC12_Montaj2Zajim_min;

    }
    function AB16_2PodvesaLegkix_min()
    {
        //умножение
        //вывод
        return $this->AB9_Montag1BoltKrukI2Zagima_min()*2;
    }
    function AB17_2PodvesaYsilennix_min()
    {
        //умножение
        //вывод
        return $this->AB10_Montag1PodvesaYsilenogo_min()*2;
    }
    function AB18_2Trosa_min()
    {
        //умножение и сложение
        //вывод
        return ($this->AB7_PrirezatTros_min()+$this->AB11_Montag1BoltKrukPlus2Zagima_min())*2;
    }
    function AB19_4Trosa_min()
    {
        //умножение и сложение
        //вывод
        return ($this->AB7_PrirezatTros_min()+$this->AB12_Montag2Zagimov_min())*4;
    }
    function AB21_RoofViser_grn()
    {
        //умножение
        //вывод
        return $this->AB16_2PodvesaLegkix_min()*$this->R5_RoofViserOut;
    }
    function AB22_RoofOut_min()
    {
        //умножение и сложение
        //вывод
        return ($this->AB16_2PodvesaLegkix_min()*$this->U24_PodvwsLegkiiUlica()+$this->AB17_2PodvesaYsilennix_min()*$this->U23_PodvwsYsilenniUlica())*$this->R6_RoofOut;
    }
    function AB23_RoofIn_min()
    {
        //умножение и сложение
        //вывод
        return ($this->AB16_2PodvesaLegkix_min()*$this->U18_PodvesLegkiiVes()+$this->AB17_2PodvesaYsilennix_min()*$this->U17_PodvesUsileniiVes())*$this->R7_RoofIn;
    }
    function AB24_2RoofIn_grn()
    {
        //умножение
        //вывод
        return $this->AB18_2Trosa_min()*$this->R8_2RoofIn;
    }
    function AB25_4RoofIn_grn()
    {
        //умножение
        //вывод
        return $this->AB19_4Trosa_min()*$this->R9_4RoofIn;
    }

    function AB26_PodvesiRabotaItogo_grn()
    {
        //сложение
        //вывод
        return $this->AB21_RoofViser_grn()+$this->AB22_RoofOut_min()+$this->AB23_RoofIn_min()+$this->AB24_2RoofIn_grn()+$this->AB25_4RoofIn_grn();
    }

    function AE6_MaterialiPodvesi_grn()
    {
        //округление
        //вывод
        return round($this->X35_PodvesiMaterItogo_grn(), 0);
    }
    function AE10_TrydoemkostPodvesi_min()
    {
        //округление
        //вывод
        return round($this->AB26_PodvesiRabotaItogo_grn(), 0);

    }
    function AE11_StoimostRabot_grn()
    {
        //округление и умножение
        //вывод
        return round($this->AE10_TrydoemkostPodvesi_min()*L10_C67_K1,0);
    }
    function AE22_VesPodvesov_kg()
    {//вывод
        return $this->Y35_PodvesiMaterialiItogo_grn();
    }

    function AE24_Itogo_grn()
    {
        //сложение и округление
        //вывод

        return round($this->AE6_MaterialiPodvesi_grn()+$this->AE11_StoimostRabot_grn(),0);
    }



}