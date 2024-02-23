<?php include "lib/database.php" ;?>
<?php include "lib/session.php" ;
 Session:: init();

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <link rel="stylesheet" href="css/formstyle.css">
    </head>
    <body>

     <?php 
        $db=new Database();
        if($_SERVER['REQUEST_METHOD'] =='POST'){
            $email=$_POST['email'];
            $pass= $_POST['pass'];
            $query= "SELECT * from user_admin WHERE email='$email' AND pass= '$pass' ";
            $result= $db->select($query);
            if($result != false){
                $value=$result->fetch_array();
                Session::set("login",true);
                Session::set("email",$value['email']);
                Session::set("pass",$value['pass']);
                Session::set("usertype",$value['usertype']);
                Session::set("fname",$value['fname']);
                Session::set("lname",$value['lname']);
                header("Location:dashboard.php");
            }else{
                echo"<script>alert('email or password not match!')</script>";
            }
        }  
     
     
     ?>
       
        <!-- Form Area -->
        <div class="form-area">
            <div class="container">
                <h4>Admin Log In</h4>
                <div class="sign-up-form">
                    <form action="" method="post">
                        <div class="single-input">
                            <label>Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="single-input">
                            <label>Password</label>
                            <input type="password" name="pass">
                        </div>
                        <input type="submit" name="submit" class="btn" value="log in">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>