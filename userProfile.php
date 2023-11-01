<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="/css/userProfileStyle.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
   

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  

  <!--Stylesheet-->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/workers2.css">
  
  <!--font-icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  
  
  <!-- font poppins -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
  </style>

</head>

<body style="background-color: rgb(236,236,236);">

     <!-- Navbar -->

  <?php
  @include_once 'templates/navbar.php';
  ?>
  <!-- Navbar end -->

  <!-- body -->

    <div class="card" style="width: 45rem; border-radius: 1rem;">
        <img src="/images/user.png" class="rounded-circle" class="img-thumbnail" alt="...">
        <div class="card-body">
            <h3 class="card-title"><span class="name">Abdullah</span></h3>
        </div>
        <div class="col-md-12 " class="table-responsive">
            <table class="table table-hover mb-0">


                <tbody>
                    <tr>
                        <th scope="row" class="col-6">Profession</th>
                        <td colspan="2" class="col-6">: <span></span> </td>

                    </tr>
                    <tr>
                        <th scope="row" class="col-6">Rating</th>
                        <td colspan="2" class="col-6">: <span></span></td>

                    </tr>
                    <tr>
                        <th scope="row" class="col-6">Date of Birth</th>
                        <td colspan="2" class="col-6">: <span></span></td>

                    </tr>
                    <tr>
                        <th scope="row" class="col-6">Gender</th>
                        <td colspan="2" class="col-6">: <span></span></td>

                    </tr>
                    <tr>
                        <th scope="row" class="col-6">Base Price</th>
                        <td colspan="2" class="col-6">: <span></span></td>

                    </tr>
                    <tr>
                        <th scope="row" class="col-6">Address</th>
                        <td colspan="2" class="col-6">: <span></span></td>

                    </tr>
                    <tr>

                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th colspan="3" class="text-center p-3">Work History</th>

                                </tr>
                                <tr>
                                    <th class="text-center">Hired By</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Address</th>
                                </tr>

                                <tr>
                                  <td class="col-4"><span></span></td>
                                  <td class="col-4"><span></span></td>
                                  <td class="col-4"><span></span></td>
                                </tr>


                </tbody>
            </table>
            </tr>

            </tbody>
            </table>
        </div>
        <div class="card-body" id="btn">
            <div class="btn">
                <a href="https://example.com" style="text-decoration: none; color: inherit;" class="mx-2">
                    <button type="submit" name="hire" id="hire" class="btn btn-dark">Hire</button>
                  </a>
                  <a href="https://example.com" style="text-decoration: none; color: inherit;" class="mx-2">
                    <button type="button" class="btn btn-outline-danger">Cancle</button>
                  </a>
            </div>
              
        </div>
    </div>

     <!-- footer -->
  <?php
  @include_once 'templates/footer.php';
  ?>
<!-- footer end -->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</html>