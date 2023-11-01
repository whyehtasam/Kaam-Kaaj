<?php ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Kaam-Kaaj</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="About.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
          <?php
          if(isset($_SESSION['logid'])){
            ?>
            <!-- profile icon -->
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LogOut</a>
          </li>
<?php
          }else{
            ?>
          
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
            </li>
            
          <?php
        }


?>
        </ul>

      </div>
    </div>
  </nav>
<?php ?>