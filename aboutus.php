<!DOCTYPE html>
<html>

<head>
	<title>About Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/aboutus.css">
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<link rel="shortcut icon" href="img/gbpuat.png" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Peta&display=swap" rel="stylesheet">
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
					<a class="nav-link active" href=""
						style="border-top: 5px solid #171790;background-color: #ffe2ba;">About Us</a>
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
				<a href="faculty.php">Faculty</a>
				<a href="associations.php">Associations</a>
				<a href="facilities.php">Facilities</a>
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

		<div id="totop" onclick="totop()"
			style="position: fixed;top: 90vh;left:90vw; background-color: #ffe2ba;border-radius: 50px;z-index: 100;width: 4vmin;height: 4vmin;text-align:center;box-shadow: 3px 3px 5px black;">
			<img src="./img/up.png" style="width: 2vmin;" />
		</div>

		<div class="page1" id="page1" style="padding: 15vh 0;">

			<p style="font-size: 6vmax; font-family: 'Lexend Peta', sans-serif;" data-aos="fade-up"
				data-aos-duration="600">
				<bold>Welcome</bold>
			</p>
			<p style="font-family: 'Lobster', cursive;font-size: 2vmax;" data-aos="fade-up" data-aos-duration="600">to
			</p>
			<p style="font-family: 'Lobster', cursive;font-size: 2.2vmax;" data-aos="fade-up" data-aos-duration="600">
				B.tech Biotechnology Program</p>
			<p style="font-family: 'Lobster', cursive;font-size: 2vmax;" data-aos="fade-up" data-aos-duration="600">at
			</p>
			<p style="font-family: 'Lobster', cursive;font-size: 2.2vmax;" data-aos="fade-up" data-aos-duration="600">
				College of Basic Sciences and Humanities,</p>

			<p style="font-family: 'Lobster', cursive;font-size: 2.2vmax;" data-aos="fade-up" data-aos-duration="600">
				G. B. Pant University of Agriculture and Technology, Pantnagar</p>

		</div>



		<div style="background: #ffae42;padding: 4vh 3vw">

			<p style="font-size: 2.2vmax;text-align: center;"> Coordinators of the B.Tech Biotechnology Program</p>
			<div class="past" id="past">

				<div style="display: flex;flex-direction: column;">
					<div><img src="img/brk_gupta.jpg" width="170vmax" height="170vmax"
							style="border-radius: 50%;border: 7px solid #ffe2ba;"></div>
					<div style="padding-top: 2vh;text-align: center;">
						<p>Prof. B.R.K. Gupta</p>
					</div>
				</div>
				<div style="display: flex;flex-direction: column;">
					<div><img src="img/uma.jpg" width="170vmax" height="170vmax"
							style="border-radius: 50%;border: 7px solid #ffe2ba;"></div>
					<div style="padding-top: 2vh;text-align: center;">
						<p>Prof. Uma Melkania</p>
					</div>
				</div>
				<div style="display: flex;flex-direction: column;">
					<div><img src="img/ak_shukla.jpg" width="170vmax" height="170vmax"
							style="border-radius: 50%;border: 7px solid #ffe2ba;"></div>
					<div style="padding-top: 2vh;text-align: center;">
						<p>Prof. A.K. Shukla</p>
					</div>
				</div>
				<div style="display: flex;flex-direction: column;">
					<div><img src="img/rita.jpg" width="170vmax" height="170vmax"
							style="border-radius: 50%;border: 7px solid #ffe2ba;"></div>
					<div style="padding-top: 2vh;text-align: center;">
						<p>Prof. Rita Goel</p>
					</div>
				</div>
				<div style="display: flex;flex-direction: column;">
					<div><img src="img/sandeep1.JPG" width="170vmax" height="170vmax"
							style="border-radius: 50%;border: 7px solid #ffe2ba;"></div>
					<div style="padding-top: 2vh;text-align: center;">
						<p>Prof. Sandeep Arora</p>
					</div>
				</div>


			</div>

		</div>




		<div class="page2" id="page2" style="">
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-weight: bold;font-size: 2.2vmax;">About The University
			</p><br>
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.5vmax;">G. B. Pant University of Agriculture &
				Technology is the <i><b> first State Agriculture University </b></i> established in India. The
				University came into
				existence on November 17th, 1960 on a <i><b> Land Grant Pattern</b></i>. Right from the time of its
				inception, the
				University has laid emphasis on the holistic development of Indian Agriculture through integration of
				teaching, research and extension activities. This meticulous approach has earned rich dividends for the
				University, as it has <i><b>thrice been adjudged</b></i> as the <i><b>Best State Agricultural
						University</b></i>, by the Indian
				Council of Agricultural Research, New Delhi. The University has played a key role in ushering
				<b><i>Green
						Revolution </i></b>in Indian and has rightly been recognized as the <i><b>Harbinger of Green
						Revolution in India.</b></i> </p>

			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.5vmax;">The University provides a lively campus
				life with excellent academic environment. It offers undergraduate and postgraduate courses in
				disciplines like Agriculture, Technology, Basic Sciences, Veterinary Sciences, Home Science, Fisheries
				Sciences, Agri-Business Management etc. The University has a worldwide footprint and is credited with
				producing one of the finest graduates in the country.</p>
		</div>
		<div class="page3" id="page3">
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-weight: bold;font-size: 2.2vmax;">About The College</p>
			<br>
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.5vmax;">The College of Basic Sciences and
				Humanities was established as one of the first constituent Colleges in the University, at the time of
				its inception in 1960. The strength of the College lies in its interdisciplinary approach to education
				and research, through a unique integration of Physical and Biological Sciences. The College offers
				maximum number of interdisciplinary courses in the University and also enrols maximum number of students
				in its courses. </p>
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.5vmax;">Currently the College of Basic Sciences &
				Humanities has 10 different departments and three auxiliary research facilities namely Radio Isotope
				Tracer Laboratory, Bioinformatics & In-silico Biology Unit and Central Sophisticated Instrumentation
				Facility. All the departments are fully equipped for online as well as classroom teaching activities and
				have state-of-art research facilities, supported by research grants from various National and
				International agencies. </p>

		</div>
		<div class="page3_5" id="page3_5"></div>
		<div class="page4" id="page4">
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-weight: bold;font-size: 2.2vmax;">Department of Molecular
				Biology and Genetic Engineering</p><br>
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.3vmax;">The Department of Molecular Biology and
				Genetic Engineering is the youngest and most vibrant constituent department of the College of Basic
				Sciences & Humanities. The Master’s program of the Department is fully funded by the Department of
				Biotechnology, Govt. of India. The department also serves as the nodal department for the B.Tech.
				(Biotechnology) program of the University. The Biotechnology program specifically caters to the industry
				centric needs for trained human resource in Agri-biotech sector. The department follows a pyramidal
				approach of learning, wherein the students follow Basic, fundamental and then advanced courses in
				agricultural biotechnology in the 1st, 2nd and 3rd Semester respectively, followed by a specialized
				research problem in the 4th semester, for obtaining hands-on training in experimental & analytical
				skills in Biotechnology. </p>

			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.3vmax;">The Molecular Biology & Genetic
				Engineering department (or Biotech Department, as it is commonly known) has developed
				specialized linkages with the industry and interdisciplinary collaborations in research, for transfer of
				technologies and patents, generated through extensive research. </p>



			<!-- <ul data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.3vmax;text-align:left;">
				<li>Immunodiagnostics</li>
				<li>Signal Transduction</li>
				<li>Animal Cell Culture</li>
				<li>Plant Tissue Culture</li>
				<li>PLant Stress Biology</li>
				<li>Genomics</li>
				<li>Proteomics</li>
				<li>Metabolomics</li>
				<li>Bioinformatics</li>
				<li>Bio-safety</li>
				<li>Bio-resource & Bio-prospecting</li>
			</ul> -->
		</div>
		<div class="page5" id="page5">
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-weight: bold;font-size: 2.2vmax;">B.Tech. (Biotechnology)
				Program</p>
				<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.3vmax;">Accredited by ICAR, Govt. of India </p><br>
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.3vmax;">Considering the growing demand for trained
				human resource in the sunrise industrial sector of Biotechnology, it was envisaged to start an
				undergraduate program in Biotechnology. The B.Tech. (Biotechnology) program was initiated in the year
				2008, with an intake capacity of 40 students per annum. The objective of the program is to provide
				quality education and training to the Biotech students, so as to enable them to explore and invent
				biotechnology based career prospects and entrepreneurial opportunities. The program emphasizes on the
				holistic development of young minds for sharpening their critical thinking abilities and providing cross
				boundary solutions to problems that involve biotechnology based inputs. </p>
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.3vmax;">The B.Tech (Biotech) program places equal
				emphasis on plant, animal and microbial systems. Emphasis is laid on interdisciplinary learning
				approaches, wherein students are encouraged to take courses from across the disciplines like
				agriculture, horticulture, engineering, computational biology etc. The program immensely benefits from
				the existence of a full-fledged biotechnology department having internationally acclaimed teaching
				program. The nodal department has specialized function based research laboratories, equipped with state
				of art equipment and instruments for taking up basic as well as applied research in the frontier areas
				of Biotechnology. The undergraduate students also carry out research on a practical problem of their
				choice; wherein the students get hands on training in designing research methodology and also learn
				day-to-day experimental trouble shooting under the guidance of senior doctoral students, <i>so as to
					safely
					make mistakes and learn organically.</i>

			</p>
			<p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.3vmax;">The B.Tech. (Biotechnology) program
				encourages innovation in ideas to support entrepreneurship,
				providing platforms for knowledge sharing for the students and encourages students to participate in
				skill development programs. Presently we have two industry linked entrepreneurial programs in line,
				wherein the students learn the basic entrepreneurial skills in Bio-fortification and hydroponics. The
				two areas have been earmarked keeping in mind the demands of local hill population. The entrepreneurial
				skill development also encompasses lectures on the market economy and sustainability, by experts from
				the college of Agri-business management.</p>
			<!-- <p data-aos="fade-up" data-aos-duration="1000"
				style="font-family: 'Merriweather', serif;font-size: 1.3vmax;">The objective of the program is to equip
				and empower the students to explore and invent biotechnology based career prospectus and employment
				opportunities.</p> -->

		</div>
		<div class="page5_5" id="page5_5"></div>






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