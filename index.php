<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/loader.css">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
</head>

<body onload="myfunc()">


	<div class="container">

		<div class="dnaloader">

			<div class="spike a1"></div>
			<div class="spike a2"></div>
			<div class="spike a3"></div>
			<div class="spike a4"></div>
			<div class="spike a5"></div>
			<div class="spike a6"></div>
			<div class="spike a7"></div>
			<div class="spike a8"></div>
			<div class="spike a9"></div>
			<div class="spike a10"></div>
			<div class="spike a11"></div>
			<div class="spike a12"></div>
			<div class="spike a13"></div>
			<div class="spike a14"></div>
			<div class="spike a15"></div>

		</div>

	</div>
	<script>
		var myVar;

		function myfunc() {
			myVar = setTimeout(showPage, 5000);
		}

		function showPage() {
			window.location.href = "homepage.php";
		}
	</script>


</body>

</html>