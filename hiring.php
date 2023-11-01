<?php
@include 'config.php';
include 'track.php';
include 'rand.php';
session_start();


if(isset($_POST['hire'])){
  
    $h = $_SESSION['hire'];
  $h ->hid =   $hid = generateRandomString(9);
  $h ->aid =   $aid = generateRandomString(9);
  $h ->wid =   $wid = $_POST['hire'];
  $h ->uid  =  $uid = $_SESSION['logid'];
  $h ->hname =    $by = $_POST['by'];
  $h ->date =  $date = $_POST['date'];
  $h ->time =  $time = $_POST['time'];
  $h ->hno  =  $hno = $_POST['hno'];
  $h ->floor = $floor = $_POST['floor'];
  $h ->street =$street = $_POST['street'];
  $h ->land =  $land = $_POST['land'];
  $h ->mob  =  $mob = $_POST['mob'];
  $h ->local  =$local = $_POST['local'];
  $h ->pin  =  $pin = $_POST['pin'];

  $sql = "SELECT `hid` FROM `hire` WHERE `wid` = '$wid' && `date` = '$date'";
  $result = mysqli_query($db, $sql);
  if($result->num_rows == 0){
  $sqlh = "INSERT INTO `hire`(`hid`, `uid`, `wid`, `aid`, `hirer`,`alt_mob`, `date`, `t_from`) VALUES ('$hid','$uid','$wid','$aid','$by','$mob','$date','$time')";
  $sqla = "INSERT INTO `address`(`aid`, `house_no`, `floor`, `street`, `landmark`, `locality`, `pincode`, `hid`) VALUES ('$aid','$hno','$floor','$street','$land','$local','$pin','$hid')";
  $addr = mysqli_query($db, $sqla);
  $hire = mysqli_query($db, $sqlh);
  if($hire && $addr){
      header("location: confirm.php");

  }
  }
  if($result->num_rows > 0){
  $_SESSION['errTime'] = "Worker not available on $date";
  header("location: hiringdetail.php");

  echo $result->num_rows;
  }

}

?>