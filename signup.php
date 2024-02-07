
<?php include 'lib/database.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | LU Student Clubs</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <!-- Header Start -->
    <header class="header-area header-fixed" id="header-area">
        <div class="container">
            <div class="header fix">
                <div class="logo f-left">
                    <a href="index.php">LU STUDENT CLUBS</a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="index.php">login</a></li>
                        <li><a href="signup.php">signup</a></li>
                        <li><a href="index.php">LU Clubs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Bannar Start -->
    <section class="banner-area" style="background-image: url(assets/img/lubg.jpeg);">
        <div class="container">
            <div class="banner">
                <h1>LU STUDENT CLUB</h1>
                <p>If you don't have an account, please create one.</p>
            </div>
        </div>
    </section>
    <!-- Bannar End -->

    <!-- Sign Up Start -->

    <?php 
    
        $db=new Database();
        $errorname=$errorpass=$erroremail="";
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $student_id=$_POST['student_id'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $department=$_POST['department'];

            if(strlen($password)<8)
            {
                $errorpass = "password should be at least 8 digit";
            }
            elseif(preg_match("/^([A-z])*[^\s]\1*$/",$name)){
                $errorname = "Error! Only Alphabets and Whitespace are allowed";
            }
            elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $erroremail= "Sorry! Your Email is Invalid";
            }
            elseif($name =='' || $student_id=='' || $email=='' || $password=='' || $department==''){
                echo " must not be empty";
            }
            else{
                $emailquery= "select *from  users  where email= '$email' limit 1";
                $mailcheck= $db->select($emailquery);

                if($mailcheck != false){
                $erroremail = "email already exist";
                }
                else{
                    $query="insert into users(name,student_id,email,password,department)
                    values('$name','$student_id','$email','$password','$department')";
                    $insert_user=$db->insert($query);
                    if($insert_user){
                        echo "<script>alert('registration success')</script>";
                    }else{
                        echo "<script>alert('Somthing went wrong')</script>";
                    }
                }
            }
        }
    ?>

    <section class="signup-area">
        <div class="container">
            <div class="signup-form">
                <h4 class="title">Sign Up Now</h4>
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Your Name">
                    <span><?php echo $errorname;  ?></span>
                    <input type="text" name="student_id" placeholder="Student ID">
                    <input type="email" name="email" placeholder="Your Email">
                    <span><?php echo $erroremail;  ?></span>
                    <input type="password" name="password" placeholder="Your password">
                    <span><?php echo $errorpass;  ?></span>
                    <input type="text" name="department" placeholder="Your Department">
                    <input type="submit" name="submit" class="btn" value="Sign Up">
                </form>
                <h4>You are Sign up already?</h4><a href="index.php">login here</a>
            </div>
        </div>
    </section>
    <!-- Sign Up End -->

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