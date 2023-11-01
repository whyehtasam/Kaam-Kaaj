<?php
require_once 'config.php';
require 'rand.php';
session_start();
if(isset($_POST['apply'])){
$uid = generateRandomString(6);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
// $email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$profession = $_POST['profession'];
$address = $_POST['address'];
$locality = $_POST['locality'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$adhaar = $_POST['adhaar'];
$price = $_POST['price'];

  if (!empty($_FILES["photo"]["name"])) {
    $filename = basename($_FILES["photo"]["name"]);
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowtypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($filetype, $allowtypes)) {
      $imgi = $_FILES["photo"]["tmp_name"];
      $photo = addslashes(file_get_contents($imgi));
    }else{

      $statusMsg = "Sorry only specific files are allowed";
      }
  }else{
  $imgf_err = "Please select an gst file to upload";
     
  }

  if (!empty($_FILES["adhaarphoto"]["name"])) {
    $filename = basename($_FILES["adhaarphoto"]["name"]);
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowtypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($filetype, $allowtypes)) {
      $imgi = $_FILES["adhaarphoto"]["tmp_name"];
      $adhaarphoto = addslashes(file_get_contents($imgi));
    }else{

      $statusMsg = "Sorry only specific files are allowed";
      }
  }else{
  $imgf_err = "Please select an gst file to upload";
      header("location:fileerr.html");
  }

  if (!empty($_FILES["affidavit"]["name"])) {
    $filename = basename($_FILES["affidavit"]["name"]);
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowtypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($filetype, $allowtypes)) {
      $imgi = $_FILES["affidavit"]["tmp_name"];
      $affidavit = addslashes(file_get_contents($imgi));
    }else{

      $statusMsg = "Sorry only specific files are allowed";
      }
  }else{
  $imgf_err = "Please select an gst file to upload";
     
  }

  if (!empty($affidavit)&&!empty($photo)&&!empty($adhaarphoto)) {
   $sql = "INSERT INTO `worker`(`uid`, `fname`, `lname`, `dob`, `gender`, `password`, `contact`, `adhaar`,`adhaarphoto`, `photo`, `profession`, `affidavit`, `address`,`locality`, `city`, `state`, `pincode`,`price`) VALUES ('$uid','$fname','$lname','$dob','$gender','$password','$contact','$adhaar','$adhaarphoto','$photo','$profession','$affidavit','$address','$locality','$city','$state','$pincode','$price')";
    $result = mysqli_query($db, $sql);
    if ($result) {
      header("location:index.php");
    }
  }
}

echo "here";
?>
