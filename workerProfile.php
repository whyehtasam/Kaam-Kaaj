<?php
include 'config.php';
if (isset($_POST['det'])) {
    $wid = $_POST['det'];
    $sql = "SELECT * FROM `worker` WHERE `uid` = '$wid'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
    $sqli = "SELECT `hire`.`hirer`, `hire`.`date`, `address`.`locality` FROM `hire`  inner join `address` on `hire`.`aid` = `address`.`aid`where `hire`.`wid` = '$wid';";
    $get = mysqli_query($db, $sqli);
    
}


?>
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
    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <!-- <link rel="stylesheet" href="css/workers2.css"> -->
    <link rel="stylesheet" href="css/workerProfile.css">

    <!--font-icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

</head>

<body style="background-color: rgb(236,236,236);">

    <!-- Navbar -->

    <?php
    @include_once 'templates/navbar.php';
    ?>
    <!-- Navbar end -->

    <!-- body -->
    <div class="main-con">
        <div class="card" style="width: 45rem; border-radius: 1rem;">
            <div class="card-body">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" class="rounded-circle img-thumbnail profile-pic" alt="...">

                <h3 class="card-title"><span class="name"><?php echo $row['fname'] . " " . $row['lname']; ?></span></h3>
            </div>
            <div class="col-md-12 " class="table-responsive">
                <table class="table table-hover mb-0">


                    <tbody>
                        <tr>
                            <th scope="row" class="col-6">Profession</th>
                            <td colspan="2" class="col-6">: <span><?php echo $row['profession']; ?></span> </td>

                        </tr>
                        <tr>
                            <th scope="row" class="col-6">Rating</th>
                            <td colspan="2" class="col-6">: <span>4.1</span></td>

                        </tr>
                        <tr>
                            <th scope="row" class="col-6">Date of Birth</th>
                            <td colspan="2" class="col-6">: <span><?php echo $row['dob'] ?></span></td>

                        </tr>
                        <tr>
                            <th scope="row" class="col-6">Gender</th>
                            <td colspan="2" class="col-6">: <span><?php echo $row['gender'] ?></span></td>

                        </tr>
                        <tr>
                            <th scope="row" class="col-6">Base Price</th>
                            <td colspan="2" class="col-6">: <span><?php echo $row['price'] ?></span></td>

                        </tr>
                        <tr>
                            <th scope="row" class="col-6">Address</th>
                            <td colspan="2" class="col-6">: <span> <?php echo $row['address'] ?></span></td>

                        </tr>
                        <tr>
   

                            <table class="table table-hover" style="text-align: center;">
                                <tbody>
                                    <tr>
                                        <th colspan="3" class="text-center p-3">Work History</th>

                                    </tr>
                                    <tr>
                                        <th class="text-center">Hired By</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Address</th>
                                    </tr>
<?php while($list = $get->fetch_assoc()){?>
                                    <tr>
                                        <td class="col-4"><span><?php echo $list['hirer'];?></span></td>
                                        <td class="col-4"><span><?php echo $list['date'];?></span></td>
                                        <td class="col-4"><span><?php echo $list['locality'];?></span></td>
                                    </tr>

<?php } ?>
                                </tbody>
                            </table>
                        </tr>

                    </tbody>
                </table>
     
            </div>
            <div class="card-body" id="btn">
                <div class="sub-btn">
                    <!-- <a style="text-decoration: none; color: inherit;" class="mx-2" type="submit" name="hire" id="hire" class="btn btn-dark">
                        <button type="submit" name="hire" id="hire" class="btn btn-dark">Hire</button>Hire </a>
                     <a  style="text-decoration: none; color: inherit;" class="mx-2" type="button" class="btn btn-outline-danger"> -->
                        <!-- <button type="button" class="btn btn-outline-danger">Cancel</button>Cancel</a> -->
                </div>

            </div>
        </div>

    </div>

    <!-- footer -->
    <?php
    @include_once 'templates/footer.php';
    ?>
    <!-- footer end -->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>