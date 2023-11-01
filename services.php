<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Services</title>
    <!--Bootstrap-css-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha284-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" /> -->

    <!--Stylesheet-->
    <!-- <link rel="stylesheet" href="css/services.css"> -->
    <link rel="stylesheet" href="css/home.css">

    <!--font-icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd12uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Bootstrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha284-pprn2072KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv2qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

         <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  

   <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

</head>
<body>
    <!-- navbar -->
    <?php
    @include_once 'templates/navbar.php';
    ?>
  <!-- Navbar end -->


  <div class="container-fluid">

    <!-- heading -->
    <div class="serv-head col-md-12" style="text-align: center;">
    <h1 class="display-3">Services</h1>
</div>
    <!-- row-1 -->


    <div class="row justify-content-evenly p-2">
        <div class="col-2 w-auto">
            <div class="card text-center m-3" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/workers.png" alt="" width="150px">
                    <h5 class="card-title">Mason</h5>
                    <p class="card-text" style="display: inline-block;">Need a Help ? </p>
                    <form action="proff.php" method="POST" >
                    <button type="submit" name="proff" value="Mason" class="btn btn-outline-dark btn-sm">Hire</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-2 w-auto">
            <div class="card text-center m-3" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/sweeper-working.png" alt="" width="150px">
                    <h5 class="card-title">Sweeper</h5>
                    <p class="card-text" style="display: inline-block;">Need a Help ? </p>
                    <form action="proff.php" method="POST" >
                    <button type="submit" name="proff" value="Sweeper" class="btn btn-outline-dark btn-sm">Hire</button></form>
                </div>
            </div>
        </div>

        <div class="col-2 w-auto">
            <div class="card text-center m-3" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/plumber.png" alt="" width="150px">
                    <h5 class="card-title">Plumber</h5>
                    <p class="card-text" style="display: inline-block;">Need a Help ? </p>
                    <form action="proff.php" method="POST" >
                    <button type="submit" name="proff" value="Plumber" class="btn btn-outline-dark btn-sm">Hire</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-2 w-auto">
            <div class="card text-center m-3" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/painter.png" alt="" width="150px">
                    <h5 class="card-title">Painter</h5>
                    <p class="card-text" style="display: inline-block;">Need a Help ? </p>
                    <form action="proff.php" method="POST" >
                    <button type="submit" name="proff" value="Painter" class="btn btn-outline-dark btn-sm">Hire</button>
                    </form>
                </div>
            </div>
            <div class="col-2 w-auto"></div>
        </div>
    </div>

    <!-- row-2 -->
    <div class="row justify-content-evenly p-2">
        <div class="col-2 w-auto">
            <div class="card text-center m-3" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/mechanic.png" alt="" width="150px">
                    <h5 class="card-title">Mechanic</h5>
                    <p class="card-text" style="display: inline-block;">Need a Help ? </p>
                    <form action="proff.php" method="POST" >
                    <button type="submit" name="proff" value="Mechanic" class="btn btn-outline-dark btn-sm">Hire</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-2 w-auto">
            <div class="card text-center m-3" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/electrician.png" alt="" width="150px">
                    <h5 class="card-title">Electrician</h5>
                    <p class="card-text" style="display: inline-block;">Need a Help ? </p>
                    <form action="proff.php" method="POST" >
                    <button type="submit" name="proff" value="Electrician" class="btn btn-outline-dark btn-sm">Hire</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-2 w-auto">
            <div class="card text-center m-3" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/cooking.png" alt="" width="150px">
                    <h5 class="card-title">Cook</h5>
                    <p class="card-text" style="display: inline-block;">Need a Help ? </p>
                    <form action="proff.php" method="POST" >
                    <button type="submit" name="proff" value="Cook" class="btn btn-outline-dark btn-sm">Hire</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-2 w-auto">
            <div class="card text-center m-3" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/carpenter.png" alt="" width="150px">
                    <h5 class="card-title">Carpenter</h5>
                    <p class="card-text" style="display: inline-block;">Need a Help ? </p>
                    <form action="proff.php" method="POST" >
                    <button type="submit" name="proff" value="Carpenter" class="btn btn-outline-dark btn-sm">Hire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- footer -->
   <?php
    @include_once 'templates/footer.php';
    ?>
<!-- footer end -->

  
    <!--Bootstrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>