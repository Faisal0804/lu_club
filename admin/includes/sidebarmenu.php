<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">

						          
									<ul id="menu" >
									<?php if($_SESSION['usertype']=='LUSSC' ){
								
							
								    ?> 
										<li>
											<a href="dashboard.php"><i class="fa fa-tachometer"></i> 
											<span>Dashboard </span><div class="clearfix"></div>
											</a>
										</li>

										<?php }?>
										<?php if($_SESSION['usertype']=='admin' ){
								
							
							       	  ?> 
											
										 <li id="menu-academico" >
											<a href="#">
											 <i class="fa fa-list-ul" aria-hidden="true"></i>
												<span> Clubs Manage</span> 
												<span class="fa fa-angle-right" style="float: right">
												</span>
											 <div class="clearfix"></div>
											 </a>
												 <ul id="menu-academico-sub" class="text-capitalize">
												    <li id="menu-academico-avaliacoes" ><a href="create-club.php">Create Club</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage-clubs.php">Manage Club</a></li>
												 </ul>
										 </li>

										 <?php }?>

										 <?php if($_SESSION['usertype']=='admin' ){
								
							
								         ?> 


										 <li id="menu-academico" >
											<a href="#">
											 <i class="fa fa-list-ul" aria-hidden="true"></i>
												<span>IEEE</span> 
												<span class="fa fa-angle-right" style="float: right">
												</span>
											 <div class="clearfix"></div>
											 </a>
												 <ul id="menu-academico-sub" class="text-capitalize">
												    <li id="menu-academico-avaliacoes" ><a href="add_ieee_post.php">Club Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_ieee_post.php">Manage Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_ieee_event.php">Club Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_ieee_event.php">Manage Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_ieee_activity.php">Club Activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_ieee_activity.php">manage activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_ieee_team.php">club team</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_ieee_team.php">manage team</a></li>
												 </ul>
										 </li>

										 <?php }?>

										 <?php if($_SESSION['usertype']=='LUSSC' ){
								
							
								           ?> 

										 <li id="menu-academico" >
											<a href="#">
											 <i class="fa fa-list-ul" aria-hidden="true"></i>
												<span>LUSSC</span> 
												<span class="fa fa-angle-right" style="float: right">
												</span>
											 <div class="clearfix"></div>
											 </a>
												 <ul id="menu-academico-sub" class="text-capitalize">
												    <li id="menu-academico-avaliacoes" ><a href="add_lussc_post.php">Club Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lussc_post.php">Manage Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lussc_event.php">Club Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lussc_event.php">Manage Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lussc_activity.php">Club Activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lussc_activity.php">manage activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lussc_team.php">club team</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lussc_team.php">manage team</a></li>
												 </ul>
										 </li>
										 <?php }?>


										 <?php if($_SESSION['usertype']=='admin' ){
								
							
								 ?> 

                   

							  <li id="menu-academico" >
								 <a href="#">
								  <i class="fa fa-list-ul" aria-hidden="true"></i>
									 <span>LUSSC</span> 
									 <span class="fa fa-angle-right" style="float: right">
									 </span>
								  <div class="clearfix"></div>
								  </a>
									  <ul id="menu-academico-sub" class="text-capitalize">
										 <li id="menu-academico-avaliacoes" ><a href="add_lussc_post.php">Club Post</a></li>
										 <li id="menu-academico-avaliacoes" ><a href="manage_lussc_post.php">Manage Post</a></li>
										 <li id="menu-academico-avaliacoes" ><a href="add_lussc_event.php">Club Event</a></li>
										 <li id="menu-academico-avaliacoes" ><a href="manage_lussc_event.php">Manage Event</a></li>
										 <li id="menu-academico-avaliacoes" ><a href="add_lussc_activity.php">Club Activities</a></li>
										 <li id="menu-academico-avaliacoes" ><a href="manage_lussc_activity.php">manage activities</a></li>
										 <li id="menu-academico-avaliacoes" ><a href="add_lussc_team.php">club team</a></li>
										 <li id="menu-academico-avaliacoes" ><a href="manage_lussc_team.php">manage team</a></li>
									  </ul>
							  </li>
							  <?php }?>

							  <?php if($_SESSION['usertype']=='admin' ){
                               ?>
										 <li id="menu-academico" >
											<a href="#">
											 <i class="fa fa-list-ul" aria-hidden="true"></i>
												<span>LUSC</span> 
												<span class="fa fa-angle-right" style="float: right">
												</span>
											 <div class="clearfix"></div>
											 </a>
												 <ul id="menu-academico-sub" class="text-capitalize">
												    <li id="menu-academico-avaliacoes" ><a href="add_lusc_post.php">Club Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lusc_post.php">Manage Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lusc_event.php">Club Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lusc_event.php">Manage Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lusc_activity.php">Club Activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lusc_activity.php">manage activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lusc_team.php">club team</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lusc_team.php">manage team</a></li>
												 </ul>
										 </li>

										 <?php }?>

										 <?php if($_SESSION['usertype']=='LUSC' ){
                               ?>
										 <li id="menu-academico" >
											<a href="#">
											 <i class="fa fa-list-ul" aria-hidden="true"></i>
												<span>LUSC</span> 
												<span class="fa fa-angle-right" style="float: right">
												</span>
											 <div class="clearfix"></div>
											 </a>
												 <ul id="menu-academico-sub" class="text-capitalize">
												    <li id="menu-academico-avaliacoes" ><a href="add_lusc_post.php">Club Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lusc_post.php">Manage Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lusc_event.php">Club Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lusc_event.php">Manage Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lusc_activity.php">Club Activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lusc_activity.php">manage activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lusc_team.php">club team</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lusc_team.php">manage team</a></li>
												 </ul>
										 </li>

										 <?php }?>

										 <li id="menu-academico" >
											<a href="#">
											 <i class="fa fa-list-ul" aria-hidden="true"></i>
												<span>LUCuC</span> 
												<span class="fa fa-angle-right" style="float: right">
												</span>
											 <div class="clearfix"></div>
											 </a>
												 <ul id="menu-academico-sub" class="text-capitalize">
												    <li id="menu-academico-avaliacoes" ><a href="add_lucuc_post.php">Club Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lucuc_post.php">Manage Post</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lucuc_event.php">Club Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lucuc_event.php">Manage Event</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lucuc_activity.php">Club Activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lucuc_activity.php">manage activities</a></li>
													<li id="menu-academico-avaliacoes" ><a href="add_lucuc_team.php">club team</a></li>
													<li id="menu-academico-avaliacoes" ><a href="manage_lucuc_team.php">manage team</a></li>
												 </ul>
										 </li>


										<li id="menu-academico" ><a href="#">
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>Manage Users</span>
											<span class="fa fa-angle-right" style="float: right">
											</span>
										<div class="clearfix"></div>
										</a>
											<ul id="menu-academico-sub" class="text-capitalize">
												<li id="menu-academico-avaliacoes" ><a href="manage_user.php">Manage Users</a></li>
											</ul>
										</li>
									
									
								  </ul>
								
								</div>
							  </div>