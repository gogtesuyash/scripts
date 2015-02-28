<?php
$username = "username";
$password = "password";
$url = "http://site5.way2sms.com/Login1.action?";
$query_string = "username=$username&password=$password&button=Login";
$url_login = $url.$query_string;

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url_login);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_HEADER , 1);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
ob_start();
$response = curl_exec ($ch);
ob_end_clean();
echo curl_error($ch);
curl_close ($ch);
unset($ch);

echo "sending message"; 
$url_sendsms = "http://site2.way2sms.com/quicksms.action?";

$parameters = "HiddenAction=instantsms&catnamedis=Birthday&Action=fs454sdf45454&chkall=on&MobNo=xxxxxxxxx";
echo $username;
echo $password;
$parameters = $parameters . "&textArea=hey%demo sms%20to%20use way2sms as birthday wisher tool&buildguid=username&buildgpwd=*******&buildyuid=username&buildypwd=*******&guid1=username&gpwd1=*******";

$parameters = $parameters . "&yuid1=username&ypwd1=*******";

$url_sendsms = $url_sendsms . $parameters;
$referer = "http://site2.way2sms.com/jsp/InstantSMS.jsp";

$header_array[0] = "POST /quicksms.action HTTP/1.1";
$header_array[1] = "Host:site2.way2sms.com";
$header_array[2] = "User-Agent:Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.10) Gecko/20101005 Fedora/3.6.10-1.fc14 Firefox/3.6.10";
$header_array[3] = "Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
$header_array[4] = "Accept-Language:en-us,en;q=0.5";
$header_array[5] = "Accept-Encoding:gzip,deflate";
$header_array[6] = "Accept-Charset:ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$header_array[7] = "Keep-Alive:115";
$header_array[8] = "Connection:keep-alive";
$header_array[9] = "Content-Type:application/x-www-form-urlencoded";
$header_array[10] = "Cookie:__gads=ID=f8e6143aa7a1647e:T=1324875890:S=ALNI_MZeD1OcHr8CdhBkqmXTBo0mC-bTuQ; JSESSIONID=GG~FFE27C24D851AB03035982BE6EAD867D.w807";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url_sendsms);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_HEADER , 1);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch,CURLOPT_REFERER,$referer);
ob_start();
$response = curl_exec ($ch);
ob_end_clean();
echo curl_error($ch);
curl_close ($ch);
unset($ch);
echo "message sent";
#echo($response);
?>

