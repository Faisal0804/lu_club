<html>  
<head>  
    <title>Password Reset</title>
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
$db=new database();
if(isset($_POST['pwdrst']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpwd = $_POST['cpwd'];
  if($password == $cpwd)
  {
    $reset_pwd = "update users set password='$password' where email='$email'";
    $mainreset=$db->update($reset_pwd);
    if($mainreset)
    {
      $msg = 'Your password updated successfully <a href="index.php">Click here</a> to login';
    }
    else
    {
      $msg = "Error while updating password.";
    }
  }
  else
  {
    $msg = "Password and Confirm Password do not match";
  }
}

if($_GET['secret'])
{
  $email = base64_decode($_GET['secret']);
  $check_details = "select email from users where email='$email'";

  $res = $db->select($check_details);
  if($res !=false) 
    { ?>
<body>
<div class="container">  
    <div class="table-responsive">  
      <h3 align="center">Reset Password</h3><br/>
      <div class="box">
        <form id="validate_form" method="post" >  
          <input type="hidden" name="email" value="<?php echo $email; ?>"/>
          <div class="form-group">
          <label for="pwd">Password</label>
          <input type="password" name="password" id="pwd" placeholder="Enter Password" required 
          data-parsley-type="pwd" data-parsley-trigg
          er="keyup" class="form-control"/>
          </div>
          <div class="form-group">
            <label for="cpwd">Confirm Password</label>
            <input type="password" name="cpwd" id="cpwd" placeholder="Enter Confirm Password" required data-parsley-type="cpwd" data-parsley-trigg
            er="keyup" class="form-control"/>
          </div>
          <div class="form-group">
            <input type="submit" id="login" name="pwdrst" value="Reset Password" class="btn btn-info" />
          </div>
          
          <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
        </form>
      </div>
   </div>  
  </div>
<?php } } ?>
</body>
</html>