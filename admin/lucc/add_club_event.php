<?php include "lib/database.php" ?>
<!DOCTYPE HTML>
<html lang="bn">
<head>
<title>Admin Create Club</title>

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
  	       <h3>Create Club</h3>
  	        	  <div class="errorWrap"><strong>ERROR</strong></div>
			<div class="succWrap"><strong>SUCCESS</strong></div>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
                        <?php 
						//club insert
						 $db=new database();

						  if(isset($_POST['submit'])){

							 $clubid=$_POST['club_id'];
							  $event_description=mysqli_escape_string($db->link,$_POST['event_description']);
                              $event_title=$_POST['event_title'];
                              $event_date=$_POST['event_date'];
                              $event_time=$_POST['event_time'];
							  $file=$_FILES['event_image']['name'];
							  $temp_file=$_FILES['event_image']['tmp_name'];
							  $main_image="images/".$file;

							  move_uploaded_file($temp_file,$main_image);

							  if(empty($clubid) || empty($event_description)){
								echo "field must not be empty";
							  }else{
								$insert_query="insert into club_event(club_id,event_title,event_image,event_date,event_time,event_description) 
                                values('$clubid','$event_title','$main_image','$event_date','$event_time','$event_description')";
								$insert_club=$db->insert($insert_query);
								if($insert_club){
									echo "<script>alert('insert success')</script>";
								}else{
									echo "<script>alert('something wrong')</script>";

								}

                             }



						 }


						
						
						
						?>

							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							  
								
							   <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Club Name</label>
									<div class="col-sm-8">
										<select name="club_id" id="">

                                           <?php
                                            $selectclub="select * from clublist where club_name='lucc'";
                                            $readclub=$db->select($selectclub);
                                            if($readclub){
                                                while($result_club=$readclub->fetch_assoc()){
                                            
                                           
                                           ?>
                                            <option value="<?php echo $result_club['id'];?>"><?php echo $result_club['club_name'];?></option>
                                           <?php }}?> 
                                        </select>
									</div>
								</div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event Title</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="event_title"  placeholder="Create club" >
									</div>
								</div>

                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event date</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" name="event_date"  placeholder="Create club" >
									</div>
								</div>

                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Event Time</label>
									<div class="col-sm-8">
										<input type="time" class="form-control1" name="event_time"  placeholder="Create club" >
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">event description</label>
									<div class="col-sm-8">
										<textarea name="event_description" id="" cols="30" rows="10">

                                        </textarea>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Club image</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="event_image"  placeholder="Create club" >
									</div>
								</div>

								



								<button type="submit" name="submit" class="btn-primary btn">Create</button>

								
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
