<?php
$FILEPATH="gpsdata.dat";


$data=file_get_contents($FILEPATH);
$data=json_decode($data,true);

$keys=array_keys($data);


for($i=0; $i<sizeOf($data); $i++)
{
	print_r($data);
	if(
		substr(((string)$keys[$i]),0,4)=="1234")
		{
			$LAT=($data[$keys[$i]]["LAT"]);
			$LONG=($data[$keys[$i]]["LONG"]);

echo '<script>
var arr = [];

            var counter = <?php sizeOf($data) ?>;
		alert(counter);
            var x, y;
            x = <?php echo $LAT ?>;
            y = <?php echo $LONG ?>;

             	var image = "http://www.geocodezip.com/mapIcons/small_red_dot.png";
                var beachMarker = new google.maps.Marker({
                    position: {lat: x, lng: y},
                    map: map,
                    icon: image
               });
		 
                arr.push(beachMarker);
</script>';
			



}}

?>

<!DOCTYPE html>
<!--
    Copyright (c) 2012-2016 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>

<head>

    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <!-- Good default declaration:
    * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
    * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
    * Disables use of eval() and inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
        * Enable inline JS: add 'unsafe-inline' to default-src
        * Enable eval(): add 'unsafe-eval' to default-src
    * Create your own at http://cspisawesome.com
    -->
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: 'unsafe-inline' https://ssl.gstatic.com; style-src 'self' 'unsafe-inline'; media-src *" /> -->

     <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="www.fonts.googleapis.com/css?family=Josefin+Sans" />

<title>Echo</title>
</head>

<body >
    <h1 id="apptitle"> ECHO </h1>
    <div style="width:500px; height:500px; margin:0 auto;">
        <div id="map" style="width: 100%; height: 100%; margin-top:10%;"></div>
    </div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlKoJ1P24ktqzHGocOLvzNqSeg6eT6E7g&callback=initMap"
    async defer></script>


    <script type="text/javascript" src="cordova.js"></script>
     <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

    <script type="text/javascript">
        app.initialize();
        </script>

</body>

</html>