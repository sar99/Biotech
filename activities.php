<?php
session_start();
$conn=mysqli_connect("localhost","root","","cbsh")
        or die('Error connecting to MySQL server.'); 
        function err($n)
        {
          $n=trim($n);//remove extra tab spaces
          $n=stripslashes($n);//remove blackslashes from input to avoid xss attack
          $n=htmlspecialchars($n);//convert html to plain text
          return $n;
        }

?>
<!DOCTYPE html>
<html>

<head>
	<title>Activities</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/activities.css">
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
					<a class="nav-link active" href=""
						style="border-top: 5px solid #171790;background-color: #ffe2ba;">Activities</a>
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
				<a href="facilities.php">Facilities</a>
				<a href="placements.php">Placements</a>
				<a href="conveyance.php">Reach Us</a>
				<a href="admissions.php">Admissions</a>
			</div>
			<div id="main">
				<button class="openbtn" onclick="openNav()" style="background-color: #ffae42;color: white;"><strong>
						MENU</strong></button>
			</div>
		</div>

		<div id="totop" onclick="totop()"
			style="position: fixed;top: 90vh;left:90vw; background-color: #ffe2ba;border-radius: 50px;z-index: 100;width: 4vmin;height: 4vmin;text-align:center;box-shadow: 3px 3px 5px black;">
			<img src="./img/up.png" style="width: 2vmin;" />
		</div>

		<p style="text-align: center;font-size: 2.75vmax;margin: 3vh 3vw;font-family: 'Tinos', serif;">Activities</p>
		<div class="card-deck" style="margin: 3vh 3vw;">
			<div class="card" data-aos="fade-up" data-aos-duration="800">
				<img src="img/nss.jpg" class="card-img-top" alt="..." height="300vh">
				<div class="card-body">
					<p class="card-title" style="text-align: center;font-size: 1.5vmax;">NSS</p>
					<!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
				</div>
			</div>
			<div class="card" data-aos="fade-down" data-aos-duration="800">
				<img src="img/fest.jpg" class="card-img-top" alt="..." height="300vh">
				<div class="card-body">
					<p class="card-title" style="text-align: center;font-size: 1.5vmax;">Fests and Events</p>
					<!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
				</div>
			</div>
			<div class="card" data-aos="fade-up" data-aos-duration="800">
				<img src="img/seminar.jpg" class="card-img-top" alt="..." height="300vh">
				<div class="card-body">
					<p class="card-title" style="text-align: center;font-size: 1.5vmax;">Seminars and Workshops</p>
					<!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
				</div>
			</div>
		</div>




		<p style="text-align: center;font-size: 2.75vmax;margin: 3vh 3vw;font-family: 'Tinos', serif;">Alumni Section
		</p>
		<p style="text-align: center;font-size: 1.25vmax;margin: 3vh 3vw;font-family: 'Tinos', serif;">Please go the <a
				href="#">this link</a> and fill the form provided so that we can keep a track of our pretigeous alumni.
		</p>




		<div class="contentbig" div="contentbig">
			<div class="news" id="news">
				<table>
					<tr>
						<p style="font-size: 2.75vmax;">Latest News</p>
					</tr>

					<?php
						$sql= "SELECT * FROM news";
						$result1=mysqli_query($conn,$sql);
						while($row1=mysqli_fetch_array($result1))
						{

						echo "<tr>

							<div class='item' id='item' data-aos='fade-right' data-aos-duration='600'>
								<p class='heading' id='heading'>" . $row1['headline'] . "</p>
								<p class='date' id='date'>" . $row1['newsDate'] . "</p>
							</div>
	
						</tr>";
						}
					

					?>

				</table>
			</div>

			<div class="upcomingevents" id="upcomingevents">

				<table>

					<tr>
						<p style="font-size: 2.75vmax;">Upcoming Events</p>
					</tr>

					<?php
						$sql= "SELECT * FROM upcomingEvents";
						$result1=mysqli_query($conn,$sql);
						while($row1=mysqli_fetch_array($result1))
						{

						echo "<tr>
							<div class='event' id='event' data-aos='fade-left' data-aos-duration='600'>
								<div class='thick' id='thick'>
									<p class='date' id='date'>" . $row1['eventDate'] . "</p>
									<p class='title' id='title'>" . $row1['eventTitle'] . "</p>
								</div>
								<p class='description' id='description'>" . $row1['eventDescription'] . "</p>
							</div>
						</tr>";
						}
					

					



					?>
					

				</table>

			</div>




		</div>
		<div class="contentsmall" id="contentsmall">

			<table>
				<tr>
					<p style="font-size: 2.75vmax;">Latest News</p>
				</tr>
				<tr>

					<div class="item" id="item" data-aos="fade-right" data-aos-duration="600">
						<p class="heading" id="heading" style="font-size: 1.75vmax;">News 1: Hello there1 This is the
							heading for news </p>
						<p class="date" id="date" style="font-size: 1.2vmax;">DD-MM-YY</p>
					</div>

				</tr>
				<tr>

					<div class="item" id="item" data-aos="fade-right" data-aos-duration="600">
						<p class="heading" id="heading" style="font-size: 1.75vmax">News 2: Hello there1 This is the
							heading for news </p>
						<p class="date" id="date" style="font-size: 1.2vmax;">DD-MM-YY</p>
					</div>

				</tr>
				<tr>

					<div class="item" id="item" data-aos="fade-right" data-aos-duration="600">
						<p class="heading" id="heading" style="font-size: 1.75vmax">News 3: Hello there1 This is the
							heading for news </p>
						<p class="date" id="date" style="font-size: 1.2vmax;">DD-MM-YY</p>
					</div>

				</tr>
				<tr>

					<div class="item" id="item" data-aos="fade-right" data-aos-duration="600">
						<p class="heading" id="heading" style="font-size: 1.75vmax">News 1: Hello there1 This is the
							heading for news </p>
						<p class="date" id="date" style="font-size: 1.2vmax;">DD-MM-YY</p>
					</div>

				</tr>
				<tr>

					<div class="item" id="item" data-aos="fade-right" data-aos-duration="600">
						<p class="heading" id="heading" style="font-size: 1.75vmax">News 1: Hello there1 This is the
							heading for news </p>
						<p class="date" id="date" style="font-size: 1.2vmax;">DD-MM-YY</p>
					</div>

				</tr>
				<tr>
					<p style="font-size: 2.75vmax;">Upcoming Events</p>
				</tr>
				<tr>
					<div class="event" id="event" data-aos="fade-left" data-aos-duration="600">
						<div class="thick" id="thick">
							<p class="date" id="date" style="font-size: 1.2vmax;">DD MON</p>
							<p class="title" id="title" style="font-size: 1.75vmax">This is the heading of event</p>
						</div>
						<p class="description" id="description" style="font-size: 1.2vmax;">This is the description of
							the upcoming event.</p>
					</div>
				</tr>
				<tr>
					<div class="event" id="event" data-aos="fade-left" data-aos-duration="600">
						<div class="thick" id="thick">
							<p class="date" id="date" style="font-size: 1.2vmax;">DD MON</p>
							<p class="title" id="title" style="font-size: 1.75vmax">This is the heading of event</p>
						</div>
						<p class="description" id="description" style="font-size: 1.2vmax;">This is the description of
							the upcoming event.</p>
					</div>
				</tr>
				<tr>
					<div class="event" id="event" data-aos="fade-left" data-aos-duration="600">
						<div class="thick" id="thick">
							<p class="date" id="date" style="font-size: 1.2vmax;">DD MON</p>
							<p class="title" id="title" style="font-size: 1.75vmax">This is the heading of event</p>
						</div>
						<p class="description" id="description" style="font-size: 1.2vmax;">This is the description of
							the upcoming event.</p>
					</div>
				</tr>
				<tr>
					<div class="event" id="event" data-aos="fade-left" data-aos-duration="600">
						<div class="thick" id="thick">
							<p class="date" id="date" style="font-size: 1.2vmax;">DD MON</p>
							<p class="title" id="title" style="font-size: 1.75vmax">This is the heading of event</p>
						</div>
						<p class="description" id="description" style="font-size: 1.2vmax;">This is the description of
							the upcoming event.</p>
					</div>
				</tr>
			</table>


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