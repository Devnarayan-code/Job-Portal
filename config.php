<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'job_portal';
$message = "";

$conn = mysqli_connect($server, $username, $password, $database); // ch cnn

if ($conn->connect_error) {
   die("Connection failed:" . $conn->connect_error);
}
echo "";

if (isset($_POST['signup'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['phone'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `user`(`name`, `email`, `number`, `password`) VALUES ('$name','$email','$number','$password')";
   if (mysqli_query($conn, $sql)) {
      echo "Records inserted successfully.";
   } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }
}

session_start();
if (isset($_POST['login'])) {
   $issuccess = 0;
   $email = $_POST['email'];
   $password = $_POST['password'];

   $query = "SELECT * FROM user WHERE `email`='$email' AND `password`='$password' ";
   $result = mysqli_query($conn, $query);

   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   if (mysqli_num_rows($result) == 1) {
      $issuccess = 1;
      header("location: index.php");
   } else {
      $error = 'emailid or password is incorrect';
   }
}
if ($issuccess = 0) {
   $message = "Login or signup";
} else {
   if (isset($_POST['job'])) {
      $cname = $_POST['cname'];
      $pos = $_POST['pos'];
      $jdesc = $_POST['jdesc'];
      $skills = $_POST['skills'];
      $CTC = $_POST['CTC'];

      // $sql = "INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$jdesc','$skills','$CTC')";
      $sql = "INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$jdesc','$skills','$CTC')";

      if (mysqli_query($conn, $sql)) {
         echo "New Job Posted";
      } else {
         echo "ERROR: Failed to post the Job  $sql. " . mysqli_error($conn);
      }
   }

   if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $qual = $_POST['qual'];
      $apply = $_POST['apply'];
      $year = $_POST['year'];

      $sql = "INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
      mysqli_query($conn, $sql);
   }
}
