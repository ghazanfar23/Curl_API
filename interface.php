
<?php
session_start();
$test = "hello";
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

  $curl_response = curl_exec($curl);
  $_SESSION['response'] = $curl_response;
//   global $response;
//   $response = $_SESSION['response'];
//   echo $response;

  curl_close($curl);
?>

<script>
// $(document).ready(function(){
//     $("#3").click(function($response){
//             alert("Data: "+ $response);
//     });
// });
var values = "<?php echo $state; ?>";
function buttonClick(clicked_id) {
  if (clicked_id == "1") {
    $.get("interface.php", {
      pin: "D13",
      state: "255",
      method: "update"
    });
    $("#val").text(values);

  }

  if (clicked_id == "2") {
    $.get("interface.php", {
      pin: "D13",
      state: "0",
      method: "update"
    });
    // $("#val").text({$test});

  }

  if (clicked_id == "3") {
    $.get("interface.php", {
      pin: "D13",
      //   state: "1",
      method: "get"
    });

  }
}

// });


</script>
</html>

<!DOCTYPE html>
<html>

<head>
    <LINK href="style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="jquery-2.0.3.min.js"></script>

    
    
    <title>Page Title</title>
</head>

<body>
    <div class="mainContainer">

        <div class="buttonBlock"><span class="buttonTitle">LED 1</span>
            <button class="button" type="button" id="1" onClick="buttonClick(this.id,)">On</button>
            <button class="button" type="button" id="2" onClick="buttonClick(this.id)">Off</button>

        </div>

        <div class="buttonBlock"><span class="buttonTitle">LED 2</span>

            <button class="button" type="button" id="3" onClick="buttonClick(this.id)">Get 13</button>
            <!-- <button class="ledButton" type="button" id="4" onClick="buttonClick(this.id)">Off</button> -->

        </div>
        <span id="val"><?php echo $response; ?></span>

    </div>

</body>
</html>





<!-- <script>
    var test = "<?php echo $test; ?>";


    $("#3").click(function(){

$("#val").text(test);

    });
</script> -->
