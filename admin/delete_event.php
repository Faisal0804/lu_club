<?php include "lib/database.php" ?>
<?php 	$db=new database(); ?>
<?php 
				  //take reference key for delete
				 if(isset($_GET['deleteclubid'])){
					$deleteid=$_GET['deleteclubid'];
				 }
				
	?>

<?php
				  //php for delete club event
				  $delete_query=" delete from club_event where id='$deleteid' ";
				  $delete_event=$db->delete($delete_query);
				  if($delete_event){
					echo "<script>alert('delete success!')</script>";

				  }else{
					echo "<script>alert('something went wrong!')</script>";
				  }
				
				
				?>