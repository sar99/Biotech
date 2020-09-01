<?php
require_once("connect.php");

if(isset($_POST['hid']))
{        
  $id=$_POST['hid'];

  $query="DELETE FROM news WHERE id='$id';";
  $result=mysqli_query($conn,$query);

  if($result==FALSE)
  echo "<script>window.alert('Oops! Sorry some error occurred while connecting to the daatabse. Please check your internet connection and try again.');</script>";
}
else if(isset($_POST['eid']))
{
  $id=$_POST['eid'];

  $query="DELETE FROM upcomingEvents WHERE id='$id';";
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