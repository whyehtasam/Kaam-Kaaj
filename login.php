<?php
include 'config.php';
session_start();
$_SESSION['cooike'] = $cookie_name = "user";
if(isset($_COOKIE[$cookie_name])) {
   $_SESSION['logid'] =  $_COOKIE[$cookie_name];

    header("location: ./");
}
$_SESSION['logged'] = false;
if(isset($_POST['log'])){
    $who = $_POST['who'];
    $type = $_POST['type'];
    $empho = $_POST['empho'];
    $pass = $_POST['pass'];
    $sql = "SELECT `uid` FROM `$who` WHERE $type = '$empho' &&  password = '$pass' ";
    // echo $sql;
    $result = mysqli_query($db, $sql);
    if($result->num_rows == 1){
        $row = mysqli_fetch_array($result);
        $_SESSION['logid'] = $row['uid'];
        $cookie_value = $row['uid'];
        if(isset($_POST["remb"]))
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header("location: ./");
        // echo "logging";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-css-->
    <title>kaam-kaaj-homePage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!--Stylesheet-->
    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <link rel="stylesheet" href="css/login.css">

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

</head>

<body>
   

<?php
  @include 'templates/navbar.php';
?>
    <!-- Navbar end -->

        <div class="container" id="container">
            <p class="text-lg-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-4">LogIn Yourself !</p>
    
            <form action="" method="POST" class="row g-3">
    
                <select name="who" id="Who">
                    <option default>Login Type</option>
                    <option value="user" >User</option>
                    <option value="worker">Worker</option>
                </select><br><br>
                <select name="type" id="type">
                    <option default>Select By</option>
                    <option value="email" >By Email</option>
                    <option value="contact">By Phone No. </option>
                </select><br><br>
                <div class="col-md-12">
                  
                    <label for="inputEmail4" class="form-label">Email</label><span>*</span>
                    <input type="text" class="form-control" id="empho" name="empho" placeholder="Email/Phone" style="text-align: left;">
                </div>
                <div class="col-md-12">
                   
                    <label for="inputPassword4" class="form-label">Password</label><span>*</span>
                    <input type="password"  id="pass" name="pass" class="form-control" .>
                </div>
                <div class="form-check">
                    
                    <input type="checkbox"  id="remb" name="remb" class="form-check-input " .>
                    <label for="remb" class="form-label">Remember Me</label>
                </div>
                <div class="col-12">
    
                    <label class="form-check-label" for="gridCheck">
                        Forget Password ? <a href="#" style="text-decoration: none;">click here.</a>
                    </label>
    
                </div>
                <div class="col-lg-12" id="btn-login">
                    <button type="submit" id="log" name="log" class="btn btn-dark w-100">Login</button>
                </div>
                <div class="col-lg-12" id="btn-create">
                   <button  class="btn btn-outline-dark  btn w-100"> <a class="create-btn" href="SignUpCustomer.php" style="text-decoration: none; " id="btn-create">Create a New Account</a></button>
                </div>
               
                 <!-- <div class="col-lg-12" id="btn-create">
                     <button type="submit" class="btn btn-outline-dark btn w-100">
                         <a href="/html/SignUpWorker.html" style="text-decoration: none;" id="btn-create">Create a New
                             Account</a>
                     </button>
                 </div> -->
             </form>
         </div>



    <!-- footer -->

    <?php
  @include 'templates/footer.php';
?>

    <!-- <div class="row justify-content-around bg-dark text-white pt-2 pb-5 footer mt-20 footer">
        <div class="col-md-4 pt-4">
            <h5 class="pb-2">Kaam Kaaj</h5>
            <p>Kaam Kaaj is a socio-economic platform with a mission to provide job opportunities to daily wage workers
                and to
                connect them with employers. Our platform aims to uplift the weaker section of society by empowering
                individuals
                with the tools and resources needed to secure a stable source of income.</p>
        </div>

        <div class="col-md-2 pt-4">
            <h5 class="pb-2">Important Links</h5>
            <p>
                <a href="#" class="link-light text-decoration-none">Our Privacy Policy</a> <br>
                <a href="#" class="link-light text-decoration-none">Terms and Conditions</a> <br>
                <a href="#" class="link-light text-decoration-none">Our Team</a> <br>
                <a href="#" class="link-light text-decoration-none">Help</a> <br>
                <a href="#" class="link-light text-decoration-none">Feedback</a> <br>
            </p>
        </div>

        <div class="col-md-3 pt-4" id="contact">
            <h5 class="pb-2">Contact Us</h5>
            <p>
                Jamia Millia Islamia <br>
                Okhla Vihar <br>
                New Delhi - 110025 <br>
                <i class="bi bi-telephone"></i> : 000-000-0000
            </p>
            <a href="#"><i class="bi bi-instagram social-icon"></i></a>
            <a href="#"><i class="bi bi-facebook social-icon"></i></a>
            <a href="#"><i class="bi bi-twitter social-icon"></i></a>
            <a href="#"><i class="bi bi-whatsapp social-icon"></i></a>
        </div>
    </div>

    <div class="row bg-dark text-white text-center p-2">
        <div class="col-12">
            <p>Copyright &copy; 2020-2023 by Kaam Kaaj. All Right Reserved.</p>
        </div>
    </div>
    </div> -->
    <!-- footer end-->



    <!--Bootstrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>