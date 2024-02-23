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
				  $delete_query=" delete from club_team where id='$deleteid' ";
				  $delete_team=$db->delete($delete_query);
				  if($delete_team){
					echo "<script>alert('club delete success!')</script>";

				  }else{
					echo "<script>alert('something went wrong!')</script>";
				  }
				
				
				?>