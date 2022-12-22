<?php
session_start();
// db config -------------------------------------------------
$servername = "localhost";
$username = "id20014872_root";
$password = "hrtpmM!_Z|#@#2T/";
$dbname = "id20014872_abc_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_SESSION['username'])){
    header("location: index.php");
}

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =md5($_POST['password']);
    $cpassword =md5($_POST['cpassword']);

    if($password == $cpassword){
        $sql="SELECT * FROM users where email='$email'";
        $result=mysqli_query($conn, $sql);

        if(!$result->num_rows > 0){
            $sql="INSERT INTO users (name, username, email, password)
                VALUES('$name', '$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                echo "<script>alert('Register completed')</script>";
                $name="";
                $username="";
                $email="";
                $_POST['password'] ="";
                $_POST['cpassword'] ="";
            }else{
                header('location:index.php');
                exit();
            }

        }else{
    echo "<script>alert('EMAIL SUDAH ADA KAK')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>IoT Monitoring</title>
  <link rel="icon" type="image/png" href="img/favicon.ico" />
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/coming-soon.min.css" rel="stylesheet">
</head>

<body>
  <div class="overlay"></div>
  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3"><i class="fa fa-adn"></i> IoT Monitoring</h1>
            <form action="" method ="POST" class="login-email">
            <div class="input-group input-group-newsletter" style="padding:10px 0;">
                <input type="text" name="name" class="form-control" placeholder="Nama" aria-label="Username" aria-describedby="basic-addon" required autofocus>
              </div>
              <div class="input-group input-group-newsletter" style="padding:10px 0;">
                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon" required autofocus>
              </div>
              <div class="input-group input-group-newsletter" style="padding:10px 0;">
                <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon" required autofocus>
              </div>
              <div class="input-group input-group-newsletter" style="padding:10px 0;">
                <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon" required autofocus>
              </div>
              <div class="input-group input-group-newsletter" style="padding:10px 0;">
                <input type="password" name="cpassword" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon" required autofocus>
              </div>
              <div class="input-group input-group-newsletter" style="padding:10px 0;">
                <button class="btn btn-secondary" type="submit" name="register">Register</button>
              </div>
              <div class="text-center">
                <a class="small" href="index.php">Have an Account!</a>
                </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/vide/jquery.vide.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/coming-soon.min.js"></script>
</body>

</html>