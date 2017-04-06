<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Title</title>
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Transparent Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
        <!--web-fonts-->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css' />
        <!--web-fonts-->
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
         <!-- google map with api key -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBarFYqoDO-vVXkB-EdhN_k1ciQJi0OS04&sensor=false&libraries=places"></script>
        <!--Script to get map address-->
        <script>
            var autocomplete;
            function initialize() {
                autocomplete = new google.maps.places.Autocomplete(
                        /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
                        {types: ['geocode']});
                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                });
            }
        </script>
    </head>

<body onload="initialize()">
<!--header-->
	<div class="header-w3l">
		<h1> Enter Address</h1>
	</div>
<!--//header-->

<!--main-->
<div class="main-content-agile">
	<div class="sub-main-w3">	
            
		<form action="index.php/welcome/view" method="post">
                    <div id="locationField">
		
                 <input id="autocomplete" required class="user" placeholder="Enter your address" style="width:300px;" name="address" onFocus="geolocate()" type="text"></input>
		  
                </div>

			<input type="submit" name="submit" value="">
		</form>
	</div>
</div>
<!--//main-->

<!--footer-->
<div class="footer">
	<p>&copy; 2017 Transparent Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->

</body>
</html>