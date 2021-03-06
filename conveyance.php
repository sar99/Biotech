<!DOCTYPE html>
<html>

<head>
	<title>Conveyance</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/conveyance.css">
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<link rel="shortcut icon" href="img/gbpuat.png" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
</head>

<body>
	<div class="whole" id="whole">

		<div class="header" id="header">
			<img src="img/header.png" class="headerlogo" id="headerlogo">
			<img src="img/textheader.png" id="textheader" class="textheader">
		</div>

		<div class="orange"></div>

		<div class="nav1" id="nav1">
			<ul class="nav nav-tabs" style="font-size: 1.2vmax;background-color: #ffae42;">
				<li class="nav-item">
					<a class="nav-link" href="homepage.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="aboutus.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="faculty.php">Faculty</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="associations.php">Associations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="facilities.php">Facilities</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="activities.php">Activities</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="placements.php">Placements</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href=""
						style="border-top: 5px solid #171790;background-color: #ffe2ba;">Reach Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="admissions.php">Admissions</a>
				</li>
			</ul>

		</div>

		<div id="nav2" class="nav2">

			<div id="mySidebar" class="sidebar">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
					style="border-bottom: 0px solid white;font-size: 8vw;">x</a>
				<a href="aboutus.php">About US</a>
				<a href="faculty.php">Faculty</a>
				<a href="associations.php">Associations</a>
				<a href="facilities.php">Facilities</a>
				<a href="activites.php">Activites</a>
				<a href="placements.php">Placements</a>
				<a href="admissions.php">Admissions</a>

			</div>
			<div id="main">
				<button class="openbtn" onclick="openNav()"
					style="background-color: #ffae42;color: white;"><strong>MENU</strong></button>
			</div>
		</div>




		<div id="totop" onclick="totop()"
			style="position: fixed;top: 90vh;left:90vw; background-color: #ffe2ba;border-radius: 50px;z-index: 100;width: 4vmin;height: 4vmin;text-align:center;box-shadow: 3px 3px 5px black;">
			<img src="./img/up.png" style="width: 2vmin;" />
		</div>



		<div class="animation" id="animation" style="margin-bottom: 0;">
			<div class="photo" id="photo">
				<a id="deltrain" onclick='change(this.id)' href="#" style="left:2vw;"><img src="img/train.jpg"
						width="120vw"></a>
				<a id="delplane" onclick="change(this.id)" href="#" style="left:9vw;"><img src="img/plane.png"
						width="120vw"></a>
				<a id="delbus" onclick="change(this.id)" href="#" style="left:18vw;"><img src="img/busr.png"
						width="120vw"></a>
				<a id="dehtrain" onclick="change(this.id)" href="#" style="right:2vw"><img src="img/trainl.jpg"
						width="120vw"></a>
				<a id="dehplane" onclick="change(this.id)" href="#" style="right: 9vw;"><img src="img/planel.png"
						width="120vw"></a>
				<a id="dehbus" onclick="change(this.id)" href="#" style="right: 18vw;"><img src="img/bus.png"
						width="120vw"></a>
			</div>

			<div class="photo1" id="photo1">
				<a id="deltrain" onclick='change(this.id)' href="#" style="left:3vw;"><img src="img/train.jpg"
						width="140vw"></a>
				<a id="delplane" onclick="change(this.id)" href="#" style="left:12vw;"><img src="img/plane.png"
						width="140vw"></a>
				<a id="delbus" onclick="change(this.id)" href="#" style="left:23vw;"><img src="img/busr.png"
						width="140vw"></a>
				<a id="dehtrain" onclick="change(this.id)" href="#" style="right:3vw"><img src="img/trainl.jpg"
						width="140vw"></a>
				<a id="dehplane" onclick="change(this.id)" href="#" style="right: 12vw;"><img src="img/planel.png"
						width="140vw"></a>
				<a id="dehbus" onclick="change(this.id)" href="#" style="right: 23vw;"><img src="img/bus.png"
						width="140vw"></a>
			</div>

			<div class="city" id="city">
				<p style="left: 20vw;padding-left: 2vw;">Delhi</p>
				<p style="left: 45vw;padding-left: 5vw;">Pantnagar</p>
				<p style="right: 20vw;">Dehradun</p>
			</div>

		</div>
		<p style="text-align: center;">*Click on the conveyance that you want to reach Pantnagar to get the details*</p>

		<div class="details" id="details" style="margin: auto;">
			<div id="deltraintext" class="deltraintext" data-aos="fade-down" data-aos-duration="600">
				<p style="font-size: 1.75vmax;text-align: center;">Trains from Delhi to Pantnagar </p>
				<table>
					<tr>
						<th>Train Name</th>
						<th>Train No.</th>
						<th>Departure Time</th>
						<th>Arrival Time</th>
					</tr>
					<tr>
						<td>New-Delhi Kathgodam Shatabdi</td>
						<td>12040</td>
						<td>06:20</td>
						<td>10:40</td>
					</tr>
					<tr>
						<td>Uttarakhand Sampark Kranti Express</td>
						<td>15035</td>
						<td>16:00</td>
						<td>21:20</td>
					</tr>
					<tr>
						<td>Ranikhet Express</td>
						<td>15013</td>
						<td>22:05</td>
						<td>03:50</td>
					</tr>
					<tr>
						<td>Lalkuan Intercity</td>
						<td>15060</td>
						<td>14:15</td>
						<td>20:35</td>
					</tr>
				</table>
			</div>
			<div id="delplanetext" class="deltraintext" data-aos="fade-down" data-aos-duration="600">
				<p style="font-size: 1.75vmax;text-align: center;">Planes from Delhi to Pantnagar </p>
				<table>
					<tr>
						<th>Plane Service</th>
						<th>Plane No.</th>
						<th>Departure Time</th>
						<th>Arrival Time</th>
					</tr>
					<tr>
						<td>Air India</td>
						<td>AI-9815</td>
						<td>09:55</td>
						<td>10:55</td>
					</tr>

				</table>
			</div>
			<div id="delbustext" class="deltraintext" data-aos="fade-down" data-aos-duration="600">
				<p style="font-size: 1.75vmax;text-align: center;">Buses from Delhi to Rudrapur (14km from Pantnagar)
				</p>
				<table>
					<tr>
						<th>Bus Operator</th>
						<th>Departure Time</th>
						<th>Arrival Time</th>
					</tr>
					<tr>
						<td>R.S Yadav Travels</td>
						<td>20:40</td>
						<td>04:30</td>
					</tr>
					<tr>
						<td>International Tourist Centre</td>
						<td>23:30</td>
						<td>05:30</td>
					</tr>
					<tr>
						<td>Puneet Bus Service</td>
						<td>22:15</td>
						<td>05:45</td>
					</tr>
					<tr>
						<td>SRH Travel</td>
						<td>21:00</td>
						<td>05:00</td>
					</tr>
					<tr>
						<td>Mahalaxmi Travels</td>
						<td>02:15</td>
						<td>07:15</td>
					</tr>
					<tr>
						<td>Blueworld Tourist Private Limited</td>
						<td>10:30</td>
						<td>16:30</td>
					</tr>
					<tr>
						<td>Blueworld Tourist Private Limited</td>
						<td>21:01</td>
						<td>05:11</td>
					</tr>
					<tr>
						<td>Blueworld Tourist Private Limited</td>
						<td>21:00</td>
						<td>06:00</td>
					</tr>
					<tr>
						<td>Himachal Holidays Volvo</td>
						<td>21:30</td>
						<td>04:30</td>
					</tr>
				</table>
			</div>
			<div id="dehtraintext" class="deltraintext" data-aos="fade-down" data-aos-duration="600">
				<p style="font-size: 1.75vmax;text-align: center;">Trains from Dehradun to Pantnagar</p>
				<table>
					<tr>
						<th>Train Name</th>
						<th>Train No.</th>
						<th>Departure Time</th>
						<th>Arrival Time</th>
					</tr>
					<tr>
						<td>Naini Doon Jan Shatabdi</td>
						<td>12091</td>
						<td>15:45</td>
						<td>22:30</td>
					</tr>
					<tr>
						<td>Dehradun Kathgodam Express</td>
						<td>14120</td>
						<td>23:25</td>
						<td>06:11</td>
					</tr>

				</table>
			</div>
			<div id="dehplanetext" class="deltraintext" data-aos="fade-down" data-aos-duration="600">
				<p style="font-size: 1.75vmax;text-align: center;">Planes from Dehradun to Pantnagar </p>
				<table>
					<tr>
						<th>Plane Service</th>
						<th>Plane No.</th>
						<th>Departure Time</th>
						<th>Arrival Time</th>
					</tr>
					<tr>
						<td>Air India</td>
						<td>AI-9824</td>
						<td>10:00</td>
						<td>10:50</td>
					</tr>

				</table>
			</div>
			<div id="dehbustext" class="deltraintext" data-aos="fade-down" data-aos-duration="600">
				<p style="font-size: 1.75vmax;text-align: center;">Buses from Dehradun to Rudrapur (14km from Pantnagar)
				</p>
				<table>
					<tr>
						<th>Bus Operator</th>
						<th>Departure Time</th>
						<th>Arrival Time</th>
					</tr>
					<tr>
						<td>Empire Travels</td>
						<td>22:00</td>
						<td>05:30</td>
					</tr>
					<tr>
						<td>Regal Cruiser Travels</td>
						<td>20:01</td>
						<td>04:00</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="contact" id="contact" style="text-align: center;">

			<p style="font-size: 3vh;">
				<bold>Contact Deatils :- </bold>
			</p>
			<div style="padding: 5px;">
				<p style="padding-top: 2vh; font-size: 2.5vh;"><b>Prof. Sandeep Arora</b></p>
				<p style="padding-top: 0.3vh;"><b>Coordinator B.Tech. Biotechnology</b></p>
				<p style="padding-top: 0.3vh;">Mob. No.: +91-7055470555</p>
				<p style="padding: 0.3vh 0;">Email: cbsh.dean@gmail.com, sandeep.arora@gbpuat-cbsh.ac.in</p>
			</div>
			<p style="padding-top: 2vh;"><b>Deptt. of Molecular Biology & Genetic Enginnering, College of Basic Sciences
					&
					Humanities, G. B. Pant University of Agriculture and Technology</b></p>
			<p>Pantnagar 263145 Uttarakhand</p>
			<p style="padding: 1vh 0;">Contact No: 70556 21235</p>

		</div>





		<div class="blue"></div>
		<div class="orange"></div>
		<div id="footer" class="footer">

			<div class="column" id="column">
				<p>GATEWAYS</p>
				<a href="http://mail.gbpuat.ac.in/src/login.php">
					<p>Webmail</p>
				</a>
				<a href="http://www.gbpuat-cbsh.ac.in/login/">
					<p>CBSH Web Portal</p>
				</a>
				<a href="http://www.gbpuat.ac.in/">
					<p>University Website</p>
				</a>
				<a href="http://gbpuat-regi.com/">
					<p>Registrar Office Website</p>
				</a>

			</div>
			<div class="column" id="column">
				<p>CAMPUS BUZZ</p>
				<p>Gene Riders</p>
				<p>Events/Fests</p>
				<p>Workshops/Seminars</p>
			</div>
			<div class="column" id="column">
				<p>LINKS</p>
				<a href="conveyance.php">
					<p>How to Reach</p>
				</a>
				<a href="http://gbpuat-regi.com/default.html">
					<p>Faculty Login</p>
				</a>
				<a href="http://gbpuat-regi.com/newregi/default.html">
					<p>Student Login</p>
				</a>


			</div>

		</div>
		<div class="column" id="column" style="text-align: center;background-color: #171790; font-size: 1.7vh;"> Website designed and developed by <a
				href="https://www.linkedin.com/in/saniya-arora-408726181/"
				style="color: #ffae42;text-decoration: underline;"> Saniya Arora</a></div>
		<div class="orange"></div>


	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script>
		function openNav() {
			document.getElementById("mySidebar").style.width = "50vw";
			document.getElementById("main").style.display = "none";
		}

		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.display = "block";
		}

		function change(id) {

			document.querySelector("#deltrain").classList.remove("movedeltrain");
			document.querySelector("#delbus").classList.remove("movedelbus");
			document.querySelector("#delplane").classList.remove("movedelplane");
			document.querySelector("#dehtrain").classList.remove("movedehtrain");
			document.querySelector("#dehplane").classList.remove("movedehplane");
			document.querySelector("#dehbus").classList.remove("movedehbus");
			document.querySelector("#" + id).classList.add("move" + id);

			// document.getElementById("delplane").style.left= "11.764vw";
			// document.getElementById("delbus").style.left= "17.646vw";
			// document.getElementById("dehtrain").style.right= "5.882vw";
			// document.getElementById("dehplane").style.right= "11.764vw";
			// document.getElementById("dehbus").style.right= "17.646vw";
			// document.getElementById(id).style.position="absolute";
			// document.getElementById(id).style.transform="translate(350px, 0)";
			idtext = id + "text";
			document.getElementById("deltraintext").style.display = "none";
			document.getElementById("delplanetext").style.display = "none";
			document.getElementById("delbustext").style.display = "none";
			document.getElementById("dehtraintext").style.display = "none";
			document.getElementById("dehplanetext").style.display = "none";
			document.getElementById("dehbustext").style.display = "none";
			document.querySelector("#deltrain").classList.remove("animate-bottom");
			document.querySelector("#delbus").classList.remove("animate-bottom");
			document.querySelector("#delplane").classList.remove("animate-bottom");
			document.querySelector("#dehtrain").classList.remove("animate-bottom");
			document.querySelector("#dehplane").classList.remove("animate-bottom");
			document.querySelector("#dehbus").classList.remove("animate-bottom");
			document.getElementById(idtext).style.display = "block";
			document.querySelector("#" + idtext).classList.add("animate-bottom");

		}

		function totop() {
			document.body.scrollTop = 0; // For Safari
			document.documentElement.scrollTop = 0;
		}
	</script>
	<script type="text/javascript" src="js/aos.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>

</body>

</html>