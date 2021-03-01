<?php
session_start();

require_once('inc/config.php');

if (isset($_POST['login'])) {
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email     = trim($_POST['email']);
    $password   = trim($_POST['password']);

    $md5Password = md5($password);

    $sql = "select * from tbl_users where email = '" . $email . "' and password = '" . $md5Password . "'";
    $rs = mysqli_query($conn, $sql);
    $getNumRows = mysqli_num_rows($rs);
    if ($getNumRows == 1) {
      $getUserRow = mysqli_fetch_assoc($rs);
      unset($getUserRow['password']);

      $_SESSION = $getUserRow;

      header('location:index.php');
      exit;
    } else {
      $errorMsg = "Wrong email or password";
    }

    /*include('../config.php');

    $result = $dbConn->query("SELECT * FROM tbl_users ORDER BY id DESC");


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      $t = $row['user_role_id'];

      if ($t == "1") {
        header('location:admin/index.php');
        exit;
      } elseif ($t == "2") {
  
        header('location:company/index.php');
        exit;
      } elseif ($t == "3") {
        header('location:collage/index.php');
        exit;
      } elseif ($t == "4") {

        header('location:student/index.php');
        exit;
      } else {
        $errorMsg = "Wrong email or password";
      }
    }
    */
  }
}

if (isset($_GET['logout']) && $_GET['logout'] == true) {
  session_destroy();
  header("location:index.php");
  exit;
}


if (isset($_GET['lmsg']) && $_GET['lmsg'] == true) {
  $errorMsg = "Login required to access dashboard";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Webstrot Admin : Widget</title>

  <!-- ================= Favicon ================== -->
  <!-- Standard -->
  <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
  <!-- Retina iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
  <!-- Retina iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
  <!-- Standard iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
  <!-- Standard iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

  <!-- Styles -->
  <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/lib/unix.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

  <div class="unix-login">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="login-content">
            <div class="login-logo">
              <a href="index.html"><span>EMV Login</span></a>
            </div>
            <div class="login-form">
              <h4>Administratior Login</h4>
              <?php
              if (isset($errorMsg)) {
                echo '<div class="alert alert-danger">';
                echo $errorMsg;
                echo '</div>';
                unset($errorMsg);
              }
              ?>
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input id="exampleInputEmail1" type="email" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input id="exampleInputPassword1" type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="login">Sign in</button>

                <div class="register-link m-t-15 text-center">
                  <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>