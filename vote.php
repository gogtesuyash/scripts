<?php

$url = "http://www.videochaska.com/indian-idol/save_voter_reg_data.php?";

$parameters="email=user@mail.com&participant_code=KAU&mobile=xxxxxxxxxx";
$url=$url . $parameters;
#echo $url;
$referer = "http://www.videochaska.com/indian-idol/voting.php";

$header_array[0] = "POST /indian-idol/save_voter_reg_data.php HTTP/1.1";
$header_array[1] = "Host:www.videochaska.com";
$header_array[2] = "User-Agent:Mozilla/5.0 (X11; Linux i686; rv:13.0) Gecko/20100101 Firefox/13.0.1";
$header_array[3] = "Accept:*/*";
$header_array[4] = "Accept-Language:en-us,en;q=0.5";
$header_array[5] = "Accept-Encoding:gzip,deflate";
$header_array[6] = "Accept-Charset:ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$header_array[7] = "X-Requested-With:XMLHttpRequest";
$header_array[8] = "Connection:keep-alive";
$header_array[9] = "Cookie:__utma=48708641.882855174.1341674423.1342197233.1342200334.4; __utmz=48708641.1341674423.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __atuvc=1%7C27; __utmc=48708641; BC_BANDWIDTH=1342197234866,1453; AkamaiAnalytics_BrowserSessionId=0113983E69B6FDBA0A3FFA5E75EB0C9C2E73E008; AkamaiAnalyticsDO_visitStartTime=1342197257685; AkamaiAnalytics_VisitCookie=3; clientLastHTimes=1342201284860,1342201293248,1342202133439,1342203361738,1342203784758; clientLastPTimes=1342201284861,1342201293249,1342202133439,1342203361739,1342203784759; AkamaiAnalyticsDO_bitRateBucketsCsv=0,0,0,0,0,0,0,0; AkamaiAnalyticsDO_visitMetricsCsv=8|8|0|0|0|26470630|0|0|0|0|0|0|5|5|31045|0; AkamaiAnalytics_VisitLastCloseTime=1342203784760; AkamaiAnalytics_VisitIsPlaying=-9; PHPSESSID=le9ld7ptvu4l4jq8pbf1tvne30; __utmb=48708641.11.10.1342200334";
$header_array[10] = "Content-Type:application/x-www-form-urlencoded; charset=UTF-8";
$header_array[11] = "Pragma:no-cache";
$header_array[12] = "Cache-Control:no-cache";
$header_array[13] = "Content-Length:66";


$cookie_file_path = "./cookie.txt"; // Please set your Cookie File path
$fp = fopen($cookie_file_path,'wb');
fclose($fp);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$parameters);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
#curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
#curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
curl_setopt($ch, CURLOPT_HEADER , 1);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch,CURLOPT_REFERER,$referer);
ob_start();
$response = curl_exec ($ch);
ob_end_clean();
echo curl_error($ch);
curl_close ($ch);
unset($ch);
#echo "voting done";
#echo $response;
#echo "splitting number";
list($token,$number)=split('present-',$response);
#echo $number;
#echo "done with split";

$url = "http://www.videochaska.com/indian-idol/voting.php?accode=" . $number;
#echo $url;
$referer = "http://www.videochaska.com/indian-idol/voting.php";
$header_array[0] = "GET /indian-idol/voting.php?accode=" . $number . " HTTP/1.1";
$header_array[1] = "Host:www.videochaska.com";
$header_array[2] = "User-Agent:Mozilla/5.0 (X11; Linux i686; rv:13.0) Gecko/20100101 Firefox/13.0.1";
$header_array[3] = "Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
$header_array[4] = "Accept-Language:en-us,en;q=0.5";
$header_array[5] = "Accept-Encoding:gzip,deflate";
#$header_array[6] = "Accept-Charset:ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$header_array[6] = "Connection:keep-alive";
$header_array[7] = "Cookie:__utma=48708641.882855174.1341674423.1342197233.1342200334.4; __utmz=48708641.1341674423.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __atuvc=1%7C27; __utmc=48708641; BC_BANDWIDTH=1342197234866,1453; AkamaiAnalytics_BrowserSessionId=0113983E69B6FDBA0A3FFA5E75EB0C9C2E73E008; AkamaiAnalyticsDO_visitStartTime=1342197257685; AkamaiAnalytics_VisitCookie=3; clientLastHTimes=1342201284860,1342201293248,1342202133439,1342203361738,1342203784758; clientLastPTimes=1342201284861,1342201293249,1342202133439,1342203361739,1342203784759; AkamaiAnalyticsDO_bitRateBucketsCsv=0,0,0,0,0,0,0,0; AkamaiAnalyticsDO_visitMetricsCsv=8|8|0|0|0|26470630|0|0|0|0|0|0|5|5|31045|0; AkamaiAnalytics_VisitLastCloseTime=1342203784760; AkamaiAnalytics_VisitIsPlaying=-9; PHPSESSID=le9ld7ptvu4l4jq8pbf1tvne30; __utmb=48708641.11.10.1342200334";
$header_array[8] = "Content-Type:application/x-www-form-urlencoded; charset=UTF-8";

$ch = curl_init();
#echo "init done";
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
#curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
curl_setopt($ch, CURLOPT_HEADER , 1);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch,CURLOPT_REFERER,$referer);
#echo "starting";
ob_start();
#echo "executing 2nd req";
$response = curl_exec ($ch);
ob_end_clean();
echo curl_error($ch);
curl_close ($ch);
unset($ch);

#echo $response;


?>

