<?php
include 'config.php';
session_start();
if (isset($_POST['proff'])) {
  $proff = $_POST['proff'];
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
  <link rel="stylesheet" href="css/proff.css">

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
  <?php
  @include_once 'templates/navbar.php';
  ?>
  <!-- Navbar end -->

  <!-- body -->

  <div class="container-fluid">



    <div class="row first-row homePageImg">
      <!--Job search-->
      <form action="workers.php" method="POST">

        <div class="col-md-4 text-center job-search">
          <!-- <label for="workType">What: </label> -->
          <input id="proff" type="text" name="proff" placeholder="Carpenter/ Plumber/ Electrician etc." value="<?php echo $proff ?>" readonly>
        </div>

        <div class="col-md-2 text-center job-search">
          <input id="location" type="number" name="pin" placeholder="Pincode">
        </div>

        <div class="col-md-2 text-center job-search">
          <input id="location" type="text" name="area" placeholder="Area">
        </div>

        <div class="col-md-2 text-center job-search">
          <input class="btn btn-primary" type="submit" id="search" name="search" value="search">
        </div>
      </form>

      
    </div>

  </div>

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
      windows.location.href = 'services.php';
    }
  </script>

  <script src="/js/kaam.js"></script>

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

</body>
<!--Bootstrap-js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>