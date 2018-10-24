<?php
  $token = "b6861aae0cd7440e9aa95006a0fd751a";
  $method = $_GET['method'];
  $pin = $_GET['pin'];
  $state = $_GET['state'];
//   // http://blynk-cloud.com/4ae3851817194e2596cf1b7103603ef8/update/D8?value=1
  // Create cURL call
  if ($method === "update")
  {
    // session_destroy();
  $service_url = 'http://blynk-cloud.com/' . $token. '/' . $method . '/' . $pin . '?value=' . $state;
  // $service_url = 'http://blynk-cloud.com/' . $token. '/update/D13?value=255';
  }

else{
  // session_destroy();
  $service_url = 'http://blynk-cloud.com/' . $token . '/' . $method . '/' . $pin;
  // $service_url = 'http://blynk-cloud.com/' . $token . '/get/D13';

}
  $curl = curl_init($service_url);
   
  // Send cURL to Yun board
  curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4); 
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
  // global $curl_response;

  $curl_response = curl_exec($curl);

  curl_close($curl);

  //Print answer
  // echo $curl_response;
  session_start();
  $_SESSION['response'] = $curl_response;
  // return $curl_response
  // function ($curl_response){
  // return $curl_response;
  // }
 

// // Get cURL resource
// $curl = curl_init();
// // Set some options - we are passing in a useragent too here
// curl_setopt_array($curl, array(
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_URL => "http://blynk-cloud.com/' . $token . '/' . $method . '/' . $pin",
//     CURLOPT_USERAGENT => 'Codular Sample cURL Request'
// ));
// // Send the request & save response to $resp
// $resp = curl_exec($curl);
// echo $resp;
// // Close request to clear up some resources
// curl_close($curl);


// Get cURL resource
// $curl = curl_init();
// $url = "http://blynk-cloud.com";
// // Set some options - we are passing in a useragent too here
// curl_setopt_array($curl, array(
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_URL => "$url/$token/$method/$pin?value=$state",
//     CURLOPT_USERAGENT => 'Codular Sample cURL Request',
//     CURLOPT_POST => 1,
//     // CURLOPT_POSTFIELDS => array(
//     //            value => $pin

//     // )
// ));
// // Send the request & save response to $resp
// $resp = curl_exec($curl);
// // Close request to clear up some resources
// curl_close($curl);


// session_start();
// $_SESSION['response'] = $rsp;



?>
