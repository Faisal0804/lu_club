<?php include "lib/database.php" ?>
<?php 	$db=new database(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Registration Form</title>
        <link rel="stylesheet" href="css/formstyle.css">
    </head>
    <body>
        <!-- PHP Block -->
        <?php
            $fname=$lname=$email=$pass=$conpass=$dept=" ";
            $error=$errname=$errpass=$erremail=$errdept=" ";

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $conpass=$_POST['conpass'];
                $dept=$_POST['dept'];

                if(empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($conpass) || empty($dept)){
                    $error = "Field Must Not Be Empty!";
                }elseif(!preg_match("/^[A-z]*$/", $fname) || !preg_match("/^[A-z]*$/", $lname)){
                    $errname= "Only Alphabets are allowed.";
                }elseif($pass<8){
                    $errpass = "Password length shoulb be atleast 8 digits.";
                }elseif($pass!=$conpass){
                    $errpass = "Passwords are not matched.";
                }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $erremail = "Email is not valid.";
                }else{
                    $insert="insert into user_admin(fname,lname,email,pass,dept,usertype) values('$fname','$lname','$email','$pass','$dept','user')";
                    $insert_result=$db->insert($insert);
                    if( $insert_result){
                        echo "<script> alert('insert success')</script>";
                    }else{
                        echo "<script> alert('something wrong')</script>";
                    }
                }
            }
        ?>

        <!-- Form Area -->
        <div class="form-area">
            <div class="container">
                <h4>Registered As A Sub Admin</h4>
                <div class="sign-up-form">
                    <form action="" method="post">
                        <span><?php echo $error?></span>
                        <div class="first-input">
                            <div class="single-input">
                                <label>First Name</label>
                                <input type="text" name="fname">
                                <span><?php echo $errname?></span>
                            </div>
                            <div class="single-input">
                                <label>Last Name</label>
                                <input type="text" name="lname">
                                <span><?php echo $errname?></span>
                            </div>
                        </div>
                        <div class="single-input">
                            <label>Email</label>
                            <input type="email" name="email">
                            <span><?php echo $erremail?></span>
                        </div>
                        <div class="first-input">
                            <div class="single-input">
                                    <label>Password</label>
                                    <input type="password" name="pass">
                                    <span><?php echo $errpass?></span>
                                </div>
                                <div class="single-input">
                                    <label>Confirm Password</label>
                                    <input type="password" name="conpass">
                                    <span><?php echo $errpass?></span>
                                </div>
                        </div>
                        <div class="single-input">
                            <label>Department</label>
                            <select name="dept">
                                <option value="CSE">Computer Science & Engineering</option>
                                <option value="EEE">Electic & Electronics Engineering</option>
                                <option value="English">Einglish</option>
                                <option value="Civil">Civil Engineering</option>
                                <option value="BBA">Bechalor Business Administration</option>
                                <option value="Architechture">Architechture</option>
                                <option value="Islamic Studies">Islamic Studies</option>
                            </select>
                        </div>
                        <input type="submit" class="btn" value="sign up">
                    </form>
                </div>
                <h5>Already Registered?<a href="sub_login.php" >Log In Here!</a></h5>
            </div>
        </div>
    </body>
</html>