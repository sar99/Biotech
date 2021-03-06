<!DOCTYPE html>
<html>

<head>
	<title>Facilities</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<link rel="shortcut icon" href="img/gbpuat.png" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/facilities.css">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">

</head>

<body>
	<div class="whole" id="whole">

		<div class="header" id="header" style="background-color: #171790;">
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
					<a class="nav-link active" href=""
						style="border-top: 5px solid #171790;background-color: #ffe2ba;">Facilities</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="activities.php">Activities</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="placements.php">Placements</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="conveyance.php">Reach Us</a>
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
				<a href="aboutus.php">About Us</a>
				<a href="faculty.php">Faculty</a>
				<a href="associations.php">Associations</a>
				<a href="activities.php">Activities</a>
				<a href="placements.php">Placements</a>
				<a href="conveyance.php">Reach Us</a>
				<a href="admissions.php">Admissions</a>
			</div>
			<div id="main">
				<button class="openbtn" onclick="openNav()" style="background-color: #ffae42;color: white;"><strong>
						MENU</strong></button>
			</div>
		</div>





		<div class="btnroll" id="btnroll">

			<a href="#" id="lab" onclick="lab()"><span>laboratories</span></a>

			<div class="card" style="width: 50vw;" id="compinfo">
				<img src="img/comp.jpg" class="card-img-top" alt="...">
				<div class="card-body" style="text-align: left;background: #ffe2ba">
					<h4 class="card-title">Central Computing Facility</h4>
					<ul>
						<li class="card-text">Constructed under the World Bank funded project "Technical Education
							Quality Improvement Programme"</li>
						<li class="card-text">Equipped with around 225 terminalsincluding graphic workstations and high
							end desktops.</li>
						<li class="card-text">It provides internet facility to students and staff of all the colleges,
							offices and hostels of Pantnagar University.</li>
					</ul>
					<a href="#" onclick="closeit()">close</a>
				</div>
			</div>


			<a href="#" id="comp" onclick="comp()"><span>computing facility</span></a>

			<div class="card" style="width: 50vw;" id="labinfo">
				<img src="img/lab.JPG" class="card-img-top" alt="...">
				<div class="card-body" style="text-align: left;background: #ffe2ba">
					<h4 class="card-title">Laboratories</h4>
					<ul>
						<li class="card-text">Molecular Cytogenetics Lab</li>
						<li class="card-text">Plant Stress and Nano Biotechnology Lab</li>
						<li class="card-text">Bioprospecting and Metabolomics</li>
						<li class="card-text">Bioinformatics and System Biology Lab</li>
						<li class="card-text">Immunodiagnostic and Pretomics Lab</li>
						<li class="card-text">Biosafety and Molecular Diagnostic Lab</li>
						<li class="card-text">Central Facility I & II</li>
						<li class="card-text">Plant Tissue Culture Facility</li>
						<li class="card-text">Animal Cell Culture Facility</li>


					</ul>
					<a href="#" onclick="closeit()">close</a>
				</div>
			</div>


		</div>

		<div class="btnroll" id="btnroll">

			<a href="#" id="lib" onclick="lib()"><span>library</span></a>

			<div class="card" style="width: 50vw;" id="audiinfo">
				<img src="img/stad.jpg" class="card-img-top" alt="...">
				<div class="card-body" style="text-align: left;background: #ffe2ba">
					<h4 class="card-title">Physical Health</h4>
					<ul>
						<li class="card-text">Acoustically designed, centrally air-conditioned theatre with finest
							projection and illuminating technologies.</li>
						<li class="card-text">Seating capacity of over 1200.</li>
						<li class="card-text">National level sports complex with following infrastructure:
							<ul>
								<li>Athletic Stadium</li>
								<li>Football Ground</li>
								<li>Squash Court</li>
								<li>Badminton Court</li>
								<li>Tennis Court</li>
								<li>Basketball Court</li>
								<li>Gymnasium etc.</li>
							</ul>
						</li>
					</ul>
					<a href="#" onclick="closeit()">close</a>
				</div>
			</div>


			<a href="#" id="audi" onclick="audi()"><span> Physical Health</span></a>

			<div class="card" style="width: 50vw;" id="libinfo">
				<img src="img/lib.jpg" class="card-img-top" alt="...">
				<div class="card-body" style="text-align: left;background: #ffe2ba">
					<h4 class="card-title">Library</h4>
					<ul>
						<li class="card-text">One of Asia's largest in terms of size</li>
						<li class="card-text">Automated system, self check out lending machine and book drop.</li>
						<li class="card-text">Access to online journals</li>
						<li class="card-text">D-space Digital Repository and E-learning portal.</li>
					</ul>
					<a href="#" onclick="closeit()">close</a>
				</div>
			</div>

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


	<script>

		function openNav() {
			document.getElementById("mySidebar").style.width = "50vw";
			document.getElementById("main").style.display = "none";
		}

		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.display = "block";
		}

		function lab() {
			document.getElementById("labinfo").style.display = "inline-block";
			document.getElementById("lib").style.display = "none";
			document.getElementById("audi").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("lab").style.display = "none";



		}
		function audi() {
			document.getElementById("audiinfo").style.display = "inline-block";
			document.getElementById("lib").style.display = "none";
			document.getElementById("lab").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("audi").style.display = "none";



		}
		function lib() {
			document.getElementById("libinfo").style.display = "inline-block";
			document.getElementById("lab").style.display = "none";
			document.getElementById("audi").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("lib").style.display = "none";


		}
		function comp() {
			document.getElementById("compinfo").style.display = "inline-block";
			document.getElementById("lib").style.display = "none";
			document.getElementById("audi").style.display = "none";
			document.getElementById("lab").style.display = "none";
			document.getElementById("comp").style.display = "none";



		}

		function closeit() {
			document.getElementById("labinfo").style.display = "none";
			document.getElementById("libinfo").style.display = "none";
			document.getElementById("audiinfo").style.display = "none";
			document.getElementById("compinfo").style.display = "none";
			document.getElementById("lab").style.display = "inline-block";
			document.getElementById("lib").style.display = "inline-block";
			document.getElementById("audi").style.display = "inline-block";
			document.getElementById("comp").style.display = "inline-block";

		}

	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/aos.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>


</body>

</html>