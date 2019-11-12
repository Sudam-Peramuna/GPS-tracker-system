<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Your Location </title>
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
   	  <!-- <style type = "text/css">
         
	    body{
	    	margin: 0;
	    	padding: 0;
	 	    background-size: cover;
	 	    background-position: center;
	   	  	
		}
		.menu{
				float: left; 
				background:#fff;
				width: 20%;
				height: 95%; 
				overflow: hidden;
			}

		.main{
				float: right;
				background-color: white;
				width:80%;
				height: 95%; 
				overflow: hidden; 


		}
		.tab {
		  float: left;
		  border: 1px solid #ccc;
		  background-color: #f1f1f1;
		  width: 100%;
		  height: 100%;

		}
		.tab button {
		  display: block;
		  background-color: inherit;
		  color: black;
		  padding: 22px 16px;
		  width: 100%;
		  border: none;
		  outline: none;
		  text-align: left;
		  cursor: pointer;
		  transition: 0.3s;
		  font-size: 17px;
		}
		.tab button:hover {
		  background-color: #27AE60;
		}
		.tab button.active {
		  background-color: #ccc;
		}


			
			ul {
		  		list-style-type: none;
		  		margin: 0;
		  		padding: 0;
		  		overflow: hidden;
		  		background-color: #333;
		  		background-attachment: fixed;
		}

			li {
		  		float: left;
		}

			li a {
		  		display: block;
		  		color: white;
		  		text-align: center;
		  		padding: 14px 16px;
		  		text-decoration: none;
		}
		  		.map-container{
				overflow:hidden;
				position:relative;
				height:0;
		}
				.map-container iframe{
				background-attachment:fixed;
				width:75%;
				height: 95%;  
				float: right;
				border-radius: 5px;
				border:2px;
		}

			li a:hover {
		  		background-color: #27AE60;
		}

   
    </style>
 -->
    </head>
   
  	<body>
	   	<nav class="navbar navbar-expand-sm bg-dark">
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="#">Sign Out</a>
		    </li>
		   
		  </ul>
		</nav>

	   	<div class="container-fluid">
	   		<div class="row">
	   			<div class="col-sm-3 border-right mt-2">
					<form class="border shadow-sm p-3 mb-5 bg-white" style="height:750px ">
						<h1 class="text-center">Your Location</h1>
					  <div class="form-group">
					    <label for="email">Latitude:</label>
					    <input type="text" class="form-control" id="email">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Longitude:</label>
					    <input type="text" class="form-control" id="pwd">
					  </div>
					  <div class="text-center mt-4">
					  	<button type="submit" class="btn btn-primary" onclick="getValues()">Search Location</button>
					  </div>  
					</form>
					<p id="demo"></p>
				</div>

				<div class="col-sm-9 mt-2">
	   				<div id="googleMap" class="main" style="width:100%;height:100%;"></div>

					<script>
						var lat = 6.9271;
						var lng = 79.8612;

					function getValues() {
						var lat = document.getElementById("email").value;
						var lng = document.getElementById("pwd").value;
						document.getElementById("demo").innerHTML = lat;
						var uluru = {lat: lat, lng: lng };
						var mapProp= {
					  		center:new google.maps.LatLng(lat,lng),
					  		zoom:15,
						};
						var map = new google.maps.Map(
      					document.getElementById('googleMap'), mapProp);
  						// The marker, positioned at Uluru
  						var marker = new google.maps.Marker({position: mapProp.center, map: map});
					}
					function myMap() {
						
					/*var mapProp= {
					  center:new google.maps.LatLng(51.508742,-0.120850),
					  zoom:5,
					};
					var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);*/
					 	var uluru = {lat: lat, lng: lng };
  // The map, centered at Uluru
  						var map = new google.maps.Map(
      					document.getElementById('googleMap'), {zoom: 10, center: uluru});
  // The marker, positioned at Uluru
  						var marker = new google.maps.Marker({position: uluru, map: map});
					}
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH6vbch17Q5H8mLWSQWAalNjR-HWhnrN0&callback=myMap"></script>
			   	</div>
	   		</div> 			
	   	</div>
	</body>
   
</html>