<?php
require_once("connect.php");
?>
<html>

<head>
	<title> Admin Page</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

	<link rel="shortcut icon" href="img/gbpuat.png" type="image/x-icon" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">

	<head>

	<body style="padding: 15px;">

		<h2 style="text-align: center">Admin Panel</h2>


		<?php if(!isset($_SESSION['isLogin']))
        { 
       	?>
			   
			   <form method="POST" action="login.php">
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>
	
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			   

   
		<?php 
		}
		else 
			{ ?>
            
			<a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>


			<button type="button" style="margin-left: 2vw;" class="btn btn-primary" data-toggle="modal" data-target="#changePasswordModal"
					data-whatever="@mdo">Change Password</button>

				
		
		


		<div style="margin-top: 5vh;">
			<h4>Latest News</h4>
			<div>

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewHeadlineModal"
					data-whatever="@mdo">Add new headline</button>


				<table class="table table-striped">
					<thead>
						<tr>
							<th>News Heading</th>
							<th>Date</th>
							<th></th>

						</tr>
					</thead>
					<tbody>

					<?php
					$sql= "SELECT * FROM news";
					$result1=mysqli_query($conn,$sql);
					while($row1=mysqli_fetch_array($result1))
					{
					echo "<tr>
							<td>" . $row1['headline'] . "</td>
							<td>" . $row1['newsDate'] . "</td>
							<td>
								<form action='delete.php' method='POST'>
									<input type='hidden' name='hid' value='" . $row1['id'] . "' />
									<input type = 'submit' class='btn btn-danger' name='Delete' value='Delete'></input>
								</form>
							</td>
						</tr>";
					}
					?>

					</tbody>
				</table>
			</div>
		</div>


		<div style="margin-top: 5vh;">
			<h4>Upcoming Events</h4>
			<div>

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewEventModal"
					data-whatever="@mdo">Add new event</button>


				<table class="table table-striped">
					<thead>
						<tr>
							<th>Event Title</th>
							<th>Description</th>
							<th>Date</th>
							<th></th>

						</tr>
					</thead>
					<tbody>

					<?php
					$sql= "SELECT * FROM upcomingEvents";
					$result1=mysqli_query($conn,$sql);
					while($row1=mysqli_fetch_array($result1))
					{
					echo "<tr>
							<td>" . $row1['eventTitle'] . "</td>
							<td>" . $row1['eventDescription'] . "</td>
							<td>" . $row1['eventDate'] . "</td>
							<td>
								<form action='delete.php' method='POST'>
									<input type='hidden' name='eid' value='" . $row1['id'] . "' />
									<input type = 'submit' class='btn btn-danger' name='Delete' value='Delete'></input>
								</form>
							</td>
						</tr>";
					}
					?>

					</tbody>
				</table>
			</div>
		</div>













		<div class="modal fade" id="addNewHeadlineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add new headline</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="POST" action="./addNew.php">
						<div class="modal-body">


							<div class="form-group">
								<label for="message-text" class="col-form-label">Headline:</label>
								<textarea class="form-control" id="headline" name="headline"></textarea>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-primary"></input>
						</div>
					</form>
				</div>
			</div>
		</div>


		<div class="modal fade" id="addNewEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add new event</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="POST" action="./addNew.php">
						<div class="modal-body">


							<div class="form-group">
								<label for="message-text" class="col-form-label">Event Name:</label>
								<textarea class="form-control" id="event" name="event"></textarea>

								<label for="message-text" class="col-form-label">Description:</label>
								<textarea class="form-control" id="description" name="description"></textarea>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-primary"></input>
						</div>
					</form>
				</div>
			</div>
		</div>


		<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="POST" action="./changePassword.php">
						<div class="modal-body">


							<div class="form-group">
								<label for="message-text" class="col-form-label">Old Password:</label>
								<input type="password" class="form-control" id="old" name="old" placeholder="Password">
								<label for="message-text" class="col-form-label">New Password:</label>
								<input type="password" class="form-control" id="new" name="new" placeholder="Password">							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-primary"></input>
						</div>
					</form>
				</div>
			</div>
		</div>




		<?php } ?>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"></script>
	</body>

</html>