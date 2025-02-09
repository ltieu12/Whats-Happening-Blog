<?php
  session_start();
  if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("location: post.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>What's Happening - Create Account</title> <!-- Change the webpage title -->
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>What's Happening</h1> <!-- Change the navigation top bar title -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- Change the navigation titles and links to the correct pages in each <li> item -->
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="events.php"><span>Events</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <!-- Change the dropdown titles for Events categories (include querystring with category fields to display events with chosen category) -->
              <li><a href="events.php">All Events</a></li>
              <li><a href="events.php?category=Music">Music</a></li>
              <li><a href="events.php?category=Art+Culture"><span>Art+Culture</span></a></li>
              <li><a href="events.php?category=Sports">Sports</a></li>
              <li><a href="events.php?category=Food">Food</a></li>
              <li><a href="events.php?category=Fund Raiser">Fund Raiser</a></li>
            </ul>
          </li>

          <li><a href="groups.php">Community Groups</a></li>
          <li><a href="about.php">About</a></li>
          <!-- Add additional link to posts on nav bar -->
          <li><a href="post.php">Post Event</a></li>
          <!-- Add dropdown menu for Login/Logout option -->
          <li class="dropdown"><a href="login.php"><span>Login</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Create Account</h1> <!-- Change the title to "Create Account" -->
          </div>
        </div>

        <div class="form mt-5">
          <form action="createAccount.php" method="post" role="form">
            <!-- Create input fields to get group information -->
            <p><strong>Tell us about your group:</strong></p>
            <div class="form-group py-1">
              <input type="text" class="form-control" name="group" id="group" placeholder="Your Community Group" required>
            </div>
            <div class="form-group py-1">
              <input type="text" class="form-control" name="type" id="type" placeholder="What type of group are you?" required>
            </div>
            <div class="form-group py-1">
              <input type="text" class="form-control" name="contactName" id="contactName" placeholder="Provide a Contact Name for your group" required>
            </div>
            <div class="form-group py-1">
              <input type="text" class="form-control" name="contactEmail" id="contactEmail" placeholder="Provide a Contact Email for your group" required>
            </div>
            <div class="form-group py-1">
              <input type="text" class="form-control" name="groupImage" id="groupImage" placeholder="Group Image Name" required>
            </div>
            <div class="form-group py-1">
              <textarea type="text" class="form-control" name="groupDesc" id="groupDesc" placeholder="Tell us about your group" required></textarea>
            </div>

            <!-- Create input fields to create username and password -->
            <p><strong>Create an Account:</strong></p>
            <div class="form-group py-1">
              <input type="text" class="form-control" name="newUsername" id="newUsername" placeholder="Create a Username" required>
            </div>
            <!-- Change the input type to password so it does not show when user is typing. Source: https://www.w3schools.com/tags/att_input_type_password.asp -->
            <div class="form-group py-1">
              <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Create a Password" required>
            </div>
            <!-- Using bootstrap to style button. Source: https://getbootstrap.com/ -->
            <div class="text-center"><button class="px-4 py-2 rounded border border-light bg-success text-white" type="submit">Submit</button></div> <!-- Change the button to "Submit" -->
          </form>
        </div><!-- End Contact Form -->
        <?php
          // retrieve info of the new group
          if (isset($_POST['group'])) {
            if (!(empty($_POST['group']))) {
              $group = $_POST['group'];
            }
          }
          if (isset($_POST['type'])) {
            if (!(empty($_POST['type']))) {
              $type = $_POST['type'];
            }
          }
          if (isset($_POST['contactName'])) {
            if (!(empty($_POST['contactName']))) {
              $contactName = $_POST['contactName'];
            }
          }
          if (isset($_POST['contactEmail'])) {
            if (!(empty($_POST['contactEmail']))) {
              $contactEmail = $_POST['contactEmail'];
            }
          }
          if (isset($_POST['groupImage'])) {
            if (!(empty($_POST['groupImage']))) {
              // add the path where the image is stored (and .jpg extension if users do not include it)
              $image = "files/images/Groups/" . $_POST['groupImage'];
              if (!(substr($image, -3) == "jpg")) {
                $image = $image.".jpg";
              }
            }
          }
          if (isset($_POST['groupDesc'])) {
            if (!(empty($_POST['groupDesc']))) {
              $description = $_POST['groupDesc'];
            }
          }

          // retrieve data for new account
          if (isset($_POST['newUsername'])) {
            if (!(empty($_POST['newUsername']))) {
              $username = $_POST['newUsername'];
            }
          }
          if (isset($_POST['newPassword'])) {
            if (!(empty($_POST['newPassword']))) {
              $password = $_POST['newPassword'];
            }
          }

          if (isset($username) && isset($password)) {
            // connect to database
            require_once 'serverlogin.php';
            $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);
            if ($conn->connect_error) {
              die("Connection error" . $conn->connect_error);
            }
            // get all username from database
            $usernameQuery = "SELECT Username FROM Login";
            $usernameList = mysqli_query($conn, $usernameQuery);
            $duplicateUsername = false;
            
            if ($usernameList->num_rows > 0) {
              while ($row = $usernameList->fetch_assoc()) {
                // if input username is the same as one of usernames in the database (username already exists), print error message
                if ($username == $row['Username']) {
                  $duplicateUsername = true;
                  $error = <<<HTML
                  <div class="text-center">
                    <p class="pt-4">Username already exists, please try again</p>
                  </div>
                  HTML;
                  echo $error;
                  break;
                }
              }
            }

            // if there is no username found in the database -> can create a new account
            if (!$duplicateUsername) {
              if (isset($group) && isset($type) && isset($contactName) && isset($contactEmail) && isset($image) && isset($description)) {
                // insert new group info into group table first to get GroupID
                $groupStatement = $conn->prepare("INSERT INTO Groups (GroupName, GroupImage, GroupType, GroupDesc, ContactName, ContactEmail) VALUES (?, ?, ?, ?, ?, ?)");
                $groupStatement->bind_param("ssssss", $group, $image, $type, $description, $contactName, $contactEmail);
                $groupStatement->execute();
                // get new groupID using insert_id
                // source: https://www.php.net/manual/en/mysqli.insert-id.php
                $groupID = $conn->insert_id;

                // insert new account info into login table
                $loginStatement = $conn->prepare("INSERT INTO Login (GroupID, Username, Password) VALUES (?, ?, ?)");
                $loginStatement->bind_param("iss", $groupID, $username, $password);
                $loginStatement->execute();
                // get new accountID using insert_id
                // source: https://www.php.net/manual/en/mysqli.insert-id.php
                $accountID = $conn->insert_id;

                $groupStatement->close();
                $loginStatement->close();

                // set up session variable and start a session
                $_SESSION['login'] = true;
                $_SESSION['AccountID'] = $accountID;
                $_SESSION['GroupID'] = $groupID;
                header("location: post.php");
                exit;    
              }
            }
            $conn->close();
          }
        ?>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

  <div class="footer-content">
      <div class="container">

      <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">About What's Happening</h3> <!-- Change the title for the footer -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
            <!-- Change the navigation to about.php -->
            <p><a href="about.php" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <!-- Change the navigation titles and links the same as navigation top bar -->
              <li><a href="index.php"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="events.php"><i class="bi bi-chevron-right"></i> Events</a></li>
              <li><a href="groups.php"><i class="bi bi-chevron-right"></i> Community Groups</a></li>
              <li><a href="about.php"><i class="bi bi-chevron-right"></i> About</a></li>
              <!-- Add additional link to posts in footer -->
              <li><a href="post.php"><i class="bi bi-chevron-right"></i> Post Event</a></li>
              <li><a href="login.php"><i class="bi bi-chevron-right"></i> Login</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Events</h3> <!-- Change the Categories title to Events --> 
            <ul class="footer-links list-unstyled">
              <!-- Change the titles for Events categories dropdown list, and change navigation link to events of the category -->
              <li><a href="events.php"><i class="bi bi-chevron-right"></i> All Events</a></li>
              <li><a href="events.php?category=Music"><i class="bi bi-chevron-right"></i> Music</a></li>
              <li><a href="events.php?category=Art+Culture"><i class="bi bi-chevron-right"></i> Art+Culture</a></li>
              <li><a href="events.php?category=Sports"><i class="bi bi-chevron-right"></i> Sports</a></li>
              <li><a href="events.php?category=Food"><i class="bi bi-chevron-right"></i> Food</a></li>
              <li><a href="events.php?category=Fund Raiser"><i class="bi bi-chevron-right"></i> Fund Raiser</a></li>

            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>