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
				  $delete_query=" delete from club_pst where id='$deleteid' ";
				  $delete_post=$db->delete($delete_query);
				  if($delete_post){
					echo "<script>alert('club delete success!')</script>";

				  }else{
					echo "<script>alert('something went wrong!')</script>";
				  }
				
				
				?>