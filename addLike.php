<?php
$url = "http://www.videochaska.com/indian-idol/likedislike.php?";

$parameters="participant_code=vip&type=like";
$url=$url . $parameters;
#echo $url;
$referer = "http://www.videochaska.com/indian-idol/contestants-details.php?participant=vipul-mehta";

$header_array[0] = "POST /indian-idol/likedislike.php HTTP/1.1";
$header_array[1] = "Host:www.videochaska.com";
$header_array[2] = "User-Agent:Mozilla/5.0 (X11; Linux i686; rv:13.0) Gecko/20100101 Firefox/13.0.1";
$header_array[3] = "Accept:*/*";
$header_array[4] = "Accept-Language:en-us,en;q=0.5";
$header_array[5] = "Accept-Encoding:gzip,deflate";
$header_array[6] = "Accept-Charset:ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$header_array[7] = "X-Requested-With:XMLHttpRequest";
$header_array[8] = "Connection:keep-alive";
$header_array[9] = "Cookie:BC_BANDWIDTH=342537747523,1921";
$header_array[10] = "Content-Type:application/x-www-form-urlencoded; charset=UTF-8";
$header_array[11] = "Pragma:no-cache";
$header_array[12] = "Cache-Control:no-cache";
$header_array[13] = "Content-Length:30";


#$cookie_file_path = "./cookie.txt"; // Please set your Cookie File path
#$fp = fopen($cookie_file_path,'wb');
#fclose($fp);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$parameters);
#curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
#curl_setopt($ch, CURLOPT_COOKIESESSION, true);
#curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
#curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
curl_setopt($ch, CURLOPT_HEADER , 1);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch,CURLOPT_REFERER,$referer);
curl_setopt($ch,CURLOPT_TIMEOUT,60);
ob_start();
$response = curl_exec ($ch);
ob_end_clean();
echo curl_error($ch);
curl_close ($ch);
unset($ch);
#echo "voting done";
#echo $response;
list($token,$number)=split('PHPSESSID=',$response);
echo "printing number";
echo $number;
list($token,$number)=split(';',$number);
#echo $token;

$url = "http://www.videochaska.com/indian-idol/update_likedislike_box.php?";

$parameters="participant_code=vip&ifGraph=graph";
$url=$url . $parameters;
#echo $url;
$referer = "http://www.videochaska.com/indian-idol/contestants-details.php?participant=vipul-mehta";

$header_array[0] = "POST /indian-idol/update_likedislike_box.php HTTP/1.1";
$header_array[1] = "Host:www.videochaska.com";
$header_array[2] = "User-Agent:Mozilla/5.0 (X11; Linux i686; rv:13.0) Gecko/20100101 Firefox/13.0.1";
$header_array[3] = "Accept:*/*";
$header_array[4] = "Accept-Language:en-us,en;q=0.5";
$header_array[5] = "Accept-Encoding:gzip,deflate";
$header_array[6] = "Accept-Charset:ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$header_array[7] = "X-Requested-With:XMLHttpRequest";
$header_array[8] = "Connection:keep-alive";
$header_array[9] = "Cookie:BC_BANDWIDTH=342537747523,1921;PHPSESSID=".$token;
$header_array[10] = "Content-Type:application/x-www-form-urlencoded; charset=UTF-8";
$header_array[11] = "Pragma:no-cache";
$header_array[12] = "Cache-Control:no-cache";
$header_array[13] = "Content-Length:34";


#$cookie_file_path = "./cookie.txt"; // Please set your Cookie File path
#$fp = fopen($cookie_file_path,'wb');
#fclose($fp);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$parameters);

curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
#curl_setopt($ch, CURLOPT_COOKIESESSION, true);
#curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
#curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
curl_setopt($ch, CURLOPT_HEADER , 1);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch,CURLOPT_REFERER,$referer);
curl_setopt($ch,CURLOPT_TIMEOUT,30);
ob_start();

$response = curl_exec ($ch);
ob_end_clean();
echo curl_error($ch);
curl_close ($ch);
unset($ch);
#echo "voting done";
echo $response;


?>

