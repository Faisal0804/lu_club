<?php 
include '../lib/session.php' ;
Session::checkSession();

?>


<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="dashboard.php">LU Club Management System</a></h1>
							</div>

							<?php
						if(isset($_GET['action'])){
							
							Session::destroy();
							header("Location:./index.php");
						}
						
						
						
						
						
						
					

					?>
				
						
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/User-icon.png" alt=""> </span> 
												<div class="user-name">
													<p>Welcome</p>
													<span><?php echo $_SESSION['fname'];?>  <?php echo $_SESSION['lname'];?></span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-lock"></i> Setting</a> </li> 
											<li> <a href="?action=logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>