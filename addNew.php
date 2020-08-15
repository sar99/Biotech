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