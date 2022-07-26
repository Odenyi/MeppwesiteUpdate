<?php
$Err =$name=$email=$password=$passwordconfirm= "";
include '../dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['signup'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordconfirm = $_POST['passwordconfirm'];

    // while ($row_agents){
    //     echo 1;
    // }
    $count = [];
    $stmt_user_email= $pdo->prepare("SELECT name, email FROM users WHERE email=?");
    $stmt_user_email->execute([$email]);
    $row_user_email = $stmt_user_email->fetchAll(PDO::FETCH_ASSOC);
    if ($password ==  $passwordconfirm ){
        foreach ($row_user_email as $row){            
            if($email == $row['email']){
                array_push($count, 1);
            }else{
                array_push($count, 0);
            }
        }
        if (in_array(1, $count)){
            $Err = '<span x-data ="{display:true}" x-init = "setTimeout(() => display = false,3000)" x-show ="display" class="alert alert-danger mb-4"> The user already exists</span>';
        }else{
            $stmt_insert_user = $pdo->prepare("INSERT INTO users (`name`, `email`, `password`, `created_at`) VALUES('$name', '$email', ?, NOW())");
            $stmt_insert_user->execute([md5($password)]);
            $Err = '<span x-data ="{display:true}" x-init = "setTimeout(() => display = false,3000)" x-show ="display" class="alert alert-sm alert-success mb-4">Thank you for signing up with us. An email will be sent to you once your account has been verified</span>';
        }
    }else{
        $Err = '<span class="alert alert-sm alert-danger mb-4"x-data ="{display:true}" x-init = "setTimeout(() => display = false,3000)" x-show ="display">Error!! The passwords do not match</span>';
        
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

    <!-- alpine js for flash messages -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <title>Register</title>
  </head>
  <body>

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('images/dataanalytics.png');"></div>
    <div class="contents">

      <div class="container">
        <!-- show display messages -->
      <?php if(!empty($Err)){
      echo $Err;
    } ?>
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase">Register <strong>Mepp</strong></h3>
              </div>
              <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="your-name" id="username" name="username" value="<?php echo $name?>" required>
                </div>
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="email" value="<?php echo $email?>" required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="password" value="<?php echo $password?>"required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password Confirmation</label>
                  <input type="password" class="form-control" placeholder="confirmation password" id="password" name="passwordconfirm" value="<?php echo $passwordconfirm?>" required>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="index.php" class="forgot-pass">Have an account Login?</a></span> 
                </div>

                <input type="submit" value="Register" name ="signup" class="btn btn-block py-2 btn-primary">
                
              
                
                
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