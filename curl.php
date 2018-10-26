<?php
// header('Content-Type: text/plain');
$API = "b6861aae0cd7440e9aa95006a0fd751a";
// include 'config/keys.php';
$pin  = $_GET['pin'];
$type = $_GET['method'];
$url  = "http://blynk-cloud.com";
// $url = 'https://uhouston-csm.symplicity.com/api/public/v1/calendar-events?category=workshop&dateRange=["2015-05-22","2019-09-30"]';

// $curlUrl = "$url/$API/$type/$pin";
$curl = curl_init();

curl_setopt_array($curl, array(
    // $service_url = $url . '?category=' . $category . '&dateRange=' . $dateRange;

    CURLOPT_URL            => "$url/$API/$type/$pin",
    // CURLOPT_URL            => 'http://blynk-cloud.com/b6861aae0cd7440e9aa95006a0fd751a/get/D13',

    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING       => "",
    CURLOPT_MAXREDIRS      => 10,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST  => "GET",
    CURLOPT_HTTPHEADER     => array('Accept: application/json'),
    CURLOPT_HTTPHEADER     => array('Content-Type: application/json'),
    // CURLOPT_HTTPHEADER => array(
    //   "Authorization: Token dMOTV8odgjukfLRsfzEWpwchLxmuYze6joJYWtOTL6q6d3CoPHi0CISkswPM92i74iaOP8fN12khUa7jCKObv07jfCmE5OdUTywAeuGWIcBoxFGTKiJgGuUTUTjvCHqnIOE0kSwzw8s=",
    //   "Cache-Control: no-cache",
    //   "Postman-Token: 2fa1484b-e109-4f87-881a-acda09aa0b01"
    // ),
));

$response = curl_exec($curl);
// $json     = json_decode($response, true);

$err = curl_error($curl);

curl_close($curl);
function removeslashes($string)
{
    $string = implode("", "", explode("[", "]", $string));
    return stripslashes(trim($string));
}
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    // session_start();
    // $_SESSION['response'] = $curl_response;
    // $response   = stripslashes($response);
    // $json_array = json_decode($response, true);
    // print_r($json_array);
    // $result = stripslashes_deep($response);
    // print_r($result);
    $stringWithoutNonLetterCharacters   = preg_replace("/[\/\[\\]\&%#\$]/", "", $response);
    $stringWithQuotesReplacedWithSpaces = preg_replace("/[\"\']/", "", $stringWithoutNonLetterCharacters);
    // echo removeslashes($response);
    print_r($stringWithQuotesReplacedWithSpaces);
}
