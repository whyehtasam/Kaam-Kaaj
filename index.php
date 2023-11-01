<?php
include 'config.php';
include 'track.php';
session_start();
// if (!isset($_SESSION['logid'])) {
//   header("location: login.php");
// }
if (isset($_POST['search'])) {
  $_SESSION['search'] = $src = new search();
  $src->proff =  $_POST['proff'];
  $src->pin = $_POST['pin'];
  $src->area = $_POST['area'];
  header("location: workers2.php");
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

  <!--Stylesheet-->
  <link rel="stylesheet" href="css/home.css">

  <!--font-icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

  <title>KAAM KAAJ</title>


  <script defer src="/__/firebase/init.js?useEmulator=true"></script>


</head>

<body>
  <!-- navbar -->
  <!-- class="navbar bg-dark" data-bs-theme="dark" -->
  <?php
  @include_once 'templates/navbar.php';
  ?>
  <!-- Navbar end -->

  <!-- body -->

  <div class="container">

    <div class="row first-row homePageImg">
      <!--Job search-->

      <form action="" method="POST">



                <div class="search-area">

                    <div class="col-md-8 text-center job-search">

                        <div class="col-md-4 text-center job-search">
                            <!-- <label for="workType">What: </label> -->
                            <input id="proff" type="text" name="proff" placeholder="Profession">
                        </div>

                        <div class="col-md-2 text-center job-search">
                            <input id="location" type="number" name="pin" placeholder="Pincode">
                        </div>

                        <div class="col-md-2 text-center">
                            <input id="location" type="text" name="area" placeholder="Area">
                        </div>

                    </div>

                </div>




                <div class="col-md-2 text-center job-search" id="btn-search">
                    <input type="submit" id="search" name="search" value="Search">
                </div>

            </form>

      <div class="col-lg-12 text-center">
        <h1 style="font-weight:bold;">Are you looking for a work/help?</h1>
        <h4>Don't worry,Kaam Kaaj is Here to help you</h4>


        <a class="btn btn-outline-dark first-row-btn" href="SignUpCustomer.php">HIRE</a>
        <a class="btn btn-outline-dark first-row-btn" href="SignUpWorker.php">WORK</a>
      </div>
    </div>


    <div class="row service-row1">
      <div class="col-12 text-center" id="services">
        <h1 class="">Services</h1>
      </div>

      <div class="service-container">
        <div class="services-list">
          <img src="images/carpenter.png" class=" service-img" alt="">
          <h5>Carpenter</h5>
        </div>
        <div class="services-list">
          <img src="images/electrician.png" class=" service-img" alt="">
          <h5>Electrician</h5>
        </div>
        <div class="services-list">
          <img src="images/mechanic.png" class=" service-img" alt="">
          <h5>Mechanic</h5>
        </div>
        <div class="services-list">
          <img src="images/painter.png" class=" service-img" alt="">
          <h5>Painter</h5>
        </div>
        <div class="services-list">
          <img src="images/plumber.png" class=" service-img" alt="">
          <h5>Plumber</h5>
        </div>
        <div class="services-list">
          <img src="images/cooking.png" class=" service-img" alt="">
          <h5>Cooking</h5>
        </div>
        <div class="services-list">
          <img src="images/sweeper-working.png" class=" service-img" alt="">
          <h5>Sweeper</h5>
        </div>
        <div class="services-list">
          <img src="images/workers.png" class=" service-img" alt="">
          <h5>Workers</h5>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <button type="button" class="btn btn-primary btn-dark services-row-btn" onclick="readmore();">Read more...</button>
        </div>
      </div>

      <script>
        function jobsearch(inp, arr) {
          /*the jobsearch function takes two arguments,
          the text field element and an array of possible job-search(autocomplete) values:*/
          var currentFocus;
          /*execute a function when someone writes in the text field:*/
          inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of job-search(autocomplete) values*/
            closeAllLists();
            if (!val) {
              return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "jobsearch-list");
            a.setAttribute("class", "jobsearch-items");
            /*append the DIV element as a child of the jobsearch container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
              /*check if the item starts with the same letters as the text field value:*/
              if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                b.style.backgroundColor = "red";
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/

                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                  /*insert the value for the jobsearch text field:*/
                  inp.value = this.getElementsByTagName("input")[0].value;
                  /*close the list of job-search(autocomplete) values,
                  (or any other open lists of job-search(autocomplete) values:*/
                  closeAllLists();
                });
                a.appendChild(b);
              }
            }
          });
          /*execute a function presses a key on the keyboard:*/
          inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "jobsearch-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
              /*If the arrow DOWN key is pressed,
              increase the currentFocus variable:*/
              currentFocus++;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 38) { //up
              /*If the arrow UP key is pressed,
              decrease the currentFocus variable:*/
              currentFocus--;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 13) {
              /*If the ENTER key is pressed, prevent the form from being submitted,*/
              e.preventDefault();
              if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
              }
            }
          });

          function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "jobsearch-active":*/
            x[currentFocus].classList.add("jobsearch-active");
          }

          function removeActive(x) {
            /*a function to remove the "active" class from all jobsearch items:*/
            for (var i = 0; i < x.length; i++) {
              x[i].classList.remove("jobsearch-active");
            }
          }

          function closeAllLists(elmnt) {
            /*close all jobsearch lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("jobsearch-items");
            for (var i = 0; i < x.length; i++) {
              if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
              }
            }
          }
          /*execute a function when someone clicks in the document:*/
          document.addEventListener("click", function(e) {
            closeAllLists(e.target);
          });
        }

        /*An array containing all the country names in the world:*/
        var Option = ["Barber", "Carpenter", "Electrician", "Labour", "Masion", "Mechanic", "Plumber"]
        var Option2 = ["shaheen bagh", "jullena", "jasola", "batla house", "zakir nagar", "abul fazal"]
        /*initiate the jobsearch function on the "workType" element, and pass along the countries array as possible jobsearch values:*/
        jobsearch(document.getElementById("workType"), Option);
        jobsearch(document.getElementById("location"), Option2)
      </script>
    </div>

  </div>


  <!-- FAQs -->

  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          What is Kaam Kaaj?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
          <code>.accordion-flush</code> class. This is the first item's accordion body.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          How can I hire a worker?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
          <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled
          with some actual content.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          How can I register myself to hire/get job?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
          <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening
          here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more
          representative of how this would look in a real-world application.
        </div>
      </div>
    </div>
  </div>

  <!-- FAQs end -->

  <!-- main conatiner end -->
  </div>

  <!-- footer -->
  <?php
  @include_once 'templates/footer.php';
  ?>
  <!-- footer end -->

  <script>
    function work() {
      // window.open(SignUpCustomer.php);
      windows.location.href = 'SignUpWorker.php';
    }

    function hire() {
      // window.open(SignUpCustomer.php);
      windows.location.href = 'SignUpCustomer.php';
    }

    function readmore() {
      // window.open(SignUpCustomer.php);
      location.href = 'services.php';
    }
  </script>

  <script src="/js/kaam.js"></script>

</body>
<!--Bootstrap-js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>