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

if(isset($_POST['password']))
{
  $password=$_POST['password'];


  // echo "<script>window.alert('". md5($password) ."');</script>";

  $query="SELECT valueTitle FROM info WHERE keyTitle='password';";
  $result=mysqli_query($conn,$query);

  if($result==FALSE)
  echo "<script>window.alert('Oops! Sorry some error occurred while connecting to the daatabse. Please check your internet connection and try again.');</script>";

  $row1=mysqli_fetch_array($result);

  if($row1['valueTitle']==md5($password))
  {
    $_SESSION['isLogin']="true";
  }
  else
  {
    echo "<script>window.alert('Invalid Password.');</script>";

  }
}

else
{
  echo "<script>window.alert('Invalid Request.');</script>";

}

echo "<script>window.location.href='admin.php';</script>";

mysqli_close($conn); 
?>