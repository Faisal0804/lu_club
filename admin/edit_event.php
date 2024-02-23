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
  	       <h3>Update Event</h3>
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

						//club event update
						 $db=new database();

						 if(isset($_POST['submit'])){

							  $event_title=$_POST['event_title'];
                              $event_start_date=$_POST['event_start_date'];
                              $event_end_date=$_POST['event_end_date'];
                              $event_start_time=$_POST['event_start_time'];
                              $event_end_time=$_POST['event_end_time'];
							  $event_description=mysqli_escape_string($db->link,$_POST['event_description']);
							  $file=$_FILES['event_image']['name'];
							  $temp_file=$_FILES['event_image']['tmp_name'];
							  $main_image="images/".$file;

							  if(!empty($file)){
                                move_uploaded_file($temp_file,$main_image);
                                $update_query="update club_event
                                               set
                                               event_title='$event_title',
                                               event_start_date='$event_start_date',
                                               event_end_date='$event_end_date',
                                               event_start_time='$event_start_time',
                                               event_end_time='$event_end_time',
                                               event_description='$event_description',
                                               event_image='$main_image'
                                               where id='$edit_clubid'";

								$update_club=$db->update($update_query);
								if($update_club){
									echo "<script>alert('update success')</script>";
								}else{
									echo "<script>alert('something wrong')</script>";

								}

							  }else{

                                $update_query="update club_event
                                set
                                event_title='$event_title',
                                event_start_date='$event_start_date',
                                event_end_date='$event_end_date',
                                event_start_time='$event_start_time',
                                event_end_time='$event_end_time',
                                event_description='$event_description'
                                where id='$edit_clubid'";

                 $update_club=$db->update($update_query);
                 if($update_club){
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
						 $select_query="select  club_event.*,clublist.club_name,clublist.club_title
                         from club_event
                         inner join clublist on club_event.club_id=clublist.id 
                         where club_event.id=$edit_clubid ";
					    $read_club_event=$db->select($select_query);
						if($read_club_event){
							
							while($result_club_event=$read_club_event->fetch_assoc()){			
							
                                 
                                 
                                 
                                 ?>
							   <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event Title</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $result_club_event['event_title']; ?>" class="form-control1" name="event_title"  placeholder="Event Title" required>
									</div>
								</div>

                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event Start Date</label>
									<div class="col-sm-8">
										<input type="date" value="<?php echo $result_club_event['event_start_date']; ?>" class="form-control1" name="event_start_date"  placeholder="Create club" >
									</div>
								</div>


								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event End Date</label>
									<div class="col-sm-8">
										<input type="date" value="<?php echo $result_club_event['event_end_date']; ?>" class="form-control1" name="event_end_date"  placeholder="Create club" >
									</div>
								</div>


                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event Start Time</label>
									<div class="col-sm-8">
										<input type="time" value="<?php echo $result_club_event['event_start_time']; ?>" class="form-control1" name="event_start_time"  placeholder="Create club" >
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event End Time</label>
									<div class="col-sm-8">
										<input type="time" value="<?php echo $result_club_event['event_end_time']; ?>" class="form-control1" name="event_end_time"  placeholder="Create club" >
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event Description</label>
									<div class="col-sm-8">
										<textarea name="event_description" class="form-control1" id="" cols="30" rows="10"><?php echo $result_club_event['event_description']; ?></textarea>
									</div>
								</div>

                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <img style="width:100px;height:100px" src="<?php echo $result_club_event['event_image']; ?>" />
                                    </div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event image</label>
									<div class="col-sm-8">
										<input type="file"  class="form-control1" name="event_image"  placeholder="Event Image" >
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