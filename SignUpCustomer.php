<?php
include 'config.php';
include 'rand.php';


if(isset($_POST['reg'])){
    $uid = generateRandomString(6);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO `user`(`uid`, `fname`, `lname`, `contact`, `email`, `password`) VALUES ('$uid','$fname','$lname','$contact','$email','$password')";
    $result = mysqli_query($db, $sql);
    if($result){
        header("location: login.php");
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Customer</title>
    <!--Bootstrap-css-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha284-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" /> -->

    <!--Stylesheet-->
    <!-- <link rel="stylesheet" href="/css/services.css"> -->
    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <link rel="stylesheet" href="css/SignUp.css">
    
    <!--font-icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd12uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
     @include 'templates/navbar.php';
    ?>
    <!-- navbar ends -->


    <!-- container start -->
    
    <div class="container" id="container">
        <div class="col-md-12 ">
            <!-- h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 -->
            <p class="text-lg-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register Yourself !</p>

        </div>
<!-- form start-->

<form class="row g-3" action="" method="POST">
            <div class="col-md-6">
                
                <label for="inputFirstName" class="form-label">First Name</label> <span>*</span>
                <input type="text" class="form-control" name="fname" id="fname" onchange="valid('fname','errfname')">
                <p id="errfname" ></p>
            </div>
            <div class="col-md-6">
              
                <label for="inputLastName" class="form-label">Last Name</label> <span>*</span>
                <input type="text" class="form-control" name="lname" id="lname" onchange="valid('lname','errlname')" >
                <p id="errlname" ></p>
            </div>


            <div class="col-md-12">
                
                <label for="inputContact" class="form-label">Contact No.</label> <span>*</span>
                <input type="tel" class="form-control" name="contact" id="contact" placeholder="+91-" onchange="valid('contact','errcontact')">
                <p id="errcontact" ></p>
            </div>

            <div class="col-md-12">
                
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com" onchange="valid('email','erremail')">
                <p id="erremail" ></p>
            </div>
            <div class="col-md-6">
                
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" onchange="valid('password','errpassword')">
                <p id="errpassword" ></p>
            </div>
            <div class="col-md-6">
                
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" onchange="verify('password','confirmPassword','confirmPassword')">
                <p id="confirmPassword" ></p>
            </div>



            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        I agree all statements in <a href="#!" style="text-decoration: none;">Terms of service.</a>
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="text" name="reg" id="reg" class="btn btn-dark">Register</button>
            </div>
            <div class="col-12">

                <label class="form-check-label" for="gridCheck">
                    Already registered ? <a href="Login.html" style="text-decoration: none;" id="gridCheck">
                        Login</a>
                </label>

            </div>
        </form>         

        <!-- form end -->
<script>
    actBtn('#accept','reg');
    function actBtn(id,btn){
        const cb = document.querySelector(id,btn);
        console.log(cb.checked); 
        document.getElementById(btn).disabled = !cb.checked;
    }
    
    </script>
<script>
    function valid(id,txt){
        let inp = document.getElementById(id).value;
        let text = document.getElementById(txt).innerHTML;
       
        if(inp == ""){
            text = id + "is required";
            btn.disabled = false
        }
        else{
            btn.disabled = true;
        }

    }

    function verify(pass1,pass2,txt){
        let pass =  document.getElementById(pass1).value;
        let confirm = document.getElementById(pass2).value;
        let err = document.getElementById(txt).innerHTML;
        let btn = document.getElementById('reg');

        
    if(pass == confirm){
    btn.disabled = false;
    }
    }


    </script>
    </div>

    <!-- container end -->

    <!-- footer start -->

    <?php
  @include 'templates/footer.php';
    ?>

    <!-- footer end  -->




</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>