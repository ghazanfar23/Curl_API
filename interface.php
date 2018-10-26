<!-- <?php
session_start();
$response = $_SESSION['response'];
?> -->

</html>

<!DOCTYPE html>
<html>

<head>

    <LINK href="style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="jquery-2.0.3.min.js">
    </script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">


    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js">
    </script>

    <script type="text/javascript" src="script.js">
    </script>



    <title>Calendar API</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <label for="selectPin">Select Category </label>

            <select name="" id="selectPin">
                <option value="D13">D13</option>

                <option value="V2">V2</option>
                <option></option>
            </select>
        </div>
        <div class="row">
            <label class="col-sm-12">Total Results: <span id="val"></span></label>
            <label class="col-sm-12">Pin Live Value: <span id="D13val"></span></label>
            <br><button class="button" type="button" id="start" onClick="send(this.id)">start</button>
            <!-- <br><button class="button" type="button" id="stop" onClick="buttonClick(this.id)">Submit</button> -->

            <label for="sensor_1_val" class="col-sm-6">Sensor 1 value: <span id="sensor_1_val" value="V2"></span></label>
            <label for="sensor_2_val" class="col-sm-6">Sensor 2 value: <span id="sensor_2_val" value="V4"></span></label>
            <label for="alert" class="col-sm-12">Alert: <span id="alert"></span></label>
        </div>





        <!-- <label>Total Results: <span id="dateval"></span></label> -->


        <br><button class="button" type="button" id="category" onClick="buttonClick(this.id)">Submit</button>

    </div>

</body>
<script>

</script>

</html>