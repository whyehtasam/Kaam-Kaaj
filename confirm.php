<?php
include 'config.php';
include 'track.php';
// include 'sms.php';
// include 'rendermsg.php';


session_start();
$h = $_SESSION['hire'];
if(isset($_POST['confirm'])){
  // sendmsg($hire, $msghire);
  // sendmsg($worker, $msgworker);
  header("location success.php");
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

  
  <!--font-icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
  

  <title>KAAM KAAJ</title>


  <style>
    .cont {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10px;
    }

    .table {
      width: 50%;

    }

    /* .btn{
      display: block;
    } */
    .confirm-btn {
      text-align: center;
    }
  </style>


   
   
  </head>
  <body>
    <!-- navbar -->
  <!-- class="navbar bg-dark" data-bs-theme="dark" -->
  <?php
  @include 'templates/navbar.php';
?>
  <!-- Navbar end -->

  <!-- body -->
          <div class="cont">
        <table class="table table-striped">
            <tr>
                <th scope="row">Worker</th>
                <td><?php echo $h->wname ?></td>
            </tr>
            <tr>
                <th scope="row"> Profession</th>
                <td><?php echo $h->proff ?></td>
            </tr>
            <tr>
                <th scope="row">Date</th>
                <td><?php echo $h->date ?></td>
            </tr>
            <tr>
                <th scope="row">Time</th>
                <td><?php echo $h->time ?></td>
            </tr>
            <tr>
                <th scope="row">Hired By</th>
                <td><?php echo $h->hname ?></td>
            </tr>
            <tr>
                <th scope="row">Your Contact No.</th>
                <td><?php echo $h->mob ?></td>
            </tr>
            <!-- <tr>
                <th scope="row">Advance Payment </th>
                <td><?php echo $h->base_p ?></td>
            </tr> -->
            
        </table>
        </div>
        <div class="md-12 confirm-btn">
        <a href="invoice.php" class="btn btn-dark">Confirm</a>
  </div>
  <!-- body end -->
 
  <!-- footer -->
  <?php
  @include 'templates/footer.php';
?>
<!-- footer end -->



  <!--Bootstrap-js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

   
    
  </body>
<!--Bootstrap-js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>