<?
<<<<<<< HEAD
=======
ini_set('display_errors', 0);
>>>>>>> 000cde20380f922cdb2564f52823038b295bb1ca

date_default_timezone_set('Asia/Baghdad');//Europe/Moscow
setlocale(LC_ALL, 'ru_RU.utf8');

$domain=$_SERVER['SERVER_NAME'];//domain.ltd
$folder="/";//начало и конец - "/"!
$baseHref="https://".$domain.$folder;
$baseHrefLand="http://".$domain;
$servicename="BarterCoin";

$bypage=25;

$mysql_conf['host']   = "localhost";
$mysql_conf['port']   = 3306;
$mysql_conf['user']   = "barter";
<<<<<<< HEAD
$mysql_conf['pass']   = "oCcNzedTLChLjIxa_EM";
=======
$mysql_conf['pass']   = "gq7hjSdKEI6SxsMO";
>>>>>>> 000cde20380f922cdb2564f52823038b295bb1ca
$mysql_conf['dbname'] = "barter";

if(preg_match('/local/',$_SERVER['HTTP_HOST']))
{
	define ('SMS', 0);
//	define ('HOST', 'local.tasks');
}
else
{
	define ('SMS', 1);
//	define ('HOST', $_SERVER['HTTP_HOST']);
}

$qiwi_token="5d842fb54c206521a1274978551df55f";

$comission=1.0;//1.05;//5%
$mincomission=0;//10;//20BCR

#$comission_act=1.05;//5%

$comission_act=1.00;//0%
#$mincomission_act=10;//20BCR

$mincomission_act=0;//0BCR

<<<<<<< HEAD
=======
// сюда нужно вписать токен вашего телеграм бота
define('TELEGRAM_TOKEN', '715907299:AAHVVqSIXasPolGW9x7cV4Re4yyz7NIWAgM');
define('PROXY_USR', 'telega');
define('PROXY_PASS', 'PywYbkvdcLsKstSdiLdB');
define('PROXY_IP', '192.168.37.36');//'192.168.37.23'

>>>>>>> 000cde20380f922cdb2564f52823038b295bb1ca

?>
