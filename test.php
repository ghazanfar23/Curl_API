<?php
 $method = $_GET['method'];
 $pin = $_GET['pin'];
 $state = $_GET['state'];
function curl ($method, $pin, $state, $curl_response){




    $token = "b6861aae0cd7440e9aa95006a0fd751a";
  //   // http://blynk-cloud.com/4ae3851817194e2596cf1b7103603ef8/update/D8?value=1
    // Create cURL call
    // $service_url = 'http://blynk-cloud.com/' . $token. '/update/D13?value=255';
        // $service_url = 'http://blynk-cloud.com/' . $token . '/get/D13';


    if ($method === "update")
    {
      // session_destroy();
    $service_url = 'http://blynk-cloud.com/' . $token. '/' . $method . '/' . $pin . '?value=' . $state;
    // $service_url = 'http://blynk-cloud.com/' . $token. '/update/D13?value=0';
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
      global $curl_response;

    $curl_response = curl_exec($curl);
    // echo $curl_response;
    return $curl_response;

    curl_close($curl);




}

// curl();