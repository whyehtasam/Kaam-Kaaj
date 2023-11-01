<?php
include 'config.php';
include 'track.php';
session_start();
$err = "";
if (!isset($_SESSION['logid'])) {
  header("location: login.php");
}else {
  $wid = $_SESSION['worker'];
  $sql = "SELECT * FROM `worker` WHERE uid = '$wid' ";
  $result = mysqli_query($db, $sql);
  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $h = new hire;
    $_SESSION['hire'] = $h;
    $h->set();
     $h->wnum = $row['contact'];
    $h->wname = $row['fname'] . " " . $row['lname'];
    $h->proff = $row['profession'];
    $h->base_p = $row['price'];
    $h->contact = $row['contact'];
  }
  if(isset($_SESSION['errTime']))
    $err = $_SESSION['errTime'];
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>Welcome to Firebase Hosting</title> -->


  <!--Bootstrap-css-->
  <title>kaam-kaaj-homePage</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <!--Stylesheet-->
  <!-- <link rel="stylesheet" href="css/home.css"> -->
  <link rel="stylesheet" href="css/hiringdetail.css">


  <!--font-icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

  <title>KAAM KAAJ</title>



</head>

<body>
  <!-- navbar -->
  <?php
  @include 'templates/navbar.php';
  ?>
  <!-- Navbar end -->

  <!-- body -->

  <div class="mb-3 container cont">
  <p  class="worker-det"><?php echo $row['fname'] . " " . $row['lname'] ?></p>
  <p class="worker-det"><?php echo $row['profession'] ?></p>
  <form action="hiring.php" method="post" class="row g-3 needs-validation" >
    <label for="" class="form-label">Date : </label>
    <input type="date" name="date" id="date" class="form-control">

    <label for="" class="form-label">Time :</label>
    <input type="time" name="time" id="time" class="form-control">

    <label for="" class="form-label">Your Name :</label>
    <input type="text" name="by" id="by" class="form-control">

    <label for="" class="form-label">House No. :</label>
    <input type="text" name="hno" id="hno" class="form-control">

    <label for="" class="form-label">Floor :</label>
    <input type="number" name="floor" id="floor" class="form-control">

    <label for="" class="form-label">Street :</label>
    <input type="text" name="street" id="street" class="form-control">

    <label for="" class="form-label">Nearby/Landmark :</label>
    <input type="text" name="land" id="land" class="form-control">

    <label for="" class="form-label">Mobile No. :</label>
    <input type="number" name="mob" id="mob" class="form-control">

    <label for="" class="form-label">Locality :</label>
    <input type="text" name="local" id="local" class="form-control">

    <label for="" class="form-label">Pin code :</label>
    <input type="number" name="pin" id="pin" class="form-control">

    <button class="btn btn-dark" type="submit" name="hire" id="hire" value="<?php echo $row['uid'] ?>"> HIRE </button>
  </form>
  </div>
  <input type="text" value="<?php echo $err; ?>" style="display:none"  name="err" id="err"  >
  <!-- body end -->

  <!-- footer -->
  <?php
  @include 'templates\footer.php';
  ?>
  <!-- footer end -->

<script>
let get = document.getElementById("err").value;
if (get != ""){
  alert("thiw worker is not available at this date");
}

</script>

  <!--Bootstrap-js-->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->


</body>
<!--Bootstrap-js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>