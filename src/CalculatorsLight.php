<?phpnamespace almaz44\light\calculator;//include_once "L09.php";//include_once "L10.php";//include_once "L15.php";//include_once "L16.php";//include_once "L17.php";//include_once "L18.php";//include_once "L25.php";class CalculatorsLight{    public $L25;    public function __construct()    {        $L25 = new L25(0, 0, 0, 1, 0, 1, 300, 60, 0, 0, 1, 1, 3, 0, 1, диоды);    }    public function LightPrice()    {        return $this->L25->O30_StoimIzgot1shtgrn();    }    public function LightPower()    {        return $this->L25->O31_Energopotrebleniyevt();    }    public function LightMassa()    {        return $this->L25->O32_Veskg();    }}