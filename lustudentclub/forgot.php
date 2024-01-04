<html>  
<head>  
    <title>Forgot Password</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<?php

include_once('lib/database.php');
include_once("SMTP/class.phpmailer.php");
include_once("SMTP/class.smtp.php");
$db=new database();
if(isset($_POST['pwdrst']))
{
  $email = $_POST['email'];
  $check_email = "select email from users where email='$email'";
  $res = $db->select($check_email);
  if($res != false)
  {
    
    $message = '<div>
     <p><b>Hello!</b></p>
     <p>You are recieving this email for password reset.</p>
     <br>
     <p><button class="btn btn-primary"><a href="http://localhost/lustudentclub/passwordreset.php?secret='.base64_encode($email).'">Reset Password</a></button></p>
     <br>
     <p>If you did not request a password reset, no further action is required.</p>
    </div>';


    $email = $email; 
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;                 
    $mail->SMTPSecure ="tls";      
    $mail->Host = 'smtp.googlemail.com';
    $mail->Port = 587; 
    $mail->Username = "umama9037@gmail.com";
    $mail->Password = "yaxypynygxbdiuxp";
    $mail->FromName = "LU Students Club";
    $mail->AddAddress($email);
    $mail->Subject = "Reset Password";
    $mail->isHTML( TRUE );
    $mail->Body =$message;

    if($mail->send())
    {
      $msg = "please check your email!";
    }
  }
  else
  {
    $msg = "We can't find a user with this eamil";
  }
}

?>
<body>
<div class="container">  
    <div class="table-responsive">  
      <h3 align="center">Forgot Password</h3>
      <div class="box">
        <form id="validate_form" method="post" >  
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" name="email" id="email" placeholder="Enter Email" required data-parsley-type="email" data-parsley-trigger="keyup" class="form-control" />
            </div>
            <div class="form-group">
              <input type="submit" id="login" name="pwdrst" value="Send email" class="btn btn-warning" />
            </div>
            <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
        </form>
      </div>
   </div>
  </div>
</body>
</html>