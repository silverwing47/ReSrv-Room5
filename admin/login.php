<?php
  ob_start();
  $conn =mysqli_connect("localhost","root","","db_resrv");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // $query="select * from tbl_admin where username='$username' and password='$pwd'";
?>

<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../login/css/mystyle.css">

    <!--====== BG CSS ======-->
    <link rel="shortcut icon" href="../assets/images/favico.png" type="image/png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/LineIcons.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/mydefault.css">
    <link rel="stylesheet" href="../assets/css/mystyle.css">

    <!-- MY CSS -->
    <link href="mystyle.css" rel="stylesheet" />

  </head>

  <body>
    <header id="home" class="header-area pt-100">

        <div class="shape header-shape-one">
            <img src="../assets/images/banner/shape/shape1.png" alt="shape">
        </div> <!-- header shape one -->

        <div class="shape header-shape-tow animation-one">
            <img src="../assets/images/banner/shape/shape2.png" alt="shape">
        </div> <!-- header shape tow -->

        <div class="shape header-shape-three animation-one">
            <img src="../assets/images/banner/shape/shape3.png" alt="shape">
        </div> <!-- header shape three -->



        <div class="login-reg-panel2">
          <center><h1>Admin Login</h1></center>
          <form
            class="form-horizontal mt-3"
            id="loginform"
            action="" method="POST"
          >
            <div class="row pb-4">
              <div class="col-12">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text bg-success text-white h-100"
                      id="basic-addon1"
                      ><i class="mdi mdi-account fs-4"></i
                    ></span>
                  </div>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="Username"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                    required=""
                    name = "logUser"
                  />
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text bg-warning text-white h-100"
                      id="basic-addon2"
                      ><i class="mdi mdi-lock fs-4"></i
                    ></span>
                  </div>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="Password"
                    aria-label="Password"
                    aria-describedby="basic-addon1"
                    required=""
                    name = "logPass"
                  />
                </div>
              </div>
            </div>
            <div class="row border-top border-secondary">
              <div class="col-12">
                <div class="form-group">
                  <div class="pt-3">
                    <a href="../index.html"><button class="btn btn-info" id="to-recover" type="button">Return Home</button></a>

                    <!-- <a href="index.html"
                      class="btn btn-success float-end text-white"
                      type="submit"
                    >
                      Login
                    </a> -->
                    <input class="btn btn-success float-end text-white" type="submit" value="Login" name="btnLogin">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="shape header-shape-fore">
            <img src="../assets/images/banner/shape/shape4.png" alt="shape">
        </div> <!-- header shape three -->

    </header>


    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      $(".preloader").fadeOut();
      // ==============================================================
      // Login and Recover Password
      // ==============================================================
      $("#to-recover").on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
      });
      $("#to-login").click(function () {
        $("#recoverform").hide();
        $("#loginform").fadeIn();
      });
    </script>

    <!--====== BACKGROUND JS ======-->
    <script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/scrolling-nav.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/aos.js"></script>
    <!--====== End of BACKGROUND JS ======-->

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <?php
      $con =mysqli_connect("localhost","root","","db_resrv");
      $err="";
      if($con){
        if(isset($_POST['btnLogin'])){
          $username=$_POST['logUser'];
            $pwd=$_POST['logPass'];
            $query="select * from tbl_admin where username='$username' and password='$pwd'";
            $result = mysqli_query($con,$query);
            $count = mysqli_num_rows($result);
            if($count ==0)
              echo "<script language='javascript'> alert('Incorrect username or password');</script>";
            else{
              $row=mysqli_fetch_assoc($result);
              $_SESSION['login']=$row['username'];
              header("Location: index.php");
            }
        }
        }

     ?>

  </body>
</html>
