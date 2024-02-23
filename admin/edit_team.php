<?php include "lib/database.php" ?>
<!DOCTYPE HTML>
<html lang="bn">
<head>
<title>Admin create club</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
<?php include('includes/header.php');?>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Create Package </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Update Team</h3>
  	        	  <div class="errorWrap"><strong>ERROR</strong></div>
			<div class="succWrap"><strong>SUCCESS</strong></div>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <?php
                        //reference id
                          if(isset($_GET['edit_clubid'])){
                            $edit_clubid=$_GET['edit_clubid'];
                          }
                        
                        ?>

						<?php 
						//club team update
						 $db=new database();

						 if(isset($_POST['submit'])){

							  $clubname=$_POST['club_name'];
							  $member_name=$_POST['member_name'];
							  $member_designation=mysqli_escape_string($db->link,$_POST['member_designation']);
							  $file=$_FILES['member_image']['name'];
							  $temp_file=$_FILES['member_image']['tmp_name'];
							  $main_image="images/".$file;

							  if(empty($clubname) || empty( $member_name)){
								echo "field must not be empty";
							  }if(!empty($file)){
                                move_uploaded_file($temp_file,$main_image);
                                $update_query="update club_team
                                               set
                                               member_name ='$member_name',
											   member_designation='$member_designation',
                                               member_image='$main_image'
                                               where id='$edit_clubid'";

								$update_team=$db->update($update_query);
								if($update_team){
									echo "<script>alert('update success')</script>";
								}else{
									echo "<script>alert('something wrong')</script>";

								}

							  }else{

                                $update_query="update club_team
                                set
                                member_name ='$member_name',
								member_designation='$member_designation'
                                where id='$edit_clubid' ";

                 $update_team=$db->update($update_query);
                 if($update_team){
                     echo "<script>alert('update success')</script>";
                 }else{
                     echo "<script>alert('something wrong')</script>";

                 }


                              }


                              }
						?>

							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							  
								 <?php 
                                 //select for edit

                                  
						 $select_query="select  club_team.*,clublist.club_name
                         from club_team
                         inner join clublist on club_team.club_id=clublist.id 
                         where club_team.id=$edit_clubid ";
					    $read_club_team=$db->select($select_query);
						if($read_club_team){
							
							while($result_club_team=$read_club_team->fetch_assoc()){			
							
                                 
                                 
                                 
                                 ?>
							   <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Club Name</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $result_club_team['club_name']; ?>" class="form-control1" name="club_name"  placeholder="Club Name" readonly required>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Member Name</label>
									<div class="col-sm-8">
										<input type="text"  value="<?php echo $result_club_team['member_name']; ?>"  class="form-control1" name="member_name"  placeholder="Member Name" required>
									</div>
								</div>

                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Member Designation</label>
									<div class="col-sm-8">
										<input type="text"  value="<?php echo $result_club_team['member_designation']; ?>"  class="form-control1" name="member_designation"  placeholder="Member Designation" required>
									</div>
								</div>

                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <img style="width:100px;height:100px" src="<?php echo $result_club_team['member_image']; ?>" />
                                    </div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Member Image</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="member_image"  placeholder="Member Image" >
									</div>
								</div>

                                <?php }}?>

								



								<button type="submit" name="submit" class="btn-primary btn">Update</button>

								
			</div>
		</div>
						
					
						
						
						
					</div>
					
					</form>

     
      

      
      <div class="panel-footer">
		
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include('includes/footer.php');?>
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
					<?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>