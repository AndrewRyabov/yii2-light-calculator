<?php ini_set("memory_limit", "32M"); ?>
<?php

/**
 * Created by PhpStorm.
 * User: Anrew
 * Date: 27.07.2017
 * Time: 10:48
 */
class L15
{
    // Входные параметры:
    public $BG5_RoofVisorOut; // крыша/козырек улица
    public $BG6_WallOut; // стена улица
    public $BG7_WallIn; // стена помещение
    public $BG8_2SideIn; // 2 стороны помещение
    public $BG9_4SideIn; // 4 стороны помещение

    public $BG11_Orientation; // ориентация
    public $BG12_MaxSide_cm; // большая сторона, см
    public $BG13_MinSide_cm; // меньшая сторона, см
    public $BG14_ColorSide; // цвет бортов
    public function __construct($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,
                                $MaxSide_cm, $MinSide_cm, $ColorSide)
    {
        // Заполнение входных данных.
        $this->BG5_RoofVisorOut = $RoofVisorOut;
        $this->BG6_WallOut = $WallOut;
        $this->BG7_WallIn = $WallIn;
        $this->BG8_2SideIn = $SideIn2;
        $this->BG9_4SideIn = $SideIn4;

        $this->BG11_Orientation = $Orientation;
        $this->BG12_MaxSide_cm = $MaxSide_cm;
        $this->BG13_MinSide_cm = $MinSide_cm;
        $this->BG14_ColorSide = $ColorSide;
    }

    // C light - пленка борт/тыл

