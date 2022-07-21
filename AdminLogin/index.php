<?php 
$Err=$password=$email= "";
include '../dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$stmt_user = $pdo->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
	$stmt_user->execute([$email]);
	$row_user = $stmt_user->fetch(PDO::FETCH_OBJ);

	if ($stmt_user->rowCount() > 0){
		
			if (md5($pass) == $row_user->password){
				session_start();
				$_SESSION['userName'] = $row_user->name;
				$_SESSION['access_level'] = $row_user->access_level;
				$_SESSION['user_id'] = $row_user->user_id;
				header('location: ../Admin/index.php');
				
			}else{
				
				$Err = "<span class='alert alert-sm alert-danger mb-4'>You have entered the wrong password</span>";
			}
		}else{
				$Err = "<span class='alert alert-sm alert-warning mb-4'>Just a little longer. Your account is still under review</span>";
			}
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login #5</title>
  </head>
  <body>
    <?php if(!empty($Err)){
      echo $Err;
    } ?>

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase">Login to <strong>Mepp</strong></h3>
              </div>
              <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="email" value="<?php echo $email?>">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="password" value="<?php echo $password?>">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div>

                <input type="submit" value="Log In" name ="login" class="btn btn-block py-2 btn-primary">
                
                <span class="py-2"><a href="register.php" class="forgot-pass">Don't have an account Register?</a></span> 
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>