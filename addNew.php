<?php
require_once("connect.php");

if(isset($_POST['headline']))
{
  $headline=$_POST['headline'];

  $query="INSERT INTO news (headline, newsDate) VALUES ('$headline', curdate());";
  $result=mysqli_query($conn,$query);

  if($result==FALSE)
  echo "<script>window.alert('Oops! Sorry some error occurred while connecting to the daatabse. Please check your internet connection and try again.');</script>";
}
else if(isset($_POST['event']) && isset($_POST['description']))
{
  $event=$_POST['event'];
  $description=$_POST['description'];

  $query="INSERT INTO upcomingEvents (eventTitle, eventDescription, eventDate	) VALUES ('$event', '$description',  curdate());";
  $result=mysqli_query($conn,$query);

  if($result==FALSE)
  echo "<script>window.alert('Oops! Sorry some error occurred while connecting to the daatabse. Please check your internet connection and try again.');</script>";

}
else
{
  echo "<script>window.alert('Invalid Request.');</script>";

}

echo "<script>window.location.href='admin.php';</script>";

mysqli_close($conn); 
?>