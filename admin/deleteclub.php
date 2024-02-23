<?php include "lib/database.php" ?>
<?php 	$db=new database(); ?>
<?php 
				  //take reference key for delete
				 if(isset($_GET['deleteclubid'])){
					$deleteclubid=$_GET['deleteclubid'];
				 }
				
	?>

<?php
				  //php for club delete
				  $delete_query=" delete from clublist where id='$deleteclubid' ";
				  $delete_club=$db->delete($delete_query);
				  if($delete_club){
					echo "<script>alert('club delete success!')</script>";

				  }else{
					echo "<script>alert('something went wrong!')</script>";
				  }
				
				
				?>