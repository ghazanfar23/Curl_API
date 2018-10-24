<?php
include 'test.php';
// $pin = "D13";
// $method = "get";
// $state = "1";

// echo '$curl_response';
// function buttonClick(){
//     $method = "get";
//     $pin = "D13";
//     $state = "255";
//     curl($method, $pin, $state, $curl_response);
//     echo $curl_response;
//     alert('hi');
// }
?>

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
            <button class="button" type="button" id="1" onClick="buttonClick(this.id)">On</button>
            <button class="button" type="button" id="2" onClick="buttonClick(this.id)">Off</button>

        </div>

        <div class="buttonBlock"><span class="buttonTitle">LED 2</span>

            <button class="button" type="button" id="3" onClick="buttonClick();">Get 13</button>
            <!-- <button class="ledButton" type="button" id="4" onClick="buttonClick(this.id)">Off</button> -->

        </div>
        <span id="val"></span>

    </div>

</body>

</html>


<script>
function buttonClick(clicked_id) {
    if (clicked_id == "1") {
        <?php $method = "update";
    $pin = "D13";
    $state = "0";
    curl($method, $pin, $state, $curl_response);
    alert('hi');
    ?>
    }
    </script>
    <?
    echo $curl_response;
