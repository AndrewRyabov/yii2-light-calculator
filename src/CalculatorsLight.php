<?phpnamespace almaz44\light\calculator;//include_once "L09.php";//include_once "L10.php";//include_once "L15.php";//include_once "L16.php";//include_once "L17.php";//include_once "L18.php";//include_once "L25.php";class CalculatorsLight{    private $_price;    public function __construct()    {        if (!class_exists('almaz44\light\calculator\L09')) die('ERROR class L09 не доступен');        if (!class_exists('almaz44\light\calculator\L10')) die('ERROR class L10 не доступен');//        if (!class_exists('L15')) die('ERROR class L15 не доступен');//        if (!class_exists('L16')) die('ERROR class L16 не доступен');//        if (!class_exists('L17')) die('ERROR class L17 не доступен');//        if (!class_exists('L18')) die('ERROR class L18 не доступен');//        if (!class_exists('L25')) die('ERROR class L25 не доступен');    }    public function LightPrice()    {        return 10;    }    public function LightPower()    {        return 2;    }    public function LightMassa()    {        return 3;    }}