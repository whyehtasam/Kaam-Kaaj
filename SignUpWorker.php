<?php
include 'config.php';
session_start();
if (!isset($_SESSION['logid'])) {
  header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Worker</title>
    <!--Bootstrap-css-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!--Stylesheet-->
    <!-- <link rel="stylesheet" href="/css/services.css"> -->
    <link rel="stylesheet" href="css/SignUp.css">
    <!-- <link rel="stylesheet" href="css/home.css"> -->
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
    <script>

    </script>

</head>

<body>
    <!-- navbar -->

    <?php
  @include 'templates/navbar.php';
    ?>
<!-- navbar end -->
    <!-- form -->
    <div class="container" id="container" >
        <p class="text-lg-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register Yourself !</p>

        <form action="demo.php" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
               
                <label for="inputFirstName" class="form-label">First Name</label> <span>*</span>
                <input type="text" name="fname" id="fname" class="form-control" id="inputFirstName">
            </div>
            <div class="col-md-6">
             
                <label for="inputLastName" class="form-label">Last Name</label> <span>*</span>
                <input type="text" name="lname" id="lname" class="form-control" id="inputLastName">
            </div>
            <div class="col-md-6">
                
                <label for="inputbirthdate" class="form-label">Birthdate</label> <span>*</span>
                <input type="date" name="dob" id="dob" class="form-control" id="inputbirthdate" placeholder="MM/DD/YYYY">
            </div>
            <div class="col-md-6">
               
                <label for="inputState" class="form-label">Gender</label> <span>*</span>
                <select name="gender" id="gender" id="inputGender" class="form-select">
                    <option selected>Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
            </div>
           
            <!-- <div class="col-md-12">
              
                <label for="inputEmail4" class="form-label">Email</label> <span>*</span>
                <input type="email" name="email" id="email" class="form-control" id="inputEmail4" placeholder="example@gmail.com">
            </div> -->

            <div class="col-md-6">
               
                <label for="inputPassword4" class="form-label">Password</label> <span>*</span>
                <input type="password" name="password" id="password"class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                
                <label for="confirmPassword" class="form-label">Confirm Password</label> <span>*</span>
                <input type="password" class="form-control" id="confirmPassword">
            </div>
            <div class="col-md-6">
               
                <label for="inputContact" class="form-label">Contact No.</label> <span>*</span>
                <input type="tel" name="contact" id="contact" class="form-control" id="inputContact" placeholder="+91-">
            </div>
            <div class="col-md-6">
               
                <label for="inputAadhar" class="form-label">Aadhar No.</label> <span>*</span>
                <input type="text" name="adhaar" id="adhaar" class="form-control" id="inputAadhar" placeholder="0000-0000-0000">
            </div>
            <div class="col-lg-4">
              
                <label for="inputProfession" class="form-label">Profession</label> <span>*</span>
                <select id="inputProfession"name="profession" id="profession"  class="form-select">
                    <option selected>Choose...</option>
                    <option>Carpenter</option>
                    <option>Chef</option>
                    <option>Electrician</option>
                    <option>Maid</option>
                    <option>Mason</option>
                    <option>Painter</option>
                    <option>Plumber</option>
                    <option>Sweeper</option>
                </select>
            </div>
            <div class="col-lg-4">
               
                <label for="inputPicture" class="form-label">Upload Picture</label> <span>*</span>
                <input type="file" name="photo" id="photo" class="form-control" id="inputPicture">

            </div>
            
            <div class="col-lg-4">
               
               <label for="inputPicture" class="form-label">Upload Aadhar</label> <span>*</span>
               <input type="file" name="adhaarphoto" id="adhaarphoto" class="form-control" id="inputPicture">

           </div>
           <div class="col-lg-4">
               
                <label for="inputDocument" class="form-label">Upload Document</label> <span>*</span>
                <input type="file" name="affidavit" id="affidavit" class="form-control" id="inputDocument">

            </div>
            <div class="col-md-8">
               
                <label for="inputAddress" class="form-label">Address</label> <span>*</span>
                <input type="text" name="address" id="address" class="form-control" id="inputAddress" placeholder="e.g: New Delhi">
            </div>

            <div class="col-md-4">
                <label for="inputAddress2" class="form-label">Area/Locality</label> <span>*</span>
                <input type="text" class="form-control" id="inputAddress2" placeholder="" name="locality">
            </div>


            <div class="col-md-4">
               
                <label for="inputCity" class="form-label">City</label> <span>*</span>
                <input type="text" name="city" id="city" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
               
                <label for="inputState" class="form-label">State</label> <span>*</span>
                <select name="state" id="state" id="inputState" class="form-select">
                    <option selected>Choose...</option>

                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Ladakh">Ladakh</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>


                </select>
            </div>
            <div class="col-md-3"> 
                <label for="inputZip" class="form-label">Pin Code</label><span>*</span>
                <input type="text" name="pincode" id="pincode" class="form-control" id="inputZip">
            </div>

            <div class="col-3">
                <label for="inputZip" class="form-label">Base Price</label><span>*</span>
                <input type="text" name="price" id="price" class="form-control" id="inputZip">   
            </div>
        <div class="col-4">
                <label for="inputZip" class="form-label">Experience</label><span>*</span>
                <input type="text" name="experience" id="experience" class="form-control" id="inputZip">
                
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
                <button type="submit" name="apply" id="apply" class="btn btn-dark">Register</button>
            </div>
            <div class="col-12">

                <label class="form-check-label" for="gridCheck">
                    Already registered ? <a href="Login.html" style="text-decoration: none;" id="gridCheck"> Login</a>
                </label>

            </div>
        </form>


    </div>

    
    <!-- </footer> -->
    <?php
  @include 'templates/footer.php';
    ?>
    <!-- footer end  -->



</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>