<?php
include 'config.php';
include 'track.php';
session_start();

if (isset($_SESSION['search'])) {
  $src = $_SESSION['search'];
  $sql = "SELECT * FROM `worker` WHERE `profession` = '$src->proff' AND `pincode` = '$src->pin' AND `locality` LIKE '%$src->area%'";
  $result = mysqli_query($db, $sql);
}

if (isset($_POST['hire'])) {
  $_SESSION['worker'] = $_POST['hire'];
  header("location: hiringdetail.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to Firebase Hosting</title>


  <!--Bootstrap-css-->
  <title>kaam-kaaj-homePage</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <!--Stylesheet-->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/workers2.css">

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
  <!-- Navbar -->

  <?php
  @include_once 'templates/navbar.php';
  ?>
  <!-- Navbar end -->

  <!-- body -->


  <div class="card mb-3 col-sm-5 profile-shadow" style="max-width: 540px;">


    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>


        <div class="row g-0">
          <div class="col-lg-4 profile-img">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" class="img-fluid rounded-start m-auto" alt="...">
          </div>
          <!-- details -->
          <div class="col-lg-8">
            <div class="card-body">
              <h5 class="card-title" id="workerName"><?php echo $row['fname'] . " " . $row['lname']; ?></h5>

              <table class="table table-responsive-md ">
                <tr>
                  <td>Profession :</td>
                  <td><span id="workType"> <?php echo $row['profession'];  ?></span></td>
                </tr>
                <tr>
                  <td>Location :</td>
                  <td><span id="workType"> <?php echo $row['locality'];  ?></span></td>
                </tr>
                <tr>
                  <td>Base Price :</td>
                  <td><span id="price"><?php echo $row['price'];  ?></span></td>
                </tr>
                <tr>
                  <td>Gender :</td>
                  <td><span id="price"><?php echo $row['gender'];  ?></td>
                </tr>
                <tr>
                  <td>Rating :</td>
                  <td>4.1</td>
                </tr>
              </table>

              <div class="card-body" id="btn">
                <div class="btn">

                  <form action="" method="POST">
                    <button type="submit" name="hire" id="hire" class="btn btn-dark" value="<?php echo $row['uid'] ?>">Hire</button>
                  </form>
                  <form action="workerProfile.php" method="POST">

                    <button type="submit" id="det" name="det" class="btn btn-outline-success" value="<?php echo $row['uid'] ?>">Details</button>
                  </form>

                </div>

              </div>

            </div>
          </div>
        </div>

      <?php
      }
    } else {


      ?>
      <h4>No Workers</h4>
    <?php } ?>
              
  </div>

  <!-- footer -->
  <?php
  @include_once 'templates/footer.php';
  ?>
  <!-- footer end -->

<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
  }
</script>

  <!--Bootstrap-js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
<!--Bootstrap-js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>