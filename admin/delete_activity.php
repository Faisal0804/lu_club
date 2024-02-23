<?php include "lib/database.php" ?>
<?php 	$db=new database(); ?>
<?php 
				  //take reference key for delete
				 if(isset($_GET['deleteclubid'])){
					$deleteid=$_GET['deleteclubid'];
				 }
				
	?>

<?php
				  //php for club delete
				  $delete_query=" delete from club_activities where id='$deleteid' ";
				  $delete_activity=$db->delete($delete_query);
				  if($delete_activity){
					echo "<script>alert('Activity delete success!')</script>";

				  }else{
					echo "<script>alert('something went wrong!')</script>";
				  }
				
				
				?>