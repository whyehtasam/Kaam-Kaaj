<?php
session_start();
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
  <link rel="stylesheet" href="css/AboutPage.css">

  <!--font-icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


  <!-- font poppins -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
  </style>

  <title>KAAM KAAJ</title>

<!-- 
 // update the version number as needed
  <script defer src="/__/firebase/9.17.2/firebase-app-compat.js"></script>
 // include only the Firebase features as you need
  <script defer src="/__/firebase/9.17.2/firebase-auth-compat.js"></script>
  <script defer src="/__/firebase/9.17.2/firebase-database-compat.js"></script>
  <script defer src="/__/firebase/9.17.2/firebase-firestore-compat.js"></script>
  <script defer src="/__/firebase/9.17.2/firebase-functions-compat.js"></script>
  <script defer src="/__/firebase/9.17.2/firebase-messaging-compat.js"></script>
  <script defer src="/__/firebase/9.17.2/firebase-storage-compat.js"></script>
  <script defer src="/__/firebase/9.17.2/firebase-analytics-compat.js"></script>
  <script defer src="/__/firebase/9.17.2/firebase-remote-config-compat.js"></script>
  <script defer src="/__/firebase/9.17.2/firebase-performance-compat.js"></script> -->
  <!-- 
      initialize the SDK after all desired features are loaded, set useEmulator to false
      to avoid connecting the SDK to running emulators.
    -->
  <!-- <script defer src="/__/firebase/init.js?useEmulator=true"></script> -->


</head>