    function BJ5_GorizontalRazmer_sm()
    {        //если bg11=1, то bg12, иначе ип13
        //вывод

        if ($this->BG11_Orientation==1)
        {
            return  $this->BG12_MaxSide_cm;
        }
        else
        {
            return $this->BG13_MinSide_cm;
        }
    }
    function BJ6_VertikalniiRazmer_sm()
    {        //если bg11=2, то bg12, иначе bg13
        //вывод

        if ($this->BG11_Orientation==2)
        {
            return  $this->BG12_MaxSide_cm;
        }
        else
        {
            return $this->BG13_MinSide_cm;
        }
    }
    function BJ7_GorizontalRazmer_m()
    { //округление
        //вывод
        return round ($this->BJ5_GorizontalRazmer_sm()/100, 2);
    }
    function BJ8_VertikalniiRazmer_m()
    { //округление
        //вывод
        return round ($this->BJ6_VertikalniiRazmer_sm()/100, 2);
    }
    function BJ10_Razbor4Storoni()
    {        //если bj7=L10_BK55, то 1, иначе 0
        //вывод

        if ($this->BJ7_GorizontalRazmer_m()>L10_BK55_PredelniiGorRazmerRamiMiniml_m)
        {
            return  1;
        }
        else
        {
            return 0;
        }
    }
    function BJ11_Razbor4Storoni()
    {        //если bj10=1, то 0, иначе 1
        //вывод

        if ($this->BJ10_Razbor4Storoni()==1)
        {
            return  0;
        }
        else
        {
            return 1;
        }
    }
    function BJ13_Storona1()
    {        //если bg5+bg6+bg7>0, то 1, иначе 0
        //вывод

        if ($this->BG5_RoofVisorOut+$this->BG6_WallOut+$this->BG7_WallIn>0)
        {
            return  1;
        }
        else
        {
            return 0;
        }
    }
    function BJ14_Storoni2()
    {
        //вывод
        return $this->BG8_2SideIn;
    }
    function BJ15_Nerazbor4()
    {//умножение
        //вывод
        return $this->BG9_4SideIn*$this->BJ11_Razbor4Storoni();
    }
    function BJ16_Razbor4()
    {//умножение
        //вывод
        return $this->BG9_4SideIn*$this->BJ10_Razbor4Storoni();
    }
    function BM5_Streich1m2_grn()
    {
        //вывод
        return L10_U77_PlenkaStrech_20mkm_1m2;
    }
    function BM6_KoefPererasxodaStreicha()
    {
        //вывод
        return L10_BB101_K_PererashStrchObshPlVives;
    }
    function BM7_Skotch1mp_grn()
    {
        //вывод
        return L10_U81_SkotchChinese_1mp;
    }
    function BM9_Perimetr_mp()
    {
        //сложение
        //вывод
        return $this->BJ7_GorizontalRazmer_m()+$this->BJ8_VertikalniiRazmer_m()+$this->BJ7_GorizontalRazmer_m()+$this->BJ8_VertikalniiRazmer_m();
    }
    function BM10_ObchaaPlochad1Storona_m2()
    {//умножение и сложение
        //вывод
        return $this->BJ7_GorizontalRazmer_m()*$this->BJ8_VertikalniiRazmer_m()*2+$this->BM9_Perimetr_mp()*$this->BG14_ColorSide;
    }
    function BM11_ObchaaPlochad2Storoni_m2()
    {//умножение и мложение
        //вывод
        return $this->BJ7_GorizontalRazmer_m()*$this->BJ8_VertikalniiRazmer_m()*2+$this->BM9_Perimetr_mp()*$this->BG14_ColorSide;
    }
    function BM12_ObchaaPlochad4StoroniNerazb_m2()
    {//умножение и мложение
        //вывод
        return $this->BJ7_GorizontalRazmer_m()*$this->BJ8_VertikalniiRazmer_m()*2+$this->BJ7_GorizontalRazmer_m()*$this->BM9_Perimetr_mp();
    }
    function BM13_ObchaaPlochad4StoroniRazb_m2()
    {//умножение и мложение
        //вывод
        return $this->BJ7_GorizontalRazmer_m()*$this->BJ8_VertikalniiRazmer_m()*2+$this->BM9_Perimetr_mp()*$this->BG14_ColorSide*4;
    }
    function BM15_Streich1Storona_grn()
    {
        //умножение
        //вывод
        return $this->BM10_ObchaaPlochad1Storona_m2()*$this->BM15_Streich1Storona_grn()*$this->BM6_KoefPererasxodaStreicha();
    }
    function BM16_Streich2Storoni_grn()
    {
        //умножение
        //вывод
        return $this->BM11_ObchaaPlochad2Storoni_m2()*$this->BM15_Streich1Storona_grn()*$this->BM6_KoefPererasxodaStreicha();
    }
    function BM17_Streich4StoroniNerazb_grn()
    {
        //умножение
        //вывод
        return $this->BM12_ObchaaPlochad4StoroniNerazb_m2()*$this->BM15_Streich1Storona_grn()*$this->BM6_KoefPererasxodaStreicha();
    }
    function BM18_Streich4StoroniRazb_grn()
    {
        //умножение
        //вывод
        return $this->BM13_ObchaaPlochad4StoroniRazb_m2()*$this->BM15_Streich1Storona_grn()*$this->BM6_KoefPererasxodaStreicha();
    }
    function BM20_Streich1Storona_grn()
    {
        //умножение
        //вывод
        return $this->BM15_Streich1Storona_grn()*$this->BJ13_Storona1();
    }
    function BM21_Streich2Storoni_grn()
    {
        //умножение
        //вывод
        return $this->BM16_Streich2Storoni_grn()*$this->BJ14_Storoni2();
    }
    function BM22_Streich4StoroniNerazb_grn()
    {
        //умножение
        //вывод
        return $this->BM17_Streich4StoroniNerazb_grn()*$this->BJ15_Nerazbor4();
    }
    function BM23_Streich4StoroniRazb_grn()
    {
        //умножение
        //вывод
        return $this->BM18_Streich4StoroniRazb_grn()*$this->BJ16_Razbor4();
    }
    function BM24_Streich_grn()
    {
        //сложение
        //вывод
        return $this->BM20_Streich1Storona_grn()+$this->BM21_Streich2Storoni_grn()+$this->BM22_Streich4StoroniNerazb_grn()+$this->BM23_Streich4StoroniRazb_grn();
    }
    function BM25_Streich_mp()
    {
        //умножение и сложение
        //вывод
        return $this->BM24_Streich_grn()/$this->BM5_Streich1m2_grn()*2;
    }
    function BM26_Scotch_mp()
    {
        //умножение
        //вывод
        return $this->BM25_Streich_mp()*L10_BB100_K_RashSkotchStreych;
    }
    function BM27_Scotch_grn()
    {
        //умножение
        //вывод
        return $this->BM26_Scotch_mp()*$this->BM7_Skotch1mp_grn();
    }
    function BP5_TrydoemkostYpakovki1m2_m()
    {
        //вывод
        return L10_BT66_UpakVStrech_1m2;
    }
    function BP7_Storona1_min()
    {
        //умножение
        //вывод
        return $this->BM10_ObchaaPlochad1Storona_m2()*$this->BP5_TrydoemkostYpakovki1m2_m();
    }
    function BP8_Storoni2_min()
    {
        //умножение
        //вывод
        return $this->BM11_ObchaaPlochad2Storoni_m2()*$this->BP5_TrydoemkostYpakovki1m2_m();
    }
    function BP9_Storoni4Nerazb_min()
    {
        //умножение
        //вывод
        return $this->BM12_ObchaaPlochad4StoroniNerazb_m2()*$this->BP5_TrydoemkostYpakovki1m2_m();
    }
    function BP10_Storoni4Razb_min()
    {
        //умножение
        //вывод
        return $this->BM12_ObchaaPlochad4StoroniNerazb_m2()*$this->BP5_TrydoemkostYpakovki1m2_m();
    }
    function BP12_Storona1_min()
    {
        //умножение
        //вывод
        return $this->BP7_Storona1_min()/$this->BJ13_Storona1();
    }
    function BP13_Storoni2_min()
    {
        //умножение
        //вывод
        return $this->BP8_Storoni2_min()*$this->BJ16_Razbor4();
    }
    function BP14_Storoni4Nerazb_min()
    {
        //умножение
        //вывод
        return $this->BP9_Storoni4Nerazb_min()*$this->BJ15_Nerazbor4();
    }
    function BP15_Storoni4Razb_min()
    {
        //умножение
        //вывод
        return $this->BP10_Storoni4Razb_min()*$this->BJ16_Razbor4();
    }
    function BP16_Ypakovka_min()
    {
        //сложение
        //вывод
        return $this->BP12_Storona1_min()+$this->BP13_Storoni2_min()+$this->BP14_Storoni4Nerazb_min()+$this->BP15_Storoni4Razb_min();
    }
    function BP17_YpakovkaItogo_grn()
    {        //если bp16<L10_bt65, то L10_bt65, иначе bp16
        //вывод

        if ($this->BP16_Ypakovka_min()<L10_BT65_MinimalTrydYpakovkiVStreich_min)
        {
            return  L10_BT65_MinimalTrydYpakovkiVStreich_min;
        }
        else
        {
            return $this->BP16_Ypakovka_min();
        }
    }
    function BS6_PlenkaStreich500mmItogo_mp()
    {
        //округление
        //вывод
        return round($this->BM25_Streich_mp(), 0);
    }
    function BS7_StoimostMaterialov_grn()
    {
        //округление и сложение
        //вывод
        return round($this->BM24_Streich_grn()+$this->BM27_Scotch_grn(), 0);
    }
    function BS11_TrydoemkostYpakovki_min()
    {
        //округление
        //вывод
        return round($this->BP17_YpakovkaItogo_grn(), 0);
    }
    function BS12_StoimostRaboti_grn()
    {
        //округление и умножение
        //вывод
        return round($this->BS11_TrydoemkostYpakovki_min()*L10_C67_K1, 0);
    }
    function BS24_Itogo_grn()
    {
        //округление и сложение
        //вывод
        return $this->BS7_StoimostMaterialov_grn()+$this->BS12_StoimostRaboti_grn();
    }

}