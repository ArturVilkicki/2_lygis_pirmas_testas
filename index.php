<!DOCTYPE html>
<html>
<head>
	<title>Pirmas testas</title>
	<link rel="stylesheet type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>
	<!-- 1 uzduotis, 2uzduotis -->
	<p class="borderis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<!-- 3 uzduotis -->
	<div align="center">
		<a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a><br />
	</div>
	
	<!-- 4 uzduotis -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-6 col-sm col">
				<div>
					<img src="images/img_fjords.jpg" class="paveikslelis">
				</div>
				<div>
					<img src="images/image-editing-101040_960_720.jpg" class="paveikslelis">
				</div>
				<div>
					<img src="images/23466317216_b99485ba14_o-panorama.jpg" class="paveikslelis">
				</div>
				<div>
					<img src="images/10-dithering-opt.jpg" class="paveikslelis">
				</div>
			</div>
		</div>	
	</div>
	<!-- 5 uzduotis -->	
	<div>
		<p id="p1"></p>
	</div>
	<div>
		<body onload="randomGeneravimas()">
	</div>
	<div>
		<button onclick="sumavimas()" onmouseenter="mygtukoSpalva(this)" onmouseleave="atstatomSpalva(this)">Sumuoti</button>
	</div>
	<div>
		<button onmouseenter="mygtukoSpalva(this)" onmouseleave="atstatomSpalva(this)">Maziausias skirtumas</button>
	</div>
	
	<!-- 6 uzduotis -->	
	<div style="margin-left: 100px;">
		<form>
			<input type="text" id="forma" onkeyup="apskritimoBraizymas()">
		</form>
	</div>
	
	<canvas class="canvasDisplay" id="myCanvas" style="width: 500px; height: 500px;"></canvas>

	<!-- 8 uzduotis -->
	<div style="width: 600px; height: 600px; float: left;">
		<canvas id="linijine1" width="400" height="400"></canvas>
	</div>
	<div style="width: 600px; height: 600px; float: left;">
		<canvas id="bar1" width="400" height="400"></canvas>
	</div>
	<!-- 9 uzduotis -->
	<div>
		<button id="mygtukas">Uzkrauti php</button>
	</div>
	
	<script>
		function randomGeneravimas(){
			var masyvas = new Array(10);
			var j = 0;
			var min = -10;
			var max = 10;
			while(j < masyvas.length){
				var randnum = Math.floor(Math.random()*(max-min+1)+min);
				var found = false;
				for(var i = 0; i < masyvas.length; i++){
					if(masyvas[i] == randnum)
					{
						found = true;
						break;
					}
				}

				if(!found)
				{
					masyvas[j] = randnum;
					j++;
				}
			}
			console.log(masyvas);			
		}
		
		function sumavimas(){
			var masyvas = new Array(10);
			var j = 0;
			var min = -10;
			var max = 10;
			var sum = 0;
			while(j < masyvas.length){
				var randnum = Math.floor(Math.random()*(max-min+1)+min);
				var found = false;
				for(var i = 0; i < masyvas.length; i++){
					if(masyvas[i] == randnum)
					{
						found = true;
						sum +=parseInt(masyvas[i]);
						break;
					}
				}

				if(!found)
				{
					masyvas[j] = randnum;
					j++;
				}
				
			}
			
			document.getElementById("p1").innerHTML = sum;
		}
		
		function mygtukoSpalva(x){
			x.style.background = "red";
		}
		function atstatomSpalva(x){
			x.style.background = "white";
		}
		function apskritimoBraizymas(){
			document.getElementById("myCanvas").style.display = "block";
			var spindulys = document.getElementById("forma").value;
			console.log(spindulys);
			var word = document.forms[0].elements[0].value;
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d");
			ctx.beginPath();
			//ctx.arc(100, 75, 50, 0, 2 * Math.PI);
			ctx.arc(100, 75, spindulys, 0, 2 * Math.PI);
			ctx.stroke();

			
		}
		var masyvas = new Array(10);
		var j = 0;
		var min = -10;
		var max = 10;
		while(j < masyvas.length){
			var randnum = Math.floor(Math.random()*(max-min+1)+min);
			var found = false;
			for(var i = 0; i < masyvas.length; i++){
				if(masyvas[i] == randnum)
				{
					found = true;
					break;
				}
			}

			if(!found)
			{
				masyvas[j] = randnum;
				j++;
			}
		}
		var ctx = document.getElementById("linijine1");
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Pirmas", "Antras","trecias","Ketvirtas","Penktas","Sestas","Septintas","Astuntas","Devintas","Desimtas"],
				datasets: [{
					label: 'Linijine',
					data: masyvas,
					backgroundColor: ['#ff4000','#ff8000','#ffbf00','#ffff00','#bfff00','#80ff00','#00bfff','#0080ff','#0040ff','#ff0080'],
					borderColor: ['#ff4000','#ff8000','#ffbf00','#ffff00','#bfff00','#80ff00','#00bfff','#0080ff','#0040ff','#ff0080'],
					borderWidth: 1
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Linijine'
				}
			}
		});
		var ctx = document.getElementById("bar1");
		var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Pirmas", "Antras","trecias","Ketvirtas","Penktas","Sestas","Septintas","Astuntas","Devintas","Desimtas"],
			datasets: [{
				label: 'Stulpeline',
				data: masyvas,
				backgroundColor: ['#ff4000','#ff8000','#ffbf00','#ffff00','#bfff00','#80ff00','#00bfff','#0080ff','#0040ff','#ff0080'],
				borderColor: ['#ff4000','#ff8000','#ffbf00','#ffff00','#bfff00','#80ff00','#00bfff','#0080ff','#0040ff','#ff0080'],
				borderWidth: 1
			}]
		},
		options: {
			title: {
				display: true,
				text: 'Stulpeline'
			}
		}
	});
	$("#mygtukas").on('click', function(){
		$.ajax({
			url: "masyvas.php",
			method: "GET",
			dataType:"JSON",
			success: function(responseText){
				
			}
		});
	});
		
		
		
	</script>
</body>
</html>