<body>
  <!-- navbar -->
  <?php 
  @include_once 'templates/navbar.php'
  ?>
 
  <!-- Navbar end -->

  <!-- body -->

  <!-- about part -->


  <div class="row">
    <div class="col-md-12">
        <h1 class="text-center wlcm-heading">Welcome to KAAM KAAJ</h1>
    </div>
 </div>

 <div class="row justify-content-evenly">
  <div class="col-md-5">
       <h2 class="text-center about-subhead">About Us</h2>
       <p class="about-para"> Kaam Kaaj is a socio-economic platform with a mission to provide job opportunities to daily wage workers and to
        connect them with employers. Our platform aims to uplift the weaker section of society by empowering individuals
        with the tools and resources needed to secure a stable source of income.
        Our platform provides a unique solution for daily wage workers to find job opportunities that match their skills
        and availability. On the other hand, employers can access a pool of skilled and reliable workers for their
        short-term and long-term job requirements.
        We believe in creating a fair and equal opportunity for all and strive to create a positive impact in the lives of
        those we serve. With Kaam Kaaj, you can rest assured that you are not just finding a job but making a difference
        in the world.
        Join us today and be a part of the movement to uplift the weaker section of society. Together, we can make a
        brighter future for all.
  </p>
  </div>

  <div class="col-md-5">
    <div class="row">
    <div class="col-12">
      <h2 class="text-center about-subhead">Our Mission</h2>
      <p class="about-para">The mission of Kaam Kaaj is to provide job opportunities to daily wage workers and to connect them with employers,
        with the goal of uplifting the weaker section of society. Our platform empowers individuals with the tools and
        resources they need to secure a stable source of income and improve their quality of life. By creating a fair and
        equal opportunity for all, we aim to make a positive impact in the lives of those we serve and create a brighter
        future for all.</p>
    </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2 class="text-center about-subhead">Our Vision</h2>
        <p class="about-para">The vision of Kaam Kaaj is to create a world where everyone has access to a stable source of income and the
          opportunity to improve their quality of life. Our aim is to eliminate the barriers that prevent daily wage workers
          from finding meaningful employment and to create a fairer and more equitable society. We believe that by
          connecting these workers with employers and providing them with the necessary tools and resources, we can empower
          individuals to achieve their full potential and build a better future for all.</p>
      </div>
    </div>

  </div>
 </div>

 <!-- main section end -->
  
 <!-- privacy policy -->

 <div class="row privacy-section">
  <div class="col-12">
    <h2 id="privacy">Privacy Policy</h2>
    <p>
      <strong>Collection of Information:</strong> Kaam Kaaj collects information from users, including workers and
      employers, in several
      ways, including but not limited to creating an account, posting job listings or worker profiles, and using the
      platform. The information we collect may include names, contact information, job preferences, and other
      information relevant to the use of the platform.
    </p>
    <p>
      <strong>Use of Information:</strong> Kaam Kaaj uses the information collected to operate and improve the platform,
      to provide
      customer support, to send promotional materials and other communications, and to comply with legal obligations.
      The information may also be used to match workers with job opportunities and to provide personalized job
      recommendations to users.
    </p>
    <p>
      <strong>Sharing of Information:</strong> Kaam Kaaj will not sell, rent, or lease personal information to third
        parties. Information
        may be shared with third-party service providers who perform services on our behalf, such as hosting, payment
        processing, or marketing services. These service providers are required to protect personal information in
        accordance with this Privacy Policy. Information may also be shared with potential employers for the purpose of
        finding job opportunities for workers.
    </p>
    <p>
      <strong>Security of Information:</strong> Kaam Kaaj takes reasonable steps to protect the security of personal
      information,
      including using encryption and secure servers. However, no method of transmission over the internet or method of
      electronic storage is 100% secure, and we cannot guarantee the security of personal information.
    </p>
    <p>
      <strong>Access to Information:</strong> Users have the right to access and control their personal information.
      They may request
      access to their information and request that it be corrected or deleted by contacting us at [Insert contact
      information].
    </p>

    <p>
      <strong>Changes to Privacy Policy:</strong> Kaam Kaaj may update this Privacy Policy from time to time to reflect
      changes in our
      practices and services. We will notify users of any material changes by posting the revised Privacy Policy on the
      platform.
    </p>
    <p>
      By using the Kaam Kaaj platform, you acknowledge that you have read and understand this Privacy Policy and consent
      to the collection and use of your personal information as described. If you have any questions or concerns about
      this Privacy Policy, please contact us at [Insert contact information].

    </p>

    <p>
    <h2 id="terms">Terms and Conditions for Kaam Kaaj Users:</h2>
       <p>
       <b>Eligibility:</b> To use the Kaam Kaaj platform, you must be at least 18 years of age and able to form legally binding
      contracts under applicable law.
       </p>

      <p>
      <b>User Account:</b> You must create an account to use the platform. You are responsible for maintaining the
      confidentiality of your account information and for any and all activities that occur under your account.
       </p>
       <p>
      <b>User Content:</b> You are solely responsible for the content you post on the platform, including but not limited to
      job postings, resumes, and other information. You grant Kaam Kaaj a non-exclusive, transferable, sub-licensable,
      royalty-free, worldwide license to use, copy, modify, create derivative works based on, distribute, publicly
      display, and otherwise exploit your content in connection with the platform.
       </p>
       <p>
      <b>Proprietary Rights:</b> The Kaam Kaaj platform and all content and materials included on it, such as text, graphics,
      logos, images, and software, are the property of Kaam Kaaj or its licensors and are protected by copyright and
      other intellectual property laws. You may not use any content or materials on the platform for commercial purposes
      without the express written consent of Kaam Kaaj.
       </p>
       <p>
      <b>Disclaimer of Warranties:</b> The Kaam Kaaj platform is provided on an "as is" and "as available" basis. Kaam Kaaj
      makes no representations or warranties of any kind, express or implied, as to the operation of the platform or the
      information, content, materials, or products included on the platform.
       </p>
       <p>
      <b>Limitation of Liability:</b> In no event will Kaam Kaaj be liable for any damages of any kind arising from the use of
      the platform, including but not limited to direct, indirect, incidental, punitive, and consequential damages.

       </p>
       <p>
      <b>Indemnification:</b> You agree to indemnify and hold Kaam Kaaj and its affiliates, officers, agents, and employees
      harmless from any claim or demand, including reasonable attorneys' fees, made by any third party due to or arising
      out of your use of the platform, your violation of these Terms and Conditions, or your violation of any rights of
      another.
       </p>
       <p>
      By using the Kaam Kaaj platform, you agree to be bound by these Terms and Conditions. Kaam Kaaj reserves the right
      to modify these Terms and Conditions at any time without prior notice.

    </p>

    <p>We will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
    <p style="font-weight: bold; text-align: center;">Thanks For Visiting Our Site</p>
      
    <p style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">
      Have a nice day!
    </p>
  </div>
 </div>


 <!-- privacy policy end -->


  <!-- footer -->
  <?php 
  @include_once 'templates/footer.php'
  ?>
  <!-- footer end -->

  <!--Bootstrap-js-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/kaam.js"></script>

</body>

</html>