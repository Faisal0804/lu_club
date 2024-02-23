<?php include "lib/database.php" ?>
<?php 	$db=new database(); ?>

<!DOCTYPE HTML>
<html lang="bn">
<head>
<title>LU Club | Club Manage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Manage Packages</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				

				
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Manage LUSSC Team</h2>
					    <table id="table">
						<thead>
						  <tr>
						  <th>#</th>
							<th>Member Name</th>
                            <th>Member Designation</th>
                            <th>Member Image</th>
                            <th>Action</th>
						  </tr>
						</thead>
						<tbody>

						<?php 
						$select_query="select  club_team.*,clublist.club_name,clublist.club_title
						from club_team
						inner join clublist 
						on club_team.club_id=clublist.id
						where clublist.club_name='lussc' ";

						$read_club_team=$db->select($select_query);
						if($read_club_team){
							$i=0;
							while($result_club_team=$read_club_team->fetch_assoc()){			
								$i++;

						?>
	
						  <tr>
							<td><?php echo $i;?></td>
                            <td><?php echo $result_club_team['member_name']; ?></td>
                            <td><?php echo $result_club_team['member_designation']; ?></td>
							<td><img height="100px" width="100px" src="<?php echo $result_club_team['member_image'];?>" alt=""/></td>
							<td>
								<a href="edit_team.php?edit_clubid=<?php echo $result_club_team['id'] ;?>"><button type="button" class="btn btn-primary ">Edit</button></a>
								               ||
								<a href="delete_team.php?deleteclubid=<?php echo $result_club_team['id'] ;?>"><button onclick="alert('are you sure to delete!')" type="submit" class="btn  btn-danger">Delete</button></a>
						    </td>
						  </tr>
						  <?php }} ?>
						
						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>
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