<?php

/**
 * Created by PhpStorm.
 * User: VovaP
 * Date: 03.11.2017
 * Time: 17:32
 */
class L31
{
 // Входные параметры:
// Входные параметры:
	public $AN5_RoofViserOut; // крыша/козырек улица
	public $AN6_RoofOut; //стена улица
	public $AN7_RoofIn; // стена помещение
	public $AN8_2RoofIn; //2 стороны помещение
	public $AN9_4RoofIn; //4 стороны помещение

	public $AN11_Orient; // ориент (1-гор/2-верт)
	public $AN12_BigStor; //большая сторона, см
	public $AN13_SmallStor; // меньшая сторона, см
	public $AN14_Konstryktiv; //источник света (1-раз/2-нераз)

    public $AN16_Stoimost1sht; // стоимость 1 шт, грн
    public $AN17_Ves; // вес, кг
    public $AN18_KolichestvoVivesok; // количество вывесок, штук





public function __construct($RoofViserOut, $RoofOut, $RoofIn, $RoofIn2, $RoofIn4, $Orient,
$BigStor, $SmallStor, $Konstryktiv, $Stoimost1sht, $Ves, $KolichestvoVivesok)

  {
        // Заполнение входных данных.
	$this->AN5_RoofViserOut = $RoofViserOut;
        $this->AN6_RoofOut = $RoofOut;
        $this->AN7_RoofIn = $RoofIn;
        $this->AN8_2RoofIn = $RoofIn2;
	$this->AN9_4RoofIn = $RoofIn4;

	$this->AN11_Orient = $Orient;
        $this->AN12_BigStor = $BigStor;
        $this->AN13_SmallStor = $SmallStor;
        $this->AN14_KolichestvoVivesok = $Konstryktiv;

      $this->AN16_Stoimost1sht = $Stoimost1sht;
      $this->AN17_Ves= $Ves;
      $this->AN18_KolichestvoVivesok = $KolichestvoVivesok;


}

function AQ5_ViveskaRazb()
    {

 //вывод
        return $this->AN14_KolichestvoVivesok;

 }
function AQ6_ViveskaYerazb()
    {
 //если aq5=1, то присвоить 0, иначе вернуть 1
 //вывод

        if ($this->AQ5_ViveskaRazb()==1)
	{
	 return 0;
	}
	else
	{
	return 1;
	}
 }
    function AQ8_ViveskaOdinochanaa12sm()
    {
        //если an5+an6+an7=0, то присвоить 1, иначе вернуть 0
        //вывод

        if ($this->AN5_RoofViserOut+$this->AN6_RoofOut+$this->AN7_RoofIn==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AQ9_ViveskaOdinochanaa24sm()
    {

        //вывод
        return $this->AN8_2RoofIn;

    }
    function AQ10_Viveska4StorNerazb()
    {
        //умножение
        //вывод
        return $this->AN9_4RoofIn*$this->AQ6_ViveskaYerazb();
    }
    function AQ11_Viveska4StorRazb()
    {
        //умножение
        //вывод
        return $this->AN9_4RoofIn*$this->AQ5_ViveskaRazb();
    }
    function AQ13_Viv1Ili2Stor()
    {
        //если an5+an6+an7=0, то присвоить 1, иначе вернуть 0
        //вывод
        if (($this->AN5_RoofViserOut+$this->AN6_RoofOut+$this->AN7_RoofIn+$this->AN8_2RoofIn)==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function AT5_BolichiiRazmerDvp_m()
    {
        //сложение, деление и округление
        //вывод
        return round(($this->AN12_BigStor+5)/100, 2);
    }
    function AT6_MenchiiRazmerDvp_m()
    {
        //сложение, деление и округление
        //вывод
        return round(($this->AN13_SmallStor+5)/100, 2);
    }
    function AT7_FasadPlockoiPlochadi_m2()
    {
        //умножение
        //вывод
        return $this->AT5_BolichiiRazmerDvp_m()*$this->AT6_MenchiiRazmerDvp_m();
    }
    function AT8_PerumetrPlockoiViveski_mp()
    {
        //сложение
        //вывод
        return $this->AT5_BolichiiRazmerDvp_m()+$this->AT6_MenchiiRazmerDvp_m()+$this->AT5_BolichiiRazmerDvp_m()+$this->AT6_MenchiiRazmerDvp_m();
    }
    function AT10_GorizontalniiRazmer_m()
    {
        //если an11=1, то присвоить at5, иначе вернуть at6
        //вывод
        if ($this->AN11_Orient==1)
        {
            return $this->AT5_BolichiiRazmerDvp_m();
        }
        else
        {
            return $this->AT6_MenchiiRazmerDvp_m();
        }
    }
    function AT11_VertikaniiRazmer_m()
    {
        //если an11=1, то присвоить at5, иначе вернуть at6
        //вывод
        if ($this->AN11_Orient==1)
        {
            return $this->AT6_MenchiiRazmerDvp_m();
        }
        else
        {
            return $this->AT5_BolichiiRazmerDvp_m();
        }
    }
    function AT12_Perimetr4StoronViveski_mp()
    {
        //умножение
        //вывод

        return $this->AT10_GorizontalniiRazmer_m()*4;
    }
    function AT13_BokovaaPloch4StorViv_m2()
    {
        //умножение
        //вывод

        return $this->AT12_Perimetr4StoronViveski_mp()*$this->AT11_VertikaniiRazmer_m();
    }
    function AT14_Ploch2TorcZagl4StorVuv_m2()
    {
        //умножение
        //вывод

        return $this->AT10_GorizontalniiRazmer_m()*$this->AT10_GorizontalniiRazmer_m()*2;
    }
    function AT15_DvpYpakDlaNerazborVuv_m2()
    {
        //сложение и округление
        //вывод

        return round(($this->AT13_BokovaaPloch4StorViv_m2()+$this->AT14_Ploch2TorcZagl4StorVuv_m2()), 1);
    }
    function AT16_DvpYpakDlaNerazborVuv_m2()
    {
        //сложение и умножение
        //вывод

        return $this->AT12_Perimetr4StoronViveski_mp()*2+$this->AT11_VertikaniiRazmer_m()*4;
    }
    function AT17_SamorYpakDlaNerazbVuv_sht()
    {
        //умножение и округление
        //вывод

        return round ($this->AT16_DvpYpakDlaNerazborVuv_m2()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp, 0);
    }
    function AT19_BokovaaPloch2TorcZagl4StorVuv_m2()
    {
        //умножение
        //вывод

        return $this->AT8_PerumetrPlockoiViveski_mp()*0.48;
    }
    function AT20_DvpYpakDlaNerazborVuv_m2()
    {
        //сложение и умножение
        //вывод

        return $this->AT7_FasadPlockoiPlochadi_m2()*2+$this->AT19_BokovaaPloch2TorcZagl4StorVuv_m2();
    }
    function AT21_PlankiYpakDla1RazbVuv_mp()
    {
        //сложение и умножение
        //вывод

        return $this->AT8_PerumetrPlockoiViveski_mp()*2+0.48*4;
    }
    function AT22_SamorYpakDla1RazbVuv_sht()
    {
        //умножение и округление
        //вывод

        return round ($this->AT21_PlankiYpakDla1RazbVuv_mp()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp, 0);
    }
    function AT24_VisotaPaketa1StoronVuv_m()
    {
        //сложение и умножение
        //вывод

        return 0.12*$this->AN18_KolichestvoVivesok*$this->AQ8_ViveskaOdinochanaa12sm()*2+0.24*$this->AN18_KolichestvoVivesok*$this->AQ9_ViveskaOdinochanaa24sm()+0.12*4*$this->AQ11_Viveska4StorRazb();
    }
    function AT25_BokovaaPloch2TorcZagl4StorVuv_m2()
    {
        //умножение
        //вывод
        return $this->AT8_PerumetrPlockoiViveski_mp()*$this->AT24_VisotaPaketa1StoronVuv_m();
    }
    function AT26_DvpYpakDla1PaketaVuv_mp()
    {
        //сложение и умножение
        //вывод

        return $this->AT7_FasadPlockoiPlochadi_m2()*2+$this->AT25_BokovaaPloch2TorcZagl4StorVuv_m2();
    }
    function AT27_PlankiYpakDla1PaketaVuv_mp()
    {
        //сложение и умножение
        //вывод

        return $this->AT8_PerumetrPlockoiViveski_mp()*2+4*$this->AT24_VisotaPaketa1StoronVuv_m();
    }
      function AT28_SamorYpakDla1PaketaVuv_sht()
    {
        //умножение и округление
        //вывод

        return round ($this->AT27_PlankiYpakDla1PaketaVuv_mp()*L10_BB61_K_KolSamorezVRamaPVHKorobShtMp, 0);
    }
    function AT31_DvpYpakovochnoe1m2_grn()
    {

        //вывод
        return L10_U97_DvpYpakovochnoe;
    }
    function AT32_PererasxodDvpYpakovochnogo()
    {

        //вывод
        return L10_BB10_K_PererashodDVPYpakovochnoe;
    }
    function AT33_PlankaDerevo1mp_grn()
    {

        //вывод
        return L10_U92_PlankaDerevo20x20;
    }
    function AT34_PererasxodPlank1()
    {

        //вывод
        return L10_BB105_K_PererashDerevanixPlanok;
    }
    function AT35_Stoimos1Samoreza_grn()
    {

        //вывод
        return L10_AR43_Samorez19BlackWood;
    }
    function AT37_PaketVivesok1StoronaMater_grn()
    {
        //сложение и умножение
        //вывод

        return $this->AT26_DvpYpakDla1PaketaVuv_mp()*$this->AT31_DvpYpakovochnoe1m2_grn()*$this->AT32_PererasxodDvpYpakovochnogo()+$this->AT27_PlankiYpakDla1PaketaVuv_mp()*$this->AT33_PlankaDerevo1mp_grn()*$this->AT34_PererasxodPlank1()+$this->AT28_SamorYpakDla1PaketaVuv_sht()*$this->AT35_Stoimos1Samoreza_grn();
    }
    function AT38_1Viveska4StorRazbMater_grn()
    {
        //сложение и умножение
        //вывод

        return $this->AT20_DvpYpakDlaNerazborVuv_m2()*$this->AT31_DvpYpakovochnoe1m2_grn()*$this->AT32_PererasxodDvpYpakovochnogo()+$this->AT21_PlankiYpakDla1RazbVuv_mp()*$this->AT33_PlankaDerevo1mp_grn()*$this->AT34_PererasxodPlank1()+$this->AT22_SamorYpakDla1RazbVuv_sht()*$this->AT35_Stoimos1Samoreza_grn();
    }
    function AT39_1Viveska4StorNerazbMater_grn()
    {
        //сложение и умножение
        //вывод

        return $this->AT15_DvpYpakDlaNerazborVuv_m2()*$this->AT31_DvpYpakovochnoe1m2_grn()*$this->AT32_PererasxodDvpYpakovochnogo()+$this->AT16_DvpYpakDlaNerazborVuv_m2()*$this->AT33_PlankaDerevo1mp_grn()*$this->AT34_PererasxodPlank1()+$this->AT17_SamorYpakDlaNerazbVuv_sht()*$this->AT35_Stoimos1Samoreza_grn();
    }
    function AT41_PaketVivesok1StoronaMater_grn()
    {

        //вывод
        return $this->AT37_PaketVivesok1StoronaMater_grn();
    }
    function AT42_Viveska4StorRazbMater_grn()
    {
        //умножение
        //вывод
        return $this->AT38_1Viveska4StorRazbMater_grn()*$this->AN18_KolichestvoVivesok;
    }
    function AT43_Viveska4StorNerazbMater_grn()
    {
        //умножение
        //вывод
        return $this->AT39_1Viveska4StorNerazbMater_grn()*$this->AN18_KolichestvoVivesok;
    }
    function AT45_PaketVivesok1StoronaMater_grn()
    {
        //умножение
        //вывод
        return $this->AT41_PaketVivesok1StoronaMater_grn()*$this->AQ13_Viv1Ili2Stor();
    }
    function AT46_1Viveska4StorRazbMater_grn()
    {
        //умножение
        //вывод
        return $this->AT42_Viveska4StorRazbMater_grn()*$this->AQ11_Viveska4StorRazb();
    }
    function AT47_1Viveska4StorNerazbMater_grn()
    {
        //умножение
        //вывод
        return $this->AT43_Viveska4StorNerazbMater_grn()*$this->AQ10_Viveska4StorNerazb();
    }
    function AT48_ItogoMaterYpakovochnii_grn()
    {
        //сложение и округление
        //вывод

        return round ($this->AT45_PaketVivesok1StoronaMater_grn()+$this->AT46_1Viveska4StorRazbMater_grn()+$this->AT47_1Viveska4StorNerazbMater_grn(), 0);
    }
    function AW5_VisotaYpakovki_m()
    {
        //сложение и умножение
        //вывод

        return 0.12*$this->AN18_KolichestvoVivesok*$this->AQ8_ViveskaOdinochanaa12sm()+0.24*$this->AN18_KolichestvoVivesok*$this->AQ9_ViveskaOdinochanaa24sm()+$this->AT10_GorizontalniiRazmer_m()*$this->AQ10_Viveska4StorNerazb()+0.48*$this->AQ11_Viveska4StorRazb();
    }
    function AW6_KolYpakovok_sht()
    {
        //сложение и умножение
        //вывод

        return $this->AQ13_Viv1Ili2Stor()+$this->AN9_4RoofIn*$this->AN18_KolichestvoVivesok;
    }
    function AW7_ObuemYpakovki_m3()
    {
        //умножение
        //вывод
        return $this->AT5_BolichiiRazmerDvp_m()*$this->AT6_MenchiiRazmerDvp_m()*$this->AW5_VisotaYpakovki_m();
    }
    function AW8_ObuemYpakovok_m3()
    {
        //умножение
        //вывод
        return $this->AW7_ObuemYpakovki_m3()*$this->AW6_KolYpakovok_sht();
    }
    function AW11_PlotnostDvp_kgm2()
    {

        //вывод
        return L10_L28_DVPWhiteP;
    }
    function AW12_PlochadYpakovki_m2()
    {
        //сложение и умножение
        //вывод

        return $this->AT7_FasadPlockoiPlochadi_m2()*2+($this->AT5_BolichiiRazmerDvp_m()+$this->AT6_MenchiiRazmerDvp_m())*2*$this->AW5_VisotaYpakovki_m();
    }
    function AW13_VesDvpYpak_kg()
    {
        //умножение
        //вывод
        return $this->AW11_PlotnostDvp_kgm2()*$this->AW12_PlochadYpakovki_m2();
    }
    function AZ5_DvpPerimetrNerazbViv_mp()
    {
        //сложение и умножение
        //вывод

        return $this->AT12_Perimetr4StoronViveski_mp()*4+$this->AT11_VertikaniiRazmer_m()*8;
    }
    function AZ6_DvpPerimetrNerazbViv_min()
    {
        //умножение
        //вывод
        return $this->AZ5_DvpPerimetrNerazbViv_mp()*L10_BT9_RaskroiDvpYpakovochnogo_1mp;
    }
    function AZ7_PrirezatPlankiDer_min()
    {
        //умножение
        //вывод
        return 12*L10_BT22_PrirezkaPlankiDerevenoiiYpakovka_min;
    }
    function AZ8_VkrytitSamorez_min()
    {
        //умножение
        //вывод
        return $this->AT17_SamorYpakDlaNerazbVuv_sht()*L10_BT26_VkruchSeriiSamorezov_1sht;
    }
    function AZ9_NerazbViveska4Stor_min()
    {
        //сложение
        //вывод

        return $this->AZ6_DvpPerimetrNerazbViv_min()+$this->AZ7_PrirezatPlankiDer_min()+$this->AZ8_VkrytitSamorez_min();
    }
    function AZ11_DvpPerimetrRazbViv_mp()
    {
        //сложение и умножение
        //вывод

        return $this->AT8_PerumetrPlockoiViveski_mp()*4+0.48*8;
    }
    function AZ12_DvpPerimetrVirezat_min()
    {
        //умножение
        //вывод
        return $this->AZ11_DvpPerimetrRazbViv_mp()*L10_BT9_RaskroiDvpYpakovochnogo_1mp;
    }
    function AZ13_PrirezatPlankiDer_min()
    {
        //умножение
        //вывод
        return 12*L10_BT22_PrirezkaPlankiDerevenoiiYpakovka_min;
    }
    function AZ14_VkrytitSamorezi_min()
    {
        //умножение
        //вывод
        return $this->AT22_SamorYpakDla1RazbVuv_sht()*L10_BT26_VkruchSeriiSamorezov_1sht;
    }
    function AZ15_RazbViveska4Stor_min()
    {
        //сложение
        //вывод

        return $this->AZ12_DvpPerimetrVirezat_min()+$this->AZ13_PrirezatPlankiDer_min()+$this->AZ14_VkrytitSamorezi_min();
    }
    function AZ17_DvpPerimetrPaket1Stor_mp()
    {
        //сложение и умножение
        //вывод

        return $this->AT8_PerumetrPlockoiViveski_mp()*4+$this->AT24_VisotaPaketa1StoronVuv_m()*8;
    }
    function AZ18_DvpPerimetrVirezat_min()
    {
        //умножение
        //вывод
        return $this->AZ17_DvpPerimetrPaket1Stor_mp()*L10_BT9_RaskroiDvpYpakovochnogo_1mp;
    }
    function AZ19_PrirezatPlankiDer_min()
    {
        //умножение
        //вывод
        return 12*L10_BT22_PrirezkaPlankiDerevenoiiYpakovka_min;
    }
    function AZ20_VkrytitSamorezi_min()
    {
        //умножение
        //вывод
        return $this->AT28_SamorYpakDla1PaketaVuv_sht()*L10_BT26_VkruchSeriiSamorezov_1sht;
    }
    function AZ21_Paker1StorVivesok_min()
    {
        //сложение
        //вывод
        return $this->AZ18_DvpPerimetrVirezat_min()+$this->AZ19_PrirezatPlankiDer_min()+$this->AZ20_VkrytitSamorezi_min();
    }
    function AZ24_PakerVivesok1Storona_min()
    {

        //вывод
        return $this->AZ21_Paker1StorVivesok_min();
    }
    function AZ25_Viveski4StorRazb_min()
    {
        //умножение
        //вывод
        return $this->AZ15_RazbViveska4Stor_min()*$this->AN18_KolichestvoVivesok;
    }
    function AZ26_Viveski4StorNerazb_min()
    {
        //умножение
        //вывод
        return $this->AZ9_NerazbViveska4Stor_min()*$this->AN18_KolichestvoVivesok;
    }
    function AZ28_PakerVivesok1Storona_min()
    {
        //умножение
        //вывод
        return $this->AQ13_Viv1Ili2Stor()*$this->AZ24_PakerVivesok1Storona_min();
    }
    function AZ29_Viveski4StorRazb_min()
    {
        //умножение
        //вывод
        return $this->AZ15_RazbViveska4Stor_min()*$this->AQ11_Viveska4StorRazb();
    }
    function AZ30_Viveski4StorNerazb_min()
    {
        //умножение
        //вывод
        return $this->AZ9_NerazbViveska4Stor_min()*$this->AQ10_Viveska4StorNerazb();
    }
    function AZ31_ItogoRabota_min()
    {
        //сложение
        //вывод

        return $this->AZ28_PakerVivesok1Storona_min()+$this->AZ29_Viveski4StorRazb_min()+$this->AZ30_Viveski4StorNerazb_min();
    }
    function BC6_StoimostMaterialov_grn()
    {

        //вывод
        return $this->AT48_ItogoMaterYpakovochnii_grn();
    }
    function BC10_TrydoemkNPYpakovki_min()
    {
        //округлить
        //вывод
        return round($this->AZ31_ItogoRabota_min(),0);
    }
    function BC11_StoimRabPoYpakovke_grn()
    {
        //округлить и умножить
        //вывод
        return round($this->BC10_TrydoemkNPYpakovki_min()*L10_C67_K1,0);
    }
    function BC15_BolchiiRazmer_m()
    {

        //вывод
        return $this->AT5_BolichiiRazmerDvp_m();
    }
    function BC16_MenchiiRazmer_m()
    {
        //вывод
        return $this->AT6_MenchiiRazmerDvp_m();
    }
    function BC17_Visota_m()
    {
        //вывод
        return $this->AW5_VisotaYpakovki_m();
    }
    function BC18_VesViveskaPlusYpakovka_kg()
    {
        //сложить и округлить
        //вывод
        return round($this->AN17_Ves+$this->AW13_VesDvpYpak_kg(),1);
    }
    function BC19_StoimostPosilki_grn()
    {
        //сложение и умножение
        //вывод

        return $this->AN16_Stoimost1sht*$this->AN18_KolichestvoVivesok*$this->AQ13_Viv1Ili2Stor()+$this->AN16_Stoimost1sht*$this->AN9_4RoofIn;
    }
    function BC20_KolichestvoPosilok_sht()
    {
        //вывод
        return $this->AW6_KolYpakovok_sht();
    }
    function BC30_YpakovkaDlaNPNal_grn()
    {
        //сложение
        //вывод
        return $this->BC6_StoimostMaterialov_grn()+$this->BC11_StoimRabPoYpakovke_grn();
    }

}