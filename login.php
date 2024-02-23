<!DOCTYPE html>

<?php include 'lib/database.php';?>
<?php 
    include 'lib/session.php';
    Session:: init();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LU Student Clubs</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
     <!-- Header Start -->
     <header class="header-area">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="index.php">LU Student Club</a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#login-area">login</a></li>
                        <li><a href="signup.php">signup</a></li>
                        <li><a href="#login-area">LU Clubs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Bannar Start -->
    <section class="banner-area"  style="background-image: url(assets/img/lubg.jpeg)">
        <div class="container">
            <div class="banner">
                <h1>LU STUDENT CLUB</h1>
                <p>To see your desired club, please login first.</p>
            </div>
        </div>
    </section>
    <!-- Bannar End -->

    <!-- Log In Start -->

    <?php 
          $db=new Database();
	     if($_SERVER['REQUEST_METHOD'] =='POST'){
			 $student_id=$_POST['student_id'];
			  $password= $_POST['password'];
			  $query= "SELECT * from users WHERE student_id='$student_id' AND password= '$password' ";
			  $result= $db->select($query);
			  if($result != false){
				  $value=$result->fetch_array();
				   Session::set("login",true);
                   Session::set("student_id	",$value['student_id']);
	   		       Session::set("password",$value['password']);
                   //Session::set("email",$value['email']);
	               //Session::set("id",$value['id']);

				   header("Location:luclublist.php");
				}
                else{
				   echo"<script>alert('student_id or password not match!')</script>";
			    }
		 }   
	?>

    <section class="login-area" id="login-area">
        <div class="container">
            <div class="login-form">
                <h4 class="title">Log In Now</h4>
                <form action="" method="post">
                    <input type="text" name="student_id" placeholder="Student ID">
                    <input type="password" name="password" placeholder="Your password">
                    <input type="submit" name="submit" class="btn" value="Log In">
                </form>
				<p><a href="forgot.php">Forgot password?</a></p>
                <h5>You are not sign in?</h5><a href="signup.php">Signup here</a>
            </div>
        </div>
    </section>
    <!-- Log In End -->

    <!-- Footer Start -->
    <footer class="lus footer-area">
            <div class="copy">
                <p>&copy; 2023, All rights are reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
</body>
</html>